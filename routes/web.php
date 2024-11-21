<?php

use App\Models\Job;
use App\Models\Post;
use App\Models\Comment;
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

Route::get('/jobs', function ()  {
    return view('jobs', ['jobs' => Job::all()]);
});

Route::get('/posts', function ()  {
    return view('posts', ['posts' => Post::all()]);
});


Route::get('/jobs/{id}', function ($id)  {
   
    $job = Job::find($id);

    return view('job', ['job' => $job]);
});

Route::get('/posts/{id}', function ($id)  {
   
    $post = Post::with('comments')->findOrFail($id); // Eager load comments

    // Pass post and comments to the view
    return view('comment', ['post' => $post, 'comments' => $post->comments]);
});