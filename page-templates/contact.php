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
        <div class="columns small-12 medium-3">
            <div class="contact-info">
                <h2 class="contact-info__title">Adres</h2>
                <p class="contact-info__address">
                    Promint Projectmanagement <br>
                    Parkstraat 1b <br>
                    4818 SJ Breda <br>
                    Nederland
                </p>
                <p class="contact-info__contact-links">
                    <a href="" class="contact-info__contact-link">+31 (0)76 - 56 00 308</a>
                    <a href="" class="contact-info__contact-link">+31 (0)6 - 51 56 74 15</a>
                    <a href="" class="contact-info__contact-link">info@promint.nl</a>
                </p>
            </div>
        </div>
        <div class="columns small-12 medium-8">
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