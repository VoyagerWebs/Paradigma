<?php
/**
 * The template for displaying all single posts
 * Template Name: Corporales
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
                <p class="fs-5 fw-medium fst-italic text-primary">Loja Online</p>
                <h1 class="display-6">Corporales</h1>
            </div>
            <div class="row g-4">
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
                            <h4 class="mb-3">Hidratante corporal de Côco</h4>
                            <p>
                                Emulsão feita na base do mais puro óleo de côco, prensado a frio , e com manteigas de
                                cacau e cupuaçu orgânicas da região.
                            </p>
                            <h4 class="text-primary">75,00 BRL</h4>
                        </div>
                        <div class="store-overlay">
                            <a href="" class="btn btn-primary rounded-pill py-2 px-4 m-2">Mais detalhes<i
                                    class="fa fa-arrow-right ms-2"></i></a>
                            <!-- <a href="" class="btn btn-dark rounded-pill py-2 px-4 m-2">Add to Cart <i
                                    class="fa fa-cart-plus ms-2"></i></a> -->
                        </div>
                    </div>
                </div>
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
                            <h4 class="mb-3">Óleo Corporal Afrodisíaco</h4>
                            <p>
                                Óleo Vegetal para cuidados diários da pele do corpo. De uso externo.
                                Feito na base de óleo vegetal de prensado ao frio (amêndoas, e semente de uvas), com uma
                                porcentagem segura de óleos essencial que atingem nossa libido, acrescentando seus
                                poderes sobre nós mesmo.
                            </p>
                            <h4 class="text-primary">80,00 BRL</h4>
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
                        <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/template/img/store-product-3.jpg" alt="" />
                        <div class="p-4">
                            <!-- <div class="text-center mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                            </div> -->
                            <h4 class="mb-3">Pomada de Calêndula e Lavanda</h4>
                            <p>
                                Pensada para tratar dermatitis, assaduras e coceiras nas peles mais sensíveis.
                                "Peles de Bebê"
                                Composta por oleato de Calêndula e Lavanda ( flores orgánicas), cera de carnaúba e
                                manteiga de cacau orgânica da região.
                                Produto Vegano
                            </p>
                            <h4 class="text-primary">50,00 BRL</h4>
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
    </div>
<!-- Store End -->
<?php
get_footer();