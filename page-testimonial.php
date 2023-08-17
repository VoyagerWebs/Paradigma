<?php
/**
 * The template for displaying all single posts
 * Template Name: Testimonial
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
            <h1 class="display-2 text-dark mb-4 animated slideInDown">Depoimentos</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>">Inicio</a></li>
                    <!-- <li class="breadcrumb-item"><a href="#"></a></li> -->
                    <li class="breadcrumb-item text-dark" aria-current="page">Depoimentos</li>
                </ol>
            </nav>
        </div>
    </div>
<!-- Page Header End -->


<!-- Testimonial Start -->
    <div class="container-fluid py-5 testimonial">
        <div class="container">
            <div class="section-title text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="fs-5 fw-medium fst-italic text-primary">Depoimentos</p>
                <h1 class="display-6">O que os clientes dizem sobre nossos produtos</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.5s">
                <div class="testimonial-item p-4 p-lg-5">
                    <p class="mb-4">Fui passear em Barra Grande e comprei os produtos paradigma. Adorei todos. Comprei shampoo , condicionador, sabonetes e óleo p massagem com semente de uva, canfora e eucalipto glóbulos. Foi uma compra maravilhosa! Vale muito a pena como dias em a mimeirada.</p>
                    <div class="d-flex align-items-center justify-content-center">
                        <!-- <img class="img-fluid flex-shrink-0" src="img/testimonial-1.jpg" alt=""> -->
                        <div class="text-start ms-3">
                            <h5>Valeria</h5>
                            <!-- <span class="text-primary">Profession</span> -->
                        </div>
                    </div>
                </div>
                <div class="testimonial-item p-4 p-lg-5">
                    <p class="mb-4">Produtinhos maravilhosos e naturais!! Feitos com muito amor e respeito à natureza!!! Recomendo!!</p>
                    <div class="d-flex align-items-center justify-content-center">
                        <!-- <img class="img-fluid flex-shrink-0" src="img/testimonial-2.jpg" alt=""> -->
                        <div class="text-start ms-3">
                            <h5>Athena</h5>
                            <!-- <span class="text-primary">Profession</span> -->
                        </div>
                    </div>
                </div>
                <div class="testimonial-item p-4 p-lg-5">
                    <p class="mb-4">Produtos de total qualidade, fico sempre super satisfeito, uma linha consciente, e os aromas de muito bom gosto. Indico a todos!</p>
                    <div class="d-flex align-items-center justify-content-center">
                        <!-- <img class="img-fluid flex-shrink-0" src="img/testimonial-3.jpg" alt=""> -->
                        <div class="text-start ms-3">
                            <h5>Iggor</h5>
                            <!-- <span class="text-primary">Profession</span> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Testimonial End -->

<?php
get_footer();