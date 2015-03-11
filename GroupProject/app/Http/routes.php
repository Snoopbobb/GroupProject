<?php


Route::get('/', 'HomeController@index');

Route::get('/home', function(){
	return redirect('/');
});

//Profile
Route::get('/profile', 'ProfileController@show');
Route::post('/profile/{user_id}/update', 'ProfileController@edit');
Route::post('/profile/{user_id}/delete', 'ProfileController@delete');

//Static pages
Route::get('/suggest', function(){
	return view('pages.suggest');
});
Route::post('/confirmation', function(){
	return view('pages.confirmation');
});
Route::get('/faq', function(){
	return view('pages.faq');
});
Route::get('/about', function(){
	return view('pages.about');
});


//Mountains
Route::get('/featureImage', 'MountainController@getAll');

Route::get('/Mountains', function(){return redirect('/Mountains/all');});
Route::get('/Mountains/all', 'MountainController@getAll');
Route::get('/Mountains/{mountain_id}', 'MountainController@getMountain');


//Trails
Route::get('/Trails', function(){return redirect('/Mountains/all');});
Route::get('/randomTrail/{trail_id}', 'TrailController@randomTrail');
Route::get('/Trails/all', 'TrailController@getAll');
Route::get('/Trails/{mountain_id}/{trail_id}','TrailController@getTrail');


//Add a Comment
Route::get('/addComment', 'TrailController@addComment');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);