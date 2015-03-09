@extends('layout')


@section('title')
<h1>{{ $trail->name }}</h1>
<div class="weather">
	{{ $weather['temperature'] }}&deg; 
	{!! $weather['clouds'] !!}
</div>
<div class="hashtag">{{ $trail->hashtag }}</div>
@stop


@section('tagline')
<div class="tagline">
	<h1>Length: {{ number_format($trail->length) }} ft. | Elevation Gain: {{ number_format($trail->elevation_gain) }} ft.</h1>
	<div>
		<span class="selected">Top 10</span>
		<span>See All</span>
	</div>
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
		<div class="more-comments">
			<span><i class="fa fa-chevron-up"></i></span>
		</div>
		<h3>Comments</h3>
		<div class="comments">
			<div class="comment-block">
				<div class="image">this is an image</div>
				<div class="comment">
					<div class="user-name">Jordyn</div>
					<div class="comment-content">I love to hike here. What a beautiful place to be.</div>
				</div>
			</div>
			@foreach($comment as $comm)
			<div class="comment-block">
				<div class="image">picture</div>
				<div class="comment">
					<div class="user-name">{{$comm->username}}</div>
					<div class="comment-content">{{$comm->comment_description}}</div>
				</div>
			</div>
			@endforeach
		</div>


		<div class="more-comments">
			<span><i class="fa fa-chevron-down"></i></span>
			
		</div>
		@if(Auth::guest())
			<h1><a href="/auth/login">Login</a> to add a comment!</h1>
		@else
			<strong>Add a Comment {{Auth::user()->first_name}}!</strong>
			<form class="add-comment">
				<textarea placeholder="Add your comment!"></textarea>
					<div>
						<button>Send</button>
					</div>
			</form>

	


		{{-- <div class="add-comment">
			<strong>Add a Comment {{Auth::user()->first_name}}!</strong>
			<div class="image">picture</div>
			<div class="comment">
				<div class="user-name">
					{{Auth::user()->username}}
				</div>
				<textarea placeholder="comment here!"></textarea>
			</div>
		</div> --}}
		@endif
			

	</div>
	<script id="template-comment" type="text/x-handlebars-template">
		<div class="comment-block">
			<div class="image">this is an image</div>
			<div class="comment">
				<div class="user-name">{{Auth::user()->username}}</div>
				@include('partial/handlebar-templates/comments')
			</div>
		</div>
	</script>

	
	<div class="instagram-feed">
		<h3>{{ $trail->hashtag }}</h3>
		<div id="instafeed"></div>
	</div>
@stop