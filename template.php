<?php
/**
 * @file
 * The primary PHP file for this theme.
 */
function alp_preprocess_page(&$variables, $hook) {
  if (!empty($variables['node'])) {
    $variables['theme_hook_suggestions'][] = 'page__' . $variables['node']->type;
  }
}
