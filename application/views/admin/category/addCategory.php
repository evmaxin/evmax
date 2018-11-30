<?php //echo count($categories);print_r($categories);exit;?>
<div class="page-content">

    <h1 class="page-title"> Add Category
    </h1>
    <!-- END PAGE TITLE-->
    <!-- END PAGE HEADER-->
    <div class="row">
        <div class="col-md-12">

           <form action="<?php echo base_url();?>admin/Category/addCategory" method="post">
               
               <input type="hidden" name="category_type" id="category_type" value="1">
               
               <input type="hidden" name="parent_id" id="parent_id" value="0">
             
               
                <div class="form-group padding-bottom-30">
                    <label class="col-md-2 control-label"> Category Name:
                        <span class="required"> * </span>
                    </label>
                    <div class="col-md-10">
                     
                        <input class="form-control" type="text" name="category_name" id="category_name" style="margin-bottom: 10px !important;" required />
                       
                </div>
                </div>
                 <div class="form-group padding-bottom-50">
                                                    
                                                    <label class="col-md-2 control-label">Main Menu <span class="required"> * </span></label>
                                                    <div class="col-md-10">
                                                   <select name="menu_id" id="menu_id" class="form-control" required="required">
                                                        <option value="">Select</option>
                                                                                                                 <?php
                                if (isset($menu) && (count($menu) > 0)) {

                                    foreach ($menu as $value) {
                                        ?>

                                        <option value="<?php echo $value->menu_id ? $value->menu_id : ''; ?>"><?php echo $value->name ? $value->name : ''; ?></option>
    <?php }
} ?>

                                  
                                                    </select>
                                                    </div>
                                                </div>
                       <div class="form-group padding-bottom-30">
                                                    
                                                    <label class="col-md-2 control-label">Sub Menu </label>
                                                    <div class="col-md-10">
                                                   <select name="submenu_id" id="submenu_id" class="form-control">
     

                                  
                                                    </select>
                                                    </div>
                                                </div>
                        <div class="form-group padding-bottom-30">
                    <label class="col-md-2 control-label"> Meta Title:
                                                                    
                                                                </label>
                                                                <div class="col-md-10">
                                                                    <input class="form-control" type="text" name="title" id="title" style="margin-bottom: 10px !important;" /> </div>
                                                            </div>
                                                    <div class="form-group padding-bottom-30">
                                                                <label class="col-md-2 control-label">Meta Keywords:
                                                                    
                                                                </label>
                                                                <div class="col-md-10">
                                                                   <input class="form-control" type="text" name="keywords" id="keywords" style="margin-bottom: 10px !important;" />
                                                                </div>
                                                            </div>
                                                                 
                                                
            
                                                               
                                    
               
               
               
                                                            <div class="form-group padding-bottom-30">
                             <label class="col-md-2 control-label"> Meta Description:
                                                                    
                                                                </label>
                                                                <div class="col-md-10 mb30">
                                                                    <textarea class="form-control" name="description" id="description"></textarea>
                                                                    
                                                                </div>
                                                            </div>
                      
                    <input type="hidden" name="show_in_navigation_menu" id="category_type" value="0">
                    
                    
                <div class="form-group padding-bottom-30">

                    <div class="col-md-10">
                        <input class="btn btn-success" type="submit" name="submit" value="submit"/>

                    </div>
                </div>

            
        
           </form>
           
    </div>


    <!-- tabs end-->

</div>
</div>




