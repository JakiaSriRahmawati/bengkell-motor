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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id(); 
            $table->string('nama_lengkap'); 
            $table->string('email');
            $table->string('nomor_telepon');
            $table->json('jenis_layanan'); // Jenis Layanan (disimpan dalam bentuk JSON)
            $table->date('tanggal_service'); 
            $table->text('catatan_tambahan')->nullable(); 
            $table->timestamps(); 
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
