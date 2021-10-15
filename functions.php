<?php
    function my_theme_scripts_function(){
        wp_enqueue_script( 'cart',get_template_directory_uri().'/js/cart.js');
        }
    add_action( 'wp_enqueue_scripts', 'my_theme_scripts_function');
?>