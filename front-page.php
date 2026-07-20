<?php

if (!defined('ABSPATH')) {
    exit;
}

get_header();

$theme_uri = get_template_directory_uri();
$theme_path = get_template_directory();
?>

<main id="main-content">
<section class="home-hero">
    <div class="home-hero__media">
        <video
    class="home-hero__video"
    autoplay
    muted
    loop
    playsinline
    preload="metadata"
>
    <source
        src="<?php echo esc_url(
            $theme_uri . '/assets/images/home/hero.mp4'
        ); ?>"
        type="video/mp4"
    >
</video>

        <div class="home-hero__overlay"></div>
    </div>

    <div class="site-container home-hero__content">
        <p class="home-hero__eyebrow">
            Montebello, California · Ashiya, Japan
        </p>

        <h1 class="home-hero__title">
            Building friendships across cultures.
        </h1>

        <p class="home-hero__description">
            For more than six decades, MASCA has connected the communities
            of Montebello and Ashiya through student exchanges, cultural
            programs, and lasting international relationships.
        </p>

        <a
            class="text-link text-link--light"
            href="<?php echo esc_url(home_url('/what-is-masca/')); ?>"
        >
            Discover MASCA
            <span aria-hidden="true">↗</span>
        </a>
    </div>
</section>

<section class="home-introduction">
    <div class="site-container home-introduction__grid">
        <h2 class="display-heading">
            Welcome to the Montebello-Ashiya Sister City Association.
        </h2>

        <div class="home-introduction__copy">
            <p>
Welcome to MASCA, where bridges are built and friendships flourish between the cities of Montebello, California, and Ashiya, Japan. Established to foster cultural exchange and mutual understanding, our association is dedicated to strengthening the ties that connect our communities across the ocean.
            </p>

            <p>
Each summer, our Student Ambassador Exchange program celebrates this connection by welcoming two student ambassadors from each city to explore life in their sister city, fostering deeper appreciation and lasting bonds between our young citizens.
            </p>

            <p>
                Dive into our rich history, discover upcoming events, and find out how you can be a part of this wonderful journey of international friendship and cooperation. Join us in celebrating and cultivating the bonds that make us more than just sister cities–we are family.
            </p>
        </div>
    </div>
</section>

<section class="president-feature">
    <div class="site-container president-feature__grid">
        <figure class="president-feature__media">
            <img
                src="<?php echo esc_url(
                    $theme_uri . '/assets/images/home/president.jpg'
                ); ?>"
                alt="President of the Montebello-Ashiya Sister City Association"
                loading="lazy"
                decoding="async"
                width="1828"
                height="2560"
            >

            <figcaption class="president-feature__attribution">
                MASCA President, Emma Duran
            </figcaption>
        </figure>

        <div class="president-feature__content">
            <p class="section-label">
                A message from our president
            </p>

            <blockquote class="president-feature__quote">
                “It has been a pure joy being a part of MASCA and serving
                as President during my tenure. The friendships I have made
                over the past 12 years are irreplaceable, and I cherish
                every single one of them.”
            </blockquote>

        </div>
    </div>
</section>

<section class="ambassadors-feature">
    <div class="site-container">
        <div class="section-heading-row">
            <div>
                <p class="section-label">
                    Student Ambassador Exchange
                </p>

                <h2 class="display-heading display-heading--medium">
                    Meet the 2026 Ambassadors
                </h2>
            </div>

            <a
                class="text-link"
                href="<?php echo esc_url(home_url('/2026-ambassadors/')); ?>"
            >
                Read their stories
                <span aria-hidden="true">↗</span>
            </a>
        </div>

        <div class="ambassadors-grid">
            <?php
            $ambassadors = [
                [
                    'name'  => 'Maximus Almeida',
                    'image' => 'MaximusAlmeida.png',
                    'role'  => 'Student Ambassador',
                ],
                [
                    'name'  => 'Daniel Nagata',
                    'image' => 'DanielNagata.png',
                    'role'  => 'Student Ambassador',
                ],
                [
                    'name'  => 'Miya Espinoza',
                    'image' => 'MiyaEspinoza.png',
                    'role'  => 'Host Ambassador',
                ],
                [
                    'name'  => 'Felix Rodriguez',
                    'image' => 'FelixRodriguez.png',
                    'role'  => 'Host Ambassador',
                ],
            ];

            foreach ($ambassadors as $ambassador) :
                $ambassador_url = home_url('/2026-ambassadors/');
                ?>
                <article class="ambassador-card">
                    <a href="<?php echo esc_url($ambassador_url); ?>">
                        <div class="ambassador-card__media">
                            <img
                                src="<?php echo esc_url(
                                    $theme_uri .
                                    '/assets/images/ambassadors/' .
                                    $ambassador['image']
                                ); ?>"
                                alt="<?php echo esc_attr($ambassador['name']); ?>"
                                loading="lazy"
                            >
                        </div>

                        <h3><?php echo esc_html($ambassador['name']); ?></h3>

                        <p class="ambassador-card__role">
                            <?php echo esc_html($ambassador['role']); ?>
                        </p>
                    </a>
                </article>
            <?php endforeach; ?>
        </div>

        <div class="ambassadors-video">
            <div class="ambassadors-video__embed">
                <iframe
                    src="https://www.youtube-nocookie.com/embed/Q8PMlottl24"
                    title="Meet the 2026 MASCA Ambassadors"
                    loading="lazy"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin"
                    allowfullscreen
                ></iframe>
            </div>
        </div>
    </div>
</section>

<section class="editorial-feature">
    <div class="site-container editorial-feature__grid">
        <div class="editorial-feature__content">
            <p class="section-label">
                What is MASCA?
            </p>

            <h2 class="display-heading display-heading--medium">
                More than a sister city.
            </h2>

            <p class="editorial-feature__description">
                The Montebello-Ashiya Sister City Association supports a
                relationship founded on friendship, education, community,
                and cultural understanding.
            </p>

            <a
                class="text-link"
                href="<?php echo esc_url(home_url('/history/')); ?>"
            >
                Learn about our history
                <span aria-hidden="true">↗</span>
            </a>
        </div>

        <div class="editorial-feature__media">
            <img
                src="<?php echo esc_url(
                    $theme_uri . '/assets/images/navigation/about.png'
                ); ?>"
                alt="Historical participants in the Montebello-Ashiya sister-city program"
                loading="lazy"
            >
        </div>
    </div>
</section>

<section class="program-section">
    <div class="site-container">
        <div class="section-heading-row">
            <div>
                <p class="section-label">
                    Ambassador Program
                </p>

                <h2 class="display-heading display-heading--medium">
                    Exchange changes perspective.
                </h2>
            </div>

            <a
                class="text-link"
                href="<?php echo esc_url(home_url('/application/')); ?>"
            >
                View the program
                <span aria-hidden="true">↗</span>
            </a>
        </div>

        <div class="program-grid">
            <article class="program-card">
                <a href="<?php echo esc_url(home_url('/ambassador-program/')); ?>">
                    <div class="program-card__media">
                        <img
                            src="<?php echo esc_url(
                                $theme_uri .
                                '/assets/images/home/student-ambassadors.jpg?v=' .
                                filemtime(
                                    $theme_path .
                                    '/assets/images/home/student-ambassadors.jpg'
                                )
                            ); ?>"
                            alt="Student ambassadors participating in a cultural exchange"
                            loading="lazy"
                        >
                    </div>

                    <div class="program-card__content">

                        <h3>Student Ambassadors</h3>

                        <p>
                            Students experience daily life, education, and
                            culture through international travel and host
                            family participation.
                        </p>
                    </div>
                </a>
            </article>

            <article class="program-card">
                <a href="<?php echo esc_url(home_url('/community-exchange/')); ?>">
                    <div class="program-card__media">
                        <img
                            src="<?php echo esc_url(
                                $theme_uri .
                                '/assets/images/home/community-exchange.jpg?v=' .
                                filemtime(
                                    $theme_path .
                                    '/assets/images/home/community-exchange.jpg'
                                )
                            ); ?>"
                            alt="Community members participating in a cultural program"
                            loading="lazy"
                        >
                    </div>

                    <div class="program-card__content">

                        <h3>Community Exchange</h3>

                        <p>
                            Residents and community leaders develop lasting
                            connections through visits, events, and shared
                            civic experiences.
                        </p>
                    </div>
                </a>
            </article>

            <article class="program-card">
                <a href="<?php echo esc_url(home_url('/past-ambassadors/')); ?>">
                    <div class="program-card__media">
                        <img
                            src="<?php echo esc_url(
                                $theme_uri .
                                '/assets/images/home/past-ambassadors.png'
                            ); ?>"
                            alt="Student exchange ambassadors over the years"
                            loading="lazy"
                        >
                    </div>

                    <div class="program-card__content">
                        <h3>Past Ambassadors</h3>

                        <p>
                            Meet the students who have represented our sister
                            cities and carried their exchange experiences home.
                        </p>
                    </div>
                </a>
            </article>

            <article class="program-card">
                <a href="<?php echo esc_url(home_url('/application/')); ?>">
                    <div class="program-card__media">
                        <img
                            src="<?php echo esc_url(
                                $theme_uri .
                                '/assets/images/home/application.jpg?v=' .
                                filemtime(
                                    $theme_path .
                                    '/assets/images/home/application.jpg'
                                )
                            ); ?>"
                            alt="Application process for the Student Ambassador Exchange"
                            loading="lazy"
                        >
                    </div>

                    <div class="program-card__content">
                        <h3>Application</h3>

                        <p>
                            Learn about eligibility, important dates, and how
                            to apply for the Student Ambassador Exchange.
                        </p>
                    </div>
                </a>
            </article>
        </div>
    </div>
</section>

<section class="events-calendar" aria-labelledby="events-calendar-title">
  <div class="site-container">

    <div class="events-calendar__header">
      <div class="events-calendar__heading">
        <p class="section-label">Upcoming Events</p>

        <h2
          class="display-heading display-heading--medium"
          id="events-calendar-title"
        >
          MASCA Calendar
        </h2>
      </div>

      <p class="events-calendar__introduction">
        Explore upcoming MASCA events throughout the year. Select an event
        date to view additional details.
      </p>
    </div>

    <div class="events-calendar__navigation">
      <button
        class="events-calendar__arrow"
        type="button"
        data-calendar-previous
        aria-label="View previous month"
      >
        <span aria-hidden="true">←</span>
      </button>

      <p
        class="events-calendar__month"
        data-calendar-month
        aria-live="polite"
      ></p>

      <button
        class="events-calendar__arrow"
        type="button"
        data-calendar-next
        aria-label="View next month"
      >
        <span aria-hidden="true">→</span>
      </button>
    </div>

    <div class="events-calendar__desktop">
      <div class="events-calendar__weekdays" aria-hidden="true">
        <span>Sun</span>
        <span>Mon</span>
        <span>Tue</span>
        <span>Wed</span>
        <span>Thu</span>
        <span>Fri</span>
        <span>Sat</span>
      </div>

      <div
        class="events-calendar__grid"
        data-calendar-grid
      ></div>
    </div>

    <div
      class="events-calendar__mobile-list"
      data-calendar-mobile-list
    ></div>

  </div>
</section>

<div
  class="event-modal"
  data-event-modal
  aria-hidden="true"
>
  <div
    class="event-modal__backdrop"
    data-event-modal-close
  ></div>

  <div
    class="event-modal__dialog"
    role="dialog"
    aria-modal="true"
    aria-labelledby="event-modal-title"
  >
    <button
      class="event-modal__close"
      type="button"
      data-event-modal-close
      aria-label="Close event details"
    ></button>

    <div
      class="event-modal__media"
      data-event-modal-media
    >
      <img
        src=""
        alt=""
        data-event-modal-image
      >
    </div>

    <div class="event-modal__content">
      <p
        class="event-modal__date"
        data-event-modal-date
      ></p>

      <h2
        id="event-modal-title"
        data-event-modal-title
      ></h2>

      <div class="event-modal__details">
        <p data-event-modal-time></p>
        <p data-event-modal-location></p>
      </div>

      <p
        class="event-modal__description"
        data-event-modal-description
      ></p>

      <a
        class="button event-modal__button"
        href="#"
        target="_blank"
        rel="noopener noreferrer"
        data-event-modal-link
      >
        Event Details
        <span aria-hidden="true">→</span>
      </a>
    </div>
  </div>
</div>

<section class="home-cta">
    <div class="site-container home-cta__inner">
        <p class="section-label">
            Participate
        </p>

        <h2>
            Help continue a tradition of friendship.
        </h2>

        <div class="home-cta__actions">
            <a
                class="button"
                href="<?php echo esc_url(home_url('/application/')); ?>"
            >
                Apply
            </a>

            <a
                class="button button--secondary"
                href="<?php echo esc_url(home_url('/donate/')); ?>"
            >
                Support MASCA
            </a>
        </div>
    </div>
</section>

</main>

<?php get_footer(); ?>
