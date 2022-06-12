<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    public function postlogin(Request $request){
        $input=$request->all();
        if(auth()->attempt(array('email' => $input['email'], 'password' => $input['password']))){
            if(auth()->user()->role=='Admin'){
                return redirect('adminregis');
            }else if(auth()->user()->role=='User'){
                return redirect('user');
            }
        }
        return redirect('login');
    }

    public function logout (Request $request){
        Auth::logout();
        return redirect('/')->with('logout','Anda berhasil logout');
    }
}
