<?php

class ocr_model{
	 /**
	 * Insert runner number from ocr response 
	 */
	 public function insert_runnernumber($nid = 0,$runner_num=0,$revision_id =0,$runner_count=0){
    
	   $result = db_insert('field_data_field_runner_number')
							->fields(array(
							'entity_type' =>'node',
							'bundle' => 'product',
							'deleted' => 0,
							'revision_id' =>$revision_id,
							'language' => 'und',
							'delta' => $runner_count,
							'entity_id' =>$nid,
							'field_runner_number_value' => $runner_num
							))->execute();
	 }
	 /**
	 * retrieve revision_id for a node
	 */
	 public function getnoderevision($nid = 0){
	   $result = db_select('node_revision','vid')
		->condition('nid', $nid)
		->fields('vid')
		->execute();
		return $result;
	   
	 }
	 /**
	 * insert response from OCR to ocr_response if response is success
	 */
	 public function insert_response($responsebody="",$success=0,$nid = 0,$messageid = ""){
	 $responsebody = mysql_real_escape_string($responsebody);
	  db_insert('ocr_response')
			->fields(array(
			'nid' => $nid,
			'messageid' => $messageid,
			'ocr_response' => $responsebody,
			'ocr_status' => $success,
			'received' => REQUEST_TIME,
			))
			->execute();
	 }
	 
	
	 /**
	 * insert response from OCR to ocr_response if response is success
	 */
	 public function insert_ocr_status($entity_id=0,$success=0){
	
	  if($success == 1){
	    $status = "Success";
	  }
	  else{
	   $status = "Failure";
	  }
	  
	  
	  db_update('field_data_field_ocr_response')
                        ->fields(array(
                        'field_ocr_response_value' =>$status,
                        ))
                        ->condition('entity_id', $entity_id)
                        ->execute();
	 }
	  
 }
?>