@extends('layout')

@section('main_content')
<div class="suggest-wrapper">
	<h2>Don't see a trail you love?</h2>
	<form class="">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<div class="form-group">
			Mountain Name:
			<input type="text" class="form-control" name="mountain_name">
		</div>
		<div class="form-group">
			Trail Name:
			<input type="text" class="form-control" name="trail_name">
		</div>
		<div class="form-group">
			Trail Location:
			<input type="text" class="form-control" name="trail_location">
		</div>
		<button class="btn btn-group">Submit</button>
	</form>
</div>
@stop