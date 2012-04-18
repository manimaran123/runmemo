<?php
// $Id$

/**
 * @file
 * Page callbacks and admin forms of the token_custom module.
 */

/**
 * Callback for the token_custom admin list page
 *
 * @return string
 */
function token_custom_list_page() {

  //check if current user has permissions to add/edit/delete custom tokens
  $add_links = user_access('administer custom tokens');

  //load all out tokens
  $tokens = token_custom_load_multiple();
  $token_info = token_info();
  $variables = array();

  //build the table rows
  foreach ($tokens as $token) {
    //get demo value if token doesn't need external data.
    if (empty($token_info['types'][$token->type]['needs-data'])) {
      $value = token_replace('[' . $token->type . ':' . $token->machine_name . ']');
    }
    else {
      $value = t('Demo value not available');
    }

    $row = array(
      $token->name,
      $token->machine_name,
      $token->type,
      $token->description,
      $value,
    );

    //add the edit/delete links if the user has the right permissions
    if ($add_links) {
      $row[] = l(t('Edit'), 'admin/structure/token-custom/' . $token->machine_name . '/edit')
             . ' / '
             . l(t('Delete'), 'admin/structure/token-custom/' . $token->machine_name . '/delete');
    }

    $variables['rows'][] = $row;
  }

  if (empty($variables['rows'])) {
    $variables['rows'][] = array(
      array(
        'data' => t('No custom tokens available.'),
        'colspan' => array(6),
      )
    );
  }

  $variables['header'] = array(t('Name'), t('Machine name'), t('Type'), t('Description'), t('Demo (if available)'));

  //Add extra header cell if edit/delete links were printed.
  if ($add_links) {
    $variables['header'][] = "";
  }

  return theme('table', $variables);
}


/**
 * The add/edit token form
 *
 * @param array $form
 * @param array $form_state
 * @param string $op
 *  Either 'add' or 'edit', according to the operation performed
 * @param $token
 *  If $op is 'edit', $token contains the loaded token to edit.
 *
 * @return array
 */
function token_custom_edit_form($form, &$form_state, $op, $token = NULL) {

  $form = array();

  $form_state['token_custom']['op'] = $op;
  $form_state['token_custom']['token'] = $token;
  
  $form['name'] = array(
    '#type'   => 'textfield',
    '#title' => t('Token name'),
    '#description' => t('The token\'s readable name'),
    '#default_value' => $token ? $token->name : NULL,
    '#required' => TRUE,
  );

  $form['machine_name'] = array(
    '#type'       => 'machine_name',
    '#title'     => t('Token machine name'),
    '#description'    => t('A unique machine-readable name for this token. It must only contain lowercase letters, numbers, and underscores.'),
    '#default_value' => $token ? $token->machine_name : NULL,
    '#maxlength' => 32,
    '#disabled'   => (bool) $token,
    '#machine_name'  => array(
      'exists'  =>  'token_custom_load',
      'replace' =>  '-',
      'replace_pattern' => '[^a-z0-9\-]+',
    ),
  );

  $form['description'] = array(
    '#type'   => 'textfield',
    '#title' => t('Token description'),
    '#description' => t('The token\'s description that will appear in the token list'),
    '#default_value' => $token ? $token->description : NULL,
    '#required' => TRUE,
  );

  /*
   * TODO Allow users to define their own custom types
   */
  $token_info = token_info();
  $options = array('custom' => 'Custom Token');
  foreach ($token_info['types'] as $type => $info) {
    $options[$type] = $info['name'];
    if (!empty($info['needs-data'])) {
      $options[$type] .= ' [needs: ' . $info['needs-data'] . ']';
    }
  }

  $form['type'] = array(
    '#type'   => 'select',
    '#title' => 'Token type',
    '#description' => t('The token type determines the availability of the token according to the data in the $data array (ex. a token of type <em>node</em> will need $data[node].'),
    '#options' => $options,
    '#default_value' => ($token && !empty($token->type)) ? $token->type : 0,
  );

  $form['php_content'] = array(
    '#type' => 'textarea',
    '#title' => t('PHP replacement'),
    '#description' => t('Enter the php code that will be evaluated. You have access to all the arguments of !link\. The code should return a string and should NOT be wrapped around %php.',
      array(
        '%php'   => '<?php ?>',
        '!link' => l(
          'token_replace()',
          'http://api.drupal.org/api/drupal/includes--token.inc/function/token_replace/7',
          array('attributes' => array('target' => '_blank'))
        ),
      )),
    '#required' => TRUE,
    '#default_value' => $token ? $token->php_content : NULL,
  );

  $form['save'] = array(
    '#type'   => 'submit',
    '#value' => 'Save token',
  );

  return $form;
}


/**
 * Submit handler for the custom token admin form.
 *
 * Tries to save the edited token.
 *
 * @param array $form
 * @param array $form_state
 */
function token_custom_edit_form_submit($form, &$form_state) {
  $form_state['values']['is_new'] = $form_state['token_custom']['op'] == 'add';

  if (!token_custom_save($form_state['values'])) {
    drupal_set_message(
      t('There was a problem saving token <em>@machine_name</em>. Please contact the site administrator.',
        array('@machine_name' => $form_state['values']['machine_name'])),
      'error'
    );
  }
  else {
    drupal_set_message(
      t('Token <em>@machine_name</em> saved.',
        array('@machine_name' => $form_state['values']['machine_name']))
    );
  }

  $form_state['redirect'] = 'admin/structure/token-custom';
}


/**
 * Confirm custom token's delete action.
 *
 * @param $form
 * @param $form_state
 * @param null $token
 * @return array
 */
function token_custom_delete_confirm_form($form, &$form_state, $token) {
  $form_state['token_custom']['token'] = $token;
  $caption = '<p>' . t('This action cannot be undone.') . '</p>';
  return confirm_form(
    $form,
    t('Are you sure you want to delete token <em>@machine_name</em> ?', array('@machine_name' => $token->machine_name)),
    'admin/structure/token-custom',
    $caption,
    t('Delete'),
    t('Cancel')
  );
}


function token_custom_delete_confirm_form_submit($form, &$form_state) {
  if (token_custom_delete($form_state['token_custom']['token']->machine_name)) {
    drupal_set_message(
      t('Token <em>@machine_name</em> deleted.',
        array('@machine_name' => $form_state['token_custom']['token']->machine_name))
    );
  }
  else {
    drupal_set_message(
      t('There was a problem deleting token <em>@machine_name</em>. Please contact the site administrator.',
        array('@machine_name' => $form_state['token_custom']['token']->machine_name)),
      'error'
    );
  }
  $form_state['redirect'] = 'admin/structure/token-custom';
}
