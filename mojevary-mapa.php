<?php
/**
 * Plugin Name: MojeVARY Mapa
 * Description: Prázdný (dummy) prvek pro Bricks Builder pod názvem "MojeVARY Mapa".
 * Version:     1.0.0
 * Author:      Mikoláš Hodan
 */

// Zabrání přímému spuštění
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Zaregistrujeme vlastní prvek po inicializaci Bricks
add_action( 'bricks/element/register', function() {

    // Parametry prvku
    $settings = [
        'key'         => 'mvm-mapa',            // unikátní ID prvku
        'name'        => 'mvm-mapa',            // volný název (bez diakritiky)
        'title'       => 'MojeVARY Mapa',       // text, který se zobrazí v editoru
        'category'    => 'basic',               // kategorie, např. basic, custom, layout apod.
        'icon'        => 'map-pin',             // ikona z Bricks knihovny ikon
        'params'      => [],                    // zatím prázdné, nebudeme mít žádné nastavení
    ];

    \Bricks\Elements::register( $settings, function() {
        // Tělo renderování prvku (frontend)
        // Zatím necháváme prvek prázdný – nemusí vracet nic
        echo '<div class="mvm-mapa-placeholder"></div>';
    } );
} );