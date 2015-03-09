@extends('layout')

@section('title')
<h1>View / Edit Profile</h1>
<div>Here is your {{ $user->username}} profile info!</div>
@stop

<div>
@section('tagline')
@stop
</div>

@section('main_content')
<div class="main-content">
	<form action="">
		<div>
			<div class="inputs">
				<label>First Name: </label>
				<input type="text" name="first_name" value="{{$user->first_name}}">
			</div>
			<div class="inputs">
				<label>Last Name: </label>
				<input type="text" name="first_name" value="{{$user->last_name}}">
			</div>
			<div class="inputs">
				<label>Email: </label>
				<input type="text" name="first_name" value="{{$user->email}}">
			</div>
			<div class="inputs">
				<label>Username:</label> <label><span class="non-label-text">{{ $user->username}}</span></label>
			</div>
			<div class="inputs"><label>Gender: </label>
				<select name="gender">
					@if($user->gender == 'male')
						<option value="male">Male</option>
						<option value="female">Female</option>
					@else
						<option value="female">Female</option>
						<option value="male">Male</option>
					@endif
				</select>
			</div>
			<div class="save-or-cancel">
				<button>Save Changes</button>
				<span class="non-label-text"><a href="/profile/">Cancel</a></span>
			</div>
		</div>
	</form>
	<div class="profile-photo">
		<div>
			<div class="image">
				this photo will be on right side 
			</div>
		</div>
	</div>
</div>

@stop