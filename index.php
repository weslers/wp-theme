<?php
/**
 * The main template file.
 *
 */
get_header();

get_template_part( 'loop', 'index' );

get_sidebar();
get_footer();
?>