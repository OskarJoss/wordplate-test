<?php

declare(strict_types=1);

if (function_exists('acf_add_local_field_group')) :

    acf_add_local_field_group([
        'key' => 'group_5e7221aba0ddd',
        'title' => 'Event',
        'fields' => [
            [
                'key' => 'field_5e7221be46aa3',
                'label' => 'Description',
                'name' => 'description',
                'type' => 'textarea',
                'instructions' => 'A description of the event.',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => [
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ],
                'default_value' => '',
                'placeholder' => '',
                'maxlength' => '',
                'rows' => '',
                'new_lines' => '',
            ],
            [
                'key' => 'field_5e72222146aa4',
                'label' => 'Start Date',
                'name' => 'start_date',
                'type' => 'date_time_picker',
                'instructions' => 'Pick a date and time the event starts',
                'required' => 1,
                'conditional_logic' => 0,
                'wrapper' => [
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ],
                'display_format' => 'Y-m-d H:i:s',
                'return_format' => 'd/m/Y g:i a',
                'first_day' => 1,
            ],
            [
                'key' => 'field_5e72229246aa5',
                'label' => 'End Date',
                'name' => 'end_date',
                'type' => 'date_time_picker',
                'instructions' => 'The date and time the event ends',
                'required' => 1,
                'conditional_logic' => 0,
                'wrapper' => [
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ],
                'display_format' => 'Y-m-d H:i:s',
                'return_format' => 'd/m/Y g:i a',
                'first_day' => 1,
            ],
        ],
        'location' => [
            [
                [
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'event',
                ],
            ],
        ],
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => [
            0 => 'the_content',
        ],
        'active' => true,
        'description' => '',

    ]);

endif;
