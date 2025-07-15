 <?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('polisias', function (Blueprint $table) {
            $table->id();
            $table->string('kodigu', 50)->unique();   
            $table->string('naran');                  
            $table->enum('sexu', ['M', 'F']);      
            $table->foreignId('unidade_id')->nullable()->constrained('unidades')->nullOnDelete();
            $table->foreignId('departamentu_id')->nullable()->constrained('departamentus')->nullOnDelete();
            $table->foreignId('diviza_id')->nullable()->constrained('divisauns')->nullOnDelete();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('polisias');
    }
};
