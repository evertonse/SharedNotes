<?php

namespace App\Http\Controllers;

use App\Models\Card;
use App\Models\Note;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\ItemsController;

class PagesController extends Controller {
	static private function contains($str, array $arr)
	{
		foreach ($arr as $a) {
			if (stripos($str, $a) !== false) return true;
		}
		return false;
	}
	
   static function index() {
		$search = request()->query('search');
		$words = explode(" ", strtolower($search));
		
		$notes = Note::all();
		$users = User::all();
		if (count($words) == 0 || $words[0] == 'all' | $words[0] == ''){
			return view('notes.search', [
				'search' => $search,
				'notes'	 => $notes,
				'users'	 => $users,
			]);
		}
		$user_filtered = [];
		$notes_filtered = [];
		
		foreach ($notes as $note) {
			$intersect = array_intersect(
				explode(" ", strtolower($note->title)),
				$words
			);
			if (count($intersect) > 0) {
				array_push($notes_filtered, $note);
			}
		}
		
		foreach ($users as $user) {
			$intersect = array_intersect(
				explode(" ", strtolower($user->name)),
				$words
			);
			if (count($intersect) > 0) {
				array_push($user_filtered, $user);
			}
		}

		return view('notes.search', [
			'search' => $search,
			'notes'	 => $notes_filtered,
			'users'	 => $user_filtered,
		]);
		dd($words);

	}
	static function edit($id) {
		return view('notes.edit', ['note' => Note::where( 'id','=', $id)->first()]);
	}

	static function get_profile($id) {
		# tihs is a comment
		$notes = Note::where('id_owner','=',$id)->get();
		$user = User::where('id','=',$id)->first();
		return view('profile.profile', [
				'notes' => $notes,
				'user' => $user
			]
		);
}
}
