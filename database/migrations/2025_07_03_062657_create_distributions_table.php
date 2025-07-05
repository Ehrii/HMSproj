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
        Schema::create('distributions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('citizen_id')->constrained('citizens');
            $table->foreignId('center_id')->constrained('distribution_centers');
            $table->date('distribution_date');
            $table->enum('purpose', ['maintenance', 'non-maintenance']);
            $table->enum('delivery_mode', ['pickup', 'delivery']);
            $table->text('remarks');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('distributions');
    }
};
