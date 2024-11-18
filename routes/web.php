<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => [
            [
                'title' => 'Director',
                'salary' => '$50.000',
            ],
            [
                'title' => 'Programmer',
                'salary' => '$35.000',
            ],
            [
                'title' => 'Nurse',
                'salary' => '$30.000',
            ]
        ]
    ]);
});
