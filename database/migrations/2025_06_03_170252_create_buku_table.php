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
        Schema::create('buku', function (Blueprint $table) {
            $table->id('buku_id');
            $table->string('nama_buku');
            $table->string('judul');
            $table->string('penulis');
            $table->string('penerbit');
            $table->year('tahun_penerbitan');
            $table->string('ISBN');
            $table->unsignedInteger('jumlah_tersedia');

            // Foreign Key ke kategori_buku
            $table->foreignId('kategori_id')
                ->constrained('kategori_buku', 'kategori_id')
                ->onDelete('restrict');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('buku');
    }
};
