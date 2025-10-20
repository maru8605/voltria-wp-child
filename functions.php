<?php
/**
 * Voltria Child Theme functions
 */

// Enqueue parent & child styles
add_action('wp_enqueue_scripts', function () {
    // Parent Kadence style (Kadence registers 'kadence-style' by default)
    wp_enqueue_style('kadence-parent-style', get_template_directory_uri() . '/style.css', [], wp_get_theme('kadence')->get('Version'));
    // Child main style
    wp_enqueue_style('voltria-child-style', get_stylesheet_uri(), ['kadence-parent-style'], wp_get_theme()->get('Version'));
    // Optional custom.css
    wp_enqueue_style('voltria-custom-css', get_stylesheet_directory_uri() . '/assets/css/custom.css', ['voltria-child-style'], wp_get_theme()->get('Version'));
    // Optional custom.js
    wp_enqueue_script('voltria-custom-js', get_stylesheet_directory_uri() . '/assets/js/custom.js', ['jquery'], wp_get_theme()->get('Version'), true);
});

// Theme setup (thumbnails, menus, etc.) - extend if needed
add_action('after_setup_theme', function () {
    // Example: custom image sizes
    add_image_size('voltria-card', 600, 400, true);
});

// Allow Kadence Elements in additional locations if needed (placeholder for future)
// add_filter('kadence_element_display_locations', function($locations){ return $locations; });