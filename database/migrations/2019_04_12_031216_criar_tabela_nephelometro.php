<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaNephelometro extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nephelometro', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('dataNephelometro');
            $table->string('typeNephelometro');
            $table->string('coefNephelometro');
            $table->float('airtempNephelometro');
            $table->float('celltempNephelometro');
            $table->float('rhNephelometro');
            $table->float('pressureNephelometro');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('nephelometro');
    }
}