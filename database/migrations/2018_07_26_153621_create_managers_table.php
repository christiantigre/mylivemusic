<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateManagersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('managers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('mng_name')->nullable();
            $table->string('mng_lastname')->nullable();
            $table->string('mng_phone')->nullable();
            $table->string('mng_cellphone')->nullable();
            $table->string('mng_address')->nullable();
            $table->text('mng_avathar')->nullable();
            $table->boolean('active')->default(1);
            $table->string('email')->unique();
            $table->string('password');
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
        Schema::drop('managers');
    }
}
