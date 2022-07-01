<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\PostsController;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Laravel\Jetstream\Rules\Role;

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

Route::get('blogs/{id}',[PostsController::class, 'destroy'])->name('posts.destroy');


Route::resource('blogs', App\Http\Controllers\PostsController::class);
//Route::resource('blogs', App\Http\Controllers\CommentsController::class);

//posts
Route::post('postinsert', [PostsController::class, 'store']);
Route::post('commentinsert', [CommentsController::class, 'store']);


Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        $data = DB::table('users')->get();
        return view('dashboard', compact('data'));
    })->name('dashboard');
});
