@extends('layout')


@section('title')
<h1>{{ $trail->name }}</h1>
<div class="weather">
	{{ $weather['temperature'] }}&deg; 
	{!! $weather['clouds'] !!}
</div>
<div class='hash'>#<span class="hashtag">{{ $trail->hashtag }}</span></div>
@stop


@section('tagline')
<div class="tagline">
	<h1>Length: {{ number_format($trail->length) }} ft. | Elevation Gain: {{ number_format($trail->elevation_gain) }} ft.</h1>
</div>
@stop



@section('main_content')
	<div class="trail-description">
		<h3>Trail Description</h3>
		<p>{{ $trail->description }}</p>
		<div class="rating">
			<span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
		</div>
	</div>
	<div class="trail-comment">
		<h3>Comments</h3>
		<div class="comments">
			@foreach($comment as $comm)
				<div class="comment-block">
					<div class="image">picture</div>
					<div class="comment">
						<div class="date">{{$comm->created_at}}</div>
						<div class="user-name">{{$comm->username}}</div>
						<div class="comment-content">{{$comm->comment_description}}</div>
					</div>
					@if(Auth::user()->user_id == $comm->user_id)
						<div class="delete">
							<form class="delete-comment">
								<input class="comment-id" type="hidden" value="{{$comm->comment_id}}">
								<button>Delete</button>
							</form>
						</div>
					@endif
				</div>
			@endforeach
		</div>


		@if(Auth::guest())
			<h1><a href="/auth/login">Login</a> to add a comment!</h1>
		@else
			<strong>Add a Comment {{Auth::user()->first_name}}!</strong>
			<form class="add-comment">
				<input type="hidden" class="token" name="_token" value="{{ csrf_token() }}">
				<input type="hidden" class="trail-id" name="trail_id" value="{{$trail->trail_id}}">
				<input class="user-id" type="hidden" name="user_id" value="{{Auth::user()->user_id}}">
				<textarea name="comment" placeholder="Add your comment!"></textarea>
					<div>
						<button>Send</button>
					</div>
			</form>
		@endif
			


		<script id="template-comment" type="text/x-handlebars-template">
			<div class="comment-block">
				<div class="image">this is an image</div>
				<div class="comment">
					<div class="user-name">{{Auth::user()->username}}</div>
						@include('partial/handlebar-templates/comments')
				</div>
				
					<div class="delete">
						<form class="delete-comment">
							@include('partial/handlebar-templates/deleteComment')
							<button>Delete</button>
						</form>
					</div>
				</div>
		</script>

	</div>


	
	<div class="instagram-feed">
		<h3>#{{ $trail->hashtag }}</h3>
		<div id="instafeed"></div>
	</div>
@stop