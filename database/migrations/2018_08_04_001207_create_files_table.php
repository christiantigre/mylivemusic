<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('files', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->nullable();
            $table->string('subtitle')->nullable();
            $table->string('path_file')->nullable();
            $table->string('link_media')->nullable();
            $table->text('detall')->nullable(1);
            $table->boolean('active')->default();
            $table->integer('multimedia_id')->unsigned();
            $table->foreign('multimedia_id')->references('id')->on('multimedia');
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
        Schema::drop('files');
    }
}
