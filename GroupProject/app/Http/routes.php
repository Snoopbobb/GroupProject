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


