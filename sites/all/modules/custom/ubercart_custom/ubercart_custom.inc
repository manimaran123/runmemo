<?php
/**
 * @file 
 * ubercart query management 
 */
class ubercart_custom_model{

  /**
    * Get the count of particular node in the uc_order_product table to check 
    * whether the particular product is already sold or not 
    * if sold means disable the selling price in the node edit form
    */
  public function image_order_status($nid) {

    $count = db_query("SELECT COUNT(nid) as nid FROM {uc_order_products} WHERE nid = :nid", array(':nid' => $nid))->fetchObject();
    return $count->nid;
  }
}

