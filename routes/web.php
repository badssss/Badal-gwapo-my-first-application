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
        // Use pagination instead of get()
        'jobs' => Job::with('employer')->paginate(10)
    ]);
});

Route::get('/jobs/{job}', function (Job $job) {
    return view('job', [
        'job' => $job
    ]);
});
