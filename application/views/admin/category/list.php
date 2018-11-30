<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Add Category</title>

	
</head>
<body>

<div id="">
	<h1>Categories</h1>

	<div id="body">
	<?php //print_r($categories);?>
            <div id="navigation">
	<?php foreach($categories as $category): ?>
	<?php if($category->parent_id ==0) { ?>
		<ul> <li><?php  echo $category->category_name; ?>  <a href="<?php echo base_url() ?>admin/category/edit/<?php  echo $category->category_id; ?>">Edit</a>
                        <a href="<?php echo base_url() ?>admin/category/edit/<?php  echo $category->category_id; ?>">Edit</a>
		<ul> <?php foreach($categories as $cat): if($category->category_id==$cat->parent_id) { ?>
                    <li><?php  echo $cat->category_name;?> <a href="<?php echo base_url() ?>admin/category/edit/<?php  echo $cat->category_id; ?>">Edit</a>
                     <ul> <?php foreach($categories as $subcat): if($cat->category_id==$subcat->parent_id) { ?>
                    <li><?php  echo $subcat->category_name;?> <a href="<?php echo base_url() ?>admin/category/edit/<?php  echo $subcat->category_id; ?>">Edit</a></li>
                <?php } endforeach;?>
                    </ul>
                    </li> <?php } endforeach;?>
                </ul>

		
		</li>
                </ul>
	
	<?php  
	}
	endforeach;?>
                
	</div>	
	</div>


</div>
 
</body>
</html>