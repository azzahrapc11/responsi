<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Create12753AzzahraModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('12753__azzahra_models', function (Blueprint $table) {
            $table->increments('id');
			$table->string('nama');//membuat kolom nama
            $table->string('email');//membuat kolom email
            $table->string('password');//membuat kolom pass
			$table->string('macAddress');//membuat kolom mac address
            
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
        Schema::dropIfExists('12753__azzahra_models');
    }
}
