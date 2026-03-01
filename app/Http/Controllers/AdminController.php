<?php

namespace App\Http\Controllers;

use App\Models\Quiz;

class AdminController extends Controller
{
    public function index()
    {

    $total_quiz = Quiz::count();
        return view('dashboard-pages.admin-side', compact('total_quiz'));
    }

    public function users()
    {
        return view('dashboard-pages.view-users');
    }

    public function result()
    {
        return view('dashboard-pages.view-result');
    }

    public function analytics()
    {
        return view('dashboard-pages.analytics');
    }
}
