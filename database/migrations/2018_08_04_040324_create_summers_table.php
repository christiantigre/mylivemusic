<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSummersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('summers', function (Blueprint $table) {
            $table->increments('id');
            $table->text('sm_time')->nullable();
            $table->string('sm_price')->nullable();
            $table->boolean('active')->default(1);
            $table->integer('group_id')->unsigned();
            $table->integer('typepresentation_id')->unsigned();
            $table->foreign('typepresentation_id')->references('id')->on('typepresentations');
            $table->foreign('group_id')->references('id')->on('groups');
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
        Schema::drop('summers');
    }
}
