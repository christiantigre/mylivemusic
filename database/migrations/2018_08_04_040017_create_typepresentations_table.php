<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTypepresentationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('typepresentations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('pl_presentation')->nullable();
            $table->text('detall')->nullable();
            $table->boolean('active')->default(1);
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
        Schema::drop('typepresentations');
    }
}
