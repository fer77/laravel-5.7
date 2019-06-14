<?php
use App\Services\Twitter;
use App\Repositories\UserRepository;

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

Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');
Route::get('/contact', 'PagesController@contact');
Route::resource('projects', 'ProjectsController');
Route::post('/projects/{project}/tasks', 'ProjectTasksController@store');
// Route::patch('/tasks/{task}', 'ProjectTasksController@update'); created a "CompletedTasksController" that handles tasks being completed.
Route::post('/completed-tasks/{task}', 'CompletedTasksController@store');
Route::delete('/completed-tasks/{task}', 'CompletedTasksController@destroy');

// Service container
app()->bind('example', function () {
    return new \App\Example;
});
Route::get('/', function (Twitter $twitter, UserRepository $users) {
    //dd(app('example'), app('example')); // returns two seperate instance of the example class.
    dd($twitter);
    // dd($users);
    return view('welcome');
});
