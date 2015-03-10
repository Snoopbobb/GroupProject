@extends('layout')

@section('title')
		@if(Auth::guest())
		<h1>Welcome!</h1>
		@else
		<h1>Welcome {{Auth::user()->first_name}}!</h1>
		@endif
		<div>Check out our amazing Hiking Trails</div>	
@stop


@section('featured')
<div class="featured">
	<span class="featureblock">
		<div>
			<div class="thumbnail">
				<h3>The Mountains</h3>
			</div>
			<div class="info">
				<h1>The mountains</h1>
				<div class="fweather">
					{{ $weather['temperature'] }}&deg; 
					{!! $weather['clouds'] !!}
				</div>
				<div>*some other random data</div>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium cumque, aliquid numquam totam minima! Earum quae mollitia, repellendus fugit nostrum atque iste quidem, doloribus perferendis velit laudantium minima incidunt! Animi deserunt, deleniti quae adipisci veniam?</p>
				<input type="hidden" value="2">
			</div>
		</div>
	</span>
	<span class="featureblock">
		<div>
			<div class="thumbnail">
				<h3>The Other Place</h3>
			</div>
			<div class="info">
				<h1>The other place</h1>
				<div class="fweather">
					{{ $weather['temperature'] }}&deg; 
					{!! $weather['clouds'] !!}
				</div>
				<div>*some other random data</div>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem ducimus assumenda sed earum iste expedita vero nobis natus numquam cum, delectus voluptatum unde nihil voluptate fuga dolore ipsum at laborum eius minima fugiat. Veniam, minima!</p>
				<input type="hidden" value="3">
			</div>
		</div>
	</span>
	<span class="featureblock">
		<div>
			<div class="thumbnail">
				<h3>The Stuff & Things</h3>
			</div>
			<div class="info">
				<h1>The stuff things</h1>
				<div class="fweather">
					{{ $weather['temperature'] }}&deg; 
					{!! $weather['clouds'] !!}
				</div>
				<div>*some other random data</div>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate eaque voluptas voluptates illum fugiat at cupiditate quae, odio alias suscipit nisi unde porro, iste, commodi quidem quos quisquam saepe possimus. Assumenda animi quibusdam alias consequuntur.</p>
				<input type="hidden" value="5">
			</div>
		</div>
	</span>
	<span class="featureblock focus">
		<div>
			<div class="thumbnail">
				<h3>The Supps</h3>
			</div>
			<div class="info">
				<h1>The supps</h1>
				<div class="fweather">
					{{ $weather['temperature'] }}&deg; 
					{!! $weather['clouds'] !!}
				</div>
				<div>*some other random data</div>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam ullam quae odio, quam perspiciatis exercitationem, voluptatum ab. Voluptas inventore nobis explicabo optio.</p>
				<input type="hidden" value="99">
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
	<h3>this is a random tag line woooooooooo</h3>
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
