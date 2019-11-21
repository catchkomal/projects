<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0.0
 */

?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >

		<link rel="profile" href="https://gmpg.org/xfn/11">
		<link href="<?php echo get_template_directory_uri();?>/font/stylesheet.css" rel="stylesheet"/>
		<?php wp_head(); ?>

	</head>

	<body <?php body_class(); ?>>

		<?php
		wp_body_open();
		?>

		<header>
            <div class="fix_wrap">
                <a href="#" class="logo"><img src="<?php echo THEME_IMG_PATH; ?>/logo.png"/></a>
                <div class="head_right"><img src="<?php echo THEME_IMG_PATH; ?>/header_round.png"/></div>
             </div>
        </header>
		<div class="banner"><img src="<?php echo THEME_IMG_PATH; ?>/banner.jpg"/></div>
