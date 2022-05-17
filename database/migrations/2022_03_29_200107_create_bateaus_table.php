<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBateausTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bateaus', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->integer('max_perso');
            $table->double('prix');
            $table->date('date_depart');
            $table->date('date_arrivee');
            $table->string('lieu_depart');
            $table->string('lieu_arrivee');
            $table->string('image');
            $table->foreignId('abonne_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
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
