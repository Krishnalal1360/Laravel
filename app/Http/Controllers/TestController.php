<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    public function template1(){
        //
        return view('blade.template1');
    }
    //
    public function template2(){
        //
        return view('blade.template2');
    }
    //
    public function template3(){    
        //
        return view('blade.template3');
    }
    //
    public function template4(){
        //
        return view('blade.template4');
    }
    //
    public function template5(){
        //
        return view('blade.template5');
    }
    //
    public function template8(string $name, string $role){
        //
        return view('blade.template8', compact('name', 'role'));
    }
}
