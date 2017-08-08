<?php
/*
Template Name: Front
*/
get_header(); ?>

<header class="site-header">

	<?php if ( have_rows('slides') ) : ?>
	<div class="orbit orbit--front-page" role="region" aria-label="Favorite Space Pictures" data-orbit>
			<div class="orbit-wrapper">
			<div class="orbit-controls">
				<button class="orbit-previous"><span class="show-for-sr">Previous Slide</span><span class="fa fa-angle-left fa-2x"></span></button>
				<button class="orbit-next"><span class="show-for-sr">Next Slide</span><span class="fa fa-angle-right fa-2x"></span></button>
			</div>
			<ul class="orbit-container">
			<?php while( have_rows('slides') ) : the_row(); ?>
				<li class="orbit-slide" style="background-image:url(<?php the_sub_field('slide'); ?>);"></li>
			<?php endwhile; ?>
			</ul>
		</div>
	</div>
	<?php endif; ?>

</header>

<div class="row small-collapse large-uncollapse">
	<div class="columns">

		<div class="fp-intro">

			<?php if ( have_rows('intro') ) : ?>
			
				<?php while( have_rows('intro') ) : the_row(); ?>
			
					<div class="fp-intro__title">
						<h1><?php the_sub_field('intro_titel'); ?></h1>
					</div>
					<div class="fp-intro__content flex-container flex-dir-column medium-flex-dir-row">
						<div class="fp-intro__text flex-child-shrink">
							<?php the_sub_field('intro_tekst'); ?>
						</div>
						<div class="fp-intro__contact-box flex-child-auto">
							<p>
							<a href="mailto:<?php the_sub_field('intro_contact_mail'); ?>" target="_blank" class="fp-intro__contact-link"><?php the_sub_field('intro_contact_mail'); ?></a>
							<a href="tel:<?php the_sub_field('intro_contact_telefoon'); ?>" target="_blank" class="fp-intro__contact-link"><?php the_sub_field('intro_contact_telefoon'); ?></a>
							<a href="tel:<?php the_sub_field('intro_contact_telefoon_06'); ?>" target="_blank" class="fp-intro__contact-link"><?php the_sub_field('intro_contact_telefoon_06'); ?></a>
							<a href="<?php the_sub_field('intro_contact_contact_link'); ?>" class="fp-intro__contact-link hide">contact opnemen</a>
							</p>
						</div>
					</div>
					
			
				<?php endwhile; ?>
			
			<?php endif; ?>
			
		</div>

	</div>
</div>

<div class="row">
	<div class="columns">

		<div class="flexible-content-block flexible-content-block--seperator">
			<hr class="seperator">
		</div>

	</div>
</div>

<div class="row">
	<div class="columns">

		<div class="fp-about">
			
			<?php if ( have_rows('about') ) : ?>
			
				<?php while( have_rows('about') ) : the_row(); ?>
					<h2><?php the_sub_field('about_titel'); ?></h2>
					<?php the_sub_field('about_tekst'); ?>
			
				<?php endwhile; ?>
			
			<?php endif; ?>
			
		</div>

	</div>
</div>

<div class="site-services">

	<div class="row expanded collapse">

		
		<?php if ( have_rows('diensten') ) : ?>
		
			<?php while( have_rows('diensten') ) : the_row(); ?>
				<div class="columns small-12 medium-6">

					<div class="service flex-container align-center align-middle">
						<a href="<?php the_sub_field('dienst_link'); ?>">
						<div class="service__inner">
							<h3 class="service__title"><?php the_sub_field('dienst_titel'); ?></h3>
							<div class="service__text"><?php the_sub_field('dienst_tekst'); ?></div>
						</div>
						</a>
					</div>

				</div>
				
			<?php endwhile; ?>
		
		<?php endif; ?>

	</div>
</div>

<div class="row">
	<div class="columns">

		<div class="flexible-content-block flexible-content-block--seperator">
			<hr class="seperator">
		</div>

	</div>
</div>

<div class="row">
	<div class="columns">
		
		<div class="flexible-content-block flexible-content-block--quote">
			<p class="quote"><?php the_field('quote'); ?></p>
		</div>

	</div>
</div>


<div class="row">
	<div class="columns">

		<div class="flexible-content-block flexible-content-block--seperator">
			<hr class="seperator">
		</div>

	</div>
</div>



<div class="fp-projecten">
	
	<?php if ( have_rows('projecten') ) : ?>
	
		<?php while( have_rows('projecten') ) : the_row(); ?>
			<div class="row">
				<div class="columns">
					<div class="fp-projecten__intro">
						<h2><?php the_sub_field('projecten_titel'); ?></h2>
						<?php the_sub_field('projecten_tekst'); ?>
					</div>
				</div>
			</div>

			<?php 

			$posts = get_sub_field('projecten');

			if( $posts ): ?>
				<div class="row expanded collapse">
				<?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
					<?php setup_postdata($post); ?>
					<div class="columns small-12 medium-6 large-4">
						<div class="project-thema">
							<a href="<?php the_permalink(); ?>">
								<div class="project-thema__image-wrapper">
									<?php 

									$image = get_field('thema_image');
									$size = 'project-thema'; 

									if( $image ) {

										echo wp_get_attachment_image( $image, $size );

									}

									?>
								</div>
								<div class="project-thema__title"><?php the_title(); ?></div>
							</a>
						</div>
					</div>
				<?php endforeach; ?>
				</div>
				<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
			<?php endif; ?>
	
		<?php endwhile; ?>
	
	<?php endif; ?>
	
</div>


<div class="row">
	<div class="columns">

	<?php if ( have_rows('testimonials') ) : ?>
		
		<?php while( have_rows('testimonials') ) : the_row(); ?>
		
		<div class="testimonials" style="background-image:url(<?php the_sub_field('testimonials_background_image'); ?>);">
			
			<h2 class="testimonials__title"><?php the_sub_field('testimonials_titel'); ?></h2>
			
			<?php if ( have_rows('testimonial') ) : ?>
				<div class="orbit orbit--buttons-under" role="region" aria-label="Favorite Space Pictures" data-orbit>
					<div class="orbit-wrapper">						
						<ul class="orbit-container">
						<?php while( have_rows('testimonial') ) : the_row(); ?>
							<li class="is-active orbit-slide">
								<div class="testimonial">
									<p class="testimonial__quote"><?php the_sub_field('testimonial_tekst'); ?></p>
									<p class="testimonial__quoter"><?php the_sub_field('testimonial_auteur'); ?></p>
								</div>
							</li>							
						<?php endwhile; ?>
						</ul>
						<div class="orbit-controls">
							<button class="orbit-previous"><span class="show-for-sr">Previous Slide</span><span class="fa fa-angle-left fa-2x"></span></button>
							<button class="orbit-next"><span class="show-for-sr">Next Slide</span><span class="fa fa-angle-right fa-2x"></span></button>
						</div>
					</div>
				</div>
			<?php endif; ?>	

			<a href="<?php the_sub_field('testimonial_pagina_link'); ?>" class="testimonials__more-link">Alle referenties</a>

		</div>	

		<?php endwhile; ?>
		
	<?php endif; ?>

	</div>
</div>


<?php get_footer();
