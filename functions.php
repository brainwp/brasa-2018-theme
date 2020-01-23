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
 * Set coletivo_load_default_fonts filter to false to avoid load default fonts
 * @param boolean $value
 * @return boolean
 */
function brasa2018_coletivo_load_default_fonts( $value ) {
	return false;
}
add_filter( 'coletivo_load_default_fonts', 'brasa2018_coletivo_load_default_fonts', 10, 1 );
/**
 * Load site scripts.
 *
 * @since 2.2.0
 */
function brasa2018_enqueue_scripts() {
	$template_url = get_stylesheet_directory_uri();


	// Loads Brasa2018 CSS file
	wp_enqueue_style( 'brasa2018-sourcesans', 'https://fonts.googleapis.com/css?family=Source+Sans+Pro', array(), null, 'all', true );
	wp_enqueue_style( 'brasa2018-css', $template_url . '/brasa2018.css', array(), null, 'all' );

	// Loads Brasa2018 JS file
	wp_enqueue_script( 'brasa2018-js', $template_url . '/brasa2018.js', array(), null, true );
}

add_action( 'wp_footer', 'brasa2018_enqueue_scripts', 1 );


// Register Custom Post Type
function custom_post_type_depoimentos() {

	$labels = array(
		'name'                => _x( 'Depoimentos', 'Post Type General Name', 'tema-brasa' ),
		'singular_name'       => _x( 'Depoimento', 'Post Type Singular Name', 'tema-brasa' ),
		'menu_name'           => __( 'Depoimentos', 'tema-brasa' ),
		'parent_item_colon'   => __( 'Item parente', 'tema-brasa' ),
		'all_items'           => __( 'Todos depoimentos', 'tema-brasa' ),
		'view_item'           => __( 'Ver depoimento', 'tema-brasa' ),
		'add_new_item'        => __( 'Adicionar novo depoimento', 'tema-brasa' ),
		'add_new'             => __( 'Adicionar novo', 'tema-brasa' ),
		'edit_item'           => __( 'Editar item', 'tema-brasa' ),
		'update_item'         => __( 'Atualizar item', 'tema-brasa' ),
		'search_items'        => __( 'Buscar depoimentos', 'tema-brasa' ),
		'not_found'           => __( 'Não en
		contrado', 'tema-brasa' ),
		'not_found_in_trash'  => __( 'Não encontrado na lixeira', 'tema-brasa' ),
	);
	$args = array(
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'thumbnail', ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-format-aside',
		'can_export'          => true,
		'has_archive'         => false,
		'exclude_from_search' => true,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'depoimentos', $args );

}

// Hook into the 'init' action
add_action( 'init', 'custom_post_type_depoimentos', 0 );



/**
 * Página de equipe
 */
// Register Custom Post Type
function custom_post_type_equipe() {

	$labels = array(
		'name'                => _x( 'Equipe', 'Post Type General Name', 'tema-brasa' ),
		'singular_name'       => _x( 'Equipe', 'Post Type Singular Name', 'tema-brasa' ),
		'menu_name'           => __( 'Equipe', 'tema-brasa' ),
		'parent_item_colon'   => __( 'Item parente', 'tema-brasa' ),
		'all_items'           => __( 'Todos membros', 'tema-brasa' ),
		'view_item'           => __( 'Ver membro', 'tema-brasa' ),
		'add_new_item'        => __( 'Adicionar novo membro', 'tema-brasa' ),
		'add_new'             => __( 'Adicionar novo', 'tema-brasa' ),
		'edit_item'           => __( 'Editar item', 'tema-brasa' ),
		'update_item'         => __( 'Atualizar item', 'tema-brasa' ),
		'search_items'        => __( 'Buscar membro', 'tema-brasa' ),
		'not_found'           => __( 'Não en
		contrado', 'tema-brasa' ),
		'not_found_in_trash'  => __( 'Não encontrado na lixeira', 'tema-brasa' ),
	);
	$args = array(
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'thumbnail', ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-groups',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'equipe', $args );

}

// Hook into the 'init' action
add_action( 'init', 'custom_post_type_equipe', 0 );


// if (!function_exists('get_field')) {
//   function get_field($field) {
//   	global $post;
//   	return get_post_meta($post->ID, $field, true);
//   }
// }
// if (!function_exists('the_field')) {
//   function the_field($field) {
//   	global $post;
//   	echo get_field($field);
//   }
// }
// function team_query( $query ) {
//     if ( is_post_type_archive('equipe') ) {
//         $query->set( 'orderby', 'rand' );
//         return;
//     }
// }
//add_action( 'pre_get_posts', 'team_query' );

require get_template_directory() . '/inc/class-metabox.php';
$team_metabox = new Odin_Metabox(
	'team_metabox', // Slug/ID do Metabox (obrigatório)
	'Team', // Nome do Metabox  (obrigatório)
	'equipe', // Slug do Post Type, sendo possível enviar apenas um valor ou um array com vários (opcional)
	'normal', // Contexto (opções: normal, advanced, ou side) (opcional)
	'high' // Prioridade (opções: high, core, default ou low) (opcional)
);
$team_metabox->set_fields(
	array(
		array(
			'id'          => 'team_position',
			'label'       => 'Cargo',
			'type'        => 'text',
			'description' => ''
		),
		array(
			'id'          => 'team_phone',
			'label'       => 'Telefone',
			'type'        => 'text',
			'description' => ''
		),
		array(
			'id'          => 'team_email',
			'label'       => 'E-mail',
			'type'        => 'text',
			'description' => ''
		),
		array(
			'id'          => 'team_twitter',
			'label'       => 'Twitter URL',
			'type'        => 'text',
			'description' => ''
		),
		array(
			'id'          => 'team_linkedin',
			'label'       => 'Linkedin URL',
			'type'        => 'text',
			'description' => ''
		),
		array(
			'id'          => 'team_github',
			'label'       => 'Github URL',
			'type'        => 'text',
			'description' => ''
		),
		array(
			'id'          => 'team_wporg',
			'label'       => __('URL da Conta no WordPress.org','tema-brasa'),
			'type'        => 'text',
			'description' => ''
		),
	)
);

// 1. customize ACF path
// add_filter('acf/settings/path', 'my_acf_settings_path');

function my_acf_settings_path( $path ) {

    // update path
    $path = get_stylesheet_directory() . '/inc/advanced-custom-fields/';

    // return
    return $path;

}


// 2. customize ACF dir
// add_filter('acf/settings/dir', 'my_acf_settings_dir');

function my_acf_settings_dir( $dir ) {

    // update path
    $dir = get_stylesheet_directory_uri() . '/inc/advanced-custom-fields/';

    // return
    return $dir;

}


// 3. Hide ACF field group menu item
// add_filter('acf/settings/show_admin', '__return_false');


// 4. Include ACF
// include_once( get_stylesheet_directory() . '/inc/advanced-custom-fields/acf.php' );

// 4. Include ACF Fields
include_once( get_stylesheet_directory() . '/inc/acf-fields.php' );

/**
 * Change permalink to the old permalink on the old version of the brasa site
 * @param string $permalink
 * @param object $post
 * @param string|null $leavename
 * @return string
 */
function redirect_portfolio_to_the_old_site( $permalink, $post, $leavename = null ) {
	if ( is_admin() ) {
		return $permalink;
	}
	if ( ! is_object( $post ) || 'jetpack-portfolio' != $post->post_type ) {
		return $permalink;
	}
	if ( $link = get_post_meta( $post->ID, 'portfolio_redirect', true ) ) {
		if ( ! empty( $link ) ) {
			return $link;
		}
	}
	return $permalink;
}
add_filter( 'post_type_link', 'redirect_portfolio_to_the_old_site', 10, 3 );

/**
 * Remove jetpack devicepx script
 */
function brasa_2018_jp_dequeue_devicepx() {
	wp_dequeue_script( 'devicepx' );
}
add_action( 'wp_enqueue_scripts', 'brasa_2018_jp_dequeue_devicepx' );


/**
 * Prefixo (Brasa Landing Page) brasalp_*
 * 
 * Usar a verificação is_page_template( 'page-express.php' )
 */

function brasalp_footer() {
  
  if ( is_page_template( 'page-landingpage.php' ) ) :
  ?>

  <footer class="footer-main">
    <div class="container">

      <nav>
          <ul>
              <li><a href="https://brasa.art.br">Quem Somos</a></li>
              <li><a href="https://brasa.art.br/contato">Contato</a></li>
          </ul>
      </nav>

      <div class="credits">
          <span>Desenvolvido pela </span><a class="brasa" href="https://brasa.art.br/"></a><span> com </span><a class="wordpress" href="https://brasa.art.br/category/dicas-e-truques-wordpress/">WordPress</a>
      </div><!-- /.credits -->

    </div><!-- /.container -->
  </footer><!-- footer-main -->

	<?php
  endif;
  
}
add_action( 'wp_footer', 'brasalp_footer', 100 );