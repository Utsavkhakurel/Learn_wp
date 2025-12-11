<?php
function learn_wp_enqueue_styles() {
wp_enqueue_style ( 'tailwindcss', get_template_directory_uri() . '/src/output.css', array(), '1.0', 'all' );
wp_enqueue_style ( 'learnWP-style', get_stylesheet(), [], '1.0.1', 'all' );


}
add_action ('wp_enqueue_scripts', 'learn_wp_styles' );
?>