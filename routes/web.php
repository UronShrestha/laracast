<?php

use App\Models\employer;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {
    // $jobs = Job::all();
    // dd($jobs);
    return view('index');
});

Route::get('/jobs', function () {
        // $jobs = Job::all();
    $jobs = Job::with('employer')->latest()->paginate(5);
    return view('jobs/index', [
        'jobs' => $jobs
        // 'jobs' => Job::all()
    ]);
});

Route::get('/jobs/create', function() {
    return view('jobs.create');
});

Route::get('/jobs/{id}', function ($id) {
    // $job = Arr::first(Job::all(), fn($job) => $job['id'] == $id);
    $job = Job::find($id);
    return view('jobs.show', ['job' => $job]);
});

Route::post('/jobs', function(){
    //validate
    request()->validate([
        'title' => ['required','min:2'],
        'salary' => ['required'],
        ]);
        //create
    Job::create([
        'title' => request('title'),
        'salary' => request('salary'),
        'employer_id' => 1
    ]);

    return redirect('/jobs');
});

Route::get('/employers', function () {
    return view('employers', [
        'employers' => Employer::all()
    ]);
});

Route::get('/employers/{id}', function ($id) {
    // $job = Arr::first(Job::all(), fn($job) => $job['id'] == $id);
    $employer = Employer::find($id);
    return view('employer', ['employer' => $employer]);
});

Route::get('/contact', function () {
    return view('contact');
});
