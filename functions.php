<?php

if (!defined('ABSPATH')) {
    exit;
}

function masca_custom_setup(): void
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo', [
        'height'      => 120,
        'width'       => 300,
        'flex-height' => true,
        'flex-width'  => true,
    ]);

    add_theme_support('html5', [
        'search-form',
        'gallery',
        'caption',
        'style',
        'script',
    ]);

    register_nav_menus([
        'primary' => __('Primary Navigation', 'masca-custom'),
        'footer'  => __('Footer Navigation', 'masca-custom'),
    ]);
}
add_action('after_setup_theme', 'masca_custom_setup');

function masca_custom_page_definitions(): array
{
    return [
        'what-is-masca' => [
            'title'   => 'What is MASCA?',
            'aliases' => ['about-us'],
        ],
        'our-history' => [
            'title'   => 'Our History',
            'aliases' => ['history'],
        ],
        'meet-our-leaders' => [
            'title'   => 'Meet Our Leaders',
            'aliases' => ['leadership'],
        ],
        'donate' => [
            'title'   => 'How to Join or Donate',
            'aliases' => [
                'join-or-donate',
                'how-to-join-or-donate',
            ],
        ],
        'ambassador-program' => [
            'title'   => 'Ambassador Program',
            'aliases' => [],
        ],
        'application' => [
            'title'   => 'Application',
            'aliases' => [],
        ],
        'galleries' => [
            'title'   => 'Galleries',
            'aliases' => [],
        ],
        'legacy-book' => [
            'title'   => 'Legacy Book',
            'aliases' => [],
        ],
        'community-exchange' => [
            'title'   => 'Community Exchange',
            'aliases' => [],
        ],
        'past-student-ambassadors' => [
            'title'   => 'Past Student Ambassadors',
            'aliases' => ['past-ambassadors'],
        ],
        'scholarships' => [
            'title'   => 'Scholarships',
            'aliases' => [],
        ],
        'contact-us' => [
            'title'   => 'Contact Us',
            'aliases' => ['contact'],
        ],
    ];
}

function masca_custom_find_page(string $slug): ?WP_Post
{
    $definitions = masca_custom_page_definitions();

    if (!isset($definitions[$slug])) {
        return null;
    }

    $definition = $definitions[$slug];
    $paths = array_merge([$slug], $definition['aliases']);

    foreach ($paths as $path) {
        $page = get_page_by_path($path, OBJECT, 'page');

        if ($page instanceof WP_Post) {
            return $page;
        }
    }

    $matching_pages = get_posts([
        'post_type'        => 'page',
        'post_status'      => get_post_stati(),
        'title'            => $definition['title'],
        'posts_per_page'   => 1,
        'suppress_filters' => true,
    ]);

    return $matching_pages[0] ?? null;
}

function masca_custom_page_url(string $slug): string
{
    $page = masca_custom_find_page($slug);

    if ($page instanceof WP_Post) {
        return (string) get_permalink($page);
    }

    return home_url('/' . trim($slug, '/') . '/');
}

function masca_custom_create_missing_pages(): void
{
    foreach (masca_custom_page_definitions() as $slug => $definition) {
        if (masca_custom_find_page($slug) instanceof WP_Post) {
            continue;
        }

        wp_insert_post([
            'post_type'    => 'page',
            'post_status'  => 'publish',
            'post_title'   => $definition['title'],
            'post_name'    => $slug,
            'post_content' => '',
        ], true);
    }
}
add_action('after_switch_theme', 'masca_custom_create_missing_pages');

function masca_custom_remove_nonexistent_menu_items(
    array $items,
    stdClass $args
): array
{
    $items = array_values(array_filter(
        $items,
        static function ($item): bool {
            $title = sanitize_title(wp_strip_all_tags($item->title ?? ''));
            $path = wp_parse_url($item->url ?? '', PHP_URL_PATH);
            $excluded_items = [
                'other-programs',
                'adult-exchange',
                'past-events',
                'news',
            ];
            $normalized_path = ltrim(
                untrailingslashit((string) $path),
                '/'
            );

            return !in_array($title, $excluded_items, true) &&
                !in_array($normalized_path, $excluded_items, true);
        }
    ));

    $destinations = [
        'home'                     => '',
        'what-is-masca'            => 'what-is-masca',
        'our-history'              => 'our-history',
        'meet-our-leaders'         => 'meet-our-leaders',
        'how-to-join-or-donate'    => 'donate',
        'ambassador-program'       => 'ambassador-program',
        'application'              => 'application',
        'galleries'                => 'galleries',
        'legacy-book'              => 'legacy-book',
        'community-exchange'       => 'community-exchange',
        'past-student-ambassadors' => 'past-student-ambassadors',
        'scholarships'             => 'scholarships',
        'contact-us'               => 'contact-us',
    ];

    foreach ($items as $item) {
        $label = sanitize_title(wp_strip_all_tags($item->title ?? ''));

        if (!array_key_exists($label, $destinations)) {
            continue;
        }

        $slug = $destinations[$label];
        $item->url = $slug === ''
            ? home_url('/')
            : masca_custom_page_url($slug);
    }

    if (($args->theme_location ?? '') === 'primary') {
        $ambassador_item = null;
        $ambassadors_2026_item = null;
        $legacy_book_item = null;
        $community_exchange_item = null;
        $scholarship_item = null;

        foreach ($items as $item) {
            $label = sanitize_title(
                wp_strip_all_tags($item->title ?? '')
            );

            if ($label === 'ambassador-program') {
                $ambassador_item = $item;
            } elseif ($label === '2026-ambassadors') {
                $ambassadors_2026_item = $item;
            } elseif ($label === 'legacy-book') {
                $legacy_book_item = $item;
            } elseif ($label === 'community-exchange') {
                $community_exchange_item = $item;
            } elseif (in_array(
                $label,
                ['scholarship', 'scholarships'],
                true
            )) {
                $scholarship_item = $item;
            }
        }

        if ($ambassador_item) {
            $ambassadors_page = get_page_by_path(
                '2026-ambassadors',
                OBJECT,
                'page'
            );
            $ambassadors_url = $ambassadors_page instanceof WP_Post
                ? (string) get_permalink($ambassadors_page)
                : home_url('/2026-ambassadors/');
            $is_current_ambassadors_page = is_page(
                '2026-ambassadors'
            );

            if (!$ambassadors_2026_item) {
                $ambassadors_2026_item = (object) [
                    'ID'               => -2026,
                    'db_id'            => 0,
                    'menu_item_parent' => '',
                    'object_id'        => $ambassadors_page instanceof WP_Post
                        ? $ambassadors_page->ID
                        : 0,
                    'object'           => 'page',
                    'type'             => 'post_type',
                    'type_label'       => __('Page', 'masca-custom'),
                    'title'            => '2026 Ambassadors',
                    'url'              => $ambassadors_url,
                    'target'           => '',
                    'attr_title'       => '',
                    'description'      => '',
                    'classes'          => [
                        'menu-item',
                        'menu-item-type-post_type',
                        'menu-item-object-page',
                    ],
                    'xfn'              => '',
                    'status'           => 'publish',
                    'current'          => $is_current_ambassadors_page,
                    'current_item_ancestor' => false,
                    'current_item_parent'   => false,
                ];
            }

            $ambassadors_2026_item->title = '2026 Ambassadors';
            $ambassadors_2026_item->url = $ambassadors_url;
            $ambassadors_2026_item->current =
                $is_current_ambassadors_page;
            $ambassadors_2026_item->menu_item_parent =
                (string) $ambassador_item->ID;

            $items = array_values(array_filter(
                $items,
                static fn($item): bool =>
                    $item !== $ambassadors_2026_item
            ));

            $ambassador_index = array_search(
                $ambassador_item,
                $items,
                true
            );

            if ($ambassador_index !== false) {
                array_splice(
                    $items,
                    $ambassador_index + 1,
                    0,
                    [$ambassadors_2026_item]
                );
            }
        }

        if ($ambassador_item) {
            $community_exchange_page = masca_custom_find_page(
                'community-exchange'
            );
            $community_exchange_url = $community_exchange_page instanceof WP_Post
                ? (string) get_permalink($community_exchange_page)
                : home_url('/community-exchange/');
            $is_current_community_exchange_page = is_page(
                'community-exchange'
            );

            if (!$community_exchange_item) {
                $community_exchange_item = (object) [
                    'ID'               => -2027,
                    'db_id'            => 0,
                    'menu_item_parent' => '',
                    'object_id'        => $community_exchange_page instanceof WP_Post
                        ? $community_exchange_page->ID
                        : 0,
                    'object'           => 'page',
                    'type'             => 'post_type',
                    'type_label'       => __('Page', 'masca-custom'),
                    'title'            => 'Community Exchange',
                    'url'              => $community_exchange_url,
                    'target'           => '',
                    'attr_title'       => '',
                    'description'      => '',
                    'classes'          => [
                        'menu-item',
                        'menu-item-type-post_type',
                        'menu-item-object-page',
                    ],
                    'xfn'              => '',
                    'status'           => 'publish',
                    'current'          => $is_current_community_exchange_page,
                    'current_item_ancestor' => false,
                    'current_item_parent'   => false,
                ];
            }

            $community_exchange_item->title = 'Community Exchange';
            $community_exchange_item->url = $community_exchange_url;
            $community_exchange_item->current =
                $is_current_community_exchange_page;
            $community_exchange_item->menu_item_parent =
                (string) $ambassador_item->ID;

            $items = array_values(array_filter(
                $items,
                static fn($item): bool =>
                    $item !== $community_exchange_item
            ));

            $legacy_book_index = $legacy_book_item
                ? array_search($legacy_book_item, $items, true)
                : false;

            if ($legacy_book_index !== false) {
                $insert_at = $legacy_book_index + 1;
            } else {
                $last_child_index = null;

                foreach ($items as $index => $item) {
                    if (
                        (string) $item->menu_item_parent ===
                        (string) $ambassador_item->ID
                    ) {
                        $last_child_index = $index;
                    }
                }

                $ambassador_index = array_search(
                    $ambassador_item,
                    $items,
                    true
                );
                $insert_at = $last_child_index === null
                    ? $ambassador_index + 1
                    : $last_child_index + 1;
            }

            array_splice(
                $items,
                $insert_at,
                0,
                [$community_exchange_item]
            );
        }

        if ($ambassador_item && $scholarship_item) {
            $scholarship_item->title = 'Scholarship';
            $scholarship_item->menu_item_parent =
                (string) $ambassador_item->ID;

            $items = array_values(array_filter(
                $items,
                static fn($item): bool =>
                    $item !== $scholarship_item
            ));

            $last_child_index = null;

            foreach ($items as $index => $item) {
                if (
                    (string) $item->menu_item_parent ===
                    (string) $ambassador_item->ID
                ) {
                    $last_child_index = $index;
                }
            }

            $insert_at = $last_child_index === null
                ? array_search($ambassador_item, $items, true) + 1
                : $last_child_index + 1;

            array_splice(
                $items,
                $insert_at,
                0,
                [$scholarship_item]
            );
        }
    }

    return $items;
}
add_filter(
    'wp_nav_menu_objects',
    'masca_custom_remove_nonexistent_menu_items',
    10,
    2
);

function masca_custom_enqueue_assets(): void
{
    $main_style_path = get_theme_file_path('/assets/css/main.css');
    $main_script_path = get_theme_file_path('/assets/js/main.js');

    wp_enqueue_style(
        'masca-custom-fonts',
        'https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;500;600&family=Manrope:wght@400;500;600;700&display=swap',
        [],
        null
    );

    wp_enqueue_style(
        'masca-custom-main',
        get_theme_file_uri('/assets/css/main.css'),
        ['masca-custom-fonts'],
        file_exists($main_style_path) ? filemtime($main_style_path) : null
    );

    wp_enqueue_script(
        'masca-custom-main',
        get_theme_file_uri('/assets/js/main.js'),
        [],
        file_exists($main_script_path) ? filemtime($main_script_path) : null,
        true
    );

    wp_localize_script(
  'masca-custom-main',
  'mascaTheme',
  array(
    'themeUrl' => get_theme_file_uri(),
    'homeUrl'  => home_url('/'),
  )
);
}
add_action('wp_enqueue_scripts', 'masca_custom_enqueue_assets');

/**
 * Establish early connections only for the two hosts used by Google Fonts.
 */
function masca_custom_resource_hints(array $urls, string $relation_type): array
{
    if ($relation_type !== 'preconnect') {
        return $urls;
    }

    $urls[] = 'https://fonts.googleapis.com';
    $urls[] = [
        'href'        => 'https://fonts.gstatic.com',
        'crossorigin' => 'anonymous',
    ];

    return $urls;
}
add_filter('wp_resource_hints', 'masca_custom_resource_hints', 10, 2);

/**
 * Theme scripts are footer-safe and do not use document.write.
 */
function masca_custom_defer_theme_scripts(string $tag, string $handle): string
{
    $deferred_handles = [
        'masca-custom-main',
        'masca-history',
        'masca-events',
    ];

    if (!in_array($handle, $deferred_handles, true) || strpos($tag, ' defer') !== false) {
        return $tag;
    }

    return str_replace(' src=', ' defer src=', $tag);
}
add_filter('script_loader_tag', 'masca_custom_defer_theme_scripts', 10, 2);

/**
 * Contact Form 7 is only rendered by the Contact Us template.
 */
function masca_custom_limit_contact_form_assets(): void
{
    if (is_page(['contact-us', 'contact'])) {
        return;
    }

    wp_dequeue_style('contact-form-7');
    wp_dequeue_script('contact-form-7');
}
add_action('wp_enqueue_scripts', 'masca_custom_limit_contact_form_assets', 100);

function masca_enqueue_history_page_assets() {
    if (!is_page_template('template-history.php')) {
        return;
    }

    $theme_version = wp_get_theme()->get('Version');

    wp_enqueue_style(
        'masca-history',
        get_stylesheet_directory_uri() . '/assets/css/history.css',
        array(),
        $theme_version
    );

    wp_enqueue_script(
        'masca-history',
        get_stylesheet_directory_uri() . '/assets/js/history.js',
        array(),
        $theme_version,
        true
    );
}
add_action('wp_enqueue_scripts', 'masca_enqueue_history_page_assets');

function masca_enqueue_leadership_assets() {
    if (is_page(['leadership', 'meet-our-leaders'])) {
        wp_enqueue_style(
            'masca-leadership',
            get_stylesheet_directory_uri() . '/assets/css/leadership.css',
            [],
            filemtime(get_stylesheet_directory() . '/assets/css/leadership.css')
        );
    }
}
add_action('wp_enqueue_scripts', 'masca_enqueue_leadership_assets');

function masca_enqueue_past_ambassadors_assets() {
    if (is_page(['past-ambassadors', 'past-student-ambassadors'])) {
        wp_enqueue_style(
            'masca-past-ambassadors',
            get_template_directory_uri() . '/assets/css/past-ambassadors.css',
            [],
            wp_get_theme()->get('Version')
        );
    }
}
add_action('wp_enqueue_scripts', 'masca_enqueue_past_ambassadors_assets');

function masca_enqueue_donate_page_assets() {
    if (is_page('donate')) {
        wp_enqueue_style(
            'masca-donate-page',
            get_template_directory_uri() . '/assets/css/donate.css',
            array(),
            filemtime(get_template_directory() . '/assets/css/donate.css')
        );
    }
}
add_action('wp_enqueue_scripts', 'masca_enqueue_donate_page_assets');

function masca_enqueue_legacybook_assets() {
    if ( is_page( [ 'legacybook', 'legacy-book' ] ) ) {
        wp_enqueue_style(
            'masca-legacybook',
            get_template_directory_uri() . '/assets/css/legacybook.css',
            [],
            wp_get_theme()->get( 'Version' )
        );
    }
}
add_action( 'wp_enqueue_scripts', 'masca_enqueue_legacybook_assets' );

function masca_enqueue_ambassador_program_assets() {
    if ( is_page( 'ambassador-program' ) ) {
        wp_enqueue_style(
            'masca-ambassador-program',
            get_template_directory_uri() . '/assets/css/ambassador-program.css',
            array(),
            wp_get_theme()->get( 'Version' )
        );
    }
}
add_action( 'wp_enqueue_scripts', 'masca_enqueue_ambassador_program_assets' );

function masca_enqueue_application_assets() {
    if ( is_page( 'application' ) ) {
        wp_enqueue_style(
            'masca-application',
            get_template_directory_uri() . '/assets/css/application.css',
            [],
            wp_get_theme()->get( 'Version' )
        );
    }
}
add_action( 'wp_enqueue_scripts', 'masca_enqueue_application_assets' );

function masca_enqueue_scholarships_assets() {
    if ( is_page( 'scholarships' ) ) {
        wp_enqueue_style(
            'masca-scholarships',
            get_template_directory_uri() . '/assets/css/scholarships.css',
            array(),
            wp_get_theme()->get( 'Version' )
        );
    }
}
add_action( 'wp_enqueue_scripts', 'masca_enqueue_scholarships_assets' );

function masca_enqueue_contact_assets() {
    if (is_page(['contact-us', 'contact'])) {
        $stylesheet_path = get_template_directory() . '/assets/css/contact.css';
        $stylesheet_version = file_exists($stylesheet_path)
            ? filemtime($stylesheet_path)
            : wp_get_theme()->get('Version');

        wp_enqueue_style(
            'masca-contact',
            get_template_directory_uri() . '/assets/css/contact.css',
            array(),
            $stylesheet_version
        );
    }
}
add_action('wp_enqueue_scripts', 'masca_enqueue_contact_assets');

function masca_register_gallery_post_type() {
    $labels = array(
        'name'                  => 'Galleries',
        'singular_name'         => 'Gallery',
        'menu_name'             => 'Galleries',
        'name_admin_bar'        => 'Gallery',
        'add_new'               => 'Add New',
        'add_new_item'          => 'Add New Gallery',
        'new_item'              => 'New Gallery',
        'edit_item'             => 'Edit Gallery',
        'view_item'             => 'View Gallery',
        'all_items'             => 'All Galleries',
        'search_items'          => 'Search Galleries',
        'not_found'             => 'No galleries found.',
        'not_found_in_trash'    => 'No galleries found in Trash.',
        'featured_image'        => 'Gallery Cover Image',
        'set_featured_image'    => 'Set Gallery Cover Image',
        'remove_featured_image' => 'Remove Gallery Cover Image',
        'use_featured_image'    => 'Use as Gallery Cover Image',
    );

    register_post_type(
        'masca_gallery',
        array(
            'labels'             => $labels,
            'public'             => true,
            'show_in_rest'       => true,
            'menu_icon'          => 'dashicons-format-gallery',
            'supports'           => array(
                'title',
                'editor',
                'excerpt',
                'thumbnail',
                'page-attributes',
            ),
            'has_archive'        => 'galleries',
            'rewrite'            => array(
                'slug'       => 'galleries',
                'with_front' => false,
            ),
            'show_in_nav_menus'  => true,
            'publicly_queryable' => true,
        )
    );
}
add_action( 'init', 'masca_register_gallery_post_type' );

function masca_enqueue_gallery_assets() {
    if (
        is_post_type_archive( 'masca_gallery' ) ||
        is_singular( 'masca_gallery' )
    ) {
        wp_enqueue_style(
            'masca-galleries',
            get_template_directory_uri() . '/assets/css/galleries.css',
            array(),
            wp_get_theme()->get( 'Version' )
        );
    }
}
add_action( 'wp_enqueue_scripts', 'masca_enqueue_gallery_assets' );

function masca_register_events_content() {
    register_post_type(
        'masca_event',
        array(
            'labels' => array(
                'name'               => 'Events',
                'singular_name'      => 'Event',
                'menu_name'          => 'Events',
                'add_new'            => 'Add New',
                'add_new_item'       => 'Add New Event',
                'edit_item'          => 'Edit Event',
                'new_item'           => 'New Event',
                'view_item'          => 'View Event',
                'all_items'          => 'All Events',
                'search_items'       => 'Search Events',
                'not_found'          => 'No events found.',
                'featured_image'     => 'Event Flyer or Featured Image',
                'set_featured_image' => 'Set Event Flyer or Featured Image',
            ),
            'public'             => true,
            'show_in_rest'       => true,
            'menu_icon'          => 'dashicons-calendar-alt',
            'supports'           => array('title', 'editor', 'excerpt', 'thumbnail', 'revisions'),
            'has_archive'        => false,
            'rewrite'            => array('slug' => 'events', 'with_front' => false),
            'publicly_queryable' => true,
            'show_in_nav_menus'  => true,
        )
    );

    register_taxonomy(
        'masca_event_type',
        'masca_event',
        array(
            'labels' => array(
                'name'          => 'Event Types',
                'singular_name' => 'Event Type',
                'menu_name'     => 'Event Types',
                'add_new_item'  => 'Add New Event Type',
                'edit_item'     => 'Edit Event Type',
            ),
            'public'            => true,
            'show_in_rest'      => true,
            'hierarchical'      => true,
            'show_admin_column' => true,
            'rewrite'           => array('slug' => 'event-type', 'with_front' => false),
        )
    );
}
add_action('init', 'masca_register_events_content');

function masca_seed_event_types() {
    if (get_option('masca_event_types_seeded')) {
        return;
    }

    foreach (array(
        'Student Exchange',
        'Community Event',
        'Board Meeting',
        'Cultural Program',
        'Anniversary',
    ) as $type) {
        if (!term_exists($type, 'masca_event_type')) {
            wp_insert_term($type, 'masca_event_type');
        }
    }

    update_option('masca_event_types_seeded', 1);
}
add_action('init', 'masca_seed_event_types', 20);

function masca_add_event_details_box() {
    add_meta_box(
        'masca_event_details',
        'Event Details',
        'masca_render_event_details_box',
        'masca_event',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'masca_add_event_details_box');

function masca_render_event_details_box($post) {
    wp_nonce_field('masca_save_event_details', 'masca_event_nonce');

    $start_date       = get_post_meta($post->ID, '_masca_start_date', true);
    $start_time       = get_post_meta($post->ID, '_masca_start_time', true);
    $end_date         = get_post_meta($post->ID, '_masca_end_date', true);
    $end_time         = get_post_meta($post->ID, '_masca_end_time', true);
    $all_day          = get_post_meta($post->ID, '_masca_all_day', true);
    $location         = get_post_meta($post->ID, '_masca_location', true);
    $registration_url = get_post_meta($post->ID, '_masca_registration_url', true);
    $maps_url         = get_post_meta($post->ID, '_masca_maps_url', true);
    $gallery_id       = (int) get_post_meta($post->ID, '_masca_gallery_id', true);
    $featured         = get_post_meta($post->ID, '_masca_featured_event', true);

    $galleries = get_posts(array(
        'post_type'      => 'masca_gallery',
        'post_status'    => 'publish',
        'posts_per_page' => -1,
        'orderby'        => 'title',
        'order'          => 'ASC',
    ));
    ?>
    <style>
        .masca-event-fields{display:grid;grid-template-columns:repeat(2,minmax(0,1fr));gap:18px 22px}
        .masca-event-fields .full{grid-column:1/-1}
        .masca-event-fields label{display:block;margin-bottom:6px;font-weight:600}
        .masca-event-fields input[type="text"],
        .masca-event-fields input[type="url"],
        .masca-event-fields input[type="date"],
        .masca-event-fields input[type="time"],
        .masca-event-fields select{width:100%}
        @media(max-width:782px){.masca-event-fields{grid-template-columns:1fr}.masca-event-fields .full{grid-column:auto}}
    </style>

    <div class="masca-event-fields">
        <div>
            <label for="masca_start_date">Start Date *</label>
            <input type="date" id="masca_start_date" name="masca_start_date" value="<?php echo esc_attr($start_date); ?>" required>
        </div>

        <div>
            <label for="masca_start_time">Start Time</label>
            <input type="time" id="masca_start_time" name="masca_start_time" value="<?php echo esc_attr($start_time); ?>">
        </div>

        <div>
            <label for="masca_end_date">End Date</label>
            <input type="date" id="masca_end_date" name="masca_end_date" value="<?php echo esc_attr($end_date); ?>">
            <p class="description">Use this for multi-day events.</p>
        </div>

        <div>
            <label for="masca_end_time">End Time</label>
            <input type="time" id="masca_end_time" name="masca_end_time" value="<?php echo esc_attr($end_time); ?>">
        </div>

        <div class="full">
            <label><input type="checkbox" name="masca_all_day" value="1" <?php checked($all_day, '1'); ?>> All-day event</label>
        </div>

        <div class="full">
            <label for="masca_location">Location</label>
            <input type="text" id="masca_location" name="masca_location" value="<?php echo esc_attr($location); ?>">
        </div>

        <div>
            <label for="masca_registration_url">Registration / RSVP Link</label>
            <input type="url" id="masca_registration_url" name="masca_registration_url" value="<?php echo esc_url($registration_url); ?>" placeholder="https://">
        </div>

        <div>
            <label for="masca_maps_url">Directions / Google Maps Link</label>
            <input type="url" id="masca_maps_url" name="masca_maps_url" value="<?php echo esc_url($maps_url); ?>" placeholder="https://">
        </div>

        <div class="full">
            <label for="masca_gallery_id">Related Gallery</label>
            <select id="masca_gallery_id" name="masca_gallery_id">
                <option value="">No related gallery</option>
                <?php foreach ($galleries as $gallery) : ?>
                    <option value="<?php echo esc_attr($gallery->ID); ?>" <?php selected($gallery_id, $gallery->ID); ?>>
                        <?php echo esc_html($gallery->post_title); ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="full">
            <label><input type="checkbox" name="masca_featured_event" value="1" <?php checked($featured, '1'); ?>> Feature this event</label>
        </div>
    </div>
    <?php
}

function masca_save_event_details($post_id) {
    if (
        !isset($_POST['masca_event_nonce']) ||
        !wp_verify_nonce(
            sanitize_text_field(wp_unslash($_POST['masca_event_nonce'])),
            'masca_save_event_details'
        )
    ) {
        return;
    }

    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    foreach (array(
        'masca_start_date' => '_masca_start_date',
        'masca_start_time' => '_masca_start_time',
        'masca_end_date'   => '_masca_end_date',
        'masca_end_time'   => '_masca_end_time',
        'masca_location'   => '_masca_location',
    ) as $form_key => $meta_key) {
        update_post_meta(
            $post_id,
            $meta_key,
            isset($_POST[$form_key]) ? sanitize_text_field(wp_unslash($_POST[$form_key])) : ''
        );
    }

    foreach (array(
        'masca_registration_url' => '_masca_registration_url',
        'masca_maps_url'         => '_masca_maps_url',
    ) as $form_key => $meta_key) {
        update_post_meta(
            $post_id,
            $meta_key,
            isset($_POST[$form_key]) ? esc_url_raw(wp_unslash($_POST[$form_key])) : ''
        );
    }

    update_post_meta($post_id, '_masca_all_day', isset($_POST['masca_all_day']) ? '1' : '0');
    update_post_meta($post_id, '_masca_featured_event', isset($_POST['masca_featured_event']) ? '1' : '0');
    update_post_meta(
        $post_id,
        '_masca_gallery_id',
        isset($_POST['masca_gallery_id']) ? absint($_POST['masca_gallery_id']) : 0
    );
}
add_action('save_post_masca_event', 'masca_save_event_details');

function masca_register_events_rest_route() {
    register_rest_route(
        'masca/v1',
        '/events',
        array(
            'methods'             => WP_REST_Server::READABLE,
            'callback'            => 'masca_get_events_for_calendar',
            'permission_callback' => '__return_true',
        )
    );
}
add_action('rest_api_init', 'masca_register_events_rest_route');

function masca_get_events_for_calendar(WP_REST_Request $request) {
    $args = array(
        'post_type'      => 'masca_event',
        'post_status'    => 'publish',
        'posts_per_page' => -1,
        'meta_key'       => '_masca_start_date',
        'orderby'        => 'meta_value',
        'order'          => 'ASC',
    );

    if ($request->get_param('search')) {
        $args['s'] = sanitize_text_field($request->get_param('search'));
    }

    if ($request->get_param('type')) {
        $args['tax_query'] = array(
            array(
                'taxonomy' => 'masca_event_type',
                'field'    => 'slug',
                'terms'    => sanitize_title($request->get_param('type')),
            ),
        );
    }

    $events = array();

    foreach (get_posts($args) as $event) {
        $start_date = get_post_meta($event->ID, '_masca_start_date', true);
        $start_time = get_post_meta($event->ID, '_masca_start_time', true);
        $end_date   = get_post_meta($event->ID, '_masca_end_date', true);
        $end_time   = get_post_meta($event->ID, '_masca_end_time', true);
        $all_day    = get_post_meta($event->ID, '_masca_all_day', true) === '1';
        $gallery_id = (int) get_post_meta($event->ID, '_masca_gallery_id', true);
        $terms      = get_the_terms($event->ID, 'masca_event_type');
        $types      = array();

        if (!is_wp_error($terms) && $terms) {
            foreach ($terms as $term) {
                $types[] = array(
                    'name' => $term->name,
                    'slug' => $term->slug,
                );
            }
        }

        $start = $start_date . ((!$all_day && $start_time) ? 'T' . $start_time : '');
        $end   = '';

        if ($end_date) {
            $end = $all_day
                ? gmdate('Y-m-d', strtotime($end_date . ' +1 day'))
                : $end_date . ($end_time ? 'T' . $end_time : '');
        } elseif (!$all_day && $end_time) {
            $end = $start_date . 'T' . $end_time;
        }

        $events[] = array(
            'id'              => $event->ID,
            'title'           => get_the_title($event->ID),
            'start'           => $start,
            'end'             => $end,
            'allDay'          => $all_day,
            'url'             => get_permalink($event->ID),
            'excerpt'         => has_excerpt($event->ID)
                ? get_the_excerpt($event->ID)
                : wp_trim_words(wp_strip_all_tags($event->post_content), 30),
            'location'        => get_post_meta($event->ID, '_masca_location', true),
            'registrationUrl' => get_post_meta($event->ID, '_masca_registration_url', true),
            'mapsUrl'         => get_post_meta($event->ID, '_masca_maps_url', true),
            'galleryUrl'      => $gallery_id ? get_permalink($gallery_id) : '',
            'imageUrl'        => get_the_post_thumbnail_url($event->ID, 'large') ?: '',
            'types'           => $types,
            'featured'        => get_post_meta($event->ID, '_masca_featured_event', true) === '1',
            'icsUrl'          => add_query_arg('masca_ics', $event->ID, home_url('/')),
        );
    }

    return rest_ensure_response($events);
}

function masca_output_event_ics() {
    if (!isset($_GET['masca_ics'])) {
        return;
    }

    $event_id = absint($_GET['masca_ics']);

    if (!$event_id || get_post_type($event_id) !== 'masca_event') {
        return;
    }

    $start_date = get_post_meta($event_id, '_masca_start_date', true);
    $start_time = get_post_meta($event_id, '_masca_start_time', true);
    $end_date   = get_post_meta($event_id, '_masca_end_date', true);
    $end_time   = get_post_meta($event_id, '_masca_end_time', true);
    $all_day    = get_post_meta($event_id, '_masca_all_day', true) === '1';
    $location   = get_post_meta($event_id, '_masca_location', true);

    if (!$start_date) {
        return;
    }

    $title       = get_the_title($event_id);
    $description = wp_strip_all_tags(get_the_excerpt($event_id));
    $permalink   = get_permalink($event_id);

    if ($all_day) {
        $dtstart = ';VALUE=DATE:' . gmdate('Ymd', strtotime($start_date));
        $inclusive_end = $end_date ?: $start_date;
        $dtend = ';VALUE=DATE:' . gmdate('Ymd', strtotime($inclusive_end . ' +1 day'));
    } else {
        $dtstart = ':' . gmdate('Ymd\THis\Z', strtotime($start_date . ' ' . ($start_time ?: '00:00')));
        $effective_end_date = $end_date ?: $start_date;
        $effective_end_time = $end_time ?: ($start_time ?: '00:00');
        $dtend = ':' . gmdate('Ymd\THis\Z', strtotime($effective_end_date . ' ' . $effective_end_time));
    }

    header('Content-Type: text/calendar; charset=utf-8');
    header('Content-Disposition: attachment; filename="masca-event-' . $event_id . '.ics"');

    echo "BEGIN:VCALENDAR\r\n";
    echo "VERSION:2.0\r\n";
    echo "PRODID:-//MASCA//Events//EN\r\n";
    echo "BEGIN:VEVENT\r\n";
    echo "UID:masca-event-" . $event_id . "@" . wp_parse_url(home_url(), PHP_URL_HOST) . "\r\n";
    echo "DTSTAMP:" . gmdate('Ymd\THis\Z') . "\r\n";
    echo "DTSTART" . $dtstart . "\r\n";
    echo "DTEND" . $dtend . "\r\n";
    echo "SUMMARY:" . str_replace(array("\r", "\n"), ' ', $title) . "\r\n";
    echo "DESCRIPTION:" . str_replace(array("\r", "\n"), '\n', $description) . "\r\n";
    echo "LOCATION:" . str_replace(array("\r", "\n"), ' ', $location) . "\r\n";
    echo "URL:" . esc_url_raw($permalink) . "\r\n";
    echo "END:VEVENT\r\n";
    echo "END:VCALENDAR\r\n";
    exit;
}
add_action('template_redirect', 'masca_output_event_ics');

function masca_enqueue_event_assets() {
    if (is_page('events')) {
        wp_enqueue_script(
            'fullcalendar',
            'https://cdn.jsdelivr.net/npm/fullcalendar@6.1.19/index.global.min.js',
            array(),
            '6.1.19',
            true
        );

        wp_enqueue_script(
            'masca-events',
            get_theme_file_uri('/assets/js/events.js'),
            array('fullcalendar'),
            filemtime(get_theme_file_path('/assets/js/events.js')),
            true
        );

        wp_localize_script(
            'masca-events',
            'mascaEvents',
            array(
                'endpoint' => esc_url_raw(rest_url('masca/v1/events')),
            )
        );
    }

    if (is_page('events') || is_singular('masca_event')) {
        wp_enqueue_style(
            'masca-events',
            get_theme_file_uri('/assets/css/events.css'),
            array(),
            filemtime(get_theme_file_path('/assets/css/events.css'))
        );
    }
}
add_action('wp_enqueue_scripts', 'masca_enqueue_event_assets');
