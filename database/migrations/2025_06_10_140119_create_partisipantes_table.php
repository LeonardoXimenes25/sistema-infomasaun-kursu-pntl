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
        Schema::create('partisipantes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kursu_id')->constrained('kursus')->onDelete('cascade');
            $table->string('naran');
            $table->string('diviza');
            $table->string('unidade');
            $table->string('departamentu');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('partisipantes');
    }
};
