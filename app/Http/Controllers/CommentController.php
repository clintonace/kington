<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{

    public function comment(Post $post,$id,Request $request){

        $post=Post::find($id);
        $comment = new Comment();
        $comment ->comment = $request->comment;
        $comment ->user_id = Auth::user()->id  ;
        $post->comment()->save($comment);
        return back();

    }

}
