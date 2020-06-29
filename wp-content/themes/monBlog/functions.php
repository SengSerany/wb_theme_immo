<?php
    function my_theme_support () {
        add_theme_support("title-tag");
        add_theme_support('post-thumbnails');
        add_theme_support('menus');
        register_nav_menu('header', 'En tête du menu');
        register_nav_menu('footer', 'Pied de page');
    }

    function my_theme_register_asset () {
        wp_register_style("bootstrap", 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css');
        wp_register_script('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js', ['popper', 'jquery'], false, true);
        wp_register_script('popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', [], false, true);
        wp_deregister_script('jquery');
        wp_register_script('jquery', 'https://code.jquery.com/jquery-3.5.1.slim.min.js', [], false, true);
        wp_enqueue_style('bootstrap');
        wp_enqueue_script('bootstrap');
    }

    function my_theme_title_separator ($title) {
        return '|';
    }

    function my_theme_document_title_parts ($title) {
        unset($title['tagline']);
        return $title;
    }

    function my_theme_menu_class ($classes) {
        $classes[] = 'nav-item';
        return $classes;
    }

    function my_theme_menu_link_class ($attrs) {
        $attrs['class'] = 'nav-link';
        return $attrs;
    }

    add_action("after_setup_theme", "my_theme_support");
    add_action('wp_enqueue_scripts', 'my_theme_register_asset');
    add_filter('document_title_separator', 'my_theme_title_separator');
    add_filter('document_title_parts', 'my_theme_document_title_parts');
    add_filter('nav_menu_css_class', 'my_theme_menu_class');
    add_filter('nav_menu_link_attributes', 'my_theme_menu_link_class');