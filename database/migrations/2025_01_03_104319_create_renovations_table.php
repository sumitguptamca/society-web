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
        Schema::create('renovations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('flatowner_id')->nullable();
            $table->foreign('flatowner_id')->references('id')->on('flate_owners')->onDelete('cascade');
            $table->string('request')->nullable(); 
            $table->string('phone', 15)->nullable();
            $table->text('note')->nullable(); // Description of the renovation
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('renovations');
    }
};
