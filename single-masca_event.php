<?php
get_header();

while (have_posts()) :
    the_post();

    $start_date       = get_post_meta(get_the_ID(), '_masca_start_date', true);
    $start_time       = get_post_meta(get_the_ID(), '_masca_start_time', true);
    $end_date         = get_post_meta(get_the_ID(), '_masca_end_date', true);
    $end_time         = get_post_meta(get_the_ID(), '_masca_end_time', true);
    $all_day          = get_post_meta(get_the_ID(), '_masca_all_day', true) === '1';
    $location         = get_post_meta(get_the_ID(), '_masca_location', true);
    $registration_url = get_post_meta(get_the_ID(), '_masca_registration_url', true);
    $maps_url         = get_post_meta(get_the_ID(), '_masca_maps_url', true);
    $gallery_id       = (int) get_post_meta(get_the_ID(), '_masca_gallery_id', true);
    $gallery_url      = $gallery_id ? get_permalink($gallery_id) : '';
    $last_date        = $end_date ?: $start_date;
    $is_past          = $last_date && $last_date < current_time('Y-m-d');
    $ics_url          = add_query_arg('masca_ics', get_the_ID(), home_url('/'));
    ?>

    <main id="main-content" class="event-single">
        <article <?php post_class(); ?>>
            <section class="event-single-hero">
                <div class="events-container event-single-hero__inner">
                    <p class="events-eyebrow">
                        <a href="<?php echo esc_url(home_url('/events/')); ?>">Events</a>
                    </p>

                    <span class="event-single-status">
                        <?php echo $is_past ? 'Past Event' : 'Upcoming Event'; ?>
                    </span>

                    <h1><?php the_title(); ?></h1>

                    <?php if (has_excerpt()) : ?>
                        <p class="event-single-hero__lead"><?php echo esc_html(get_the_excerpt()); ?></p>
                    <?php endif; ?>
                </div>
            </section>

            <section class="event-single-main">
                <div class="events-container event-single-grid">
                    <div class="event-single-content">
                        <?php if (has_post_thumbnail()) : ?>
                            <figure class="event-single-image"><?php the_post_thumbnail('full'); ?></figure>
                        <?php endif; ?>

                        <div class="event-single-body"><?php the_content(); ?></div>
                    </div>

                    <aside class="event-detail-card">
                        <h2>Event Details</h2>

                        <?php if ($start_date) : ?>
                            <div class="event-detail-row">
                                <span>Date</span>
                                <strong>
                                    <?php echo esc_html(date_i18n('F j, Y', strtotime($start_date))); ?>
                                    <?php
                                    if ($end_date && $end_date !== $start_date) {
                                        echo '–' . esc_html(date_i18n('F j, Y', strtotime($end_date)));
                                    }
                                    ?>
                                </strong>
                            </div>
                        <?php endif; ?>

                        <div class="event-detail-row">
                            <span>Time</span>
                            <strong>
                                <?php
                                if ($all_day) {
                                    echo 'All day';
                                } elseif ($start_time) {
                                    echo esc_html(date_i18n('g:i A', strtotime($start_time)));
                                    if ($end_time) {
                                        echo '–' . esc_html(date_i18n('g:i A', strtotime($end_time)));
                                    }
                                } else {
                                    echo 'Time not listed';
                                }
                                ?>
                            </strong>
                        </div>

                        <?php if ($location) : ?>
                            <div class="event-detail-row">
                                <span>Location</span>
                                <strong><?php echo esc_html($location); ?></strong>
                            </div>
                        <?php endif; ?>

                        <div class="event-detail-actions">
                            <?php if (!$is_past && $registration_url) : ?>
                                <a class="event-button primary" href="<?php echo esc_url($registration_url); ?>" target="_blank" rel="noopener noreferrer">
                                    RSVP / Register
                                </a>
                            <?php endif; ?>

                            <?php if ($maps_url) : ?>
                                <a class="event-button secondary" href="<?php echo esc_url($maps_url); ?>" target="_blank" rel="noopener noreferrer">
                                    Directions
                                </a>
                            <?php endif; ?>

                            <a class="event-button secondary" href="<?php echo esc_url($ics_url); ?>">
                                Add to Calendar
                            </a>

                            <?php if ($gallery_url) : ?>
                                <a class="event-button secondary" href="<?php echo esc_url($gallery_url); ?>">
                                    View Photo Gallery
                                </a>
                            <?php endif; ?>
                        </div>
                    </aside>
                </div>
            </section>
        </article>
    </main>

    <?php
endwhile;

get_footer();
