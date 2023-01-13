<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Client;

class LoginController extends Controller
{
    public function create(){
        return view('Login');
    }

    public function store(){

        $request = request()->validate([
            'email' =>'required|email',
            'password' => 'required'
        ]);


        $client = Client::where('email' , $request["email"])->first();
        $password = Client::where('password' , $request["password"])->first();

        if ($client != null && $password != null){
            return view('test');
        }else{
            return back()->withErrors(['email' => 'These credentials do not match our records.']);
        }
    }
}
