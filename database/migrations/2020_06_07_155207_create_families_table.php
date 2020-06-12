<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFamiliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('families', function (Blueprint $table) {
            $table->increments('id');
            $table->string('no')->unique();
            $table->string('primer_nombre');
            $table->string('segundo_nombre')->nullable();
            $table->string('primer_apellido');
            $table->string('segundo_apellido')->nullable();
            $table->integer('integrantes')->unsigned();
            $table->enum('estado_civil', ['Casado/a', 'Divorciado/a', 'Soltero/a', 'Separado/a', 'Viudo/a']);
            $table->string('dpi')->nullable();
            $table->string('direccion')->nullable();
            $table->integer('zona');
            $table->string('colonia')->nullable();
            $table->integer('telefono')->unsigned();
            $table->string('imagen')->nullable()->unique();
            $table->float('lat', 10, 6)->nullable();
            $table->float('lon', 10, 6)->nullable();
            $table->string('contador_agua')->nullable();
            $table->string('contador_luz')->nullable();
            $table->boolean('despensa')->nullable()->default(false);
            $table->integer('user_id')->nullable()->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('families');
    }
}
