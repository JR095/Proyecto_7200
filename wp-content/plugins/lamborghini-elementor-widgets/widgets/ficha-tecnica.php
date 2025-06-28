<?php
use Elementor\Widget_Base;
use Elementor\Controls_Manager;

class LEW_Ficha_Tecnica extends Widget_Base {
    public function get_name() {
        return 'lew_ficha_tecnica';
    }

    public function get_title() {
        return 'Ficha Técnica';
    }

    public function get_icon() {
        return 'eicon-post-content';
    }

    public function get_categories() {
        return ['general'];
    }

    public function _register_controls() {
        $this->start_controls_section('contenido', [
            'label' => 'Contenido',
        ]);

        $this->add_control('modelo', [
            'label' => 'Modelo',
            'type' => Controls_Manager::TEXT,
            'default' => 'Lamborghini Aventador',
        ]);

        $this->add_control('potencia', [
            'label' => 'Potencia (HP)',
            'type' => Controls_Manager::NUMBER,
            'default' => 740,
        ]);

        $this->add_control('velocidad', [
            'label' => 'Velocidad Máxima (km/h)',
            'type' => Controls_Manager::NUMBER,
            'default' => 350,
        ]);

        $this->add_control('precio', [
            'label' => 'Precio USD',
            'type' => Controls_Manager::TEXT,
            'default' => '$393,695',
        ]);

        $this->end_controls_section();
    }

    public function render() {
        $modelo = $this->get_settings('modelo');
        $potencia = $this->get_settings('potencia');
        $velocidad = $this->get_settings('velocidad');
        $precio = $this->get_settings('precio');

        echo "<div class='lew-ficha'>";
        echo "<h3>$modelo</h3>";
        echo "<ul>";
        echo "<li><strong>Potencia:</strong> {$potencia} HP</li>";
        echo "<li><strong>Velocidad máxima:</strong> {$velocidad} km/h</li>";
        echo "<li><strong>Precio:</strong> $precio</li>";
        echo "</ul>";
        echo "</div>";
    }
}
