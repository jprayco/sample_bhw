<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\CivilStatus;
use App\Models\FamilyRoles;
use App\Models\LgbtCategory;
use App\Models\Individuals;
use App\Models\PwdCategory;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    //
    public function index()
    {
        $persons = Individuals::paginate(8);
        return view('family', ['persons' => $persons]);
    }

    public function add()
    {
        if(session('address_id')===null){
            $addresses=Address::all();
        }else{
            $addresses=Address::find(session('address_id'));
        }
        $individuals=Individuals::where('family_code',session('family_code'))->get();
        /* dd(session('address_id')); */
        return view('family.index',['individuals'=>$individuals, 'addresses'=>$addresses]);
    }

    public function create()
    {
        $civil_status = CivilStatus::all();
        $pwd_categories = PwdCategory::all();
        $lgbt_categories = LgbtCategory::all();
        $family_roles = FamilyRoles::all();
        $address = request('address_id');
        session(['address_id'=>$address]);
      /*   dd($addresses); */
        return view('family.create', [
            'civil_status' => $civil_status,
            'pwd_categories' => $pwd_categories,
            'lgbt_categories' => $lgbt_categories,
            'family_roles' => $family_roles,
            'address' => $address
        ]);
    }

    public function store()
    {
        $attributes = $this->validate_person();

        if(session('family_code')===null){
            $family_code=uniqid('family_code-',true);
            session(['family_code'=> $family_code]);
        }else {
            $family_code=session('family_code');
        }

        $attributes['family_code'] = $family_code;
        $attributes['status'] = '0';
       /*  dd($attributes); */
        Individuals::create($attributes);
        return redirect(route('families.add'))->with('success', 'Successfully Added Individual!');
    }

    public function save(){
        session()->forget('family_code');
        session()->forget('address_id');
        return redirect(route('families'));
    }


    protected function validate_person()
    {
        return request()->validate([
            'first_name' => ['required'],
            'last_name' => ['required'],
            'gender' => ['required'],
            'bday' => ['required'],
            'contact_no' => ['required'],
            'civil_status_id' => ['required'],
            'pwd_categories_id' => ['required'],
            'lgbt_category_id' => ['required'],
            'address_id' => ['required']
        ]);
    }
}
