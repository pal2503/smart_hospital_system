<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;



class DoctorController extends Controller
{
    public function index()
    {
        $doctors = User::where('role', 'doctor')->get();
        return view('admin.doctors', compact('doctors'));
    }
}