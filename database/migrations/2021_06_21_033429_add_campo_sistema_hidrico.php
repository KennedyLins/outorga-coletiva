<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCampoSistemaHidrico extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('solicitante_outorga_coletivas', function (Blueprint $table) {

            $table->string('sistema_hidrico');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('solicitante_outorga_coletivas', function (Blueprint $table) {

            $table->dropColumn('sistema_hidrico');

        });
    }
}
