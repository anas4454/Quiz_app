<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\OptionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\ResultController;
use App\Http\Middleware\Admin_check;
use App\Http\Middleware\User_check;
use Illuminate\Support\Facades\Route;

// ____________*******__________
//  user-side dashboard routes
// ____________*******__________

Route::get('/', [QuizController::class, 'index'])->name('user-dashboard');

Route::middleware('auth', 'verified', User_check::class)->group(function () {


    Route::get('/quiz', [QuizController::class, 'quiz'])->name('user-quiz');
    Route::get('/quiz/{quiz:slug}', [QuizController::class, 'start'])->name('user-quiz-start');

    Route::post('/quiz/{quiz:slug}/submit', [QuizController::class, 'submit'])->name('user-result');

    Route::get('/userprofile', [QuizController::class, 'profile'])->name('user-profile');


    Route::get('/updatePassword', [ResultController::class, 'updatePassword'])->name('new-password');

});

// ____________*******__________
//  Admin-side dashboard routes
// ____________*******__________

Route::prefix('dashboard')->middleware('auth', 'verified', Admin_check::class)->group(function () {

    Route::get('/', [AdminController::class, 'index'])->name('dashboard');
    Route::get('/analytics', [AdminController::class, 'analytics'])->name('admin.dashboard.analytics');

    Route::get('/create-question', [QuestionController::class, 'question'])->name('admin.dashboard.question');
    Route::post('/create-question/add', [QuestionController::class, 'addQuestion'])->name('admin.dashboard.question-add');

    Route::get('/create-quiz', [OptionController::class, 'option'])->name('admin.dashboard.quiz');
    Route::post('/create-quiz/new', [OptionController::class, 'createQuiz'])->name('admin.dashboard.quiz-create');

    Route::get('/user', [AdminController::class, 'users'])->name('admin.dashboard.user');
    Route::get('/view-result', [AdminController::class, 'result'])->name('admin.dashboard.result');



});

// ____________*******__________
//  Email confirmation routes
// ____________*******__________

Route::get('/email', [QuestionController::class, 'sendEmail'])->name('email-sent');

// ____________*******__________
// Auth Profile builtin routes
// ____________*******__________

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
