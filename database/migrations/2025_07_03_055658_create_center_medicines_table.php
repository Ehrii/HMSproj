<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('center_medicines', function (Blueprint $table) {
            $table->id();
            $table->foreignId('center_id')->constrained('distribution_centers');
            $table->foreignId('medicine_id')->constrained('medicines');
            $table->integer('provided_stock');
            $table->integer('current_stock');
            $table->integer('distributed_stock');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('center_medicines');
    }
};
