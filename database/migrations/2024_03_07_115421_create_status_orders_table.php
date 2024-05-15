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
        Schema::create('status_orders', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('info_status');
            $table->string('id_kasir');            
            $table->string('id_design');
            $table->dateTime('waktu_design');
            $table->string('id_operator');
            $table->dateTime('waktu_operator');
            $table->string('id_finishing');
            $table->dateTime('waktu_finishing');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('status_orders');
    }
};
