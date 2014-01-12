<?php

class HomeController extends BaseController {

	public function showWelcome()
	{
		return View::make('hello');
	}

}