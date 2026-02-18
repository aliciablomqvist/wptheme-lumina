<?php

if (!defined('ABSPATH')) {
    exit;
}

function lumina_setup()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('responsive-embeds');
    add_theme_support('editor-styles');
    add_theme_support('align-wide');
    add_theme_support('custom-logo');

    add_image_size('lumina-hero', 1920, 1080, true);
    add_image_size('lumina-square', 800, 800, true);
    add_image_size('lumina-portrait', 600, 900, true);

    register_nav_menus(array(
        'primary' => __('Primary Menu', 'lumina-drinks'),
    ));
}
add_action('after_setup_theme', 'lumina_setup');

function lumina_enqueue_fonts()
{
    wp_enqueue_style(
        'lumina-fonts',
        'https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300;400;500;600&family=Inter:wght@300;400;500;600;700&display=swap',
        array(),
        null
    );
}
add_action('wp_enqueue_scripts', 'lumina_enqueue_fonts');

function lumina_enqueue_assets()
{
    wp_enqueue_style(
        'lumina-style',
        get_stylesheet_uri(),
        array(),
        wp_get_theme()->get('Version')
    );

    wp_enqueue_style(
        'lumina-cocktails',
        get_template_directory_uri() . '/assets/css/cocktails.css',
        array(),
        '1.0.0'
    );

    wp_enqueue_script(
        'lumina-scripts',
        get_template_directory_uri() . '/assets/js/lumina.js',
        array(),
        '1.0.0',
        true
    );
}
add_action('wp_enqueue_scripts', 'lumina_enqueue_assets');

function lumina_register_patterns()
{
    register_block_pattern_category('lumina', array(
        'label' => __('Lumina Drinks', 'lumina-drinks'),
    ));

    $patterns = array(
        'hero-overlay' => 'Hero with Overlay Text',
        'asymmetric-content' => 'Asymmetric Text + Image',
        'drink-showcase' => 'Drink Showcase Grid',
        'menu-section' => 'Drink Menu',
        'reservation-form' => 'Reservation Form',
        'wine-beer-list' => 'Wine & Beer List',
        'instagram-feed' => 'Instagram Feed',
        'story-section' => 'Our Story',
        'events-calendar' => 'Events Calendar',
        'full-menu' => 'Full Cocktail Menu',
    );

    foreach ($patterns as $slug => $title) {
        $file = get_template_directory() . '/patterns/' . $slug . '.php';

        if (file_exists($file)) {
            $pattern_data = include $file;
            register_block_pattern('lumina/' . $slug, $pattern_data);
        }
    }
}
add_action('init', 'lumina_register_patterns');

function lumina_recipe_calculator($atts)
{
    $atts = shortcode_atts(array(
        'name' => 'Cocktail',
        'base_servings' => '1',
    ), $atts);

    ob_start();
    include get_template_directory() . '/includes/recipe-calculator.php';
    return ob_get_clean();
}
add_shortcode('recipe_calculator', 'lumina_recipe_calculator');
