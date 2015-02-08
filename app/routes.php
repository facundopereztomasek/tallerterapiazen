<?php


// Paginas estaticas sin funcionalidad (EstaticoController)
Route::get('/',array('as' => 'home', 'uses' => 'EstaticoController@getHome'));
Route::get('ensenanzas',array('as' => 'ensenanzas', 'uses' => 'EstaticoController@getEnsenanzas'));
Route::get('talleres',array('as' => 'talleres', 'uses' => 'EstaticoController@getListadoTalleres'));

// Inscripciones
Route::get('taller',array('as' => 'taller', 'uses' => 'InscripcionController@getTaller'));
Route::post('taller',array('uses' => 'InscripcionController@postTaller'));

Route::get('psicoterapia',array('as' => 'psicoterapia', 'uses' => 'InscripcionController@getPsicoterapia'));
Route::post('psicoterapia',array('uses' => 'InscripcionController@postPsicoterapia'));

// Contacto
Route::get('contacto',array('as' => 'contacto', 'uses' => 'MensajeController@getMensajes'));
Route::post('contacto',array('uses' => 'MensajeController@postMensaje'));



/************************************************/
// ADMIN
/************************************************/
Route::get('admin/cms_admin_zen',array('as' => 'admin', 'uses' => 'AdminController@showAdmin'));
Route::post('admin/cms_admin_zen',array('uses' => 'AdminController@doResponder'));

// Acciones Admin
Route::get('admin/cms_admin_zen/pregunta/borrar/{id}',array('as' => 'pregunta_borrar', 'uses' => 'AdminController@doBorrarPregunta'));
