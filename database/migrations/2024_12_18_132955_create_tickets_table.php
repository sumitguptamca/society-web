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
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('flateowner_id');
            $table->foreign('flateowner_id')->references('id')->on('flate_owners')->onDelete('cascade');
            $table->string('ticket_no')->unique();
            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->enum('status', ['Open', 'In Progress','Closed'])->default('Open');
            $table->json('images')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};
