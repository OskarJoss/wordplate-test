<?php get_header();

$args = [
    'post_type' => 'event'
];
?>

<ul>
    <?php foreach (get_posts($args) as $post) : ?>
        <!-- $customFields = get_post_meta($post->ID) -->
        <li>
            <a href="<?php the_permalink($post->ID) ?>">
                <h2><?php echo $post->post_title; ?></h2>
            </a>
            <p><?php the_field('description', false, false); ?></p>
            <p><?php the_field('start_date', false, false); ?></p>
        </li>

    <?php endforeach; ?>
</ul>

<?php get_footer(); ?>
