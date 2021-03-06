<?php

class MensajeController extends BaseController {

	public function getMensajes(){
		/*
		$respuestas = Respuesta::with('mensaje')->get();

		return View::make('contacto')
			->with('respuestas',$respuestas);
		*/
		return $this->viewContacto();

	}

	public function postMensaje(){

		$feedback = null;
		// Validacion
		$rules = array(
				'nombre' => 'required',
				'texto' => 'required',
			);

	    $validator = Validator::make(Input::all(), $rules);

	    if ($validator->fails()){
	    	$feedback = ['mensaje' => 'Error, Debe rellenar todos los campos.' , 'tipo' => 'error'];
	    	return $this->viewContacto( $feedback );
	    }

	    // Guardar mensaje
		$mensaje = new Mensaje();
		$mensaje->nombre = Input::get('nombre');
		$mensaje->texto = Input::get('texto');
		$save = $mensaje->save();

		if( $save ){
			$feedback = ['mensaje' => 'Gracias por enviar tu pregunta. En breve estaré respondiendo.' , 'tipo' => 'success'];
		}else{
			$feedback = ['mensaje' => 'Error, no se pudo enviar tu pregunta, intentalo más tarde.' , 'tipo' => 'error'];
		}

		$respuestas = Respuesta::with('mensaje')->orderBy('created_at','desc')->get();
		return Redirect::route('contacto')
			->with('respuestas',$respuestas)
			->with('feedback',$feedback);

	}

	// View contacto con contenido
	private function viewContacto( $FEEDBACK = null ){
		$respuestas = Respuesta::with('mensaje')->orderBy('created_at','desc')->get();
		return View::make('contacto')
			->with('respuestas',$respuestas)
			->with('feedback',$FEEDBACK);

	}

}
