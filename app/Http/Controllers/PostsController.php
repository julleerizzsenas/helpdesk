<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Tag;
use App\Post;
use App\Comment;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $posts = Post::all();
        $totalposts = count($posts);

        $comments = Comment::all();
        $totalcomments = count($comments);

        $tags = Tag::all();
        $totaltags = count($tags);

        return view('pages.dashboard',compact('posts', 'totalposts', 'totalcomments', 'totaltags'));
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
                                'user_id' => auth()->user()->id,
                                'image' => 'test.jpg',
            ]);

        if($post)
        {
            $tag = Tag::create([
                                'post_id' => $post->id,
                                'name' => $request->get('tags'),
                                'user_id' => auth()->user()->id
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
        $comments = Comment::where('post_id', '<=', $post)->get();
        $tcomments = count($comments);

        $tags = Tag::all();
        $ttags = count($tags);

        return view('pages.show', compact('post', 'tcomments', 'ttags'));
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
