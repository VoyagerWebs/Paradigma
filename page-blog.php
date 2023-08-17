<?php
/**
 * The template for displaying all single posts
 * Template Name: Blog
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
            <h1 class="display-2 text-dark mb-4 animated slideInDown">Blog</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>">Inicio</a></li>
                    <!-- <li class="breadcrumb-item"><a href="#">Pages</a></li> -->
                    <li class="breadcrumb-item text-dark" aria-current="page">Artigo</li>
                </ol>
            </nav>
        </div>
    </div>
<!-- Page Header End -->


<!-- Article Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-5 wow fadeIn" data-wow-delay="0.1s">
                    <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/template/img/article.jpg" alt="blog1">
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="section-title">
                        <p class="fs-5 fw-medium fst-italic text-primary">Artigo em destaque</p>
                        <h1 class="display-6">A história de Cosmeticos Naturais</h1>
                    </div>
                    <p class="mb-4">Como você já sabe, a civilização egípcia que foi pioneira no conceito de cuidado e beleza, sendo copiada por outras civilizações. Podemos dizer que foram pioneiros na criação de #trendingtopics. A crença que eles tinham era que "Ser bonito os aproximava dos deuses e era uma conexão com a vida após a morte". De fato, foram encontrados frascos de cosméticos datados de 3.500 aC, com evidências de que eram usados ​​tanto por homens quanto por mulheres.
                    </p>
                    <p class="mb-4">Embora nos pareça surpreendente, já utilizavam ingredientes naturais como azeite, óleo de sésamo, óleo de cártamo, óleo de craca, óleo de moringa e óleo de amêndoa doce. Além disso, diz-se que também usavam perfumes como parte muito importante de seu ritual de beleza.</p>
                    <!-- <a href="" class="btn btn-primary rounded-pill py-3 px-5">Ler Mais</a> -->
                </div>
            </div>
        </div>
    </div>
<!-- Article End -->

<?php
get_footer();