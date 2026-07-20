<?php
/**
 * Gallery archive template.
 * URL: /galleries
 */
get_header();
?>

<main id="main-content" class="galleries-page">
    <section class="gal-hero">
        <div class="gal-container gal-hero__inner">
            <p class="gal-eyebrow">Montebello–Ashiya Sister City Association</p>
            <h1>Galleries</h1>
            <p class="gal-hero__lead">
                Explore photographs from student exchanges, cultural programs, milestone celebrations,
                and visits shared between Montebello and Ashiya.
            </p>
        </div>
    </section>

    <section class="gal-section">
        <div class="gal-container">
            <div class="gal-heading">
                <p class="gal-kicker">Recent Memories</p>
                <h2>Photo Albums</h2>
                <p>
                    Each gallery preserves a chapter of the friendship between our sister cities.
                    Select an album to view its photographs.
                </p>
            </div>

            <?php if ( have_posts() ) : ?>
                <div class="gal-grid">
                    <?php while ( have_posts() ) : the_post(); ?>
                        <article <?php post_class( 'gal-card' ); ?>>
                            <a class="gal-card__link" href="<?php the_permalink(); ?>">
                                <div class="gal-card__media">
                                    <?php if ( has_post_thumbnail() ) : ?>
                                        <?php
                                        the_post_thumbnail(
                                            'large',
                                            array(
                                                'class'   => 'gal-card__image',
                                                'loading' => 'lazy',
                                            )
                                        );
                                        ?>
                                    <?php else : ?>
                                        <div class="gal-card__placeholder" aria-hidden="true">
                                            <span>MASCA</span>
                                        </div>
                                    <?php endif; ?>

                                    <?php
                                    $image_count = 0;
                                    $blocks = parse_blocks( get_the_content() );

                                    foreach ( $blocks as $block ) {
                                        if ( 'core/gallery' === $block['blockName'] && ! empty( $block['innerBlocks'] ) ) {
                                            $image_count += count( $block['innerBlocks'] );
                                        }

                                        if ( 'core/image' === $block['blockName'] ) {
                                            $image_count++;
                                        }
                                    }
                                    ?>

                                    <?php if ( $image_count > 0 ) : ?>
                                        <span class="gal-card__count">
                                            <?php
                                            printf(
                                                esc_html( _n( '%s photo', '%s photos', $image_count, 'masca' ) ),
                                                esc_html( number_format_i18n( $image_count ) )
                                            );
                                            ?>
                                        </span>
                                    <?php endif; ?>
                                </div>

                                <div class="gal-card__content">
                                    <h3><?php the_title(); ?></h3>

                                    <?php if ( has_excerpt() ) : ?>
                                        <p><?php echo esc_html( get_the_excerpt() ); ?></p>
                                    <?php else : ?>
                                        <p>View photographs and highlights from this MASCA event.</p>
                                    <?php endif; ?>

                                    <span class="gal-card__cta">View Gallery</span>
                                </div>
                            </a>
                        </article>
                    <?php endwhile; ?>
                </div>

                <div class="gal-pagination">
                    <?php
                    the_posts_pagination(
                        array(
                            'mid_size'  => 1,
                            'prev_text' => 'Previous',
                            'next_text' => 'Next',
                        )
                    );
                    ?>
                </div>
            <?php else : ?>
                <div class="gal-empty">
                    <h2>Galleries Coming Soon</h2>
                    <p>Photo albums will appear here as they are added.</p>
                </div>
            <?php endif; ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>
