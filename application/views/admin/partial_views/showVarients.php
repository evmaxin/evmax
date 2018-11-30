<?php
    $resultString ='';
     if(isset($subCat) && count($subCat)>0){
         $resultString.='<option value="0">Select Variant</option>';
               foreach ($subCat as $r) {
		$resultString.='<option value="' . $r->variant_id . '">' . $r->name . '</option>';
		}
            }
     
echo $resultString;
?>