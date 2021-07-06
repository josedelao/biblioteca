<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearPermisoRolTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permisoRol', function (Blueprint $table) {
            $table->increments('id');
             $table->unsignedInteger('rol_id');
            $table->foreign('rol_id','FK_permisoRol_rol')->references('id')->on('rol')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedInteger('permiso_id');
            $table->foreign('permiso_id','FK_permisoRol_permiso')->references('id')->on('permiso')->onDelete('restrict')->onUpdate('restrict');
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
        Schema::dropIfExists('permisoRol');
    }
}
