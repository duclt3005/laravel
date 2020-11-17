<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    //
    public function index(){
        $news= User::paginate(5);
        return view('news', ['news'=>$news]);
    }
}
