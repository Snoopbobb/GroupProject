@extends('layout')
<div>
@section('tagline')
@stop
</div>

@section('main_content')
<div class="main-content">
	<div>
		<div class="inputs">
		<form action=""></form>
		First Name:<input type="text" name="first_name" value="first_name">
		</div>
		<div class="inputs">
		Last Name:<input type="text" name="first_name" value="last_name">
		</div>
		<div class="inputs">
		Email:<input type="text" name="first_name" value="email">
		</div>
		<div class="inputs">Username: <span>user_name</span>
		</div>
		<div class="inputs">Gender: 
			<select name="gender">
				<option>Female</option>
				<option>Male</option>
			</select>
		</div>
	</div>
	<div class="profile-photo">
		<div>
		<div class="image">
		this photo will be on right side 
		</div>
		</div>
	</div>
</div>

@stop