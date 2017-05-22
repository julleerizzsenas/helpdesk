<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Tags;
use App\Posts;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('layouts.dashboard');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = Posts::create([
                                'topicname' => $request->get('topicname'),
                                'description' => $request->get('description'),
                                'user' => auth()->user()->id,
                                'image' => 'test.jpg',

            ]);

        if($post)
        {
            $tags = Tags::create([
                                'post_id' => $post->id,
                                'name' => $request->get('tags'),
                                'user' => auth()->user()->id
                                

            ]);

            //$tags = false;

            if($tags) 
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

                return redirect('/create');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function show(Posts $posts)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function edit(Posts $posts)
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
    public function update(Request $request, Posts $posts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function destroy(Posts $posts)
    {
        //
    }
 
}
