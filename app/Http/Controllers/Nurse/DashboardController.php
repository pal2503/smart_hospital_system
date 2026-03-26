<?php

namespace App\Http\Controllers\Nurse;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        return view('nurse.dashboard');
    }
}