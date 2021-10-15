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
                    <form action="<?php echo bloginfo("url");?>/product/" method="get">
                        <input type="image" src="<?php echo get_stylesheet_directory_uri()?>/img/lupa.png" id="lupa">
                        <input type="text" name="s" cat="s" placeholder="Pesquisar..." value="<?php echo the_search_query( )?>" id="search" required>
                        <input type="text" name="post-type" value="product" class="hidden">
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
                    <a id="botcomprar" href="http://trabalhofinal.local/checkout/">COMPRAR</a>
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