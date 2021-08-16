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

<script>
    window.setTimeout(function(){

// Move to a new location or you can do something else
window.location.href = "<?php echo esc_url( home_url( '/' ) ); ?>";

}, 5000);
</script>
<main class="site-main hide-entry-title h-100" id="main">

	<div class="page-404 w-100 h-100">

		<div class="container-fluid h-100">
			<div class="row d-flex justify-content-center align-items-center text-center h-100">
				<div class="col-8 d-flex flex-column justify-content-center align-items-center">
					<h2>Page Not Found</h2>
					<i class="fa fa-exclamation" aria-hidden="true"></i>
				</div>
			</div>
			<div class="row d-flex justify-content-center align-items-center text-center ">
				<div class="col-8 d-flex flex-column justify-content-center align-items-center">
				<p>You will be redirected to the home page.</p> 
				</div>
			</div>
		</div>
	</div>

</main><!-- #main -->

<?php
get_footer();
