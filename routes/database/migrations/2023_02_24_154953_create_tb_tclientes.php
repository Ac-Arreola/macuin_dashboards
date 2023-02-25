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
        Schema::create('tb_tclientes', function (Blueprint $table) {
            $table->id('id_tcli');
            $table->unsignedBigInteger('id_usu');
            $table->unsignedBigInteger('id_sta');
            $table->unsignedBigInteger('id_cla');
            $table->string('Comentarios')->nullable();
            $table->string('Fecha');
            
            $table->timestamps();

            $table->foreign('id_usu')->references('id')->on('users')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreign('id_cla')->references('id_cla')->on('tb_clasificacion')
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->foreign('id_sta')->references('id_sta')->on('tb__status')
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
        Schema::dropIfExists('tb_tclientes');
    }
};
