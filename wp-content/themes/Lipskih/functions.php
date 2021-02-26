<?php
require_once( get_template_directory() . '/foo-inc/register-post-types.php' );


add_action('wp_enqueue_scripts','art_scripts');
add_action('after_setup_theme', 'art_setup');



//scripts
function art_scripts(){
	//STYLES
    wp_enqueue_style('style', get_stylesheet_uri() );
    wp_enqueue_style('global', get_template_directory_uri(  ) . '/assets/assets/css/ms-main.css' , [], '1.0' , 'all');
    wp_enqueue_style('grid.min', get_template_directory_uri(  ) . '/assets/assets/css/vendor/grid.min.css' , [], '1.0' , 'all');
    wp_enqueue_style('magnific-popup', get_template_directory_uri(  ) . '/assets/assets/css/vendor/magnific-popup.css' , [], '1.0' , 'all');
    wp_enqueue_style('socicon', get_template_directory_uri(  ) . '/assets/assets/css/vendor/socicon.css' , [], '1.0' , 'all');
    wp_enqueue_style('swiper.min', get_template_directory_uri(  ) . '/assets/assets/css/vendor/swiper.min.css' , [], '1.0' , 'all');

    //SCRIPTS
    wp_deregister_script( 'jquery-core' );
    wp_register_script( 'jquery-core', '//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js');
    wp_enqueue_script( 'jquery' );

    wp_enqueue_script('app', get_template_directory_uri(  ) . '/assets/assets/js/app.js', ['jquery'], '1.1' , true);
    wp_enqueue_script('util', get_template_directory_uri(  ) . '/assets/assets/js/util.js', ['jquery'], '1.1' , true);
    wp_enqueue_script('fslightbox', get_template_directory_uri(  ) . '/assets/assets/js/vendor/fslightbox.js', ['jquery'], '1.1' , true);
    wp_enqueue_script('gsap.min', get_template_directory_uri(  ) . '/assets/assets/js/vendor/gsap.min.js', ['jquery'], '1.1' , true);
    wp_enqueue_script('imagesLoaded.min', get_template_directory_uri(  ) . '/assets/assets/js/vendor/imagesLoaded.min.js', ['jquery'], '1.1' , true);
    wp_enqueue_script('isotope.pkgd.min', get_template_directory_uri(  ) . '/assets/assets/js/vendor/isotope.pkgd.min.js', ['jquery'], '1.1' , true);
    wp_enqueue_script('modernizr', get_template_directory_uri(  ) . '/assets/assets/js/vendor/modernizr.js', ['jquery'], '1.1' , true);
    wp_enqueue_script('swiper.min', get_template_directory_uri(  ) . '/assets/assets/js/vendor/swiper.min.js', ['jquery'], '1.1' , true);
}
//админ панель
add_filter('show_admin_bar', '__return_false'); // отключить

//Настройка WP
function art_setup(){
    add_theme_support('custom-logo');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    register_nav_menu( 'menu_header', 'меню в шапке' );
}