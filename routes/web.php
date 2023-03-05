<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/show',[IndexController::class,'show']);
Route::get('/posts',[PostColntroller::class,'index']);
Route::get('/posts/create/',[PostColntroller::class,'create']);
Route::post('/posts/stor/', [PostColntroller::class,'stor']);
Route::get('/posts/edit/{id}',[PostColntroller::class,'edit']);
Route::put('/posts/update/{id}',[PostColntroller::class,'update']);
Route::delete('/posts/delete/{id}',[PostColntroller::class,'delete']);
