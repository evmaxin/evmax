    <?php  
//echo "<pre>";print_r($products);
?>
<div class="page-content">
    
        <h1 class="page-title"> Products Edit
                        </h1>
                        <!-- END PAGE TITLE-->
                        <!-- END PAGE HEADER-->
                        <div class="row">
                            <div class="col-md-12">
                                
                                    <div class="portlet">
                                        <div class="portlet-title">
                                            <div class="caption">
                                                <i class="fa fa-shopping-cart"></i><?php echo ($products[0]->name)?$products[0]->name:'';?> </div>
                                          
                                        </div>
                                        <div class="portlet-body">
                                            <div class="tabbable-bordered">
                                                <ul class="nav nav-tabs">
                                                    <li class="active">
                                                        <a href="#tab_1" data-toggle="tab"> General </a>
                                                    </li>
                                                    
                                                    <li>
                                                        <a href="#tab_2" data-toggle="tab"> Images </a>
                                                    </li>
                                                   
                                                   
                                                </ul>
                                                <div class="tab-content">
                                                    <div class="tab-pane active" id="tab_1">
                                                        <div class="form-body">
                                                            <form action="<?php echo base_url();?>admin/Product/update/<?php echo ($products[0]->product_id)?$products[0]->product_id:0;?>" method="post" enctype="multipart/form-data" id="addproduct" onsubmit="return checkChecked('addproduct');">
		
                                                                  <div class="form-group padding-bottom-40">
                                                                <label class="col-md-2 control-label">Name:
                                                                    <span class="required"> * </span>
                                                                </label>
                                                                <div class="col-md-10">
                                                                    <input class="form-control" type="text" name="name" id="name" value="<?php echo ($products[0]->name)?$products[0]->name:'';?>" required /> </div>
                                                            </div>
                                                    <div class="form-group padding-bottom-40">
                                                                <label class="col-md-2 control-label">SKU:
                                                                    <span class="required"> * </span>
                                                                </label>
                                                                <div class="col-md-10">
                                                                   <input class="form-control" type="text" name="sku" id="sku" value="<?php echo ($products[0]->name)?$products[0]->name:'';?>" required />
                                                                </div>
                                                            </div>
                                                                 <div class="form-group padding-bottom-40">
                                                                <label class="col-md-2 control-label">Category:
                                                                    <span class="required"> * </span>
                                                                </label>
                                                                <div class="col-md-10">
                                                                    <select name="category[]" id="category" class="form-control">
        <?php foreach($categories as $category): ?>
	<?php if($category->parent_id ==0) { ?>
                                                      <optgroup  class="cat_level1" label="<?php echo $category->category_name;?>" value="<?php  echo $category->category_id;?>">
 <?php foreach($categories as $cat): 
              if($category->category_id==$cat->parent_id) { ?>
			  <option class="cat_level2" value="<?php  echo $cat->category_id;?>" <?php if($cat->category_id ==$products[0]->category_id){ echo "selected";}?>>  <?php  echo "<span class=''>&#8627; </span>".$cat->category_name;?>    </option>
			   <?php foreach($categories as $subcat): 
                    if($cat->category_id==$subcat->parent_id) { ?>
                <option class="cat_level3" value="<?php  echo $subcat->category_id;?>" <?php if($subcat->category_id ==$products[0]->category_id){ echo "selected";}?>>  <?php  echo "<span class=''>------- </span>".$subcat->category_name;?>    </option>
             <?php } endforeach;?>
			  
			  <?php }  ?> 
          
          <?php endforeach;?>
 
      <?php  
	}
	endforeach;?>
                                                      </optgroup> 
   </select>
                                                                    
                                                                </div>
                                                            </div>
                                                              
                                                  <div class="form-group mb30">  
                                                      
               
                  <?php
                  $attributes_array = explode(",",$products[0]->attribute_id);//Getting all selected attributes for this product
                  if(isset($attributes)) {
                                                                    
                                                                        foreach($attributes as $attribute){ ?>
                                                      <label class="col-md-2 control-label"><?php  echo $attribute->attribute_type; ?>
                                                                    <span class="required"> * </span>
                                                                </label>
									
                                                                         <?php  $onepieces = explode(",", $attribute->name); ?>
                                                                         <div class="col-md-10 mb30">
                                                                    <div class="form-control height-auto">
                                                                        <div class="scroller" style="" data-always-visible="1">
                                                                            <ul class="list-unstyled">
                                                                                <li>
                                                                                 
                                                                                    <ul class="list-unstyled">
                                                                            <?php  if(isset($onepieces)) { 
                                                                                foreach($onepieces as $nameNvalue){
                                                                        $pieces = explode("~", $nameNvalue); ?>
                                                                           <li>
                                                                                            <label><input type="checkbox" class="filter" <?php if (in_array($pieces[1], $attributes_array)){ echo "checked";}?> id="<?php echo isset($pieces[1])?$pieces[1]:0; ?>" value="<?php echo isset($pieces[1])?$pieces[1]:0; ?>" name="<?php  echo $attribute->attribute_type?strtolower($attribute->attribute_type):''; ?>[]" > <?php echo isset($pieces[0])?$pieces[0]:'No data';?>	</label>
                                                                                        </li>
                                                                                        
                                                                            <?php  }
                                                                                } ?>
                                                                            </ul>
                                                                                </li>
                                                                           
                                                                               
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                  
                                                                </div>
									
                                                                        <?php  }
                                                                                 } ?>
                                                  </div>
            
                                                                <div class="form-group mb30">
                                                                <label class="col-md-2 control-label">Actual price::
                                                                    <span class="required"> * </span>
                                                                </label>
                                                                <div class="col-md-10 mb30">
                                                                    <input type="text" class="form-control" name="actual_price" id="actual_price" value="<?php echo ($products[0]->actual_price)?$products[0]->actual_price:'';?>" required/>
                                                                    </div>
                                                            </div>
                                                                   <div class="form-group mb30">
                                                                <label class="col-md-2 control-label">Offer price
                                                                    <span class="required"> * </span>
                                                                </label>
                                                                <div class="col-md-10 mb30">
                                                                    <input type="text" class="form-control" name="offer_price" id="offer_price" value="<?php echo ($products[0]->offer_price)?$products[0]->offer_price:'';?>" required/>
                                                                    </div>
                                                            </div>
                                                                   <div class="form-group mb30">
                                                                <label class="col-md-2 control-label">Product cost
                                                                    <span class="required"> * </span>
                                                                </label>
                                                                <div class="col-md-10 mb30">
                                                                  <input type="text" class="form-control" name="product_cost" id="product_cost" value="<?php echo ($products[0]->product_cost)?$products[0]->product_cost:'';?>" required />(Internal purpose) 
                                                                    </div>
                                                            </div>
              
                                                                <div class="form-group mb30" >
                                                                <label class="col-md-2 control-label" id="tab<?php echo$products[0]->product_id; ?>">Inventory
                                                                    <span class="required"> * </span>
                                                                </label>
                                                                <div class="col-md-10 mb30">
                                                                  <input type="text" class="form-control" name="inventory" id="inventory" value="<?php echo ($products[0]->inventory)?$products[0]->inventory:0;?>" required/>
                                                                    </div>
                                                            </div>
               
               
               
                                                            <div class="form-group mb30">
                                                                <label class="col-md-2 control-label">Description:
                                                                    <span class="required"> * </span>
                                                                </label>
                                                                <div class="col-md-10 mb30">
                                                                    <textarea class="form-control" name="full_description" id="full_description" required><?php echo ($products[0]->full_description)?$products[0]->full_description:'';?></textarea>
                                                                    
                                                                </div>
                                                            </div>
                                                                <div class="form-group">
                                                                
                                                                <div class="col-md-10 mb30">
                                                                    <input type="hidden" name="target_tab" id="target_tab" value="1">
                                                                    <input class="btn btn-success" type="submit" name="update" value="save"/>
                                                                    
                                                                </div>
                                                            </div>
                                                                
                                      
		</form>
                                                          
                                                           
                                                            
                                                            
                                                           
                                                         
                                                                                                                      
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="tab-pane" id="tab_2">
                                                        <div class="alert alert-success margin-bottom-10">
                                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                                                            <i class="fa fa-warning fa-lg"></i> Image type and information need to be specified. </div>
                                                             <form action="<?php echo base_url();?>admin/Product/updateProductImages" method="post" enctype="multipart/form-data" id="addproduct1">
                                                        <div id="tab_images_uploader_container" class="text-align-reverse margin-bottom-10">
                                                            
                                                            
                                                    <input type="file" name="userfile[]" multiple id="userfile" class="btn btn-primary" style="float: left;"> 
                                                   <input type="hidden" name="target_tab" id="target_tab" value="2">        
                                                    <input type="hidden" name="product_id" id="product_id" value="<?php echo ($products[0]->product_id)?$products[0]->product_id:0;?>">
                                                    <input type="submit" name="submit" class="btn btn-primary">
                                                        </div>
                                                             </form>
                                                        <form action="<?php echo base_url();?>admin/Product/destroyImages/<?php echo ($products[0]->product_id)?$products[0]->product_id:0;?>" method="post" enctype="multipart/form-data" id="destroyImages">
                                                        <div class="row">
                                                            <div id="tab_images_uploader_filelist" class="col-md-6 col-sm-12"> </div>
                                                        </div>
                                                            <?php if($products[0]->image_path !='') {?>
                                                        <table class="table table-bordered table-hover table-responsive">
                                                            <thead>
                                                                <tr role="row" class="heading">
                                                                    <th width="1%">  <!--<input type="checkbox" name="image_ids" id="">Check All --> </th>
                                                                    <th width="8%"> Image </th>
                                                                    
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php 
                                                               //echo $products[0]->image_path."----";exit;
                                                                    $imageArray = explode(',', $products[0]->image_path);
                                                                    //if($products[0]->image_ids==''){
                                                                    $image_ids = explode(',', $products[0]->image_ids);
                                                                    //}
                                                                   // print_r($image_ids);
                                                                   $img=0; foreach ($imageArray as $image) {
                                                                       if(isset($imageArray) && count($imageArray>0)){
                                                                          // echo count($imageArray);
                                                                       ?>
                                                                <tr>
                                                                     <td>
                                                                         <input type="checkbox" name="image_ids[]" id="image_ids" value="<?php echo $image_ids[$img]; ?>">
                                                                    </td>
                                                                    <td>
                                                                        <a href="<?php echo base_url();?>public/uploads/<?php if($image != ''){  echo $image; } else { echo 'no_image.png'; } ?>" class="fancybox-button" data-rel="fancybox-button">
                                                                            <img class="img-responsive" src="<?php echo base_url();?>public/uploads/<?php if($image != ''){  echo $image; } ?>" alt="<?php echo ($products[0]->name)?$products[0]->name:'';?>" style="width: 7%;"> </a>
                                                                    </td>
                                                                    
                                                                    
                                                                    
                                                                </tr>
                                                                   <?php  $img++; } } ?>
                                                                <?php  if(isset($imageArray) && count($imageArray>0)){
                                                                       ?>
                                                                 <tr>
                                                                     
                                                                     <td colspan="2">
                                                                         <input type="submit" name="all_image_ids" id="all_image_ids" value="Delete Checked" class="btn btn-primary">
                                                                    </td>
                                                                    
                                                                    
                                                                    
                                                                </tr>
                                                                <?php } ?>
                                                            </tbody>
                                                        </table>
                                                            <?php }?>
                                                        </form>
                                                    </div>
                                                 
                                                   
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        
                        
                        <!-- tabs end-->
 
    </div>



<script type="text/javascript">
 
function checkChecked(formname) {
    var anyBoxesChecked = false;
    $('#' + formname + ' input[type="checkbox"]').each(function() {
        if ($(this).is(":checked")) {
            anyBoxesChecked = true;
        }
    });
 
    if (anyBoxesChecked == false) {
      alert('Please select at least one Attribute like Size,Color etc..');
      return false;
    } 
}
</script>