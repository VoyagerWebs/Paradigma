<?php
/**
 * The template for displaying all single posts
 * Template Name: CuidadoCotidiano
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Voyager_Webs
 * @since Voyager Webs Theme 1.0
 */

get_header();
?>
<?php 
    // Variables definitions
    $base_url = home_url();
?>
<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-2 text-dark mb-4 animated slideInDown">Paradigma Store</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>">Inicio</a></li>
                    <!-- <li class="breadcrumb-item"><a href="#">Pages</a></li> -->
                    <li class="breadcrumb-item text-dark" aria-current="page">Store</li>
                </ol>
            </nav>
        </div>
    </div>
<!-- Page Header End -->

<!-- Store Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="section-title text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px">
                <p class="fs-5 fw-medium fst-italic text-primary">Loja Store</p>
                <h1 class="display-6">Cuidado Cotidiano</h1>
            </div>
            <div class="row g-4">

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="store-item position-relative text-center">
                        <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/template/img/store-product-2.jpg" alt="" />
                        <div class="p-4">
                            <!-- <div class="text-center mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                            </div> -->
                            <h4 class="mb-3">Creme Dental Natural</h4>
                            <p>
                                Feito com ingredientes Naturais para higienização da boca de un jeito saudável.
                                Livre de Flúor e Parabenos.
                                Consistência similar a una pasta industrial, com efeito refrescante a Mentol.
                            </p>
                            <h4 class="text-primary">25,00 BRL</h4>
                        </div>
                        <div class="store-overlay">
                            <a href="" class="btn btn-primary rounded-pill py-2 px-4 m-2">Mais detalhes<i
                                    class="fa fa-arrow-right ms-2"></i></a>
                            <!-- <a href="" class="btn btn-dark rounded-pill py-2 px-4 m-2">Add to Cart <i
                                    class="fa fa-cart-plus ms-2"></i></a> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="store-item position-relative text-center">
                        <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/template/img/desodorante.jpg" alt="" />
                        <div class="p-4">
                            <!-- <div class="text-center mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                            </div> -->
                            <h4 class="mb-3">Desodorante Natural</h4>
                            <p>
                                O desodorante natural é uma emulsão, feito com elementos nobres da natureza, brindando
                                protecção e hidratação na sua pele.
                            </p>
                            <h4 class="text-primary">25,00 BRL</h4>
                        </div>
                        <div class="store-overlay">
                            <a href="" class="btn btn-primary rounded-pill py-2 px-4 m-2">Mais detalhes<i
                                    class="fa fa-arrow-right ms-2"></i></a>
                            <!-- <a href="" class="btn btn-dark rounded-pill py-2 px-4 m-2">Add to Cart <i
                                    class="fa fa-cart-plus ms-2"></i></a> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="store-item position-relative text-center">
                        <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/template/img/store-product-1.jpg" alt="" />
                        <div class="p-4">
                            <!-- <div class="text-center mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                            </div> -->
                            <h4 class="mb-3">Repelente Natural</h4>
                            <p>
                                Feito com tintura de Cravo e Citronela, direitos de nosso quintal ...Mais um porcentagem
                                de óleo vegetal com Óleo essêncial de Lavanda,
                                para proteger sem agredir,
                                deixando um cheiro mais agradável
                            </p>
                            <h4 class="text-primary">30,00 BRL</h4>
                        </div>
                        <div class="store-overlay">
                            <a href="" class="btn btn-primary rounded-pill py-2 px-4 m-2">Mais detalhes<i
                                    class="fa fa-arrow-right ms-2"></i></a>
                            <!-- <a href="" class="btn btn-dark rounded-pill py-2 px-4 m-2">Add to Cart <i
                                        class="fa fa-cart-plus ms-2"></i></a> -->
                        </div>
                    </div>


                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="store-item position-relative text-center">
                        <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/template/img/store-product-1.jpg" alt="" />
                        <div class="p-4">
                            <div class="text-center mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                            </div>
                            <h4 class="mb-3">Sabão de Carvão ativado + Extracto de Lavanda e O.E de Melaleuca</h4>
                            <p>
                                Proporciona um equilíbrio entre acção exfoliante do Carvão vegetal é a suave limpeza
                                do Extracto Glicerinado de Lavanda.
                                Mais Os benefícios do Óleo essencial de Melaleuca antiséptico e antibacteriano que
                                fazem de esse sabão uma combinação perfeita para uma limpeza profunda sem ressecar a
                                Pele.
                            </p>
                            <h4 class="text-primary">25,00 BRL</h4>
                        </div>
                        <div class="store-overlay">
                            <a href="" class="btn btn-primary rounded-pill py-2 px-4 m-2">Mais detalhes<i
                                    class="fa fa-arrow-right ms-2"></i></a>
                            <!-- <a href="" class="btn btn-dark rounded-pill py-2 px-4 m-2">Add to Cart <i
                                        class="fa fa-cart-plus ms-2"></i></a> -->
                        </div>
                    </div>
                </div>
                <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.1s">
                    <a href="" class="btn btn-primary rounded-pill py-3 px-5">Ver Mais Produtos</a>
                </div>

            </div>
        </div>
<!-- Store End -->

<?php
get_footer();