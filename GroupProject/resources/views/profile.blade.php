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
					<label>First Name: </label>
					<input type="text" name="first_name" value="first_name">
				</div>
				<div class="inputs">
					<label>Last Name: </label>
					<input type="text" name="first_name" value="last_name">
				</div>
				<div class="inputs">
					<label>Email: </label>
					<input type="text" name="first_name" value="email">
				</div>
				<div class="inputs">
					<label>Username:</label> <label><span class="non-label-text">user_name</span></label>
				</div>
				<div class="inputs"><label>Gender: </label>
					<select name="gender">
						<option>Female</option>
						<option>Male</option>
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