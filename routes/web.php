<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FigureController;

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

/*Route::get(
    '/figure',
    [FigureController::class, 'figure']
)->name('figure');*/

Route::match(
    ['get', 'post'],
    '/point',
    [FigureController::class, 'point']
)->name('point');

Route::match(
    ['get', 'post'],
    '/section',
    [FigureController::class, 'section']
)->name('section');

Route::match(
    ['get', 'post'],
    '/square',
    [FigureController::class, 'square']
)->name('square');

Route::match(
    ['get', 'post'],
    '/rectangle',
    [FigureController::class, 'rectangle']
)->name('rectangle');
