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
            <div class="text-danger">
<?php echo validation_errors(); ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="portlet box blue">
                <div class="portlet-title">
                    <div class="caption"> <i class="fa fa-list"></i>SubMenu</div>
                    <div class="tools"> <a href="javascript:;" class="collapse"> </a> </div>
                </div>
                <div class="portlet-body">
                    <div class="table-toolbar"> </div>

                    <table id="table" class="table table-striped table-hover table-bordered display" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                 <th> Main Menu</th>
                                <th> Sub Menu</th>
                               <th>URL</th>
                               <th>Order</th>
                              
                               <th class="not-export-col">&nbsp;&nbsp;Action&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>

                            </tr>
                        </thead>
                        <tbody>
                        </tbody>


                    </table>

                </div>
                <form action="<?php echo base_url(); ?>admin/SubMenu/add" method="post" enctype="multipart/form-data" id="addproduct">
                    <div id="addNew" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-confirm">
                            <div class="modal-content">
                                <div class="modal-header"> <a type="button" class="close" data-dismiss="modal" aria-hidden="true"></a>
                                    <h4 class="modal-title">Add SubMenu item <button class="btn default" data-dismiss="modal" style="float: right;">Close</button></h4> 
                                </div>
                              
                                
                                <div class="modal-body">
 <div class="text-danger">
<?php echo validation_errors(); ?>
            </div>
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-md-12">
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
                                                    <?php //echo $sku = $this->session->userdata('admin_data')['store_id'].strtoupper(uniqid()); ?>
                                                    <label class="control-label">Name <span class="required"> * </span></label>
                                                    <input type="text" name="name" id="name" required class="form-control" value="<?php echo set_value('name'); ?>"/>

                                                </div>
                                                    <div class="form-group">
                                                    <?php //echo $sku = $this->session->userdata('admin_data')['store_id'].strtoupper(uniqid()); ?>
                                                    <label class="control-label">URI </label>
                                                    <input type="text" name="url" id="url" class="form-control" />

                                                </div>
                                                    <div class="form-group">
                                                    
                                                    <label class="control-label">Open URL In New Page </label>
                                                   <select name="open_link_in_newpage" id="open_link_in_newpage" class="form-control">
                                                        <option value="0">No</option>
                                                        <option value="1">Yes</option>
                                                                                                                 
                                                    </select>

                                                </div>
                                                 <div class="form-group">
                                                    <?php //echo $sku = $this->session->userdata('admin_data')['store_id'].strtoupper(uniqid()); ?>
                                                    <label class="control-label">Order </label>
                                                    <input type="text" name="menuorder" id="menuorder" class="form-control" />

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
            $('body').on('click', '.operation', function () {
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
                url: "<?= base_url(); ?>admin/SubMenu/eventOnContlr",
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