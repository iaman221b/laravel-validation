<?php

use Illuminate\Filesystem\Filesystem ;


// app()->bind('example' , function(){
//     app()->singleton('App\Example' , function(){
//         dd('hello');
//     return new \App\Example;
// });

Route::get('/', function () {
    // dd(app('example') , app('example'));
    dd(app('foo'));
    dd(app('App\Example'));

    dd(app(Filesystem::class));
    return view('welcome');
}); 


// Route::resource('projects' , 'projectsController');


// Route::get('/', 'pagescontroller@home');
Route::get('/contact', 'pagescontroller@contact');
Route::get('/projects', 'projectsController@index');
Route::get('/projects/{projectId}', 'projectsController@show');
Route::get('/projects/{project}/edit', 'projectsController@edit');
Route::patch('/projects/{project}', 'projectsController@update');
Route::delete('/projects/{project}', 'projectsController@destroy');
Route::post('/projects', 'projectsController@store');
Route::get('/create', 'projectsController@showForm');
Route::get('/about', 'pagescontroller@about');

Route::patch('/tasks/{task}', 'ProjectTasksController@update');
Route::post('/projects/{project}/tasks', 'ProjectTasksController@store');



