$(document).ready(function() {

	var feed = new Instafeed({
			get: 'tagged',
			tagName: 'echocanyonHTZ',
			clientId: 'ad19ab7ad8e940a5a8ee3775ac7553ff',
			template: '<img src={{image}}>'
		});
	feed.run();

	$('.featured span').on('click', function(){
		$('.focus').removeClass('focus');
		$(this).addClass('focus');
	});

	$('.tagline span').on('click', function(){
		$('.selected').removeClass('selected');
		$(this).addClass('selected');
		if ($(this).text() == 'Search') {
			$('.search').removeClass('displayNone');
			$('.tiles').addClass('displayNone');
		} else {
			$('.search').addClass('displayNone');
			$('.tiles').removeClass('displayNone');
		}
	});

});