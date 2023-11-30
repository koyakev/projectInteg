<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transactions;

class TransactionsController extends Controller
{
    public function index(){
		return view('ihm.index');
	}
	
	public function product1(){
		return view('ihm.product1');
	}
	
	public function product2(){
		return view('ihm.product2');
	}
	
	public function store(Request $request){
		$request->validate([
			'customer' => 'required',
			'contact' => 'required',
			'address' => 'required',
		]);
		
		Transactions::create($request->all());
		
		return view('ihm.index');
	}
}
