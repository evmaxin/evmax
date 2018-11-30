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
    <?php  
//echo "<pre/>";print_r($attributes);exit;
if(isset($error)){
     print_r($error);
}
?>
	<h1></h1>

	<div id="body">
	<?php //print_r($categories);?>
            <form action="<?php echo base_url();?>admin/Product/add" method="post" enctype="multipart/form-data" id="addproduct">
		
                Product Name :<input type="text" name="name" id="name" required /> <br>
                Category: <select name="category[]" id="category" multiple>
		<option value="0">Select</option>
		<?php foreach($categories as $category):?>
		<option value="<?php  echo $category->category_id;?>"><?php  echo $category->category_name;?></option>
		<?php endforeach;?>
		</select><br>
                <?php  foreach($attributetype as $type): ?>
	      <b> <?php  echo $type->attribute_type; ?>:</b><br> 
		 <?php foreach($attributes as $atr): if($type->attribute_type_id==$atr->attribute_type_id) { ?><input type="checkbox" name="<?php  echo $type->attribute_type;?>[]" value="<?php  echo $atr->attribute_id;?>"/><?php  echo $atr->name; echo"<br>";?>  <?php } endforeach;?>
               	<?php  
                endforeach;?><br>
                SKU:<input type="text" name="sku" id="sku" required /> <br>
                Product Images:<input type="file" name="userfile[]" id="userfile" required multiple/> <br>
                Actual price:<input type="text" name="actual_price" id="actual_price" required/> <br>
                Offer price:<input type="text" name="offer_price" id="offer_price" required /> <br>
                Product cost:<input type="text" name="product_cost" id="product_cost" required />(Internal purpose) <br>
                Inventory:<input type="text" name="inventory" id="inventory" required/> <br>
                Full description:<textarea name="full_description" id="full_description" required ></textarea><br>
               <input type="submit" name="add" value="submit"/>
		</form>
	</div>


</div>

</body>
</html>