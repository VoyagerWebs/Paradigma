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

global $product;
$product_content = get_post_field('post_content', $product->ID);

?>

<!-- Product section Start-->
<section class="py-5">
    <div class="container px-4 px-lg-5 my-5">
        <div class="row gx-4 gx-lg-5 align-items-center">
        <div class="col-md-6">
    <?php
    global $product;
    
    // Obtener el objeto del producto actual
    $product = wc_get_product(get_the_ID());

    // Obtener el ID de la imagen destacada del producto
    $product_img_id = $product->get_image_id();
    
    // Inicializar la URL de la imagen como vacía
    $product_img_link = '';

    // Verificar si hay una imagen destacada
    if ($product_img_id) {
        // Obtener la URL de la imagen destacada en el tamaño 'full'
        $product_img_link = wp_get_attachment_image_src($product_img_id, 'full')[0];
    }

    // Si no hay una imagen destacada, mostrar una imagen predeterminada
    if (empty($product_img_link)) {
        $product_img_link = get_stylesheet_directory_uri() . "/template/img/sem-imagen.jpg";
    }
    ?>

    <img class="card-img-top mb-5 mb-md-0" src="<?php echo esc_url($product_img_link); ?>" alt="..." />
</div>


        


        <div class="col-md-6">
            <div class="small mb-1"></div>
            <h1 class="display-5 fw-bolder"><?php echo the_title(); ?></h1>
            <div class="fs-5 mb-5">
                <!-- <span class="text-decoration-line-through">$45.00</span> -->
                <span><?php echo $product->get_price_html(); ?></span>
            </div>
            <p class="lead"><?php echo $product_content; ?></p>
            <div class="d-flex">
                <!-- <input class="form-control text-center me-3" id="inputQuantity" type="num" value="1" style="max-width: 3rem" /> -->
                <a href="https://wa.link/6s38f2 " target="_blank"><button class="btn btn-outline-dark flex-shrink-0" type="button">
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
