<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>list</title>

	
</head>
<body>

<div id="">
	<h1>Attribute types</h1>

	<div id="body">
	<div id="navigation">
	<?php foreach($attributetypes as $type): ?>
	<ul> 
        <li><?php  echo $type->attribute_type; ?> <a href="<?php echo base_url() ?>admin/AttributeType/edit/<?php  echo $type->attribute_type_id; ?>">Edit</a>
	</li>
        </ul>
	
	<?php  
	endforeach;?>
	</div>	
	</div>


</div>

</body>
</html>