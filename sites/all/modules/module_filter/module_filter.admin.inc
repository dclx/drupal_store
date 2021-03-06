<?php

/**
 * @file
 *
 * @author greenSkin
 */

/*******************************************************************************
 * Callback Functions, Forms, and Tables
 ******************************************************************************/

function module_filter_autocomplete($string) {
  $files = system_rebuild_module_data();
  $matches = array();
  $count = 1;
  foreach ($files as $id => $module) {
    if ($count > 10) {
      break;
    }

    $name = $module->info['name'];
    if (ereg(strtolower($string), strtolower($name)) && strtolower($string) != strtolower($name)) {
      $matches[$name] = $name;
      $count++;
    }
  }
  drupal_json_output($matches);
}

/**
 * Settings form for module filter.
 */
function module_filter_settings() {
  $form['module_filter_tabs'] = array(
    '#type' => 'checkbox',
    '#title' => t('Tabs'),
    '#description' => t('Divide module groups into tabbed list.'),
    '#default_value' => variable_get('module_filter_tabs', 1)
  );
  $form['module_filter_autocomplete'] = array(
    '#type' => 'checkbox',
    '#title' => t('Autocomplete'),
    '#description' => t('Enable this to provide autocomplete suggestions of existing module names in the module filter textfield. Will filter based on modules within selected tab as above.'),
    '#default_value' => variable_get('module_filter_autocomplete', 0)
  );
  return system_settings_form($form);
}
