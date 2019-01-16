<?php

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
    return view('welcome', [
        'name' => 'Bob',
        'tasks' => [
            'Go to store',
            'Go to school',
            'Go to work'
        ],
    ]);
    // Same as:
    // return view('welcome')->withTasks($tasks)->withFoo('foo');
    // or
    // return view('welcome', [
    //     'tasks' => $tasks
    // ]);
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});
