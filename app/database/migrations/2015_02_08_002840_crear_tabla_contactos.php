<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaContactos extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		if (!Schema::hasTable('contactos')){
			Schema::create('contactos', function($table){
			    $table->increments('id');
			    $table->string('nombre');
			    $table->string('apellido');
			    $table->string('email');
			    $table->string('telefono');
			    $table->string('skype');
			    $table->text('mensaje');
			    $table->string('taller1');
			    $table->string('taller2');
			    $table->string('taller3');
			    $table->string('taller4');
			    $table->string('psicoterapia1');
			    $table->string('psicoterapia2');
			    $table->timestamps();
			});
		}
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('contactos');
	}

}
