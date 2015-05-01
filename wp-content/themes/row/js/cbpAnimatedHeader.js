/**
 * cbpAnimatedHeader.js v1.0.0
 * http://www.codrops.com
 *
 * Licensed under the MIT license.
 * http://www.opensource.org/licenses/mit-license.php
 * 
 * Copyright 2013, Codrops
 * http://www.codrops.com
 */
var cbpAnimatedHeader = (function() {

	var docElem = document.documentElement,
		header = document.querySelector( '.menu-wrapper' ),
		notification = document.querySelector( '.ns-box' ),
		didScroll = false,
		changeHeaderOn = 67;
		changeHeaderOn2 = 0;

	function init() {
		window.addEventListener( 'scroll', function( event ) {
			if( !didScroll ) {
				didScroll = true;
				setTimeout( scrollPage, 250 );
			}
		}, false );
	}

	function scrollPage() {
		var sy = scrollY();
		if ( sy >= changeHeaderOn ) {
			classie.add( header, 'nav-fixed' );
		}
		else {
			classie.remove( header, 'nav-fixed' );
		}

		if ( sy > changeHeaderOn2 ) {
			classie.add( notification, 'nav-fixed' );
		}
		else {
			classie.remove( notification, 'nav-fixed' );
		}

		didScroll = false;
	}

	function scrollY() {
		return window.pageYOffset || docElem.scrollTop;
	}

	init();

})();