<?php

Route::get('/', function()
{
	return Redirect::to('sistema');
});

Route::controller('sistema', 'SistemaController');
