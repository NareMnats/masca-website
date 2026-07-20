<?php
/**
 * MASCA Legacy page
 * Automatically used by WordPress for the /legacy/ page slug.
 */

get_header();

$theme_uri = get_template_directory_uri();
$legacy_image_uri = $theme_uri . '/assets/images/legacy';
$legacy_pdf_uri = $theme_uri . '/assets/documents/masca-50-years-of-friendship-legacy-book.pdf';

$masca_presidents = [
    'Elaine Kirchner', 'Richard Harris', 'Florence Raines', 'Dr. George Miller',
    'Fidel Montez', 'Muriel Peck', 'Dr. Bruce Odou', 'Nick Valedez',
    'Andrew Lambo', 'Mike Patterson', 'Elizabeth Porras', 'Mike Patterson',
    'Phyllis Malott', 'Eleanor Chow', 'Heather Lee', 'Blanca Zendejas',
    'Phil Olsen', 'Yae Aihara', 'Irene LaBrada', 'Phil Olsen',
    'Katherine Kivorkian', 'Norma Lambo', 'Doug McIntosh', 'Michael Okamura',
    'Vivian Alaniz-Borup', 'Marian Moure Lopez', 'Saya Yamaguchi', 'Art Najera',
    'Dr. Carlos Haro',
];

$aca_presidents = [
    'Saiitirou Hirano', 'Yasuzirou Hatiuma', 'Hirohisa Kato', 'Atushi Watanabe',
    'Hideo Inakagi', 'Takao Takase', 'Yoshie Kishii', 'Seizi Igarashi',
    'Sadako Toda', 'Riichi Hayashi', 'Takeyasu Inakagi', 'Atuko Emi',
    'Kenzaburou Ida', 'Fumio Harada', 'Kaoru Igarashi', 'Satoshi Iue',
    'Takeyasu Inakagi', 'Shizuko Hashitani',
];
?>

<main id="main-content" class="masca-legacy-page">
    <section class="legacy-hero">
        <div class="legacy-container legacy-hero__inner">
            <div class="legacy-hero__copy">
                <p class="legacy-eyebrow">MASCA Digital Archive</p>
                <p class="legacy-kicker">Honoring Our Past. Celebrating Our Future.</p>
                <h1>50 Years of Friendship</h1>
                <p class="legacy-subtitle">A Legacy Book</p>
                <p class="legacy-years">Montebello-Ashiya Sister City Affiliation Association and the Student Exchange Ambassador Program, 1961-2011</p>
                <div class="legacy-actions">
                    <a class="legacy-button legacy-button--primary" href="#legacy-story">Read the legacy</a>
                    <a class="legacy-button legacy-button--secondary" href="<?php echo esc_url($legacy_pdf_uri); ?>" target="_blank" rel="noopener noreferrer">Download the original book</a>
                </div>
            </div>

            <figure class="legacy-hero__mark">
                <img src="<?php echo esc_url($legacy_image_uri . '/legacy-mark-1961.png'); ?>" alt="Original Montebello-Ashiya Sister City Affiliation emblem used in the 2011 Legacy Book">
            </figure>
        </div>
    </section>

    <nav class="legacy-chapter-nav" aria-label="Legacy Book chapters">
        <div class="legacy-container legacy-chapter-nav__inner">
            <a href="#welcome">Welcome</a>
            <a href="#legacy-story">Forming the Friendship</a>
            <a href="#continuing">Continuing the Legacy</a>
            <a href="#leadership-record">Leadership Record</a>
            <a href="#gallery">Photo Archive</a>
        </div>
    </nav>

    <section class="legacy-section legacy-section--welcome" id="welcome">
        <div class="legacy-container legacy-reading-grid">
            <div class="legacy-section-heading">
                <p class="legacy-eyebrow">July 2011</p>
                <h2>A message to friends</h2>
            </div>

            <div class="legacy-prose">
                <p>Dear Friends,</p>
                <p>This year we are celebrating fifty years of friendship and cultural exchange between our beloved cities of Montebello, California and Ashiya, Japan. To honor this significant occasion, we are pleased to present <em>50 Years of Friendship: A Legacy Book</em>. This book is intended to honor our past and celebrate our future.</p>
                <p>We would like to thank all those who have contributed to the success of this project including Kerry Franco, Saya Yamaguchi, Yae Aihara, and all the student ambassadors who kindly shared their experiences with us.</p>
                <p class="legacy-signature">Sincerely,<br><strong>Marian Lopez</strong><br>50th Anniversary Chairperson</p>
            </div>
        </div>

        <div class="legacy-container legacy-feature-image">
            <img src="<?php echo esc_url($legacy_image_uri . '/anniversary-gatherings.png'); ?>" alt="Historic MASCA gatherings and anniversary celebrations featured in the 2011 Legacy Book">
        </div>

        <div class="legacy-container">
            <blockquote class="legacy-quote">
                <p>For me and for all previous and future ambassadors, the Sister City Association and our trip abroad provides a vehicle for understanding, something we must share with those around us here at home.</p>
                <p>This Association can facilitate furthering the US-Japan relationship from a partnership to a friendship - one defined by respect and a mutual desire to erase any lines now dividing us.</p>
                <cite>Marc Stad, 1996 Montebello Ambassador</cite>
            </blockquote>
        </div>
    </section>

    <section class="legacy-section legacy-section--story" id="legacy-story">
        <div class="legacy-container legacy-reading-grid">
            <div class="legacy-section-heading">
                <p class="legacy-eyebrow">Honoring Our Past</p>
                <h2>Forming the friendship</h2>
            </div>

            <div class="legacy-prose legacy-prose--long">
                <p>In September of 1959, the City of Montebello was honored by receiving an invitation to participate in the fifth biennial meeting of the Japan-American Conference of Mayors and Chamber of Commerce Officials. The conference, which was scheduled for the following November in Osaka, Japan, was seen by city officials as a forerunner to establishing a sister-city program. Recognizing the opportunity before them, the city committed to send Councilwoman Elaine Kirchner by establishing the “Send Elaine to Japan Fund.” With a $2,000 goal to cover travel expenses, the Montebello community responded in abundance. Contributions were collected due to the desire of the community to promote goodwill and understanding between two countries.</p>

                <p>During the conference, Mrs. Kirchner participated in a round table discussion of the “People to People” program, a 1956 initiative by President Dwight D. Eisenhower to establish cultural exchange programs. It was here that Mrs. Kirchner indicated Montebello’s interest in establishing a “Sister City” in Japan. As a result of her statements, Mrs. Kirchner was asked to participate in a press conference, which caught the attention of Mr. Hiroyasu Okuyama of Ashiya, Japan. On November 7, 1959, Mrs. Kirchner received a phone call in her hotel room from Mr. Okuyama. Anxious for his city to have an opportunity to affiliate with Montebello, Mr. Okuyama asked for Montebello’s consideration to establish Ashiya, Japan as its “Sister City.”</p>

                <p>Over the next several months, Mrs. Kirchner and Mr. Okuyama worked diligently to gather support from their respective cities. Committees were formed, resolutions were passed, and further dialogue and correspondence continued. By August of 1960, a partnership between the two cities was all but certain. A firm affiliation with the Lions Club of Ashiya and Montebello was established and solidified by exchanging Lions Club banners, furthering the cities’ intent for partnership.</p>

                <p>Additionally, the United States Information Agency and the School Affiliation Service of American Friend Service Committee approved arrangements and created a “pen pal” program for school affiliations between Yamate Elementary School of Ashiya and Greenwood Elementary of Montebello, and Ashiya High School and Montebello Junior High School.</p>

                <p>On May 24, 1961, a Sister City relationship was officially established between the City of Montebello and the City of Ashiya to promote cultural and industrial exchanges and further promote friendship and international goodwill between the United States of America and Japan. To further this lasting friendship between the cities, the Student Ambassador Exchange Program was initiated in 1964. The Ambassador program has enabled the “Sister Cities” to continue its relationship and will carry on its legacy.</p>
            </div>
        </div>

        <figure class="legacy-container legacy-archive-figure">
            <img src="<?php echo esc_url($legacy_image_uri . '/forming-the-friendship-collage.png'); ?>" alt="Archival collage documenting the formation of the Montebello-Ashiya sister-city relationship">
            <figcaption>Archival material from the original 2011 Legacy Book documenting the early years of the sister-city relationship.</figcaption>
        </figure>
    </section>

    <section class="legacy-section legacy-section--continuing" id="continuing">
        <div class="legacy-container legacy-reading-grid">
            <div class="legacy-section-heading">
                <p class="legacy-eyebrow">Celebrating Our Future</p>
                <h2>Continuing our legacy</h2>
            </div>

            <div class="legacy-prose">
                <p>The Montebello Ashiya Sister City Affiliation Association continues to thrive in the City of Montebello because of the commitment of its community members. The association has benefited from the invaluable support of the Montebello City Council Members, Montebello Rotary, Montebello Soroptimists, Montebello Lions, Montebello Chambers of Commerce and especially association members, ambassadors and their families.</p>
                <p>The Montebello community is proud of our relationship with our friends in Ashiya. We hope to continue our program and look forward to strengthening our partnership to see us through for the next 50 years.</p>
                <p class="legacy-statement">We are the legacy.</p>
            </div>
        </div>
    </section>

    <section class="legacy-section legacy-section--leaders" id="leadership-record">
        <div class="legacy-container">
            <div class="legacy-record-header">
                <p class="legacy-eyebrow">Historical Record</p>
                <h2>Leaders who carried the friendship forward</h2>
                <p>The names below are reproduced from the 2011 Legacy Book in the order in which they appeared.</p>
            </div>

            <div class="legacy-record-grid">
                <article class="legacy-record-card">
                    <h3>Presidents of the Montebello-Ashiya Sister City Association</h3>
                    <ol class="legacy-name-list">
                        <?php foreach ($masca_presidents as $president) : ?>
                            <li><?php echo esc_html($president); ?></li>
                        <?php endforeach; ?>
                    </ol>
                </article>

                <article class="legacy-record-card">
                    <h3>Presidents of the Ashiya Cosmopolitan Association (ACA)</h3>
                    <ol class="legacy-name-list">
                        <?php foreach ($aca_presidents as $president) : ?>
                            <li><?php echo esc_html($president); ?></li>
                        <?php endforeach; ?>
                    </ol>
                </article>
            </div>
        </div>
    </section>

    <section class="legacy-section legacy-section--gallery" id="gallery">
        <div class="legacy-container legacy-gallery-header">
            <p class="legacy-eyebrow">Photo Archive</p>
            <h2>Friendship across generations</h2>
            <p>These collages appeared in the original book as a visual record of ambassadors, host families, community gatherings and shared experiences.</p>
        </div>

        <div class="legacy-container legacy-gallery">
            <figure>
                <img src="<?php echo esc_url($legacy_image_uri . '/ambassador-memories-left.jpg'); ?>" alt="Legacy Book collage of student ambassadors, host families and Montebello-Ashiya exchange activities">
            </figure>
            <figure>
                <img src="<?php echo esc_url($legacy_image_uri . '/ambassador-memories-right.jpg'); ?>" alt="Legacy Book collage showing student ambassador visits, ceremonies and cultural exchange events">
            </figure>
        </div>
    </section>

    <section class="legacy-download">
        <div class="legacy-container legacy-download__inner">
            <div>
                <p class="legacy-eyebrow">Original Publication</p>
                <h2>Read the book as it appeared in 2011</h2>
                <p>The downloadable PDF preserves the original six-page publication, including its typography, page composition and archival imagery.</p>
            </div>
            <a class="legacy-button legacy-button--light" href="<?php echo esc_url($legacy_pdf_uri); ?>" target="_blank" rel="noopener noreferrer">Download the Legacy Book PDF</a>
        </div>
    </section>
</main>

<?php get_footer(); ?>
