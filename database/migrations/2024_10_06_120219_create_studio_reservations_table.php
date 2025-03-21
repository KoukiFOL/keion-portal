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
        //
        Schema::create('studio_reservations', function (Blueprint $table){
            $table->id();
            $table->dateTime('use_datetime');
            $table->foreignId('studio_id')->constrained('studios');
            $table->foreignId('reserved_user_id')->constrained('users');
            $table->string('reserved_band_id')->nullable();

            $table->index(['studio_id', 'use_datetime']);

            //論理削除で使うdeleted_atを追加
            $table->softDeletes();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('studio_reservations');
    }
};
