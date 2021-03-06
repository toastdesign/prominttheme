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

<?php if (has_post_thumbnail()) { ?>
    <div class="main-wrap" role="main">

<?php } else { ?>
    <div class="main-wrap main-wrap--no-image" role="main">
<?php } ?>

<?php do_action( 'foundationpress_before_content' ); ?>
<?php while ( have_posts() ) : the_post(); ?>

	<article <?php post_class('main-content') ?> id="post-<?php the_ID(); ?>">
		<?php if (has_post_thumbnail()) { ?>
		
		<div id="featured-img" class="flexible-content-block flexible-content-block--gallery">
			<div class="row small-collapse large-uncollapse">
				<div class="columns">
					<?php if (has_post_thumbnail()) {
						the_post_thumbnail('featured-medium');
					} ?>
				</div>
			</div>
		</div>
	
		<?php } ?>
		<?php if ( have_rows( 'add_content' ) ) : ?>
			<?php while ( have_rows('add_content' ) ) : the_row(); ?>
				
				<?php if ( get_row_layout() == 'wysiwyg_block' ) : ?>
					
					<div class="row align-center">
						
						<?php if (get_sub_field( 'content_width' )) { ?>
							<div class="columns small-12">
						<?php } else { ?>
							<div class="columns small-12 large-8">
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
				
				<?php elseif ( get_row_layout() == 'werkwijze_block' ) : ?>

				<div class="flexible-content-block flexible-content-block--werkwijze">
					<div class="row columns">
						<h2><?php the_sub_field( 'titel' ); ?></h2>
						<p class="intro-text"><?php the_sub_field( 'intro_text' ); ?></p>
					</div>
					
					<?php if ( have_rows('items') ) : ?>
						<div class="row">
						<?php while( have_rows('items') ) : the_row(); ?>
							<div class="columns small-12 large-4 columns--border-right">
								<div class="werkwijze">
									
									<?php 

									$image = get_sub_field('icon_image');
									$size = 'full'; // (thumbnail, medium, large, full or custom size)

									if( $image ) { ?>
										<div class="werkwijze__icon flex-container align-center align-bottom">
											<?php echo wp_get_attachment_image( $image, $size ); ?>
										</div>
									<?php }

									?>
									
									<h3 class="werkwijze__title"><?php the_sub_field('titel'); ?></h3>
									<p class="werkwijze__text"><?php the_sub_field('tekst'); ?></p>
								</div>
							</div>
						<?php endwhile; ?>
						</div>
					<?php endif; ?>
						

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
