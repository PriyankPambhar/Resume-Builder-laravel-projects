<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResumeController;

Route::get('/', [ResumeController::class, 'showForm'])->name('resume.form');
Route::post('/generate-resume', [ResumeController::class, 'generateResume'])->name('generate-resume');

Route::get('/welcome', function () {
    return view('welcome');
});