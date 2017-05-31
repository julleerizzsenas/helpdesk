<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Tag;
use App\Post;
use App\Comment;
use App\Reply;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['show']);
    }

    public function index()
    {

        $posts = Post::latest()
            ->filter(request(['month', 'year']))
            ->get();
        
        $totalposts = Post::count('id');
        $totalcomments = Comment::count('id');
        $totaltags = Tag::count('id');
       
        return view('pages.dashboard',compact('posts', 'totalposts','totalcomments', 'totaltags'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags = Tag::pluck('name');

        return view('pages.create',  compact('tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());

        $this->validate($request,[
            'topicname' => 'required',
            'description' => 'required',
            'tags' => 'required'
            ]);

        $tag = Tag::create(['name' => $request->get('tags')]);

        $post = Post::create([
                                'topicname' => $request->get('topicname'),
                                'description' => $request->get('description'),
                                'user_id' => auth()->user()->id,
                                'image' => 'test.jpg',
            ]);

        $post->tags()->attach($tag->id);

        if($post)
        {
            
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
        // Post::join('comment', 'comment.post_id', '=', 'posts.id')
        //     ->groupBy('posts.id')
        //     ->get(['posts.*', Post::raw('count(*) as comments_count')]);

        return view('layouts.filter', compact('post'));
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
