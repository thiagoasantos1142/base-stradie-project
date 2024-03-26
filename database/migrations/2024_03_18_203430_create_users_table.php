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
        Schema::create('users', function (Blueprint $table) {
            $table->id();            
            $table->unsignedBigInteger('user_type_id')->default(5);            
            $table->unsignedBigInteger('organization_id')->nullable();            
            $table->unsignedBigInteger('user_role_id')->default(1);
            $table->string('name');
            $table->string('email')->unique();            
            $table->string('cpf')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->string('profile_photo_path', 2048)->nullable();
            $table->timestamps();

             // Adicionando coluna 'user_type_id'
             $table->foreign('user_type_id')->references('id')->on('user_types');  
 
             // Adicionando coluna 'organization_id'
             $table->foreign('organization_id')->references('id')->on('organizations');             
 
             
             // Adicionando coluna 'user_role_id'
             $table->foreign('user_role_id')->references('id')->on('user_roles');  
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
