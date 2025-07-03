<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class medicineController extends Controller
{
    public function dashboard() {
        return view('dashboard');
    }

    public function medicines() {
        return view('medicines');
    }

    public function patients() {
        return view('patients');
    }
}
