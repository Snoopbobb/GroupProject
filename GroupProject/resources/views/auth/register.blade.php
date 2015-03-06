@extends('layout')

	@section('main_content')
		<div class="main-content">
				@if(count($errors) > 0)
					<span class="head-error">Whoops!</span>
					<div class="main-error">There were some problems with your input.</div>
				@endif
			<form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/register') }}">
				<div>
					<input type="hidden" name="_token" value="{{ csrf_token() }}">

					<div class="form-group inputs">
						<label class="col-md-4 control-label"> First Name</label>
						<div class="col-md-6">
							<input type="text" class="form-control" name="first_name" value="{{ old('first_name') }}"> 

							@if(count($errors) > 0 && $errors->getBag('default')->has('first_name'))

							{{$errors->getBag('default')->get('first_name')[0]}}

							@endif

						</div>
					</div>

					<div class="form-group inputs">
						<label class="col-md-4 control-label"> Last Name</label>
						<div class="col-md-6">
							<input type="text" class="form-control" name="last_name" value="{{ 
							old('last_name') }}">

							@if(count($errors) > 0 && $errors->getBag('default')->has('last_name'))

							{{$errors->getBag('default')->get('last_name')[0]}}

							@endif

						</div>
					</div>

					<div class="form-group inputs">
						<label class="col-md-4 control-label"> User Name</label>
						<div class="col-md-6">
							<input type="text" class="form-control" name="username" value="{{ old('username') }}">

							@if(count($errors) > 0 && $errors->getBag('default')->has('username'))

							{{$errors->getBag('default')->get('username')[0]}}

							@endif

						</div>
					</div>

					<div class="form-group inputs">
						<label class="col-md-4 control-label">E-Mail Address</label>
						<div class="col-md-6">
							<input type="email" class="form-control" name="email" value="{{ old('email') }}">

							@if(count($errors) > 0 && $errors->getBag('default')->has('email'))

							{{$errors->getBag('default')->get('email')[0]}}

							@endif

						</div>
					</div>

					<div class="form-group inputs">
						<label class="col-md-4 control-label">Password</label>
						<div class="col-md-6">
							<input type="password" class="form-control" name="password">
							
							@if(count($errors) > 0 && $errors->getBag('default')->has('password'))

							{{$errors->getBag('default')->get('password')[0]}}

							@endif

						</div>
					</div>

					<div class="form-group inputs">
						<label class="col-md-4 control-label">Confirm Password</label>
						<div class="col-md-6">
							<input type="password" class="form-control" name="password_confirmation">
						</div>

							@if(count($errors) > 0 && $errors->getBag('default')->has('password'))

								{{$errors->getBag('default')->get('password')[0]}}

							@endif

						
					</div>

					<div class="form-group inputs">
						<label class="col-md-4 control-label"> Gender</label>
						<div class="col-md-6">
							<select name="gender">
								<div>
									<option>Male</option>
									<option>Female</option>
								</div>
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
	@stop
