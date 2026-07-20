<?php
/**
 * Page template for the Contact Us page.
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();

$contact_shortcode = '[contact-form-7 id="fd1fcc8" title="Contact Us"]';
$contact_form = do_shortcode('[contact-form-7 id="fd1fcc8" title="Contact Us"]');
$contact_form_rendered = shortcode_exists('contact-form-7')
    && trim($contact_form) !== ''
    && trim($contact_form) !== $contact_shortcode
    && strpos($contact_form, 'wpcf7') !== false;
?>

<main id="primary" class="contact-page">
    <header class="standard-page__header contact-hero">
        <div class="site-container standard-page__header-inner">
            <h1 class="standard-page__title">Contact Us</h1>
        </div>
    </header>

    <section class="contact-main" aria-labelledby="contact-introduction-title">
        <div class="site-container contact-main__grid">
            <div class="contact-introduction">
                <h2 id="contact-introduction-title">Questions? Drop us a message!</h2>
                <p>
                    Please fill in the information below to send us a message, question, or comment,
                    and we will respond as soon as we are able to.
                </p>
            </div>

            <div class="contact-form">
                <?php if ($contact_form_rendered) : ?>
                    <?php echo $contact_form; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
                <?php elseif (current_user_can('manage_options')) : ?>
                    <div class="contact-form__admin-notice" role="status">
                        <p>
                            The contact form could not be displayed. Please confirm that Contact Form 7 is
                            active and that the form ID <code>fd1fcc8</code> is correct.
                        </p>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
