<div class="page-content">
      <div class="row">
        <div class="col-md-12 padding-bottom-20">
          <div class="btn-group col-md-4"> <a id="" class="btn green" data-target="#addNew" data-toggle="modal" > Add New <i class="fa fa-plus"></i> </a>   </div> 

      

        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="portlet box blue">
            <div class="portlet-title">
              <div class="caption"> <i class="icon-user-follow"></i>Add Details</div>
              <div class="tools"> <a href="javascript:;" class="collapse"> </a> </div>
            </div>
            <div class="portlet-body">
              <div class="table-toolbar"> </div>
                 
        <table id="table" class="table table-striped table-hover table-bordered display" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>Company Name</th>
                    <th>Manufacturer Logo</th>
                    <th>Brand Logo</th>
                     <th>Brand Banner</th>
                     <th>E Catalog</th>
                    
                       <th>Contact Number</th>
                       <th>Url</th>
                         <th>Address</th>
                          <th>City</th>
                     <th>State Name</th>
                     <th width=30%">Operations</th>
                    
                </tr>
            </thead>
            <tbody>
            </tbody>

           
        </table>
             
            </div>
              <form action="<?php echo base_url();?>admin/ERickshawFactory/add" method="post" enctype="multipart/form-data" id="addproduct">
            <div id="addNew" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
              <div class="modal-dialog modal-dialog-confirm">
                <div class="modal-content ">
                  <div class="modal-header"> <a type="button" class="close" data-dismiss="modal" aria-hidden="true"></a>
                    <h4 class="modal-title">Add e-Rickshaw Factory</h4>
                  </div>
                  <div class="modal-body">
             
                         <div class="form-group">
                      <label class="control-label">Manufacturer Logo <span class="required"> * </span> <a href="#" data-toggle="tooltip" title="Please select image for Manufacturer Logo"><i class='glyphicon glyphicon-info-sign'></i></a></label>
                        <input type="file" name="userfile[]" id="userfile" required class="form-control" accept="image/jpg, image/jpeg,image/png, image/gif"/>
                        <small class="required">Remove special character's in image name</small>
                        </div>
                        <div class="form-group">
                      <label class="control-label">Brand Logo <span class="required"> * </span> <a href="#" data-toggle="tooltip" title="Please select image for Brand Logo"><i class='glyphicon glyphicon-info-sign'></i></a></label>
                        <input type="file" name="userfile[]" id="brandlogo" class="form-control" accept="image/jpg, image/jpeg,image/png, image/gif"/>
                        <small class="required">Remove special character's in image name</small>
                        </div>
                        <div class="form-group">
                      <label class="control-label">Brand Banner <span class="required"> * </span> <a href="#" data-toggle="tooltip" title="Please select image for Brand Banner"><i class='glyphicon glyphicon-info-sign'></i></a></label>
                        <input type="file" name="userfile[]" id="brandbanner" class="form-control" accept="image/jpg, image/jpeg,image/png, image/gif"/>
                        <small class="required">Remove special character's in image name</small>
                        </div>
                       <div class="form-group">
                      <label class="control-label">E Catalog <a href="#" data-toggle="tooltip" title="Please select pdf for E Catalog"><i class='glyphicon glyphicon-info-sign'></i></a></label>
                        <input type="file" name="userfile[]" id="brandbanner" class="form-control" accept="application/pdf"/>
                        <small class="required">Remove special character's in pdf name</small>
                        </div>
                       <div class="form-group">
                  <label class="control-label">Company Name</label>
                  <input type="text" name="company_name" id="company_name" class="form-control">
                                                

                </div>
                         <div class="form-group">
                                                    <label class="control-label">Address </label>
                                                    <textarea name="address" id="address" class="form-control"></textarea>

                                                </div>
                       <div class="form-group">
                  <label class="control-label">City</label>
                  <input type="text" name="city" id="city" class="form-control">
                                                

                </div>
                      
                           <div class="form-group">
                                                    
                                                    <label class="control-label">State</label>
                                                   <select name="state_id" id="state_id" class="form-control" required="required">
                                                        <option value="">Select</option>
                                                                                                                 <?php
                                if (isset($states) && (count($states) > 0)) {

                                    foreach ($states as $state) {
                                        ?>

                                        <option value="<?php echo $state->state_id ? $state->state_id : ''; ?>"><?php echo $state->state_name ? $state->state_name : ''; ?></option>
    <?php }
} ?>

                                  
                                                    </select>

                                                </div>
                       <div class="form-group">
                  <label class="control-label">Country</label>
                  <input type="text" name="country" id="country" class="form-control">
                                                

                </div>
                       <div class="form-group">
                  <label class="control-label">Contact Number</label>
                  <input type="text" name="contact_number" id="contact_number" class="form-control">
                                                

                </div>
                      <div class="form-group">
                  <label class="control-label">Website URL</label>
                  <input type="text" name="url" id="url" class="form-control">
                                                

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
<script type="text/javascript">
              $('body').on('click','.delete',function(){
         var id = $(this).data('id');
         var name = $(this).data('name');
         var cname = $(this).data('cname');
         var answer = confirm('Are you sure you want to delete '+name+' in '+cname+' ?');
         
if (answer)
{
      $.ajax({
      type: "POST",
      url: "<?=base_url();?>admin/Ajax/deleteERickshawImages",   
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
  alert('Operation cancelled');
}
        }); 
            $('body').on('click', '.product_id', function () {
        var product_id = $(this).data('id');
        var product_name = $(this).data('pname');
        var type = $(this).data('type');
        var alertval="";
        //var flg="";
        alertval = (type==="activate")?"Activate ":"Deactivate ";
        var answer = confirm('Are you sure you want to '+ alertval  + product_name + ' ?');

        if (answer)
        {
            $.ajax({
                type: "POST",
                url: "<?= base_url(); ?>admin/Ajax/eventOnERickshaw",
                data: {'product_id': product_id,'typeofAction': type},
                success: function (response) {

                    if (response) {
                        location.reload();
                        //$('.p10').parent('tr').remove();
                        //alert('ok');
                        // $('#custom_attributes').html(response); 
                    } else {

                    }
                }
            });
        } else
        {
            alert('You are canceled the operation');
        }
    });
    </script>