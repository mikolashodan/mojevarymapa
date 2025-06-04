<?php
/**
 * Plugin Name: MojeVARY Mapa
 * Description: Prázdný (dummy) prvek pro Bricks Builder pod názvem "MojeVARY Mapa".
 * Version:     0.1.3
 * Author:      Mikoláš Hodan
 */

// Zabrání přímému spuštění
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}


add_action( 'init', function() {

    // Pokud Bricks není aktivní, nic neregistrujeme
    if ( ! class_exists( '\Bricks\Elements' ) ) {
        error_log( 'Bricks není aktivní – prvek MojeVARY Mapa se neregistruje.' );
        return;
    }

    // Registrujeme PHP soubor s definicí elementu (element-mvm-mapa.php)
    \Bricks\Elements::register_element( __DIR__ . '/element-mvm-mapa.php', 'mvm-mapa', 'MVM_Map_Element' );

}, 11 );