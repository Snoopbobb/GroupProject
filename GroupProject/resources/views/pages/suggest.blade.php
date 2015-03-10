@extends('layout')

@section('main_content')
	<h2>Don't see a trail you love?</h2>
	<form class="suggest-form">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			Mountain Name:
			<input type="text" name="mountain_name">
			Trail Name:
			<input type="text" name="trail_name">
			Trail Location:
			<input type="text" name="trail_location">
			<label>1-3 Miles
			<input type="radio" name="trail_length" value="1-3_miles">
			</label>
			<label>3-7 Miles
			<input type="radio" name="trail_length" value="3-7_miles">
			</label>
			<label>7-12 Miles
			<input type="radio" name="trail_length" value="7-12_miles">
			</label>
			<label>13+ Miles
			<input type="radio" name="trail_length" value="13+_miles">
			</label>
			<label>Tell us what you love about this trail
			<textarea name="trail_text"></textarea> 
			</label>
			<button>Submit</button>
	</form>
@stop