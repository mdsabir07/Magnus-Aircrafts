<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package MSITheme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'msitheme' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="container-default">
			<div class="header-wrap grid grid-2-7-3 align-center g-gap-30">
				<div class="site-branding">
					<?php
					$custom_logo = get_theme_mod( 'custom_logo' );
					if ( !empty($custom_logo) ) : 
						the_custom_logo();
					else :
						?>
						<p class="site-title">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
								<?php bloginfo( 'name' ); ?>
							</a>
						</p>
						<?php
					endif;
					?>
				</div><!-- .site-branding -->
				<nav id="site-navigation" class="main-navigation">
					<!-- <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php //esc_html_e( 'Primary Menu', 'msitheme' ); ?></button> -->
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						)
					);
					?>
				</nav><!-- #site-navigation -->
				<div class="header-right-content flex align-center f-gap-10">
					<div class="languages clrDarkBlue fz-12 fw-700">
						<span class="language">Hung /</span>
						<span class="language"> Eng</span>
					</div>
					<div class="header-btn">
						<a href="" class="button theme-btn bordered-btn uppercase flex align-center justify-center fz-12 fw-700 clrDarkBlue">
							CONFIGURATOR
						</a>
					</div>
				</div>
			</div>
		</div>
	</header><!-- #masthead -->
