<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\mycontrollerlogin;
use App\Http\controllers\mycontrollersignup;
use App\Http\controllers\aircontroller;
use App\Http\controllers\bus;
use App\Http\controllers\train;
use App\Http\controllers\buscontroller;
use App\Http\controllers\dataStoreController;
use App\Http\controllers\contactcontroller;
use App\Http\controllers\signupcontroller;
use App\Http\controllers\upload;
use App\Http\controllers\contact;
use App\Http\controllers\hoteldetails;
use App\Http\controllers\busdetails;

Route::get('/tours', function () {
    return view('destinations');
});
Route::get('/index', function () {
    return view('index');
});
Route::get('/rating', function () {
    return view('feedback');
});
Route::get('/profile', function () {
    return view('portfolio');
});
Route::get('/game', function () {
    return view('games');
});
Route::get('/hangman', function () {
    return view('hangman');
});
Route::get('/b', function () {
    return view('bubbleshotter');
});
Route::get('/save', function () {
    return view('save');
});
Route::get('/cross', function () {
    return view('cross');
});

// Route::post("demo",[User::class,'getData']);
Route::get('/error', function () {
    return view('error');
});
Route::get('/shop', function () {
    return view('shop');
});

Route::get('/bus', function () {
    return view('bus');
});
Route::get('/train', function () {
    return view('train');
});
Route::get('/sort', function () {
    return view('sort');
});

Route::get('/shop', function () {
    return view('shop');
});
// Route::get('/bus',[buscontroller::class,'index']);
Route::get('/air',[aircontroller::class,'index']);
Route::get('/choosebus',[bus::class,'index']);
Route::get('/choosetrain',[train::class,'index']);
Route::get('/contacts',[contactcontroller::class,'create']);
Route::post('/contacts/store',[contactcontroller::class,'store']);
Route::get('/contact',[contact::class,'create']);
Route::post('/contact/store',[contact::class,'store']);
Route::post('/hotel/store',[hoteldetails::class,'store']);
Route::post('/bus/store',[busdetails::class,'store']);

Route::get('/flight', function () {
    return view('flight');
});
Route::get('/signups',[signupcontroller::class,'create']);
Route::post('/signups/store',[signupcontroller::class,'store']);

Route::get('/payment', function () {
    return view('payment');
});

Route::get('/travel', function () {
    return view('travel');
});
Route::view('fileupload','fileupload');
Route::post('fileupload',[upload::class,'index']);

Route::get('/', function () {
    return view('');
});
// Route::get('/', function () {
//     return view('');
// });
Route::get('/package', function () {
    return view('package');
});
Route::get('/busselect', function () {
    return view('busselect');
});
// Route::get('/', function () {
//     return view('');
// });
Route::get('/transport', function () {
    return view('transport');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/hdetails', function () {
    return view('hotel-single');
});
Route::get('/hotel', function () {
    return view('hotel');
});
Route::get('/hotelroom', function () {
    return view('hotelroom');
});
Route::get('/hotel3', function () {
    return view('hotel3');
});
Route::get('/hotel2', function () {
    return view('hotel2');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/bdetails', function () {
    return view('blogsingle');
});
Route::get('/blog', function () {
    return view('blog');
});

Route::get('/d', function () {
    return view('destinations');
});
Route::get('/card', function () {
    return view('card');
});
Route::get('/snake', function () {
    return view('snakes');
});
