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
        Schema::create('lokers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_alumni')->nullable();
            $table->string('NamaPerusahaan');
            $table->longText('Posisi');
            $table->longText('Alamat');
            $table->string('Pengalaman');
            $table->string('Gaji');
            $table->string('TipeKerja');
            $table->longText('Deskripsi');
            $table->string('Website');
            $table->string('Email');
            $table->string('Tags');
            $table->string('Logo')->nullable();
            $table->string('Verify');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lokers');
    }
};
