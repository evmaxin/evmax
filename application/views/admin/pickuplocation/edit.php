    <?php  
//echo "<pre>";print_r($products);
?>
<div class="page-content">
    
        <h1 class="page-title"> Edit
                        </h1>
                        <!-- END PAGE TITLE-->
                        <!-- END PAGE HEADER-->
                        <div class="row">
                            <div class="col-md-12">
                                
                                    <div class="portlet">
                                        <div class="portlet-title">
                                            <div class="caption">
                                                <i class="fa fa-shopping-cart"></i><?php echo ($products[0]->pickup_loc_name)?$products[0]->pickup_loc_name:'';?> </div>
                                          
                                        </div>
                                        <div class="portlet-body">
                                            <div class="">
                                             
                                                
                                                        <div class="form-body">
                                                            <form action="<?php echo base_url();?>admin/PickupLocation/update/<?php echo ($products[0]->id)?$products[0]->id:0;?>" method="post" enctype="multipart/form-data" id="addproduct">
		
                                                                  <div class="form-group padding-bottom-40">
                                                                <label class="col-md-2 control-label">Pickup Loc Name:
                                                                    <span class="required"> * </span>
                                                                </label>
                                                                <div class="col-md-10">
                                                                    <input class="form-control" type="text" name="pickup_loc_name" id="pickup_loc_name" value="<?php echo ($products[0]->pickup_loc_name)?$products[0]->pickup_loc_name:'';?>" required /> </div>
                                                            </div>
                                                                   <div class="form-group padding-bottom-40">
                                                                <label class="col-md-2 control-label">Person Name:
                                                                    
                                                                </label>
                                                                <div class="col-md-10">
                                                                    <input class="form-control" type="person_name" name="person_name" id="name" value="<?php echo ($products[0]->person_name)?$products[0]->person_name:'';?>" /> </div>
                                                            </div>
                                                                   <div class="form-group padding-bottom-40">
                                                                <label class="col-md-2 control-label">Phone number:
                                                                    
                                                                </label>
                                                                <div class="col-md-10">
                                                                    <input class="form-control" type="text" name="cont_number" id="cont_number" value="<?php echo ($products[0]->cont_number)?$products[0]->cont_number:'';?>" /> </div>
                                                            </div>
                                                                   <div class="form-group padding-bottom-40">
                                                                <label class="col-md-2 control-label">Email
                                                                  
                                                                </label>
                                                                <div class="col-md-10">
                                                                    <input class="form-control" type="text" name="cont_email" id="cont_email" value="<?php echo ($products[0]->cont_email)?$products[0]->cont_email:'';?>" /> </div>
                                                            </div>
                                                         
                                                              
                                                   
                                                                
                                                              
                                                  
            
                                                             
                                                                   <div class="form-group mb30">
                                                                <label class="col-md-2 control-label">Address1:	
                                                                    <span class="required"> * </span>
                                                                </label>
                                                                <div class="col-md-10 mb30">
                                                                    <input type="text" class="form-control" name="address1" id="address1" value="<?php echo ($products[0]->address1)?$products[0]->address1:'';?>" required/>
                                                                    </div>
                                                            </div>
                                                                <div class="form-group mb30">
                                                                <label class="col-md-2 control-label">Address2:	
                                                                  
                                                                </label>
                                                                <div class="col-md-10 mb30">
                                                                    <input type="text" class="form-control" name="address2" id="address2" value="<?php echo ($products[0]->address2)?$products[0]->address2:'';?>"/>
                                                                    </div>
                                                            </div>
                                                                <div class="form-group mb30">
                                                                <label class="col-md-2 control-label">City:	
                                                                  
                                                                </label>
                                                                <div class="col-md-10 mb30">
                                                                    <input type="text" class="form-control" name="city" id="city" value="<?php echo ($products[0]->city)?$products[0]->city:'';?>"/>
                                                                    </div>
                                                            </div>
                                                              <div class="form-group padding-bottom-40">
                                                                <label class="col-md-2 control-label">State:
                                                                    <span class="required"> * </span>
                                                                </label>
                                                              
                                                        <div class="col-md-10">
                                                                    <select name="state" id="state" class="form-control">
  
                                                     
    <?php
                                if (isset($states) && (count($states) > 0)) {

                                    foreach ($states as $state) {
                                        ?>

                                        <option value="<?php echo $state->state_id ? $state->state_id : ''; ?>" <?php if($state->state_id == $products[0]->state){ echo "selected";}?>><?php echo $state->state_name ? $state->state_name : ''; ?></option>
    <?php }
} ?>
 
   </select>
                                                                    
                                                                </div>
                                                            </div>
              
                                                              
                  <div class="form-group mb30">
                                                                <label class="col-md-2 control-label">City:	
                                                                  
                                                                </label>
                                                                <div class="col-md-10 mb30">
                                                                    <input type="text" class="form-control" name="country" id="country" value="<?php echo ($products[0]->country)?$products[0]->country:'';?>"/>
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
                                    </div>
                                </form>
                            </div>
                        </div>
                        
                        
                        <!-- tabs end-->
 
    </div>


