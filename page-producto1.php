<?php
/**
 * The template for displaying all single posts
 * Template Name: Producto
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Voyager_Webs
 * @since Voyager Webs Theme 1.0
 */

get_header();
?>

<!-- Product section Start-->
    <section class="py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="row gx-4 gx-lg-5 align-items-center">
                <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="<?php echo get_stylesheet_directory_uri(); ?>/template/img/product-2.jpg" alt="..." /></div>
                <div class="col-md-6">
                    <div class="small mb-1"></div>
                    <h1 class="display-5 fw-bolder">Xampu e Condicionador em creme Natural</h1>
                    <div class="fs-5 mb-5">
                        <!-- <span class="text-decoration-line-through">$45.00</span> -->
                        <span>45,00 BRL</span>
                    </div>
                    <p class="lead">Nossos produtos estão feitos desde zero, sem utilização de bases.
                        Por isso que são 100 naturais
                        Sem derivados do petróleo né essências sintética</p>
                    <div class="d-flex">
                        <!-- <input class="form-control text-center me-3" id="inputQuantity" type="num" value="1" style="max-width: 3rem" /> -->
                        <a href="https://wa.link/6s38f2" target="_blank"><button class="btn btn-outline-dark flex-shrink-0"
                                type="button">
                                <i class="bi bi-whatsapp"></i>

                                Perguntar
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product section End-->
<?php
get_footer();