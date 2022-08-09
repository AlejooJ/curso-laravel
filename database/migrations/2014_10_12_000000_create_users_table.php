<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) { //Crear tabla users
            $table->id(); // int Unsigned Increment
            $table->string('name'); // varchar 255
            $table->string('email')->unique(); // str 255 Valor unico 
            $table->timestamp('email_verified_at')->nullable(); // Verificación de correo, permite null 
            $table->string('password'); // str 255 
            $table->rememberToken(); // str 255 
            $table->timestamps(); //created_at update_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};