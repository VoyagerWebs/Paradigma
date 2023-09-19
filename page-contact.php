<?php

/**
 * The template for displaying all single posts
 * Template Name: Contact
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
        <h1 class="display-2 text-dark mb-4 animated slideInDown">
            Contato
        </h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>">Inicio</a></li>
                <!-- <li class="breadcrumb-item"><a href="#">Pages</a></li> -->
                <li class="breadcrumb-item text-dark" aria-current="page">
                    Contato
                </li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->

<!-- Contact Start -->
<div class="container-xxl contact py-5">
    <div class="container">
        <div class="section-title text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px">
            <p class="fs-5 fw-medium fst-italic text-primary">Contato</p>
            <h1 class="display-6">Qualquer dúvida, entre em contato conosco</h1>
        </div>
        <div class="row g-5 mb-5">
            <div class="col-md-4 text-center wow fadeInUp" data-wow-delay="0.3s">
                <div class="btn-square mx-auto mb-3"><a href="mailto:paradigmacosmetica@gmail.com">
                        <i class="fa fa-envelope fa-2x text-white"></i></a>
                </div>
                <p class="mb-2">paradigmacosmetica@gmail.com</p>
                <p class="mb-0"></p>
            </div>
            <div class="col-md-4 text-center wow fadeInUp" data-wow-delay="0.4s">
                <div class="btn-square mx-auto mb-3"><a href="https://wa.link/6s38f2" target="_blank">
                        <i class="fa fa-phone fa-2x text-white"></i></a>
                </div>
                <p class="mb-2">+55 73 8190-0136</p>
                <p class="mb-0"></p>
            </div>
            <div class="col-md-4 text-center wow fadeInUp" data-wow-delay="0.5s">
                <div class="btn-square mx-auto mb-3"><a href="<?php echo $base_url; ?>/contact">
                        <i class="fa fa-map-marker-alt fa-2x text-white"></i></a>
                </div>
                <p class="mb-2">Barra Grande,</p>
                <p class="mb-0">Península De Maraú, Ba</p>
            </div>
        </div>
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <h3 class="mb-4">Formulário de Contato</h3>
                <p class="mb-4">
                    Escreva-nos para quaisquer preocupações
                </p>
                <form action="https://formspree.io/f/xoqojrqv" method="post">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="name" placeholder="Seu nome" name="nome" required />
                                <label for="name">Seu nome</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="email" class="form-control" id="email" placeholder="Seu Email" name="email" />
                                <label for="email">Seu email</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="subject" placeholder="Subject" name="asunto" required />
                                <label for="subject">
                                    Assunto</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 120px" name="mensagem" required></textarea>
                                <label for="message">Mensagem</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary rounded-pill py-3 px-5" type="submit">
                                Enviar mensagem
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s" id="mapa">
                <div class="h-100">
                    <?php echo
                    '<iframe
                            src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d968.276784917877!2d-38.95173873047354!3d-13.892541397282333!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMTPCsDUzJzMzLjIiUyAzOMKwNTcnMDMuOSJX!5e0!3m2!1ses-419!2sar!4v1689795413108!5m2!1ses-419!2sar"
                            width="600" height="450" style="border: 0" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>'
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->


<?php
get_footer();
