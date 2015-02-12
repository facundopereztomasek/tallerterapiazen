<?php

class LoginController extends BaseController {

	public function getLogin(){

		return View::make('login');

	}

	public function doLogin(){
		//return Hash::make('123');
		$user = Input::get('usuario');
		$password = Input::get('password');
		$credentials = array('user' => $user, 'password' => $password);

		$attempt = Auth::attempt($credentials);
    	if($attempt){
			return Redirect::route('admin');
		}else{
			return Redirect::route('login')->withErrors($attempt);
		}

	}

	public function doLogout(){
		
		Auth::logout();
		return Redirect::route('home');

	}



}