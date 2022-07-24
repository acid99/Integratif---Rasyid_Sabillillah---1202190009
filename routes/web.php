<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;

use Vedmant\FeedReader\Facades\FeedReader;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/aggregrate/{rss_id}', [NewsController::class, 'aggregrate']);
Route::get('/', [App\Http\Controllers\FeedController::class, 'index']);

Route::get('/berita', function () {
    return view('berita');
});
Route::get('/berita', [App\Http\Controllers\BrController::class, 'index']);

Route::get('/market', function () {
    return view('market');
});
Route::get('/market', [App\Http\Controllers\MkController::class, 'index']);

Route::get('/tech', function () {
    return view('tech');
});
Route::get('/tech', [App\Http\Controllers\TcController::class, 'index']);

Route::get('/poke', function () {
    return view('poke');
});

Route::get('/etc', function () {
    return view('etc');
});