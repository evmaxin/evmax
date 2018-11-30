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
              <div class="caption"> <i class="icon-user-follow"></i>Attribute Types</div>
              <div class="tools"> <a href="javascript:;" class="collapse"> </a> </div>
            </div>
              <div class="portlet-body" id="demo">
              <div class="table-toolbar"> </div>
                 
        <table id="table" class="table table-striped table-hover table-bordered display" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>S.No</th>
                    <th>Attribute Type</th>
                     <?php if(isset($this->session->userdata('admin_data')['store_id']) && ($this->session->userdata('admin_data')['store_id']==1)){?>
                    <th>Operations</th>
                     <?php } ?>
                </tr>
            </thead>
            <tbody>
            </tbody>

           
        </table>
             
            </div>
              <form action="<?php echo base_url();?>admin/AttributeType/add" method="post">
            <div id="addNew" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
              <div class="modal-dialog modal-dialog-confirm">
                <div class="modal-content ">
                  <div class="modal-header"> <a type="button" class="close" data-dismiss="modal" aria-hidden="true"></a>
                    <h4 class="modal-title">Add Attribute Type</h4>
                  </div>
                  <div class="modal-body">
                  
                      <div class="form-body">
                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group">
                              <label class="control-label">Attribute Type Name</label>
                               <input type="text" name="attribute_type" pattern="[a-zA-Z0-9\s]+" id="attribute_type" class="form-control" required value="<?php echo set_value('attribute_type'); ?>"/> 
                               <small>Special characters are not allowed</small>
                            </div>
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
        <?php // foreach ($totaldata as $value) { 
        //print_r($value);
            ?>
           <!-- <div aria-hidden="true" role="delete" tabindex="-1" id="delete<?php //  $value['attribute_type_id'];?>" class="modal fade" style="display: none;">
              <div class="modal-dialog modal-dialog-confirm">
                <div class="modal-content">
                  <div class="modal-body"> Are you sure you want to delete <b><?php // echo $value['attribute_type'];?></b> !!</div>
                  <div class="modal-footer">
                    <input class="btn blue" type="button" value="Yes" data-id="<?php // echo $value['attribute_type_id'];?>" id="btnYes" name="btnYes">
                    <input data-dismiss="modal" class="btn default" type="button" value="Cancel" id="cancel" name="cancel">
                  </div>
                </div>
              </div>
            </div> -->
              <?php // } ?>
          </div>
        </div>
      </div>
    </div>
<script type="text/javascript">
              $('body').on('click','.delete',function(){
         var id = $(this).data('id');
         var name = $(this).data('name');
         var answer = confirm('Are you sure you want to delete '+name+' ?');
         
if (answer)
{
      $.ajax({
      type: "POST",
      url: "<?=base_url();?>admin/Ajax/deleteAttrType",   
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
  alert('Attribute Type Not Deleted');
}
        }); 
    </script>