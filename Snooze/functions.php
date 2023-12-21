<?php
add_theme_support('title-tag'); // support de mon title tag
add_theme_support('post-thumbnails'); // support du thumbnail sur mes articles
add_theme_support('menus');

register_nav_menu('header-left', 'En tête du menu Gauche');
register_nav_menu('header-right', 'En tête du menu Droit');



function montheme_menu_class($classes) {
    // va permettre de customizer les classe de nos items (donc nos `li`)
    $classes[] = 'nav-item';
    return $classes;
  }
  function montheme_menu_link_class($attrs) {
    // va permettre de customizer les classe de nos liens (donc nos `a`)
    $attrs['class'] = 'nav-link header-button';
    return $attrs;
  }
  
  add_filter('nav_menu_css_class', 'montheme_menu_class');
  add_filter('nav_menu_link_attributes', 'montheme_menu_link_class');