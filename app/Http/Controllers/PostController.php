<?php

namespace App\Http\Controllers;


use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class PostController extends Controller
{



    public function add()

    {
        $posts = Auth::user()->users;
     return view ('addpost', compact('posts'));
    }

}
