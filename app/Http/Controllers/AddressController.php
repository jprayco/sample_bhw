<?php

namespace App\Http\Controllers;

use App\Models\Address;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    //

    public function index(){
        $addresses=Address::orderby('house_no')->paginate(8);
        return view('household', ['addresses'=>$addresses]);
    }

    public function create(){
        return view('household.create');
    }

    public function edit(Address $address){
        return view('household.edit',['address'=>$address]);
    }

    public function store(){
        $validated=$this->validate_address();

        Address::create($validated);
        return redirect(route('household'))->with('success', 'Successfully Added Address!');
    }

    public function update(Address $address)
    {
        $attributes = $this->validate_address($address);
        $address->update($attributes);
        return redirect(route('household'))->with('success', 'Successfully Updated Address!');
    }

    public function destroy(Address $address)
    {
        $address->delete();

        return back()->with('success', 'Successfully deleted Address!');
    }

    protected function validate_address(?Address $address = null): array
    {
        $address ??= new Address();

        return request()->validate([
            'house_no'=>['required'],
            'street'=>['required']
        ]);
    }
}
