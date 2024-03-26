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
        Schema::table('organizations', function (Blueprint $table) {
            // Adiciona a coluna 'contacts_id' com a chave estrangeira
            $table->unsignedBigInteger('contacts_id');
            $table->foreign('contacts_id')
                  ->references('id')
                  ->on('contacts')
                  ->onDelete('NO ACTION')
                  ->onUpdate('NO ACTION');

            // Adiciona a coluna 'addresses_id' com a chave estrangeira
            $table->unsignedBigInteger('addresses_id');
            $table->foreign('addresses_id')
                  ->references('id')
                  ->on('addresses')
                  ->onDelete('NO ACTION')
                  ->onUpdate('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('organizations', function (Blueprint $table) {
            //
        });
    }
};
