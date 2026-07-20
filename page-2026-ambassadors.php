<?php

if (!defined('ABSPATH')) {
    exit;
}

get_header();

$theme_uri = get_template_directory_uri();
$ambassadors = [
    [
        'name'  => 'Maximus Almeida',
        'image' => 'MaximusAlmeida.png',
        'role'  => 'Student Ambassador',
        'biography' => 'Hello, my name is Maximus Almeida. I am 16 years ' .
            'old and in my second year of high school. I live with my ' .
            'mother and father in Montebello, and my older brother lives ' .
            'in San Diego. I enjoy video games and am a member of my high ' .
            'school’s video gaming club. I am also taking engineering ' .
            'classes and enjoy building robots. I like LEGO and spending ' .
            'time with my friends. I am interested in trying all kinds of ' .
            'Japanese food and want to try everything! I’m also interested ' .
            'in fashion and hope to bring back some cool clothes. I want ' .
            'to visit Universal Studios, a Christian church, and the ACA, ' .
            'as well as meet Ashiya City officials. I am looking forward ' .
            'to seeing my friends and making new ones. I can’t wait to ' .
            'see you!',
    ],
    [
        'name'  => 'Daniel Nagata',
        'image' => 'DanielNagata.png',
        'role'  => 'Student Ambassador',
        'biography' => [
            'My name is Daniel Nagata. I am 18 years old and a recent ' .
                'graduate of Gabrielino High School. In the fall, I plan ' .
                'on attending Loyola Marymount University studying ' .
                'International Relations and Film. I am a 5th generation ' .
                'Japanese American. I live in Montebello with my father, ' .
                'mother, brother Kai (16), and sister Kimiko (16). ' .
                'Throughout high school, I have pursued many opportunities ' .
                'including being a Varsity Cross Country Captain, a ' .
                'Varsity Basketball player, a Varsity Track and Field ' .
                'distance runner as well serving in student government as ' .
                'ASB Senior Vice President. Outside of school, I create ' .
                'lifestyle content on social media focused on travel, fun, ' .
                'and well-being.',
            'My international experience with the Yonsei Basketball ' .
                'Association in Fukuoka, Japan and the Project Bridge Youth ' .
                'Ambassador Program in South Korea has strengthened my ' .
                'resilience and cross-cultural understanding. As a MASCA ' .
                'Student Ambassador, I look forward to contributing that ' .
                'dedication to the program that has lasted 65 years. ' ,
            'I would like to visit Universal Studios, visit Hiroshima, ' .
                'where my grandmother grew up, meet Ashiya city officials, ' .
                'meet former ambassadors, and eat delicious Japanese food. ' .
                'I can\'t wait to visit all the konbinis too! This is such ' .
                'an honor. Thank you to everyone for their support!',
        ],
    ],
    [
        'name'  => 'Miya Espinoza',
        'image' => 'MiyaEspinoza.png',
        'role'  => 'Host Ambassador',
        'biography' => 'Hello, I am Miya Rose Espinoza. I am a junior in ' .
            'high school and attend an arts school in downtown Los Angeles, ' .
            'where I am part of the visual arts academy. I am the vice ' .
            'captain of the women’s fencing épée team, and I am also a ' .
            'member of the Dungeons & Dragons club. I live with my dad and ' .
            'my two younger siblings, Alè and Lucas. Some of my hobbies ' .
            'include sewing, painting, playing video games, singing, ' .
            'playing the piano, and learning the accordion. I love musical ' .
            'theater. I am learning Japanese and am currently in my second ' .
            'year of language classes. I look forward to getting to know ' .
            'you and showing you around Montebello.',
    ],
    [
        'name'  => 'Felix Rodriguez',
        'image' => 'FelixRodriguez.png',
        'role'  => 'Host Ambassador',
        'biography' => 'My name is Felix Rodriguez. I am currently 17 years ' .
            'old and have lived in Montebello for five years. I live with ' .
            'my mom and my sister, Melody. I’ve moved several times ' .
            'throughout my life to places such as San Pedro, Menifee, and, ' .
            'of course, Montebello. Some hobbies I really enjoy include ' .
            'playing the oboe and saxophone, watching the Sunday car ' .
            'parades here in Montebello, playing video games in my free ' .
            'time, and singing along to music I like. I participate in ' .
            'marching band, jazz band, and winter guard, so I am very ' .
            'involved in the performing arts at my school. I can’t wait ' .
            'to meet the ambassadors from Ashiya. I’d love to learn as ' .
            'much as I can from both of them, including more about their ' .
            'hobbies and families.',
    ],
];
?>

<main id="main-content">
<article class="ambassadors-page">
    <header class="standard-page__header">
        <div class="site-container standard-page__header-inner">
            <p class="section-label">
                Student Ambassador Exchange
            </p>

            <h1 class="standard-page__title">
                Meet the 2026 Ambassadors
            </h1>
        </div>
    </header>

    <div class="site-container ambassadors-page__profiles">
        <?php foreach ($ambassadors as $ambassador) : ?>
            <section class="ambassador-profile">
                <figure class="ambassador-profile__media">
                    <img
                        src="<?php echo esc_url(
                            $theme_uri .
                            '/assets/images/ambassadors/' .
                            $ambassador['image']
                        ); ?>"
                        alt="<?php echo esc_attr($ambassador['name']); ?>"
                        width="600"
                        height="750"
                        loading="lazy"
                        decoding="async"
                    >
                </figure>

                <div class="ambassador-profile__content">
                    <p class="section-label">
                        2026 <?php echo esc_html($ambassador['role']); ?>
                    </p>
                    <h2><?php echo esc_html($ambassador['name']); ?></h2>

                    <?php
                    $biography = $ambassador['biography'] ??
                        'Biography coming soon.';
                    $biography_paragraphs = is_array($biography)
                        ? $biography
                        : [$biography];
                    ?>
                    <?php foreach ($biography_paragraphs as $paragraph) : ?>
                        <p class="ambassador-profile__biography">
                            <?php echo esc_html($paragraph); ?>
                        </p>
                    <?php endforeach; ?>
                </div>
            </section>
        <?php endforeach; ?>
    </div>
</article>
</main>

<?php get_footer(); ?>
