<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->text('img')->nullable();
            $table->text('abrev')->nullable();
            $table->text('nombres')->nullable();
            $table->text('apellidos')->nullable();
            $table->text('fecha_nacimiento')->nullable();
            $table->text('telefono')->nullable();
            $table->text('celular')->nullable();           
            $table->boolean('activo')->default(1);           
            $table->text('direccion')->nullable();           
            $table->integer('country_id')->unsigned()->nullable();
            $table->foreign('country_id')->references('id')->on('countries');
            $table->integer('estate_id')->unsigned()->nullable();
            $table->foreign('estate_id')->references('id')->on('estates');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('admins');
    }
}
