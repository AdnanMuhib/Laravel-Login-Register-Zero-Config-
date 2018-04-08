<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class HomeController extends Controller
{
    public function display()
    {
    	$users = DB::table('users')->get();
    	$myArray  = ['abc','def','ghi'];
    	return view('about',['users'=>$users]);
    }

    public function Index()
    {
    	return view('welcome');
    }
}
