<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReceipesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('receipes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('method');
            $table->string('style');
            $table->unsignedInteger('boil_time');
            $table->unsignedInteger('boil_size');
            $table->unsignedDecimal('o_gravity', 4, 3);
            $table->unsignedDecimal('f_gravity', 4, 3);
            $table->unsignedDecimal('abv', 4, 2);
            $table->unsignedDecimal('ibu', 5, 2);
            $table->unsignedDecimal('srm', 5, 2);

            $table->integer('brewery_id')->unsigned()->index();
            $table->integer('user_id')->unsigned()->index();
            $table->timestamps();

            $table->foreign('brewery_id')->references('id')->on('breweries')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('receipes');
    }
}
