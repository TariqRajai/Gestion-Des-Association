<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssocsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assocs', function (Blueprint $table) {
            $table->increments('NumeroNational');
            $table->string('Nom', 30);
            $table->string('LieuAssoc', 30);
            $table->date('DateCreation');
            $table->string('TypeActivite', 30);
            $table->string('NomPresident', 30);
            $table->string('NumTel', 30);
            $table->string('Cin', 30);
            $table->string('document', 255);
            $table->string('documentRenouvelementOffice', 255);
            $table->date('DureeOffice');
            $table->integer('idUser');
            $table->foreign('idUser')->references('idUser')->on('utilisateurs');
            $table->integer('idQuartier');
            $table->foreign('idQuartier')->references('idQuartier')->on('quartiers');
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
        Schema::dropIfExists('assocs');
    }
}
