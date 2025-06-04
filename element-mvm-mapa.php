<?php
// element-mvm-mapa.php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

/**
 * Definice elementu "MojeVARY Mapa"
 * Třída dědí z \Bricks\Element a obsahuje všechny povinné metody i vlastnosti.
 * (Vzorem je oficiální příklad z Bricks Academy:  [oai_citation:2‡academy.bricksbuilder.io](https://academy.bricksbuilder.io/article/create-your-own-elements/?utm_source=chatgpt.com))
 */
class MVM_Map_Element extends \Bricks\Element {

    // Kategorie, jak se zobrazí v seznamu prvků v Bricks
    public $category     = 'custom';
    // Unikátní interní identifikátor (bez diakritiky, malá písmena)
    public $name         = 'mvm-mapa';
    // Ikona z Bricks knihovny (např. Fontawesome / Ionicons / Themify)
    public $icon         = 'map-pin';
    // Volitelný CSS selektor, pokud chcete cílit styly mimo wrapper
    public $css_selector = '.mvm-mapa';

    // U nás nemáme žádné externí skripty, takže necháme prázdné
    public $scripts      = [];
    // Element není zanořitelný (nestable), proto necháme false / neuvedeme
    public $nestable     = false;

    /** 
     * Název, který se zobrazí v Bricks panelu (povinné) 
     */
    public function get_label() {
        return esc_html__( 'MojeVARY Mapa', 'mojevary-mapa' );
    }

    /**
     * Klíčová slova pro vyhledávání v panelu – vrací prázdné pole
     */
    public function get_keywords() {
        return [];
    }

    /**
     * Skupiny ovládacích prvků (kontroly nemáme, proto prázdné)
     */
    public function set_control_groups() {}

    /**
     * Definice ovládacích prvků – prozatím prázdná
     */
    public function set_controls() {}

    /**
     * Pokud byste chtěli načítat nějaký JS/CSS, můžete zde spustit wp_enqueue_script() atd.
     * Prozatím necháváme prázdné.
     */
    public function enqueue_scripts() {}

    /**
     * Výstup HTML elementu na frontendu i v builderu.
     * Zde jen jednoduchý placeholder, aby se dalo ověřit, že se element opravdu zobrazuje.
     */
    public function render() {
        echo '<div class="mvm-mapa-placeholder" '
            . 'style="border:1px dashed #999;padding:10px;text-align:center;">'
            . esc_html__( 'MojeVARY Mapa (prázdný prvek)', 'mojevary-mapa' )
            . '</div>';
    }
}