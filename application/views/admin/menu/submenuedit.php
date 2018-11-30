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
                                                <i class="fa fa-shopping-cart"></i><?php echo ($products[0]->name)?$products[0]->name:'';?> </div>
                                          
                                        </div>
                                        <div class="portlet-body">
                                            <div class="">
                                             
                                                
                                                        <div class="form-body">
                                                            <form action="<?php echo base_url();?>admin/SubMenu/update/<?php echo ($products[0]->submenu_id)?$products[0]->submenu_id:0;?>" method="post" enctype="multipart/form-data" id="addproduct">
		
                                                            
                        <div class="form-group">
                                                    
                                                    <label class="control-label">Main Menu</label>
                                                   <select name="menu_id" id="menu_id" class="form-control" required="required">
                                                        <option value="">Select</option>
                                                                                                                 <?php
                                if (isset($menu) && (count($menu) > 0)) {

                                    foreach ($menu as $value) {
                                        ?>

                                        <option value="<?php echo $value->menu_id ? $value->menu_id : ''; ?>" <?php if($value->menu_id == $products[0]->menu_id){ echo "selected";}?>><?php echo $value->name ? $value->name : ''; ?></option>
    <?php }
} ?>

                                  
                                                    </select>

                                                </div>
                 <div class="form-group">
                                                    <?php //echo $sku = $this->session->userdata('admin_data')['store_id'].strtoupper(uniqid()); ?>
                                                    <label class="control-label">Name <span class="required"> * </span></label>
                                                    <input type="text" name="name" id="name" required class="form-control" value="<?php echo ($products[0]->name)?$products[0]->name:'';?>"/>

                                                </div>
                                                    <div class="form-group">
                                                    <?php //echo $sku = $this->session->userdata('admin_data')['store_id'].strtoupper(uniqid()); ?>
                                                    <label class="control-label">URI</label>
                                                    <input type="text" name="url" id="url" class="form-control" value="<?php echo ($products[0]->url)?$products[0]->url:'';?>"/>
                                                    <sub></sub>
                                                </div>
                                                             <div class="form-group">
                                                    
                                                    <label class="control-label">Open URL In New Page </label>
                                                   <select name="open_link_in_newpage" id="open_link_in_newpage" class="form-control">
                                                        <option value="0" <?php if($products[0]->open_link_in_newpage ==='0'){ echo "selected";}?>>No</option>
                                                        <option value="1" <?php if($products[0]->open_link_in_newpage==='1'){ echo "selected";}?>>Yes</option>
                                                                                                                 
                                                    </select>

                                                </div>  
                                                                                                                                           <div class="form-group">
                                                    <?php //echo $sku = $this->session->userdata('admin_data')['store_id'].strtoupper(uniqid()); ?>
                                                    <label class="control-label">Order </label>
                                                    <input type="text" name="menuorder" id="menuorder" class="form-control" value="<?php echo ($products[0]->menuorder)?$products[0]->menuorder:'';?>"/>

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


