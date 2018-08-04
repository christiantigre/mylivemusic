<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSocialmembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('socialmembers', function (Blueprint $table) {
            $table->increments('id');
            $table->text('sc_link')->nullable();
            $table->string('sc_redsocial')->nullable();
            $table->boolean('active')->default(1);
            $table->integer('member_id')->unsigned();
            $table->foreign('member_id')->references('id')->on('managers');
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
        Schema::drop('socialmembers');
    }
}
