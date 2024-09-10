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
        Schema::create('data_jadwals', function (Blueprint $table) {
            $table->id();
            $table->string('kode');
            $table->string('rute');
            $table->string('waktu');
            $table->bigInteger('data_kendaraan_id');
            $table->bigInteger('data_sopir_id');
            $table->bigInteger('harga_tiket');
            $table->integer('jumlah_penumpang');
            $table->boolean('aktif')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_jadwals');
    }
};
