<?php
/**
 * Individual gallery template.
 */
get_header();
?>

<main id="main-content" class="gallery-single">
    <?php while ( have_posts() ) : the_post(); ?>
        <article <?php post_class(); ?>>
            <section class="gal-single-hero">
                <div class="gal-container gal-single-hero__inner">
                    <p class="gal-eyebrow">
                        <a href="<?php echo esc_url( get_post_type_archive_link( 'masca_gallery' ) ); ?>">
                            Galleries
                        </a>
                    </p>

                    <h1><?php the_title(); ?></h1>

                    <?php if ( has_excerpt() ) : ?>
                        <p class="gal-single-hero__lead"><?php echo esc_html( get_the_excerpt() ); ?></p>
                    <?php endif; ?>
                </div>
            </section>

            <?php if ( has_post_thumbnail() ) : ?>
                <div class="gal-single-cover">
                    <?php
                    the_post_thumbnail(
                        'full',
                        array(
                            'class' => 'gal-single-cover__image',
                        )
                    );
                    ?>
                </div>
            <?php endif; ?>

            <section class="gal-single-content">
                <div class="gal-container gal-content-width">
                    <?php the_content(); ?>
                </div>
            </section>

            <section class="gal-back-section">
                <div class="gal-container">
                    <a class="gal-button" href="<?php echo esc_url( get_post_type_archive_link( 'masca_gallery' ) ); ?>">
                        Back to All Galleries
                    </a>
                </div>
            </section>
        </article>
    <?php endwhile; ?>
</main>

<?php get_footer(); ?>
