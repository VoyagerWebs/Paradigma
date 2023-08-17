<?php
function my_theme_enqueue_styles() {
 $parent_style = 'parent-style'; // Estos son los estilos del tema padre recogidos por el tema hijo.
 wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
 wp_enqueue_style( 'child-style',
 get_stylesheet_directory_uri() . '/style.css',
 array( $parent_style ),
 wp_get_theme()->get('Version')
 );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
?>

<?php
function enqueue_custom_styles() {
    // Favicon
    wp_enqueue_style('favicon',get_stylesheet_directory_uri() . '/img/favicon.ico', array(), null, 'all');

    // Google Web Fonts
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com', array(), null, 'all');
    wp_enqueue_style('google-font', 'https://fonts.gstatic.com', array(), null, 'all');
    wp_enqueue_style('google-fon', 'https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Playfair+Display:wght@700;900&display=swap', array(), null, 'all');

    // Icon Font Stylesheet
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css', array(), '5.10.0', 'all');
    wp_enqueue_style('bootstrap-icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css', array(), '1.4.1', 'all');

    // Libraries Stylesheet
    wp_enqueue_style('animate', get_stylesheet_directory_uri() . '/template/lib/animate/animate.min.css', array(), null, 'all');
    wp_enqueue_style('owl-carousel', get_stylesheet_directory_uri() . '/template/lib/owlcarousel/assets/owl.carousel.min.css', array(), null, 'all');

    // Customized Bootstrap Stylesheet
    wp_enqueue_style('bootstrap', get_stylesheet_directory_uri()  . '/template/css/bootstrap.min.css', array(), null, 'all');

    // Template Stylesheet
    wp_enqueue_style('template-style', get_stylesheet_directory_uri() . '/template/css/style.css', array(), null, 'all');
}

add_action('wp_enqueue_scripts', 'enqueue_custom_styles');


?>
<?php
// Enqueue JavaScript scripts
function enqueue_custom_scripts() {
    // jQuery
    wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js', array(), '3.6.1', true);

    // Bootstrap
    wp_enqueue_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js', array('jquery'), '5.0.0', true);

    // Other libraries
    wp_enqueue_script('wow', get_stylesheet_directory_uri() . '/template/lib/wow/wow.min.js', array(), null, true);
    wp_enqueue_script('easing', get_stylesheet_directory_uri() . '/template/lib/easing/easing.min.js', array(), null, true);
    wp_enqueue_script('waypoints', get_stylesheet_directory_uri() . '/template/lib/waypoints/waypoints.min.js', array(), null, true);
    wp_enqueue_script('owl-carousel', get_stylesheet_directory_uri() . '/template/lib/owlcarousel/owl.carousel.min.js', array(), null, true);

    // Template JavaScript
    wp_enqueue_script('template-script', get_stylesheet_directory_uri() . '/template/js/main.js', array('jquery', 'bootstrap'), null, true);
}

add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');


?>
