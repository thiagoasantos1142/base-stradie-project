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
        Schema::create('user_roles', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->timestamps();
        });

         // Inserir dados padrão
         DB::table('user_roles')->insert([
            ['id' => 1, 'title' => 'Cadastrar'],
            ['id' => 2,'title' => 'Aprovar'],
            ['id' => 3,'title' => 'Fazer oferta'],
            ['id' => 4,'title' => 'Aceitar oferta'],
            ['id' => 5,'title' => 'Recusar ofertas'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_roles');
    }
};
