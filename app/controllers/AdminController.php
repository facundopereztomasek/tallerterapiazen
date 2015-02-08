<?php

class AdminController extends BaseController {

	public function showAdmin(){
		// Traer preguntas contestadas/no contestadas
		$preguntas_contestadas_id = Respuesta::with('mensaje')->lists('mensaje_id');
		$preguntas_sin_contestar = Mensaje::whereNotIn( 'id' , $preguntas_contestadas_id )->orderBy('created_at','asc')->get();
		$preguntas_contestadas = Mensaje::whereIn( 'id' , $preguntas_contestadas_id )->with('respuesta')->orderBy('created_at','asc')->get();
		//return $preguntas_contestadas;
		// Preguntas sin contestar primero, preguntas contestadas despues
		$preguntas = array_merge($preguntas_sin_contestar->toArray(), $preguntas_contestadas->toArray());

		return View::make('admin')
			->with('preguntas',$preguntas);

	}

	public function doResponder(){
		if( Input::get('mensaje_id') && Input::get('texto') ){
			$ya_respondida = Respuesta::where('mensaje_id',Input::get('mensaje_id'))->first();
			if(!$ya_respondida){
				// Guarda respuesta
				$respuesta = new Respuesta();
				$respuesta->mensaje_id = Input::get('mensaje_id');
				$respuesta->texto = Input::get('texto');
				$respuesta->save();
			}

			// Actualiza Pregunta
			//$pregunta = Pregunta::find(Input::get('mensaje_id'));
			//$pregunta->touch();
		}
		return $this->showAdmin();

	}

	public function doBorrarPregunta( $PREGUNTA_ID ){

		$pregunta = Mensaje::find( $PREGUNTA_ID );
		if( $pregunta ){
			$pregunta->delete();
		}

		return $this->showAdmin();

	}

}