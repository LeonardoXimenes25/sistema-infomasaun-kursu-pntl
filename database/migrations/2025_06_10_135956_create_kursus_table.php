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
            $table->foreignId('user_id')
                    ->constrained('users')
                    ->onDelete('cascade');
            $table->string('naran_kursu');
            $table->string('tipu_kursu');
            $table->string('fatin_kursu');
            $table->date('data_hahu');
            $table->date('data_remata');
            $table->string('fundus');
            $table->unsignedInteger('feto')->nullable();
            $table->unsignedInteger('mane')->nullable();
            $table->unsignedInteger('total');
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
