<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->increments('id');
            $table->string('mb_name')->nullable();
            $table->string('mb_nickname')->nullable();
            $table->string('gr_birthdar')->nullable();
            $table->string('gr_mail')->nullable();
            $table->string('gr_phone')->nullable();
            $table->string('gr_cellphone')->nullable();
            $table->string('gr_instrument')->nullable();
            $table->text('gr_avathar')->nullable();
            $table->text('gr_phrase')->nullable();
            $table->text('gr_about')->nullable();
            $table->boolean('active')->default(1);
            $table->integer('group_id')->unsigned();
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
        Schema::drop('members');
    }
}
