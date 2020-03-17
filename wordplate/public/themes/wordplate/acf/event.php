<?php

if (function_exists('acf_add_local_field_group')) :

    acf_add_local_field_group(array(
        'key' => 'group_1',
        'title' => 'My Group',
        'fields' => array(
            [
                'key' => 'field_1',
                'label' => 'Description',
                'name' => 'sub_title',
                'type' => 'text',
            ],
            [
                'key' => 'field_2',
                'label' => 'Date',
                'name' => 'sub_title2',
                'type' => 'date_time_picker',
            ]
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'event',
                ),
            ),
        ),
    ));

endif;
