
<div class="checkoutPane">
	<div class="paymentPane"><div><span class="checkout_title">Payment Details</span></div>
	<?php print $billing;
              print $customer;
              print $payment;
              print $form_build_id;
              print $form_token;
              print $form_id;
              print $submit;
    ?>
	</div>
	<div class="cartPane">
	<?php 
	
        $cart = uc_cart_get_contents();
        
        
	$num 		  = count($cart);
	$count 		  = 1;
	$total 		  = 0;
	$photographer = array();
	$cart_content = "";
	$total = 0;
	foreach($cart as $product => $value){
           
                $qty[] 		= $value->qty;
		$price          = $value->qty*$value->price;
		
		$photographer[] = $value->uid;
		$photo[] 		= $value->uc_product_image['und'][0];
		$total += $price;
		$count+=1;
	}
	$p_count        = count(array_unique($photographer));
	if($num ==1){
	 $phototext = "photo";
	 $photoowner = "Photographer";
	}
	else if($p_count==1){
	 $photoowner = "Photographer";
	 $phototext = "photos";
	}
	else{
	 $photoowner = "Photographers";
	 $phototext = "photos";
	}
       ?>
	   <div class="cartSummary">
			<div class="blueHeading">Order Summary</div>
			<div class="boldText"><?php echo $num." ".$phototext;?> by <?php echo $p_count." ".$photoowner;?></div>
			<div class="totalPrice">Total Price: <div class="currencyText">£<?php echo $total;?></div></div>
		</div>
		<table><tr>
		<?php
	for($i=1;$i<$count;$i++){
           
       	
		?>
		
		
		<td><?php echo theme("image_formatter", array('item' => $photo[$i-1], 'image_style' => 'thumbnail'));?></td>
		<?php
		if($i%3==0){?>
			</tr><tr>
			<?php }
			?>
		
		<?php
		
       
		  
		  }
	 
	  
	 ?>
	 </tr></table>
	</div>
  

</div>