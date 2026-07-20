<?php
/**
 * Community Exchange page template.
 *
 * Automatically used for a WordPress page with the slug:
 * community-exchange
 */

if (!defined('ABSPATH')) {
    exit;
}

$community_exchange_css = get_theme_file_path('/assets/css/community-exchange.css');
$community_exchange_version = file_exists($community_exchange_css)
    ? (string) filemtime($community_exchange_css)
    : wp_get_theme()->get('Version');

wp_enqueue_style(
    'masca-community-exchange',
    get_theme_file_uri('/assets/css/community-exchange.css'),
    [],
    $community_exchange_version
);

get_header();

$image_base = get_theme_file_uri('/assets/images/community-exchange');
?>

<main id="main-content" class="community-exchange-page">
    <section class="ce-hero" aria-labelledby="community-exchange-title">
        <div class="ce-container ce-hero__inner">
            <div class="ce-hero__content">
                <p class="ce-eyebrow">Montebello + Ashiya</p>
                <h1 id="community-exchange-title">Community Exchange</h1>
                <p class="ce-hero__lead">
                    Every five years, delegations from Montebello and Ashiya cross the Pacific
                    to celebrate their sister-city relationship through civic exchange,
                    cultural experiences, and lasting personal connections.
                </p>
            </div>

            <figure class="ce-hero__media">
                <img
                    src="<?php echo esc_url($image_base . '/ashiya-delegation-arrival-montebello-2026.jpg'); ?>"
                    alt="An Ashiya delegation walking through Montebello during the 2026 community exchange"
                    width="1536"
                    height="1024"
                    fetchpriority="high"
                >
            </figure>
        </div>
    </section>

    <section class="ce-section ce-introduction">
        <div class="ce-container ce-introduction__grid">
            <div>
                <p class="ce-kicker">How the exchange works</p>
                <h2>Building relationships beyond city borders</h2>
            </div>

            <div class="ce-introduction__copy">
                <p>
                    MASCA and the Ashiya Cosmopolitan Association organize reciprocal
                    delegation visits around milestone anniversaries of the sister-city
                    relationship. Each visit lasts approximately one week and brings
                    together association members, mayors, city officials, educators, and
                    community representatives.
                </p>
                <p>
                    Delegates take part in official city visits, cultural activities,
                    community gatherings, school visits, and anniversary celebrations.
                    The program gives residents and civic leaders an opportunity to
                    experience the sister city firsthand and strengthen relationships
                    between both communities.
                </p>
            </div>
        </div>
    </section>

    <section class="ce-section ce-section--tinted ce-2026">
        <div class="ce-container">
            <div class="ce-heading">
                <p class="ce-kicker">The 2026 exchange</p>
                <h2>Celebrating 65 years of friendship</h2>
                <p>
                    In April 2026, a 29-person delegation from Ashiya traveled to
                    Montebello for a five-day anniversary celebration hosted by MASCA
                    and the City of Montebello. The delegation included Ashiya Mayor
                    Ryosuke Takashima along with city and community representatives.
                    MASCA's reciprocal delegation is scheduled to travel to Ashiya in
                    November 2026.
                </p>
            </div>

            <div class="ce-photo-grid">
                <figure class="ce-photo ce-photo--wide">
                    <img
                        src="<?php echo esc_url($image_base . '/ashiya-montebello-delegation-city-hall-2026.jpg'); ?>"
                        alt="Montebello and Ashiya representatives gathered inside Montebello City Hall"
                        width="1536"
                        height="1024"
                        loading="lazy"
                        decoding="async"
                    >
                    <figcaption>
                        Montebello and Ashiya representatives gather at Montebello City Hall.
                    </figcaption>
                </figure>

                <figure class="ce-photo">
                    <img
                        src="<?php echo esc_url($image_base . '/mayors-city-key-exchange-2026.jpg'); ?>"
                        alt="Montebello and Ashiya representatives presenting ceremonial city keys"
                        width="1536"
                        height="864"
                        loading="lazy"
                        decoding="async"
                    >
                    <figcaption>
                        Representatives exchange ceremonial keys during the 2026 visit.
                    </figcaption>
                </figure>

                <figure class="ce-photo">
                    <img
                        src="<?php echo esc_url($image_base . '/montebello-ashiya-delegation-2026.jpg'); ?>"
                        alt="Montebello and Ashiya delegation members standing together outdoors"
                        width="1536"
                        height="1152"
                        loading="lazy"
                        decoding="async"
                    >
                    <figcaption>
                        Delegation members and city representatives during the anniversary exchange.
                    </figcaption>
                </figure>
            </div>
        </div>
    </section>

    <section class="ce-feature-image">
        <figure>
            <img
                src="<?php echo esc_url($image_base . '/community-exchange-gathering-2026.jpg'); ?>"
                alt="MASCA, ACA, city officials, and community supporters gathered outdoors in Montebello"
                width="1536"
                height="1152"
                loading="lazy"
                decoding="async"
            >
            <figcaption class="ce-container">
                MASCA, ACA, city officials, community members, and supporters gather
                during the April 2026 visit to Montebello.
            </figcaption>
        </figure>
    </section>

    <section class="ce-section ce-history">
        <div class="ce-container ce-history__grid">
            <div class="ce-history__image">
                <img
                    src="<?php echo esc_url($image_base . '/ashiya-montebello-awards.jpg'); ?>"
                    alt="Montebello and Ashiya representatives holding commemorative Ashiya Way awards"
                    width="4032"
                    height="3024"
                    loading="lazy"
                    decoding="async"
                >
            </div>

            <div>
                <p class="ce-kicker">A tradition across generations</p>
                <h2>Milestone visits strengthen a lasting partnership</h2>
                <p>
                    Reciprocal anniversary visits have been an important part of the
                    Montebello-Ashiya relationship for decades. In November 2016, an
                    18-member Montebello delegation traveled to Ashiya to celebrate the
                    55th anniversary of the sister-city partnership.
                </p>
                <p>
                    The week-long itinerary included Ashiya City Hall, police and fire
                    departments, Ashiya Municipal Hospital, schools, the Montebello Rose
                    Garden, and cultural and historic destinations throughout Japan.
                    The mayors of Montebello and Ashiya also exchanged gifts during the
                    anniversary celebration.
                </p>
            </div>
        </div>
    </section>

    <section class="ce-section ce-section--dark ce-coverage">
        <div class="ce-container">
            <div class="ce-heading ce-heading--light">
                <p class="ce-kicker">Related coverage</p>
                <h2>Read more about the exchange</h2>
            </div>

            <div class="ce-article-grid">
                <a
                    class="ce-article-card"
                    href="https://rafu.com/2026/04/ashiya-delegation-to-celebrate-65-years-of-friendship-in-montebello/"
                    target="_blank"
                    rel="noopener noreferrer"
                >
                    <span class="ce-article-card__date">April 2026</span>
                    <h3>Ashiya Delegation to Celebrate 65 Years of Friendship in Montebello</h3>
                    <span class="ce-article-card__source">Rafu Shimpo <span aria-hidden="true">↗</span></span>
                </a>

                <a
                    class="ce-article-card"
                    href="https://rafu.com/2016/12/montebello-group-travels-to-ashiya-to-celebrate-55-years-of-friendship/"
                    target="_blank"
                    rel="noopener noreferrer"
                >
                    <span class="ce-article-card__date">December 2016</span>
                    <h3>Montebello Group Travels to Ashiya to Celebrate 55 Years of Friendship</h3>
                    <span class="ce-article-card__source">Rafu Shimpo <span aria-hidden="true">↗</span></span>
                </a>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
