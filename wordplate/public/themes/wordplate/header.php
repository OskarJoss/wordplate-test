<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="theme-color" content="#6d9aea">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header>
        <nav role="navigation">
            <ul>
                <?php foreach (get_pages([
                    "sort_columns" => "menu_order",
                    "sort_order" => "DESC"
                ]) as $page) : ?>
                    <a href="<?php the_permalink($page) ?>">
                        <li class="<?php echo is_page($page->ID)  ? 'active' : '' ?>">
                            <?php echo $page->post_title; ?>
                        </li>
                    </a>
                <?php endforeach; ?>
            </ul>
        </nav>
    </header>
