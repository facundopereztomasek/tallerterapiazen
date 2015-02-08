<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaRespuestas extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('respuestas', function($table){
		    $table->increments('id');

		    $table->string('mensaje_id');
		    $table->foreign('mensaje_id')->references('id')->on('mensajes');

		    $table->text('texto');
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

}
