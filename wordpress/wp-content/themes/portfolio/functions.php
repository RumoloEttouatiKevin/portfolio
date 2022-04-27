<?php

if (!function_exists('portfolio_scripts')) {
    function portfolio_scripts()
    {
        wp_enqueue_style('portfolio-style', get_template_directory_uri() . '/assets/css/style.css', ['portfolio-reboot'], wp_get_theme()->version);
        wp_enqueue_style('portfolio-reboot', get_template_directory_uri() . '/assets/css/reboot.css', [], '4.0');
        wp_enqueue_style('portfolio-devicon', 'https://cdn.jsdelivr.net/gh/devicons/devicon@v2.15.1/devicon.min.css', []);

        wp_enqueue_script('portfolio-script', get_template_directory_uri() . '/assets/js/script.js', [], wp_get_theme()->version, true);
        wp_enqueue_script('portfolio-tagcanvas', get_template_directory_uri() . '/assets/js/tagcanvas.min.js', [], '2.11');
    }

    add_action('wp_enqueue_scripts', 'portfolio_scripts');
}

if (! function_exists('portfolio_setup')) {
    function portfolio_setup()
    {
        add_theme_support('menus');
        add_theme_support('post-thumbnails');
        register_nav_menus([
            'header' => 'Menu principal',
        ]);
    }

    add_action('after_setup_theme', 'portfolio_setup');
}