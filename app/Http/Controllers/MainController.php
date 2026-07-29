<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    /**
     * Display the Dashboard.
     */
    public function dashboard()
    {
        return view('dashboard');
    }

    /**
     * Display the Catalog page.
     */
    public function catalog()
    {
        return view('catalog');
    }

    /**
     * Display the Booking page.
     */
    public function booking()
    {
        return view('booking');
    }

    /**
     * Display the Wallet page.
     */
    public function wallet()
    {
        return view('wallet');
    }

    /**
     * Optional Authentication Methods
     */
    public function showLogin()
    {
        return view('welcome'); // Or your custom login view if you make one later
    }

    public function login(Request $request)
    {
        // Add authentication handling logic here later
    }

    public function logout()
    {
        // Add session clearing logic here later
        return redirect()->route('welcome');
    }
}
