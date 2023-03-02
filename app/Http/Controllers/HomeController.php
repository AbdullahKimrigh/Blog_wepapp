<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

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

     public function index(\App\Models\Blog $Blogs)
     {
        //  $Blogs = blogs::get();
        // $Blogs =  auth()->user()->Blog;
        $Blogs = DB::table('blogs')->get();

         return view('home', compact('Blogs'));
        }
}
