<?php

class TodoSeeder extends Seeder {
    public function run(){
        DB::table('mensajes')->delete();
        Mensaje::create(array(
    		'email' => 'foo@bar.com',
    		'nombre' => 'luarencio',
    		'texto' => 'Hola quería saber el sentido de la vida.',
        ));
        Mensaje::create(array(
    		'email' => 'pepe@mujica.com',
    		'nombre' => 'pepe',
    		'texto' => 'Hola, quería saber cuánto estaba el kilo de fruta fresca en el chino de acá a la vuelta. Gracias! Hola, quería saber cuánto estaba el kilo de fruta fresca en el chino de acá a la vuelta. Gracias!',
        ));
        Mensaje::create(array(
    		'email' => 'facu@perez.com',
    		'nombre' => 'facu',
    		'texto' => 'Hola soy facu perez, quería saber cuánto estaba el kilo de fruta fresca en el chino de acá a la vuelta. Gracias! Hola, quería saber cuánto estaba el kilo de fruta fresca en el chino de acá a la vuelta. Gracias!',
        ));


        DB::table('respuestas')->delete();
        $mensajes = Mensaje::take(3)->get();
        if($mensajes){
	        Respuesta::create(array(
	    		'mensaje_id' => $mensajes[0]->id,
	    		'texto' => 'Que se yo',
	        ));
	        Respuesta::create(array(
	    		'mensaje_id' => $mensajes[1]->id,
	    		'texto' => 'La respuesta esta en tu corazón',
	        ));
	        Respuesta::create(array(
	    		'mensaje_id' => $mensajes[2]->id,
	    		'texto' => 'Ni idea.',
	        ));
    	}
    }
}