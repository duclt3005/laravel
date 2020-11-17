<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //
    public function login(Request $request){
        $username = $request->input('name');
        $password = $request->input('password');
        if(Auth::attempt(['name' => $username, 'password' => $password])){
            return redirect()->route('task');
        }
        else{
            return view('login', ['error'=>'dang nhap khong thanh cong']);
        }
    }
    public function signin(Request $request)
    {
        
        $validatedData = $request->validate([
            'name' => 'required',
            'email' =>'required',
            'password'=> 'required',
        ]);
        $user = new User();
        $user->name= $request->input('name');
        $user->email= $request->input('email');
        $user->password= Hash::make($request->input('password'));
        $user->save();
        return redirect('/task');
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/auth/login');
    }
}

