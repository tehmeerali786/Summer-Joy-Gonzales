<?php

function SummerJoyGonzales_theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'main-css', get_stylesheet_directory_uri() . '/style.css' );
}

add_action( 'wp_enqueue_scripts', 'SummerJoyGonzales_theme_enqueue_styles' );





//footer Link
define('Summer_Joy_Gozales','https://www.google.com/','SummerJoyGonzales');

if ( ! function_exists( 'negocio_business_credit' ) ) {
	function negocio_business_credit(){
		echo "<a href=".esc_url(Summer_Joy_Gozales)." target='_blank'>".esc_html__('Summer Joy Gonzales','SummerJoyGonzales')."</a>";
	}
}

// testimonials image size and new
add_image_size( 'testimonial-tax', 253, 253, true);


// excluding testimonials from blog main.
function exclude_testimonials( $query ) {
    if ( !$query->is_category('testimonial') && $query->is_main_query() ) {
        $query->set( 'cat', '-3' );
    }
}
add_action( 'pre_get_posts', 'exclude_testimonials' );


?>
