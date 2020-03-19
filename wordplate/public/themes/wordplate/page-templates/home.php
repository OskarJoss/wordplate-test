<?php /* Template Name: Home */ ?>
<?php get_header(); ?>

<article class="about">

    <?php while (have_posts()) : the_post(); ?>

        <div class="hero-img-container">
            <img class="hero-img" src="<?php the_field("hero_image") ?>" alt="hero">
            <p><?php the_field("hero_text", false) ?></p>
        </div>

    <?php endwhile; ?>

    <?php $args = [
        'post_type' => 'event'
    ];
    ?>

    <ul>
        <?php foreach (get_posts($args) as $post) : ?>
            <li>
                <a href="<?php the_permalink($post->ID) ?>">
                    <h2><?php echo $post->post_title; ?></h2>
                </a>
                <p><?php the_field('description', false, false); ?></p>
                <p><?php the_field('start_date', false, false); ?></p>
            </li>

        <?php endforeach; ?>
    </ul>

</article>



<?php get_footer(); ?>
