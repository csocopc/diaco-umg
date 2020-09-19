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

        Schema::create('consumidores', function (Blueprint $table) {            
            $table->integer('dpi')->nullable();
            $table->string('nit')->nullable()->default('C/F');
            $table->string('nombres')->nullable();
            $table->string('apellidos')->nullable();
            $table->string('direccion')->nullable();
            $table->integer('telefono')->nullable();
            $table->boolean('genero')->nullable();
            $table->unsignedBigInteger('id_municipio');            
            $table->foreign('id_municipio')->references('id')->on('municipios');
            $table->timestamps();
            $table->primary('dpi');
        });

        Schema::create('comercios', function (Blueprint $table) {            
            $table->integer('nit');
            $table->string('nombre');            
            $table->timestamps();
            $table->primary('nit');
        });

        Schema::create('sucursales', function (Blueprint $table) {                        
            $table->id();
            $table->string('nombre');
            $table->string('direccion');
            $table->integer('telefono');
            $table->integer('nit_comercio');
            $table->foreign('nit_comercio')->references('nit')->on('comercios');
            $table->unsignedBigInteger('id_municipio');            
            $table->foreign('id_municipio')->references('id')->on('municipios');
            $table->timestamps();
        });

        Schema::create('quejas', function (Blueprint $table) {
            $table->id();
            $table->integer('factura');
            $table->longText('detalle_queja');
            $table->longText('detalle_solucion')->nullable();
            $table->date('fecha_factura');
            $table->unsignedBigInteger('id_sucursal');            
            $table->foreign('id_sucursal')->references('id')->on('sucursales');
            $table->integer('dpi_consumidor')->nullable();            
            $table->foreign('dpi_consumidor')->references('dpi')->on('consumidores');
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
        Schema::dropIfExists('sucursales');
        Schema::dropIfExists('comercios');
        Schema::dropIfExists('consumidores');
        Schema::dropIfExists('municipios');
        Schema::dropIfExists('departamentos');
    }
}
