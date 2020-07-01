<?php
    function my_theme_support () {
        add_theme_support("title-tag");
        add_theme_support('post-thumbnails');
        add_theme_support('menus');
        register_nav_menu('header', 'En tête du menu');
        register_nav_menu('footer', 'Pied de page');

        add_image_size('card-header', 350, 215, true);
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

    function my_theme_pagination (){
        $pages = paginate_links(['type' => 'array']);
        if ($pages === null) {
            return;
        }
        echo '<nav aria-label="Pagination">';
        echo '<ul class="pagination my-4">';
        foreach($pages as $page) {
            $active = strpos($page, 'current') !== false;
            $class = 'page-item';
            if ($active) {
                $class .= ' active';
            }
            echo '<li class="' . $class . '">';
            echo str_replace('page-numbers', 'page-link', $page);
            echo'</li>';
        }
        echo '</ul>';
        echo '</nav>';
    }

    function my_theme_init () {
        register_taxonomy('sport', 'post', [
            'labels' => [
                'name'              => 'Sport',
                'singular_name'     => 'Sport',
                'plural_name'       => 'Sports',
                'search_items'      => 'Rechercher des sports',
                'all_items'         => 'Tout les sports',
                'edit_item'         => 'Editer le sport',
                'update_item'       => 'Mettre à jour le sport',
                'add_new_item'      => 'Ajouter un nouveau sport',
                'new_item_name'     => 'Nom du nouveau sport',
                'menu_name'         => 'Sport',

            ],
            'show_in_rest' => true,
            'hierarchical' => true,
            'show_admin_column' => true,
        ]);
        register_post_type('bien', [
            'labels' => [
                'name'              => 'Bien',
                'singular_name'     => 'Bien',
                'plural_name'       => 'Biens',
                'search_items'      => 'Rechercher des biens',
                'all_items'         => 'Tout les biens',
                'edit_item'         => 'Editer le bien',
                'update_item'       => 'Mettre à jour le bien',
                'add_new_item'      => 'Ajouter un nouveau bien',
                'new_item_name'     => 'Nom du nouveau bien',
                'menu_name'         => 'Biens',

            ],
            'public' => true,
            'menu_position' => 3,
            'menu_icon' => 'dashicons-building',
            'supports' => ['title', 'editor', 'thumbnail'],
            'show_in_rest' => true,
            'has_archive' => true,
        ]);
    }

    add_action('init', 'my_theme_init');
    add_action("after_setup_theme", "my_theme_support");
    add_action('wp_enqueue_scripts', 'my_theme_register_asset');
    add_filter('document_title_separator', 'my_theme_title_separator');
    add_filter('document_title_parts', 'my_theme_document_title_parts');
    add_filter('nav_menu_css_class', 'my_theme_menu_class');
    add_filter('nav_menu_link_attributes', 'my_theme_menu_link_class');

    require_once('metaboxes/sponso.php');

    SponsoMetaBox::register();