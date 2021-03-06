<?php

    require_once('bs4navwalker.php');

    function wpb_theme_setup(){
      add_theme_support('post-thumbnails');
 
    register_nav_menus( [
      'primary'   => __( 'Primary Menu', 'webdevtheme' ),
      'secondary' => __( 'Secondary Menu', 'webdevtheme' )
  ] );
  
  add_theme_support('post-formats', array('aside', 'gallery'));

  }

  add_action('after_setup_theme','wpb_theme_setup');


 // Excerpt Length Control
function set_excerpt_length(){
  return 45;
}
add_filter('excerpt_length', 'set_excerpt_length');

function wpb_init_widgets($id){
  register_sidebar(array(
    'name'  => 'Sidebar',
    'id'    => 'sidebar',
    'before_widget' => '<div class="sidebar-module">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4>',
    'after_title'   => '</h4>'
  ));

  register_sidebar(array(
    'name'  => 'Box1',
    'id'    => 'box1',
    'before_widget' => '<div class="box">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>'
  ));

  register_sidebar(array(
    'name'  => 'Box2',
    'id'    => 'box2',
    'before_widget' => '<div class="box">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>'
  ));


  register_sidebar(array(
    'name'  => 'Box3',
    'id'    => 'box3',
    'before_widget' => '<div class="box">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>'
  ));

}

  add_action('widgets_init', 'wpb_init_widgets');




