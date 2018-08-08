<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEntitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entities', function (Blueprint $table) {
            $table->increments('id');
            $table->string('en_name')->nullable();
            $table->string('en_phone')->nullable();
            $table->string('en_cellphone')->nullable();
            $table->string('en_mail')->nullable();
            $table->string('en_manager')->nullable();
            $table->date('en_datestart')->nullable();
            $table->text('en_logo')->nullable();
            $table->text('en_slogan')->nullable();
            $table->text('en_about')->nullable();
            $table->text('en_linkwebpage')->nullable();
            $table->text('en_socialtwiter')->nullable();
            $table->text('en_socialfacebook')->nullable();
            $table->text('en_socialInstagram')->nullable();
            $table->text('en_socialGoogleplus')->nullable();
            $table->text('en_socialLikedIn')->nullable();
            $table->text('en_socialYoutube')->nullable();
            $table->text('en_copyrigth')->nullable();
            $table->string('en_yearEdition')->nullable();
            $table->text('en_latitude')->nullable();
            $table->text('en_longitude')->nullable();
            $table->text('en_coordenate')->nullable();
            $table->text('en_mapembed')->nullable();
            $table->boolean('active')->default(1);
            $table->integer('country_id')->unsigned();
            $table->integer('estate_id')->unsigned();
            $table->foreign('country_id')->references('id')->on('countries');
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
        Schema::drop('entities');
    }
}
