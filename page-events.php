<?php
/**
 * Template Name: Events Calendar
 */
get_header();

$event_types = get_terms(array(
    'taxonomy'   => 'masca_event_type',
    'hide_empty' => false,
));
?>

<main id="main-content" class="events-page">
    <section class="events-hero">
        <div class="events-container events-hero__inner">
            <p class="events-eyebrow">Montebello–Ashiya Sister City Association</p>
            <h1>Events</h1>
            <p class="events-hero__lead">
                Explore upcoming programs, meetings, cultural celebrations, and student-exchange activities.
                Past events remain available as part of MASCA's community archive.
            </p>
        </div>
    </section>

    <section class="events-section">
        <div class="events-container">
            <div class="events-intro">
                <div>
                    <p class="events-kicker">Calendar</p>
                    <h2>Upcoming & Past Events</h2>
                </div>
                <p>
                    Select an event for its flyer, location, registration information,
                    complete details, calendar download, and related photo gallery.
                </p>
            </div>

            <div class="events-toolbar">
                <label class="screen-reader-text" for="events-search-input">Search events</label>
                <input id="events-search-input" type="search" placeholder="Search events">

                <label class="screen-reader-text" for="events-type-filter">Filter by event type</label>
                <select id="events-type-filter">
                    <option value="">All event types</option>
                    <?php if (!is_wp_error($event_types)) : ?>
                        <?php foreach ($event_types as $event_type) : ?>
                            <option value="<?php echo esc_attr($event_type->slug); ?>">
                                <?php echo esc_html($event_type->name); ?>
                            </option>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </select>

                <label class="screen-reader-text" for="events-year-filter">Filter by year</label>
                <select id="events-year-filter">
                    <option value="">All years</option>
                </select>

                <div class="events-view-switcher" role="group" aria-label="Calendar view">
                    <button type="button" class="is-active" data-events-view="dayGridMonth">Month</button>
                    <button type="button" data-events-view="listYear">List</button>
                </div>
            </div>

            <div id="masca-events-calendar"></div>

            <div class="events-legend">
                <span class="type-student-exchange">Student Exchange</span>
                <span class="type-community-event">Community Event</span>
                <span class="type-board-meeting">Board Meeting</span>
                <span class="type-cultural-program">Cultural Program</span>
                <span class="type-anniversary">Anniversary</span>
            </div>
        </div>
    </section>

    <dialog id="event-dialog" class="event-dialog">
        <button class="event-dialog__close" type="button" aria-label="Close">×</button>
        <div id="event-dialog-content"></div>
    </dialog>
</main>

<?php get_footer(); ?>
