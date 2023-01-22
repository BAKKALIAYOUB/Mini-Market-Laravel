<?php

namespace App\Http\Controllers;
use App\Models\Client;

use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function login1(){
        return view('produitsAdmin');
    }
    
    public function login(Request $request1){
    
        $email = $request1->input("Email");
        $password = bcrypt($request1->input("Password"));
    
        $request1->validate([
            'Email' => 'required',
            'Password' => 'required'
        ]);
    
            if (Client::where('email', $email)->exists()) {
                // client with the given email exists
                return redirect()->route('produitsAdmin');
            } else {
                echo "no :/";
            }
            
        
    }

}

