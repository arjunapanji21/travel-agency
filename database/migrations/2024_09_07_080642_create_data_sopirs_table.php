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
        Schema::create('data_sopirs', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('nik')->unique();
            $table->string('nama');
            $table->string('tmp_lahir')->nullable();
            $table->string('tgl_lahir')->nullable();
            $table->enum('jk', ['Laki-laki', 'Perempuan']);
            $table->string('gol_darah')->nullable();
            $table->string('alamat')->nullable();
            $table->string('agama')->nullable();
            $table->string('status_perkawinan')->nullable();
            $table->string('status_sopir')->nullable();
            $table->string('foto')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_sopirs');
    }
};
