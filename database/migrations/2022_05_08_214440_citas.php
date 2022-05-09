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
        //
        Schema::create('citas', function (Blueprint $table) {
            $table->id();
            $table->string('Nombre');
            $table->string('Raza');
            $table->string('Edad');
            $table->string('Motivo_Cita');
            $table->string('Fecha_Cita');
            $table->string('Propietario');
            $table->string('Imagen');
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
        //
    }
};
