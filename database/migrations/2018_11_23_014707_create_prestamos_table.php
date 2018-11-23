<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrestamosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prestamos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_libro')->unsigned();
            $table->foreign('id_libro')->references('id')->on('libros');
            $table->integer('id_estudiante')->unsigned();
            $table->foreign('id_estudiante')->references('id')->on('estudiantes');
            $table->integer('id_empleado')->unsigned();
            $table->foreign('id_empleado')->references('id')->on('empleados');
            $table->string('prestamo');
            $table->string('entrega');
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
        Schema::dropIfExists('prestamos');
    }
}
