<?php
/**
 * UnderStrap functions and definitions
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

// UnderStrap's includes directory.
$understrap_inc_dir = 'inc';

// Array of files to include.
$understrap_includes = array(
	'/theme-settings.php',                  // Initialize theme default settings.
	'/setup.php',                           // Theme setup and custom theme supports.
	'/widgets.php',                         // Register widget area.
	'/enqueue.php',                         // Enqueue scripts and styles.
	'/template-tags.php',                   // Custom template tags for this theme.
	'/pagination.php',                      // Custom pagination for this theme.
	'/hooks.php',                           // Custom hooks.
	'/extras.php',                          // Custom functions that act independently of the theme templates.
	'/customizer.php',                      // Customizer additions.
	'/custom-comments.php',                 // Custom Comments file.
	'/class-wp-bootstrap-navwalker.php',    // Load custom WordPress nav walker. Trying to get deeper navigation? Check out: https://github.com/understrap/understrap/issues/567.
	'/editor.php',                          // Load Editor functions.
	'/deprecated.php',                      // Load deprecated functions.
);

// Load WooCommerce functions if WooCommerce is activated.
if ( class_exists( 'WooCommerce' ) ) {
	$understrap_includes[] = '/woocommerce.php';
}

// Load Jetpack compatibility file if Jetpack is activiated.
if ( class_exists( 'Jetpack' ) ) {
	$understrap_includes[] = '/jetpack.php';
}

// Include files.
foreach ( $understrap_includes as $file ) {
	require_once get_theme_file_path( $understrap_inc_dir . $file );
}



add_action('acf/init', 'my_acf_init_block_types');
function my_acf_init_block_types() {

    // Check function exists.
    if( function_exists('acf_register_block_type') ) {

        
        acf_register_block_type(		array(
			'name'              => 'top-section',
            'title'             => __('Top Section'),
            'description'       => __('Top section block.'),
            'render_template'   => 'loop-templates/acf-blocks/top-section.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'top-section', 'quote' ),

		));


		acf_register_block_type(		array(
			'name'              => 'bewerben-section',
            'title'             => __('Bewerben Section'),
            'description'       => __('Bewerben section block.'),
            'render_template'   => 'loop-templates/acf-blocks/bewerben-section.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'bewerben-section', 'quote' ),

		));

		acf_register_block_type(		array(
			'name'              => 'uberuns-section',
            'title'             => __('Über uns Section'),
            'description'       => __('Über uns section block.'),
            'render_template'   => 'loop-templates/acf-blocks/uberuns-section.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'uberuns-section', 'quote' ),

		));

		acf_register_block_type(		array(
			'name'              => 'partner-section',
            'title'             => __('Partner Section'),
            'description'       => __('Partner section block.'),
            'render_template'   => 'loop-templates/acf-blocks/partner-section.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'partner-section', 'quote' ),

		));

        acf_register_block_type(		array(
			'name'              => 'contact-section',
            'title'             => __('Contact Section'),
            'description'       => __('Contact section block.'),
            'render_template'   => 'loop-templates/acf-blocks/contact-section.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'contact-section', 'quote' ),

		));
    }
}

function wpb_custom_new_menu() {
    register_nav_menu('my-custom-menu',__( 'My Custom Menu' ));
}

add_action( 'init', 'wpb_custom_new_menu' );

function add_search_form($items, $args) {
    if( $args->theme_location == 'my-custom-menu' ){
    $items .= '

    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-120 nav-item d-flex justify-content-end d-md-none"> 
      
        <a href="#" class="nav-link custom-nav-link pl-1 active-lang">D</a>
        <a href="#" class="nav-link custom-nav-link pl-1">F</a>
     
    </li>
   ';

    }
  return $items;
}
add_filter('wp_nav_menu_items', 'add_search_form', 10, 2);