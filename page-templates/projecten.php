<?php
/*
Template Name: Projecten overzicht
*/
get_header(); ?>

<div class="main-wrap main-wrap--no-image" role="main">

<?php do_action( 'foundationpress_before_content' ); ?>

<?php while ( have_posts() ) : the_post(); ?>

<article <?php post_class('main-content') ?> id="post-<?php the_ID(); ?>">
    <?php if ( have_rows( 'add_project_content' ) ) : ?>
        <?php while ( have_rows('add_project_content' ) ) : the_row(); ?>
            
            <?php if ( get_row_layout() == 'wysiwyg_block' ) : ?>
                
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
            
            <?php elseif ( get_row_layout() == 'thema_block' ) : ?>

                <div class="row expanded small-collapse medium-uncollapse align-center">
                    
                    <div class="flexible-content-block flexible-content-block--thema">
                        
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