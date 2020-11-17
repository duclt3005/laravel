<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AvatarController extends Controller
{
    //
    public function index()
    {
        return view('avatar');
    }
    public function upload(Request $request)
    {
        $fileName = $request->file('avatar')->getClientOriginalName();
        Storage::disk('public')->putFileAs('products',$request->file('avatar'),$fileName);
        //$path = Storage::putFile('images', $request->file('avatar'));
    }
}
