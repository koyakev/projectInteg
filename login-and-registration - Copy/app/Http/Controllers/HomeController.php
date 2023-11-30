<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(){
		$user = DB::table('users')->get();
		return view('home.index', compact('user'));
	}
}
