<?php
/**
 * Plugin Name: Lamborghini Elementor Widgets
 * Description: Añade dos widgets personalizados a Elementor: Ficha Técnica y Cita Histórica.
 * Version: 1.0
 * Author: Jurgen
 */

if (!defined('ABSPATH')) exit;

function lew_init_widgets() {
    if (!did_action('elementor/loaded')) {
        return;
    }

    require_once __DIR__ . '/widgets/ficha-tecnica.php';
    require_once __DIR__ . '/widgets/cita-historica.php';

    \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new \LEW_Ficha_Tecnica());
    \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new \LEW_Cita_Historica());
}
add_action('elementor/widgets/register', 'lew_init_widgets');
