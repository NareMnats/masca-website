<?php
/**
 * Page template for the Student Ambassador Program page.
 * Uses the WordPress page slug: ambassador-program
 */
get_header();

$application_url      = home_url( '/application/' );
$past_ambassadors_url = home_url( '/past-ambassadors/' );
$guidebook_path       = get_template_directory() . '/assets/documents/parent-family-guidebook.pdf';
$guidebook_url        = get_template_directory_uri() . '/assets/documents/parent-family-guidebook.pdf';
?>

<main id="main-content" class="ambassador-program-page">
    <section class="ap-hero">
        <div class="ap-container ap-hero__inner">
            <div class="ap-hero__content">
                <p class="ap-eyebrow">Montebello–Ashiya Sister City Association</p>
                <h1>Student Ambassador Program</h1>
                <p class="ap-hero__lead">
                    Each summer, students from Montebello and Ashiya cross the Pacific to experience daily life,
                    build lasting friendships, and represent their communities abroad.
                </p>

                <div class="ap-actions">
                    <a class="ap-button ap-button--primary" href="<?php echo esc_url( $application_url ); ?>">
                        View Application Status
                    </a>
                    <a class="ap-button ap-button--secondary" href="#how-it-works">
                        See How the Exchange Works
                    </a>
                </div>
            </div>

            <figure class="ap-hero__media">
                <img
                    src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/ambassador-program/ambassador-hero.png' ); ?>"
                    alt="Montebello and Ashiya student ambassadors beneath Japanese lanterns"
                    width="938"
                    height="1250"
                    fetchpriority="high"
                >
            </figure>
        </div>
    </section>

    <section class="ap-section">
        <div class="ap-container ap-narrow">
            <p class="ap-kicker">A People-to-People Exchange</p>
            <h2>More Than a Trip</h2>
            <p>
                The Montebello–Ashiya Student Ambassador Program gives high school students the opportunity
                to live with a host family, experience another culture firsthand, and serve as a representative
                of their home city. MASCA coordinates the Montebello program, while the Ashiya Cosmopolitan
                Association coordinates the program in Ashiya.
            </p>
            <p>
                Since the exchange began in 1964, generations of students have taken part in this enduring
                sister-city tradition. The experience encourages cultural understanding, independence,
                leadership, and lifelong international friendship.
            </p>
        </div>
    </section>

    <section id="how-it-works" class="ap-section ap-section--tinted">
        <div class="ap-container">
            <div class="ap-heading">
                <p class="ap-kicker">A Four-Week Cultural Exchange</p>
                <h2>How the Exchange Journey Unfolds</h2>
                <p>
                    After the interview process, two students are chosen as traveling student ambassadors and
                    two students are chosen as host ambassadors. The same arrangement happens in Ashiya within their
                    ACA (Ashiya Cosmopolitan Association). Traveling student ambassadors spend approximately
                    three weeks visiting its sister city, but the full exchange unfolds over four weeks.
                    Montebello students travel to Ashiya first, and one week later the Ashiya students depart for Montebello.
                    This staggered schedule allows each group to welcome the other in its own hometown.
                </p>
            </div>

            <div class="ap-flow" aria-label="Four-week student ambassador exchange sequence">
                <article class="ap-flow-card">
                    <span class="ap-label">Week 1</span>
                    <h3>Montebello Arrives in Ashiya</h3>
                    <p>
                        Two Montebello student ambassadors travel to Ashiya and begin their three-week stay
                        with host families. During their first week, the Ashiya ambassadors help welcome them
                        and introduce them to daily life, local activities, and the community.
                    </p>
                </article>

                <article class="ap-flow-card">
                    <span class="ap-label">Weeks 2–3</span>
                    <h3>Ashiya Travels to Montebello</h3>
                    <p>
                        One week after the Montebello students arrive in Japan, two Ashiya student ambassadors
                        depart for Montebello to begin their own three-week stay. Meanwhile, the Montebello
                        ambassadors continue their exchange experience in Ashiya.
                    </p>
                </article>

                <article class="ap-flow-card ap-flow-card--featured">
                    <span class="ap-label">Week 4</span>
                    <h3>Reunited in Montebello</h3>
                    <p>
                        When the Montebello ambassadors return home, the Ashiya students still have one week
                        remaining in California. The Montebello students can now return the hospitality by
                        showing their new friends around their own schools, families, and community.
                    </p>
                </article>

                <article class="ap-flow-card">
                    <span class="ap-label">Program Conclusion</span>
                    <h3>A Shared Experience in Both Cities</h3>
                    <p>
                        At the end of the fourth week, the Ashiya ambassadors return home. By then, both groups
                        have experienced life together in Ashiya and Montebello—as hosts, then as guests.
                    </p>
                </article>
            </div>
        </div>
    </section>

    <section class="ap-section">
        <div class="ap-container">
            <div class="ap-heading">
                <p class="ap-kicker">From Application to Departure</p>
                <h2>Typical Annual Timeline</h2>
                <p>Exact dates may vary, but the program generally follows this schedule.</p>
            </div>

            <div class="ap-timeline">
                <article>
                    <span>February</span>
                    <h3>Applications</h3>
                    <p>Students submit the annual application and all required materials.</p>
                </article>

                <article>
                    <span>March–April</span>
                    <h3>Interviews</h3>
                    <p>Qualified applicants meet with MASCA representatives for an interview.</p>
                </article>

                <article>
                    <span>May–June</span>
                    <h3>Selection &amp; Orientation</h3>
                    <p>
                        Ambassadors are selected and begin orientation, cultural preparation,
                        travel planning, and paperwork.
                    </p>
                </article>

                <article>
                    <span>July–August</span>
                    <h3>Exchange Program</h3>
                    <p>The four-week international exchange takes place over the summer.</p>
                </article>
            </div>
        </div>
    </section>

    <section class="ap-section ap-section--dark">
        <div class="ap-container">
            <div class="ap-heading ap-heading--light">
                <p class="ap-kicker">Prospective Ambassadors</p>
                <h2>Who Should Apply?</h2>
            </div>

            <div class="ap-columns">
                <article class="ap-info-card">
                    <h3>Ideal Applicants</h3>
                    <ul>
                        <li>High school students currently residing in Montebello</li>
                        <li>Students between the ages of 15 and 18 at the time of travel</li>
                        <li>Students who demonstrate responsibility & maturity</li>
                        <li>Students interested in Japanese culture and international friendship</li>
                        <li>Students prepared to represent Montebello and MASCA</li>
                    </ul>
                </article>

                <article class="ap-info-card">
                    <h3>Student Commitment</h3>
                    <ul>
                        <li>Submit all required application materials</li>
                        <li>Participate in the interview process</li>
                        <li>Attend orientation and preparation meetings</li>
                        <li>Complete all required travel and program paperwork</li>
                        <li>Represent the community respectfully</li>
                        <li>Participate in the hosting portion of the exchange</li>
                    </ul>
                </article>
            </div>
        </div>
    </section>

    <section class="ap-section">
        <div class="ap-container ap-narrow">
            <p class="ap-kicker">For Families</p>
            <h2>Hosting Is Part of the Experience</h2>
            <p>
                The program is a reciprocal cultural exchange. In addition to traveling to Ashiya,
                Montebello student ambassadors and their families participate in welcoming the Ashiya students
                into their homes during the Montebello portion of the program.
            </p>
            <p>
                This allows families to share daily life in Montebello and help visiting students feel welcomed
                and supported. Housing arrangements are coordinated separately; host ambassador families are
                not expected to house a visiting student–this responsibility lies with the families of ambassadors
                traveling to Ashiya. Specific responsibilities, schedules, and preparation
                requirements are reviewed with selected ambassadors and their families.
            </p>
        </div>
    </section>

    <section class="ap-section ap-guide-section">
        <div class="ap-container">
            <div class="ap-guidebook">
                <div>
                    <p class="ap-kicker">Parent Resource</p>
                    <h2>Parent &amp; Family Guidebook</h2>
                    <p>
                        This guide will provide families with detailed information about travel preparation,
                        hosting responsibilities, required documents, important dates, and program expectations.
                    </p>
                </div>

                <?php if ( file_exists( $guidebook_path ) ) : ?>
                    <a
                        class="ap-button ap-button--primary"
                        href="<?php echo esc_url( $guidebook_url ); ?>"
                        download
                    >
                        Download Guidebook (PDF)
                    </a>
                <?php else : ?>
                    <span class="ap-button ap-button--disabled" aria-disabled="true">
                        Guidebook Coming Soon
                    </span>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <section class="ap-section ap-host-ambassadors">
        <div class="ap-container">
            <div class="ap-host-ambassadors__intro">
                <div>
                    <p class="ap-kicker">Supporting the Exchange at Home</p>
                    <h2>The Role of Host Ambassadors</h2>
                </div>
                <p>
                    Four Montebello ambassadors are selected in total. While two student ambassadors travel
                    to Ashiya, two host ambassadors remain in Montebello and help make the visiting Ashiya
                    students&rsquo; three-week stay in California welcoming, engaging, and memorable.
                </p>
            </div>

            <div class="ap-ambassador-count" aria-label="Four selected Montebello ambassadors">
                <article>
                    <span class="ap-ambassador-count__number">2</span>
                    <div>
                        <h3>Student Ambassadors</h3>
                        <p>Travel to Ashiya for the international portion of the exchange.</p>
                    </div>
                </article>
                <article>
                    <span class="ap-ambassador-count__number">2</span>
                    <div>
                        <h3>Host Ambassadors</h3>
                        <p>Stay in Montebello and support the visiting Ashiya students throughout their stay.</p>
                    </div>
                </article>
            </div>

            <div class="ap-host-duties">
                <article>
                    <span class="ap-label">01</span>
                    <h3>Be a Local Friend</h3>
                    <p>
                        Welcome the Ashiya students, help them feel included, and serve as a friendly point
                        of connection throughout their time in Montebello.
                    </p>
                </article>
                <article>
                    <span class="ap-label">02</span>
                    <h3>Share Montebello &amp; California</h3>
                    <p>
                        Help introduce the visiting students to local life, community traditions, and the
                        experiences that make Montebello and Southern California special.
                    </p>
                </article>
                <article>
                    <span class="ap-label">03</span>
                    <h3>Join the Activities</h3>
                    <p>
                        Host ambassadors and their families are expected to participate in all or most of
                        the activities planned for the three-week visit.
                    </p>
                </article>
            </div>

            <aside class="ap-host-note">
                <strong>Housing is not required.</strong>
                <p>
                    Families of host ambassadors are not expected to house an Ashiya student in their home.
                    Their primary commitment is to be present, participate, and help the students enjoy a
                    full California exchange experience.
                </p>
            </aside>
        </div>
    </section>

    <section class="ap-section">
        <div class="ap-container ap-narrow">
            <div class="ap-heading">
                <p class="ap-kicker">Common Questions</p>
                <h2>Frequently Asked Questions</h2>
            </div>

            <div class="ap-faq">
                <details>
                    <summary>When do applications open?</summary>
                    <div>
                        <p>
                            Applications generally open in February. Exact dates and the current application
                            packet will be posted on the Application page.
                        </p>
                    </div>
                </details>

                <details>
                    <summary>How are student ambassadors selected?</summary>
                    <div>
                        <p>
                            Applicants submit the required materials and, if selected to continue,
                            participate in interviews during March or April. Final selections are generally
                            announced in May or June.
                        </p>
                    </div>
                </details>

                <details>
                    <summary>How long is the exchange?</summary>
                    <div>
                        <p>
                            The full exchange unfolds over four weeks. Each group spends approximately three
                            weeks in its sister city, with the schedules staggered so the students spend one
                            week together in Ashiya and one week together in Montebello.
                        </p>
                    </div>
                </details>

                <details>
                    <summary>Which group travels first?</summary>
                    <div>
                        <p>
                            Montebello students travel to Ashiya first. One week later, the Ashiya students
                            depart for Montebello. This allows the Ashiya ambassadors to welcome the Montebello
                            students during their first week in Japan, and the Montebello ambassadors to return
                            the hospitality during the Ashiya students’ final week in California.
                        </p>
                    </div>
                </details>

                <details>
                    <summary>Are families expected to host an Ashiya student?</summary>
                    <div>
                        <p>
                            Families of the two ambassadors traveling to Ashiya are expected to house the visiting students.
                            Families of host ambassadors are not expected to house an Ashiya student. Both sets of ambassadors
                            are expected to participate in all or most of the activities planned during the
                            visitors&rsquo; three-week stay in California.
                        </p>
                    </div>
                </details>

                <details>
                    <summary>What preparation is required after selection?</summary>
                    <div>
                        <p>
                            Selected ambassadors participate in orientation meetings, cultural preparation,
                            travel planning, and completion of required program documents during May and June.
                        </p>
                    </div>
                </details>

                <details>
                    <summary>Do applicants need to speak Japanese?</summary>
                    <div>
                        <p>
                            Applicants are not required to speak Japanese. However, students who have studied the language may find it helpful during their exchange experience.
                        </p>
                    </div>
                </details>

                <details>
                    <summary>What costs should families expect?</summary>
                    <div>
                        <p>
                            Program costs vary depending on activities that families choose to participate in. MASCA provides a rough breakdown of expected costs during the application and orientation process.
                        </p>
                    </div>
                </details>
            </div>
        </div>
    </section>

    <section class="ap-section ap-final-cta">
        <div class="ap-container ap-narrow">
            <p class="ap-kicker">Take the Next Step</p>
            <h2>Interested in Becoming a Student Ambassador?</h2>
            <p>
                Review the current application status or explore the students who have represented
                Montebello and Ashiya throughout the history of the exchange.
            </p>

            <div class="ap-actions ap-actions--centered">
                <a class="ap-button ap-button--primary" href="<?php echo esc_url( $application_url ); ?>">
                    View Application
                </a>
                <a class="ap-button ap-button--secondary" href="<?php echo esc_url( $past_ambassadors_url ); ?>">
                    View Past Ambassadors
                </a>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
