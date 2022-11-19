<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
class ItemsController extends Controller {
   static function items(){
		$items = Item::all();
		return $items;
	}

	static function details() {
		return view('/detail')	;
	}
}
