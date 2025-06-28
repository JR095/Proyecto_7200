<?php
function ls_registrar_cpt_modelos() {
    $labels = array(
        'name' => 'Modelos',
        'singular_name' => 'Modelo',
        'add_new' => 'Agregar Nuevo',
        'add_new_item' => 'Agregar Nuevo Modelo',
        'edit_item' => 'Editar Modelo',
        'new_item' => 'Nuevo Modelo',
        'view_item' => 'Ver Modelo',
        'search_items' => 'Buscar Modelos',
        'not_found' => 'No se encontraron modelos',
        'menu_name' => 'Modelos Lamborghini',
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-car',
        'supports' => array('title', 'editor', 'thumbnail'),
        'show_in_rest' => true,
    );

    register_post_type('ls_modelo', $args);
}
add_action('init', 'ls_registrar_cpt_modelos');
