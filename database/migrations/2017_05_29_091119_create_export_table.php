<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExportTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $table->increments('id');
        $table->string('repertoire')->unique();
        $table->string('nomDest');
        $table->string('prenomDest');
        $table->string('nomEnvoyeur');
        $table->string('prenomEnvoyeur');
        $table->string('regime');
        $table->string('depositaire');
        $table->string('navire');
        $table->integer('nbrColis');
        $table->integer('poids');
        $table->integer('volume');
        $table->string('numConteneur');
        $table->string('nature');
        $table->string('pays');
        $table->string('numBl');
        $table->string('manifeste')->default('0');
        $table->string('declaration')->default('0');
        $table->string('douane')->default('0');
        $table->string('article')->default('0');
        $table->string('inspecteur')->default('0');
        $table->string('droit')->default('0');
        $table->string('orbus')->default('0');
        $table->string('libelle')->default('0');
        $table->dateTime('date')->default('12/12/12');
        $table->string('reçu')->default('0');
        $table->string('cheque')->default('0');
        $table->string('acompte')->default('0');
        $table->string('reliquat')->default('0');
        $table->string('visa')->default('0');
        $table->string('visaTransit')->default('0');
        $table->string('visaDaf')->default('0');
        $table->dateTime('datebea')->default('12/12/12');
        $table->dateTime('dateDeclaration')->default('12/12/12');
        $table->string('slug')->default('0');
        $table->string('quitance')->default('0');
        $table->string('copieDeclaration')->default('0');
        $table->string('copieCheque')->default('0');
        $table->string('copieBon')->default('0');
        $table->string('copieBl')->default('0');
        $table->string('copieFacture')->default('0');
        $table->string('copieListe')->default('0');
        $table->string('copieNote')->default('0');
        $table->string('copieCarte')->default('0');
        $table->string('copieCMC')->default('0');





        $table->enum('case',['0', '1', '2','3'])->default('0');



        $table->timestamps();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
