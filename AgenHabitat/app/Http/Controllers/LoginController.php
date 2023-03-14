<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(){
        return view('administratif.login');
    }


    public function ValiderLogin(Request $request){

        $request->validate([
            'email'=>'required',
            'passwod'=> 'required'
        ]);
        $credentials =$request->only('email','password');
        if(Auth::attempt($credentials)){
            return redirect('administratif.index');
        }
        return view('administratif.login')->with('success','Login details are note valide');

    }

}
