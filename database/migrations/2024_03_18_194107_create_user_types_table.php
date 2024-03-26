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
        Schema::create('user_types', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->timestamps();
        });

          // Insere os valores padrão
          DB::table('user_types')->insert([
            ['id' => 1, 'title' => 'Admin'],
            ['id' => 2, 'title' => 'Operador'],
            ['id' => 3, 'title' => 'Originador'],
            ['id' => 4, 'title' => 'Advogado'],
            ['id' => 5, 'title' => 'Cliente Organization'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_types');
    }
};
