<?php get_header(); ?>

<?php if (have_posts()) : ?>

    <div class="row">

        <?php while (have_posts()) : the_post(); ?>

            <h1><?php the_title(); ?></h1>

        <?php endwhile; ?>

    </div>


<?php endif; ?>

<?php get_footer();
