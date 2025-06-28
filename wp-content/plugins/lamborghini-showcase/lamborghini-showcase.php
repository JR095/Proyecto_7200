<?php
/**
 * Plugin Name: Lamborghini Showcase
 * Description: Muestra modelos de Lamborghini con datos personalizados.
 * Version: 1.0
 * Author: Jurgen
 */
defined('ABSPATH') || exit;

require_once plugin_dir_path(__FILE__) . 'includes/cpt-modelos.php';
require_once plugin_dir_path(__FILE__) . 'includes/shortcode-modelos.php';


function ls_enqueue_styles() {
    wp_enqueue_style('ls-style', plugin_dir_url(__FILE__) . 'assets/css/style.css');
}
add_action('wp_enqueue_scripts', 'ls_enqueue_styles');

