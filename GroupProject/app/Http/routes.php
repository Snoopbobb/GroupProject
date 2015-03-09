<?php


Route::get('/', 'HomeController@index');

Route::get('/home', function(){
	return redirect('/');
});

Route::get('/profile/', 'ProfileController@show');

Route::get('/suggest', function(){
	return view('suggest');
});


//Mountains
Route::get('/Mountains', function(){return redirect('/Mountains/all');});
Route::get('/Mountains/all', 'MountainController@getAll');
Route::get('/Mountains/{mountain_id}', 'MountainController@getMountain');


//Trails
Route::get('/Trails', function(){return redirect('/Mountains/all');});
Route::get('/Trails/all', 'TrailController@getAll');
Route::get('/Trails/{mountain_id}/{trail_id}', 'TrailController@getTrail');


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);