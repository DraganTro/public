<?php

// Enregistrement du nouveau menu

register_nav_menus( array(
	'main' => 'Menu Principal',
	'footer' => 'Bas de page',
) );

// Ajout d'une fonction pour afficher le lien Admin lorsque l'utilisateur est connecté

function add_admin_to_menu( $items, $args ) {
    if ( is_user_logged_in() && $args->theme_location == 'main' ) {
        $items .= '<li><a class="admin" href="' . admin_url() . '">Admin</a></li>';
    }
    return $items;
}
add_filter( 'wp_nav_menu_items', 'add_admin_to_menu', 10, 2 );

