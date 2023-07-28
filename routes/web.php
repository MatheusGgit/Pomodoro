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
Route::get('/index', [Timer::class, 'Time']);
Route::get('/index/c', [Timer::class, 'defineTime']);
Route::get('/index/c/{m}', [Timer::class, 'addTime']);
Route::get('/index/p', [Timer::class, 'Time']);
Route::get('/index/config', [Timer::class, 'config']);
Route::get('/index/edit', [Timer::class, 'editName']);

