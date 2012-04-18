<?php
class photographer_payment_model{
 /**
 * List payments for photographers 
 */
	 public function list_photographerpayments($startdate="",$enddate="",$uid=0){
	     if($startdate =="" || $enddate==""){
			  $query = "SELECT price as sum,ucp.order_id,node.uid as photographer, ucp.nid,price ,DATE_FORMAT(DATE( FROM_UNIXTIME( uco.created)),'%m-%d-%Y') as orderdate, node.uid,uco.order_status FROM {uc_order_products}  ucp LEFT JOIN {uc_orders} uco on ucp.order_id = uco.order_id JOIN node on ucp.nid = node.nid and uco.order_status='completed' and DATE_FORMAT(DATE( FROM_UNIXTIME( uco.modified)),'%M')= DATE_FORMAT( now(),'%M') ";
			  
			} 
			else{
			    $query = "SELECT price as sum,ucp.order_id,node.uid as photographer, ucp.nid,price ,DATE_FORMAT(DATE( FROM_UNIXTIME( uco.created)),'%m-%d-%Y') as orderdate, node.uid,uco.order_status FROM {uc_order_products}  ucp LEFT JOIN {uc_orders} uco on ucp.order_id = uco.order_id JOIN node on ucp.nid = node.nid and uco.order_status='completed' and DATE_FORMAT(DATE( FROM_UNIXTIME( uco.modified)),'%m-%d-%Y') between ".$startdate." and ".$enddate;
				  
			}
			if($uid !=0){
					$query .= "and node.uid = ".$uid;
				  }
		  $mp_listquery = db_query($query);
		  //$mp_listquery = db_query("SELECT price as sum,node.uid as photographer, ucp.order_id  FROM {uc_order_products}  ucp LEFT JOIN {uc_orders} uco on ucp.order_id = uco.order_id JOIN {node} on ucp.nid = node.nid and uco.order_status='completed' and DATE_FORMAT(DATE( FROM_UNIXTIME( uco.modified)),'%M')= DATE_FORMAT( now(),'%M') ");
		  //$results = $mp_listquery->execute();
		  return $mp_listquery;  
	  }
	  /**
		* get user deatils
	   */
		function getuserdetails($uid=0){
		$userdetails = db_query("select * from {users} JOIN {field_data_field_paypal_id} paypal  on paypal.entity_id = users.uid and uid=".$uid );

		foreach($userdetails as $details){


			$userarr['email'] = $details->field_paypal_id_value;
			$userarr['name']  = $details->name;

		}

		return $userarr;
		}
  }
?>