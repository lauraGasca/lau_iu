<?php namespace Iuark\Entities;

class Emprendedor extends \Eloquent {

	protected $table = 'emprendedores';

	protected $fillable = array('user_id','fecha_nacimiento');

}