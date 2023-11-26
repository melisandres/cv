<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResumeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('projects');
});

Route::get('/projects', [ResumeController::class, 'index'])->name('projects');
Route::get('/bio', [ResumeController::class, 'bio'])->name('bio');
Route::get('/education', [ResumeController::class, 'education'])->name('education');
Route::get('/experience', [ResumeController::class, 'experience'])->name('experience');
Route::get('/contact', [ResumeController::class, 'contact'])->name('contact');
Route::post('/contact', [ResumeController::class, 'message'])->name('contact');
