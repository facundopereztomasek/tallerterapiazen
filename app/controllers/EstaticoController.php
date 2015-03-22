<?php

class EstaticoController extends BaseController {

	public function getHome(){
		return View::make('home');
	}

	public function getMain(){
		return View::make('main');
	}

	public function getEnsenanzas(){
		return View::make('ensenanzas');
	}

	public function getListadoTalleres(){
		return View::make('talleres');
	}



}
