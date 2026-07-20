<?php
/**
 * Leadership page template.
 * WordPress loads this file automatically for a page with the slug "leadership".
 */

get_header();

$leadership_image_path = get_stylesheet_directory_uri() . '/assets/images/leadership';
$leaders = [
    [
        'name'     => 'Emma Duran',
        'position' => 'President',
        'image'    => 'emma-duran.png',
        'alt'      => 'Portrait of Emma Duran, MASCA President',
    ],
    [
        'name'     => 'Andy Amamoto',
        'position' => 'Vice President',
        'image'    => 'andy-amamoto.jpg',
        'alt'      => 'Portrait of Andy Amamoto, MASCA Vice President',
    ],
    [
        'name'     => 'Jessica Almeida',
        'position' => 'Secretary',
        'image'    => 'jessica-almeida.jpg',
        'alt'      => 'Portrait of Jessica Almeida, MASCA Secretary',
    ],
    [
        'name'     => 'Cristian Herrera',
        'position' => 'Treasurer',
        'image'    => 'cristian-herrera.jpg',
        'alt'      => 'Portrait of Cristian Herrera, MASCA Treasurer',
    ],
    [
        'name'     => 'Dr. Carlos Haro',
        'position' => 'Member at Large',
        'image'    => 'carlos-haro.jpg',
        'alt'      => 'Portrait of Dr. Carlos Haro, MASCA Member at Large',
    ],
];
?>

<main id="main-content" class="masca-leadership-page">
    <section class="leadership-intro" aria-labelledby="leadership-title">
        <div class="leadership-container leadership-intro__inner">
            <p class="leadership-eyebrow">About MASCA</p>
            <h1 id="leadership-title">Our Leadership</h1>
            <p class="leadership-intro__copy">
                MASCA is guided by community leaders committed to sustaining the friendship between
                Montebello and Ashiya through cultural exchange, student opportunity, and meaningful
                connections across generations.
            </p>
        </div>
    </section>

    <section class="leadership-roster" aria-label="MASCA leadership team">
        <div class="leadership-container">
            <div class="leadership-grid">
                <?php foreach ($leaders as $leader) : ?>
                    <article class="leader-card">
                        <div class="leader-card__image-wrap">
                            <img
                                class="leader-card__image"
                                src="<?php echo esc_url($leadership_image_path . '/' . $leader['image']); ?>"
                                alt="<?php echo esc_attr($leader['alt']); ?>"
                                loading="lazy"
                                decoding="async"
                            >
                        </div>
                        <div class="leader-card__content">
                            <p class="leader-card__position"><?php echo esc_html($leader['position']); ?></p>
                            <h2 class="leader-card__name"><?php echo esc_html($leader['name']); ?></h2>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
