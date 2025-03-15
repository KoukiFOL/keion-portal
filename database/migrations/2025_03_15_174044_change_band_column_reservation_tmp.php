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
        Schema::table('studio_reservations', function (Blueprint $table) {
            //
            $table->string('reserved_band_id')->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('studio_reservations', function (Blueprint $table) {
            //
            $table->integer('reserved_band_id')->change();
        });
    }
};
