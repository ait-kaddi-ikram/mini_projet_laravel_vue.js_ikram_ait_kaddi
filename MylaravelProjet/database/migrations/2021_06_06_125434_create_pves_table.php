<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePvesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pves', function (Blueprint $table) {
            $table->id();
            $table->string('sujet');
            $table->date('date_pfe');
            $table->foreignId('id_etudiant');
            $table->foreign('id_etudiant')->references('id')->on('etudiants')->onDelete('cascade');
            $table->foreignId('id_prof');
            $table->foreign('id_prof')->references('id')->on('profs')->onDelete('cascade');
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
        Schema::dropIfExists('pves');
    }
}
