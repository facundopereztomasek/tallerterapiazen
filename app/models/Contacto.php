<?php

class Contacto extends Eloquent {

	/*	Aca se envian los datos de los que se inscriben 
		en los talleres, psicoterapia, etc.	*/

	protected $table = 'contactos';
	protected $fillable = array('nombre','apellido','email','telefono','skype','mensaje');

}
