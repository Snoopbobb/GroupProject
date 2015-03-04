<?php

Route::get('/', function(){
	return view('home');
});

Route::get('/profile', function(){
	return view('profile');
});


