<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Image;

class PostStoreController extends Controller
{
    public function stor(Request $request)
    {

        $ext=$request->file('image')->getClientOriginalExtension();
        $filename= \Str::slug($request->title).time().'.'.$ext;
        $request->image->move(public_path('postimage'), $filename);


        $store = new Post();
        $store->title = $request->title;
        $store->user_id = Auth::user()->id;
        $store->messeges = $request->messeges;
        $store->image = $filename;
        $store->save();
        return redirect('/blog-area');
    }


}
