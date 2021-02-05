<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->id();
            $table->string('namePersona')->nullable();;
            $table->string('nombreCompleto')->nullable();
            $table->string('email');
            $table->string('telefono');
            $table->string('edad');
            $table->string('fechaNacimiento');
            $table->bigInteger('conf_id')->unsigned();
            $table->foreign('conf_id')->references('id')->on('configuracions')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->rememberToken();
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
        Schema::dropIfExists('personas');
    }
}
