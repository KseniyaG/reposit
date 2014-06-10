<?php

/**
 * @file
 * Hooks for integrating Views and Counter.
 */

/**
 * Implements hook_views_data().
 */
function count_login_views_data() {
  $data['count_login_values']['table']['group'] = t('Counter');

  $data['count_login_values']['table']['join'] = array(
    'users' => array(
      'left_field' => 'uid',
      'field' => 'uid',
    ),
  );
  $data['count_login_values']['name'] = array(
    'title' => t('Statistic name'),
    'help' => t('The unique statistic name'),
    'field' => array(
      'handler' => 'views_handler_field',
    ),
    'filter' => array(
      'handler' => 'views_handler_filter_string',
    ),
    'argument' => array(
      'views_handler_argument_string',
    ),
  );
  $data['count_login_values']['value'] = array(
    'title' => t('Value'),
    'help' => t('Statistic value'),
    'field' => array(
      'handler' => 'views_handler_field_numeric',
      'click sortable' => TRUE,
    ),
    'sort' => array(
      'handler' => 'views_handler_sort',
    ),
    'filter' => array(
      'handler' => 'views_handler_filter_numeric',
    ),
  );
  return $data;
}
