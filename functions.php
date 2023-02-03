<?php
function ajouter_styles() {

wp_enqueue_style(   'style-principale', //identificateur du link css
                    get_template_directory_uri() . '/style.css', //endroit ou se trouve le fichier style.css
                    array(), //les fichiers css qui dépendent de style.css
                    filemtime(get_template_directory() . '/style.css')   //version de notre style.css             
);

}
add_action( 'wp_enqueue_scripts', 'ajouter_styles' );
// ///////////////////////////////enregistrement des menus
if ( ! function_exists( 'enregistrement_nav_menu' ) ) {

	function enregistrement_nav_menu(){
		register_nav_menus( array(
	    	'principal' =>  'Menu Principal',
	    	'footer'  =>  'Men pied de page',
		) );
	}
	add_action( 'after_setup_theme', 'enregistrement_nav_menu', 0 );
}
