<?php
/*
 * Implements hook_preprocess_HOOK()
 * Load Modernizr into the page
 * Move jQuery to the bottom of the page
 **/
function fd_base_preprocess_page(&$variables) {
  // Include a search box to render on pages
  // $search_box = drupal_render(drupal_get_form('search_form'));
  // $variables['search_box'] = $search_box;

  // Make an expanded main menu variable
  // Get the entire main menu tree
  $main_menu_tree = menu_tree_all_data('main-menu');
  // dpm($main_menu_tree);
  // Add the rendered output to the $main_menu_expanded variable
  $variables['main_menu_expanded'] = menu_tree_output($main_menu_tree);
  // dpm($vars['main_menu_expanded']);

  // Check if there's a menu created called "Footer menu" and add rendered links into $variables
  if (module_exists('menu')) {
    $menu_exists = menu_load('menu-footer-menu');
    if ($menu_exists) {
      $footer_menu = menu_navigation_links('menu-footer-menu');
      $variables['footer_menu'] = theme('links__menu_footer_menu', array('links' => $footer_menu, 'attributes' => array('class' => array('inline'))));
    }
  }

  $options = array(
    'scope' => 'footer',
  );
  drupal_add_js(drupal_get_path('theme', 'fd_base') .'/bower_components/jquery/dist/jquery.min.js', $options);
  drupal_add_js(drupal_get_path('theme', 'fd_base') .'/bower_components/foundation/js/foundation.min.js', $options);
  drupal_add_js(drupal_get_path('theme', 'fd_base') . '/js/app.js', $options);
  $options['scope'] = 'header';
  drupal_add_js(drupal_get_path('theme', 'fd_base') . '/bower_components/modernizr/modernizr.js', $options);
}

/**
 * Implementation of theme_menu_item_link()
 * Alter the main menu to support Foundation classes 
 **/
function fd_base_menu_link($variables) {
  $element = $variables['element'];
	// dpm($element);
  $sub_menu = ''; 

  $element['#attributes']['class'][] = 'depth-' . $element['#original_link']['depth'];
  // AE: This breaks the menu for some reason.. *shrug*
  // $element['#attributes']['class'][] = 'divider';

  if ($element['#below']) {
    $sub_menu = drupal_render($element['#below']);
    $sub_menu = str_replace('class="menu left"', 'class="dropdown"', $sub_menu);
    // dpm($sub_menu, 'sub_menu');
    // dpm($children, 'Children');
    // dpm($element['#below'], 'Element below');
    $element['#attributes']['class'][] = 'has-dropdown';
  }
  $output = l($element['#title'], $element['#href'], $element['#localized_options']);
  return '<li ' . drupal_attributes($element['#attributes']) . '>' . $output . $sub_menu . "</li>\n";
}

/**
 * Implementation of hook menu tree for this theme, main menu
 * Another implementation to  render the correct classes for dropdown menus to 
 * work in Foundation
 **/
function fd_base_menu_tree__main_menu($variables) {
  // dpm($variables);
  return '<ul class="menu left">'.$variables['tree'].'</ul>';
}

/**
 * Implementation of hook function theme_menu_local_tasks
 * Essentially.. the tab navigation
 **/
function fd_base_menu_local_tasks(&$variables) {
  // dpm($variables);
  $output = '';

  if (!empty($variables['primary'])) {
    $variables['primary']['#prefix']  = '<h2 class="element-invisible">' . t('Primary tabs') . '</h2>';
    $variables['primary']['#prefix'] .= '<nav id="tab-navigation">';
    $variables['primary']['#prefix'] .= '<ul class="tabs primary primary-tabs clearfix">';
    $variables['primary']['#suffix']  = '</ul>';
    // AE: Check if we need to close the <nav> tag
    if (empty($variables['secondary'])) {
      $variables['primary']['#suffix']  .= '</nav><!-- #tab-navigation -->';
    }
    $output .= drupal_render($variables['primary']);
  }
  if (!empty($variables['secondary'])) {
    $variables['secondary']['#prefix']  = '<h2 class="element-invisible">' . t('Secondary tabs') . '</h2>';
    $variables['secondary']['#prefix'] .= '<ul class="tabs secondary secondary-tabs clearfix">';
    $variables['secondary']['#suffix']  = '</ul>';
    // AE: Close the <nav> tag as well
    $variables['secondary']['#suffix'] .= '</nav><!-- #tab-navigation -->';
    $output .= drupal_render($variables['secondary']);
  }
  return $output;
}

/**
 * Implemetation of hook theme_breadcrumb
 **/
function fd_base_breadcrumb($variables) {
  $breadcrumb = $variables['breadcrumb'];
  if (!empty($breadcrumb)) {
    $crumbs = '<ul class="breadcrumbs">';
    foreach($breadcrumb as $value) {
      $crumbs .= '<li>'.$value.'</li>';
    }
    $crumbs .= '</ul>';
    return $crumbs;
  }
}