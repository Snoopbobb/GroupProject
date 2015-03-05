<?php

Route::get('/', function(){
	return view('home');
});

Route::get('/profile', function(){
	return view('profile');
});

Route::get('/signup', function(){
	return view('signup');
});



//Mountains
// Route::get('/Camelback', 'MountainController@Camelback');
// Route::get('/NorthMountain', 'MountainController@NorthMountain');
// Route::get('/SouthMountain', 'MountainController@SouthMountain');
// Route::get('/McdowellMountains', 'MountainController@McdowellMountains');
// Route::get('/ShadowMountain', 'MountainController@ShadowMountain');
// Route::get('/LookoutMountain', 'MountainController@LookoutMountain');
Route::get('/Mountains', 'MountainController@getAll');
Route::get('/Mountains/{mountain_id}', 'MountainController@getMountain($mountain_id)');


//Trails
// Route::get('/Trails/{mountain_id}', 'TrailController@getAll($mountain_id)');
Route::get('/Trails/', 'TrailController@getAll');
Route::get('/Trails/{mountain_id}/{trail_id}', 'TrailController@getTrail($mountain_id, $trail_id)');