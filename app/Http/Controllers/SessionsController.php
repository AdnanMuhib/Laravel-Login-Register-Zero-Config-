<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
	public function destroy()
	{
			auth()->logout();
			return redirect()->home();
	}
	public function create()
	{
		return view('sessions.create');
	}
	public function store()
	{
		if (! auth()->attempt([
			'email'=>request('email'),
			'password'=>request('password')
		])) {
			return back()->withErrors(['message'=>'Check Your Credentials and Try Again']);
		}
		// Otherwise Return Back to Home Page
		return redirect()->home();
	}
}
