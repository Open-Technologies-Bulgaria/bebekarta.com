<?php
// $Id: template.php,v 1.4.2.4 2010/08/13 22:16:52 troy Exp $

function phptemplate_preprocess_page(&$vars) {
  $defaults = array(
    'admin_left_column' => 1,
    'admin_right_column' => 0
  );
  
  global $theme_key;
  // Get default theme settings.
  $settings = theme_get_settings($theme_key);    
  $settings = array_merge($defaults, $settings);
 
  
  
  if (arg(0) == 'admin' && ($settings['admin_right_column'] == 0) && !(arg(1) == 'build' && arg(2) == 'block')) {
    $vars['right'] = '';
  }
  
  if (arg(0) == 'admin' && ($settings['admin_left_column'] == 0) && !(arg(1) == 'build' && arg(2) == 'block')) {
    $vars['left'] = '';
  }

  $vars['registration_enabled'] = variable_get('user_register', 1);

}

/**
 * Generate the HTML representing a given menu item ID.
 *
 * An implementation of theme_menu_item_link()
 *
 * @param $link
 *   array The menu item to render.
 * @return
 *   string The rendered menu item.
 */
function phptemplate_menu_item_link($link) {
  if (empty($link['options'])) {
    $link['options'] = array();
  }

  // If an item is a LOCAL TASK, render it as a tab
  if ($link['type'] & MENU_IS_LOCAL_TASK) {
    $link['title'] = '<span class="tab">' . check_plain($link['title']) . '</span>';
    $link['options']['html'] = TRUE;
  }

  if (empty($link['type'])) {
    $true = TRUE;
  }

  return l($link['title'], $link['href'], $link['options']);
}

/**
 * Duplicate of theme_menu_local_tasks() but adds clear-block to tabs.
 */
function phptemplate_menu_local_tasks() {
  $output = '';

  if ($primary = menu_primary_local_tasks()) {
    $output .= '<ul class="tabs primary clear-block">' . $primary . '</ul>';
  }
  if ($secondary = menu_secondary_local_tasks()) {
    $output .= '<ul class="tabs secondary clear-block">' . $secondary . '</ul>';
  }

  return $output;
}

function phptemplate_links($links, $attributes = array()) {
    /* disable user's blog link into nodes */
    if ($links['blog_usernames_blog']) {
        unset($links['blog_usernames_blog']);
    }

    /* disable Older poll link. the poll module doesn't provide easy way for that */
    /* see http://drupal.org/node/970792 for explanation */
    for ($i = 0, $size = sizeof($links); $i < $size; ++$i) {
        if ($links[$i]['title'] == t('Older polls')) {
            unset($links[$i]);
            break;
        }
    }

    return theme_links($links, $attributes);
}

function phptemplate_upload_attachments($files) {
  $output = "<div id='attachments'>";

  foreach ($files as $file) {
    $file = (object) $file;
    if ($file->list && empty($file->remove)) {
      $href = file_create_url($file->filepath);
      $text = $file->description ? $file->description : $file->filename;
      $output .= sprintf('<a href="%s"><img src="%s" alt="%s" width="570"/></a><br />', $href, $href, $text);
    }
  }

  $output .= "</div>";

  return $output;
}

?>
