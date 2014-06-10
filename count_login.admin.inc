<?php
/**
 * @file
 * Commonly requested user statistics for themers administration interface.
 */

/**
 * Implements hook_settings().
 */
function count_login_admin_settings($form, &$form_state) {
  $form['login_count_options'] = array(
    '#type' => 'fieldset',
    '#title' => t('Login count options'),
    '#collapsible' => TRUE,
    '#collapsed' => (variable_get('count_login_count_logins', TRUE) ? FALSE : TRUE),
  );

  $form['login_count_options']['count_login_count_logins'] = array(
    '#type' => 'checkbox',
    '#title' => t('Count logins'),
    '#description' => t('If checked user login counts will be calculated.'),
    '#default_value' => variable_get('count_login_count_logins', TRUE),
  );
  return system_settings_form($form);
}

