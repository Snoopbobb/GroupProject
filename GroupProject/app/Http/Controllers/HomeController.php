<?php namespace App\Http\Controllers;

class HomeController extends Controller {

	
	public function index()
	{	
		// call weather function
		$weather = Controller::getWeather();
		
		return view('home')->with('weather', $weather);
	}

}
