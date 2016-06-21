<?php
//Carrega os styles e scripts do tema
function quatrorodas_scripts(){	
	//JS
	wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery-3.0.0.min.js' );
	wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js' );
	wp_enqueue_script('functions', get_template_directory_uri() . '/js/functions.js' );
	//CSS
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' );
	wp_enqueue_style( 'slicknav', get_template_directory_uri() . '/css/slicknav.min.css' );
    wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'quatrorodas_scripts' );
// Menus do Header
register_nav_menus( array('header'         => 'Menu do header do site') );
register_nav_menus( array('submenu-header' => 'Sub-Menu do header do site') );


//Suportes do tema
add_theme_support( 'post-thumbnails' );
add_theme_support( 'title-tag' );

//Tamanho dos thumbnails
add_image_size( 'destaque-maior', 585, 454, true );
add_image_size( 'destaque', 335, 222, true);
add_image_size( 'subdestaque', 280, 190, true);
?>