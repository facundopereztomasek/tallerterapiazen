<?php

class InscripcionController extends BaseController {
	
	//-----------------------------------------
	// Psicoterapia
	//-----------------------------------------
	public function getPsicoterapia(){

		return $this->viewPsicoterapia();		

	}

	public function postPsicoterapia(){

		// Validacion
		$rules = array(
				'nombre' => 'required',
				'apellido' => 'required',
				'email' => 'required',
				'mensaje' => 'required'
			);

	    $validator = Validator::make(Input::all(), $rules);

	    if ($validator->fails()){
	    	$feedback = ['mensaje' => 'Error, Debe rellenar todos los campos.' , 'tipo' => 'error'];
	    	return $this->viewPsicoterapia( $feedback );
	    }

		// Tomo existente, sino Creo nuevo.
		$contacto = Contacto::firstOrCreate(array('email' => Input::get('email')));
		
		// Tomo datos del form
		$data = Input::only('nombre','apellido','email','telefono','skype','mensaje');
		
		// Relleno lo que falte
		$contacto->fill( $data );

		$psicoterapia = Input::get('psicoterapia');
		if( $psicoterapia == 1 ){
			$contacto->psicoterapia1 = 1;
		}else if( $psicoterapia == 2){
			$contacto->psicoterapia2 = 1;
		}

		$save = $contacto->save();
		
		$datos = $contacto->toArray();

		if( $save ){
			$feedback = ['mensaje' => 'Te has inscripto.' , 'tipo' => 'success'];
			// Usuario
			Mail::queue('emails.eblast', $datos, function($message) use($contacto){
			    $message->to($contacto['email'], $contacto['nombre'].' '.$contacto['apellido'])->subject('Gracias!');
			});
			// Admin
			Mail::queue('emails.eblast', $datos, function($message) use($contacto){
			    $message->to('contacto@tallerpsicologiazen.com.ar', $contacto['nombre'].' '.$contacto['apellido'])->subject('Usuario inscripto!');
			});
		}else{
			$feedback = ['mensaje' => 'Error, no se pudo enviar el formulario, intentalo más tarde.' , 'tipo' => 'error'];
		}

		return $this->viewPsicoterapia( $feedback );

	}

	private function viewPsicoterapia( $FEEDBACK = null ){
		
		if( $FEEDBACK ){
			return Redirect::route('psicoterapia')
				->with('feedback',$FEEDBACK);
		}else{
			return View::make('psicoterapia');
		}

	}

	//-----------------------------------------
	// Talleres
	//-----------------------------------------
	public function getTaller1(){

		return $this->viewTaller1();

	}
	public function getTaller2(){

		return $this->viewTaller2();

	}
	public function getTaller3(){

		return $this->viewTaller3();

	}
	public function getTaller4(){

		return $this->viewTaller4();

	}



	//--------------------------------------
	// POST TALLER
	//--------------------------------------

	public function postTaller(){

		// Validacion
		
		$rules = array(
				'nombre' => 'required',
				'apellido' => 'required',
				'email' => 'required',
				'mensaje' => 'required'
			);
		
	    $validator = Validator::make(Input::all(), $rules);

	    if ($validator->fails()){
	    	$feedback = ['mensaje' => 'Error, Debe rellenar todos los campos.' , 'tipo' => 'error'];
	    	return $this->viewTaller( $feedback );
	    }

	    $taller = Input::get('taller');

		// Tomo existente, sino Creo nuevo.
		$contacto = Contacto::firstOrCreate(array('email' => Input::get('email')));
		
		// Tomo datos del form
		$data = Input::only('nombre','apellido','email','mensaje');
		
		// Relleno lo que falte
		$contacto->fill( $data );

		// Guarda el taller al que se inscribio
		switch( $taller ){
			case 1:
				$contacto->taller1 = '28-03-2015 09:30:00';
				break;
			case 2:
				$contacto->taller2 = '25-04-2015 09:30:00';
				break;
			case 3:
				$contacto->taller3 = '30-05-2015 09:30:00';
				break;
			case 4:
				$contacto->taller4 = '27-06-2015 09:30:00';
				break;

		}

		$save = $contacto->save();

		// Datos para el email
		$datos = $contacto->toArray();

		// Datos dependiendo del taller
		switch( $taller ){
			case 1:
				$datos['taller'] = 1;
				break;
			case 2:
				$datos['taller'] = 2;
				break;
			case 3:
				$datos['taller'] = 3;
				break;
			case 4:
				$datos['taller'] = 4;
				break;
		}

		// Email
		if( $save ){
			$feedback = ['mensaje' => 'Te has inscripto.' , 'tipo' => 'success'];
			// Usuario
			Mail::queue('emails.eblast', $datos, function($message) use($contacto){
			    $message->to($contacto['email'], $contacto['nombre'].' '.$contacto['apellido'])->subject('Gracias!');
			});
			// Admin
			Mail::queue('emails.eblast', $datos, function($message) use($contacto){
			    $message->to('contacto@tallerpsicologiazen.com.ar', $contacto['nombre'].' '.$contacto['apellido'])->subject('Usuario inscripto!');
			});
		}else{
			$feedback = ['mensaje' => 'Error, no se pudo enviar el formulario, intentalo más tarde.' , 'tipo' => 'error'];
		}


		// Dependiendo del taller al que se inscribio, devuelve su vista.
		switch( $taller ){
			case 1:
				return $this->viewTaller1( $feedback );
				break;
			case 2:
				return $this->viewTaller2( $feedback );
				break;
			case 3:
				return $this->viewTaller3( $feedback );
				break;
			case 4:
				return $this->viewTaller4( $feedback );
				break;

		}
		

	}





	//--------------------------------------
	// VIEW TALLER
	//--------------------------------------

	private function viewTaller1( $FEEDBACK = null ){

		if( $FEEDBACK ){
			return Redirect::route('taller1')
				->with('feedback',$FEEDBACK);
		}else{
			return View::make('taller1');
		}

	}

	private function viewTaller2( $FEEDBACK = null ){

		if( $FEEDBACK ){
			return Redirect::route('taller2')
				->with('feedback',$FEEDBACK);
		}else{
			return View::make('taller2');
		}

	}

	private function viewTaller3( $FEEDBACK = null ){

		if( $FEEDBACK ){
			return Redirect::route('taller3')
				->with('feedback',$FEEDBACK);
		}else{
			return View::make('taller3');
		}

	}

	private function viewTaller4( $FEEDBACK = null ){

		if( $FEEDBACK ){
			return Redirect::route('taller4')
				->with('feedback',$FEEDBACK);
		}else{
			return View::make('taller4');
		}

	}


}