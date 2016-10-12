
$(document).ready(function(){
	
	$('.ns-box').css('margin-top', $('.ns-box').outerHeight()*-1);

	// Mmenu

	if ( $(window).width() < 940 ) {

		var pos = 'mm-top mm-right mm-bottom',
			zpos = 'mm-front mm-next';

		var $html 	= $('html'),
			$menu	= $('nav#menu.mobile'),
			$both	= $html.add( $menu );

		$menu.mmenu();

		//	Add the position-classnames onChange
		$('input[name="pos"]').change(function() {
			$both.removeClass( pos ).addClass( 'mm-' + this.value );
		});
		$('input[name="zpos"]').change(function() {
			$both.removeClass( zpos ).addClass( 'mm-' + this.value );
		});

	}

	$(".opensays").click(function(e) {
		e.preventDefault();
		$(".textbox").toggleClass( "openbox" );
	});

	$(".opensays-up").click(function(e) {
		e.preventDefault();
		$(".textbox").toggleClass( "openbox-up" );
	});

	$(".opensays-1").click(function(e) {
		e.preventDefault();
		$(".textbox-1").toggleClass( "openbox-1" );
	});

	$(".wideopensays").click(function(e) {
		e.preventDefault();
		$(".paperbox").toggleClass( "paperdup" );
	});
		

	/*
	$(function() {
	var fixadent = $(".topnav"), pos = fixadent.offset();
	$(window).scroll(function() {
	if($(this).scrollTop() > (pos.top + 10) && fixadent.css('position') == 'absolute') { fixadent.addClass('fixed'); }
	else if($(this).scrollTop() <= pos.top && fixadent.hasClass('fixed')){ fixadent.removeClass('fixed'); }
	})
	});
	*/

	$( window ).resize(function() {

		if ($(window).width() > 940) {

			var $menu = $('nav#menu.mobile');
			$('body').prepend($menu);
			// $menu.removeClass()
			// $('nav#menu.mobile ul').removeClass()

		} else {

			var $menu	= $('nav#menu.mobile');
			$menu.addClass('fl mm-menu mm-horizontal mm-ismenu')
			$('nav#menu.mobile ul').addClass('mm-list mm-panel')
			$('body').prepend($menu);

		}

	});

	$(window).scroll(function() {

		$scroll = $(window).scrollTop();

		if ( $scroll >= 121 ) {
			$('body').addClass('bookingnav-fixed');
		} else {
			$('body').removeClass('bookingnav-fixed');
		}

	});


/*
	if ($(window).width() > 640) {
		
		$(function() {
			var fixadent = $(".topnav"), pos = fixadent.offset();
			$(window).scroll(function() {
			if($(this).scrollTop() > (pos.top + 10) && fixadent.css('position') == 'absolute') { fixadent.addClass('fixed'); }
			else if($(this).scrollTop() <= pos.top && fixadent.hasClass('fixed')){ fixadent.removeClass('fixed'); }
			})
		});
						
	}
	*/



	// Touch hover effect

	if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {

		// $('.hover').click(function(e) {
		//     e.preventDefault();
		//     $(this).toggleClass('hover-effect');
		// });

		$('.topnav li:last-child, .topnav li:first-child').addClass('mobile');

	}






});



$(function() {

	// Jquery UI spinner

	$( ".spinner" ).spinner();
	$('.ui-spinner-up .ui-button-text').html('<span class="ui-icon ui-icon-triangle-1-n fa fa-angle-up"></span>');
	$('.ui-spinner-down .ui-button-text').html('<span class="ui-icon ui-icon-triangle-1-n fa fa-angle-down"></span>');	

});
