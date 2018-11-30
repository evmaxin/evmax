<?php // echo count($categories);echo"<pre>";print_r($categories);exit; ?>
<style>
    .marginleft{
        margin: 0px 7px;
    }
    
</style>
<div class="page-content">
    <div class="row">
        <div class="col-md-12 padding-bottom-20">
 <?php //if($this->session->userdata('admin_data')['store_id'] !== '1'){ ?>
            <div class="btn-group col-md-4"> <a id="" class="btn green" data-target="#addNew" data-toggle="modal" > Add <i class="fa fa-plus"></i> </a> </div>
 <?php //} ?>


        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="portlet box blue">
                <div class="portlet-title">
                    <div class="caption"> <i class="fa fa-list"></i>Pickup Locations</div>
                    <div class="tools"> <a href="javascript:;" class="collapse"> </a> </div>
                </div>
                <div class="portlet-body">
                    <div class="table-toolbar"> </div>

                    <table id="table" class="table table-striped table-hover table-bordered display" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Pickup Loc. Name</th>
                               <th>Contact name</th>
                               <th>Mob</th>
                                <th>Email</th>
                                 <?php if($this->session->userdata('admin_data')['store_id'] === '1'){ ?>
                                 <th>Store Name</th>
                                 <?php }?>
                                <th>Address1</th>
                                <th>Address2</th>
                                <th>City</th>
                                <th>State</th>
                             <th>Country</th>
                                <th>Pincode</th>
                                
                            
                              
                               <th class="not-export-col">&nbsp;&nbsp;Action&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>

                            </tr>
                        </thead>
                        <tbody>
                        </tbody>


                    </table>

                </div>
                <form action="<?php echo base_url(); ?>admin/PickupLocation/add" method="post" enctype="multipart/form-data" id="addproduct">
                    <div id="addNew" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-confirm">
                            <div class="modal-content " style="height: 800px;overflow: scroll;">
                                <div class="modal-header"> <a type="button" class="close" data-dismiss="modal" aria-hidden="true"></a>
                                    <h4 class="modal-title">Add Pickup Locations <button class="btn default" data-dismiss="modal" style="float: right;">Close</button></h4> 
                                </div>
                               
                                
                                <div class="modal-body">

                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <?php //echo $sku = $this->session->userdata('admin_data')['store_id'].strtoupper(uniqid()); ?>
                                                    <label class="control-label">Pickup Loc. Name <span class="required"> * </span></label>
                                                    <input type="text" name="pickup_loc_name" id="pickup_loc_name" required class="form-control" />

                                                </div>
                                                    <div class="form-group">
                                                    <?php //echo $sku = $this->session->userdata('admin_data')['store_id'].strtoupper(uniqid()); ?>
                                                    <label class="control-label">Contact Person Name </label>
                                                    <input type="text" name="person_name" id="person_name" class="form-control" />

                                                </div>
                                                 <div class="form-group">
                                                    <?php //echo $sku = $this->session->userdata('admin_data')['store_id'].strtoupper(uniqid()); ?>
                                                    <label class="control-label">Phone <span class="required"> * </span></label>
                                                    <input type="text" name="cont_number" id="cont_number" required class="form-control" onkeypress="return isNumber(event)" maxlength="25"/>

                                                </div>
                                                 <div class="form-group">
                                                    <?php //echo $sku = $this->session->userdata('admin_data')['store_id'].strtoupper(uniqid()); ?>
                                                    <label class="control-label">Email <span class="required"> * </span></label>
                                                    <input type="text" name="cont_email" id="cont_email" required class="form-control" />

                                                </div>
                                           
                                                   <div class="form-group">
                                                    
                                                    <label class="control-label">Address1 <span class="required"> * </span></label>
                                                    <input type="text" name="address1" id="address1" required class="form-control" />

                                                </div>
                                                <div class="form-group">
                                                    
                                                    <label class="control-label">Address2 <span class="required"> * </span></label>
                                                    <input type="text" name="address2" id="address2" required class="form-control" />

                                                </div>
                                                 <div class="form-group">
                                                    
                                                    <label class="control-label">City <span class="required"> * </span></label>
                                                    <input type="text" name="city" id="city" required class="form-control"/>

                                                </div>
                                                <div class="form-group">
                                                    
                                                    <label class="control-label">State</label>
                                                   <select name="state" id="state" class="form-control" required="required">
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
                                                    
                                                    <label class="control-label">Country </label>
                                                    <input type="text" name="country" id="country"  class="form-control"/>

                                                </div>
                                                <div class="form-group">
                                                    
                                                    <label class="control-label">Pincode <span class="required"> * </span></label>
                                                    <input type="text" name="pincode" id="pincode" required class="form-control" minlength="6" maxlength="6" onkeypress="return isNumber(event)"/>

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
            $('body').on('click', '.product_id', function () {
        var id = $(this).data('id');
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
                url: "<?= base_url(); ?>admin/Ajax/eventOnContlr",
                data: {'id': id,'typeofAction': type},
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