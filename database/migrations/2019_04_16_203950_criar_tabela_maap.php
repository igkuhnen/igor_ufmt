<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaMaap extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('maap', function (Blueprint $table) {
            $table->increments('id');
            $table->date('dateRpiMaap');
            $table->time('timeRpiMaap');
            $table->date('dateMaap');
            $table->time('timeMaap');
            $table->float('statusMaap');
            $table->float('concentrationofBCMaap');
            $table->float('massaofBCMaap');
            $table->float('airFlowRateMaap');
            $table->float('lastValueMaap');
            $table->float('meanof1hMaap');
            $table->float('meanof3hMaap');
            $table->float('meanof24hMaap');
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
         Schema::dropIfExists('maap');
    }
}
