<?php
get_header();
while (have_posts()) {
    the_post();
    pageBanner();
?>

    <div class="container container--narrow page-section">
        <div class="metabox metabox--position-up metabox--with-home-link">
            <p><a href="<?php echo get_post_type_archive_link('program'); ?>" class="metabox__blog-home-link"><i class="fa fa-home" aria-hidden='true'></i> Events Home</a> <span class="metabox__main"><?php the_title(); ?></span></p>
        </div>

        <div class="generic-content"><?php the_content(); ?></div>

        <?php

        $relatedProfessors = new WP_Query(array(
            'posts_per_page' => 2,
            'post_type' => 'professor',
            'orderby' => 'meta_value_num',
            'order' => 'ASC',
            'meta_query' => array(
                array(
                    'key' => 'related_programs',
                    'compare' => 'LIKE',
                    'value' => '"' . get_the_ID() . '"'
                )
            )
        ));

        if ($relatedProfessors->have_posts()) {
            echo '<hr class="section-break">';
            echo '<h2 class="headline headline--medium">Upcoming ' . get_the_title() . ' Professors</h2>';


            echo '<ul class="professor-cards">';
            while ($relatedProfessors->have_posts()) {
                $relatedProfessors->the_post(); ?>
                <li class='professor-card__list-item'>
                    <a class='professor-card' href="<?php the_permalink(); ?>">
                        <img class='professor-card__image' src="<?php the_post_thumbnail_url('professorLandscape') ?>" alt="">
                        <span class='prfoessor-card__name'><?php the_title(); ?></span>
                    </a>
                </li>
        <?php   }
            echo '</ul>';
        }

        // resets global post object to default url based query.
        // whenever you run multiple custom queries, run this function to reset query post data.
        wp_reset_postdata();

        $today = date('Ymd');
        $homepageEvents = new WP_Query(array(
            'posts_per_page' => 2,
            'post_type' => 'event',
            'meta_key' => 'event_date',
            'orderby' => 'meta_value_num',
            'order' => 'ASC',
            'meta_query' => array(
                array(
                    'key' => 'event_date',
                    'compare' => '>=',
                    'value' => $today,
                    'type' => 'numeric'
                ),
                array(
                    'key' => 'related_programs',
                    'compare' => 'LIKE',
                    'value' => '"' . get_the_ID() . '"'
                )
            )
        ));

        if ($homepageEvents->have_posts()) {
            echo '<hr class="section-break">';
            echo '<h2 class="headline headline--medium">Upcoming ' . get_the_title() . ' Events</h2>';

            while ($homepageEvents->have_posts()) {
                $homepageEvents->the_post();
                get_template_part('template-parts/content-event');
            }
        }  ?>
    </div>
<?php }
get_footer();
?>