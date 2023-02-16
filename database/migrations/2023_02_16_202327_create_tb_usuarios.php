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
        Schema::create('tb_usuarios', function (Blueprint $table) {
            $table->id('id_usu');
            $table->unsignedBigInteger('id_dep');
            $table->unsignedBigInteger('id_rol');
            $table->string('Nombre');
            $table->string('Ape_pat');
            $table->string('Ape_mat');
            $table->string('Username');
            $table->string('Email');
            $table->string('Password');
          
            $table->timestamps();

            $table->foreign('id_dep')->references('id_dep')->on('tb_departamentos')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreign('id_rol')->references('id_rol')->on('tb_roles')
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
        Schema::dropIfExists('tb_usuarios');
    }
};
