<?php

function gutenbiz_test_options()
{
    Gutenbiz_Customizer::set(array(
        'panel' => array(
            'id'        => 'test_options',
            'title'     => esc_html__('Test Options', 'gutenbiz'),
            'priority'  => '10',
        ),
        'section' => array(
            'id'    => 'test_section',
            'title' => esc_html__('Test Section', 'gutenbiz'),
        ),
        'fields' => array(
            array(
                'id'            => 'test_font_family',
                'label'         => esc_html__('Site Title Font ', 'gutenbiz'),
                'description'   => esc_html__('Change site title fonts', 'gutenbiz'),
                'type'          => 'select',
                'choices'       => Gutenbiz_Theme::get_font_family(),
            ),
            array(
                'id'          => 'test_body_font_size',
                'label'       => esc_html__('Site Body Font Size', 'gutenbiz'),
                'description' => esc_html__('Change site body font size', 'gutenbiz'),
                'type'        => 'slider',
                'default'     => array(
                    'desktop' => 16,
                    'tablet' => 16,
                    'mobile' => 15,
                ),
                'input_attrs' =>  array(
                    'min'   => 1,
                    'max'   => 60,
                    'step'  => 1,
                ),
            ),
            array(
                'id'            => 'test_color',
                'label'         => esc_html__('Site Body Color', 'gutenbiz'),
                'description'   => esc_html__('Change body color', 'gutenbiz'),
                'type'          => 'color',
            ),
            array(
                'id'          => 'test_textarea',
                'label'       => esc_html__('Site Text Area', 'gutenbiz'),
                'description' => esc_html__('Enter text', 'gutenbiz'),
                'type'        => 'textarea',
            ),
            array(
                'id'          => 'test_dropdownpages',
                'label'       => esc_html__('Site Dropdown Pages', 'gutenbiz'),
                'description' => esc_html__('Select appropriate pages', 'gutenbiz'),
                'type'        => 'dropdown-pages',
            ),
            array(
                'id'            => 'test_radio_button',
                'label'         => esc_html__('Site Radio Button', 'gutenbiz'),
                'description'   => esc_html__('Select one option', 'gutenbiz'),
                'type'          => 'buttonset',
                'default'       => 'op1',
                'choices'       => array(
                    'op1' => 'Option 1',
                    'op2' => 'Option 2',
                ),
            ),
            array(
                'id'          => 'test_separator',
                'label'       => esc_html__('Site Test Separator', 'gutenbiz'),
                'description' => esc_html__('Text Separator', 'gutenbiz'),
                'type'        => 'icon',
                'default'     => 'f105',
                'choices'     => array(
                    'f105' => 'fa fa-angle-right',
                    '002f' => 'fa-slash',
                    'f061' => 'fa fa-arrow-right',
                    'f178' => 'fa fa-long-arrow-right',
                    'f101' => 'fa fa-angle-double-right',
                ),
            ),
            array(
                'id'          => 'test_checkbox',
                'label'       => esc_html__('Site Test Checkbox', 'gutenbiz'),
                'description' => esc_html__('Site Text Checkbox', 'gutenbiz'),
                'type'        => 'checkbox',
            ),
            array(
                'id'          => 'test_select',
                'label'       => esc_html__('Site Test Select', 'gutenbiz'),
                'description' => esc_html__('Site Text Dropdown', 'gutenbiz'),
                'type'        => 'select',
                'default'     => 'wordpress',
                'choices'     => array(
                    'wordpress' => __('WordPress'),
                    'js'               => __('JavaScript'),
                    'css'             => __('CSS'),
                ),
            ),
            array(
                'id' => 'test_layout',
                'label' => esc_html__('Site Layout', 'gutenbiz'),
                'description' => esc_html__('Change site layout', 'gutenbiz'),
                'type' => 'radio-image',
                'choices'       => array(
                    '1' => array(
                        'label' => esc_html__('One widget', 'gutenbiz'),
                        'url'   => Gutenbiz_Helper::get_theme_uri('/classes/customizer/assets/images/footer-1.png'),
                        'svg'   => '<svg xmlns:xlink="http://www.w3.org/1999/xlink" fill="#D5DADF" viewBox="0 0 100 50"><path d="M100,0V50H0V0Z"></path></svg>'
                    ),
                    '2' => array(
                        'label' => esc_html__('Two widget', 'gutenbiz'),
                        'url'   => Gutenbiz_Helper::get_theme_uri('/classes/customizer/assets/images/footer-2.png'),
                        'svg'   => '<svg xmlns:xlink="http://www.w3.org/1999/xlink" fill="#D5DADF" viewBox="0 0 100 50"><path d="M49,0V50H0V0Z M100,0V50H51V0Z"></path></svg>'
                    ),
                    '3' => array(
                        'label' => esc_html__('Thee widget', 'gutenbiz'),
                        'url'   => Gutenbiz_Helper::get_theme_uri('/classes/customizer/assets/images/footer-3.png'),
                        'svg'   => '<svg xmlns:xlink="http://www.w3.org/1999/xlink" fill="#D5DADF" viewBox="0 0 100 50"><path d="M32,0V50H0V0Z M66,0V50H34V0Z M100,0V50H68V0Z"></path></svg>'
                    ),
                    '4' => array(
                        'label' => esc_html__('Four widget', 'gutenbiz'),
                        'url'   => Gutenbiz_Helper::get_theme_uri('/classes/customizer/assets/images/footer-4.png'),
                        'svg'   => '<svg xmlns:xlink="http://www.w3.org/1999/xlink" fill="#D5DADF" viewBox="0 0 100 50"><path d="M23.5,0V50H0V0Z M49,0V50H25.5V0Z M74.5,0V50H51V0Z M100,0V50H76.5V0Z"></path></svg>'
                    )
                )
            ),
            array(
                'id'          => 'test_sections_order',
                'label'       => esc_html__('Sections order', 'gutenbiz'),
                'description' => esc_html__('Order the sections', 'gutenbiz'),
                'type'  => 'gutenbiz-section-order',
                'default'     => json_encode(array(
                    'title', 'category', 'excerpt', 'comment', 'date'
                )),
                'choices' => array(
                    'title'    => esc_html__('Title', 'gutenbiz'),
                    'category' => esc_html__('Category', 'gutenbiz'),
                    'excerpt'  => esc_html__('Excerpt', 'gutenbiz'),
                    'comment'  => esc_html__('Comment', 'gutenbiz'),
                    'date'     => esc_html__('Date', 'gutenbiz'),
                ),
                'transport'    => 'refresh'
            ),
            array(
                'id'            => 'test_menu_color',
                'label'         => esc_html__('Site Menu Color', 'gutenbiz'),
                'description'   => esc_html__('Change menu color', 'gutenbiz'),
                'type'          => 'color',
            ),
            array(
                'id'          => 'test_menu_size',
                'label'       => esc_html__('Site Menu Size', 'gutenbiz'),
                'description' => esc_html__('Change site menu font size', 'gutenbiz'),
                'type'        => 'slider',
                'default'     => array(
                    'desktop' => 16,
                    'tablet' => 16,
                    'mobile' => 15,
                ),
                'input_attrs' =>  array(
                    'min'   => 1,
                    'max'   => 60,
                    'step'  => 1,
                ),
            ),
            array(
                'id'          => 'test_menu_font',
                'label'       => esc_html__('Site Menu Font Weight', 'gutenbiz'),
                'description' => esc_html__('Change site menu font weight', 'gutenbiz'),
                'type'        => 'slider',
                'default'     => array(
                    'desktop' => 200,
                    'tablet' => 200,
                    'mobile' => 100,
                ),
                'input_attrs' =>  array(
                    'min'   => 100,
                    'max'   => 900,
                    'step'  => 100,
                ),
            ),
            array(
                'id'            => 'test_post_color',
                'label'         => esc_html__('Change Posts Color', 'gutenbiz'),
                'description'   => esc_html__('Change post color', 'gutenbiz'),
                'type'          => 'color',
            ),
            array(
                'id' => 'test_post_font_size',
                'label' => esc_html__('Site Post Font Size', 'gutenbiz'),
                'description' => esc_html__('Change Post Font Size', 'gutenbiz'),
                'type' => 'slider',
                'default' => array(
                    'desktop' => 16,
                    'tablet' => 16,
                    'mobile' => 15,
                ),
                'input_attrs' => array(
                    'min' => 1,
                    'max' => 60,
                    'step' => 1,
                ),
            ),
            array(
                'id' => 'test_post_font_weight',
                'label' => esc_html__('Site Post Font Weight', 'gutenbiz'),
                'description' => esc_html__('Change Post Font Weight', 'gutenbiz'),
                'type' => 'slider',
                'default' => array(
                    'desktop' => 200,
                    'tablet' => 200,
                    'mobile' => 100,
                ),
                'input_attrs' => array(
                    'min' => 100,
                    'max' => 900,
                    'step' => 100,
                ),
            ),
            array(
                'id'            => 'test_footer_color',
                'label'         => esc_html__('Site Footer Color', 'gutenbiz'),
                'description'   => esc_html__('Change footer color', 'gutenbiz'),
                'type'          => 'color',
            ),
            array(
                'id' => 'test_footer_font_size',
                'label' => esc_html__('Site Footer Font Size', 'gutenbiz'),
                'description' => esc_html__('Change Footer Font Size', 'gutenbiz'),
                'type' => 'slider',
                'default' => array(
                    'desktop' => 16,
                    'tablet' => 16,
                    'mobile' => 15,
                ),
                'input_attrs' => array(
                    'min' => 1,
                    'max' => 100,
                    'step' => 1,
                ),
            ),
            array(
                'id' => 'test_footer_font_weight',
                'label' => esc_html__('Site Footer Font Weight', 'gutenbiz'),
                'description' => esc_html__('Change Footer Font Weight', 'gutenbiz'),
                'type' => 'slider',
                'default' => array(
                    'desktop' => 200,
                    'tablet' => 200,
                    'mobile' => 100,
                ),
                'input_attrs' => array(
                    'min' => 100,
                    'max' => 900,
                    'step' => 100
                )
            ),
        ),
    ));
}

add_action('init', 'gutenbiz_test_options');
