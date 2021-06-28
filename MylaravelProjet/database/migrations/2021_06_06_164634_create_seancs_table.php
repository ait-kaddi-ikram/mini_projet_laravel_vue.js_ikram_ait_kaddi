<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeancsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seancs', function (Blueprint $table) {
            $table->id();
            $table->string('jour');
            $table->time('heure_debut');
            $table->time('heure_fin');
            $table->foreignId('id_module');
            $table->foreignId('num_salle');
           $table->foreign('id_module')->references('id')->on('modules')->onDelete('cascade');
            $table->foreign('num_salle')->references('id')->on('salles')->onDelete('cascade');
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
        Schema::dropIfExists('seancs');
    }
}
