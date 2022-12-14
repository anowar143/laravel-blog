<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users;
use App\Http\Controllers\UsersController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!

 */

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::view("/contact", 'contact');

// if u want to redirect a page instead home page
/* Route::get('/', function() {
    return redirect('about');
}); */


// call from controller
// Route::get("users/{user}", [Users::class, 'index']);


// call from Header

// Route::view("/users", 'users');

Route::get("/users", [UsersController::class, 'viewload']);