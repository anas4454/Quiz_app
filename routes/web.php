<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuizController;
use Illuminate\Support\Facades\Route;


//  user-side dashboard routes


Route::get('/' , [QuizController::class , 'index'])->name('user-dashboard');

Route::get('/quiz' , [QuizController::class , 'quiz'])->name('user-quiz');
Route::get('/result' , [QuizController::class , 'result'])->name('user-result');
Route::get('/userprofile' , [QuizController::class , 'profile'])->name('user-profile');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


// Auth Profile builtin routes

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
