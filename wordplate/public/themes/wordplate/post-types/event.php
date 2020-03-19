<?php

declare(strict_types=1);


add_action('init', function () {
    register_extended_post_type('event', [
        "has_archive" => false
    ]);
});
