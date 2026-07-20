<?php
/**
 * Site footer
 *
 * @package MASCA_Custom
 */
?>

<footer class="site-footer">
  <div class="site-container">

    <div class="site-footer__main">

      <div class="site-footer__identity">
        <p class="site-footer__eyebrow">
          Montebello, California · Ashiya, Japan
        </p>

        <h2 class="site-footer__name">
          The Montebello-Ashiya<br>
          Sister City Association
        </h2>

        <p class="site-footer__established">
          Established 1961
        </p>

        <div class="site-footer__contact">
          <address>
            <span>Post Office Box 633</span>
            <span>Montebello, CA 90640</span>
          </address>

          <a href="mailto:masca.montebello@gmail.com">
            masca.montebello@gmail.com
          </a>
        </div>

        <div class="site-footer__external-links">
          <a
            href="https://www.npo-aca.jp/"
            target="_blank"
            rel="noopener noreferrer"
          >
            Ashiya Cosmopolitan Association
            <span aria-hidden="true">⟶</span>
          </a>

          <div class="site-footer__social-links" aria-label="Follow MASCA">
            <a
              href="https://www.instagram.com/sistercityassociation/"
              target="_blank"
              rel="noopener noreferrer"
              aria-label="MASCA on Instagram"
            >
              <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                <path d="M7.75 2h8.5A5.76 5.76 0 0 1 22 7.75v8.5A5.76 5.76 0 0 1 16.25 22h-8.5A5.76 5.76 0 0 1 2 16.25v-8.5A5.76 5.76 0 0 1 7.75 2Zm0 2A3.75 3.75 0 0 0 4 7.75v8.5A3.75 3.75 0 0 0 7.75 20h8.5A3.75 3.75 0 0 0 20 16.25v-8.5A3.75 3.75 0 0 0 16.25 4h-8.5Zm8.75 1.5a1.25 1.25 0 1 1 0 2.5 1.25 1.25 0 0 1 0-2.5ZM12 7a5 5 0 1 1 0 10 5 5 0 0 1 0-10Zm0 2a3 3 0 1 0 0 6 3 3 0 0 0 0-6Z"/>
              </svg>
            </a>

            <a
              href="https://www.facebook.com/groups/131135843587941/"
              target="_blank"
              rel="noopener noreferrer"
              aria-label="MASCA on Facebook"
            >
              <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                <path d="M13.5 22v-9h3l.5-3.5h-3.5V7.25c0-1.01.28-1.7 1.75-1.7H17V2.42A23.4 23.4 0 0 0 14.45 2C11.92 2 10 3.54 10 6.38V9.5H7V13h3v9h3.5Z"/>
              </svg>
            </a>
          </div>
        </div>
      </div>

      <div class="site-footer__navigation">

        <nav
          class="footer-navigation"
          aria-labelledby="footer-quick-links-title"
        >
          <h2
            class="footer-navigation__heading"
            id="footer-quick-links-title"
          >
            Quick Links
          </h2>

          <ul class="footer-navigation__list">
            <li>
              <a href="<?php echo esc_url(home_url('/')); ?>">
                Home
              </a>
            </li>

            <li>
              <a href="<?php echo esc_url(masca_custom_page_url('what-is-masca')); ?>">
                What is MASCA?
              </a>
            </li>

            <li>
              <a href="<?php echo esc_url(masca_custom_page_url('our-history')); ?>">
                Our History
              </a>
            </li>

            <li>
              <a href="<?php echo esc_url(masca_custom_page_url('meet-our-leaders')); ?>">
                Meet Our Leaders
              </a>
            </li>

            <li>
              <a href="<?php echo esc_url(masca_custom_page_url('contact-us')); ?>">
                Contact Us
              </a>
            </li>
          </ul>
        </nav>

        <nav
          class="footer-navigation"
          aria-labelledby="footer-ambassador-links-title"
        >
          <h2
            class="footer-navigation__heading"
            id="footer-ambassador-links-title"
          >
            Ambassador Program
          </h2>

          <ul class="footer-navigation__list">
            <li>
              <a href="<?php echo esc_url(masca_custom_page_url('ambassador-program')); ?>">
                Program Overview
              </a>
            </li>

            <li>
              <a href="<?php echo esc_url(masca_custom_page_url('application')); ?>">
                Application
              </a>
            </li>

            <li>
              <a href="<?php echo esc_url(masca_custom_page_url('past-student-ambassadors')); ?>">
                Past Student Ambassadors
              </a>
            </li>

            <li>
              <a href="<?php echo esc_url(masca_custom_page_url('legacy-book')); ?>">
                Legacy Book
              </a>
            </li>

            <li>
              <a href="<?php echo esc_url(masca_custom_page_url('community-exchange')); ?>">
                Community Exchange
              </a>
            </li>

            <li>
              <a href="<?php echo esc_url(masca_custom_page_url('scholarships')); ?>">
                Scholarship
              </a>
            </li>
          </ul>
        </nav>

        <nav
          class="footer-navigation"
          aria-labelledby="footer-support-links-title"
        >
          <h2
            class="footer-navigation__heading"
            id="footer-support-links-title"
          >
            Get Involved
          </h2>

          <ul class="footer-navigation__list">
            <li>
              <a href="<?php echo esc_url(masca_custom_page_url('donate')); ?>">
                How to Join or Donate
              </a>
            </li>

            <li>
              <a href="<?php echo esc_url(masca_custom_page_url('galleries')); ?>">
                Galleries
              </a>
            </li>

            <li>
              <a
                href="https://www.npo-aca.jp/"
                target="_blank"
                rel="noopener noreferrer"
              >
                Ashiya Cosmopolitan Association
              </a>
            </li>
          </ul>
        </nav>

      </div>

    </div>

    <div class="site-footer__bottom">
      <p class="site-footer__copyright">
        &copy; <?php echo esc_html(wp_date('Y')); ?>
        Montebello-Ashiya Sister City Association
      </p>

      <div class="site-footer__legal">
        <a href="<?php echo esc_url(home_url('/terms-and-conditions/')); ?>">
          Terms &amp; Conditions
        </a>

        <a href="<?php echo esc_url(masca_custom_page_url('contact-us')); ?>">
          Contact Us
        </a>

        <a href="#page-top" class="site-footer__top-link">
          Back to top
          <span aria-hidden="true">↑</span>
        </a>
      </div>
    </div>

  </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
