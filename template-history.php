<?php
/**
 * Template Name: MASCA History
 * Description: Custom history and timeline page for the Montebello-Ashiya Sister City Association.
 */

get_header();

$history_uri = get_stylesheet_directory_uri() . '/assets/images/history';
?>

<main class="masca-history">
    <section class="history-hero" aria-labelledby="history-title">
        <div class="history-shell history-hero__inner">
            <div class="history-hero__copy history-reveal">
                <p class="history-eyebrow">Montebello–Ashiya Sister City Association</p>
                <h1 id="history-title">Our History</h1>
                <p class="history-hero__intro">
                    More than six decades of friendship, cultural exchange, and community between
                    Montebello, California and Ashiya, Japan.
                </p>
            </div>

            <figure class="history-hero__media history-reveal">
                <img
                    src="<?php echo esc_url($history_uri . '/signing-ceremony-1961.png'); ?>"
                    alt="Montebello and Ashiya representatives gathered for the 1961 sister city celebration in Ashiya"
                    width="1280"
                    height="939"
                    fetchpriority="high"
                >
                <figcaption>Ashiya welcomes the Montebello delegation, May 24, 1961.</figcaption>
            </figure>
        </div>
    </section>

    <section class="history-intro history-section" aria-labelledby="about-masca-title">
        <div class="history-shell history-intro__grid">
            <div class="history-section__heading history-reveal">
                <p class="history-kicker">About MASCA</p>
                <h2 id="about-masca-title">A community-built connection across the Pacific</h2>
            </div>

            <div class="history-prose history-reveal">
                <p>
                    The Montebello-Ashiya Sister City Association is a 501(C)(4) nonprofit, community-based
                    volunteer organization. MASCA works closely with the City of Montebello, and the association raises
                    the funding needed for the Montebello student ambassador exchange program and
                    educational scholarships.
                </p>
                <p>
                    MASCA's work is supported by contributions from Montebello residents,
                    individuals, local businesses, and others who believe in the relationship between
                    Montebello and Japan. The opportunities provided to Montebello's youth are matched by
                    the valuable public service MASCA provides to the larger community.
                </p>
                <p>
                    The association creates a meaningful avenue for community volunteerism and gives the
                    city a program of which it can be justifiably proud. Few international sister-city
                    relationships can match the Montebello-Ashiya program for longevity and sustained
                    contributions to the local community.
                </p>
                <p>
                    Through the student ambassador exchange and formal city delegations, generations of
                    relationships have formed between the two communities. MASCA members of all ages have
                    traveled to Japan, met residents of Ashiya, and built lasting friendships. Montebello
                    families have likewise welcomed visitors from Ashiya into their homes.
                </p>
            </div>
        </div>
    </section>

    <section class="history-origin history-section" aria-labelledby="people-to-people-title">
        <div class="history-shell history-origin__grid">
            <div class="history-origin__media history-reveal">
                <img
                    src="<?php echo esc_url($history_uri . '/signing-ceremony-hall-1961.png'); ?>"
                    alt="Guests attending the 1961 Montebello-Ashiya sister city signing ceremony beneath the flags of the United States and Japan"
                    width="1280"
                    height="938"
                    loading="lazy"
                >
            </div>

            <div class="history-origin__copy history-reveal">
                <p class="history-kicker">The idea behind the partnership</p>
                <h2 id="people-to-people-title">People to people</h2>
                <p>
                    The Montebello-Ashiya Sister City Agreement grew from the “people-to-people” program
                    initiated by President Dwight D. Eisenhower in 1956. Drawing on his experience during
                    World War II, Eisenhower believed that ordinary people could help prevent future conflict
                    by learning about one another and building relationships beyond national borders.
                </p>
                <p>
                    The road to peace, in this view, depended upon people sharing ideas, cultures, and daily
                    life. Through direct contact, residents of different countries could develop a deeper
                    understanding of one another—an especially important goal during the Cold War.
                </p>
                <p>
                    Sister-city associations became part of the program's civic work. Their mission was
                    carried out through correspondence, visits, gift exchanges, public celebrations, and the
                    personal relationships that grew from them. MASCA continues that mission today.
                </p>
            </div>
        </div>
    </section>

    <section class="history-timeline-section history-section" aria-labelledby="timeline-title">
        <div class="history-shell">
            <header class="history-timeline__header history-reveal">
                <p class="history-kicker">A lasting partnership</p>
                <h2 id="timeline-title">The MASCA timeline</h2>
                <p>
                    From the first search for a partner city to the return of international travel,
                    each milestone strengthened the connection between Montebello and Ashiya.
                </p>
            </header>

            <div class="history-timeline">
                <article class="timeline-entry history-reveal">
                    <div class="timeline-entry__marker" aria-hidden="true"></div>
                    <div class="timeline-entry__date">1956</div>
                    <div class="timeline-entry__content">
                        <p class="timeline-entry__label">The larger vision</p>
                        <h3>The people-to-people program begins</h3>
                        <p>
                            President Dwight D. Eisenhower launches an international effort encouraging
                            direct cultural and civic relationships between people around the world.
                        </p>
                    </div>
                </article>

                <article class="timeline-entry history-reveal">
                    <div class="timeline-entry__marker" aria-hidden="true"></div>
                    <div class="timeline-entry__date">1959</div>
                    <div class="timeline-entry__content">
                        <p class="timeline-entry__label">The search begins</p>
                        <h3>Montebello looks to Japan</h3>
                        <p>
                            The Montebello City Council authorizes Councilmember Elaine Kirchner to find a
                            sister city in Japan. At a conference in Osaka, she announces Montebello's interest
                            in establishing a relationship with a Japanese city.
                        </p>
                        <p>
                            Hiroyasu Okiyama, representing Ashiya—a city between Osaka and Kobe—responds.
                            Two years of correspondence between the cities follow.
                        </p>
                    </div>
                </article>

                <article class="timeline-entry timeline-entry--featured history-reveal">
                    <div class="timeline-entry__marker" aria-hidden="true"></div>
                    <div class="timeline-entry__date">May 24, 1961</div>
                    <div class="timeline-entry__content">
                        <p class="timeline-entry__label">The agreement</p>
                        <h3>Montebello and Ashiya become sister cities</h3>
                        <p>
                            The official agreement is signed at Seido Elementary School in Ashiya. Montebello
                            is represented by Councilmember Elaine Kirchner, Chamber of Commerce President
                            George Driscoll, and Mrs. Driscoll. Ashiya hosts a major celebration in honor of
                            the new partnership.
                        </p>
                        <p>
                            Gifts are exchanged, including Montebello roses presented for a new park that
                            would be known as the Montebello Rose Garden.
                        </p>

                        <div class="timeline-gallery timeline-gallery--four">
                            <figure>
                                <img
                                    src="<?php echo esc_url($history_uri . '/elaine-kirchner-signing-1961.png'); ?>"
                                    alt="Elaine Kirchner and Ashiya Mayor Watanabe signing the sister city agreement in May 1961"
                                    width="1280"
                                    height="948"
                                    loading="lazy"
                                >
                                <figcaption>Elaine Kirchner and Ashiya Mayor Watanabe sign the agreement.</figcaption>
                            </figure>
                            <figure>
                                <img
                                    src="<?php echo esc_url($history_uri . '/ashiya-officials-1961.png'); ?>"
                                    alt="Montebello delegates and Ashiya city officials gathered in Ashiya in 1961"
                                    width="1280"
                                    height="826"
                                    loading="lazy"
                                >
                                <figcaption>Montebello delegates with Ashiya city officials.</figcaption>
                            </figure>
                            <figure>
                                <img
                                    src="<?php echo esc_url($history_uri . '/signing-ceremony-1961.png'); ?>"
                                    alt="Ashiya city hall decorated to welcome Montebello's sister city delegation in 1961"
                                    width="1280"
                                    height="939"
                                    loading="lazy"
                                >
                                <figcaption>Ashiya welcomes its new sister-city delegation.</figcaption>
                            </figure>
                            <figure>
                                <img
                                    src="<?php echo esc_url($history_uri . '/signing-ceremony-hall-1961.png'); ?>"
                                    alt="Audience at the Montebello-Ashiya sister city celebration in 1961"
                                    width="1280"
                                    height="938"
                                    loading="lazy"
                                >
                                <figcaption>The 1961 signing celebration.</figcaption>
                            </figure>
                        </div>
                    </div>
                </article>

                <article class="timeline-entry timeline-entry--featured history-reveal">
                    <div class="timeline-entry__marker" aria-hidden="true"></div>
                    <div class="timeline-entry__date">1964</div>
                    <div class="timeline-entry__content">
                        <p class="timeline-entry__label">Youth exchange</p>
                        <h3>The Student Ambassador Exchange begins</h3>
                        <p>
                            Montebello and Ashiya begin their student exchanges. Each summer, Montebello sends
                            two student ambassadors to Ashiya to represent the city, while Ashiya sends two
                            ambassadors to Montebello.
                        </p>

                        <div class="timeline-gallery timeline-gallery--two">
                            <figure>
                                <img
                                    src="<?php echo esc_url($history_uri . '/first-ambassadors-1964.png'); ?>"
                                    alt="The first Montebello and Ashiya exchange students together in 1964"
                                    width="1500"
                                    height="1121"
                                    loading="lazy"
                                >
                                <figcaption>The first student ambassadors, 1964.</figcaption>
                            </figure>
                            <figure>
                                <img
                                    src="<?php echo esc_url($history_uri . '/first-ambassadors-newspaper-1964.png'); ?>"
                                    alt="Montebello Messenger newspaper coverage of the first student exchange in 1964"
                                    width="1225"
                                    height="1500"
                                    loading="lazy"
                                >
                                <figcaption>Local newspaper coverage of the first exchange.</figcaption>
                            </figure>
                        </div>

                        <div class="history-story history-story--1964">
                            <div class="history-story__copy">
                                <h4>A tradition rooted in civic welcome</h4>
                                <p>
                                    Ashiya Student Ambassadors Masuda and Fukunaka met MASCA founder Elaine
                                    Kirchner at Montebello City Hall. Visiting city hall in both Ashiya and
                                    Montebello became a continuing tradition of the exchange program.
                                </p>
                            </div>
                            <div class="history-story__gallery history-story__gallery--two">
                                <figure>
                                    <img
                                        src="<?php echo esc_url($history_uri . '/ashiya-ambassadors-city-hall-1964.jpg'); ?>"
                                        alt="Ashiya Student Ambassadors Masuda and Fukunaka meeting Elaine Kirchner at Montebello City Hall in 1964"
                                        width="800"
                                        height="600"
                                        loading="lazy"
                                    >
                                    <figcaption>Student Ambassadors Masuda and Fukunaka meet Elaine Kirchner at Montebello City Hall.</figcaption>
                                </figure>
                                <figure>
                                    <img
                                        src="<?php echo esc_url($history_uri . '/ashiya-ambassadors-newspaper-1964.jpg'); ?>"
                                        alt="Newspaper photograph of Ashiya student ambassadors being welcomed at Montebello City Hall in 1964"
                                        width="640"
                                        height="480"
                                        loading="lazy"
                                    >
                                    <figcaption>Newspaper coverage of the ambassadors' first stop at Montebello City Hall.</figcaption>
                                </figure>
                            </div>
                        </div>

                        <div class="history-story history-story--sayonara">
                            <figure class="history-story__feature-image">
                                <img
                                    src="<?php echo esc_url($history_uri . '/sayonara-lunch-1964.jpg'); ?>"
                                    alt="Guests and student ambassadors gathered at the first Sayonara lunch in 1964"
                                    width="800"
                                    height="600"
                                    loading="lazy"
                                >
                                <figcaption>The Sayonara lunch was first held in 1964.</figcaption>
                            </figure>
                            <div class="history-story__copy">
                                <h4>The first Sayonara lunch</h4>
                                <p>
                                    The farewell lunch for the Ashiya Student Ambassadors was first held in
                                    1964. The Sayonara lunch continued as an annual tradition of Montebello's
                                    sister-city program.
                                </p>
                            </div>
                        </div>
                    </div>
                </article>

                <article class="timeline-entry history-reveal">
                    <div class="timeline-entry__marker" aria-hidden="true"></div>
                    <div class="timeline-entry__date">1995</div>
                    <div class="timeline-entry__content">
                        <p class="timeline-entry__label">A year of recovery</p>
                        <h3>The Great Hanshin Earthquake pauses the exchange</h3>
                        <p>
                            The student exchange does not take place after the devastating earthquake damages
                            much of Ashiya and the surrounding Kobe region.
                        </p>
                    </div>
                </article>

                <article class="timeline-entry history-reveal">
                    <div class="timeline-entry__marker" aria-hidden="true"></div>
                    <div class="timeline-entry__date">1996</div>
                    <div class="timeline-entry__content">
                        <p class="timeline-entry__label">The relationship continues</p>
                        <h3>Student exchanges resume</h3>
                        <p>
                            Under the leadership of Mayor Haru Kitamura and through the resolve of Ashiya's
                            residents, the city recovers sufficiently for the annual ambassador exchange to return.
                        </p>
                    </div>
                </article>

                <article class="timeline-entry timeline-entry--featured history-reveal">
                    <div class="timeline-entry__marker" aria-hidden="true"></div>
                    <div class="timeline-entry__date">2010</div>
                    <div class="timeline-entry__content">
                        <p class="timeline-entry__label">Honoring a founder</p>
                        <h3>Elaine Kirchner's legacy continues</h3>
                        <p>
                            Elaine Kirchner continued supporting the Montebello-Ashiya Sister City Association
                            throughout her life. In 2010, she joined the Ashiya and Montebello Student Ambassadors
                            at Montebello City Hall as they were introduced to the City Council.
                        </p>

                        <div class="history-story history-story--portrait">
                            <figure class="history-story__feature-image">
                                <img
                                    src="<?php echo esc_url($history_uri . '/elaine-kirchner-2010.jpg'); ?>"
                                    alt="Elaine Kirchner with the 2010 Ashiya and Montebello Student Ambassadors and MASCA President Carlos Haro"
                                    width="1500"
                                    height="1125"
                                    loading="lazy"
                                >
                                <figcaption>
                                    From left: Elaine Kirchner, Lorena Garcia Zermeno, Yuka Sakai, Atsuko Murayama,
                                    a Montebello student ambassador, and MASCA President Dr. Carlos M. Haro.
                                </figcaption>
                            </figure>
                            <div class="history-story__copy">
                                <h4>The Elaine Kirchner Student Ambassador Scholarship Fund</h4>
                                <p>
                                    The Elaine Kirchner Student Ambassador Scholarship Fund was established in
                                    2010 to provide educational support to Montebello youth traveling to Ashiya.
                                    Donations came from Cook Hill Properties, Bank of the West, Athens Services,
                                    and other local businesses and organizations.
                                </p>
                                <p>
                                    The Odou family, including longtime MASCA supporter Dr. Gene Odou, had supported
                                    the association since the 1960s. Naming the scholarship for Elaine Kirchner gave
                                    formal recognition to the founder of Montebello's international sister-city agreement.
                                </p>
                            </div>
                        </div>

                        <figure class="history-story__wide-image">
                            <img
                                src="<?php echo esc_url($history_uri . '/elaine-kirchner-scholarship-2010.jpg'); ?>"
                                alt="Elaine Kirchner and MASCA supporters presenting a scholarship donation check in 2010"
                                width="1024"
                                height="768"
                                loading="lazy"
                            >
                            <figcaption>The Elaine Kirchner Scholarship Fund is formally recognized in 2010.</figcaption>
                        </figure>
                    </div>
                </article>

                <article class="timeline-entry history-reveal">
                    <div class="timeline-entry__marker" aria-hidden="true"></div>
                    <div class="timeline-entry__date">2020–2022</div>
                    <div class="timeline-entry__content">
                        <p class="timeline-entry__label">A global pause</p>
                        <h3>The pandemic interrupts international travel</h3>
                        <p>
                            The COVID-19 pandemic temporarily halts the in-person student ambassador exchange,
                            marking only the second major interruption in the program's history.
                        </p>
                    </div>
                </article>

                <article class="timeline-entry history-reveal">
                    <div class="timeline-entry__marker" aria-hidden="true"></div>
                    <div class="timeline-entry__date">2023</div>
                    <div class="timeline-entry__content">
                        <p class="timeline-entry__label">A renewed exchange</p>
                        <h3>Ambassadors cross the Pacific once again</h3>
                        <p>
                            With Japan and the United States reopened for travel, the Montebello-Ashiya Student
                            Ambassador Exchange resumes.
                        </p>
                    </div>
                </article>

                <article class="timeline-entry timeline-entry--final history-reveal">
                    <div class="timeline-entry__marker" aria-hidden="true"></div>
                    <div class="timeline-entry__date">Today</div>
                    <div class="timeline-entry__content">
                        <p class="timeline-entry__label">The next generation</p>
                        <h3>More than 65 years of friendship</h3>
                        <p>
                            Nearly 200 young people from Montebello and Ashiya have benefited from the student
                            ambassador experience. The exchange remains the central focus of the sister-city
                            relationship, coordinated in Montebello by MASCA and in Ashiya by the Ashiya
                            Cosmopolitan Association.
                        </p>
                        <p>
                            The partnership continues through volunteers, host families, students, civic leaders,
                            and supporters who believe that understanding begins when people meet one another.
                        </p>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <section class="history-closing history-section">
        <div class="history-shell history-closing__inner history-reveal">
            <p class="history-kicker">One friendship, two cities</p>
            <h2>A history still being written</h2>
            <p>
                MASCA's story belongs to every ambassador, host family, volunteer, donor, and community
                member who has helped carry this friendship forward.
            </p>
            <div class="history-closing__actions">
                <a class="history-button history-button--primary" href="<?php echo esc_url(home_url('/ambassador-program/')); ?>">
                    Explore the Ambassador Program
                </a>
                <a class="history-button history-button--secondary" href="<?php echo esc_url(home_url('/donate/')); ?>">
                    Support MASCA
                </a>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
