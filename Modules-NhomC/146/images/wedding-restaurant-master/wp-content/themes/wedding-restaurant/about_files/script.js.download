$(function(){
	'use strict';
	/*---------------------------
	Template Name: deliki
	Author: theme3x
	-----------------------------
	TABLE OF CONTENTS:
	-----------------------------
	1. Header
	2. Menu
	3. Set background
	4. Image popub
	5. OwlCarousel 
	6. Reloader 
	7. Map 
	-----------------------------*/
	/*------1. Header-----*/
	function scrollheader() {
		var $h_top_header=0;
		var pageY = $(window).scrollTop();
		if($('.top-header').height())
		{
			$h_top_header=$('.top-header').height();
		}
		if (pageY > $h_top_header) {
				$('header').addClass('smaller');
		} 
		else 
		{
			if($('header').hasClass('smaller')) {
				$('header').removeClass('smaller');
			}
		}
	}
	$(window).on('scroll', function() {
		scrollheader();
	});
	/*-------2. Menu------*/
	$('.menu-btn').on('click',function(e){
		$('.menu-nav > .menu-wrap').css('right','0');
	});	
	$('.menu-btn-close').on('click',function(e){
		$('.menu-nav > .menu-wrap').css('right','-25rem');
	});		
	$('.menu-nav ul.menu > li').on('click',function(e){
		var $ul_menu=$('.menu-nav .menu');
		if ($(window).width() < 991){ 
			$(this).children('ul').toggle();
			if($(window).height() <= $ul_menu.height())
			{
				$ul_menu.css('height',$(window).height());
			}
			else
			{
				$ul_menu.removeAttr('style');
			}
			e.stopPropagation();
		}
	});	
	$('.menu-nav ul.menu li').on('mouseover',function(e){
		var p=$(this);		
		var offset = p.offset().left;
		var $ws=$(this).children('.sub-menu').width();
		if ($(window).width() > 991){ 
			$(this).children('.sub-menu').show();
			if(offset + $ws > $(window).width())
			{
				$(this).children('.sub-menu').css({'right':0,'left':'auto'});			
			}
		}
	}).mouseout(function() { 
		$(this).find('.sub-menu').hide();
	});
	/*------3. Set background-------*/
	$('[data-image-src]').each(function(){
		var img_source=$(this).attr('data-image-src');
		if(img_source){
			$(this).css('background-image','url(' + img_source + ')');
		}
	});		
	/*------4. Image popub-------*/
	$('.image-zoom').magnificPopup({
		type:'image',
		gallery: {
			// options for gallery
			enabled: true
		},
		zoom: {
			enabled: true,
			duration: 300,
			easing: 'ease-in-out',
			opener: function(openerElement) {
				return openerElement.is('img') ? openerElement : openerElement.find('img');
			}
		}
	});
	$('.card').on('click',function(e){
		$(this).find('.image-zoom').trigger('click');
	});
	/*------5. OwlCarousel-------*/
	var $owl = $('.owl-carousel');
	$owl.each( function() {
		$(this).owlCarousel({
			dots:JSON.parse($(this).attr('data-dots')),
			margin:JSON.parse($(this).attr('data-margin')),
			nav:JSON.parse($(this).attr('data-nav')),
			center:JSON.parse($(this).attr('data-center')),
			mouseDrag:JSON.parse($(this).attr('data-darg')),		
			responsive:{
				0:{
					items:$(this).attr('data-itemsMobile')					
				},
				500:{
					items:$(this).attr('data-itemsTablet')
				},
				900:{
					items:$(this).attr('data-itemsDesktopSmall')
				},
				1200:{
					items:$(this).attr('data-itemsDesktop')
				}
			}
		})
	});
	/*-------6. Reloader-------*/
	reload();
	function reload()
	{
		$('.preloader i').fadeOut('slow');
		$('.preloader').delay(500).fadeOut('slow');
		$('body').delay(500).css({'overflow':'visible'});
	}
	/*-------7. Map--------*/
	loadScript();
	function loadScript(){
		if($('#map').hasClass('map')){
			$.getScript("https://maps.googleapis.com/maps/api/js?key=AIzaSyBmIXEW_ZrwUuWafPPYrEwn8eUyIkxWrXg&callback=initMap");
		}
	}
	function initMap() {
		var uluru = {lat: 30.213184, lng: -112.709223};
		var map = new google.maps.Map(document.getElementById('map'), {
			zoom: 7,
			center: uluru
		});
		var marker = new google.maps.Marker({
			position: uluru,
			map: map
		});
	}
	$(window).on('load', function() {
		if($('#map').hasClass('map')){
			initMap();
		}
	});
});
