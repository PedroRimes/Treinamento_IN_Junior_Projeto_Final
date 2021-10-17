<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <title><?php bloginfo('Comes&Bebes')?><?php wp_title('|'); ?></title>
    <title>Trabalhofinal</title>
    <?php wp_head(); ?>
</head>

<body>
    <header>
        <div class="logo_e_pesquisa">
            <div class="logo">
                <a href="http://trabalhofinal.local">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/img/logo.png" width="70" height="50">
                </a>
            </div> 
            <div class="caixadepesquisa">
                <div class="lupinhaetxt">
                <form role="search" method="get" class="woocommerce-product-search" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                <div class = 'pesquisaHeader'>
                    <label class="screen-reader-text" for="woocommerce-product-search-field-<?php echo isset( $index ) ? absint( $index ) : 0; ?>"><?php esc_html_e( 'Search for:', 'woocommerce' ); ?></label>
                    <button id = 'lupaHeader' type="submit" value="<?php echo esc_attr_x( 'Search', 'submit button', 'woocommerce' ); ?>"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/lupa.png" id = 'dentroLupaHeader'></button>
                    <input id = "search" type="search" id="woocommerce-product-search-field-<?php echo isset( $index ) ? absint( $index ) : 0; ?>" class="search-field" placeholder="Sashimi..." value="<?php echo get_search_query(); ?>" name="s" />
                    <input class="hidden" type = "hidden" name="post_type" value="product" />
                </div>
                </form>
                </div>
            </div>
        </div>
        <div class="faca_pedido_icones">
            <a href="http://trabalhofinal.local/shop">
                <button id="fazerpedido"> Faça um pedido</button>
            </a>
            <div id="mySidenav" class="sidenav">

                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                
                <div id="box-carrinho">
                    CARRINHO
                </div>
                <div id="box-produt-cart">
                    <?php do_action('cart')?>
                </div>
                <div class="boxbotcomprar">
                    <a href="http://trabalhofinal.local/checkout/">
                        <button id="botcomprar" >COMPRAR</button>
                    </a>
                </div>

            </div>
            <span onclick="openNav()">
                <div class="carrinho">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/img/carrinho.png" width = "35" height="35">  
                </div>
            </span>
            <div class="perfil">
                <a href="http://trabalhofinal.local/my-account">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/img/perfil.png" width = "35" height="35" href="">
                </a>
            </div>
        </div>
    </header>