<?php
/**
 * Template Name: Scholarships
 */
get_header();

$app=home_url('/application/');
$program=home_url('/ambassador-program/');
?>
<main class="scholarships-page">

<section class="sp-hero">
<div class="sp-container">
<p class="sp-eyebrow">Montebello–Ashiya Sister City Association</p>
<h1>Scholarships & Awards</h1>
<p class="sp-lead">Supporting Student Exchange Ambassadors and the families who make the exchange possible.</p>
</div>
</section>

<section class="sp-section">
<div class="sp-container sp-narrow">
<p class="sp-kicker">Scholarship Opportunities</p>
<h2>Available Awards</h2>
<p>The Elaine Kirchner Scholarship and the Jay & Dorothy Nomura Scholarship recognize outstanding participants in the Montebello–Ashiya Student Ambassador Program.</p>

<div class="sp-callout">
<ul>
<li><strong>Two $500 scholarships</strong> will be awarded—<strong>one to each selected traveling Montebello Student Exchange Ambassador.</strong></li>
<li><strong>One $250 scholarship</strong> will be awarded to the selected Host Ambassador.</li>
</ul>
</div>
</div>
</section>

<section class="sp-section sp-alt">
<div class="sp-container">
<p class="sp-kicker">Eligibility</p>
<h2>Scholarship Eligibility Requirements</h2>
<ul class="sp-checklist">
<li>Complete the Montebello–Ashiya Sister City Association Student Ambassador Program application.</li>
<li>Be between 15–18 years of age and a current resident of Montebello.</li>
<li>Be enrolled full-time in high school, trade school, or college with a minimum GPA of 2.5.</li>
<li>Be selected as an official Montebello–Ashiya Student Exchange Ambassador.</li>
</ul>
</div>
</section>

<section class="sp-section">
<div class="sp-container sp-narrow">
<p class="sp-kicker">Host Family Award</p>
<h2 class="sp-host-award-title">Yae Aihara Montebello Host Family Award</h2>
<p>This award is granted to participating Montebello host families in support of hosting an Ashiya Student Ambassador.</p>
</div>
</section>

<section class="sp-section sp-alt">
<div class="sp-container">
<p class="sp-kicker">Agreement & Conditions</p>
<h2>Scholarship Agreement</h2>
<p>Student applicants and their parent(s)/guardian(s) understand that acceptance of scholarship funds and the Host Family Award includes the following commitments:</p>
<ul class="sp-checklist">
<li>Become active members of the Sister City Association.</li>
<li>Support the Association's mission, programs, and nonprofit status.</li>
<li>Host Ashiya Student Ambassadors for one week for three consecutive years.</li>
<li>Failure to fulfill these responsibilities may result in forfeiture or repayment of awarded funds or program expenses.</li>
</ul>

<div class="sp-actions">
<a class="sp-btn primary" href="<?php echo esc_url($app); ?>">View Application</a>
<a class="sp-btn secondary" href="<?php echo esc_url($program); ?>">Student Ambassador Program</a>
</div>
</div>
</section>

</main>
<?php get_footer(); ?>
