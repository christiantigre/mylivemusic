<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groups', function (Blueprint $table) {
            $table->increments('id');
            $table->text('gr_name')->nullable();
            $table->string('gr_datestart')->nullable();
            $table->text('gr_detall')->nullable();
            $table->text('gr_slogan')->nullable();
            $table->text('gr_logo')->nullable();
            $table->string('gr_email')->nullable();
            $table->text('gr_about')->nullable();
            $table->string('gr_phone')->nullable();
            $table->string('gr_cellphone')->nullable();
            $table->string('gr_webpage')->nullable();
            $table->boolean('active')->default(1);
            $table->text('gr_latitude')->nullable();
            $table->text('gr_longitude')->nullable();
            $table->text('gr_coordenade')->nullable();
            $table->integer('manager_id')->unsigned();
            $table->foreign('manager_id')->references('id')->on('managers');          
            $table->integer('country_id')->unsigned()->nullable();
            $table->foreign('country_id')->references('id')->on('countries');
            $table->integer('estate_id')->unsigned()->nullable();
            $table->foreign('estate_id')->references('id')->on('estates');
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
        Schema::drop('groups');
    }
}
