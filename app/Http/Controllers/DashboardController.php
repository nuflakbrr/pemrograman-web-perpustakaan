<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class DashboardController extends Controller
{
    /**
     * Display the dashboard view.
     */
    public function index(): View
    {
        return view('admin.dashboard');
    }

    /**
     * Display the profile view.
     */
    // public function show(): View
    // {
    //     $user = Auth::user();
    //     return view('admin.profile', compact('user'));
    // }
}
