<?php

use App\Models\Task;
use App\Models\User;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
//
//   $task1 = Task::create([
//        'name' => 'Task 1',
//        'description' => 'Description 1',
//        'completed' => 0
//    ]);
//   $task2 = Task::create([
//        'name' => 'Task 2',
//        'description' => 'Description 2',
//        'completed' => 0
//    ]);
//
//    $tasks = [
//        $task1,
//        $task2
//    ];
    return view('tasks',[
        'tasks' => Task::all()

    ]);
});

Route::get('/tasks', function () {
    return view('tasks',[
        'tasks' => []
    ]);
});

//crear bd amb migracions video
Route::get('/users', function () {


    return view('users',[
        'users' => User::all()
    ]);
});


Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about', function () {
    return view('about');
});
