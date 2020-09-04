<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablasDiaco extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consumidores', function (Blueprint $table) {
            $table->id();
            $table->string('nit')->nullable()->default('C/F');
            $table->string('nombres');
            $table->string('apellidos');
            $table->string('direccion');
            $table->integer('telefono')->nullable();
            $table->boolean('genero');
            $table->timestamps();
        });

        Schema::create('departamentos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('region');
            $table->timestamps();
        });

        Schema::create('municipios', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->unsignedBigInteger('id_departamento');            
            $table->foreign('id_departamento')->references('id')->on('departamentos');
            $table->timestamps();
        });

        Schema::create('comercios', function (Blueprint $table) {
            $table->id();
            $table->string('nit');
            $table->string('nombre');
            $table->string('direccion');
            $table->integer('telefono');
            $table->unsignedBigInteger('id_municipio');            
            $table->foreign('id_municipio')->references('id')->on('municipios');
            $table->timestamps();
        });

        Schema::create('quejas', function (Blueprint $table) {
            $table->id();
            $table->integer('factura');
            $table->longText('detalle_queja');
            $table->longText('detalle_solucion')->nullable();
            $table->date('fecha_facura');
            $table->unsignedBigInteger('id_comercio');            
            $table->foreign('id_comercio')->references('id')->on('comercios');
            $table->unsignedBigInteger('id_consumidor');            
            $table->foreign('id_consumidor')->references('id')->on('consumidores');
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
        Schema::dropIfExists('quejas');
        Schema::dropIfExists('comercios');
        Schema::dropIfExists('municipios');
        Schema::dropIfExists('departamentos');
        Schema::dropIfExists('consumidores');
    }
}
