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
        Schema::create('skills', function (Blueprint $table) {
            $table->id();
            $table->string('kerjasama_skill'); 
            $table->string('ahli_skill'); 
            $table->string('inggris_skill'); 
            $table->string('komunikasi_skill');
            $table->string('pengembangan_skill'); 
            $table->string('kepemimpinan_skill'); 
            $table->string('etoskerja_skill');  
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('skills');
    }
};
