<?php /* Template Name: Pagina principal */ ?>

<?php get_header(); ?>
    <main>
        <section class="texto_principal">
            <div id="titulo">
                Comes&Bebes
            </div>
            <div id="sub-titulo">
                O restaurante para todas as fomes
            </div>
        </section>
        <section class="parte_azul_bb">
            <div class="texto">
                CONHEÇA NOSSA LOJA
            </div>
            <div class="categorias">
                <div class="txttipos">
                    Tipos de pratos principais
                </div>
                <div class="box-categorias">
                <?php 
                        $taxonomy     = 'product_cat';
                        $orderby      = 'name';  
                        $show_count   = 0;      // 1 for yes, 0 for no
                        $pad_counts   = 0;      // 1 for yes, 0 for no
                        $hierarchical = 1;      // 1 for yes, 0 for no  
                        $title        = '';  
                        $empty        = 1;

                        $args = array(
                                'taxonomy'     => $taxonomy,
                                'orderby'      => $orderby,
                                'show_count'   => $show_count,
                                'pad_counts'   => $pad_counts,
                                'hierarchical' => $hierarchical,
                                'title_li'     => $title,
                                'hide_empty'   => $empty
                        );

                        $categories = get_categories($args);
                        if($categories){
                            foreach($categories as $category){
                                $thumbnail_id = get_woocommerce_term_meta($category->term_id, 'thumbnail_id', true);
                                $image = wp_get_attachment_url($thumbnail_id);
                                echo "<div class = 'card-categorias'>
                                        <img src='{$image}' alt='' id='imgcat'></img>
                                        <p>{$category->name}</p>
                                    </div>";
                            }
                        } 
                    ?>
                    
                </div>
                <h3 class="h3index"> Pratos do dia de hoje: </h3>
                        
            <div id="diadasemana">
            <?php   
                setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
                date_default_timezone_set('America/Sao_Paulo');
                $day=strftime(ucwords("%w",time()));
                switch ($day) {
                    case 0:
                        echo "DOMINGO";
                        break;
                    case 1:
                        echo "SEGUNDA";
                        break;
                    case 2:
                        echo "TERÇA";
                        break;
                    case 3:
                        echo "QUARTA";
                        break;
                    case 4:
                        echo "QUINTA";
                        break;
                    case 5:
                        echo "SEXTA";
                        break;
                    case 6:
                        echo "SÁBADO";
                        break;
                    
                }
                ?>
                </div>
                <div class="categoriashome">
                <?php 
                        
                    setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
                    date_default_timezone_set('America/Sao_Paulo');
                    $day=strftime(ucwords("%a",time()));

                    $args = array(
                        'post_type'      => 'product',
                        'posts_per_page' => 4,
                        'product_tag'       => $day,
                    );
                
                    $loop = new WP_Query( $args );
                
                    while ( $loop->have_posts() ) : $loop->the_post();
                        global $product;
                        $imagem = woocommerce_get_product_thumbnail();
                        $titulo = get_the_title();
                        $preco = wc_price($product->get_price_including_tax(1,$product->get_price()));;  
                        echo "<div class = 'diadasemanaEFotos'>
                        <img {$imagem}</img>
                        <div id = 'captiondiadasemana'>
                        <p>{$titulo}</p>
                        <div id='precoECart'>
                        <p>{$preco}</p> 
                        <button id = 'addToCartBut'></button>
                        </div>
                        </div>
                        
                        </div>";
                        
                    endwhile;
                
                    wp_reset_query();
                ?>
                    </div>
                </div>
            </div>
        </section>
        <section class="sub-footer">
            <div class="vnlf">
                VISITE NOSSA LOJA FÍSICA
            </div>
            <div class="end_e_slide">
                <div class="mapa_end">
                    <div class="mapa"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3675.1928043754892!2d-43.136297684992726!3d-22.906258343611036!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x99817ee1756031%3A0xd1dcbde0df6f873c!2sAv.%20Milton%20Tavares%20de%20Souza%20-%20Boa%20Viagem%2C%20Niter%C3%B3i%20-%20RJ%2C%2024210-346!5e0!3m2!1spt-BR!2sbr!4v1633111634450!5m2!1spt-BR!2sbr" width="345" height="203" style="border:0;" allowfullscreen="" loading="lazy"></iframe></div>
                    <div class="endereço">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/img/garfoefaca.png" width="19" height="18">
                        Rua Iorem ipsum, 123, LI, Brasil
                    </div>
                    <div class="numero">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/img/phone.png" width="19" height="18">
                        (XX) XXXX-XXXX
                    </div> 
                </div>
                <ul class="slide-imagens">
                    <li>
                        <input type="radio" id="slide1" name="slidef" checked>
                        <label for="slide1"></label>
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/img/fotocomendo1.jpg">
                    </li>
                    <li>
                        <input type="radio" id="slide2" name="slidef" checked>
                        <label for="slide2"></label>
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/img/fotocomendo2.jpg">
                    </li>
                    <li>
                        <input type="radio" id="slide3" name="slidef" checked>
                        <label for="slide3"></label>
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/img/fotocomendo3.jpg">
                    </li>
                </ul>
            </div>
        </section>
    </main>
<?php get_footer(); ?>
