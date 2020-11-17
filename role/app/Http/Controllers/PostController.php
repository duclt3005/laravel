<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function show($id)
    {
        $post = Post::find($id);
        //dd($post);
        $this->authorize($post, 'view');
        return view('post_show', ['post'=>$post]);
    }
}
