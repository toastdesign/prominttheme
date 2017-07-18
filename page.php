<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

 get_header(); ?>

<div class="main-wrap" role="main">

<?php do_action( 'foundationpress_before_content' ); ?>
<?php while ( have_posts() ) : the_post(); ?>

	<article <?php post_class('main-content') ?> id="post-<?php the_ID(); ?>">

		<div class="row">
			<div class="columns small-12">
				<div id="featured-img" class="flexible-content-block flexible-content-block--gallery">
					<div class="row small-collapse medium-uncollapse">
						<div class="columns">
							<?php if (has_post_thumbnail()) {
								the_post_thumbnail();
							} ?>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Magellan menu-->
		<?php if ( have_rows( 'add_content' ) ) : ?>
			


					<ul class="sub-menu menu align-center" data-magellan >
					
					<?php while ( have_rows('add_content' ) ) : the_row(); ?>
				
						<?php if ( get_row_layout() == 'wysiwyg_block' ) : ?>
							
							<?php if ( get_sub_field('subnavigation') ) : ?>
								<li><a href="#<?php the_sub_field( 'subnavigation_link_text' ); ?>"><?php the_sub_field( 'subnavigation_link_text' ); ?></a></li>
							<?php endif; ?>
								
						<?php endif; ?>

					<?php endwhile; ?>
					
					</ul>


				
		<?php endif; ?>
		<!-- End Magellan Menu -->
		
		
		<?php if ( have_rows( 'add_content' ) ) : ?>
			<?php while ( have_rows('add_content' ) ) : the_row(); ?>
				
				<?php if ( get_row_layout() == 'wysiwyg_block' ) : ?>

					<?php if ( get_sub_field('subnavigation') ) : ?>
						<?php if ( get_sub_field('subnavigation_link_text') ) : ?>
							<span id="<?php echo get_sub_field('subnavigation_link_text'); ?>" data-magellan-target="<?php echo get_sub_field('subnavigation_link_text'); ?>"></span>
						<?php endif; ?>
					<?php endif; ?>
					
					<div class="row align-center">
						
						<?php if (get_sub_field( 'content_width' )) { ?>
							<div class="columns small-12">
						<?php } else { ?>
							<div class="columns small-12 medium-8">
						<?php } ?>
							<div class="flexible-content-block flexible-content-block--wysiwyg">

								<?php if (get_sub_field( 'columns' ) === '6') { ?>
									<div class="row">
										<div class="columns small-12 medium-6">
											<?php the_sub_field( 'content' ); ?>
										</div>
										<div class="columns small-12 medium-6">
											<?php the_sub_field( 'content_second_column' ); ?>
										</div>
									</div>
								<?php } elseif (get_sub_field( 'columns' ) === '4') { ?>
									<div class="row">
										<div class="columns small-12 medium-4">
											<?php the_sub_field( 'content' ); ?>
										</div>
										<div class="columns small-12 medium-4">
											<?php the_sub_field( 'content_second_column' ); ?>
										</div>
										<div class="columns small-12 medium-4">
											<?php the_sub_field( 'content_third_column' ); ?>
										</div>
									</div>
								<?php } else { ?>
									<?php the_sub_field( 'content' ); ?>
								<?php } ?>

							</div>
						</div>
					</div>
				
				<?php elseif ( get_row_layout() == 'image_block' ) : ?>

					<div class="row small-collapse medium-uncollapse align-center">
						
						<?php if (get_sub_field( 'content_width' )) { ?>
							<div class="columns small-12">
						<?php } else { ?>
							<div class="columns small-12 medium-8">
						<?php } ?>
							<div class="flexible-content-block flexible-content-block--wysiwyg">
								<?php the_sub_field( 'content' ); ?>
							</div>
						</div>
					</div>

				<?php elseif ( get_row_layout() == 'seperator' ) : ?>

					<div class="row">
						<div class="columns">
							<div class="flexible-content-block flexible-content-block--seperator">
								<hr class="seperator">
							</div>
						</div>
					</div>

				<?php endif; ?>

			<?php endwhile; ?>
		<?php endif; ?>

	</article>

<?php endwhile;?>

<?php do_action( 'foundationpress_after_content' ); ?>

</div>

<?php get_footer();
