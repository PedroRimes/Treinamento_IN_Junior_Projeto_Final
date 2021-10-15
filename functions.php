<?php
    function my_theme_scripts_function(){
        wp_enqueue_script( 'cart',get_template_directory_uri().'/js/cart.js');
        }
    add_action( 'wp_enqueue_scripts', 'my_theme_scripts_function');

    function cb_carrinho(){
        $total_value = 0;
        $items = WC()->cart->get_cart();
        foreach ($items as $item => $value){
            $_product = wc_get_product($value['data']->get_id());
            echo "<div class='produto'>"
            . $_product->get_image() .
            "<div class = 'produto-info'>
            <span class='text-left'>" . $_product->get_name() . "</span>
            <div class='produto-info2'<span>Quantidade: " . $value['quantity'] . "</span>
            " . wc_price($value['line_subtotal']) . "</div>
            </div>
            </div>";
            $total_value += $value['line_subtotal'];                
        }
        if($total_value != 0){
            echo "<span class='text-left'><hr>Total do Carrinho: " . wc_price($total_value) . "</span>";
        }
    };
    add_action('cart','cb_carrinho');
?>