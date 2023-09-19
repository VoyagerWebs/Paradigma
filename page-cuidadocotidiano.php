<?php

/**
 * The template for displaying all single posts
 * Template Name: CuidadoCotidiano
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
            <h1 class="display-6">Cuidado Cotidiano</h1>
        </div>
        <div class="row g-4">
            <?php
            $my_cat = "cuidadocotidiano";
            $catURL = $cat;
            $args = array(
                "post_type" => "product",
                "product_cat" => $my_cat
            );

            $the_query = new WP_Query($args);

            if ($the_query->have_posts()) {
                while ($the_query->have_posts()) {
                    $the_query->the_post();
            ?>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="store-item position-relative text-center">

                            <?php

                            // Get the array of the gallery attachement IDs
                            $attachment_ids = $product->get_gallery_image_ids();

                            if (sizeof($attachment_ids) > 0) {
                                $first_attachment_id = reset($attachment_ids);
                                $product_img_link = wp_get_attachment_image_src($first_attachment_id, 'full')[0];
                            } else {
                                $product_img_link = get_stylesheet_directory_uri() . "/template/img/sem-imagen.jpg";
                            }
                            ?>
                            <?php
                            $product_url = get_permalink();
                            ?>
                            <a href=<?php echo $product_url; ?>><img class="img-fluid" src="<?php echo $product_img_link; ?>" alt="" /></a>
                            <div class="p-4">
                                <h4 class="mb-3"><?php the_title(); ?></h4>
                                <p><?php the_excerpt(); ?></p>
                                <h4 class="text-primary"><?php echo $product->get_price_html(); ?></h4>
                            </div>
                        </div>
                    </div>
            <?php
                }
            } else {
                echo "No se encontraron productos en esta categoría.";
            }
            wp_reset_postdata(); // Restablece los datos de la consulta principal
            ?>


            <!-- Store End -->



            <?php
            get_footer();
