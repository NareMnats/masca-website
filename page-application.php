<?php
/**
 * Page template for the Application page.
 * Uses the WordPress page slug: application
 */
get_header();

$program_url        = home_url( '/ambassador-program/' );
$application_path   = get_template_directory() . '/assets/documents/Student_Ambassador_Application2026.pdf';
$application_url    = get_template_directory_uri() . '/assets/documents/Student_Ambassador_Application2026.pdf';
$application_exists = file_exists( $application_path );
?>

<main id="primary" class="application-page">
    <section class="app-hero">
        <div class="app-container app-hero__inner">
            <p class="app-eyebrow">Montebello–Ashiya Sister City Association</p>
            <h1>Student Ambassador Application</h1>
            <p class="app-hero__lead">
                Applications are currently closed. The next application period is expected to open in February 2027.
            </p>
        </div>
    </section>

    <section class="app-section">
        <div class="app-container">
            <div class="app-status-card">
                <div class="app-status-card__content">
                    <p class="app-kicker">Current Application Status</p>
                    <h2>Applications Closed – Coming February 2027</h2>
                    <p>
                        Applications for the current Student Ambassador Program cycle are no longer being accepted.
                        The next application packet is expected to become available in February 2027.
                    </p>
                    <p>
                        Interviews generally take place in March and April, with ambassador selections and
                        orientation beginning in May and June.
                    </p>
                </div>

                <div class="app-status-card__action">
                    <span class="app-status-badge">Closed</span>
                    <a class="app-button app-button--secondary" href="<?php echo esc_url( $program_url ); ?>">
                        Learn About the Program
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="app-section app-section--tinted">
        <div class="app-container">
            <div class="app-heading">
                <p class="app-kicker">Previous Application Packet</p>
                <h2>View the 2026 Application</h2>
                <p>
                    The 2026 application is available below for reference. Requirements, dates, and forms
                    may change for the 2027 application cycle.
                </p>
            </div>

            <?php if ( $application_exists ) : ?>
                <div class="app-document-actions">
                    <a class="app-button app-button--primary" href="<?php echo esc_url( $application_url ); ?>" download>
                        Download 2026 Application
                    </a>
                    <a class="app-button app-button--secondary" href="<?php echo esc_url( $application_url ); ?>" target="_blank" rel="noopener">
                        Open PDF in New Tab
                    </a>
                </div>

                <div class="app-pdf-viewer">
                    <object
                        data="<?php echo esc_url( $application_url ); ?>#toolbar=1&navpanes=0"
                        type="application/pdf"
                        aria-label="2026 Student Ambassador Application PDF"
                    >
                        <div class="app-pdf-fallback">
                            <h3>PDF Preview Unavailable</h3>
                            <p>
                                Your browser could not display the application inside this page.
                                You can still download it or open it in a new tab.
                            </p>
                            <div class="app-actions">
                                <a class="app-button app-button--primary" href="<?php echo esc_url( $application_url ); ?>" download>
                                    Download Application
                                </a>
                                <a class="app-button app-button--secondary" href="<?php echo esc_url( $application_url ); ?>" target="_blank" rel="noopener">
                                    Open PDF
                                </a>
                            </div>
                        </div>
                    </object>
                </div>
            <?php else : ?>
                <div class="app-file-notice">
                    <p class="app-kicker">Document Not Yet Added</p>
                    <h3>Application PDF Coming Soon</h3>
                    <p>
                        Add <strong>Student_Ambassador_Application2026.pdf</strong> to
                        <strong>assets/documents</strong> in the MASCA theme to activate the viewer
                        and download buttons automatically.
                    </p>
                </div>
            <?php endif; ?>
        </div>
    </section>

    <section class="app-section">
        <div class="app-container app-narrow">
            <p class="app-kicker">Before the Next Application Opens</p>
            <h2>Learn About Ambassador Roles</h2>
            <p>
                MASCA selects four ambassadors in total (using the same application): two Student Ambassadors who
                travel to Ashiya and two Host Ambassadors who remain in Montebello and help welcome the visiting Ashiya students.
            </p>
            <p>
                Review the Student Ambassador Program page for program details, the annual timeline,
                eligibility information, ambassador responsibilities, family expectations, and
                frequently asked questions.
            </p>
            <a class="app-button app-button--primary" href="<?php echo esc_url( $program_url ); ?>">
                Explore the Student Ambassador Program
            </a>
        </div>
    </section>
</main>

<?php get_footer(); ?>
