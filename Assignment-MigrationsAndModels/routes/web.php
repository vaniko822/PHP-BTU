<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuizController;

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

Route::get('/', [QuizController::class, 'index']);
Route::get('/quizzes/create', [QuizController::class, 'savePage']);
Route::get('/quizzes/{id}/update', [QuizController::class, 'savePage']);
Route::post('/quizzes', [QuizController::class, 'createOrUpdate']);

Route::get('/example-route', function () {
})->middleware('name.check');

Route::prefix('admin')->group(function () {
    Route::resource('posts', 'Admin\PostController');
});

Route::resource('comments', 'CommentController')->only(['index', 'destroy']);

Route::get('/', 'MainController@index');
Route::get('posts/{post}', 'MainController@show');