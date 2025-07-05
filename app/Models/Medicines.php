<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Medicines extends Model
{
    use HasFactory;

    protected $table = 'medicines';

    protected $fillable = [
        'medicine_name',
        'dosage',
        'form',
        'original_stock'
    ];
}
