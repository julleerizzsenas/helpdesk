<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Tag;
use App\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    public function index()
    {
        $posts = Post::all();

        return view('home', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $post = Post::create([
                                'topicname' => $request->get('topicname'),
                                'description' => $request->get('description'),
                                'user' => auth()->user()->id,
                                'image' => 'test.jpg',

            ]);

        if($post)
        {
            $tag = Tag::create([
                                'post_id' => $post->id,
                                'name' => $request->get('tags'),
                                'user' => auth()->user()->id
                                

            ]);

            //$tags = false;

            if($tag) 
            {
                session()->flash(
                    'message', 'Your post has now been published.');
                session()->flash(
                    'alert', 'alert alert-success');                

            }else
            {
                session()->flash(
                    'message', 'Your post has fail.');
                session()->flash(
                  'alert', 'alert alert-danger');                
            }


        }else{
            dd('Fail!');            
        }

                return redirect('/posts/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('pages.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
 
}
