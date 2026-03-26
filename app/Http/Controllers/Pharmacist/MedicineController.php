<?php

namespace App\Http\Controllers\Pharmacist;

use App\Http\Controllers\Controller;
use App\Models\Medicine;

class MedicineController extends Controller
{
    public function index()
    {
        $medicines = Medicine::all();
        return view('pharmacist.medicines', compact('medicines'));
    }
}