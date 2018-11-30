<div class="page-content">

    <h1 class="page-title"> Attributes Edit
    </h1>
    <!-- END PAGE TITLE-->
    <!-- END PAGE HEADER-->
    <div class="row">
        <div class="col-md-12">

            <form action="<?php echo base_url(); ?>admin/attributes/update/<?php echo $this->uri->segment(4)?$this->uri->segment(4):$attributes[0]->attribute_id ?>" method="post">
                <div class="form-group padding-bottom-30">
                    <label class="col-md-2 control-label">Parent Name:
                        <span class="required"> * </span>
                    </label>
                    <div class="col-md-10">
                        <select name="attribute_type" id="attribute_type" class="form-control" required>
                            <option value="">Select</option>
                            <?php if(isset($attributetype)) { foreach ($attributetype as $type): ?>
                                <option value="<?php echo $type->attribute_type_id; ?>" <?php if ($attributes[0]->attribute_type_id == $type->attribute_type_id) {
                                echo "selected";
                            } ?> ><?php echo $type->attribute_type; ?></option>
                            <?php endforeach; } ?>
                        </select>
                    </div>
                </div>

                <div class="form-group padding-bottom-30">
                    <label class="col-md-2 control-label">Attribute Name:
                        <span class="required"> * </span>
                    </label>
                    <div class="col-md-10">
                        <?php $cat = explode('-',$attributes[0]->atr_cat_ids); 
               // print_r($cat);
                $cat_array = explode(",",$cat[0]); 
                //print_r($cat_array);
                        $result = explode('~',$attributes[0]->name);//Seperating tild ?>
                        <input class="form-control" type="text" name="attribute_name" id="attribute_name" required value="<?php echo $result[0] ? $result[0] : 'No data'; ?>" />
                    </div>
                </div>
                
                 <div class="form-group padding-bottom-30">
                                                                                   <label class="col-md-2 control-label">For which Categories?
                        <span class="required"> * </span>
                    </label>
                                                                                 <div class="col-md-10 padding-bottom-30">
                                                                                  <select name="category_ids[]" id="category_ids" class="form-control" multiple required>
                                                                      
        <?php foreach($categories as $category): ?>
	<?php if($category->parent_id ==0) { 
            //$cat_id = explode(',',$cat);
           // print_r($cat_id);
            ?>
                                                            <?php //foreach ($cat_id as $id) { echo $id;  ?>                          
                                                       <option  class="cat_level0" style="font-size:14px;"  value="<?php  echo $category->category_id;?>" <?php if (in_array($category->category_id, $cat_array)) {echo "selected";}?>><?php echo $category->category_name;?></option>
                                                            <?php //}?>
 
                                                    
      <?php  
	}
	endforeach;?>
                                                      
   </select>
                                                                                  <small>Multiple selection allowed</small>
                                                 

                                              </div>
                
</div>
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



