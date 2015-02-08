<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaMensajes extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mensajes', function($table){
		    $table->increments('id');
		    $table->string('email');
		    $table->string('nombre', 128);
		    $table->text('texto');
		    $table->boolean('visible')->default(0);
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
		Schema::drop('mensajes');
	}

}
