/**
 *
 * Child Theme -> Brasa 2018 -> Scripts
 *
*/
jQuery(document).ready(function($) {
	/**
	 *
	 * Portfolio - navigation menu / scroll
	 *
	*/
	var slider_position = $( '#slider' ).height() / 2;
	$( window ).scroll( function(){
		var scroll_position = $(window).scrollTop();
		if ( scroll_position >= slider_position ) {
			$( '#menu-portfolio-scroll' ).addClass( 'active' )
		} else {
			$( '#menu-portfolio-scroll' ).removeClass( 'active' );
		}
	});
	/**
	 *
	 * Portfolio - navigation menu / remove nonexistent menu items
	 *
	*/
	$( window ).load( function() {
		$( '#menu-portfolio-container li' ).each( function(){
			var $link_element = $( this ).find( 'a' );
			console.log( $link_element );
			if ( $( $link_element.attr( 'href' ) ).length < 1 ) {
				$( this ).fadeOut( 1200 ).remove();
			}
		});
	});
	/**
	 *
	 * Portfolio - navigation menu / scroll to the element when click
	 *
	*/
	$( '#menu-portfolio-container li a' ).on( 'click', function( e ) {
		e.preventDefault();
		$( 'html, body' ).animate( {
			scrollTop: $( $( this ).attr( 'href') ).offset().top - $( '#masthead' ).height() * 2
		}, 1000 );
	});
})
