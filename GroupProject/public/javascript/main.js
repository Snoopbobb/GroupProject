$(document).ready(function() {

	var feed = new Instafeed({
			get: 'tagged',
			tagName: 'echocanyonHTZ',
			clientId: 'ad19ab7ad8e940a5a8ee3775ac7553ff',
			template: '<div><img src={{image}}></div>'
		});
	feed.run();

	//================================================================
	// Header
	//================================================================

	$('.options.browse').on('click', function() {
		if (top.location.pathname === '/') {
			$("html, body").animate({ scrollTop: 715 }, "slow");
		} else {
			window.location.href = "/";
		}
	});
	$('.options.suggest').on('click', function() {
		window.location.href = "/suggest";
	});

	//================================================================
	// Featured
	//================================================================

	$('.featured span').on('click', function(){

		var header = $(this).find('.info h1').text();
		var weather = $(this).find('.info .fweather').html();
		// var rand = $(this).find('.info div:last-child').text();
		// var desc = $(this).find('.info p').text();

		var fheader = $('.focus').find('.info h1').text();

		$(this).find('.thumbnail h3').replaceWith('<h3>' + fheader + '</h3>');
		$(this).find('.info h1').replaceWith('<h1>' + fheader + '</h1>');
		$('.focus .info h1').replaceWith('<h1>' + header + '</h1>');

		$(this).find('.info h3').replaceWith('<h3>' + fweather + '</h3>');
		$('.focus .info .fweather').replaceWith('<div class="fweather">' + weather + '</div>');
		
		// $('.focus').removeClass('focus');
		// $(this).addClass('focus');
	});

	//================================================================
	// Browse and Searches
	//================================================================

	$('.tagline span').on('click', function(){
		$('.selected').removeClass('selected');
		$(this).addClass('selected');
		if ($(this).text() == 'Search') {
			$('.search').removeClass('displayNone');
			$('.tiles').addClass('displayNone');
		} else if ($(this).text() == 'Browse') {
			$('.search').addClass('displayNone');
			$('.tiles').removeClass('displayNone');
		} else if ($(this).text() == 'See All') {
			$('.trail_tiles').addClass('displayNone');
			$('.seeAll').removeClass('displayNone');
		} else if ($(this).text() == 'Top 10') {
			$('.seeAll').addClass('displayNone');
			$('.trail_tiles').removeClass('displayNone');		
		}
	});


});