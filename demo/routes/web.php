<?php

use Illuminate\Support\Facades\Route;

// 1. Array Users
$users = [
    ['id' => 1, 'name' => 'mohammed', 'age' => 22],
    ['id' => 2, 'name' => 'mohammoud', 'age' => 27],
    ['id' => 3, 'name' => 'malak', 'age' => 24],
    ['id' => 4, 'name' => 'haneen', 'age' => 23],
];

///////////////////////////////// Routes Users ///////////////////////
Route::get('/users', function () use ($users) {
    return view('alluser', [
        'users' => $users,
        'selectedUser' => null
    ]);
});

Route::get('/users/{id}', function ($id) use ($users) {
    $selectedUser = null;

    foreach ($users as $user) {
        if ($user['id'] == $id) {
            $selectedUser = $user;
            break;
        }
    }

    return view('alluser', [
        'users' => $users,
        'selectedUser' => $selectedUser
    ]);
});


///////////////////////////////// Array Courses /////////////////////////
$courses = [
    ['id' => 1, 'name' => 'PHP Laravel', 'description' => 'Web development with Laravel'],
    ['id' => 2, 'name' => 'Database', 'description' => 'SQL and database design'],
];

////////////////////////////// Routes Courses  ///////////////////////////////
Route::get('/courses', function () use ($courses) {
    return view('courses', [
        'courses' => $courses,
        'selectedCourse' => null
    ]);
});

Route::get('/courses/{id}', function ($id) use ($courses) {
    $selectedCourse = null;

    foreach ($courses as $course) {
        if ($course['id'] == $id) {
            $selectedCourse = $course;
            break;
        }
    }

    return view('courses', [
        'courses' => $courses,
        'selectedCourse' => $selectedCourse
    ]);
});