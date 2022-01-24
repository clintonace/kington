<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Like;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    public function index()
    {
     $posts = Post::all();
     $blog = Auth::user()->id;
     return view('blog', compact('posts','blog'));
    }




    public function details($id,Request $request)
    {
        $posts=Post::find($id);
        $comment =Comment::all();
        return view('blogdetails',compact('posts','comment'));
    }

}
