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
		<a href="/Trails/{{ $trail->trail_id }}"><div class="trail_tile_1" title="{{ $trail->name }}">{{ $trail->name }}</div></a>
		<a href="/Trails/{{ $trail->trail_id }}"><div class="trail_tile_2" title="{{ $trail->name }}">{{ $trail->name }}</div></a>
		<a href="/Trails/{{ $trail->trail_id }}"><div class="trail_tile_3" title="{{ $trail->name }}">{{ $trail->name }}</div></a>
		<a href="/Trails/{{ $trail->trail_id }}"><div class="trail_tile_4" title="{{ $trail->name }}">{{ $trail->name }}</div></a>
		<a href="/Trails/{{ $trail->trail_id }}"><div class="trail_tile_5" title="{{ $trail->name }}">{{ $trail->name }}</div></a>
		<a href="/Trails/{{ $trail->trail_id }}"><div class="trail_tile_6" title="{{ $trail->name }}">{{ $trail->name }}</div></a>
		<a href="/Trails/{{ $trail->trail_id }}"><div class="trail_tile_7" title="{{ $trail->name }}">{{ $trail->name }}</div></a>
		<a href="/Trails/{{ $trail->trail_id }}"><div class="trail_tile_8" title="{{ $trail->name }}">{{ $trail->name }}</div></a>
		<a href="/Trails/{{ $trail->trail_id }}"><div class="trail_tile_9" title="{{ $trail->name }}">{{ $trail->name }}</div></a>
		<a href="/Trails/{{ $trail->trail_id }}"><div class="trail_tile_10" title="{{ $trail->name }}">{{ $trail->name }}</div></a>
	</div>
	<div class="seeAll displayNone">
		{{ $trail->name }}
	</div>

@stop