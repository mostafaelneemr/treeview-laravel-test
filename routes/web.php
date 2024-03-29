<?php

use App\Http\Controllers\MenuController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('menus', [MenuController::class, 'index']);
Route::get('menus-show', [MenuController::class, 'show']);
Route::post('menus', [MenuController::class, 'store'])->name('menus.store');
