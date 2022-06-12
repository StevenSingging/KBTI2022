<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    public function index(){
        return view('register');
    }

    public function simpanregistrasi (Request $request){
        //dd($request->all());
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'no_telp'=> $request->no_telp,
            'alamat'=> $request->alamat,
            'role' => $request->role,
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60)
        ]);

        return view('login');

    }
}
