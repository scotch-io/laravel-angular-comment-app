<?php

class HomeController extends BaseController {

	public function showHome()
	{
		return View::make('index');
	}

	public function missingMethod()
	{
		return View::make('index');
	}

}