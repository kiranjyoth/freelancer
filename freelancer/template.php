<?php

/**
 * @file
 * template.php
 */

/**
 * Panel page suggestion as we are using Panels.
 */
function freelancer_preprocess_page(&$vars) {
  // if this is a panel page, add template suggestions
  if($panel_page = page_manager_get_current_page()) {
     
      // add a generic suggestion for all panel pages
      $vars['theme_hook_suggestions'][] = 'page__panel';
      
      // add the panel page machine name to the template suggestions
      $vars['theme_hook_suggestions'][] = 'page__' . $panel_page['name'];
      
      //add a body class for good measure
      $body_classes[] = 'page-panel';
    }
  }  



/**
 * Bootstrap theme wrapper function for the primary menu links.
 */
function freelancer_menu_tree__primary(&$variables) {
  return '<ul class="menu nav navbar-nav navbar-right">' . $variables['tree'] . '</ul>';
}


/**
 * Theme wrapper for contact forms.
 */

function freelancer_theme() {
  return array(
'contact_site_form' => array(
'render element' => 'form',
'template' => 'contact-site-form',
'path' => drupal_get_path('theme', 'freelancer').'/templates/block',
),
  );
}
function freelancer_preprocess_contact_site_form(&$vars) {
$vars['contact'] = drupal_render_children($vars['form']);

}