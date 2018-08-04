<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTypepacksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('typepacks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('pack_type')->nullable();
            $table->string('pack_price_suscription')->nullable();
            $table->string('pack_price_month')->nullable();
            $table->text('pack_detall')->nullable();
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
        Schema::drop('typepacks');
    }
}
