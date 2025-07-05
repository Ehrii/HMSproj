<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class MedicinesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $medNames = ['Biogesic', 'Medicol', 'Amoxicillin'];
        $dosages = ['500 mg', '250 mg', '5 mL', '1 tablet', '100 mg', '200 mg', '10 mL', '2 tablets', '50 mg', '1 capsule'];
        $dosageForms = ['Tablet', 'Capsule', 'Liquid', 'Syrup', 'Injection', 'Cream', 'Ointment', 'Suppository', 'Drops', 'Inhaler'];
        
        return [
            'supplier_id' => 1,
            'medicine_name' => $this->faker->randomElement($medNames),
            'dosage' => $this->faker->randomElement($dosages),
            'form' => $this->faker->randomElement($dosageForms),
            'original_stock' => 100
        ];
    }
}
