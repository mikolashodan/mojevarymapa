<?php
/**
 * Plugin Name: MojeVARY Mapa
 * Description: Prázdný (dummy) prvek pro Bricks Builder pod názvem "MojeVARY Mapa".
 * Version:     0.1.2
 * Author:      Mikoláš Hodan
 */

// Zabrání přímému spuštění
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Najdříve počkáme na init, aby Bricks byl už načtený
add_action( 'init', function() {
    // Pokud Bricks není aktivní, nic neregistrujeme
    if ( ! class_exists( '\Bricks\Elements' ) ) {
        error_log( 'Bricks není aktivní – prvek MojeVARY Mapa se neregistruje.' );
        return;
    }

    // Teď registrujeme vlastní prvek při hooksu bricks/element/register
    add_action( 'bricks/element/register', function() {
        error_log( 'Registruji prvek MojeVARY Mapa' );

        $settings = [
            'key'      => 'mvm-mapa',          // unikátní ID prvku
            'name'     => 'mvm-mapa',          // interní jméno (bez diakritiky)
            'title'    => 'MojeVARY Mapa',     // název, který se zobrazí v editoru
            'category' => 'custom',            // např. basic, custom, layout atd.
            'icon'     => 'map-pin',           // ikona z Bricks knihovny
            'params'   => [],                  // zatím bez nastavení
        ];

        \Bricks\Elements::register( $settings, function() {
            // Jednoduchý placeholder pro element
            echo '<div class="mvm-mapa-placeholder" style="border:1px dashed #999;padding:10px;text-align:center;">';
            echo 'MojeVARY Mapa (prázdný prvek)';
            echo '</div>';
        } );
    } );
} );