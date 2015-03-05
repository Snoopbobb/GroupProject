@extends('layout')
<div>
@section('tagline')
Join our Community!
@stop
</div>

@section('main_content')
<div class="main-content">
		<form>
			<div>
				<div class="inputs">
					First Name:<input type="text" name="first_name" placeholder="first_name">
				</div>
				<div class="inputs">
					Last Name:<input type="text" name="first_name" placeholder="last_name">
				</div>
				<div class="inputs">
					Email:<input type="text" name="first_name" placeholder="email">
				</div>
				<div class="inputs">
					Username: <input type="text" name="username" placeholder="username">
				</div>
				<div class="inputs">
					Gender: 
					<select name="gender">
						<option>Gender</option>
						<option>Female</option>
						<option>Male</option>
					</select>
				</div>
				<div class="inputs">
					Password: <input type="text" name="password" placeholder="password">
				</div>
			</div>
			<div class="signup-button">
				<button>Sign up!</button>
			</div>
		</form>
	</div>
	

@stop