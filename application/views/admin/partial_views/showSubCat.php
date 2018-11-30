<?php
    $resultString ='';
     if(isset($subCat) && count($subCat)>0){
               foreach ($subCat as $r) {
		$resultString.='<option value="' . $r->sub_category_id . '">' . $r->name . '</option>';
		}
            }
     
echo $resultString;
?>