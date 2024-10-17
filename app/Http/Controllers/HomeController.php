<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Fetch data for the dashboard here if needed
        return inertia('Welcome');
    }
}

