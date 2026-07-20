<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1"
    >

    <?php wp_head(); ?>
</head>

<body id="page-top" <?php body_class(); ?>>
<?php wp_body_open(); ?>

<a class="skip-link" href="#main-content">
    Skip to content
</a>

<header id="site-header" class="site-header">
    <div class="site-container site-header__inner">
        <div class="site-branding">
            <?php if (has_custom_logo()) : ?>
                <?php the_custom_logo(); ?>
            <?php else : ?>
                <a
                    class="site-branding__text"
                    href="<?php echo esc_url(home_url('/')); ?>"
                >
                    <span class="site-branding__name">MASCA</span>

                    <span class="site-branding__description">
                        Montebello-Ashiya Sister City Association
                    </span>
                </a>
            <?php endif; ?>
        </div>

        <button
            class="menu-toggle"
            type="button"
            aria-expanded="false"
            aria-controls="site-menu-panel"
        >
            <span class="menu-toggle__label">Menu</span>

            <span class="menu-toggle__icon" aria-hidden="true">
                <span></span>
                <span></span>
            </span>
        </button>
    </div>
</header>

<div
    class="menu-backdrop"
    aria-hidden="true"
></div>

<aside
    id="site-menu-panel"
    class="menu-panel"
    aria-hidden="true"
    aria-label="Site navigation"
>
    <div class="menu-panel__media">
        <img
            class="menu-panel__image"
            src="<?php echo esc_url(
                get_template_directory_uri() .
                '/assets/images/navigation/nav-default.png'
            ); ?>"
            alt=""
            width="899"
            height="1602"
            loading="lazy"
            decoding="async"
        >

        <div class="menu-panel__media-overlay"></div>

        <p class="menu-panel__message">
            Building friendships between Montebello and Ashiya.
        </p>
    </div>

    <div class="menu-panel__content">
        <div class="menu-panel__top">
            <p class="menu-panel__eyebrow">
                Explore MASCA
            </p>

            <button
                class="menu-panel__close"
                type="button"
                aria-label="Close navigation"
            >
                <span aria-hidden="true"></span>
            </button>
        </div>

        <nav
            class="panel-navigation"
            aria-label="Primary navigation"
        >
            <?php
            wp_nav_menu([
                'theme_location' => 'primary',
                'container'      => false,
                'menu_class'     => 'panel-navigation__list',
                'fallback_cb'    => false,
                'depth'          => 2,
            ]);
            ?>
        </nav>

        <div class="menu-panel__footer">
            <p>
                Montebello, California
                <span aria-hidden="true">↔</span>
                Ashiya, Japan
            </p>
        </div>
    </div>
</aside>
