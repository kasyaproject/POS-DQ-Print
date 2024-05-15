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
        Schema::create('preorders', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('kode_invoice');
            $table->string('id_cust');
            $table->string('kode_produk');
            $table->integer('qty');
            $table->integer('harga_satuan');
            $table->datetime('tgl_jadi');
            $table->string('id_status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('preorders');
    }
};
