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
use App\Http\Controllers\LoginController;
use App\Http\Controllers\NotesController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\RegisterController;

Route::get('/', function() {
	return  PagesController::index();
});




/*>> ------ LOGIN & REGISTER ------ */
Route::get('/logout', function() {
	return  LoginController::logout();
})->middleware('auth');

Route::get('/login', function() {
	return  LoginController::create();
})->middleware('guest');

Route::post('/login', function() {
	return  LoginController::store();
})->middleware('guest');;


Route::get('/register', function() {
	return  RegisterController::create();
})->middleware('guest');

Route::post('/register', function() {
	return  RegisterController::store();
})->middleware('guest');;
/*<< ------ LOGIN & REGISTER ------ */


/*>> ------ Notes  ------ */
Route::get('/create', function() {
	return NotesController::create();
});

Route::post('/create', function() {
	return NotesController::store();
});

Route::get('/edit/{id}', function($id) {
	return NotesController::get_edit($id);
});

Route::post('/edit/{id}', function($id) {
	return NotesController::post_edit($id);
});

Route::get('/view/{id}', function($id) {
	return  NotesController::get_view($id);
});


Route::post('/view/{id}', function($id) {
	return  NotesController::post_view($id);
});
/*<< ------ Notes  ------ */

Route::get('/profile/{id}', function($id) {
	return  PagesController::get_profile($id);
});