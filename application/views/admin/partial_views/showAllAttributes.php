<?php
    $resultString ='';
      if (isset($attributetype) && count($attributetype)>0) {
    foreach($attributetype as $type):
     $resultString.='<br> <label class="control-label"><b>'.$type->attribute_type.'</b></label>';
    foreach($getAttributeTypesList as $atr): 
        if($type->attribute_type_id==$atr->attribute_type_id) { 
           $resultString.='  <input class="control-label validate_checked" type="checkbox" name="'.$type->attribute_type.'[]" value="'.$atr->attribute_id.'">'.$atr->name;
        }
        else{
           //$resultString.='  No Attributes for This Category'; 
        }
    endforeach;
     endforeach;
      }
      else{
	$resultString.='<label class="control-label"><b>No Attrribute Types</b></label>';
        }
     
echo $resultString;
?>