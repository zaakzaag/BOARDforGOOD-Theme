<?php
/**
 * Template Name: Main Page Template
 *
 * This template can be used to override the default template and sidebar setup
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>


<main class="site-main hide-entry-title" id="main">

	<?php
	while ( have_posts() ) {
		the_post();
		get_template_part( 'loop-templates/content', 'page' );


	}
	?>

</main><!-- #main -->

<?php
get_footer();
