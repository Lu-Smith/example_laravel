<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;

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

Route::get('/posts', function ()  {
    return view('posts');
});


Route::get('/jobs/{id}', function ($id)  {
   
    $job = Job::find($id);

    return view('job', ['job' => $job]);
});