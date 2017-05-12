<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
	public function __construct()
	{
	    
	}

    public function create()
    {
    	return view('sessions.login');
    }

    public function index()
    {
        return view('layouts.master');
    }

    public function store(Request $request)
    {	
        if (! auth()->attempt(request(['email','password']))) 

        {
        	
           return back()->withErrors([
                'message' => 'Please check your credentials and try again.'
            ]);
        }

        return redirect()->home();
        
        
    }

    public function destroy()
    {
    	auth()->logout();

        return redirect()->home();
    }    
}
