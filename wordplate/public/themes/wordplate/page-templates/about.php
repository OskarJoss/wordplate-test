<?php /* Template Name: About */ ?>
<?php get_header(); ?>

<article class="about">

    <?php while (have_posts()) : the_post(); ?>

        <h1><?php the_title(); ?></h1>
        <p><?php the_field("description", false) ?></p>

    <?php endwhile; ?>

</article>


<?php get_footer(); ?>
