<div class="page-content">

    <h1 class="page-title"> Edit
    </h1>
    <!-- END PAGE TITLE-->
    <!-- END PAGE HEADER-->
    <div class="row">
        <div class="col-md-12">

            <form action="<?php echo base_url(); ?>admin/ERickshawFactory/uploadnew/<?php echo ($erickshaws[0]->id)?$erickshaws[0]->id:0;?>" method="post" enctype="multipart/form-data" id="editproduct">
             <div class="modal-body">
             
                         <div class="form-group">
                      <label class="control-label">Manufacturer Logo <a href="#" data-toggle="tooltip" title="Please select image for Manufacturer Logo"><i class='glyphicon glyphicon-info-sign'></i></a></label>
                      <input type="file" name="userfile1" id="userfile1" class="form-control" accept="image/jpg, image/jpeg,image/png, image/gif" style="width: 50%"/>
                     <img src="<?php echo base_url() ?>public/uploads/admin/erickshawfactory/<?php echo $erickshaws[0]->manufacturer_logo?$erickshaws[0]->manufacturer_logo:'';?>" class="img-responsive" style="width: 5%">
                        <small class="required">Remove special character's in image name</small>
                        </div>
                        <div class="form-group">
                      <label class="control-label">Brand Logo<a href="#" data-toggle="tooltip" title="Please select image for Brand Logo"><i class='glyphicon glyphicon-info-sign'></i></a></label>
                        <input type="file" name="userfile2" id="brandlogo" class="form-control" accept="image/jpg, image/jpeg,image/png, image/gif" style="width: 50%"/>
                        <img src="<?php echo base_url() ?>public/uploads/admin/erickshawfactory/<?php echo $erickshaws[0]->brand_logo?$erickshaws[0]->brand_logo:'';?>" class="img-responsive" style="width: 5%">
                        <small class="required">Remove special character's in image name</small>
                        </div>
                        <div class="form-group">
                      <label class="control-label">Brand Banner  <a href="#" data-toggle="tooltip" title="Please select image for Brand Banner"><i class='glyphicon glyphicon-info-sign'></i></a></label>
                        <input type="file" name="userfile3" id="brandbanner" class="form-control" accept="image/jpg, image/jpeg,image/png, image/gif" style="width: 50%"/>
                        <img src="<?php echo base_url() ?>public/uploads/admin/erickshawfactory/<?php echo $erickshaws[0]->brand_banner?$erickshaws[0]->brand_banner:'';?>" class="img-responsive" style="width: 5%">
                        <small class="required">Remove special character's in image name</small>
                        </div>
                  <div class="form-group">
                      <label class="control-label">E Catalog <a href="#" data-toggle="tooltip" title="Please select pdf for E Catalog"><i class='glyphicon glyphicon-info-sign'></i></a></label>
                        <input type="file" name="userfile4" id="userfile4" class="form-control" accept="application/pdf"/>
                        <small class="required">Remove special character's in pdf name</small>
                        </div>
                       <div class="form-group">
                  <label class="control-label">Company Name</label>
                  <input type="text" name="company_name" id="company_name" class="form-control" value="<?php echo $erickshaws[0]->company_name?$erickshaws[0]->company_name:'';?>">
                                                

                </div>
                         <div class="form-group">
                                                    <label class="control-label">Address </label>
                                                    <textarea name="address" id="address" class="form-control"> <?php echo $erickshaws[0]->address?$erickshaws[0]->address:'';?></textarea>

                                                </div>
                       <div class="form-group">
                  <label class="control-label">City</label>
                  <input type="text" name="city" id="city" class="form-control" value="<?php echo $erickshaws[0]->city?$erickshaws[0]->city:'';?>">
                                                

                </div>
                      
                           <div class="form-group">
                                                    
                                                    <label class="control-label">State</label>
                                                   <select name="state_id" id="state_id" class="form-control" required="required">
                                                        <option value="">Select</option>
                                                                                                                 <?php
                                if (isset($states) && (count($states) > 0)) {

                                    foreach ($states as $state) {
                                        ?>

                                        <option value="<?php echo $state->state_id ? $state->state_id : ''; ?>" <?php if($state->state_id === $erickshaws[0]->state_id){ echo "selected";}?>><?php echo $state->state_name ? $state->state_name : ''; ?></option>
    <?php }
} ?>

                                  
                                                    </select>

                                                </div>
                       <div class="form-group">
                  <label class="control-label">Country</label>
                  <input type="text" name="country" id="country" class="form-control" value="<?php echo $erickshaws[0]->country?$erickshaws[0]->country:'';?>">
                                                

                </div>
                       <div class="form-group">
                  <label class="control-label">Contact Number</label>
                  <input type="text" name="contact_number" id="contact_number" class="form-control" value="<?php echo $erickshaws[0]->contact_number?$erickshaws[0]->contact_number:'';?>">
                                                

                </div>
                      <div class="form-group">
                  <label class="control-label">Website URL</label>
                  <input type="text" name="url" id="url" class="form-control" value="<?php echo $erickshaws[0]->url?$erickshaws[0]->url:'';?>">
                                                

                </div>
                   
                  </div>
<div class="form-actions modal-footer"> 
                        <input type="submit"  class="btn blue" name="update" value="Save"/>
                     
                    
                </div>
            </form>    
        </div>
    </div>


    <!-- tabs end-->

</div>



