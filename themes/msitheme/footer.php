<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package MSITheme
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="container-default">
			<div class="footer-top grid grid-2 align-center g-gap-20">
				<?php if ( is_active_sidebar( 'footer-top-1' ) ) : ?>
				<div class="footer-logo">
					<?php dynamic_sidebar( 'footer-top-1' ) ?>
				</div>
				<?php endif; if ( is_active_sidebar( 'footer-top-2' ) ) : ?>
				<div class="newsletter">
					<?php dynamic_sidebar( 'footer-top-2' ) ?>
				</div>
				<?php endif; ?>
			</div>
			<div class="footer-middle grid grid-4 g-gap-20">
				<div class="foo-mid-1">
					<div class="site-dialougue fw-700 clrMidWhite">
						Our aim is to design an aircraft that it is not only custom-made for you, but it is also about you.
					</div>
					<div class="site-address">
						<h6 class="clrMidWhite fz-18">MAGNUS AIRCRAFT ZRT.</h6>
						<p class="clrMidWhite">H-7666 Pogány<br>Repülőtér 08/8 hrsz.</p>
					</div>
					<div class="footer-contact">
						<a href="tel:+36304121129" class="d-block clrMidWhite fz-18">+36 30 412 1129</a>
						<a href="mailto:info@magnus-aircraft.com" class="d-block clrMidWhite fz-18">info@magnus-aircraft.com</a>
					</div>
					<div class="footer-socials flex align-center">
						<a href="" class="facebook"><span class="dashicons dashicons-facebook-alt"></span></a>
						<a href="" class="facebook"><span class="dashicons dashicons-linkedin"></span></a>
						<a href="" class="facebook"><span class="dashicons dashicons-instagram"></span></a>
						<a href="" class="facebook"><span class="dashicons dashicons-twitter"></span></a>
						<a href="" class="facebook"><span class="dashicons dashicons-youtube"></span></a>
					</div>
				</div>
				<?php if ( is_active_sidebar( 'footer-mid-2' ) ) : ?>
					<div class="foo-mid-2">
						<?php dynamic_sidebar( 'footer-mid-2' ) ?>
					</div>
				<?php endif; if ( is_active_sidebar( 'footer-mid-3' ) ) : ?>
					<div class="foo-mid-3">
						<?php dynamic_sidebar( 'footer-mid-3' ) ?>
					</div>
				<?php endif; if ( is_active_sidebar( 'footer-mid-4' ) ) : ?>
					<div class="foo-mid-4">
						<?php dynamic_sidebar( 'footer-mid-4' ) ?>
					</div>
				<?php endif; ?>
			</div>
			<div class="footer-bottom flex justify-between align-center">
				<?php if ( is_active_sidebar( 'footer-bottom-1' ) ) : ?>
					<div class="copyright">
						<?php dynamic_sidebar( 'footer-bottom-1' ) ?>
					</div>
				<?php endif; if ( is_active_sidebar( 'footer-bottom-2' ) ) : ?>
					<div class="languages footer-lang">
						<?php dynamic_sidebar( 'footer-bottom-2' ) ?>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
