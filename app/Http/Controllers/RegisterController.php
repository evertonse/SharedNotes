<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller {

  static public function create() {
		return view('register.register');
	}

	static public function store() {
		
		$attr = request()->validate([
			'name' => 'required',
			'username' => 'required|unique:users,username',
			'password' => 'required',
			]
		);
		
		$attr['password'] = bcrypt($attr['password']);
		$user = User::create($attr);
		
		auth()->login($user);
		
		session()->flash('sucess','account created with success'); 
		return redirect('/'); 
	}
}
