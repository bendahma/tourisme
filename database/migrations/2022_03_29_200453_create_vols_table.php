<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vols', function (Blueprint $table) {
            $table->id();
            $table->string('nom_compagne');
            $table->string('image_compagne');
            $table->string('lieu_debart');
            $table->string('lieu_arrive');
            $table->date('date_debart');
            $table->date('date_arrive');
            $table->string('classage_vol');
            $table->string('prix');
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
        Schema::dropIfExists('vols');
    }
}
