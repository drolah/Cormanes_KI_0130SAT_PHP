<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {
    return view('home');
});

route::get('/jobs', function () { 
    $jobs = Job::with('employer')->simplePaginate(3);
       
    return view('jobs', [
        'jobs' => $jobs
    ]);
});

route::get('/jobs/{id}', function ($id) {
    $job = Job::find($id);

    return view('job', ['job' => $job]);
});

Route::post('/jobs', function () {
    request()->validate([
        'employer_id' => ['required', 'exists:employers'],
        'title'       => ['required'],
        'salary'      => ['required'],
    ]);
});

Route::get('/contact', function () {
    return view('contact');
});