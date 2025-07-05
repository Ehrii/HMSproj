<?php

namespace App\Livewire;

use App\Models\Medicines;
use App\Models\Suppliers;
use Livewire\Component;

class Table extends Component
{
    public function render()
    {
        //Medicine Table
        $medicines = Medicines::all();

        $medicineHeaders = [
            ['key' => 'id', 'label' => '#'],
            ['key' => 'supplier_id', 'label' => 'Supplier'],
            ['key' => 'medicine_name', 'label' => 'Medicine Name'],
            ['key' => 'dosage', 'label' => 'Dosage'],
            ['key' => 'form', 'label' => 'Form Type'],
            ['key' => 'original_stock', 'label' => 'Original Stock']
        ];

        //Suppliers Table
        $suppliers = Suppliers::all();

        $suppliersHeaders = [
            ['key' => 'id', 'label' => '#'],
            ['key' => 'name', 'label' => 'Supplier Name'],
            ['key' => 'contact_info', 'label' => 'Contact Info']
        ];

        return view('livewire.table', compact('medicineHeaders', 'medicines', 'suppliers', 'suppliersHeaders'));
    }
}
