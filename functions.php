<?php 
    //  REGISTER STYLESHEETS
    function clever_register_styles() {
        $version = wp_get_theme()->get( 'Version' );
        wp_enqueue_style('clever-bootstrap-css', "https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css", array(), '5.3.2', 'all');
        wp_enqueue_style('clever-fontawesome', "https://kit.fontawesome.com/75bc144dac.js", array(), '1.0', 'all');
        wp_enqueue_style('clever-style-css', get_template_directory_uri() . "/style.css", array('clever-bootstrap-css'), $version, 'all');
        wp_enqueue_style('clever-main-css', get_template_directory_uri() . "/assets/css/main.css", array('clever-style-css'), $version, 'all');
    }
    add_action( 'wp_enqueue_scripts', 'clever_register_styles' );

    // REGISTER SCRIPTS
    function clever_register_scripts() {
        $version = wp_get_theme()->get( 'Version' );
        wp_enqueue_script('clever-bootstrap-js', "https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js", array(), '5.3.2', 'true');
        wp_enqueue_script('clever-main-js', get_template_directory_uri() . "/assets/js/main.js", array(), '1.0.0', 'true');
    }
    add_action( 'wp_enqueue_scripts', 'clever_register_scripts' );

    // REGISTER THEME SUPPORT
    function clever_theme_support() {
        add_theme_support( 'title-tag' );
        add_theme_support( 'custom-logo' );
        add_theme_support( 'post-thumbnails' );
    }
    add_action( 'after_setup_theme', 'clever_theme_support' );

    // REGISTER MENUS
    function clever_menus() {
        $locations = [
            'primary' => 'Top Navbar Items',
            'footer' => "Footer Menu Items"
        ];

        register_nav_menus( $locations );
    }
    add_action( 'init', 'clever_menus' );

    // REGISTER SIDEBAR
    function clever_widget_areas() {
        register_sidebar(
            [
                'before_title' => '',
                'after_title' => '',
                'before_widget' => '',
                'after_widget' => '',
                'name' => 'Footer Social Icons',
                'id' => 'social-widget',
                'description' => 'Footer social icons'
            ]
        );

        register_sidebar(
            [
                'before_title' => '',
                'after_title' => '',
                'before_widget' => '',
                'after_widget' => '',
                'name' => 'Second widget',
                'id' => 'second-widget',
                'description' => 'any widget..'
            ]
        );
    }
    add_action( 'widgets_init', 'clever_widget_areas' );


    // REGISTER ACF BLOCKS
    function clever_register_acf_blocks() {
        register_block_type( __DIR__ . '/blocks/hero' );
    }
    add_action( 'init', 'clever_register_acf_blocks' );
?>