<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageController;
use Illuminate\Support\Facades\DB;

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
    return view('main');
});

Route::match(
    ['get', 'post'],
    '/draw',
    [ImageController::class, 'draw']
)->name('draw');

Route::match(
    ['get', 'post'],
    '/getFigure',
    [ImageController::class, 'getFigure']
)->name('getFigure');

Route::match(
    ['get', 'post'],
    '/clearCanvas',
    [ImageController::class, 'clearCanvas']
)->name('clearCanvas');

Route::match(
    ['get', 'post'],
    '/saveImage',
    [ImageController::class, 'saveImage']
)->name('saveImage');

Route::get('/savedImages', function () {
    return view('savedImages', ['images' => DB::table('images')->latest()->get()]);
});

Route::match(
    ['get', 'post'],
    '/userImage/{imageId}',
    [ImageController::class, 'openUserImage']
)->name('openUserImage');

Route::match(
    ['get', 'post'],
    '/uploadImage',
    [ImageController::class, 'uploadImage']
)->name('uploadImage');
