<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package MSITheme
 */

get_header();

$msitheme = get_option('msitheme_options');


if (array_key_exists('404_main_img', $msitheme)) {
	$img_404 = $msitheme['404_main_img'];
} else {
	$img_404 = '';
}


if (array_key_exists('left_border_img', $msitheme)) {
	$left_border_img = $msitheme['left_border_img'];
} else {
	$left_border_img = '';
}


if (array_key_exists('right_border_img', $msitheme)) {
	$right_border_img = $msitheme['right_border_img'];
} else {
	$right_border_img = '';
}

?>

	<main id="primary" class="site-main">
		<div class="container-default">
			<section class="error-404 not-found relative">
				<?php if ( !empty($left_border_img) ) : ?>
					<div class="section-border-left absolute top-0">
						<img src="<?php echo ( $left_border_img['url'] ); ?>" alt="">
					</div>
				<?php endif; ?>
				<?php if ( !empty($img_404) ) : ?>
					<div class="img-404 flex justify-center align-center">
						<img src="<?php echo ( $img_404['url'] ); ?>" alt="404">
					</div>
				<?php endif; ?>

				<div class="page-content text-center">
					<h1 class="page-title fz-64 lh-76 clrWhite uppercase">
						<span><?php esc_html_e( 'oh... the page', 'msitheme' ); ?></span><br>
						<span><?php esc_html_e( 'is fly away...', 'msitheme' ); ?></span>
					</h1>
					<p class="fw-700 clrWhite paragraph-404"><?php esc_html_e( 'But you can find an other destination', 'msitheme' ); ?></p>

					<div class="readmore-btns flex align-center justify-center f-gap-25">
						<a href="<?php echo esc_url(home_url( '/' )); ?>" class="readmore-btn fz-12 fw-700 clrWhite uppercase">
							<?php esc_html_e( 'GO BACK', 'msitheme' ); ?>
						</a>
						<a href="<?php echo esc_url(home_url( '/' )); ?>" class="readmore-btn fz-12 fw-700 clrWhite uppercase">
							<?php esc_html_e( 'MAIN PAGE', 'msitheme' ); ?>
						</a>
						<a href="<?php echo esc_url(home_url( '/calculator' )); ?>" class="readmore-btn fz-12 fw-700 clrWhite uppercase">
							<?php esc_html_e( 'CALCULATOR', 'msitheme' ); ?>
						</a>
						<a href="<?php echo esc_url(home_url( '/contact' )); ?>" class="readmore-btn fz-12 fw-700 clrWhite uppercase">
							<?php esc_html_e( 'CONTACT', 'msitheme' ); ?>
						</a>
					</div>

				</div><!-- .page-content -->
				<?php if ( !empty($right_border_img) ) : ?>
					<div class="section-border-right absolute top-0">
						<img src="<?php echo ( $right_border_img['url'] ); ?>" alt="">
					</div>
				<?php endif; ?>
			</section><!-- .error-404 -->
		</div>
	</main><!-- #main -->

<?php
get_footer();
