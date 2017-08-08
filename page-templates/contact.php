<?php
/*
Template Name: Contact
*/
get_header(); ?>


<?php if (has_post_thumbnail()) { ?>
    <div class="main-wrap main-wrap--padding-bottom" role="main">

<?php } else { ?>
    <div class="main-wrap main-wrap--no-image main-wrap--padding-bottom" role="main">
<?php } ?>

<?php do_action( 'foundationpress_before_content' ); ?>

<?php while ( have_posts() ) : the_post(); ?>

<article <?php post_class('main-content') ?> id="post-<?php the_ID(); ?>">
    
    <?php if (has_post_thumbnail()) { ?>
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
    <?php } ?>

    <div class="row align-justify">
        <div class="columns small-12 medium-5 large-3">
            <div class="contact-info">
                <h2 class="contact-info__title">Adres</h2>
                
                <p class="contact-info__address">
                    <a target="_blank" class="contact-info__google-link" href="<?php the_field('google_place_link'); ?>">
                    Promint Projectmanagement <br>
                    <?php the_field('straat_en_nummer'); ?> <br>
                    <?php the_field('postcode_en_plaats'); ?> <br>
                    Nederland
                    </a>
                </p>
                <p class="contact-info__contact-links">
                    <a target="_blank" href="tel:<?php the_field('telefoonnummer'); ?>" class="contact-info__contact-link"><?php the_field('telefoonnummer'); ?></a>
                    <a target="_blank" href="tel:<?php the_field('telefoonnummer_06'); ?>" class="contact-info__contact-link"><?php the_field('telefoonnummer_06'); ?></a>
                    <a target="_blank" href="mailto:<?php the_field('email_adres'); ?>" class="contact-info__contact-link"><?php the_field('email_adres'); ?></a>
                </p>
            </div>
        </div>
        <div class="columns small-12 medium-7 large-8">
            <div class="contact-form-wrapper">
                <h1 class="contact-form-wrapper__title">Contact Opnemen</h1>
                <div class="contact-form-wrapper__content"><?php the_content();?></div>
            </div>
        </div>
    </div>

</article>

<?php endwhile;?>

<?php do_action( 'foundationpress_after_content' ); ?>

</div>

<?php get_footer();