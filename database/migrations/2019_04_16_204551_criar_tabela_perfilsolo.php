<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaPerfilsolo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('perfilsolo', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('datatime');
            $table->float('record');
            $table->float('BattV');
            $table->float('PTemp_C');
            $table->float('T108_C');
            $table->float('T108_C_2');
            $table->float('T108_C_3');
            $table->float('T108_C_4');
            $table->float('T108_C_5');
            $table->float('DiffVolt');
            $table->float('DiffVolt_2');
            $table->float('DiffVolt_3');
            $table->float('DiffVolt_4');
            $table->float('VW');
            $table->float('PA_uS');
            $table->float('VW_2');
            $table->float('PA_uS_2');
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
        Schema::dropIfExists('perfilsolo');
    }
}
