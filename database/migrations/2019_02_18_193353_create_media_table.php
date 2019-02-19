<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMediaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(/**
         * @param Blueprint $table
         */
            'media', function (Blueprint $table) {
            $table->increments('id');
            $table->string('guid', 36); //GUID der Galerie
            $table->string('pathe'); //Pfad zur Datei
            $table->string('Name'); //Name der Datei

            $table->softDeletes(); //Delted_at Datum
            //$table->json('metadata'); //Metadaten der Datei
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
        Schema::dropIfExists('media');
    }
}
