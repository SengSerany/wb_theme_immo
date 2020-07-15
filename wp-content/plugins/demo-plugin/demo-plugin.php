<?php
/**
 * Plugin Name: Demo Plugin
*/
defined('ABSPATH') or die ("rien à voir");

register_activation_hook(__FILE__, function () {
    touch(__DIR__ . '/demo');
});

register_deactivation_hook(__FILE__, function () {
    unlink(__DIR__ . '/demo');
});

add_action('init', function () {
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
});

// var_dump(plugin_dir_url(__FILE__));
// var_dump(plugin_path_url(__FILE__));