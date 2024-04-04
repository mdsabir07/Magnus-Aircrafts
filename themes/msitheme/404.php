<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package MSITheme
 */

get_header();
?>

	<main id="primary" class="site-main">
		<div class="container-default">
			<section class="error-404 not-found relative">
				<div class="section-border-left absolute top-0">
					<img src="/wp-content/uploads/2024/04/border-section-left.png" alt="">
				</div>
				<div class="img-404 flex justify-center align-center">
					<img src="/wp-content/uploads/2024/04/404-fusion.png" alt="404">
				</div>
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
				<div class="section-border-right absolute top-0">
					<img src="/wp-content/uploads/2024/04/border-section-right.png" alt="">
				</div>
			</section><!-- .error-404 -->
		</div>
	</main><!-- #main -->

<?php
get_footer();
