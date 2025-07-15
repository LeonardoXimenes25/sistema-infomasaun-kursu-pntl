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
        Schema::create('tipu_kursu', function (Blueprint $table) {
            $table->id();
            $table->string('kodigu')->unique();
            $table->string('naran');
            $table->foreignId('kategoria_id')->constrained('kategorias')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tipu_kursu');
    }
};
