<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;

class LoginController extends Controller
{
	static public function create()
	{
		return view('login.login');
	}

	static public function store()
	{

		$attr = request()->validate(
			[
				'username' => 'required|exists:users,username',
				'password' => 'required',
			]
		);

		$result = auth()->attempt($attr);

		if($result == true){
			return redirect('/')->with('message', 'Logged in with success !');
		}

		return back()
			->withInput()
			->withErrors(['username' => 'provided credentials não bate !']);
	}
	
	static public function logout()
	{

		auth()->logout();

		return redirect('/')->with('message', 'Logged out with success !');
	}
}
