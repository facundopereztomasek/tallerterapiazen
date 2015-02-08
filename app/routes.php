<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', array( 'as' => 'home' , function()
{
	return View::make('home');
}));

Route::get('ensenanzas', array( 'as' => 'ensenanzas' , function()
{
	return View::make('ensenanzas');
}));

Route::get('talleres', array( 'as' => 'talleres' , function()
{
	return View::make('talleres');
}));

/************************************************/
/*
	Ruta temporal a cada taller (Fija)
*/

Route::get('taller', array( 'as' => 'taller' , function()
{
	return View::make('taller');
}));

/************************************************/

Route::get('psicoterapia', array( 'as' => 'psicoterapia' , function()
{
	return View::make('psicoterapia');
}));

Route::get('contacto',array('as' => 'contacto', 'uses' => 'MensajeController@getMensajes'));



/************************************************/
// ADMIN
/************************************************/
Route::get('admin/cms_admin_zen',array('as' => 'admin', 'uses' => 'AdminController@showAdmin'));
Route::post('admin/cms_admin_zen',array('uses' => 'AdminController@doResponder'));

// Acciones Admin
Route::get('admin/cms_admin_zen/pregunta/borrar/{id}',array('as' => 'pregunta_borrar', 'uses' => 'AdminController@doBorrarPregunta'));
