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
            $table->double('pack_price_suscription',15,2)->nullable();
            $table->double('pack_price_month',15,2)->nullable();
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
