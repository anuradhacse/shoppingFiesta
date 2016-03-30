<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class hello extends Controller
{

    public function index(){
        return "hoooo";
    }

    public function show($id){
        return view('hello',array('name'=>$id));
    }
}
