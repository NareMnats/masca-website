<?php
/**
 * Past Ambassadors page
 * Automatically used by WordPress for the /past-ambassadors/ page.
 */

get_header();

$ambassador_decades = [
    '1960s' => [
        ['1964', 'Tom Johnson', 'Ed Hamby'],
        ['1965', 'Mark Fenton', 'Jeannie Enzman'],
        ['1966', 'Roger Litz', 'Susan Emmerich'],
        ['1967', 'Cynthia Montes', 'Jeannie Labosetta'],
        ['1968', 'Carol Odou', 'Eileen Nako'],
        ['1969', 'Tom Espinosa', 'Margo Robles'],
    ],
    '1970s' => [
        ['1970', 'Fred Pringle', 'Michelle Patterson'],
        ['1971', 'Arthur Acevedo', 'Terry Hogle'],
        ['1972', 'Ken Seguine', 'Becky Montez'],
        ['1973', 'Bob Hogle', 'Kathy Kubota'],
        ['1974', 'David Inouye', 'Susan Olsen'],
        ['1975', 'Philip Gilston', 'Martha Odou'],
        ['1976', 'Teresa Santo', 'Karl Oshima'],
        ['1977', 'Jim Hogle', 'Cathy Kisee'],
        ['1978', 'George Acevedo', 'Cathy Solorzano'],
        ['1979', 'Nick Shubin', 'Manuel Arreguin'],
    ],
    '1980s' => [
        ['1980', 'Brad Amano', 'Chris Lopez'],
        ['1981', 'Sophia Campos', 'George Maya'],
        ['1982', 'Minnie Atilano', 'Lillian Lathrop'],
        ['1983', 'Kathleen Odou', 'Pauline Kawamoto'],
        ['1984', 'Joyce Fang', 'Rudy Carrillo LaBrada'],
        ['1985', 'Patricia Ramos', 'Michelle Lim'],
        ['1986', 'Lulu Wong', 'Darren McIntosh'],
        ['1987', 'Tina Hidalgo', 'Christine Oyakawa'],
        ['1988', 'Carol Sakai', 'Jacqueline Borja'],
        ['1989', 'David Lim', 'Yvonne Alaniz'],
    ],
    '1990s' => [
        ['1990', 'Mirabelle Reyes', 'Margaret Molina'],
        ['1991', 'Lisa Arakaki', 'Christine Risher'],
        ['1992', 'Shane Estanislao', 'Michelle Risher'],
        ['1993', 'Laura Rubenstein', 'Marlene Law'],
        ['1994', 'Vivian Alaniz', 'Kirk Shintani'],
        ['1995', 'Great Hanshin-Awaji Earthquake', null, 'pause'],
        ['1996', 'Marc Stad', 'Leslie Hui'],
        ['1997', 'Saya Yamaguchi', 'Lorena Cheng'],
        ['1998', 'Kerry Medina', 'Luis Hernandez'],
        ['1999', 'Monique Moure', 'Zackery Tuttle'],
    ],
    '2000s' => [
        ['2000', 'Jessica Vasquez', 'Elisa Haro'],
        ['2001', 'Pablo Rubenstein', 'Shelley Glasman'],
        ['2002', 'Marlyna Berumen', 'Arturo Najera'],
        ['2003', 'Jessica Gomez', 'Natalie Glasman'],
        ['2004', 'Ricky Ortiz', 'Lucine Shpak'],
        ['2005', 'James Santana', 'Ashley Jimenez'],
        ['2006', 'Aaron Ruvalcaba', 'Vincent Martinez'],
        ['2007', 'Darron Miya', 'Lorena Jimenez'],
        ['2008', 'Angelica Duron', 'Elizabeth Kivorkian'],
        ['2009', 'Daniel Gonzales', 'Louis Miguel Gonzales'],
    ],
    '2010s' => [
        ['2010', 'Max Duron', 'Lorena Garcia-Zarmeno'],
        ['2011', 'Great East Japan Earthquake', null, 'pause'],
        ['2012', 'Alyssa Middo', 'Jacob Espinoza'],
        ['2013', 'Christina Gonzales', 'David Delgado'],
        ['2014', 'Alejandro Zepeda', 'Julieta Perales'],
        ['2015', 'Cristian Herrera', 'Stephanie Gonzales'],
        ['2016', 'Astrid Herrera', 'Lili Perales'],
        ['2017', 'Celeste Zepeda', 'Alicia Amamoto'],
        ['2018', 'Lauren Gamboa', 'Noah Lopez'],
        ['2019', 'Angel Ruiz', 'Zachary Bernal'],
    ],
    '2020s' => [
        ['2020', 'Jessica Bernal', 'Isaac Rincon'],
        ['2021–2022', 'COVID-19 Pandemic', null, 'pause'],
        ['2023', 'Andrea Ruiz', 'Alejandro Ruiz'],
        ['2024', 'Isaac Flores', 'Ben Richards'],
        ['2025', 'Andrew Franco', 'Anthony Ramirez'],
    ],
];
?>

<main id="main-content" class="masca-ambassadors-page">
    <section class="ambassadors-intro">
        <div class="ambassadors-container ambassadors-intro__inner">
            <p class="ambassadors-eyebrow">Ambassador Program</p>
            <h1>Past Ambassadors</h1>
            <p class="ambassadors-intro__copy">
                For more than six decades, Montebello students have represented their community in Ashiya, building friendships and carrying the spirit of the sister-city partnership across generations. This archive recognizes the ambassadors who have taken part in that tradition since 1964.
            </p>
        </div>
    </section>

    <section class="ambassadors-archive" aria-labelledby="ambassadors-archive-title">
        <div class="ambassadors-container">
            <h2 id="ambassadors-archive-title" class="screen-reader-text">Past ambassadors by decade</h2>

            <div class="ambassadors-decades">
                <?php foreach ($ambassador_decades as $decade => $entries) : ?>
                    <section class="ambassador-decade" aria-labelledby="decade-<?php echo esc_attr(sanitize_title($decade)); ?>">
                        <header class="ambassador-decade__header">
                            <h3 id="decade-<?php echo esc_attr(sanitize_title($decade)); ?>"><?php echo esc_html($decade); ?></h3>
                            <span><?php echo esc_html(count($entries)); ?> entries</span>
                        </header>

                        <div class="ambassador-decade__list">
                            <?php foreach ($entries as $entry) :
                                $year = $entry[0];
                                $first_name = $entry[1];
                                $second_name = $entry[2] ?? null;
                                $type = $entry[3] ?? 'ambassadors';
                            ?>
                                <?php if ($type === 'pause') : ?>
                                    <article class="ambassador-entry ambassador-entry--pause">
                                        <p class="ambassador-entry__year"><?php echo esc_html($year); ?></p>
                                        <div class="ambassador-entry__people">
                                            <p class="ambassador-entry__label">Program paused</p>
                                            <p class="ambassador-entry__event"><?php echo esc_html($first_name); ?></p>
                                        </div>
                                    </article>
                                <?php else : ?>
                                    <article class="ambassador-entry">
                                        <p class="ambassador-entry__year"><?php echo esc_html($year); ?></p>
                                        <div class="ambassador-entry__people">
                                            <p><?php echo esc_html($first_name); ?></p>
                                            <p><?php echo esc_html($second_name); ?></p>
                                        </div>
                                    </article>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
                    </section>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
