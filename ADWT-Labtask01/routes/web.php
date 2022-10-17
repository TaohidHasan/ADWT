<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
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

Route::get('/product', function () {
    return view('product');
});


Route::get('/teams',[HomeController::class,'index'])->name('home');

Route::get('/page/index/home',function(){
    return view('home');
});

Route::get('/aboutus',function(){
    return view('about');
});

Route::get('/teams',function(){
    return view('teams');
});

Route::get('/contact',function(){
    return view('contact');
});

// Route::get('/user',[UserController::class,'index'])->name('user.index');
