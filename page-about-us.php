<?php

if (!defined('ABSPATH')) {
    exit;
}

get_header();

$theme_uri = get_template_directory_uri();
?>

<main id="main-content">
<article class="about-page">
    <header class="about-hero">
        <div class="site-container about-hero__grid">
            <div class="about-hero__content">
                <p class="section-label">
                    About MASCA
                </p>

                <h1 class="about-hero__title">
                    Friendship built across the Pacific.
                </h1>

                <p class="about-hero__introduction">
                    The Montebello-Ashiya Sister City Association is a
                    community-led organization dedicated to cultural
                    understanding, educational opportunity, and lasting
                    international friendship.
                </p>
            </div>

            <figure class="about-hero__media">
                <img
                    src="<?php echo esc_url(
                        $theme_uri . '/assets/images/navigation/about.png'
                    ); ?>"
                    alt="Participants in the Montebello-Ashiya sister-city program"
                    width="2144"
                    height="1602"
                    loading="eager"
                    fetchpriority="high"
                >
            </figure>
        </div>
    </header>

    <section class="about-overview">
        <div class="site-container about-overview__grid">
            <div class="about-overview__content">
                <p class="section-label">
                    What is MASCA?
                </p>

                <h2 class="display-heading display-heading--medium">
                    An independent organization with a shared civic mission.
                </h2>
            </div>

            <div class="about-overview__copy">
                <p>
                    The Montebello-Ashiya Sister City Association (MASCA) is a nonprofit organization. Although the association works closely with the City of Montebello, it remains an independent, community-based volunteer organization. The City provides ongoing partnership and institutional support through collaboration, resources, and program alignment, while MASCA raises the funding necessary to sustain the Montebello Student Ambassador Exchange Program, educational opportunities, and cultural initiatives.
                </p>

                <p>
                    The work of the Montebello-Ashiya Sister City Association is made possible through contributions from Montebello residents, individuals, local businesses, and program supporters who believe in strengthening international relationships and expanding opportunities for local youth. As a registered 501(c)(4) social welfare organization, contributions are not tax-deductible as charitable donations, but they directly fund student programming, exchanges, and community events.
                </p>

                <p>
                    The benefits provided to Montebello youth, including educational growth, cultural awareness, and global connection, are matched by the broader public value the Sister City Association brings to the community. The organization serves as a vehicle for volunteerism and civic pride, offering the City a program with a long history of meaningful international engagement.
                </p>

                <p>
                    Over decades of affiliation, enduring ties have been formed through student ambassador exchanges and formal city delegation visits. Beyond official delegations, many informal exchanges have taken place, with MASCA members traveling to Ashiya, building friendships, and hosting visitors in Montebello homes in the spirit of President Eisenhower’s People-to-People initiative.
                </p>

                <p>
                    This bond of friendship across the Pacific has existed for more than half a century. The Montebello-Ashiya Sister City relationship stands as one of the community’s most enduring international partnerships, representing decades of cultural exchange, educational opportunity, and shared goodwill.
                </p>
            </div>
        </div>
    </section>

    <section class="about-impact">
        <div class="site-container">
            <div class="about-impact__header">
                <p class="section-label">
                    Why it matters
                </p>

                <h2 class="display-heading display-heading--medium">
                    Local participation creates global connection.
                </h2>
            </div>

            <div class="about-impact__grid">
                <article class="about-impact__item">
                    <h3>Youth opportunity</h3>

                    <p>
                        Student ambassadors gain educational experience,
                        cultural awareness, independence, and a broader
                        understanding of the world.
                    </p>
                </article>

                <article class="about-impact__item">
                    <h3>Community involvement</h3>

                    <p>
                        Residents, families, businesses, and volunteers
                        help sustain the program through participation,
                        hosting, fundraising, and civic support.
                    </p>
                </article>

                <article class="about-impact__item">
                    <h3>Lasting relationships</h3>

                    <p>
                        Formal delegations and informal visits have created
                        friendships that continue across generations and
                        across the Pacific.
                    </p>
                </article>
            </div>
        </div>
    </section>

    <section class="about-relationship">
        <div class="site-container about-relationship__grid">
            <div class="about-relationship__statement">
                <p class="section-label">
                    Montebello ↔ Ashiya
                </p>

                <blockquote>
                    More than six decades of friendship, exchange,
                    learning, and shared goodwill.
                </blockquote>
            </div>

            <div class="about-relationship__copy">
                <p>
                    The relationship between Montebello and Ashiya has
                    grown through student exchanges, city delegations,
                    home hosting, cultural programs, and countless
                    personal connections.
                </p>

                <p>
                    Inspired by the People-to-People movement, MASCA
                    continues to create opportunities for residents to
                    experience another culture through direct,
                    person-to-person relationships.
                </p>

                <a
                    class="text-link"
                    href="<?php echo esc_url(home_url('/history/')); ?>"
                >
                    Explore our history
                    <span aria-hidden="true">⟶</span>
                </a>
            </div>
        </div>
    </section>

    <section class="about-values">
        <div class="site-container">
            <div class="section-heading-row">
                <div>
                    <p class="section-label">
                        Our values
                    </p>

                    <h2 class="display-heading display-heading--medium">
                        The principles behind our work.
                    </h2>
                </div>
            </div>

            <div class="about-values__grid">
                <article>
                    <h3>Community-driven service</h3>

                    <p>
                        MASCA is sustained through the time, generosity,
                        and participation of local volunteers and supporters.
                    </p>
                </article>

                <article>
                    <h3>Youth empowerment and education</h3>

                    <p>
                        Programs help students grow through travel,
                        responsibility, cultural learning, and new
                        perspectives.
                    </p>
                </article>

                <article>
                    <h3>Integrity in stewardship</h3>

                    <p>
                        Resources are directed toward maintaining meaningful,
                        accessible, and responsible community programming.
                    </p>
                </article>

                <article>
                    <h3>Cultural connection and legacy</h3>

                    <p>
                        MASCA protects a longstanding relationship while
                        creating opportunities for future generations.
                    </p>
                </article>
            </div>
        </div>
    </section>

    <section class="about-links">
        <div class="site-container about-links__grid">
            <a href="<?php echo esc_url(home_url('/history/')); ?>">
                <h2>Our History</h2>
                <p>
                    Follow the relationship from its founding to today.
                </p>
            </a>

            <a href="<?php echo esc_url(home_url('/leadership/')); ?>">
                <h2>Meet Our Leaders</h2>
                <p>
                    Learn about the volunteers guiding the organization.
                </p>
            </a>

            <a href="<?php echo esc_url(
                home_url('/community-exchange/')
            ); ?>">
                <h2>Community Exchange</h2>
                <p>
                    Discover opportunities beyond the student program.
                </p>
            </a>
        </div>
    </section>
</article>
</main>

<?php get_footer(); ?>
