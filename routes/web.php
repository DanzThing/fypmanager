<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeControl;
use App\Http\Controllers\adminControl;
use App\Http\Controllers\svControl;
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

Route::get('/', [homeControl::class,'index']);

Route::get('/redirect', [homeControl::class, 'redirectFunct']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/logout', function()
{
    auth()->logout();

    return Redirect::to('/');
})->name('logout');

Route::get('del/{id}', [adminControl::class,'delete']);
Route::POST('edita', [adminControl::class, 'update']);
Route::view('projectform','user.admin.projectform');
Route::POST('add', [adminControl::class,'addData']);
Route::get("projectlist",[adminControl::class,'show']);
Route::get("upda/{id}",[adminControl::class,'showStud']);

Route::get("svprojectlist",[svControl::class,'show']);
Route::get("upd/{id}",[svControl::class,'showStud']);
Route::POST("edit",[svControl::class,'update']);
