<?php

namespace App\Http\Controllers;

use App\Tag;
use App\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::latest()
            ->filter(request(['month', 'year']))
            ->paginate(5);

        $tags = Tag::distinct()->select('name')
                ->get();

        return view('home', compact('posts', 'tags'));      
    }

    public function show(Post $post)
    {
        return view('layouts.show_post', compact('post'));
    }
    
}
