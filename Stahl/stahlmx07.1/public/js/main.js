$(document).ready(function(){

	// Variables
	var box = $('.s-services__box');
	var burger = $('#js-header__burger');
	var product = $('.s-products__link');
	var close = $('#js-popup-nav--close');
	var closeProduct = $('#js-popup-product--close');

	// Carousel About Us
	$('.s-about__gallery--slides').owlCarousel({
		margin:5,
		nav:true,
		navText: [$('.s-about__gallery--paginator--prev'),$('.s-about__gallery--paginator--next')],
		dots:false,
		onInitialized  : counter, //When the plugin has initialized.
		onTranslated : counter, //When the translation of the stage has finished.
		items:1
	});

	// Carousel Products
	$('.s-products__gallery--slides').owlCarousel({
		loop:true,
		margin:5,
		nav:true,
		navText: [$('.s-products__gallery--paginator--prev'),$('.s-products__gallery--paginator--next')],
		dots:false,
    	responsive:{
    		0:{
				items:1
			},
			768:{
				items:2
			},
			1000:{
				items:3
			}
		}
	});

	function counter(event) {
		var element   = event.target; // DOM element, in this example .owl-carousel
		var items     = event.item.count; // Number of items
		var item      = event.item.index + 1; // Position of the current item
	   	// it loop is true then reset counter from 1
	   	if(item > items) {
			item = item - items
		}
		$('#s-about__gallery--counter').html("<span>"+item+"</span><span></span><span>"+items+"</span>");
		// $('#s-about__gallery--counter').html("item "+item+" of "+items)
	}

	// SCROLL NAV
	$('.s-nav__link').click(function() {

		var getElem = $(this).attr('href');
		if ($(getElem).length) {
			var getOffset = $(getElem).offset().top;
			$('html,body').animate({
				scrollTop: getOffset
			}, 500);
		}
		return false;
	})

	// SCROLL NAV POPUP
	$('.s-popup-nav--link').click(function() {

		$('.s-popup-nav').removeClass('is-open');
		$('html').removeClass('scroll-hidden');
		$('body').removeClass('scroll-hidden');
		var getElem = $(this).attr('href');
		if ($(getElem).length) {
			var getOffset = $(getElem).offset().top;
			$('html,body').animate({
				scrollTop: getOffset
			}, 500);
		}
		return false;
	})

	box.mouseenter(function(e){

		var image = $(e.currentTarget).data('image');
		$('.s-services__bg').css("background-image","url("+image+")");
		box.removeClass('is-active');
		$(e.currentTarget).addClass('is-active');
	});

	burger.on('click', function(e){

		e.preventDefault();
		$('.s-popup-nav').addClass('is-open');
		$('html').addClass('scroll-hidden');
		$('body').addClass('scroll-hidden');
	});

	close.on('click', function(e){

		e.preventDefault();
		$('.s-popup-nav').removeClass('is-open');
		$('html').removeClass('scroll-hidden');
		$('body').removeClass('scroll-hidden');
	});

	product.on('click',function(e){

		e.preventDefault();
		$('.s-popup-product').addClass('is-open');
		$('html').addClass('scroll-hidden');
		$('body').addClass('scroll-hidden');

		var bg = $(e.currentTarget).data('image');
		var title = $(e.currentTarget).data('title');
		var description = $(e.currentTarget).data('description');
		$('.s-popup-product--body').css('background-image','url('+bg+')');
		$('.s-popup-product--title').html(title);
		$('.s-popup-product--description').html(description);
	});

	closeProduct.on('click', function(e){

		e.preventDefault();
		$('.s-popup-product').removeClass('is-open');
		$('html').removeClass('scroll-hidden');
		$('body').removeClass('scroll-hidden');
	});
});