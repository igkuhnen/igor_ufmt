<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaAethalometro extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aethalometro', function (Blueprint $table) {
            $table->increments('id');
            $table->date('DateRpi');
            $table->time('TimeRpi');
            $table->float('conc370');
            $table->float('conc470');
            $table->float('conc520');
            $table->float('conc590');
            $table->float('conc660');
            $table->float('conc880');
            $table->float('conc950');
            $table->float('vflow');
            $table->float('sz370');
            $table->float('sb370');
            $table->float('rz370');
            $table->float('rb370');
            $table->float('fraction370');
            $table->float('attenuation370');
            $table->float('sz470');
            $table->float('sb470');
            $table->float('rz470');
            $table->float('rb470');
            $table->float('fraction470');
            $table->float('attenuation470');
            $table->float('sz520');
            $table->float('sb520');
            $table->float('rz520');
            $table->float('rb520');
            $table->float('fraction520');
            $table->float('attenuation520');
            $table->float('sz590');
            $table->float('sb590');
            $table->float('rz590');
            $table->float('rb590');
            $table->float('fraction590');
            $table->float('attenuation590');
            $table->float('sz660');
            $table->float('sb660');
            $table->float('rz660');
            $table->float('rb660');
            $table->float('fraction660');
            $table->float('attenuation660');
            $table->float('sz880');
            $table->float('sb880');
            $table->float('rz880');
            $table->float('rb880');
            $table->float('fraction880');
            $table->float('attenuation880');
            $table->float('sz950');
            $table->float('sb950');
            $table->float('rz950');
            $table->float('rb950');
            $table->float('fraction950');
            $table->float('attenuation950');
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
        Schema::dropIfExists('aethalometro');
    }
}
