<?php


// Paginas estaticas sin funcionalidad (EstaticoController)
Route::get('/',array('as' => 'home', 'uses' => 'EstaticoController@getHome'));
Route::get('ensenanzas',array('as' => 'ensenanzas', 'uses' => 'EstaticoController@getEnsenanzas'));
Route::get('talleres',array('as' => 'talleres', 'uses' => 'EstaticoController@getListadoTalleres'));

// Inscripciones
Route::get('taller',array('as' => 'taller', 'uses' => 'InscripcionController@getTaller'));
//Route::group(array('before'=>'csrf'), function(){
	Route::post('inscribirse/taller',array('as' => 'inscribirse_taller', 'uses' => 'InscripcionController@postTaller'));
//});

Route::get('psicoterapia',array('as' => 'psicoterapia', 'uses' => 'InscripcionController@getPsicoterapia'));
//Route::group(array('before'=>'csrf'), function(){
	Route::post('inscribirse/psicoterapia',array('as' => 'inscribirse_psicoterapia', 'uses' => 'InscripcionController@postPsicoterapia'));
//});

// Contacto
Route::get('contacto',array('as' => 'contacto', 'uses' => 'MensajeController@getMensajes'));
Route::post('contacto',array('uses' => 'MensajeController@postMensaje'));



/************************************************/
// ADMIN
/************************************************/
Route::get('admin/login_admin_zen',array('as' => 'login', 'uses' => 'LoginController@getLogin'));
Route::post('admin/login_admin_zen',array('uses' => 'LoginController@doLogin'));

Route::get('admin/logout',array('as' => 'logout', 'uses' => 'LoginController@doLogout'));

Route::group(["before" => "auth"], function(){
	// Admin
	Route::get('admin/cms_admin_zen',array('as' => 'admin', 'uses' => 'AdminController@showAdmin'));
	Route::post('admin/cms_admin_zen',array('uses' => 'AdminController@doResponder'));

	// Acciones Admin
	Route::get('admin/cms_admin_zen/pregunta/borrar/{id}',array('as' => 'pregunta_borrar', 'uses' => 'AdminController@doBorrarPregunta'));
});
