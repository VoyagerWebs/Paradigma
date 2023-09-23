<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Voyager_Webs
 * @since Voyager Webs Theme 1.0
 */

?>
			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- #content -->
</div><!-- #page -->

<?php 
    // Variables definitions
    $base_url = home_url();
?>


<?php wp_footer(); ?>
<!-- Footer Start -->
<div class="container-fluid bg-dark footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5 ">
                <div class="col-lg-4 col-md-4">
                    <h4 class="text-primary mb-4">Nos encontramos em</h4>
                    <p class="mb-2"><a href="<?php echo $base_url; ?>/contact#mapa"><i
                                class="fa fa-map-marker-alt text-primary me-3"></i>Barra Grande, Península De Maraú,
                            Ba</a></p>
                    <p class="mb-2"><a href="https://wa.link/6s38f2" target="_blank"><i
                                class="fa fa-phone-alt text-primary me-3"></i>+55 73 8190-0136</a></p>
                    <p class="mb-2"><a href="mailto:paradigmacosmetica@gmail.com"><i
                                class="fa fa-envelope text-primary me-3"></i>paradigmacosmetica@gmail.com</a></p>
                    <div class="d-flex pt-3">
                        <a class="btn btn-square btn-primary rounded-circle me-2"
                            href="https://www.instagram.com/paradigmacosmeticanatural/" target="_blank"><i
                                class="bi bi-instagram"></i></a>
                        <a class="btn btn-square btn-primary rounded-circle me-2"
                            href="https://www.facebook.com/profile.php?id=100069181647033" target="_blank"><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-primary rounded-circle me-2" href="" target="_blank"><i
                                class="fab fa-youtube"></i></a>

                    </div>
                </div>
                <div class="col-lg-4 col-md-4 centrar">
                    <h4 class="text-primary mb-4">Horário de Inverno</h4>
                    <h6 class="text-light">Cuarta-feira a Sábado</h6>
                    <p class="mb-1">A partir das 18hs</p>
                    <h6 class="text-light">Domingo</h6>
                    <p class="mb-1">Fechado</p>
                    <br>
                    <h4 class="text-primary mb-4">Horário de Verão</h4>
                    <h6 class="text-light">Todos os dias</h6>
                    <p class="mb-1">A partir das 17hs</p>
                    
                </div>
                <div class="col-lg-4 col-md-4 centrar">
                    <h4 class="text-primary mb-4">Links Rápidos</h4>
                    <a class="btn btn-link" href="<?php echo $base_url; ?>/about">Quem somos</a>
                    <a class="btn btn-link" href="<?php echo $base_url; ?>/contact">Contate-nos</a>
                    <a class="btn btn-link" href="<?php echo $base_url; ?>/testimonial">Depoimentos</a>
                    <a class="btn btn-link" href="<?php echo $base_url; ?>/#productos">Produtos</a>
                    <a class="btn btn-link" href="<?php echo $base_url; ?>/blog">Blog</a>
                </div>
                

            </div>
        </div>
    </div>
    <!-- Footer End -->
    <!-- Copyright Start -->
    <div class="container-fluid copyright py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="fw-medium color-copyright" href="#">Paradigma Cosmetica Natural</a>, Todos os
                    direitos reservados.
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                    Desenhado por <a class="fw-medium color-copyright" href="">VoyagerWebs</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->
	

</body>
</html>
