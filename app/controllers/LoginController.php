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

	public function doGenerarPassword(){

		$usuario = User::first(); // el unico admin.

		$codigo 					= str_random(60);
		$password_temp 				= str_random(10);
		$usuario->codigo			= $codigo;
		$usuario->password_temp 	= Hash::make( $password_temp );

		// Si guarda , manda email con nueva clave y activacion de la clave nueva.
		if( $usuario->save() ){
			$data = $usuario->toArray();
			$data['password_temp'] = $password_temp; // le pasamos la pass sin encriptar
			Mail::queue('emails.olvidePassword', $data, function($message) use ($usuario){
			  $message->to('lucianoperezt@gmail.com', 'gustavo')
			          ->subject('Se generó una nueva contraseña para tu cuenta.');
			});
		}

		return View::make('generarPassword');

	}

	public function doNuevoPassword( $codigo ){

		$usuario = User::where( 'codigo' , $codigo )->first();


		if( is_object($usuario) ){
			$usuario->password = $usuario->password_temp;

			$usuario->password_temp = '';
			$usuario->codigo = '';

			if( $usuario->save() ){
				return Redirect::route('login')->with('msg-success','Ya podés logearte con tu nueva contraseña.');
			}
		}else{

			return Redirect::route('login')->with('msg-fail','Puede que ya hayas activado la nueva contraseña.');
		}

		return Redirect::route('login')->with('msg-fail','Algo anda mal, no se pudo generar la nueva contraseña.');

	}



}