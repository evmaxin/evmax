<?php // echo count($categories);echo"<pre>";print_r($categories);exit; ?>
<style>
    .marginleft{
        margin: 0px 7px;
    }
    
</style>
<div class="page-content">
    <div class="row">
        <div class="col-md-12 padding-bottom-20">

            <div class="btn-group col-md-4"> <a id="" class="btn green" data-target="#addNew" data-toggle="modal" > Add <i class="fa fa-plus"></i> </a> </div>



        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="portlet box blue">
                <div class="portlet-title">
                    <div class="caption"> <i class="fa fa-list"></i>Delivery Locations</div>
                    <div class="tools"> <a href="javascript:;" class="collapse"> </a> </div>
                </div>
                <div class="portlet-body">
                    <div class="table-toolbar"> </div>

                    <table id="table" class="table table-striped table-hover table-bordered display" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Company Name</th>
                                <th>Latitude </th>
                                <th>Longitude </th>
                                <th>Contact Person name</th>
                                 <!--<th>Sub Cat. name</th>-->
                                <th>Mob</th>
                                <th>Email</th>
                                 <th>Plot/Flat</th>
                                 <th>Address1</th>
                                <th>Address2</th>
                                <th>City</th>
                                <th>State</th>
                            
                                <th>Pincode</th>
                                
                            
                              
                               <th class="not-export-col">&nbsp;&nbsp;Action&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>

                            </tr>
                        </thead>
                        <tbody>
                        </tbody>


                    </table>

                </div>
                <form action="<?php echo base_url(); ?>admin/DeliveryLocation/add" method="post" enctype="multipart/form-data" id="addproduct">
                    <div id="addNew" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-confirm">
                            <div class="modal-content " style="height: 800px;overflow: scroll;">
                                <div class="modal-header"> <a type="button" class="close" data-dismiss="modal" aria-hidden="true"></a>
                                    <h4 class="modal-title">Add Delivery Locations <button class="btn default" data-dismiss="modal" style="float: right;">Close</button></h4> 
                                </div>
                               
                                
                                <div class="modal-body">

                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <?php //echo $sku = $this->session->userdata('admin_data')['store_id'].strtoupper(uniqid()); ?>
                                                    <label class="control-label">Company Name <span class="required"> * </span></label>
                                                    <input type="text" name="company_name" id="company_name" required class="form-control" />

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
                                                <div class="form-group col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                                    <label class="control-label">Latitude <span class="required"> * </span></label>
                                                    <input type="text" name="lat" id="lat" class="form-control" required />

                                                </div>
             
    <div class="form-group col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                                    <label class="control-label">Longitude <span class="required"> * </span></label>
                                                    <input type="text" name="lang" id="lang" class="form-control" required />

                                                </div>
  
   <div class="form-group">
                                                    
                                                    <label class="control-label">Plot / Flat <span class="required"> * </span></label>
                                                    <input type="text" name="plot_flat" id="plot_flat" required class="form-control" />

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
                                                    
                                                    <label class="control-label">Pincode <span class="required"> * </span></label>
                                                    <input type="text" name="pincode" id="pincode" required class="form-control" onkeypress="return isNumber(event)" minlength="6" maxlength="6"/>

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
                url: "<?= base_url(); ?>admin/Ajax/eventOnProduct",
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
            alert('ChargingStation Not Deactivated');
        }
    });
      $('body').on('change', '#category', function () {
        //var cat_id = $(this).data('id');
		
        var cat_id = $("#category option:selected").val();
		//alert(cat_id);
           $.ajax({
                type: "POST",
                url: "<?= base_url(); ?>admin/Ajax/getSubCategories",
                data: {'cat_id': cat_id},
                success: function (response) {

                    if (response) {
                     $('#subCategories').html(response); 
                    } else {
$('#subCategories').html('<option value=""></option>');
                    }
                }
            });
     
    });
	
	   $('body').on('change', '#make', function () {
        //var cat_id = $(this).data('id');
		
        var value = $("#make option:selected").val();
	if(value){
           $.ajax({
                type: "POST",
                url: "<?= base_url(); ?>admin/Ajax/getDependecies",
                data: {'value': value},
                success: function (response) {

                    if (response) {
                     $('#model').html(response); 
                    } else {
$('#model').html('<option value=""></option>');
                    }
                }
            });
            }else{
            $('#model').html('<option value="">Select Make first</option>');
            }
     
    });
       $('body').on('change', '#model', function () {
        //var cat_id = $(this).data('id');
		
        var value = $("#model option:selected").val();
		//alert(value);
                if(value){
           $.ajax({
                type: "POST",
                url: "<?= base_url(); ?>admin/Ajax/getVarientDependecies",
                data: {'value': value},
                success: function (response) {
//console.log(response);
                    if (response) {
                     $('#variant').html(response); 
                    } else {
                        $('#variant').html('<option value=""></option>');
                    }
                }
            });
            }else{
            $('#variant').html('<option value="">Select Model first</option>');
            }
     
    });

    $(document).ready(function () {
         $( "#valid_to,#valid_from").datepicker();
	  $('#valid_to,#valid_from').datepicker( "option", "dateFormat","yy-mm-dd");
	  
	  
        $.ajax({
            type: "POST",
            url: "<?= base_url(); ?>admin/Ajax/getAllAttributes",
            data: {'categorytype_id': 1},
            success: function (response) {
                //alert(response);
                if (response) {
                    $('#custom_attributes').html(response);
                } else {
                    $('#custom_attributes').html("<option value=''>--Select--</option>");
                }
            }
        });
    });

   


</script>
<script type="text/javascript">
$(document).on("change keyup blur", "#chDiscount", function() {
    $('#chDiscount1').val('');
  var main = $('#actual_price').val();
  var disc = $('#chDiscount').val();
  var dec = (disc/100).toFixed(2); //its convert 10 into 0.10
 var mult = main*dec; // gives the value for subtract from main value
 var discont = main-mult;
 $('#offer_price').val(discont);
   
 
});
$(document).on("change keyup blur", "#chDiscount21", function() {
    $('#chDiscount11').val('');
  var main = $('#offer_price').val();
  var disc = $('#chDiscount21').val();
  var dec = (disc/100).toFixed(2); //its convert 10 into 0.10
 var mult = main*dec; // gives the value for subtract from main value
 var discont = mult;
 $('#commission').val(discont);
   
 
});
$(document).on("change keyup blur", "#chDiscount1", function() {
    $('#chDiscount').val('');
  var amd = $('#actual_price').val();
  var disc = $('#chDiscount1').val();
  if (disc != '' && amd != '') {
    $('#offer_price').val((parseInt(amd)) - (parseInt(disc)));
  }else{
    $('#offer_price').val(parseInt(amd));
  }
  if(parseInt(disc) >= parseInt(amd))
  {
      $("#disc_txt").text("Discount amount should be lessthan MRP");
      //alert("Discount amount should be lessthan MRP");
      $('#chDiscount1').val("");
  }else{
      $("#disc_txt").text("");
  }
  
});

$(document).on("change keyup blur", "#chDiscount11", function() {
    $('#chDiscount21').val('');
  var amd = $('#offer_price').val();
  var disc = $('#chDiscount11').val();
  if (disc != '' && amd != '') {
    $('#commission').val(parseInt(disc));
  }else{
    $('#commission').val(parseInt(amd));
  }
  if(parseInt(disc) >= parseInt(amd))
  {
      $("#comm_txt").text("Commission amount should be lessthan Selling Price");
    //alert("commission amount should be lessthan Selling Price");
      //$('#chDiscount21').val("");
      //$("#comm_txt").text("");
  }else{
    $("#comm_txt").text("");  
  }
  
});
$(document).on("change keyup blur", "#actual_price", function() {
    $('#offer_price').val('');
    $('#chDiscount').val('');
    $('#chDiscount1').val('');
    $('#chDiscount21').val('');
    $('#chDiscount11').val('');
    $('#commission').val('');
  });
</script>
<script type="text/javascript">

    function checkChecked(formname) {
        var anyBoxesChecked = false;
        $('#' + formname + ' input[type="checkbox"]').each(function () {
            if ($(this).is(":checked")) {
                anyBoxesChecked = true;
            }
        });

        if (anyBoxesChecked == false) {
            alert('Please select at least one Attribute like Size,Color etc..');
            return false;
        }
    }
    $('#add').click(function () {
    var table = $(this).closest('table');
    if (table.find('input:text').length < 7) {
        table.append('<tr><td style="width:200px;" align="right">Name <td> <input type="text" id="current Name" value="" /> </td></tr>');
    }
});
$('#del').click(function () {
    var table = $(this).closest('table');
    if (table.find('input:text').length > 1) {
        table.find('input:text').last().closest('tr').remove();
    }
});
</script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
