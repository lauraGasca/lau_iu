<?php

Route::get('/', function()
{
	return Redirect::to('login');
});

Route::get('prueba', function()
{
	return View::make('prueba');
});

Route::controller('login', 'LoginController');
Route::controller('dashboard', 'DashboardController');

//Funcion para mostrar cuando una pagina no se encuentra
App::missing(function($exception)
{
	return Response::view('errors.missing', array(), 404);
});
