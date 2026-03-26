<?php

namespace App\Http\Controllers\Patient;

use App\Http\Controllers\Controller;
use App\Models\Appointment;

class AppointmentController extends Controller
{
    public function index()
    {
        $appointments = Appointment::where('patient_id', auth()->id())->get();
        return view('patient.appointments', compact('appointments'));
    }
}