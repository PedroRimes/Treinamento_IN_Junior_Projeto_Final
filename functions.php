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
            echo "<div class='produto' id = 'itensCarrinho'>
                    <div id = 'imagemBonitaCarrinho'>". $_product->get_image() ."</div>
                    <div class = 'produto-info'>
                        <span class='text-left'>" . $_product->get_name() . "</span>
                        <div class='quantidade'>
                            <span> " . $value['quantity'] . "</span>
                        </div>
                    </div>
                    <div class='valor-prod'"
                        . wc_price($value['line_subtotal']) . 
                    "</div>
                </div>";
            $total_value += $value['line_subtotal'];                
        }
        if($total_value != 0){
            echo "<span id = 'precoCarrinho'><br>Total do Carrinho: " . wc_price($total_value) . "</span>";
        }
    };
    add_action('cart','cb_carrinho');
    
    function mytheme_add_woocommerce_support() {
        add_theme_support( 'woocommerce' );
    }
    add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );
    
    add_action( 'init', 'bc_remove_wc_breadcrumbs' );
    function bc_remove_wc_breadcrumbs() {
        remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0 );
    }
?>