<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
    public function show(){
        echo "hello user";
        $posts = User::all();
        //dd($posts);
        foreach ($posts as $post) {
            echo $post->name. "<br>";
        }
    }
    public function login(Request $request){
        $name = $request->name;
        $password = $request->password;
        $request->session()->put('key', $name);
        echo 'session'.$request->session()->get('key');
        //echo Auth::user();
        if(Auth::attempt(['name' => $name, 'password' => $password])){
            return view('thanhcong', ['user'=>Auth::user()]);
        }
        else{
            return view('dangnhap', ['error'=>"Dang nhap that bai"])  ; 
        }
    }
    public function logout(){
        Auth::logout();
        return view('dangnhap');
    }
}
