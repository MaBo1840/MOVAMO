<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGalleriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('galleries', function (Blueprint $table) {
            $table->increments('id'); //ID der Galerie
            $table->string('guid', 36); //GUID der Galerie
            $table->string('name'); //Name der Galerie
            $table->string('description'); //Beschreibung der Galerie
            $table->integer('maxObjects'); //Maximale Anzahl der Objekte
            $table->softDeletes(); //Delted_at Datum
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
        Schema::dropIfExists('galleries');
    }
}
