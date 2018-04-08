<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RegisterController extends Controller
{
    public function create()
    {
    	return view('registration.create');
    }
    public function store()
    {
    	// Validate Form Data
    	$this->validate(request(),[
    		'name'=>'required',
    		'email'=>'required',
    		'password'=>'required|confirmed',
    		'PhoneNumber'=>'required'
    	]);

    	// Create and Save the User
    	//$user = User::create(request(['name','email','password','PhoneNumber']));
    	$user = User::create([
    		'name'=>request('name'),
    		'email'=>request('email'),
    		'password'=>bcrypt(request('password')),
    		'PhoneNumber'=>request('PhoneNumber')]
    	);
    	// Sign in user
    	auth()->login($user);

    	// Redirect to the Home Page
    	return redirect()->home();
    }
}
