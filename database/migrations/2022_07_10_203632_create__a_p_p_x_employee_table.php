<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAPPXEmployeeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('APPX_employee', function (Blueprint $table) {
            $table->id();
            $table->string('firstname')->comment('Nombre del empleado');
            $table->string('lastname')->comment('Apellido del empleado');
            $table->unsignedBigInteger('department_id')->comment('Departamento del empleado');
            $table->integer('salary')->comment('Salario del empleado');
            $table->unsignedBigInteger('educationlevel_id')->comment('Nivel de educación del empleado');
            $table->timestamps();

            // Indices
            $table->index('department_id');
            $table->index('educationlevel_id');

            // Foraneas
            $table->foreign('department_id')->references('id')->on('APPX_department');
            $table->foreign('educationlevel_id')->references('id')->on('APPX_educationlevel');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('APPX_employee');
    }
}
