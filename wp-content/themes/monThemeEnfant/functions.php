<?php

    add_action('wp_enqueue_scripts', function () {
        wp_enqueue_style('my_theme_child', get_stylesheet_uri());
        // wp_deregister_style('bootstrap');
        // wp_deregister_style('bootstrap');
    }, 11);

    add_action('after_setup_theme', function () {
        load_child_theme_textdomain('my_theme_child', get_stylesheet_directory() . '/languages');
    });