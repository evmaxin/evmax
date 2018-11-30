<div class="page-content">

    <h1 class="page-title"> Banner Edit
    </h1>
    <!-- END PAGE TITLE-->
    <!-- END PAGE HEADER-->
    <div class="row">
        <div class="col-md-12">

            <form action="<?php echo base_url(); ?>admin/sliders/update/<?php echo $this->uri->segment(4)?$this->uri->segment(4):$attributes[0]->attribute_id ?>" method="post" enctype="multipart/form-data" id="editproduct">
                 <div class="form-group padding-bottom-10">
                <div class="form-group">
                    
                  <label class="control-label">Category</label>
                 <select name="slider_category" id="slider_category" class="form-control">
		<?php foreach($slidercategories as $category):?>
                <option value="<?php  echo $category->slider_category_id;?>" <?php if($sliders[0]->slider_category_id == $category->slider_category_id){echo "selected";} ?>><?php  echo $category->category_name;?></option>
		<?php endforeach;?>
		</select>
                                                

                                              </div>
                    
                 </div>
                 <div class="form-group padding-bottom-30">
                   <div class="form-group">
                      <label class="control-label">Image </label>
                        <input type="file" name="userfile[]" id="userfile" required multiple class="form-control" />
                        
                       </div>
                </div>
                <?php if(isset($this->session->userdata('admin_data')['store_id']) && ($this->session->userdata('admin_data')['store_id']==1)){?>
                 
                 <div class="form-group">
                  <label class="control-label">Display Order</label>
                  <input type="text" name="order" id="order" class="form-control" value="<?php echo $sliders[0]->display_order?$sliders[0]->display_order:''; ?>" onkeypress="return isNumber(event)">
                                                

                </div>
              
                
<div class="form-group padding-bottom-40">
                                                                <label class=" control-label">Link to Category:
                                                                    <span class="required"> * </span>
                                                                </label>
                                                                <div class="">
                                                                    <select name="category" id="category" class="form-control">
        <?php foreach($categories as $category): ?>
	<?php if($category->parent_id ==0) { ?>
                                                                        <option class="cat_level2" value="<?php  echo $category->category_id;?>" <?php if($category->category_id ==$sliders[0]->link_to_category){ echo "selected";}?>>  <?php echo $category->category_name;?>    </option>
                                                      
 <?php foreach($categories as $cat): 
              if($category->category_id==$cat->parent_id) { ?>
			  <option class="cat_level2" value="<?php  echo $cat->category_id;?>" <?php if($cat->category_id ==$sliders[0]->link_to_category){ echo "selected";}?>>  <?php  echo "<span class=''>&#8627; </span>".$cat->category_name;?>    </option>
			   <?php foreach($categories as $subcat): 
                    if($cat->category_id==$subcat->parent_id) { ?>
                <option class="cat_level3" value="<?php  echo $subcat->category_id;?>" <?php if($subcat->category_id ==$sliders[0]->link_to_category){ echo "selected";}?>>  <?php  echo "<span class=''>------- </span>".$subcat->category_name;?>    </option>
             <?php } endforeach;?>
			  
			  <?php }  ?> 
          
          <?php endforeach;?>
 
      <?php  
	}
	endforeach;?>
                                                    
   </select>
                                                                    
                                                                </div>
                                                            </div>
                 <?php } ?>
                <div class="form-group padding-bottom-30">

                    <div class="col-md-10">
                        <input class="btn btn-success" type="submit" name="update" value="save"/>

                    </div>
                </div>

            </form>    
        </div>
    </div>


    <!-- tabs end-->

</div>



