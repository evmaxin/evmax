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
	<h1>Add Attributes</h1>

	<div id="body">
	<?php //print_r($categories);?>
	<form action="<?php echo base_url();?>admin/Attributes/add" method="post">
		Attribute Type :<select name="attribute_type" id="attribute_type">
		<option value="0">Select</option>
		<?php foreach($attributetype as $type):?>
		<option value="<?php  echo $type->attribute_type_id;?>"><?php  echo $type->attribute_type;?></option>
		<?php endforeach;?>
		</select>
		<br>
		Attribute Name :<input type="text" name="attribute_name" id="attribute_name"/> <br>
		<input type="submit" name="submit" value="submit"/>
		</form>
	</div>


</div>

</body>
</html>