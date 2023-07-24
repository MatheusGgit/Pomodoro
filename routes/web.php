<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Timer;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect('index');
});

Route::get('/index', [Timer::class, 'getTime']);
Route::get('/index/c', [Timer::class, 'addTime']);
Route::get('/index/p', [Timer::class, 'getTime']);
Route::get('/index/config', [Timer::class, 'config']);
Route::get('/index/volumeUp', [Timer::class, 'getTime']);

Route::get('/counter', function () {
    return view('counter');
});
