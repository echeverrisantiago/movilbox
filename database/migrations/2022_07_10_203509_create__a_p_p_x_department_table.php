<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAPPXDepartmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('APPX_department', function (Blueprint $table) {
            $table->id();
            $table->string('department_name')->comment('Nombre del departamento');
            $table->string('department_city')->comment('Ciudad del departamento');
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
        Schema::dropIfExists('APPX_department');
    }
}
