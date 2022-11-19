<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ItemsController;

class PagesController extends Controller {
   static function index() {
		return view('/shop/home',
			['items'=> ItemsController::items()]
		);
	}

	static function product() {
		return view('/shop/product_detail')	;
}
}
