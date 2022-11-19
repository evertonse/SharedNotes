<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Http\Controllers\PagesController;

Route::get('/', function() {
	return  PagesController::index();
});

/* ------ LOGIN ------ */
Route::get('/product/{id}', function ($slug) {
	return  PagesController::product($slug);
});

/* ------ User Home Page ------ */
Route::get('/home', function () {
	return view('/shop/home');
});
/* ------ Mail Page ------ */
Route::get('/mail', function () {
	return view('/shop/learn/mail');
});

/* ------ Mail Page ------ */
Route::get('/login', function () {
	return view('/shop/login');
});



// whatever is in user will get past to $user	
Route::get('/{user}', function ($user) {
	if ($user == 'excyber') {
		return view("welcome");
	}

	echo "/history/{user}" /
	$path = __DIR__ . "/.../resources/shop/history/{$user}";

	$content = file_get_contents($path);

	// dump and die
	if (!file_exists($path)) {
	}

	return view($content);
})->where('user', '[a-z]+');


// whatever is in user will get past to $user	
Route::get('/tutorial/{extrathings}', function ($extra) {
	$data = [
		'title' => $extra,
		'array' => [
			['head','body','descprition'],
			['head2','body2','descprition2']
		]
	];
	
	return view("/tutorial/array" , $data);

})->where('user', '[a-z]+');



