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
    		'email' => 'facundopereztomasek@gmail.com',
    		'nombre' => 'facu',
    		'texto' => 'Hola soy facu perez, quería saber cuánto estaba el kilo de fruta fresca en el chino de acá a la vuelta. Gracias! Hola, quería saber cuánto estaba el kilo de fruta fresca en el chino de acá a la vuelta. Gracias!',
        ));
        Mensaje::create(array(
            'email' => 'lucianoperezt@gmail.com',
            'nombre' => 'luco',
            'texto' => 'Hola quería saber que pasa si te metes en un agujero de gusano.',
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
        DB::table('users')->delete();
        User::create(array(
            'user' => 'gustavo',
            'password' => '$2y$10$BWw7s/DIj5w5MhhYVg6YwetYfg7ns1G7bnZXcjBJnWo.OZhxEz1jy'
        ));
    }
}