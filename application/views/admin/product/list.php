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
	<h1>Products</h1>

	<div id="body">
	<?php //echo "<pre>";print_r($products); exit;?>
	
            <table>
                <tr><th>Name</th><th>Offer Price</th><th>Quantity</th><th></th></tr>
		<?php foreach($products as $product): ?>
            
            <tr><td><?php echo $product->name;?> </td><td> <?php echo $product->offer_price; ?> </td><td> <?php echo $product->inventory; ?> </td><td><a href="<?php echo base_url()."admin/product/details/".$product->product_id; ?>">View</a></td></tr>           
		<?php endforeach;?>

            </table>
	</div>


</div>

</body>
</html>