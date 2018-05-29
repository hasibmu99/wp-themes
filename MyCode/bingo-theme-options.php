<?php 
if(! defined('ABSPATH')){die;}


if( ! function_exists('bingo_theme_option_settings')){
    function bingo_theme_option_settings($settings) {
        $settings           = [
            'menu_title'      => 'Bingo Framework',
            'menu_type'       => 'menu', // menu, submenu, options, theme, etc.
            'menu_slug'       => 'cs-framework',
            'ajax_save'       => false,
            'show_reset_all'  => false,
            'framework_title' => 'Bingo Framework <small>by Shuvor</small>',
        ];

        return $settings;
    }
    add_filter('cs_framework_settings','bingo_theme_option_settings');
}


if( ! function_exists('bingo_theme_options')){
    function bingo_theme_options($options){
        $options = [];

        $options [] = [
            'name'  => __('Hero Section','bingo'),
            'title' => __('Hero Title','bingo'),
            'icon'  => 'fa fa-star',
            'fields' => [
                [
                    'id'    => 'hero_title',
                    'title' => __('Title','bingo'),
                    'type'  => 'wysiwyg'

                ],
                [
                    'id'    => 'hero_description',
                    'title' => __('Description','bingo'),
                    'type'  => 'wysiwyg'

                ],
                [
                    
                    'id'    => 'images',
                    'title' => __('Images','bingo'),
                    'type'  => 'group',
                    'button_title' => __('Add New','bingo'),
                    'accortion_title'   => __('Adding Image','bingo'),
                    'fields'            => [
                        [
                            'id'    => 'bg_image',
                            'title' => __('Images','bingo'),
                            'type'  => 'image'
                        ]
                    ]

                ],
                [
                    'id'    => 'buttons',
                    'title' => __('Buttons','bingo'),
                    'type'  => 'group',
                    'button_title'  => __('Add New','bingo'),
                    'accordion_title'   => __('Adding Button','bingo'),
                    'fields'    => [
                        [
                            'id'    => 'button_text',
                            'title' => __('Button Text','bingo'),
                            'type'  => 'text'
                        ],
                        [
                            'id' =>  'button_link',
                            'title' => __('Button Link','bingo'),
                            'type'  => 'text'
                        ],
                        [
                            'id'    => 'active',
                            'title' => __('Active','bingo'),
                            'type'  => 'radio',
                            'options'   => [
                                'btn-main'          => 'Yes,Active',
                                'btn-transparent'   => 'No, Thanks'
                            ],
                            
                        ]
                    ]
                ]

            ]
        ];

        return $options;
    }
    add_filter('cs_framework_options','bingo_theme_options');
}