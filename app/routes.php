<?php

// route for the home page
Route::get('/', function()
{
	return View::make('index');
});



// all routes that are not home or api will be redirected to the frontend
// this allows angular to route them
App::missing(function($exception)
{
	return View::make('index');
});