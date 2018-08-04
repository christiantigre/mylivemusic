<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDetallpacksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detallpacks', function (Blueprint $table) {
            $table->increments('id');
            $table->text('item_pack')->nullable();
            $table->boolean('active')->default(1);
            $table->integer('typepack_id')->unsigned();
            $table->foreign('typepack_id')->references('id')->on('typepacks');
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
        Schema::drop('detallpacks');
    }
}
