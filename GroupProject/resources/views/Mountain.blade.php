@extends('layout')

@section('title')
<h1>{{ $mountain->name }}</h1>
<div class="fweather">
</div>
@stop


@section('tagline')
<div class="tagline">
	<h1 class="tag mountain-tag">{{ $mountain->description }}</h1>
	<div>
		<span class="selected">Top 10</span>
		<span>See All</span>
	</div>
</div>
@stop


@section('main_content')
	<div class="masonry trail_tiles">
		<div class="js-masonry">
			{!! $template !!}
		</div>
	</div>
	<div class="seeAll displayNone">
		<?php for ($i=0; $i < count($trailNames); $i++) { echo '<div><a href="' . $trailIds[$i] . '">' . $trailNames[$i] . '</a></div>'; }?>
	</div>

@stop