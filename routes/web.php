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
//    return view('welcome');
    return \Inertia\Inertia::render('Auth/Login');
});

Route::get('/welcome', function () {
//    return view('welcome');
    $user = ['name' => 'wa'];
    return \Inertia\Inertia::render('Welcome',[
        'user' => $user
    ]);
});

Route::get('/about', function () {
//    return view('welcome');
    $user = ['name' => 'wa'];
    return \Inertia\Inertia::render('About',[
        'user' => $user
    ]);
});

Route::get('/contact', function () {
//    return view('welcome');
    $user = ['name' => 'wa'];
    return \Inertia\Inertia::render('Contact',[
        'user' => $user
    ]);
});
