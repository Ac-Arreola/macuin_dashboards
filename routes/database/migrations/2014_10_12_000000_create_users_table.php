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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('Ape_pat');
            $table->string('Ape_mat');
            $table->string('email')->unique();
            $table->unsignedBigInteger('id_dep');
            $table->unsignedBigInteger('id_rol');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
