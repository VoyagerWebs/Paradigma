<?php
/**
 * The template for displaying all single posts
 * Template Name: Capilar
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
                <h1 class="display-6">Capilar</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="store-item position-relative text-center">
                        <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/template/img/product-2.jpg" alt="" />
                        <div class="p-4">
                            <!-- <div class="text-center mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                            </div> -->
                            <h4 class="mb-3">Xampu e Condicionador em creme Natural</h4>
                            <p>
                                Nossos produtos estão feitos desde zero, sem utilização de bases.
                                Por isso que são 100 naturais
                                Sem derivados do petróleo né essências sintética
                            </p>
                            <h4 class="text-primary">45,00 BRL</h4>
                        </div>
                        <div class="store-overlay">
                            <a href="<?php echo $base_url; ?>/producto" class="btn btn-primary rounded-pill py-2 px-4 m-2">Mais
                                detalhes<i class="fa fa-arrow-right ms-2"></i></a>
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
                            <h4 class="mb-3">Xampu Sólido</h4>
                            <p>
                                Três tipos de Xampu para limpar e cuidar o cabelo.
                                Feitas por diferentes ingredientes para diferentes tipos de cabelos
                            </p>
                            <h4 class="text-primary">40,00 BRL</h4>
                        </div>
                        <div class="store-overlay">
                            <a href="" class="btn btn-primary rounded-pill py-2 px-4 m-2">Mais detalhes <i
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
                            <h4 class="mb-3">Condicionador Sólido</h4>
                            <p>
                                Feito com óleos de Semente de Gergelim e óleo essências de Gerânio, responsável por
                                nutrir sem deixar oleosidade extra e selar pontas dos fios
                                Pastilha de 40 Gr peso mínimo
                                Embalagens de celofane vegetal
                            </p>
                            <h4 class="text-primary">40,00 BRL</h4>
                        </div>
                        <div class="store-overlay">
                            <a href="" class="btn btn-primary rounded-pill py-2 px-4 m-2">Mais detalhes <i
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