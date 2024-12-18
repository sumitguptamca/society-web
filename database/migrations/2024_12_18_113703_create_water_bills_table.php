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
        Schema::create('water_bills', function (Blueprint $table) {
            $table->id();
            $table->string('customer_name');
            $table->string('address')->nullable();
            $table->string('meter_number')->nullable();
            $table->integer('units_consumed')->nullable();
            $table->decimal('rate_per_unit', 8, 2)->nullable();
            $table->decimal('total_amount', 8, 2)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('water_bills');
    }
};
