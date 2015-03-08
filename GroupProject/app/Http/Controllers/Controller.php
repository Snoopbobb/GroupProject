<?php namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesCommands;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;

abstract class Controller extends BaseController {

	use DispatchesCommands, ValidatesRequests;

	public static function getWeather(){
		$weather = [];
		// get weather data
		$json = file_get_contents('http://api.openweathermap.org/data/2.5/weather?q=Phoenix');

		$data = json_decode($json);

		// get temperature in farenheit, round to whole degree  
		$temperature = round((($data->main->temp)- 273.15) * 1.8 + 32);

		// use cloud or sun font awesome icon
		if(($data->clouds->all) > 50){
			$clouds = '<i class="fa fa-cloud"></i>';
		} else {
			$clouds = '<i class="fa fa-sun-o"></i>';
		}

		$weather = ['temperature' => $temperature, 'clouds'=>$clouds];

		return $weather;
	}
}
