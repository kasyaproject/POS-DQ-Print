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
            $table->id();
            $table->string('info_status');
            $table->string('id_kasir')->nullable();;
            $table->dateTime('waktu_bayar')->nullable();;
            $table->string('id_design')->nullable();
            $table->dateTime('waktu_design')->nullable();
            $table->string('id_operator')->nullable();
            $table->dateTime('waktu_operator')->nullable();
            $table->string('id_finishing')->nullable();
            $table->dateTime('waktu_finishing')->nullable();
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
