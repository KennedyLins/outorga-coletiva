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
            $table->string('cpf_cnpj');
            $table->string('rg');
            $table->string('montante_jusante');
            $table->string('local_captacao');
            $table->string('latitude')->nullable();;
            $table->string('longitude')->nullable();;
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
            $table->longText('observacao')->nullable();
            $table->timestamps();
            $table->unsignedBigInteger('sistema_hidricos_id');
            $table->foreign('sistema_hidricos_id')->references('id')->on('sistema_hidricos');
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
