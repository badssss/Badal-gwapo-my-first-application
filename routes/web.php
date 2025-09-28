<?php

use App\Models\JobListing;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('home', [
        'headings' => 'Welcome',
        'slot' => 'This is my homepage'
    ]);
});

// JOB INDEX
Route::get('/jobs', function () { 
    return view('jobs.index', [
        'jobs' => JobListing::with('employer')->paginate(10) 
    ]); 
}); 

// CREATE JOB PAGE
Route::get('/jobs/create', function () { 
    return view('jobs.create'); 
});

// STORE NEW JOB
Route::post('/jobs', function (Request $request) { 
    $request->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required'],
    ]);

    JobListing::create([ 
        'title' => $request->title, 
        'salary' => $request->salary, 
        'employer_id' => 1
    ]); 
 
    return redirect('/jobs'); 
});  

// SINGLE JOB
Route::get('/jobs/{job}', function (JobListing $job) { 
    return view('jobs.show', ['job' => $job]); 
});

// EDIT JOB
Route::get('/jobs/{job}/edit', function (JobListing $job) {
    return view('jobs.edit', ['job' => $job]);
});

// UPDATE JOB
Route::patch('/jobs/{job}', function (Request $request, JobListing $job) {
    $request->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required'],
    ]);

    $job->update([
        'title' => $request->title,
        'salary' => $request->salary,
    ]);

    return redirect('/jobs/' . $job->id);
});

// DELETE JOB
Route::delete('/jobs/{job}', function (JobListing $job) {
    $job->delete();
    return redirect('/jobs');
});
