<?php


// Paginas estaticas sin funcionalidad (EstaticoController)
Route::get('/',array('as' => 'home', 'uses' => 'EstaticoController@getHome'));
// Route::get('home',array('as' => 'home', 'uses' => 'EstaticoController@getHome'));
Route::get('ensenanzas',array('as' => 'ensenanzas', 'uses' => 'EstaticoController@getEnsenanzas'));
Route::get('talleres',array('as' => 'talleres', 'uses' => 'EstaticoController@getListadoTalleres'));

// Inscripciones
Route::get('taller1',array('as' => 'taller1', 'uses' => 'InscripcionController@getTaller1'));
Route::get('taller2',array('as' => 'taller2', 'uses' => 'InscripcionController@getTaller2'));
Route::get('taller3',array('as' => 'taller3', 'uses' => 'InscripcionController@getTaller3'));
Route::get('taller4',array('as' => 'taller4', 'uses' => 'InscripcionController@getTaller4'));
Route::post('inscribirse/taller',array('as' => 'inscribirse_taller', 'uses' => 'InscripcionController@postTaller'));

Route::get('psicoterapia',array('as' => 'psicoterapia', 'uses' => 'InscripcionController@getPsicoterapia'));
Route::post('inscribirse/psicoterapia',array('as' => 'inscribirse_psicoterapia', 'uses' => 'InscripcionController@postPsicoterapia'));

// Contacto
Route::get('contacto',array('as' => 'contacto', 'uses' => 'MensajeController@getMensajes'));
Route::post('contacto',array('uses' => 'MensajeController@postMensaje'));



/************************************************/
// ADMIN
/************************************************/
Route::get('admin/login_admin_zen',array('as' => 'login', 'uses' => 'LoginController@getLogin'));
Route::post('admin/login_admin_zen',array('uses' => 'LoginController@doLogin'));

Route::get('admin/logout',array('as' => 'logout', 'uses' => 'LoginController@doLogout'));


Route::get('admin/generar_password',array('as' => 'generar_password', 'uses' => 'LoginController@doGenerarPassword'));
Route::get('admin/nuevo_password/{codigo}',array('as' => 'nuevo_password', 'uses' => 'LoginController@doNuevoPassword'));

Route::group(["before" => "auth"], function(){
	// Admin
	Route::get('admin/cms_admin_zen',array('as' => 'admin', 'uses' => 'AdminController@showAdmin'));
	Route::post('admin/cms_admin_zen',array('uses' => 'AdminController@doResponder'));

	// Acciones Admin
	Route::get('admin/cms_admin_zen/pregunta/borrar/{id}',array('as' => 'pregunta_borrar', 'uses' => 'AdminController@doBorrarPregunta'));
});

// ERROR 404
App::missing(function($exception)
{
    return Response::view('errors.missing', array(), 404);
});
