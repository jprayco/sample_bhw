<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AddRecord extends Controller
{
    //

    public function store(){
        session(request()->all());
        Session::put('hasFamily','true');
        $data=Session::all();
     return view('record1',['data'=>$data]);
    }

}
