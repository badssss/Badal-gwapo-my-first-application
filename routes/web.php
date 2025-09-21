<?php

use App\Models\Job;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        'headings' => 'Welcome',
        'slot' => 'This is my homepage'
    ]);
});

Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => Job::with('employer')->get()
    ]);
});

Route::get('/jobs/{job}', function (Job $job) {
    return view('job', [
        'job' => $job
    ]);
});
