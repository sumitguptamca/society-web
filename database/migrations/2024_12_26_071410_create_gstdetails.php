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
        Schema::create('gstdetails', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable(); // GST name
            $table->decimal('percentage', 5, 2)->nullable(); // GST percentage (e.g., 18.00)
            $table->text('details')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gstdetails');
    }
};
