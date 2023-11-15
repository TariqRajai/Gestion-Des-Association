<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contients', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idActivite');
            $table->foreign('idActivite')->references('idActivite')->on('activites');
            $table->integer('NumeroNational');
            $table->foreign('NumeroNational')->references('NumeroNational')->on('assocs');
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
        Schema::dropIfExists('contients');
    }
}
