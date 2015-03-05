@extends('layout')

@section('title')
<h1>{{ $mountain->name }}</h1>
<div>** weather **</div>
<div>** random stuff **</div>
@stop


@section('tagline')
<div class="tagline">
	<h2>{{ $mountain->description }}</h2>
	<div>
		<span class="selected">Top 10</span>
		<span>See All</span>
	</div>
</div>
@stop


@section('main_content')
	<div class="trail_tiles">
		<a href="/Trails/{{ trail->trail_id }}"><div class="trail_tile_1"></div></a>
		<a href="/Trails/{{ trail->trail_id }}"><div class="trail_tile_2"></div></a>
		<a href="/Trails/{{ trail->trail_id }}"><div class="trail_tile_3"></div></a>
		<a href="/Trails/{{ trail->trail_id }}"><div class="trail_tile_4"></div></a>
		<a href="/Trails/{{ trail->trail_id }}"><div class="trail_tile_5"></div></a>
		<a href="/Trails/{{ trail->trail_id }}"><div class="trail_tile_6"></div></a>
		<a href="/Trails/{{ trail->trail_id }}"><div class="trail_tile_7"></div></a>
		<a href="/Trails/{{ trail->trail_id }}"><div class="trail_tile_8"></div></a>
		<a href="/Trails/{{ trail->trail_id }}"><div class="trail_tile_9"></div></a>
		<a href="/Trails/{{ trail->trail_id }}"><div class="trail_tile_10"></div></a>
	</div>
	<div class="seeAll">
		{{  }}
	</div>

@stop