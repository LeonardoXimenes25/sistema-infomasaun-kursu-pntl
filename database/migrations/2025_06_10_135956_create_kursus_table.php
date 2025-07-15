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
        Schema::create('kursus', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnUpdate()->restrictOnDelete();
            $table->foreignId('kategoria_id')->constrained('kategorias')->cascadeOnDelete();
            $table->foreignId('tipu_kursu_id')->constrained('tipu_kursu')->cascadeOnDelete();
            $table->foreignId('materia_id')->constrained('materias')->cascadeOnDelete();
            $table->foreignId('fatin_kursu_id')->constrained('fatin_kursu')->cascadeOnUpdate()->restrictOnDelete();
            $table->foreignId('fundus_id')->constrained('fundus')->cascadeOnUpdate()->restrictOnDelete();
            $table->date('data_hahu');
            $table->date('data_remata');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kursus');
    }
};
