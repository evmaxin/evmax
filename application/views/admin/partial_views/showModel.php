<?php
    $resultString ='';
     if(isset($subCat) && count($subCat)>0){
         $resultString.='<option value="0">Select Model</option>';
               foreach ($subCat as $r) {
		$resultString.='<option value="' . $r->model_id . '">' . $r->model_name . '</option>';
		}
            }
     
echo $resultString;
?>