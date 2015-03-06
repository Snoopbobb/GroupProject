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
		<a href="/Trails/{{ $mountain->mountain_id}}/<?php echo $trailIds[0]; ?>"><div class="trail_tile_1" title="<?php echo $trailNames[0]; ?>"><?php echo $trailNames[0]; ?></div></a>
		<a href="/Trails/{{ $mountain->mountain_id}}/<?php echo $trailIds[1]; ?>"><div class="trail_tile_2" title="<?php echo $trailNames[1]; ?>"><?php echo $trailNames[1]; ?></div></a>
		<a href="/Trails/{{ $mountain->mountain_id}}/<?php echo $trailIds[2]; ?>"><div class="trail_tile_3" title="<?php echo $trailNames[2]; ?>"><?php echo $trailNames[2]; ?></div></a>
		<a href="/Trails/{{ $mountain->mountain_id}}/<?php echo $trailIds[3]; ?>"><div class="trail_tile_4" title="<?php echo $trailNames[3]; ?>"><?php echo $trailNames[3]; ?></div></a>
		<a href="/Trails/{{ $mountain->mountain_id}}/<?php echo $trailIds[4]; ?>"><div class="trail_tile_5" title="<?php echo $trailNames[4]; ?>"><?php echo $trailNames[4]; ?></div></a>
		<a href="/Trails/{{ $mountain->mountain_id}}/<?php echo $trailIds[5]; ?>"><div class="trail_tile_6" title="<?php echo $trailNames[5]; ?>"><?php echo $trailNames[5]; ?></div></a>
		<a href="/Trails/{{ $mountain->mountain_id}}/<?php echo $trailIds[6]; ?>"><div class="trail_tile_7" title="<?php echo $trailNames[6]; ?>"><?php echo $trailNames[6]; ?></div></a>
		<a href="/Trails/{{ $mountain->mountain_id}}/<?php echo $trailIds[7]; ?>"><div class="trail_tile_8" title="<?php echo $trailNames[7]; ?>"><?php echo $trailNames[7]; ?></div></a>
		<a href="/Trails/{{ $mountain->mountain_id}}/<?php echo $trailIds[8]; ?>"><div class="trail_tile_9" title="<?php echo $trailNames[8]; ?>"><?php echo $trailNames[8]; ?></div></a>
		<a href="/Trails/{{ $mountain->mountain_id}}/<?php echo $trailIds[9]; ?>"><div class="trail_tile_10" title="<?php echo $trailNames[9]; ?>"><?php echo $trailNames[9]; ?></div></a>
	</div>
	</div>
	<div class="seeAll displayNone">
		<?php for ($i=0; $i < count($trailNames); $i++) { echo $trailNames[$i]; }?>
	</div>

@stop