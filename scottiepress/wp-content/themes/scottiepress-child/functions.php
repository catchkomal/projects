<?php
/**
 * Courage Child functions and definitions
 *
 * @package Courage Child
 *
 *
 * ===== PLEASE NOTE ==========================================================
 * 
 * Unlike style.css, the functions.php of a child theme does not override its 
 * counterpart from the parent. Instead, it is loaded in addition to the parent's 
 * functions.php. (Specifically, it is loaded right before the parent's file.)
 * 
 * In that way, the functions.php of a child theme provides a smart, trouble-free 
 * method of modifying the functionality of a parent theme. 
 * 
 * Source: http://codex.wordpress.org/Child_Themes
 * 
 * =============================================================================== */

 
/**
 *  Enqueue scripts and styles.
 */
function courage_child_scripts() {

	// Enqueue Parent Stylesheet
	wp_enqueue_style( 'scottiepress', get_template_directory_uri() . '/css/style.css' );
	
} // courage_child_scripts
add_action( 'wp_enqueue_scripts', 'courage_child_scripts' );
if( !defined(THEME_IMG_PATH)){
   define( 'THEME_IMG_PATH', get_stylesheet_directory_uri() . '/images' );
  }


/* You can add your own php functions and code snippets below */