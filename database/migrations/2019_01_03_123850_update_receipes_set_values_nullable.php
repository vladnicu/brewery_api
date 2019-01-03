<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateReceipesSetValuesNullable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('receipes', function (Blueprint $table) {
            $table->string('method')->nullable()->change();
            $table->string('style')->nullable()->change();
            $table->unsignedInteger('boil_time')->nullable()->change();
            $table->unsignedInteger('boil_size')->nullable()->change();
            $table->unsignedDecimal('o_gravity', 4, 3)->nullable()->change();
            $table->unsignedDecimal('f_gravity', 4, 3)->nullable()->change();
            $table->unsignedDecimal('abv', 4, 2)->nullable()->change();
            $table->unsignedDecimal('ibu', 5, 2)->nullable()->change();
            $table->unsignedDecimal('srm', 5, 2)->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('receipes', function (Blueprint $table) {
            $table->string('method')->nullable(false)->change();
            $table->string('style')->nullable(false)->change();
            $table->unsignedInteger('boil_time')->nullable(false)->change();
            $table->unsignedInteger('boil_size')->nullable(false)->change();
            $table->unsignedDecimal('o_gravity', 4, 3)->nullable(false)->change();
            $table->unsignedDecimal('f_gravity', 4, 3)->nullable(false)->change();
            $table->unsignedDecimal('abv', 4, 2)->nullable(false)->change();
            $table->unsignedDecimal('ibu', 5, 2)->nullable(false)->change();
            $table->unsignedDecimal('srm', 5, 2)->nullable(false)->change();
        });
    }
}
