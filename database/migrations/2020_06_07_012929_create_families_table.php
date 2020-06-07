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
            $table->string('no');
            $table->string('primer_nombre');
            $table->string('segundo_nombre');
            $table->string('primer_apellido');
            $table->string('segundo_apellido');
            $table->integer('integrantes');
            $table->enum('estado_civil', ['Separado/a', 'Viudo/a', 'Soltero/a', 'Casado/a']);
            $table->string('dpi');
            $table->string('direccion');
            $table->integer('zona');
            $table->string('colonia');
            $table->integer('telefono');
            $table->string('imagen');
            $table->float('lat', 10, 6);
            $table->float('lon', 10, 6);
            $table->string('contador_agua');
            $table->string('contador_luz');
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
