<?php
/**
 * The template for displaying all single posts
 * Template Name: Home
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

<!-- Carousel Start -->
    <div class="container-fluid px-0 mb-5">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="<?php echo get_stylesheet_directory_uri(); ?>/template/img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7 text-center">
                                    <p class="fs-4 text-dark animated zoomIn">BEM-VINDOS ao </p>
                                    <h1 class="display-1 text-dark mb-4 animated zoomIn">PARADIGMA</h1>
                                    <h3 class="fs-4 text-white animated zoomIn"><strong class="text-dark">Cosmetica
                                            Natural</strong></h3>
                                    <!-- <a href=""
                                        class="btn btn-outline-dark rounded-pill py-3 px-5 animated zoomIn boton-descubra">Descubra
                                        mais</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <img class="w-100" src="<?php echo get_stylesheet_directory_uri(); ?>/template/img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7 text-center">
                                    <p class="fs-4 text-dark animated zoomIn"><strong
                                            class="text-dark"></strong>BEM-VINDOS ao </strong></p>
                                    <h1 class="display-1 text-dark mb-4 animated zoomIn">PARADIGMA</h1>
                                    <h3 class="fs-4 text-white animated zoomIn"><strong class="text-dark"> Cosmetica
                                            Natural</strong></h3>
                                    <!-- <a href=""
                                        class="btn btn-outline-dark rounded-pill py-3 px-5 animated zoomIn boton-descubra">Descubra
                                        mais</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
<!-- Carousel End -->


<!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6">
                    <div class="row g-3">
                        <div class="col-6 text-end">
                            <img class="img-fluid bg-white w-100 mb-3 wow fadeIn" data-wow-delay="0.1s"
                            src="<?php echo get_stylesheet_directory_uri(); ?>/template/img/about-1.jpg" alt="">
                            <img class="img-fluid bg-white w-50 wow fadeIn" data-wow-delay="0.2s" src="<?php echo get_stylesheet_directory_uri(); ?>/template/img//about-3.jpg"
                                alt="">
                        </div>
                        <div class="col-6">
                            <img class="img-fluid bg-white w-50 mb-3 wow fadeIn" data-wow-delay="0.3s"
                            src="<?php echo get_stylesheet_directory_uri(); ?>/template/img/about-4.jpg" alt="">
                            <img class="img-fluid bg-white w-100 wow fadeIn" data-wow-delay="0.4s" src="<?php echo get_stylesheet_directory_uri(); ?>/template/img/about-2.jpg"
                                alt="">
                        </div>
                        <a href="<?php echo $base_url; ?>/about" class="btn btn-outline-dark rounded-pill py-3 px-5 animated zoomIn boton-descubra">Descubra mais</a>
                    </div>
                    
                </div>
                
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="section-title">
                        <p class="fs-5 fw-medium fst-italic text-primary">Nossa marca</p>
                        <h1 class="display-6">A história de sucesso da Paradigma desde 2019</h1>
                    </div>
                    <div class="row g-3 mb-4">
                        <div class="col-sm-4">
                            <img class="img-fluid bg-white w-100" src="<?php echo get_stylesheet_directory_uri(); ?>/template/img/about-5.jpg" alt="">
                        </div>
                        <div class="col-sm-8">
                            <h5>Nossos produtos são os mais populares em Barra Grande</h5>
                            <p class="mb-0">Estão feitos desde zero, sem utilização de bases.
                                Por isso que são 100 naturais
                            </p>
                        </div>
                        
                    </div>
                <div class="border-top mb-4"></div>
                    <div class="row g-3">
                        <div class="col-sm-8">
                            <h5>O uso diário de nossos produtos não é bom apenas para sua saúde, mas também para o meio
                                ambiente</h5>
                            <p class="mb-0">Sem derivados do petróleo né essências sintética</p>
                        </div>
                        <div class="col-sm-4">
                            <img class="img-fluid bg-white w-100" src="<?php echo get_stylesheet_directory_uri(); ?>/template/img/about-6.jpg" alt="">
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
<!-- About End -->


<!-- Products Start -->
    <div class="container-fluid product py-5 my-5" id="productos">
        <div class="container py-5">
            <div class="section-title text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="fs-5 fw-medium fst-italic text-primary">Nossos produtos</p>
                <h1 class="display-6">Produtos naturais têm um efeito positivo no corpo</h1>
            </div>
            <div class="owl-carousel product-carousel wow fadeInUp" data-wow-delay="0.5s">
                <a href="" class="d-block product-item rounded">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/template/img/product-1.jpg" alt="">
                    <div class="bg-white shadow-sm text-center p-4 position-relative mt-n5 mx-4">
                        <h4 class="text-primary">Óleo</h4>
                        <span class="text-body">Óleo Vegetal para cuidados diários da pele do corpo. Feito na base de
                            óleo vegetal de prensado ao frio. Nutre a pele, e perfuma.</span>
                    </div>
                </a>
                <a href="" class="d-block product-item rounded">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/template/img/product-2.jpg" alt="">
                    <div class="bg-white shadow-sm text-center p-4 position-relative mt-n5 mx-4">
                        <h4 class="text-primary">Xampu</h4>
                        <span class="text-body">Em creme Natural, feitos desde zero, sem utilização de bases.</span>
                    </div>
                </a>
                <a href="" class="d-block product-item rounded">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/template/img//product-3.jpg" alt="">
                    <div class="bg-white shadow-sm text-center p-4 position-relative mt-n5 mx-4">
                        <h4 class="text-primary">Sabão</h4>
                        <span class="text-body"> Experiência única para nosso banho de cada dia</span>
                    </div>
                </a>
                <a href="" class="d-block product-item rounded">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/template/img/product-4.jpg" alt="">
                    <div class="bg-white shadow-sm text-center p-4 position-relative mt-n5 mx-4">
                        <h4 class="text-primary">Hidratante</h4>
                        <span class="text-body">Emulsão feita na base do mais puro óleo de côco, prensado a frio , e com
                            manteigas de cacau e cupuaçu orgânicas da região</span>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <!-- Products End -->
    <!-- Video Start -->
    <div class="container-fluid video my-5">
        <div class="container">
            <div class="row g-0">
                <div class="col-lg-6 py-5 wow fadeIn" data-wow-delay="0.1s">
                    <div class="py-5">
                        <h1 class="display-6 mb-4"> Aqui nesse vídeo mostramos como usar as barras de <span
                                class="text-white">Shampoo e Condicionador,</span> lavando com cuidado e carinho </h1>
                        <h5 class="fw-normal lh-base fst-italic text-white mb-5">Ser emprendedora também É perder a
                            vergonha, É fazer até a publicidade do produto</h5>
                        <div class="row g-4 mb-5">
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0 btn-lg-square bg-white text-primary rounded-circle me-3">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <span class="text-dark">Três tipos de Xampu para limpar e cuidar o cabelo</span>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0 btn-lg-square bg-white text-primary rounded-circle me-3">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <span class="text-dark">Cabelo misto</span>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0 btn-lg-square bg-white text-primary rounded-circle me-3">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <span class="text-dark">Cabelo oleoso</span>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0 btn-lg-square bg-white text-primary rounded-circle me-3">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <span class="text-dark">Cabelos Seco</span>
                                </div>
                            </div>
                        </div>
                        <!-- <a class="btn btn-light rounded-pill py-3 px-5" href="">Descubra mais</a> -->
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="h-100 d-flex align-items-center justify-content-center" style="min-height: 300px;">
                        <button type="button" class="btn-play" data-bs-toggle="modal"
                            data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video End -->


    <!-- Video Modal Start -->
    <div class="modal modal-video fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">Youtube Video</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- 16:9 aspect ratio -->
                    <div class="ratio ratio-16x9">
                        <iframe class="embed-responsive-item" src="" id="video" allowfullscreen
                            allowscriptaccess="always" allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Modal End -->



<?php
get_footer();