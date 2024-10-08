<?php

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

//ADMIN ROUTES BELOW !!!

Route::get('admin/dashboard/',function (){
    return view('admin/dashboard');
});




//USER ROUTES BELOW !!!

Route::get('homepage', function(){
    return view('user/home');
})->name('home');;