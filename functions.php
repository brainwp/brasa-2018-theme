<?php
/*
 Theme Name:	Brasa 2018
 Theme URI:		http://brasa.art.br
 Description:	Brasa 2018 - Tema filho do Tema Coletivo
 Author:		Matheus Gimenez
 Author URI:	http://brasa.art.br
 Template:		tema-coletivo
 Version:		0.1alpha
 License:		GNU General Public License v2 or later
 License URI:	http://www.gnu.org/licenses/gpl-2.0.html
 Text Domain:	brasa2018
*/

/**
 * Load site scripts.
 *
 * @since 2.2.0
 */
function brasa2018_enqueue_scripts() {
	$template_url = get_stylesheet_directory_uri();

	// Loads Brasa2018 CSS file
	wp_enqueue_style( 'brasa2018-css', $template_url . '/brasa2018.css', array(), null, 'all' );

	// Loads Brasa2018 JS file
	//wp_enqueue_script( 'brasa2018-js', $template_url . '/brasa2018.js', array(), null, true );
}

add_action( 'wp_footer', 'brasa2018_enqueue_scripts', 1 );
