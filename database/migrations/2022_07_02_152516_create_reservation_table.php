<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservation', function (Blueprint $table) {
            $table->id();
            $table->foreignId('hotel_id')->constrained()->onUpdate('cascade')->onDelete('cascade');




            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('hotel_id');
            $table->date('date_reserv');
            $table->string('duree_sejour');
            $table->integer('nombre_chambre');
            $table->integer('nombre_perso');
            
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
        Schema::dropIfExists('reservation');
    }
}
