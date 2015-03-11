$(document).ready(function() {
	$('.focus > div').animate({height: '250%'}, 10);
	var hashtag = 'hikeaz'; // $('.hashtag').text(); //'hikeaz';
	console.log(hashtag);
	var feed = new Instafeed({
			get: 'tagged',
			tagName: hashtag,
			clientId: 'ad19ab7ad8e940a5a8ee3775ac7553ff',
			template: '<div><a target="_blank" href={{link}}><img src={{image}}></a></div>',
			resolution: 'low_resolution'
		,
		after:function(){
			$("#instafeed").simplyScroll({
                  		speed: 2,
                  		frameRate: 20,
                  		manualMode: 'end',
                  		startOnLoad: true,
                  		orientation: 'vertical',
                  		direction: 'forwards'
     		});
		}
	});

	feed.run();

	//================================================================
	// Masonry
	//================================================================

	$('.masonry.tiles').masonry({
		columnWidth: 10,
		gutter: 10,
		itemSelector: '.ttile'
	});

	$('.masonry.trail_tiles > div').masonry({
		columnWidth: 10,
		gutter: 10,
		itemSelector: '.ttile'
	});

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

	$('.options.randomtrail').on('click', function(){
		var trail = Math.floor(Math.random() * 12) + 1;

		window.location.href = '/randomTrail/' + trail;
	});

	//================================================================
	// Featured
	//================================================================

	$('.featureblock').on('click', function(){
		var mID = $(this).find('.info input').val();

		var header = $(this).find('.info h1').text();
		var weather = $(this).find('.info .fweather').html();
		// var rand = $(this).find('.info div:last-child').text();
		var desc = $(this).find('.info p').text();

		var fmID = $('.focus').find('.info input').val();
		var fheader = $('.focus').find('.info h1').text();
		var fweather = $('.focus').find('.info .fweather').html();
		var fdesc = $('.focus').find('.info p').text();

		//replace header
		$(this).find('.thumbnail h3').replaceWith('<h3>' + fheader + '</h3>');
		$(this).find('.info h1').replaceWith('<h1>' + fheader + '</h1>');
		$(this).find('.info input').replaceWith('<input type="hidden" value="' + fmID + '">');
		$('.focus .info input').replaceWith('<input type="hidden" value="' + mID + '">');
		$('.focus .info h1').replaceWith('<h1>' + header + '</h1>');

		//replace hero photo
		var sendData = {
			mountain_id: $(this).find('input').val()
		}
		console.log(sendData);
		$.get('/featureImage', sendData, function (data) {
			var img = JSON.parse(data);
			$('.photo').css('background-image', 'url(' + img.imageURL + ')');
		})

		//replace weather
		$(this).find('.info h3').replaceWith('<h3>' + fweather + '</h3>');
		$('.focus .info .fweather').replaceWith('<div class="fweather">' + weather + '</div>');

		// $(this).find('.info p').replaceWith('<p>' + fdesc + '</p>');
		// $('.focus .info p').replaceWith('<p>' + desc + '</p>');

		//replace description
		$(this).find('.info p').replaceWith('<p>' + fdesc + '</p>');
		$('.focus .info p').replaceWith('<p>' + desc + '</p>');


		//animation
		$('.focus > div').css('height', '100%');
		$('.focus > div').animate({height: '250%'}, 500);

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

	//================================================================
	// Add Comment on Trail Page
	//================================================================

	function renderComment(message){
		var source = $('#template-comment').html();
		var template = Handlebars.compile(source);
		var output = template({
			message: message
		});
		return output;	
	};



	$('form.add-comment').on('submit', function(event) {
		event.preventDefault();
		var message = $('.add-comment textarea').val();
		// var output = renderComment(message);
		// $('.comments').prepend(output);
		// console.log(message);

		var senddata = {
			user_id: $('.add-comment .user-id').val(),
			token: $('.add-comment .token').val(),
			trail_id: $('.add-comment .trail-id').val(),
			message: $('.add-comment textarea').val()
		}
		

		$.get('/addComment', senddata, function (data){

				var output = renderComment(message);
				$('.comments').prepend(output);
		})


		$('textarea').val('');		
	});


});