<?php
//print_r($pickup_locations);
//exit;
    $resultString ='';
     if(isset($pickup_locations) && count($pickup_locations)>0){
             // foreach ($pickup_locations as $r) {
		$resultString.= $pickup_locations[0]->pickup_loc_name."<br>" ;
           $resultString.= $pickup_locations[0]->address1."<br>" ;
                $resultString.= $pickup_locations[0]->address2."<br>" ;
               $resultString.= $pickup_locations[0]->city."<br>" ;
                $resultString.= $pickup_locations[0]->country."<br>" ;
                $resultString.= $pickup_locations[0]->pincode."<br>" ;
                 $resultString.= '<input class="btn green" type="submit" value="Confirm Pickup Location" name="confirm" id="confirm">';
		//}
          }
     
echo $resultString;
?>