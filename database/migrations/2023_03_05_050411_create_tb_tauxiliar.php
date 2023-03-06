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
     */
    public function up()
    {
        Schema::create('tb_tauxiliar', function (Blueprint $table) {
            $table->id('id_taux');
            $table->unsignedBigInteger('id_tcli');
            $table->unsignedBigInteger('id_usu');
            $table->string('Comentarios')->nullable();
            $table->string('Comentarios_cli')->nullable();
            
            $table->string('Fecha');
            $table->timestamps();

            $table->foreign('id_tcli')->references('id_tcli')->on('tb_tclientes')
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->foreign('id_usu')->references('id')->on('users')
            ->onUpdate('cascade')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_tauxiliar');
    }
};
