<?php
/**
 * Expound functions and definitions
 *
 * @package Expound
 */

 // Область виджетов в шапке
     register_sidebar(array(
         'name' => __('Header widges'),
         'id' => 'header-widget-area',
         'description' => __('Header widges'),
         'before_widget' => '',
         'after_widget' => '',
         'before_title' => '<h3><a href="#">',
         'after_title' => '</a></h3>',
     ));

     register_sidebar(array(
         'name' => __('SubHeader widges'),
         'id' => 'sub-header-widget-area',
         'description' => __('SubHeader widges'),
         'before_widget' => '',
         'after_widget' => '',
         'before_title' => '<h3><a href="#">',
         'after_title' => '</a></h3>',
     ));

     register_sidebar(array(
         'name' => __('Home page widges'),
         'id' => 'home-page-widget-area',
         'description' => __('Home page widges'),
         'before_widget' => '',
         'after_widget' => '',
         'before_title' => '<h3><a href="#">',
         'after_title' => '</a></h3>',
     ));


     function wpb_list_child_pages() {
       global $post;
       if ( is_page() && $post->post_parent )
           $childpages = wp_list_pages( 'sort_column=menu_order&title_li=&child_of=' . $post->post_parent . '&echo=0' );
       else
           $childpages = wp_list_pages( 'sort_column=menu_order&title_li=&child_of=' . $post->ID . '&echo=0' );
       if ( $childpages ) {
           $string = '<ul>' . $childpages . '</ul>';
       }
       return $string;
     }
