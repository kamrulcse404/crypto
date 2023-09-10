<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package metaswiss
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();

// $container = get_theme_mod('understrap_container_type');

?>
 
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>

<?php
	the_title( );
	the_content( ); 
?>

<?php
get_footer();
