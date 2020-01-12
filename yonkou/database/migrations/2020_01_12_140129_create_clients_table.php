<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateClientsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titre');
            $table->string('prenom');
            $table->string('nom');
            $table->string('local');
            $table->increments('ci');
            $table->increments('delivre');
            $table->increments('tel');
            $table->increments('prix');
            $table->increments('caution');
            $table->increments('contrat');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('clients');
    }
}
