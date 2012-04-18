<?php
/**
 * @file 
 * database query management for image style 
 */
class generate_thumbnails_model {
  /**
    * Update the thumbnail status field as 1
    * @param $fid
    *  $fid is file id of the photo
    *  By using this function we can set the status whether thumbnail is created 
    */

  public function update_thumb_status($fid) {

    db_update('file_managed')
                    ->fields(array(
                    'thumbnail_status' => 1,
                    ))
                    ->condition('fid', $fid)
                    ->execute();


  }

  /**
   * 
   *  Getting the thumbnail size as set in admin panel 
   */

  public function get_thumbnail_size() {

    $query = db_select('image_styles', 'ist');

    $query->join('image_effects', 'ie', 'ist.isid = ie.isid');

    $query->condition('ie.name', 'image_scale');
    $query->condition('ist.name', 'thumbnail');
    $query->addField('ie', 'data');

    $results = $query->execute()->fetchObject();

    return $results;
  }

  /**
   * 
   *  Getting the preview size as set in admin panel 
   */

  public function get_preview_size() {

    $query = db_select('image_styles', 'ist');

    $query->join('image_effects', 'ie', 'ist.isid = ie.isid');

    $query->condition('ie.name', 'image_scale');
    $query->condition('ist.name', 'preview-with-watermark');
    $query->addField('ie', 'data');

    $results = $query->execute()->fetchObject();

    return $results;


  }

}

