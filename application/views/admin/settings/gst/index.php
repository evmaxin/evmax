<?php // echo count($categories);echo"<pre>";print_r($categories);exit;?>
<div class="page-content">
    <?php if(isset($this->session->userdata('admin_data')['store_id']) && ($this->session->userdata('admin_data')['store_id']==1)){?>
      <div class="row">
        <div class="col-md-12 padding-bottom-20">
          <div class="btn-group col-md-4"> <a id="" class="btn green" data-target="#addNew" data-toggle="modal" > Add New <i class="fa fa-plus"></i> </a> </div>

        

        </div>
      </div>
    <?php } ?>
      <div class="row">
        <div class="col-md-12">
          <div class="portlet box blue">
            <div class="portlet-title">
              <div class="caption"> <i class="fa fa-list"></i>Add GST </div>
              <div class="tools"> <a href="javascript:;" class="collapse"> </a> </div>
            </div>
            <div class="portlet-body">
              <div class="table-toolbar"> </div>
                 
        <table id="table" class="table table-striped table-hover table-bordered display" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>S.No</th>
                    
                    <th>gst percentage</th>
                    <th>category_type</th>
          <!--      <th class="not-export-col">&nbsp;&nbsp;Action&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>-->
                    
                </tr>
            </thead>
            <tbody>
            </tbody>

           
        </table>
             
            </div>
            <form action="<?php echo base_url(); ?>admin/Settings/add" method="post" enctype="multipart/form-data" id="addproduct" onsubmit="return checkChecked('addproduct');">
                  <div id="addNew" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-confirm">
                          <div class="modal-content ">
                              <div class="modal-header"> <a type="button" class="close" data-dismiss="modal" aria-hidden="true"></a>
                                  <h4 class="modal-title">Add GST Rule</h4>
                              </div>
                              <div class="modal-body">

                                  <div class="form-body">
                                      <div class="row">
                                          <div class="col-md-12">
                                              <div class="form-group">
                                                  <label class="control-label">GST Percentage <span class="required"> * </span></label>
                                                  <input type="text" name="gst" id="gst" required class="form-control" required onkeypress="return isNumber(event)"/>
                                                  
                                              </div>
                                                
                                              
                                            
               
                                              <div class="form-group">
                                                  <label class="control-label">Category Type <span class="required"> * </span></label>
                   <select class="form-control" name="category_type_id" id="category_type_id" required="required">
		<option value="">Select</option>
		<?php foreach($categorytypes as $type):?>
		<option value="<?php  echo $type->category_type_id; ?>"><?php  echo $type->category_type;?></option>
		<?php endforeach;?>
		</select>
                                                  
                                              </div>
                             
                                     </div>
                                      </div>
                                  </div>

                              </div>
                              <div class="form-actions modal-footer"> 
                                  <input type="submit"  class="btn blue" name="add" id="add" value="submit"/>
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
      <script>
          $('body').on('click','.product_id1',function(){
         var product_id = $(this).data('id');
         var product_name = $(this).data('pname');
         var answer = confirm('Are you sure you want to delete '+product_name+' ?');
         
if (answer)
{
      $.ajax({
      type: "POST",
      url: "<?=base_url();?>admin/Ajax/deleteProduct",   
      data: {'product_id':product_id},
      success: function (response) {
         
             if(response){
                 location.reload();
                
           } else{
             
           }
      }
 });
}
else
{
  alert('Product Not Deleted');
}
        });  
   

 </script>
 
