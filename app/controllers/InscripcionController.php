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

		// dato para el email
		$datos['psico'] = $psicoterapia;

		if( $save ){
			$feedback = ['mensaje' => 'Gracias por ponerte en contacto, en breve nos estaremos comunicando.' , 'tipo' => 'success'];
			// Usuario
			Mail::queue('emails.eblastPsicologia', $datos, function($message) use($contacto){
			    $message->to($contacto['email'], $contacto['nombre'].' '.$contacto['apellido'])->subject('Gracias!');
			});
			// Admin
			Mail::queue('emails.inscripcion', $datos, function($message) use($contacto){
			    $message->to('contacto@tallerpsicologiazen.com.ar', $contacto['nombre'].' '.$contacto['apellido'])->subject('TERAPIA: Inscripto!');
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

	// TALLERES NORMALES
	public function getTaller1(){ return $this->viewTaller1(); }

	public function getTaller2(){ return $this->viewTaller2(); }

	public function getTaller3(){ return $this->viewTaller3(); }

	public function getTaller4(){ return $this->viewTaller4(); }

	// TALLER INTENSIVO
	public function getTaller5(){ return $this->viewTaller5(); }

	// TALLER COMPASION
	public function getTaller6(){ return $this->viewTaller6(); }

	public function getTaller7(){ return $this->viewTaller7(); }

	public function getTaller8(){ return $this->viewTaller8(); }

	public function getTaller9(){ return $this->viewTaller9(); }



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
				$contacto->taller1 = '22-08-2015 09:30:00';
				break;
			case 2:
				$contacto->taller2 = '19-09-2015 09:30:00';
				break;
			case 3:
				$contacto->taller3 = '24-10-2015 09:30:00';
				break;
			case 4:
				$contacto->taller4 = '21-11-2015 09:30:00';
				break;
			case 5:
				$contacto->taller1 = '15-08-2015 09:30:00';
				break;
			case 6:
				$contacto->taller2 = '29-08-2015 09:30:00';
				break;
			case 7:
				$contacto->taller3 = '26-09-2015 09:30:00';
				break;
			case 8:
				$contacto->taller4 = '31-10-2015 09:30:00';
				break;
			case 9:
				$contacto->taller4 = '29-11-2015 09:30:00';
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
			case 5:
				$datos['taller'] = 5;
				break;
			case 6:
				$datos['taller'] = 6;
				break;
			case 7:
				$datos['taller'] = 7;
				break;
			case 8:
				$datos['taller'] = 8;
				break;
			case 9:
				$datos['taller'] = 9;
				break;
		}

		// Email
		if( $save ){
			$feedback = ['mensaje' => 'Te has inscripto, te esperamos!' , 'tipo' => 'success'];
			// Usuario
			Mail::queue('emails.eblast', $datos, function($message) use($contacto){
			    $message->to($contacto['email'], $contacto['nombre'].' '.$contacto['apellido'])->subject('Gracias!');
			});
			// Admin
			Mail::queue('emails.inscripcion', $datos, function($message) use($contacto){
			    $message->to('contacto@tallerpsicologiazen.com.ar', $contacto['nombre'].' '.$contacto['apellido'])->subject('TALLER: Inscripto!');
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
			case 5:
				return $this->viewTaller5( $feedback );
				break;
			case 6:
				return $this->viewTaller6( $feedback );
				break;
			case 7:
				return $this->viewTaller7( $feedback );
				break;
			case 8:
				return $this->viewTaller8( $feedback );
				break;
			case 9:
				return $this->viewTaller9( $feedback );
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

	private function viewTaller5( $FEEDBACK = null ){

		if( $FEEDBACK ){
			return Redirect::route('taller5')
				->with('feedback',$FEEDBACK);
		}else{
			return View::make('taller5');
		}

	}

	private function viewTaller6( $FEEDBACK = null ){

		if( $FEEDBACK ){
			return Redirect::route('taller6')
				->with('feedback',$FEEDBACK);
		}else{
			return View::make('taller6');
		}

	}

	private function viewTaller7( $FEEDBACK = null ){

		if( $FEEDBACK ){
			return Redirect::route('taller7')
				->with('feedback',$FEEDBACK);
		}else{
			return View::make('taller7');
		}

	}

	private function viewTaller8( $FEEDBACK = null ){

		if( $FEEDBACK ){
			return Redirect::route('taller8')
				->with('feedback',$FEEDBACK);
		}else{
			return View::make('taller8');
		}

	}

	private function viewTaller9( $FEEDBACK = null ){

		if( $FEEDBACK ){
			return Redirect::route('taller9')
				->with('feedback',$FEEDBACK);
		}else{
			return View::make('taller9');
		}

	}


}
