<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthManager;
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
})->name('home');




Route::middleware(['auth'])->group(function () {
    Route::get('/inside',function(){
        return view('inside');
    })->name('inside'); 
});

Route::middleware(['admin'])->group(function () {

});

Route::get('/login',[AuthManager::class,'login'])->name('login');
Route::post('/login',[AuthManager::class,'loginPost'])->name('login.post');


Route::get('/logout',[AuthManager::class,'logout'])->name('logout');

Route::get('/im',[AuthManager::class,'image']);