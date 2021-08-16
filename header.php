<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php understrap_body_attributes(); ?>>
<?php do_action( 'wp_body_open' ); ?>
<div class="site" id="page">

	<!-- ******************* The Navbar Area ******************* -->
	<div id="wrapper-navbar">


		<nav id="main-nav" class="navbar navbar-expand-md navbar-light navbar-custom justify-content-center" aria-labelledby="main-nav-label">

		<?php if ( 'container' === $container ) : ?>
			<div class="container justify-content-between mx-2 mw-100">
		<?php endif; ?>

					<!-- Your site title as branding in the menu -->
					<?php if ( ! has_custom_logo() ) { ?>

						<?php if ( is_front_page() && is_home() ) : ?>

							<h1 class="navbar-brand mb-0"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a></h1>

						<?php else : ?>

	
							<a class="navbar-brand w-20 m-0" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" itemprop="url"><img id="logo-img" src="<?php bloginfo('template_url'); ?>/img/logo.svg" /></a>
						<?php endif; ?>

						<?php
					} else {
						the_custom_logo();
					}
					?>
					<!-- end custom logo -->

				<button class="navbar-toggler d-flex justify-content-center align-items-center d-md-none collapsed" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'understrap' ); ?>">
				<img class="menu-icon " src="<?php bloginfo('template_url'); ?>/img/icon-menu.svg" />
				<img class="x-icon " src="<?php bloginfo('template_url'); ?>/img/icon-x.svg" />
				</button>

				<!-- The WordPress Menu goes here -->
				<?php
				wp_nav_menu(
					array(
						'theme_location'  => 'my-custom-menu',
						'container_class' => 'collapse navbar-collapse',
						'container_id'    => 'navbarNavDropdown',
						'menu_class'      => 'navbar-nav mx-md-auto',
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu',
						'depth'           => 2,
						'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
					)
				);
				?>



<div class="language d-flex  justify-content-end align-items-center navbar-container-custom w-20">
	 <a href="#" class=" custom-nav-link pl-1 active-lang">D</a>
	  <a href="#" class=" custom-nav-link pl-1">F</a> </div>

		</nav><!-- .site-navigation -->

	</div><!-- #wrapper-navbar end -->
