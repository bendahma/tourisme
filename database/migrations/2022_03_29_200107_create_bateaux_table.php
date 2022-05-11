<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBateauxTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bateaux', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->integer('max_perso');
            $table->double('prix');
            $table->date('depart');
            $table->date('arrivee');
            $table->unsignedBigInteger('abonne_id');
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
        Schema::dropIfExists('bateaux');
    }
}
