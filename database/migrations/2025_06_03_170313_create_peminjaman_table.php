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
        Schema::create('peminjaman', function (Blueprint $table) {
            $table->id('peminjaman_id');

            // Foreign Keys ke anggota, buku, petugas
            $table->foreignId('anggota_id')
                ->constrained('anggota', 'anggota_id')
                ->onDelete('restrict');

            $table->foreignId('buku_id')
                ->constrained('buku', 'buku_id')
                ->onDelete('restrict');

            $table->foreignId('petugas_id')
                ->constrained('petugas', 'petugas_id')
                ->onDelete('restrict');

            $table->date('tanggal_peminjaman');
            $table->date('tanggal_pengembalian')->nullable();
            $table->enum('status', ['dipinjam', 'dikembalikan'])->default('dipinjam');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peminjaman');
    }
};
