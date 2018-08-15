<?php

/*
Additional customizer settings 
*/

require get_template_directory() . '/inc/customizer-controls.php';

function ileys_customize_register($wp_customize){

        $wp_customize->add_panel('ileys_section_panel',
        array(
            'title'=>(' Theme Sections'),
            'description'=> esc_attr('Choose what page appears on the about section'),
            'priority' => 160,
            'capability'=> 'edit_theme_options'
        )  
    );


    // About Section
        $wp_customize->add_section('ileys_about_section',
        
        array(
            'title'=>('About section '),
            'description'=> esc_attr('Choose what page appears on the about section'),
            'panel'=>'ileys_section_panel'
        )
    );

        $wp_customize->add_setting( 'ileys_dropdownpages',
        array(
            'default' => '',
            'transport' => 'refresh',
            'sanitize_callback' => 'absint'
        )
        );
        
        $wp_customize->add_control( 'ileys_control_dropdownpages',
        array(
            'label' => __( 'About Page' ),
            'description' => esc_attr( 'The featured image will show alongside the excerpt ' ),
            'section' => 'ileys_about_section',
            'settings'=>'ileys_dropdownpages',
            'priority' => 10, // Optional. Order priority to load the control. Default: 10
            'type' => 'dropdown-pages',
            'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
            )
        );
        
        //Product Section
        $wp_customize->add_section('ileys_product_section',
        
        array(
            'title'=>('Product section '),
            'description'=> esc_attr('Choose Posts that appear on section'),
            'panel'=>'ileys_section_panel'
        )
    );

            $wp_customize->add_setting( 'dropdown_posts_control',
            array(
            'default' => '',
            'transport' => 'postMessage',
            'sanitize_callback' => 'absint'
            )
        );
        $wp_customize->add_control( new Skyrocket_Dropdown_Posts_Custom_Control( $wp_customize, 'sample_dropdown_posts_control',
            array(
            'label' => __( 'Product Section' ),
            'description' => esc_html__( 'Post featured images will appear in gallery form' ),
            'section' => 'ileys_product_section',
            'input_attrs' => array(
                'posts_per_page' => 4,
                'orderby' => 'name',
                'order' => 'ASC',
            ),
            'settings'=>'dropdown_posts_control'
            )
        ) );



        // Trading Section
        $wp_customize->add_section('ileys_trading_section',
        
        array(
            'title'=>('Trading section '),
            'description'=> esc_attr('Choose what page appears on the trading section'),
            'panel'=>'ileys_section_panel'
        )
    );

        $wp_customize->add_setting( 'ileys_trading_dropdownpages',
        array(
            'default' => '',
            'transport' => 'refresh',
            'sanitize_callback' => 'absint'
        )
        );
        
        $wp_customize->add_control( 'ileys_trading_control_dropdownpages',
        array(
            'label' => __( 'Trading Section' ),
            'description' => esc_attr( 'The featured image will show alongside the excerpt ' ),
            'section' => 'ileys_trading_section',
            'settings'=>'ileys_trading_dropdownpages',
            'priority' => 10, // Optional. Order priority to load the control. Default: 10
            'type' => 'dropdown-pages',
            'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
            )
        );

        $wp_customize->add_section('ileys_promotion_section',
        
        array(
            'title'=>('Promotional section '),
            'description'=> esc_attr('Choose what page appears on the trading section'),
            'panel'=>'ileys_section_panel'
        )
    );

        $wp_customize->add_setting( 'ileys_promotion_bg',
        array(
            'default' => '',
            'transport' => 'refresh',
            'sanitize_callback' => 'absint',
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options'
        )
        );
        
        $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'ileys_control_image',
        array(
           'label' => __( 'Promotion Section Background ' ),
           'description' => esc_html__( 'Choose mage to set as background' ),
           'section' => 'ileys_promotion_section',
           'settings'=>'ileys_promotion_bg',
           'button_labels' => array( // Optional.
              'select' => __( 'Select Image' ),
              'change' => __( 'Change Image' ),
              'remove' => __( 'Remove' ),
              'default' => __( 'Default' ),
              'placeholder' => __( 'No image selected' ),
              'frame_title' => __( 'Select Image' ),
              'frame_button' => __( 'Choose Image' ),
           )
        )
     ) );

     $wp_customize->add_setting( 'sample_default_text',
     array(
        'default' => '',
        'transport' => 'refresh',
        'sanitize_callback' => 'absint'
     )
  );
   
  $wp_customize->add_control( 'sample_default_text',
     array(
        'label' => __( 'Default Text Control' ),
        'description' => esc_html__( 'Text controls Type can be either text, email, url, number, hidden, or date' ),
        'section' => 'ileys_promotion_section',
        "setting" =>'sample_default_text',
        'priority' => 10, // Optional. Order priority to load the control. Default: 10
        'type' => 'text', // Can be either text, email, url, number, hidden, or date
        'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
        'input_attrs' => array( // Optional.
           'class' => 'my-custom-class',
           'style' => 'border: 1px solid rebeccapurple',
           'placeholder' => __( 'Enter name...' ),
        ),
     )
  );
}

add_action('customize_register','ileys_customize_register');