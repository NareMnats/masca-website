<?php

if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>

<?php while (have_posts()) : ?>
    <?php the_post(); ?>

    <article <?php post_class('standard-page'); ?>>
        <header class="standard-page__header">
            <div class="site-container standard-page__header-inner">
                <p class="section-label">
                    Montebello-Ashiya Sister City Association
                </p>

                <h1 class="standard-page__title">
                    <?php the_title(); ?>
                </h1>
            </div>
        </header>

        <div class="site-container standard-page__layout">
            <?php if (has_post_thumbnail()) : ?>
                <figure class="standard-page__featured-image">
                    <?php
                    the_post_thumbnail('full', [
                        'loading' => 'eager',
                    ]);
                    ?>
                </figure>
            <?php endif; ?>

            <div class="standard-page__content">
                <?php the_content(); ?>
            </div>
        </div>
    </article>
<?php endwhile; ?>

<?php get_footer(); ?>