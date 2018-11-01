<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spots', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('clasification_id')->unsigned();
            $table->string('name_service', 45);
            $table->text('address');
            $table->string('telephone', 45);
            $table->string('email', 150)->unique();
            $table->text('promotion');
            $table->string('image', 150);
            $table->boolean('active');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('clasification_id')->references('id')->on('clasifications');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('spots');
    }
}
