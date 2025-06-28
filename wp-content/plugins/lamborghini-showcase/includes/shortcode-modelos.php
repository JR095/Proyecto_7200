<?php
function ls_shortcode_modelos() {
    $query = new WP_Query(array(
        'post_type' => 'ls_modelo',
        'posts_per_page' => -1,
    ));

    if (!$query->have_posts()) return '<p>No hay modelos registrados.</p>';

    $output = '<h2 class="ls-modelos-titulo">Modelos disponibles</h2>';
    $output .= '<div class="ls-modelos-grid">';
    
    while ($query->have_posts()) {
        $query->the_post();
        $output .= '<div class="ls-modelo">';
        $output .= get_the_post_thumbnail(get_the_ID(), 'medium');
        $output .= '<h3 class="ls-titulo-modelo">' . get_the_title() . '</h3>';
        $output .= '<p>' . get_the_excerpt() . '</p>';
        $output .= '</div>';
    }

    wp_reset_postdata();
    $output .= '</div>';

    return $output;
}
add_shortcode('lamborghini_models', 'ls_shortcode_modelos');
