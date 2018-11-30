<?php
    $resultString ='';
     if(isset($brands) && count($brands)>0){
               foreach ($brands as $r) {
		$resultString.='<option value="' . $r->brand_id . '">' . $r->name . '</option>';
		}
            }
     
echo $resultString;
?>