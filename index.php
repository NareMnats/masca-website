<?php

if (!defined('ABSPATH')) {
    exit;
}

?>
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

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<main class="site-container">
    <p>Montebello-Ashiya Sister City Association</p>

    <h1 class="site-title">
        MASCA Custom Theme
    </h1>

    <p class="site-message">
        This page is being rendered by the custom WordPress theme
        you created in VS Code.
    </p>
</main>

<?php wp_footer(); ?>
</body>
</html>