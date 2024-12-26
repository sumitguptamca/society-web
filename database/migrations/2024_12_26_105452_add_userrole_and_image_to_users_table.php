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
        Schema::table('users', function (Blueprint $table) {
            $table->integer('userrole')->default(2)->after('name');
            $table->string('mobile')->nullable()->after('email');
            $table->string('country')->nullable()->after('email');
            $table->string('city')->nullable()->after('country');
            $table->string('state')->nullable()->after('city');
            $table->string('address')->nullable()->after('state');
            $table->string('image')->nullable()->after('address');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('userrole');
            $table->dropColumn('image');
            $table->dropColumn('mobile');
            $table->dropColumn('country');
            $table->dropColumn('state');
            $table->dropColumn('city');
            $table->dropColumn('address');
        });
    }
};
