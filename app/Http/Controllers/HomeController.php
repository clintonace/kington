<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {


        if (Auth::user()->type == 'user') {
            return view('dash');
        } else {
            return view('admin/users/index');
        }
    }


    public function viewstudents()
    {

        $student = User::all();

        return view('admin/users/allstudents', compact('student'));
        
    }

    public function profile()
    {
        $posts = Auth::user()->users;
        return view('dashprofile', compact('posts'));
    }

    public function in()
    {


        return view('blog');
    }
}
