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
            $table->id();
            $table->string('kode_invoice');
            $table->string('no_resi');
            $table->string('id_cust');
            $table->string('id_pj');
            $table->string('id_produk');
            $table->string('kategori');
            $table->integer('qty');
            $table->integer('harga_satuan');
            $table->double('panjang');
            $table->double('lebar');
            $table->integer('harga_total');
            $table->string('keterangan');
            $table->string('tanggal_jadi');
            $table->string('waktu_jadi');
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
