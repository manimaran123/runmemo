<?php

/**
 * Return a themed breadcrumb trail.
 *
 * @param $breadcrumb
 *   An array containing the breadcrumb links.
 * @return a string containing the breadcrumb output.
 */
function runmemo_breadcrumb($variables) {
  $breadcrumb = $variables['breadcrumb'];

  if (!empty($breadcrumb)) {
    // Provide a navigational heading to give context for breadcrumb links to
    // screen-reader users. Make the heading invisible with .element-invisible.
    $output = '<h2 class="element-invisible">' . t('You are here') . '</h2>';

      $output .= '<div class="breadcrumb"><div class="start">  </div>' . implode("<div class='arrow'>  </div>", $breadcrumb) . '<div class="end">  </div></div>';
    return $output;
  }
}

/**
 * Override or insert variables into the maintenance page template.
 */
function runmemo_preprocess_maintenance_page(&$vars) {
  // While markup for normal pages is split into page.tpl.php and html.tpl.php,
  // the markup for the maintenance page is all in the single
  // maintenance-page.tpl.php template. So, to have what's done in
  // runmemo_preprocess_html() also happen on the maintenance page, it has to be
  // called here.
  runmemo_preprocess_html($vars);
}

/**
 * Override or insert variables into the html template.
 */
function runmemo_preprocess_html(&$vars) {
  // Toggle fixed or fluid width.
  if (theme_get_setting('runmemo_width') == 'fluid') {
    $vars['classes_array'][] = 'fluid-width';
  }
  // Add conditional CSS for IE6.
  drupal_add_css(path_to_theme() . '/fix-ie.css', array('group' => CSS_THEME, 'browsers' => array('IE' => 'lt IE 7', '!IE' => FALSE), 'preprocess' => FALSE));
}

/**
 * Override or insert variables into the html template.
 */
function runmemo_process_html(&$vars) {
  // Hook into color.module
  if (module_exists('color')) {
    _color_html_alter($vars);
  }
}

/**
 * Override or insert variables into the page template.
 */
function runmemo_preprocess_page(&$vars) {
  // Move secondary tabs into a separate variable.
  $vars['tabs2'] = array(
    '#theme' => 'menu_local_tasks',
    '#secondary' => $vars['tabs']['#secondary'],
  );
  unset($vars['tabs']['#secondary']);

  if (isset($vars['main_menu'])) {
    $vars['primary_nav'] = theme('links__system_main_menu', array(
      'links' => $vars['main_menu'],
      'attributes' => array(
        'class' => array('links', 'inline', 'main-menu'),
      ),
      'heading' => array(
        'text' => t('Main menu'),
        'level' => 'h2',
        'class' => array('element-invisible'),
      )
    ));
  }
  else {
    $vars['primary_nav'] = FALSE;
  }
  if (isset($vars['secondary_menu'])) {
    $vars['secondary_nav'] = theme('links__system_secondary_menu', array(
      'links' => $vars['secondary_menu'],
      'attributes' => array(
        'class' => array('links', 'inline', 'secondary-menu'),
      ),
      'heading' => array(
        'text' => t('Secondary menu'),
        'level' => 'h2',
        'class' => array('element-invisible'),
      )
    ));
  }
  else {
    $vars['secondary_nav'] = FALSE;
  }

  // Prepare header.
  $site_fields = array();
  if (!empty($vars['site_name'])) {
    $site_fields[] = $vars['site_name'];
  }
  if (!empty($vars['site_slogan'])) {
    $site_fields[] = $vars['site_slogan'];
  }
  $vars['site_title'] = implode(' ', $site_fields);
  if (!empty($site_fields)) {
    $site_fields[0] = '<span>' . $site_fields[0] . '</span>';
  }
  $vars['site_html'] = implode(' ', $site_fields);

  // Set a variable for the site name title and logo alt attributes text.
  $slogan_text = $vars['site_slogan'];
  $site_name_text = $vars['site_name'];
  $vars['site_name_and_slogan'] = $site_name_text . ' ' . $slogan_text;
}

/**
 * Override or insert variables into the node template.
 */
function runmemo_preprocess_node(&$vars) {
  $vars['submitted'] = $vars['date'] . ' — ' . $vars['name'];
}

/**
 * Override or insert variables into the comment template.
 */
function runmemo_preprocess_comment(&$vars) {
  $vars['submitted'] = $vars['created'] . ' — ' . $vars['author'];
}

/**
 * Override or insert variables into the block template.
 */
function runmemo_preprocess_block(&$vars) {
  $vars['title_attributes_array']['class'][] = 'title';
  $vars['classes_array'][] = 'clearfix';
}

/**
 * Override or insert variables into the page template.
 */
function runmemo_process_page(&$vars) {
  // Hook into color.module
  if (module_exists('color')) {
    _color_page_alter($vars);
  }
}

/**
 * Override or insert variables into the region template.
 */
function runmemo_preprocess_region(&$vars) {
  if ($vars['region'] == 'header') {
    $vars['classes_array'][] = 'clearfix';
  }
}



/**
* Implementation of HOOK_theme().
*/
function runmemo_theme($existing, $type, $theme, $path) {
  
  return array( 
            'uc_cart_checkout_form' => array(
                    'render element' => 'form',
                    'template' => 'uc-cart-checkout-form',
                    'path' => drupal_get_path('theme', 'runmemo'),
                    ),
            
          );
}


/**
 * Override checkout page design.
 */
function runmemo_preprocess_uc_cart_checkout_form(&$variables) {
 
  $form_build_id = $variables['form']['form_build_id'];
  //$form_token  =  $variables['form']['form_token'] ;
  $form_id = $variables['form']['form_id'];
  $variables['form_build_id'] = drupal_render($form_build_id);
  $variables['form_token'] = drupal_render($form_token);
  $variables['form_id'] = drupal_render($form_id);
  
  $billing = $variables['form']['panes']['billing'];
  $customer = $variables['form']['panes']['customer'];
  $payment = $variables['form']['panes']['payment'];
  $submit = $variables['form']['actions'];
  $form_build_id = $variables['form']['form_build_id'];
  
  $variables['billing'] = drupal_render($billing);
  $variables['email'] = $customer['#theme']['primary_email'];
  $variables['customer'] = drupal_render($customer);
  $variables['payment']  = drupal_render_children($payment);
  $variables['submit'] = drupal_render($submit);
  $variables['form_build_id'] = drupal_render($form_build_id);
 
}

// Default function from uc_cart.module.
function runmemo_preprocess_uc_cart_checkout_review(&$variables) {
  
  $cart_items = uc_cart_get_contents();
  $no_of_cart_items = count($cart_items);
  foreach($cart_items as $product => $value){
 
    $photo[] = $value->uc_product_image['und'][0];
    
    //for cost format in the review order page mouse over image 
    $cost = $value->sell_price;
    $cost = number_format($cost, 2, '.', '');
    $cost_arr = explode('.', $cost);
    if($cost_arr['1'] == 00) {
      $price[] = $cost_arr['0'];
    }
    else {
      $price[] = $cost;
    }
  }
 
  $output = '<table class="review-order-img" ><tr>';
  $j = 0;
  for($i=0;$i<$no_of_cart_items;$i++) {
    $j++;
    $output .=  '<td>'. '<div class="views-field-sell-price"><span id="node_cost" style="display:none">£'. $price[$i] . '</span></div>'  .theme("image_formatter", array('item' => $photo[$i], 'image_style' => 'thumbnail'));
    $output .= '</td>';
      
    if($j%4 == 0) {
     $output .= '</tr><tr>';
    }
  }
  
  if($no_of_cart_items < 4) {
      for($k=0;$k<(4-$no_of_cart_items);$k++){
        $output .= '<td></td>';
      }
  }
  
  $output .= '</tr></table>';
  $variables['panes']['Cart contents']['0'] =  $output;
  
  return $variables;
  
}
 
/**
 * Themes the sale completion page.
 *
 * @param $variables
 *   
 * @ingroup themeable
 */

function runmemo_preprocess_uc_cart_complete_sale(&$variables) { 
 
 foreach($variables['order']->products as $order=>$image){
    $nid = $image->nid;
    $node = node_load($nid);
    
    $img_uri[] = $node->uc_product_image['und'][0];
    $img_name[] = $node->uc_product_image['und'][0]['filename'];
  }
  
  
  $no_of_image = count($img_uri);
  
  $output = '<div class="order-complete-title">Your payment is complete,thank you for your order</div><div class="order-complete-preview"><h1 class="float-L">Preview Image</h1>';
  $output .= '<div class="order-sale-description">Click on the preview to open original size image in the new window</div>'; 
  $output .= '<table><tr>';
  $j = 0;
  for($i=0;$i<$no_of_image;$i++) {
    
    $resource = $img_name[$i];
    if(module_exists('s3_store') && function_exists('get_s3_signed_url')){
      $original_img_url = get_s3_signed_url($resource);
    }
    
    $j++;
    $output .=  '<td><a href="' . $original_img_url .'" target="_blank">' . theme("image_formatter", array('item' => $img_uri[$i], 'image_style' => 'thumbnail')) .'</a>';
    $output .= '</td>';
    
        
    if($j%4 == 0) {
     $output .= '</tr><tr>';
    }
  }
  
  if($no_of_image < 4) {
      for($k=0;$k<(4-$no_of_image);$k++){
        $output .= '<td></td>';
      }
  }
  
  $output .= '</tr></table><div style="clear:both;"></div></div>';
  
  $variables['message'] =  $output;
  
  return $variables;
}
 