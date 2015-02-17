<?php

class InscripcionController extends BaseController {
	
	//-----------------------------------------
	// Piscoterapia
	//-----------------------------------------
	public function getPsicoterapia(){

		return $this->viewPiscoterapia();		

	}

	public function postPsicoterapia(){
		// Tomo existente, sino Creo nuevo.
		$contacto = Contacto::firstOrCreate(array('email' => Input::get('email')));
		
		// Tomo datos del form
		$data = Input::only('nombre','apellido','email','telefono','skype','mensaje');
		
		// Relleno lo que falte
		$contacto->fill( $data );

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
			    $message->to('lucianoperezt@gmail.com', $contacto['nombre'].' '.$contacto['apellido'])->subject('Usuario inscripto!');
			});
		}else{
			$feedback = ['mensaje' => 'Error, no se pudo enviar el formulario, intentalo más tarde.' , 'tipo' => 'error'];
		}

		return $this->viewPiscoterapia( $feedback );

	}

	private function viewPiscoterapia( $FEEDBACK = null ){
		
		return Redirect::route('psicoterapia')
			->with('feedback',$FEEDBACK);

	}

	//-----------------------------------------
	// Talleres
	//-----------------------------------------
	public function getTaller(){

		return View::make('taller');

	}

	public function postTaller(){

		// Tomo existente, sino Creo nuevo.
		$contacto = Contacto::firstOrCreate(array('email' => Input::get('email')));
		
		// Tomo datos del form
		$data = Input::only('nombre','apellido','email','mensaje');
		
		// Relleno lo que falte
		$contacto->fill( $data );

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
			    $message->to('lucianoperezt@gmail.com', $contacto['nombre'].' '.$contacto['apellido'])->subject('Usuario inscripto!');
			});
		}else{
			$feedback = ['mensaje' => 'Error, no se pudo enviar el formulario, intentalo más tarde.' , 'tipo' => 'error'];
		}

		return $this->viewTaller( $feedback );

	}

	private function viewTaller( $FEEDBACK = null ){

		return Redirect::route('taller')
			->with('feedback',$FEEDBACK);

	}


}