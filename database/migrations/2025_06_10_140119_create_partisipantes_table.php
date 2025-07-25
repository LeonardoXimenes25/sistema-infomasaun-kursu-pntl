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
            $table->foreignId('kursu_id')->constrained('kursus')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('polisia_id')->constrained('polisias')->cascadeOnDelete();
            $table->enum('sexu', ['M', 'F']);
            $table->timestamps();
            $table->unique(['kursu_id', 'polisia_id']);
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
