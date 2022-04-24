<?php

use App\Http\Controllers\PagesController;
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

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/users/{id}/{name}', function($name, $id){
//     return 'Name is '.$name.' with id '.$id;
// });

// Route::get('/', 'PagesController@index');
Route::get('/', [PagesController::class, 'index']);
Route::get('/about', [PagesController::class, 'about']);
Route::get('/services', [PagesController::class, 'services']);

Route::resource('posts', 'App\Http\Controllers\PostsController');
//Route::get('/create', [PostsController::class, 'create']);
Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index']);
