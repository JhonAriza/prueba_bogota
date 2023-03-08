<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     * 
     * cultural_rights   nacs    expertises
     */
    public function up()
    {
        Schema::create('categorias', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',50);
            $table->string('actividad',50);
            $table->unsignedBigInteger('id_expertises')->nullable();
            $table->unsignedBigInteger('id_cultural_rights')->nullable();
            $table->unsignedBigInteger('id_nacs')->nullable();
            $table->foreign('id_expertises')->references('id')->on('expertises');
            $table->foreign('id_cultural_rights')->references('id')->on('cultural_rights');
            $table->foreign('id_nacs')->references('id')->on('nacs');



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
        Schema::dropIfExists('categorias');
    }
};
