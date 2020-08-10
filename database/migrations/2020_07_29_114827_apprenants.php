<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Apprenants extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apprenants', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nomApprenant');
            $table->string('prenomApprenant');
            $table->date('dateDeNaissance');
            $table->string('ville');
            $table->string('formation');
            $table->string('etablissement');
            $table->string('lieuDeNaissance');
            $table->string('photo');
            $table->integer('tuteur_id')->index();
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
        Schema::dropIfExists('apprenants');
    }
}
