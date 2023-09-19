<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Voyager_Webs
 * @since Voyager Webs Theme 1.0
 */

?>
<?php 
    // Variables definitions
    $base_url = home_url();
?>


<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php voyagerwebs_the_html_classes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>Paradigma Cosmetica Natural</title>
    <meta content="" name="keywords">
    <meta content="" name="description">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>



<!-- Spinner Start -->
<div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
</div>
<!-- Spinner End -->



<!-- Navbar Start -->
<div class="container-fluid bg-white sticky-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg bg-white navbar-light py-2 py-lg-0">
                <a href="" class="navbar-brand">
                    <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/template/img/logo.png" alt="Logo">
                </a>
                <button type="button" class="navbar-toggler ms-auto me-0" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse show" id="navbarCollapse">
                    <div class="navbar-nav ms-auto">
                    <a href="<?php echo  $base_url;?>" class="nav-item nav-link <?php if (is_front_page()) echo 'active'; ?>">Inicio</a>
                    <a href="<?php echo $base_url; ?>/about" class="nav-item nav-link <?php if (is_page('about')) echo 'active'; ?>">Quem somos</a>
                    <a href="<?php echo $base_url; ?>/testimonial" class="nav-item nav-link <?php if (is_page('testimonial')) echo 'active'; ?>">Depoimentos</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Produtos</a>
                            <div class="dropdown-menu bg-light rounded-0 m-0">
                                <a href="<?php echo $base_url; ?>/capilar" class="dropdown-item">Capilar</a>
                                <a href="<?php echo $base_url; ?>/corporales" class="dropdown-item">Corporales</a>
                                <a href="<?php echo $base_url; ?>/cuidadofacial" class="dropdown-item">Cuidado Facial</a>
                                <a href="<?php echo $base_url; ?>/cuidadocotidiano" class="dropdown-item">Cuidado Cotidiano</a>
                            </div>

                        </div>
                        <a href="<?php echo $base_url; ?>/blog" class="nav-item nav-link <?php if (is_page('blog')) echo 'active'; ?>">Blog</a>
                        <a href="<?php echo $base_url; ?>/contact" class="nav-item nav-link <?php if (is_page('contact')) echo 'active'; ?>">Contato</a>
                    </div>

                </div>
            </nav>
        </div>
</div>
<!-- Navbar End -->