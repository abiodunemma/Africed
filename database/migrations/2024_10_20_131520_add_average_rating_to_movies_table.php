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
        Schema::table('movies', function (Blueprint $table) {
            Schema::table('movies', function (Blueprint $table) {
                $table->decimal('average_rating', 3, 2)->default(0); // Allows for ratings like 4.50
            });
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('movies', function (Blueprint $table) {
            Schema::table('movies', function (Blueprint $table) {
                $table->dropColumn('average_rating');
            });
        });
    }
};
