<?php
/**
 * Donate page template.
 *
 * Automatically used by WordPress for a page with the slug "donate".
 *
 * @package MASCA_Custom
 */

get_header();

$theme_uri = get_template_directory_uri();
?>

<main id="primary" class="masca-donate-page">
    <section class="donate-intro" aria-labelledby="donate-title">
        <div class="donate-container donate-intro__inner">
            <p class="donate-eyebrow">Support MASCA</p>
            <h1 id="donate-title">Donate to MASCA</h1>
            <p class="donate-intro__copy">
                Help sustain cultural exchange, student opportunity, and more than six decades of friendship between Montebello and Ashiya.
            </p>
        </div>
    </section>

    <figure class="donate-hero donate-container">
        <img
            class="donate-hero__image"
            src="<?php echo esc_url($theme_uri . '/assets/images/donate/donate-hero.jpg'); ?>"
            alt="MASCA student ambassadors and community representatives gathered at Montebello City Hall"
        >
    </figure>

    <section class="donate-contribution" aria-labelledby="contribution-title">
        <div class="donate-container donate-contribution__grid">
            <div class="donate-contribution__copy">
                <p class="donate-section-label">Your contribution matters</p>
                <h2 id="contribution-title">Join us in fostering goodwill and partnership through your support.</h2>
                <p>
                    At the Montebello-Ashiya Sister City Association, every donation helps strengthen the bonds between our communities. Whether it supports cultural exchanges, educational programs, or community events, your generosity plays a crucial role in making a lasting impact.
                </p>
                <p>
                    Together, we can continue to bridge distances and nurture friendships that last a lifetime.
                </p>
            </div>

            <div class="donate-payment-card__image-wrap">
                <img
                    class="donate-payment-card__image"
                    src="<?php echo esc_url($theme_uri . '/assets/images/donate/masca-zelle.png'); ?>"
                    alt="Zelle QR code for the Montebello-Ashiya Sister City Association"
                >
            </div>

            <aside class="donate-payment-card" aria-labelledby="zelle-title">
                <div class="donate-payment-card__content">
                    <div class="donate-payment-card__heading">
                        <p class="donate-section-label">Donate or pay membership dues</p>
                        <h2 id="zelle-title">Give through Zelle</h2>
                    </div>

                    <div class="donate-payment-card__details">
                        <p>
                            Scan the QR code or send your contribution directly to the email address below. The same Zelle account may also be used to pay annual membership dues.
                        </p>
                        <a class="donate-email" href="mailto:montebellosc1961@gmail.com">montebellosc1961@gmail.com</a>
                    </div>
                </div>
            </aside>
        </div>
    </section>

    <section class="donate-reasons" aria-labelledby="why-donate-title">
        <div class="donate-container">
            <div class="donate-section-heading">
                <p class="donate-section-label">Why donate?</p>
                <h2 id="why-donate-title">Your support keeps the exchange moving forward.</h2>
            </div>

            <div class="donate-reasons__grid">
                <article class="donate-reason">
                    <h3>Our mission</h3>
                    <p>
                        MASCA is a 501(C)(4) nonprofit organization dedicated to making a difference in the lives of Montebello students. Every contribution helps build connections between Montebello and Ashiya.
                    </p>
                </article>

                <article class="donate-reason">
                    <h3>Your impact</h3>
                    <p>
                        Donations provide essential resources for student programs, community events, and the full travel opportunities that make the ambassador experience possible.
                    </p>
                </article>

                <article class="donate-reason">
                    <h3>Tax status and transparency</h3>
                    <p>
                        MASCA is a registered 501(C)(4) social welfare nonprofit. Donations are not tax-deductible as charitable contributions, but every dollar directly supports student programs, cultural exchange opportunities, and community initiatives.
                    </p>
                </article>
            </div>
        </div>
    </section>

    <section class="donate-matters" aria-labelledby="matters-title">
        <div class="donate-container donate-matters__grid">
            <div>
                <p class="donate-section-label">Why MASCA matters</p>
                <h2 id="matters-title">Lasting connection is built one relationship at a time.</h2>
            </div>

            <div class="donate-matters__copy">
                <p>
                    Across cultures, understanding does not happen through headlines or policies. It happens through people—through shared meals, unfamiliar routines, small misunderstandings, and moments of connection that slowly turn into trust.
                </p>
                <p>
                    For more than 60 years, MASCA has created space for those moments. Through student exchange and community involvement, families in Montebello and Ashiya open their homes, students step into lives different from their own, and relationships form that extend far beyond a single visit.
                </p>
                <p>
                    What begins as an exchange becomes perspective. Students gain confidence and curiosity. Families learn from one another. Volunteers and educators sustain a program rooted in mutual respect and care. Together, these efforts strengthen the bond between Montebello and Ashiya.
                </p>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
