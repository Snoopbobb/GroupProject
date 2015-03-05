@extends('layout')

@section('title')
<h1>View / Edit Profile</h1>
<div>Here is your profile info!</div>
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
					<span="label">First Name: </span>
					<input type="text" name="first_name" value="first_name">
				</div>
				<div class="inputs">
					<span="label">Last Name: </span>
					<input type="text" name="first_name" value="last_name">
				</div>
				<div class="inputs">
					<span="label">Email: </span>
					<input type="text" name="first_name" value="email">
				</div>
				<div class="inputs">
					<span="label">Username:</span> <span="non-label-text">user_name</span>
				</div>
				<div class="inputs">Gender: 
					<select name="gender">
						<option>Female</option>
						<option>Male</option>
					</select>
				</div>
				<div="save-or-cancel">
					<button>Save Changes</button>
					<span="non-label-text"><a href="/profile/">Cancel</a></span>
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