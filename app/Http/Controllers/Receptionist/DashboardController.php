<?php

namespace App\Http\Controllers\Receptionist;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        return view('receptionist.dashboard');
    }
}