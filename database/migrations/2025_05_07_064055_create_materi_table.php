<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('materis', function (Blueprint $table) {
            $table->id();
            $table->string('nama_materi');
            $table->string('nama_pemateri');
            $table->enum('jenis_materi', ['video', 'pdf']);
            $table->timestamps();
        });
    }
    

    public function down(): void
    {
        Schema::dropIfExists('materi');
    }
};