<?php

namespace App\Http\Controllers;

use App\Models\Note;
use App\Models\Comment;
use Illuminate\Http\Request;

class NotesController extends Controller
{
	static public function create()
	{
		return view('notes.create');
	}

	static public function store()
	{

		$attr = request();
		$user = auth()->user();
		
		
		if ($user == null) {
			$owner = "anonymous";
			$id_owner = -1;
		}
		
		else{
			$owner = $user->name;
			$id_owner = $user->id;
		}
		
		$note_data = [
			'title' 			=> $attr['title'],
			'tags' 				=> $attr['tags'],
			'owner' 			=> $owner,
			'id_owner' 		=> $id_owner,
			'description' => $attr['description'],
			'content' 		=> "",
			'reads' 			=> 0,
			'votes' 			=> 0,
		];
		
		$note = Note::create($note_data);
		
		
		session()->flash('sucess', 'Note created with success');
		//return redirect('/view/'.$note->id);
		return redirect('/edit/'.$note->id);
	}   //
	
	static public function get_edit($id)
	{
		$note = Note::where('id','=', $id)->first();
		$comments = Comment::where('id_note', '=', $note->id)->get();

		return view('notes.edit',  [
			'note' => $note,
			'comments' => $comments
		]);
	}
	
	static public function post_edit($id)
	{
		
		$attr = request();

		$user = auth()->user();
		
		if ($user == null) {
			$owner = "anonymous";
		}
		else{
			$owner = $user->name;
		}
		
		
		$note = Note::where('id','=', $id)->first();
		$note->title = $attr['title'];
		$note->content = $attr['content'];
		$note->owner = $owner;
		$note->save();

		session()->flash('sucess', 'Note created with success');
		//return redirect('/view/'.$note->id);
		return redirect('/view/'.$note->id);
	}
	
	static public function get_view($id) {
		
		
		$note = Note::where('id', '=', $id)->first();
		$comments = Comment::where('id_note', '=', $note->id)->get();
		return view('notes.view', 
			[ 'note' => $note,
				'comments' => $comments
			]);
	}
	
	static public function post_view($id) {


		$attr = request();

		$user = auth()->user();
		
		$content = $attr['content'];
		
		if ($user == null) {
			$owner = "anonymous";
			$id_owner = -1;
		} else {
			$owner = $user->name;
			$id_owner = $user->id;
		}
		$id_note = $attr['id_note'];


		$comment = new Comment;
		$comment->id_user	= $id_owner;
		$comment->owner 		= $owner;
		$comment->id_note 	= $id_note;
		$comment->content 	= $content;
		$comment->save();

		return redirect('/view/'.$id_note);
	}
}
