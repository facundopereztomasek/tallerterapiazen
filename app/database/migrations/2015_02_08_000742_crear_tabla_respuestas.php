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
		if (!Schema::hasTable('respuestas')){
			Schema::create('respuestas', function($table){
			    $table->increments('id');

			    $table->integer('mensaje_id')->unsigned();
			    $table->foreign('mensaje_id')->references('id')->on('mensajes')
			    	->onUpdate('cascade')
			    	->onDelete('cascade');

			    $table->text('texto');
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
		Schema::dropIfExists('respuestas');
	}

}
