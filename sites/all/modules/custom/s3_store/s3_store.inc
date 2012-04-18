<?php
/**
 * @file 
 * node files database query managemen 
 */

class s3_store_model {
  /**
   * Getting the local files
   * 
   *  By using this function we can get the files that are not pushed to s3 
   */

  public function get_local_photos() {
    $query = db_select('file_managed', 'fm');
    $query->join('file_usage', 'fu', 'fm.fid = fu.fid');
    $query->join('field_data_field_s3_status', 'fs', 'fu.id = fs.entity_id');
    $query->condition('fs.field_s3_status_value', 0);
    $query->condition('fm.filename', '', '<>');
    $query->addField('fm', 'fid');
    $query->addField('fm', 'filename');
    $query->addField('fm', 'uri');
    $query->addField('fm', 'uid');
    $query->addField('fs', 'entity_id');
    $query->orderBy('fm.timestamp', 'DESC');
    $query->range(0, 30);
    $results = $query->execute();
    return $results;
  }

  /**
   * Update the s3 status field as 1
   * @param $entity_id
   *  $entity_id is node_id of the photo
   *  By using this function we can set the status whether files are pushed to s3 
   */

  public function update_s3_status($entity_id) {

    db_update('field_data_field_s3_status')
                    ->fields(array(
                    'field_s3_status_value' => 1,
                    ))
                    ->condition('entity_id', $entity_id)
                    ->execute();

  }

  /**
   * Update the url field 
   * @param $fid
   * @param $url
   * $fid is the file id
   * $url url of is s3 bucket
   * By using this function we can update the url to s3
   */

  public function update_url($fid, $url) {
    db_update('file_managed')
          ->fields(array(
          'uri' => $url,
          ))
          ->condition('fid', $fid)
          ->execute();

  }
    

}

