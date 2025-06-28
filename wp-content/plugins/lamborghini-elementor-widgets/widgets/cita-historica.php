<?php
use Elementor\Widget_Base;
use Elementor\Controls_Manager;

class LEW_Cita_Historica extends Widget_Base {
    public function get_name() {
        return 'lew_cita_historica';
    }

    public function get_title() {
        return 'Cita Histórica';
    }

    public function get_icon() {
        return 'eicon-blockquote';
    }

    public function get_categories() {
        return ['general'];
    }

    public function _register_controls() {
        $this->start_controls_section('contenido', [
            'label' => 'Contenido',
        ]);

        $this->add_control('frase', [
            'label' => 'Frase',
            'type' => Controls_Manager::TEXTAREA,
            'default' => 'I wanted to build the perfect car.',
        ]);

        $this->add_control('autor', [
            'label' => 'Autor',
            'type' => Controls_Manager::TEXT,
            'default' => 'Ferruccio Lamborghini',
        ]);

        $this->end_controls_section();
    }

    public function render() {
        $frase = $this->get_settings('frase');
        $autor = $this->get_settings('autor');

        echo "<blockquote class='lew-cita'>";
        echo "<p>“$frase”</p>";
        echo "<cite>— $autor</cite>";
        echo "</blockquote>";
    }
}
