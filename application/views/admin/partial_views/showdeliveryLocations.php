<?php
    $resultString ='';
     if(isset($delivery_locations) && count($delivery_locations)>0){
               foreach ($delivery_locations as $r) {
		$resultString.='<option value="' . $r->id . '">' . $r->company_name .", ". $r->plot_flat .", ". $r->address1 .", ". $r->address2 .", ". $r->city .", ". $r->city .", ". $r->pincode . '</option>';
		}
            }
     
echo $resultString;
?>