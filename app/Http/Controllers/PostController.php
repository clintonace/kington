<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Like;
use App\Post;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\Finder\Finder;

class PostController extends Controller
{




    public function like(Post $post, $id,  Request $request)
    {

        if (Like::where('user_id','=', Auth::user()->id)->where('post_id','=',$id )->exists()) {
            return back();
        }

        $post = Post::find($id);
        $like = new Like();
        $like->like = 'this was liked';
        $like->user_id = Auth::user()->id;
        $post->like()->save($like);
        return back();
    }

    public function getLikesByPost($id)
    {

        $like = Post::find($id)->like;
        return $like;
    }


    public function getCommentsByPost(Comment $comment, $id)
    {

        $comment = Post::find($id);

         dd($comment);
    }

    public function add()

    {
        $posts = Auth::user()->users;

        return view('addpost', compact('posts'));
    }
}
