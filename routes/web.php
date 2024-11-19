<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;

class Job {

    public static function all(): array 
    {
        return [
            [
                'id' => 1,
                'title' => 'Director',
                'salary' => '$50.000',
            ],
            [
                'id' => 2,
                'title' => 'Programmer',
                'salary' => '$35.000',
            ],
            [
                'id' => 3,
                'title' => 'Nurse',
                'salary' => '$30.000',
            ]
        ];
    }
}

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/jobs', function ()  {
    return view('jobs', ['jobs' => Job::all()]);
});


Route::get('/jobs/{id}', function ($id)  {
   
    $job = Arr::first(Job::all(), fn($job) => $job['id'] == $id);

    return view('job', ['job' => $job]);
});