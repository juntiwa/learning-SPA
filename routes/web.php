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

Route::get('/basic-page-1',function (){
    return Inertia\Inertia::render('BasicPage');
});
Route::get('/basic-page-2',function (){
    \Inertia\Inertia::share('appName','customName');
    return Inertia\Inertia::render('BasicPage2');
});
Route::get('/basic-page-3',function (){
    return Inertia\Inertia::render('BasicPage3');
});
Route::post('/', function () {
    $user = \App\Models\User::query()->where('email', request()->email)->first();

    //Check password hash
    if (!$user || !\Illuminate\Support\Facades\Hash::check(request()->password, $user->password)) {
        //Invalid login username or password!
        return 'Invalid login username or password!';
    } else {
        //username & password matches
        \Illuminate\Support\Facades\Auth::login($user);
        return redirect()->route('shareData');
    }
    return $user;
})->name('login');

Route::get('/welcome', function () {
//    return view('welcome');
    $user = ['name' => 'wa'];
    return \Inertia\Inertia::render('Welcome', [
        'user' => $user
    ]);
})->middleware('auth');

Route::get('/about', function () {
//    return view('welcome');
    $user = ['name' => 'wa'];
    return \Inertia\Inertia::render('About', [
        'user' => $user
    ]);
})->middleware('auth');

Route::get('/contact', function () {
//    return view('welcome');
    $user = ['name' => 'wa'];
    return \Inertia\Inertia::render('Contact', [
        'user' => $user
    ]);
})->middleware('auth');

Route::get('/shareData', function () {
    $user = ['name' => 'wa'];

    return \Inertia\Inertia::render('ShareData', [
        'user' => $user
    ]);
})->name('shareData')->middleware('auth');

Route::post('/logout', function () {
    \Illuminate\Support\Facades\Auth::logout();
});

Route::get('/DeclarativeRendering', function () {
    return \Inertia\Inertia::render('Vue/DeclarativeRendering');
});

Route::get('/AttributeBindings', function () {
    return \Inertia\Inertia::render('Vue/AttributeBindings');
});

Route::get('/EventListeners',function (){
    return \Inertia\Inertia::render('Vue/EventListeners');
});

Route::get('/FormBindings',function(){
    return \Inertia\Inertia::render('Vue/FormBindings');
});

Route::get('/ConditionalRendering',function (){
    return \Inertia\Inertia::render('Vue/ConditionalRendering');
});

Route::get('/ListRendering',function (){
    return \Inertia\Inertia::render('Vue/ListRendering');
});

Route::get('/ComputedProperty',function (){
    return \Inertia\Inertia::render('Vue/ComputedProperty');
});

Route::get('/LifecycleandTemplateRefs',function (){
    return \Inertia\Inertia::render('Vue/LifecycleandTemplateRefs');
});
