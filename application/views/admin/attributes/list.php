<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	

	
</head>
<body>

<div id="">
	<h1>Attribute types</h1>

	<div id="body">
	<?php //print_r($attributes);?>
	<div id="navigation">
	<?php foreach($attributes as $attribute): ?>
	
		<ul> <li><?php  echo $attribute->attribute_type; ?> 
		<ul>
                    <?php 
                    $onepieces = explode(",", $attribute->name);
                    foreach($onepieces as $nameNvalue){
     //echo $nameNvalue."<br>";
                       $pieces = explode("~", $nameNvalue);
                        echo "<li>".$pieces[0]."</li>"; // piece1
                        //echo $pieces[1]; // piece2
                    }?>
                    <!--<li><?php  //echo $attribute->name; ?> <a href="<?php //echo base_url() ?>admin/Attributes/edit/<?php  //echo $attribute->attribute_id; ?>">Edit</a></li>-->
                     </ul>

		
		</li></ul>
	
	<?php  
	
	endforeach;?>
	</div>	
	</div>


</div>

</body>
</html>