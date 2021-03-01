<?php
 $widgets = [
     'widget-text.php',
     'widget-social-links.php',
     'widgets.php'
 ];
 foreach ($widgets as $widget){
     require_once( get_template_directory() . '/widgets/' . $widget );
 }
require_once( get_template_directory() . '/foo-inc/register-post-types.php' );



add_action('wp_enqueue_scripts','art_scripts');
add_action('after_setup_theme', 'art_setup');
add_action( 'widgets_init', 'register_Art_widgets' );




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

    $scripts = [
       'app'              => '/assets/assets/js/app.js',
       'util'             => '/assets/assets/js/util.js',
       'fslightbox'       => '/assets/assets/js/vendor/fslightbox.js',
       'gsap.min'         => '/assets/assets/js/vendor/gsap.min.js',
       'imagesLoaded.min' => '/assets/assets/js/vendor/imagesLoaded.min.js',
       'isotope.pkgd.min' => '/assets/assets/js/vendor/isotope.pkgd.min.js',
       'modernizr'        => '/assets/assets/js/vendor/modernizr.js',
       'swiper.min'       => '/assets/assets/js/vendor/swiper.min.js',
    ];
    foreach($scripts as $script_name => $script_src){
        wp_enqueue_script($script_name, get_template_directory_uri(  ) . $script_src, ['jquery'], '1.1' , true);
    }


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

function register_Art_widgets(){

    register_sidebar([
        'name'          => 'COPYRIGHT в подвале сайта',
        'id'            => 'art_footer',
        'before_widget' => null,
        'after_widget'  => null,
    ]);

    register_sidebar([
        'name'          => 'блок социальных сетей в подвале сайта',
        'id'            => 'art_footer_social',
        'before_widget' => null,
        'after_widget'  => null,
    ]);


}



