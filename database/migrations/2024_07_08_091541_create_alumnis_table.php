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
        Schema::create('alumnis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_alumni')->nullable();
            $table->string('profile_picture')->nullable(); 
            $table->string('nim')->unique()->nullable();
            $table->string('nama_alumni');
            $table->string('jns_kelamin')->nullable();
            $table->UnsignedInteger('tahun_lulus')->nullable();              
            $table->string('email');      
            $table->string('no_hp')->unique()->nullable();         
            $table->string('status')->nullable();      
            $table->timestamps();

            $table->foreign('id_alumni')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alumnis');
    }
};
