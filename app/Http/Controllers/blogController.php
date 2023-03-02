<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class blogController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(\App\Models\Blog $blogs, Request $request)
    {
        // $blogs = $blogs->blog($id);
        $blogs = DB::table('blogs')->get();
        $id = ($request->blog)-3;

        return view('blogs.show', compact('blogs', 'request', 'id'));
    }

    public function edit(\App\Models\Blog $blogs)
    {
        return view('blogs.edit', compact('blogs'));
    }

    public function store(\App\Models\Blog $blog, Request $request)
    {
        $data = request()->validate([
            'name' => 'required',
            'category' => 'required',
            'description' => 'required',
        ]);

        // $blog = auth()->user();
        // $blog->name = $request->name?$request->name : $blog->name;
        // $blog->category = $request->category?$request->category : $blog->category;
        // $blog->description = $request->description?$request->description : $blog->description;
        // $blog->save();

        $blog = $blog->blog()->create($data);

        return redirect('/blog');
    }
}
