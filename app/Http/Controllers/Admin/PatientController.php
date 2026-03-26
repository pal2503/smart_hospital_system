<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;

class PatientController extends Controller
{
    public function index()
    {
        $patients = User::where('role', 'patient')->get();
        return view('admin.patients', compact('patients'));
    }
}