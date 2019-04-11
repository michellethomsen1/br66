<?php

/* ==========================================
	Add Scripts and Stylesheets
============================================= */

function brwordpress_scripts() {
	/* Stylesheets */
	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.6' );
	wp_enqueue_style( 'br66', get_template_directory_uri() . '/css/br.css' );
    
    /* Scripts */
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ), '3.3.6', true );
	wp_enqueue_script( 'bootstrap-bundle-js', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', array( 'jquery' ), '3.3.6', true );
	wp_enqueue_script( 'br66-js', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', true );
}

add_action( 'wp_enqueue_scripts', 'brwordpress_scripts' );



/* ==========================================
	Activate Menus
============================================= */

function register_my_menu() {
	register_nav_menu('header-menu',__( 'Header Menu' ));
}

add_action( 'init', 'register_my_menu' );



/* ==========================================
	Register Sidebars and Widgets.
============================================= */

function arphabet_widgets_init() {
	register_sidebar( array(
		'name'          => 'Footer Company name',
		'id'            => 'footer_companyname',
		'before_widget' => NULL,
		'after_widget'  => NULL,
	) );
	register_sidebar( array(
		'name'          => 'Footer Adress',
		'id'            => 'footer_adress',
		'before_widget' => NULL,
		'after_widget'  => NULL,
	) );
	register_sidebar( array(
		'name'          => 'Footer Email',
		'id'            => 'footer_email',
		'before_widget' => NULL,
		'after_widget'  => NULL,
	) );
}

add_action( 'widgets_init', 'arphabet_widgets_init' );



/* ==========================================
	Theme Support
============================================= */

add_theme_support( 'title-tag' );

add_theme_support( 'custom-logo', array(
	'flex-height' => true,
	'flex-width'  => true,
	'header-text' => array( 'site-title', 'site-description' ),
) );

add_theme_support( 'post-thumbnails' );