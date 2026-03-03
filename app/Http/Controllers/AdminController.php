<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use App\Models\Result;
use App\Models\User;

class AdminController extends Controller
{
    public function index()
    {

    $total_quiz = Quiz::count();
        return view('dashboard-pages.admin-side', compact('total_quiz'));
    }

    public function users()
    {
        $users = User::all();

        return view('dashboard-pages.view-users' , compact('users'));
    }

    public function result()
    {
        $results = Result::with(['user', 'quiz'])->get();

        return view('dashboard-pages.view-result' , compact('results'));
    }

    public function analytics()
    {
        return view('dashboard-pages.analytics');
    }
}
