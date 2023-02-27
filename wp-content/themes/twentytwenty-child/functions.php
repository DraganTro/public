<?php


register_nav_menus( array(
	'main' => 'Menu Principal',
	'footer' => 'Bas de page',
) );

function add_admin_link_to_menu( $items, $args ) {
    if ( is_user_logged_in() && $args->theme_location == 'main' ) {
        $items .= '<li><a class="admin" href="' . admin_url() . '">Admin</a></li>';
    }
    return $items;
}
add_filter( 'wp_nav_menu_items', 'add_admin_link_to_menu', 10, 2 );

