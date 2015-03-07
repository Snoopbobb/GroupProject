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
		<div>
		<?php echo $template; ?>
		</div>
	</div>
	<div class="seeAll displayNone">
		<?php for ($i=0; $i < count($trailNames); $i++) { echo $trailNames[$i]; }?>
	</div>

@stop