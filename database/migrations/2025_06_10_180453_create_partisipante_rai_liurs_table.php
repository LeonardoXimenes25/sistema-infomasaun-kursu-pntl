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
        Schema::create('partisipante_rai_liurs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kursurailiur_id')->constrained('kursu_rai_liurs')->onDelete('cascade');
            $table->string('naran');
            $table->string('diviza');
            $table->string('unidade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('partisipante_rai_liurs');
    }
};
