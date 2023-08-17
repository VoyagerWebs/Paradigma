<?php
/**
 * The template for displaying all single posts
 * Template Name: About
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Voyager_Webs
 * @since Voyager Webs Theme 1.0
 */

get_header();
?>


<!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-2 text-dark mb-4 animated slideInDown">Quem somos</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>">Inicio</a></li>
                    <!-- <li class="breadcrumb-item"><a href="#">Pages</a></li> -->
                    <li class="breadcrumb-item text-dark" aria-current="page">Quem somos</li>
                </ol>
            </nav>
        </div>
    </div>
<!-- Page Header End -->


<!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6">
                    <div class="row g-3">
                        <div class="col-6 text-end">
                            <img class="img-fluid bg-white w-100 mb-3 wow fadeIn" data-wow-delay="0.1s"
                            src="<?php echo get_stylesheet_directory_uri(); ?>/template/img/about-1.jpg" alt="produto">
                            <img class="img-fluid bg-white w-50 wow fadeIn" data-wow-delay="0.2s" src="<?php echo get_stylesheet_directory_uri(); ?>/template/img/about-3.jpg"
                                alt="produto">
                        </div>
                        <div class="col-6">
                            <img class="img-fluid bg-white w-50 mb-3 wow fadeIn" data-wow-delay="0.3s"
                            src="<?php echo get_stylesheet_directory_uri(); ?>/template/img/about-4.jpg" alt="">
                            <img class="img-fluid bg-white w-100 wow fadeIn" data-wow-delay="0.4s" src="<?php echo get_stylesheet_directory_uri(); ?>/template/img/about-2.jpg"
                                alt="produto">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="section-title">
                        <p class="fs-5 fw-medium fst-italic text-primary">Quem somos</p>
                        <h1 class="display-6"></h1>
                    </div>
                    <div class="row g-3 mb-4">
                        <!-- <div class="col-sm-4">
                            <img class="img-fluid bg-white w-100" src="img/about-5.jpg" alt="">
                        </div> -->
                        <div class="col-sm-8">
                            <h5>Paradigma Cosmetica Natural</h5>
                            <p class="mb-0"> É um empreendimento artesanal, que tem como objetivo fornecer um produto de
                                qualidade para nossa pele, sendo responsável com o meio ambiente.
                                Acreditamos que nosso trabalho é fonte de prazer, beleza e saúde.
                                Promovendo a economia regional e o trabalho independente, temos participação na Feria de
                                Artesaos de Barra Grande desde 2019, materializando um estilo de Vida em comunhão com a
                                nossas crenças...
                                Meu nome é Lúcia sejam bem-vindos a PARADIGMA ,um estilo de vida!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- About End -->

<?php
get_footer();