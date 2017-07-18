<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

	</section>
	<div class="footer-container" data-sticky-footer>
		<footer class="footer">
			<?php do_action( 'foundationpress_before_footer' ); ?>
			
			<div class="flex-container row align-middle align-justify">
				<div class="columns show-for-medium">
					<?php foundationpress_bottom_bar_l(); ?>
				</div>
				<div class="columns shrink">
					<?php foundationpress_bottom_bar_r(); ?>
				</div>
			</div>
			
			<?php dynamic_sidebar( 'footer-widgets' ); ?>

			<?php do_action( 'foundationpress_after_footer' ); ?>
		</footer>

		<div class="copyright">
			<div class="flex-container row flex-dir-column medium-flex-dir-row">
				<div class="columns  medium-flex-child-shrink">
					@ 2017 Promint Projectmanagement
				</div>
				<div class="columns flex-child-shrink show-for-medium">
					|
				</div>
				<div class="columns medium-flex-child-shrink">
					<a href="https://bondgenoten.com" target="_blank">Website: Bondgenoten</a>
				</div>
			</div>
		</div>
	</div>

	<?php do_action( 'foundationpress_layout_end' ); ?>

<?php wp_footer(); ?>
<?php do_action( 'foundationpress_before_closing_body' ); ?>
</body>
</html>
