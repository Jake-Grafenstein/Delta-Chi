<?php 


add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}

register_nav_menu('social', 'Social Media Menu');

require 'my-custom-post.php';
add_post_type('brother');
add_taxonomy('member_type', 'brother');


function child_theme_setup() {
  add_image_size( 'sparkling-featured', 700, 550, true );
}
add_action( 'after_setup_theme', 'child_theme_setup', 11 );


if ( ! function_exists( 'sparkling_call_for_action' ) ) :
/**
 * Call for action text and button displayed above content
 */
function sparkling_call_for_action() {
  if ( is_front_page() && of_get_option( 'w2f_cfa_text' )!=''){
    echo '<div id="actioncall" class="cfa">';
      echo '<div class="container">';
        echo '<div class="col-sm-8">';
          echo '<span class="cfa-text">'. of_get_option( 'w2f_cfa_text' ).'</span>';
          echo '</div>';
          echo '<div class="col-sm-4">';
          echo '<a class="btn btn-lg cfa-button" href="'. of_get_option( 'w2f_cfa_link' ). '">'. of_get_option( 'w2f_cfa_button' ). '</a>';
          echo '</div>';
      echo '</div>';
    echo '</div>';
  }
}
endif;

if (! function_exists( 'social_media_menu' ) ) :
/**
 * Call for menu to be created
 */
function social_media_menu() {
  // display the WordPress Custom Menu if available
  wp_nav_menu(array(
    'menu'              => 'social-media',
    'theme_location'    => 'social',
    'depth'             => 2,
    'container'         => 'div',
    'container_class'   => 'collapse navbar-collapse navbar-ex1-collapse',
    'menu_class'        => 'nav navbar-nav soc-med',
    'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
    'walker'            => new wp_bootstrap_navwalker()
  ));
} /* end header menu */
endif;
?>