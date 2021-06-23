<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSolicitanteOutorgaColetivasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitante_outorga_coletivas', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('email');
            $table->integer('cpf_cnpj');
            $table->integer('rg');
            $table->string('montante_jusante');
            $table->string('local_captacao');
            $table->string('latitude');
            $table->string('longitude');
            $table->string('tipo_uso');
            $table->float('volume_jan');
            $table->float('volume_fev');
            $table->float('volume_mar');
            $table->float('volume_abr');
            $table->float('volume_mai');
            $table->float('volume_jun');
            $table->float('volume_jul');
            $table->float('volume_ago');
            $table->float('volume_set');
            $table->float('volume_out');
            $table->float('volume_nov');
            $table->float('volume_dez');
            $table->longText('observacao');
            
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
        Schema::dropIfExists('solicitante_outorga_coletivas');
    }
}
