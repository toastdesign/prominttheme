<?php
/*
Template Name: Referenties
*/
get_header(); ?>

<div class="main-wrap main-wrap--no-image main-wrap--background-image" role="main" style="background-image:url(<?php echo get_the_post_thumbnail_url(get_the_ID(),'full'); ?>);">

<?php do_action( 'foundationpress_before_content' ); ?>

<?php while ( have_posts() ) : the_post(); ?>

<article <?php post_class('main-content') ?> id="post-<?php the_ID(); ?>">
     <?php if ( have_rows( 'add_referentie_content' ) ) : ?>
        <?php while ( have_rows('add_referentie_content' ) ) : the_row(); ?>
            
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
            
            <?php elseif ( get_row_layout() == 'referentie_block' ) : ?>

                <div class="row align-center">
                    
                    <?php if (get_sub_field( 'content_width' )) { ?>
                        <div class="columns small-12">
                    <?php } else { ?>
                        <div class="columns small-12 medium-8">
                    <?php } ?>
                        <div class="flexible-content-block flexible-content-block--referenties">
                            <div class="referentie-header">
                                <div class="row align-middle">
                                    <div class="columns shrink">
                                        <div class="referentie-image">
                                            <img src="<?php the_sub_field('referentie_country_image'); ?>" alt="">
                                        </div>
                                    </div>

                                    <div class="columns">
                                        <div class="referentie-country">
                                            <?php the_sub_field('referentie_country'); ?>:
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <?php if (get_sub_field( 'columns' ) === '6') { ?>
                                <div class="row">
                                    <div class="columns small-12 medium-6">
                                        <?php the_sub_field( 'content' ); ?>
                                    </div>
                                    <div class="columns small-12 medium-6">
                                        <?php the_sub_field( 'content_second_column' ); ?>
                                    </div>
                                </div>
                            <?php } else { ?>
                                <?php the_sub_field( 'content' ); ?>
                            <?php } ?>

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