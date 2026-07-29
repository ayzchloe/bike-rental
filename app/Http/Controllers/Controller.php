<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support - Use Facades \ Auth;

class DashboardController extends Controller
{
    /**
     * Display the main application dashboard.
     */
    public function index()
    {
        // Explicitly ensuring no route-level auth restrictions break execution here.
        // Data can be gathered here to pass to your view down the line.
        return view('dashboard');
    }
}
