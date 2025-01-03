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
        Schema::create('notices', function (Blueprint $table) {
            $table->id();
            $table->date('notice_date')->nullable(); // Date field for the notice
            $table->string('title')->nullable(); // Title of the notice
            $table->text('description')->nullable(); 
            $table->foreignId('created_by')->nullable()->constrained('users')->onDelete('set null'); // Add created_by column with foreign key reference to users table
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notices');
    }
};
