<?php

use Illuminate\Support\Facades\Route;

// DASHBOARD
Route::get('/', function () {
    return view('dashboard.index');
})->name('dashboard');


// CV REVIEWER
Route::prefix('cv-reviewer')->name('cv-reviewer.')->group(function () {

    // NEW ANALYSIS
    Route::get('/new-analysis', function () {
        return view('cv-reviewer');
    })->name('new-analysis');

    // ANALYSIS HISTORY
    Route::get('/history', function () {
        return view('analysis-history');
    })->name('history');

});

Route::prefix('cv-reviewer')->name('cv-reviewer.')->group(function () {

    Route::get('/new-analysis', function () {
        return view('cv-reviewer');
    })->name('new-analysis');

    Route::get('/history', function () {
        return view('analysis-history');
    })->name('history');

});

// JOB POSITIONS
Route::prefix('job-positions')->name('job-positions.')->group(function () {

    Route::get('/', function () {
        return view('job-positions.index');
    })->name('index');

});

// CANDIDATES

Route::prefix('candidates')->name('candidates.')->group(function () {

    Route::get('/', function () {
        return view('candidates.index');
    })->name('index');

});


Route::prefix('reports')->name('reports.')->group(function () {
    Route::get('/', function () {
        return view('reports.index');
    })->name('index');
});


Route::prefix('shortlisted')->name('shortlisted.')->group(function () {
    Route::get('/', function () {
        return view('shortlisted.index');
    })->name('index');
});
