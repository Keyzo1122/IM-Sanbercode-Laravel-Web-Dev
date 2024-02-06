<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CastController;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\GenreController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

// Route::get('/', [HomeController::class, 'home']);
// Route::get('/register', [AuthController::class, 'register']);
// Route::post('/welcome', [AuthController::class, 'welcome']);

// Route::group(['middleware' => ['auth']], function () {
// });
Route::get('/', function() {
    return view('pages.dashboard');
});
Route::get('/table', function() {
    return view('pages.table');
});
Route::get('/data-tables', function() {
    return view('pages.datatable');
});


Route::resource('cast', CastController::class);
Route::resource('genre', GenreController::class);
Route::resource('film', FilmController::class);

Auth::routes();
