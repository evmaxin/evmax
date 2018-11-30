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
                                                <i class="fa fa-shopping-cart"></i><?php echo ($products[0]->title)?$products[0]->title:'';?> </div>
                                          
                                        </div>
                                        <div class="portlet-body">
                                            <div class="">
                                             
                                                
                                                        <div class="form-body">
                                                            <form action="<?php echo base_url();?>admin/BuyersGuide/update/<?php echo ($products[0]->buyer_guide_id)?$products[0]->buyer_guide_id:0;?>" method="post" enctype="multipart/form-data" id="addproduct">
		
                                                            
                
                 <div class="form-group">
                                                    <?php //echo $sku = $this->session->userdata('admin_data')['store_id'].strtoupper(uniqid()); ?>
                                                    <label class="control-label">Title <span class="required"> * </span></label>
                                                     <input type="title" name="title" id="title" required class="form-control" value="<?php echo ($products[0]->title)?$products[0]->title:'';?>"/>

                                                </div>
                                                    <div class="form-group">
                                                    <?php //echo $sku = $this->session->userdata('admin_data')['store_id'].strtoupper(uniqid()); ?>
                                                    <label class="control-label">Description </label>
                                              
                                                <textarea name="post" id="post" required class="form-control"><?php echo ($products[0]->post)?$products[0]->post:'';?></textarea>
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


