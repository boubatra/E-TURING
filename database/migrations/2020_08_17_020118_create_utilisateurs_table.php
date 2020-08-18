<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUtilisateursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('utilisateurs', function (Blueprint $table) {
            $table->id();
            $table->string('Prenom');
            $table->string('Nom');
            $table->integer('CIN');
            $table->string('Email')->unique();
            $table->string('Login')->unique();
            $table->string('Password');
            $table->string('Tel');
            $table->string('Domicile');
            $table->date('Date_nais');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('utilisateurs');
    }
}
