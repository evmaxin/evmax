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
              <div class="caption"> <i class="icon-user-follow"></i>Manufacture Date</div>
              <div class="tools"> <a href="javascript:;" class="collapse"> </a> </div>
            </div>
            <div class="portlet-body">
              <div class="table-toolbar"> </div>
                 
        <table id="table" class="table table-striped table-hover table-bordered display" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>S.No</th>
                    <th>Manufacture Year</th>
                    
                     <?php if(isset($this->session->userdata('admin_data')['store_id']) && ($this->session->userdata('admin_data')['store_id']==1)){?>
                    <th>Operations</th>
                     <?php } ?>
                    
                </tr>
            </thead>
            <tbody>
            </tbody>

           
        </table>
             
            </div>
              <form action="<?php echo base_url(); ?>admin/dataMgnt/ManufactureDate/add" method="post">
                  <div id="addNew" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-confirm">
                          <div class="modal-content ">
                              <div class="modal-header"> <a type="button" class="close" data-dismiss="modal" aria-hidden="true"></a>
                                  <h4 class="modal-title">Add Manufacture Date</h4>
                              </div>
                              <div class="modal-body">

                                  <div class="form-body">
                                      <div class="row">
                                          <div class="col-md-12">
                                              
                                                                    
                                              <div class="form-group">
                                                  <label class="control-label">Manufacture Date <span class="required">*</span></label>
                                                  <input type="Number" name="variant_name" id="attribute_name" class="form-control" required /> <br>

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
            </div>
                

          </div>
        </div>
      </div>
    </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script>
<script type="text/javascript">
              $('body').on('click','.delete',function(){
         var id = $(this).data('id');
         var name = $(this).data('name');
         var answer = confirm('Are you sure you want to delete '+name+' ?');
         
		
if (answer)
{
      $.ajax({
      type: "POST",
      url: "<?=base_url();?>admin/dataMgnt/ManufactureDate/destroy/"+id+"",   
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
  alert('Year Not Deleted');
}
        }); 
    </script>