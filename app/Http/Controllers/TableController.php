<?php

namespace App\Http\Controllers;

use App\Models\Medicines;
use Illuminate\Http\Request;

class TableController extends Controller
{
    public function index() {
        $headers = [
            ['key' => 'id', 'label' => '#'],
            ['key' => 'supplier_id', 'label' => 'Supplier'],
            ['key' => 'medicine_name', 'label' => 'Medicine Name'],
            ['key' => 'dosage', 'label' => 'Dosage'],
            ['key' => 'form', 'label' => 'Form Type'],
            ['key' => 'original_stock', 'label' => 'Original Stock']
        ];

        $medicines = Medicines::all();

        return view('tables', compact('headers', 'medicines'));
    }
}
