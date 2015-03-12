@extends('layout')

@section('title')
		@if(Auth::guest())
		<h1 class="welcome-message">Welcome <span class="welcome">Hikerz!</span></h1>
		@else
		<h1 class="welcome-message">Welcome <span class="welcome">{{Auth::user()->first_name}}!</span>
		</h1>
		@endif
		<div class="welcome-message">Check out our amazing Hiking Trails</div>	
@stop


@section('featured')
<div class="featured">
	<span class="featureblock">
		<div>
			<div class="thumbnail">
				<h3>Camelback Mountain</h3>
			</div>
			<div class="info">
				<h2><a href="/Mountains/2">Camelback Mountain</a></h2>
				<div class="fweather">

				</div>
				<div><strong>Summit Elev.</strong> 2,706 ft.</div>
				<p>A small but steep mountain in the heart of Scottsdale. It is very busy most weekend days, but offers some of the greatest and highest views of the greater Phoenix area.</p>
				<input type="hidden" value="2">
			</div>
		</div>
	</span>
	<span class="featureblock">
		<div>
			<div class="thumbnail">
				<h3>Dreamy Draw Park</h3>
			</div>
			<div class="info">
				<h2><a href="/Mountains/3">Dreamy Draw Park</a></h2>
				<div class="fweather">

				</div>
				<div><strong>Summit Elev.</strong> 2,612 ft.</div>
				<p>A very large park with dozens of trails. Almost as many bikers as hikers, and one of the best views in all of Phoenix</p>
				<input type="hidden" value="3">
			</div>
		</div>
	</span>
	<span class="featureblock">
		<div>
			<div class="thumbnail">
				<h3>McDowell Mountains</h3>
			</div>
			<div class="info">
				<h2><a href="/Mountains/5">McDowell Mountains</a></h2>
				<div class="fweather">
				</div>
				<div><strong>Summit Elev.</strong> 4,057 ft.</div>
				<p>A long range of mountains in Norht Scottsdale that has tons of long hikes, tons of steep hike, and both!</p>
				<input type="hidden" value="5">
			</div>
		</div>
	</span>
	<span class="featureblock focus">
		<div>
			<div class="thumbnail">
				<h3>The Superstitions</h3>
			</div>
			<div class="info">
				<h2><a href="/">The Superstitions</a></h2>
				<div class="fweather">
				</div>
				<div><strong>Summit Elev.</strong> 5,059 ft.</div>
				<p>An old and gorgeous mountain range, full of mysteries and tales of hidden treasure, ghosts and spirits. Also home to some of the best hikes, and views in all the state.</p>
				<input type="hidden" value="10">
			</div>
		</div>
	</span>
	<span class="feature-buttons">
		<div>Next -></div>
		<div><- Previous</div>
	</span>
</div>
@stop

@section('tagline')
<div class="tagline">
	<span class="tag">this is a random tag line woooooooooo</span>
	<div>
		<span class="selected">Browse</span>
		<span>Search</span>
	</div>
</div>
@stop
@section('main_content')
	<div>
		<span class="search displayNone">
			<input type="text" placeholder="Search...">
		</span>
	</div>
	<div class="tiles masonry">
		<a href="/Mountains/2"><div class="scale tile_1">CamelBack</div></a>
		<a href="/Mountains/5"><div class="scale tile_2">McDowell Mountains</div></a>
		<a href="/Mountains/7"><div class="scale tile_3">South Moutain</div></a>
		<a href="/Mountains/6"><div class="scale tile_4">North Mountain</div></a>
		<a href="/Mountains/4"><div class="scale tile_5">Lookout Mountain</div></a>
		<a href="/Mountains/9"><div class="scale tile_6">Shadow Mountain</div></a>
		<a href="/Mountains/3"><div class="scale tile_7">Dreamy Draw / Piestewa Peak</div></a>
	</div>
@stop
