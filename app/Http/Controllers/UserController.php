<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        //
        $name = 'John Doe';
        $role = 'Administrator';
        //return view('template8', ['name' => 'John Doe', 'role' => 'Administrator']);
        return view('blade.template8', compact('name', 'role'));
    }
    //
    public function template8(Request $request, $name, $role)
    {
        //
        return view('blade.template8', compact('name', 'role'));
    }
}
