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

Route::get('/', function () {
    return 'hello world';
});

Route::get('/firstname', function () {
    return 'Vano';
});

Route::get('/lastname', function () {
    return 'Kukutchanashvili';
});

Route::get('/age', function () {
    return '21';
});

Route::get('/hobby', function () {
    return 'F1';
});

Route::post('/save', function () {
    return response()->json([
        "msg" => "Saved!"
    ]);
});