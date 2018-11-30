<?php
    $resultString ='';
     if(isset($submenus) && count($submenus)>0){
               foreach ($submenus as $r) {
		$resultString.='<option value="' . $r->submenu_id . '">' . $r->name . '</option>';
		}
            }
     
echo $resultString;
?>