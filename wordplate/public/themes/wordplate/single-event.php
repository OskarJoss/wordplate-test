<?php get_header(); ?>

<?php if (have_posts()) : ?>

    <article class="single-event">

        <?php while (have_posts()) : the_post(); ?>

            <h1><?php the_title(); ?></h1>
            <p><?php the_field("description", false) ?></p>
            <p>Start Date: <?php the_field("start_date", false, false) ?></p>
            <p>End Date: <?php the_field("end_date", false, true) ?></p>

        <?php endwhile; ?>

    </article>


<?php endif; ?>

<?php get_footer();
