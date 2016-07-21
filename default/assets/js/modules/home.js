jQuery(function($){
	$('#main-slider.carousel').carousel({interval:8000});
	new WOW().init();
			
	$("a.hotelMenu").prettyPhoto({
		social_tools : false
	});

	var $portfolio_selectors = $('.portfolio-filter >li>a');
	var $portfolio = $('.portfolio-items');
	$portfolio.isotope({
		itemSelector : '.portfolio-item',
		layoutMode : 'fitRows'
	});
	$portfolio_selectors.on('click', function () {
		$portfolio_selectors.removeClass('active');
		$(this).addClass('active');
		var selector = $(this).attr('data-filter');
		$portfolio.isotope({
			filter : selector
		});
		return false;
	});
	$('.portfolio-filter >li>a:first').trigger("click");

	$('.block-team .carousel').imagesLoaded(function()
	{
		$('.block-team .carousel').owlCarousel(
		{
			navigation: true,
			navigationText: ['<i class="fa fa-angle-left">', '<i class="fa fa-angle-right">'],
			pagination: false,
			singleItem: true,
			autoHeight: true
		});
	});
});
var map;
function initMap() {
	map = new google.maps.Map(document.getElementById('gmap'), {
	center: {lat: -34.397, lng: 150.644},
	zoom: 8
	});
}

