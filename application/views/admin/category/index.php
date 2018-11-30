<div class="page-content">
    <?php if(isset($this->session->userdata('admin_data')['store_id']) && ($this->session->userdata('admin_data')['store_id']==1)){?>
      <div class="row">
        <div class="col-md-12 padding-bottom-20">
          <div class="btn-group col-md-4"> <a id="" class="btn green" data-target="#addNew" data-toggle="modal" > Add New <i class="fa fa-plus"></i> </a> </div>

          <?php if($this->session->flashdata('message')){ ?> 
              <div class="alert alert-success alert-dismissable col-md-4"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
              <?php  echo $this->session->flashdata('message');?>
          </div>
          <?php } ?>

        </div>
      </div>
    <?php } ?>
      <div class="row">
        <div class="col-md-12">
          <div class="portlet box blue">
            <div class="portlet-title">
              <div class="caption"> <i class="icon-user-follow"></i>Add  Category</div>
              <div class="tools"> <a href="javascript:;" class="collapse"> </a> </div>
            </div>
            <div class="portlet-body">
              <div class="table-toolbar"> </div>
                 
        <table id="table" class="table table-striped table-hover table-bordered display" cellspacing="0" width="100%">
            <thead>
                <tr>
                   
                    <th>Category Name</th>
                    <?php if(isset($this->session->userdata('admin_data')['store_id']) && ($this->session->userdata('admin_data')['store_id']==1)){?>
                    <th>Operations</th>
                     <?php } ?>
                    
                </tr>
            </thead>
            <tbody>
            </tbody>

           
        </table>
             
            </div>
              <form action="<?php echo base_url();?>admin/Category/addCategory" method="post">
                  <div id="addNew" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-confirm">
                          <div class="modal-content ">
                              <div class="modal-header"> <a type="button" class="close" data-dismiss="modal" aria-hidden="true"></a>
                                  <h4 class="modal-title">Add Category</h4>
                              </div>
                              <div class="modal-body">
<div class="form-body">
                                      <div class="row">
                                          <div class="col-md-12">
                                         
                                                                    <input type="hidden" name="category_type" id="category_type" value="1">
               
               <input type="hidden" name="parent_id" id="parent_id" value="0">
                                              <div class="form-group">
                                                  <label class="control-label">Category Name <span class="required">*</span></label>
                                                  <input class="form-control" type="text" name="category_name" id="category_name" style="margin-bottom: 10px !important;" required />

                                              </div>
                                        <div class="form-group">
                                                    
                                                    <label class="control-label">Main Menu <span class="required"> * </span></label>
                                                   
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
               
               
                     <div class="form-group">
                                                    
                                                    <label class="control-label">Sub Menu </label>
                                                   
                                                   <select name="submenu_id" id="submenu_id" class="form-control">
     

                                  
                                                    </select>
                                                    
                                                </div>
                        <div class="form-group ">
                    <label class="control-label"> Meta Title:
                                                                    
                                                                </label>
                                                              
                                                                    <input class="form-control" type="text" name="title" id="title" style="margin-bottom: 10px !important;" /> </div>
                                                           
                                                    <div class="form-group ">
                                                                <label class="control-label">Meta Keywords:
                                                                    
                                                                </label>
                                                              
                                                                   <input class="form-control" type="text" name="keywords" id="keywords" style="margin-bottom: 10px !important;" />
                                                               
                                                            </div>
                                                                 
                                                
            
                                                               
                                    
               
               
               
                                                            <div class="form-group">
                             <label class="control-label"> Meta Description:
                                                                    
                                                                </label>
                                                               
                                                                    <textarea class="form-control" name="description" id="description"></textarea>
                                                                    
                                                               
                                                            </div>
                      
                    <input type="hidden" name="show_in_navigation_menu" id="category_type" value="0">
                                          </div>
                                      </div>
                                  </div>
                              

                              </div>
                              <div class="form-actions modal-footer"> 
                                  <input type="submit"  class="btn blue" name="submit" value="submit"/>
                                  <button class="btn default" data-dismiss="modal">Close</button>

                              </div>
                          </div>
                      </div>
                  </div>
              </form>
            </div>
                

          </div>
        </div>
      </div>
    </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script>
<script type="text/javascript">
              $('body').on('click','.delete',function(){
                  //alert();
         var id = $(this).data('id');
         var name = $(this).data('name');
         var answer = confirm('Are you sure you want to delete '+name+' ?. If you Delete '+name+' Category all products will be delete in this category');
         
if (answer)
{
      $.ajax({
      type: "POST",
      url: "<?=base_url();?>admin/Ajax/deleteCategory",   
      data: {'id':id},
      success: function (response) {
         
             if(response){
                 location.reload();
             // $("#demo").load(location.href + " #demo");
           } else{
             
           }
      }
 });
}
else
{
  alert('Category Not Deleted');
}
        }); 
    </script>
    <script>
    $('body').on('change', '#menu_id', function () {
        //var cat_id = $(this).data('id');
		
        var menu_id = $("#menu_id option:selected").val();
		//alert(cat_id);
           $.ajax({
                type: "POST",
                url: "<?= base_url(); ?>admin/Ajax/getSubMenu",
                data: {'menu_id': menu_id},
                success: function (response) {

                    if (response) {
                     $('#submenu_id').html(response); 
                    } else {
        $('#submenu_id').html('<option value=""></option>');
                    }
                }
            });
         
     
    });
</script>