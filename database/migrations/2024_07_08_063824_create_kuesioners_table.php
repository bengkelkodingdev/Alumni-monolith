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
        Schema::create('kuesioners', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_alumni')->nullable();
            $table->string('nama_alumni');
            $table->string('jns_kelamin');   
            $table->string('nim');            
            $table->string('tahun_masuk');       
            $table->string('tahun_lulus');           
            $table->string('no_hp');            
            $table->string('email');  
            $table->string('status');
            $table->string('jns_job')->nullable();
            $table->string('nama_job')->nullable();
            $table->string('jabatan_job')->nullable();
            $table->string('lingkup_job')->nullable();  
            $table->string('biaya_studi')->nullable();
            $table->string('nama_studi')->nullable();
            $table->string('prodi')->nullable();
            $table->date('tgl_studi')->nullable(); 
            $table->timestamps();

            $table->foreign('id_alumni')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kuesioners');
    }
};
