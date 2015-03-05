@extends('layout')

@section('tagline')
<div></div>
@stop


@section('main_content')
{{-- <div class="main-content">
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
	</div> --}}

	<div class="panel-body">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif
				<div class="main-content">
					<div>
						<form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/register') }}">
							<input type="hidden" name="_token" value="{{ csrf_token() }}">

							<div class="form-group inputs">
								<label class="col-md-4 control-label"> First Name</label>
								<div class="col-md-6">
									<input type="text" class="form-control" name="first_name" value="{{ old('name') }}">
								</div>
							</div>

							<div class="form-group inputs">
								<label class="col-md-4 control-label"> Last Name</label>
								<div class="col-md-6">
									<input type="text" class="form-control" name="last_name" value="{{ old('name') }}">
								</div>
							</div>

							<div class="form-group inputs">
								<label class="col-md-4 control-label">E-Mail Address</label>
								<div class="col-md-6">
									<input type="email" class="form-control" name="email" value="{{ old('email') }}">
								</div>
							</div>

							<div class="form-group inputs">
								<label class="col-md-4 control-label">Password</label>
								<div class="col-md-6">
									<input type="password" class="form-control" name="password">
								</div>
							</div>

							<div class="form-group inputs">
								<label class="col-md-4 control-label">Confirm Password</label>
								<div class="col-md-6">
									<input type="password" class="form-control" name="password_confirmation">
								</div>
							</div>

							<div class="form-group inputs">
								<label class="col-md-4 control-label"> Gender</label>
								<div class="col-md-6">
									<select name="gender">
										<option>Male</option>
										<option>Female</option>
									</select>
								</div>
							</div>
						</div>
						<div class="signup-button">
							<div class="form-group">
								<div class="col-md-6 col-md-offset-4">
									<button type="submit" class="btn btn-primary">
										Sign up now!
									</button>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div
	

@stop