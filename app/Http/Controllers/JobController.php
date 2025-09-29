<?php

namespace App\Http\Controllers;

use App\Models\JobListing; // Make sure to use your Job model
use Illuminate\Http\Request;

class JobController extends Controller
{
    // Display all jobs
    public function index() {
        $jobs = JobListing::with('employer')->paginate(10);
        return view('jobs.index', ['jobs' => $jobs]);
    }

    // Show form to create a new job
    public function create() {
        return view('jobs.create');
    }

    // Store a new job
    public function store(Request $request) {
        $request->validate([
            'title' => ['required', 'min:3'],
            'salary' => ['required'],
        ]);

        JobListing::create([
            'title' => $request->title,
            'salary' => $request->salary,
            'employer_id' => 1, // Hard-coded for now
        ]);

        return redirect('/jobs');
    }

    // Show a single job
    public function show(JobListing $job) {
        return view('jobs.show', ['job' => $job]);
    }

    // Show form to edit a job
    public function edit(JobListing $job) {
        return view('jobs.edit', ['job' => $job]);
    }

    // Update a job
    public function update(Request $request, JobListing $job) {
        $request->validate([
            'title' => ['required', 'min:3'],
            'salary' => ['required'],
        ]);

        $job->update([
            'title' => $request->title,
            'salary' => $request->salary,
        ]);

        return redirect('/jobs/' . $job->id);
    }

    // Delete a job
    public function destroy(JobListing $job) {
        $job->delete();
        return redirect('/jobs');
    }
}
