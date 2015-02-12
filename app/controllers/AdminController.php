<?php

class AdminController extends BaseController {

	public function showAdmin(){

		return $this->viewAdmin();

	}

	public function doResponder(){
		if( Input::get('mensaje_id') && Input::get('texto') ){
			$ya_respondida = Respuesta::where('mensaje_id',Input::get('mensaje_id'))->first();
			if(!$ya_respondida){
				// Guarda respuesta
				$respuesta = new Respuesta();
				$respuesta->mensaje_id = Input::get('mensaje_id');
				$respuesta->texto = Input::get('texto');
				$save = $respuesta->save();

			}
		}

		if( ISSET($save) && $save ){
			$feedback = ['mensaje' => 'Has respondido la pregunta.' , 'tipo' => 'success'];
		}else{
			$feedback = ['mensaje' => 'Error, no se pudo responder la pregunta, intentalo más tarde.' , 'tipo' => 'error'];
		}

		return $this->viewAdmin( $feedback );

	}

	public function doBorrarPregunta( $PREGUNTA_ID ){

		$pregunta = Mensaje::find( $PREGUNTA_ID );
		if( $pregunta ){
			$delete = $pregunta->delete();
		}
		if( ISSET($delete) && $delete ){
			$feedback = ['mensaje' => 'Has borrado la pregunta.' , 'tipo' => 'success'];
		}else{
			$feedback = ['mensaje' => 'Error, no se pudo borrar la pregunta, intentalo más tarde.' , 'tipo' => 'error'];
		}

		return $this->viewAdmin( $feedback );

	}

	private function viewAdmin( $FEEDBACK = null ){
		// Traer preguntas contestadas/no contestadas
		$preguntas_contestadas_id = Respuesta::with('mensaje')->lists('mensaje_id');
		if( !$preguntas_contestadas_id ){
			$preguntas_contestadas_id = array('id',0);
		}
		$preguntas_sin_contestar = Mensaje::whereNotIn( 'id' , $preguntas_contestadas_id )->orderBy('created_at','desc')->get();
		$preguntas_contestadas = Mensaje::whereIn( 'id' , $preguntas_contestadas_id )->with('respuesta')->orderBy('created_at','desc')->get();

		// Preguntas sin contestar primero, preguntas contestadas despues
		$preguntas = array_merge($preguntas_sin_contestar->toArray(), $preguntas_contestadas->toArray());

		return View::make('admin')
			->with('preguntas',$preguntas)
			->with('feedback',$FEEDBACK);
	}

}