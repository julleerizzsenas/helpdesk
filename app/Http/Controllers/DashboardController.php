<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
	public function __construct()
	{
	    $this->middleware('auth');
	}

    public function index(Post $post)
    {

        return view('pages.dashboard', compact('post'));
    }
}
