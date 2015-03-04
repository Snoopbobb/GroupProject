@extends('layout')

@section('tagline')
This is the Profile Page
@stop

@section('main_content')
<div class="profile-content">
	<div>
		<div>
		First Name:<input type="text" name="first_name" value="first_name">
		</div>
		<div>
		Last Name:<input type="text" name="first_name" value="last_name">
		</div>
		<div>
		Email:<input type="text" name="first_name" value="email">
		</div>
		<div>Username: <span>user_name</span>
		</div>
		<div>Gender: 
			<select name="gender">
				<option>Female</option>
				<option>Male</option>
			</select>
		</div>
	</div>
	<div class="profile-photo">
		this photo will be on right side .profile-content > div will float left
	</div>
</div>

@stop
