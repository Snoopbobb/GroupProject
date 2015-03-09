@extends('layout')

@section('main_content')
<div class="suggest-wrapper">
	<h2>Don't see a trail you love?</h2>
	<form class="">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<div class="form-group">
			Mountain Name:
			<input type="text" class="suggest-input" name="mountain_name">
		</div>
		<div class="form-group">
			Trail Name:
			<input type="text" class="suggest-input" name="trail_name">
		</div>
		<div class="form-group">
			Trail Location:
			<input type="text" class="suggest-input" name="trail_location">
		</div>
		<div class="form-group">
			<label>1-3 Miles
			<input type="radio" name="trail_length" value="1-3_miles">
			</label>
		</div>
		<div class="form-group">
			<label>3-7 Miles
			<input type="radio" name="trail_length" value="3-7_miles">
			</label>
		</div>
		<div class="form-group">
			<label>7-12 Miles
			<input type="radio" name="trail_length" value="7-12_miles">
			</label>
		</div>
		<div class="form-group">
			<label>13+ Miles
			<input type="radio" name="trail_length" value="13+_miles">
			</label>
		</div>
		<div>
			<button class="btn btn-group">Submit</button>
		</div>
	</form>
</div>
@stop