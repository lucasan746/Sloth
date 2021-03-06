<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('user',100);
            $table->string('nombre',100);
            $table->string('apellido',100);
            $table->string('email',100);
            $table->string('sexo',1)->nullable();
            $table->string('pais',100)->nullable();
            $table->string('fotoperfil',100);
            $table->string('password',100);
            $table->string('fecha',100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user');
    }
}
