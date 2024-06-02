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
        Schema::create('internships', function (Blueprint $table) {
            $table->id();
            $table->string('nama_intern');
            $table->string('periode_masuk_intern');            
            $table->string('periode_keluar_intern');
            $table->longText('alamat_intern');
            $table->string('lingkup_intern');
            $table->string('bidang_intern');
            $table->string('jns_intern');
            $table->string('jabatan_intern');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('internships');
    }
};
