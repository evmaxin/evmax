<?php // echo count($categories);echo"<pre>";print_r($categories);exit; ?>
<style>
    .marginleft{
        margin: 0px 7px;
    }
    
</style>
<div class="page-content">
    <div class="row">
        <div class="col-md-12 padding-bottom-20">

            <div class="btn-group col-md-4"> <a id="" class="btn green" data-target="#addNew" data-toggle="modal" > Add New <i class="fa fa-plus"></i> </a> </div>



        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="portlet box blue">
                <div class="portlet-title">
                    <div class="caption"> <i class="fa fa-list"></i>Battery Banks</div>
                    <div class="tools"> <a href="javascript:;" class="collapse"> </a> </div>
                </div>
                <div class="portlet-body">
                    <div class="table-toolbar"> </div>

                    <table id="table" class="table table-striped table-hover table-bordered display" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Latitude </th>
                                <th>Longitude </th>
                                <th>Merchant name</th>
                                 <!--<th>Sub Cat. name</th>-->
                                <th>MRP</th>
                                <th>Selling Price</th>
                                 <th>Make</th>
                                <th>Model</th>
                                <th>Variant</th>
                                <th>Manufacture year</th>
                            
                                <th>Valid From</th>
                                <th>Valid To</th>
                                <th>Commission(In INR)</th>
                                <th>discount(In INR)</th>
                                <th>Address</th>
                              
                              <!--  <th class="not-export-col">&nbsp;&nbsp;Action&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>-->

                            </tr>
                        </thead>
                        <tbody>
                        </tbody>


                    </table>

                </div>
                <form action="<?php echo base_url(); ?>admin/BatteryBanks/add" method="post" enctype="multipart/form-data" id="addproduct">
                    <div id="addNew" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-confirm">
                            <div class="modal-content " style="height: 800px;overflow: scroll;">
                                <div class="modal-header"> <a type="button" class="close" data-dismiss="modal" aria-hidden="true"></a>
                                    <h4 class="modal-title">Add Battery bank <button class="btn default" data-dismiss="modal" style="float: right;">Close</button></h4> 
                                </div>
                               
                                
                                <div class="modal-body">

                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                 <fieldset>
    <legend align="left">Geo Location Details</legend>
                                                <div class="form-group col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                                    <label class="control-label">Latitude <span class="required"> * </span></label>
                                                    <input type="text" name="lat" id="lat" class="form-control" required pattern="[0-9]+([\.,][0-9]+)?"/>

                                                </div>
             
    <div class="form-group col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                                    <label class="control-label">Longitude <span class="required"> * </span></label>
                                                    <input type="text" name="lang" id="lang" class="form-control" required pattern="[0-9]+([\.,][0-9]+)?"/>

                                                </div>
  
     <div class="form-group">
                                                    <label class="control-label">Address <span class="required"> * </span></label>
                                                    <textarea name="address" id="address" required class="form-control"></textarea>

                                                </div>

    
    </fieldset> 
                                                <fieldset>
    <legend align="left">Basic Information</legend>
                                                <div class="form-group">
                                                    <?php //echo $sku = $this->session->userdata('admin_data')['store_id'].strtoupper(uniqid()); ?>
                                                    <label class="control-label">Grid Name <span class="required"> * </span></label>
                                                    <input type="text" name="name" id="name" required class="form-control" />

                                                </div>
 <div class="form-group">
                                                    <label class="control-label">Category <span class="required"> * </span></label>


                                                    <select name="category" id="category" class="form-control" required="required">
                                                        <option value="">Select</option>
                                                        <?php foreach ($categories as $category){ ?>
                                                         <option value="<?php echo $category->category_id; ?>">  <?php echo $category->category_name; ?>    </option>
                                                                          <?php } ?>

                                                    </select>




                                                </div>
     <div class="form-group">
         <select id="subCategories" name="subCategories" class="form-control"></select>
        </div>
                                                <div class="form-group">
                                                    <label class="control-label">Make</label>
                                                    <select name="make" id="make" class="form-control">
                                                        <option value="">Select</option>
                                                          <?php if(isset($getMakes) &&(count($getMakes)>0)){
                                                              foreach ($getMakes as $make){ ?>
                                                         <option class="" value="<?php echo $make->m_registration_id; ?>">  <?php echo $make->company_name; ?>    </option>
                                                          <?php } } ?>
                                        


                                                    </select>




                                                </div>
     <div class="form-group">
                                                    <label class="control-label">Model </label>
                                                    <select name="model" id="model" class="form-control">
                                                        <option value="">Select</option>
                                                     </select>




                                                </div>
                                              
                                                   <div class="form-group">
                                                    <label class="control-label">Variant </label>
                                                    <select name="variant" id="variant" class="form-control">
                                                     <option value="">Select</option>
                                                    </select>




                                                </div>
                                                   <div class="form-group">
                                                    <label class="control-label">Manufacturing Year</label>
                                                    <select name="manufacture_year" id="manufacture_year" class="form-control">
                                                          <?php if(isset($manufacture_years) &&(count($manufacture_years)>0)){
                                                              foreach ($manufacture_years as $my){ ?>
                                                         <option class="" value="<?php echo $my->manufacture_year_id; ?>">  <?php echo $my->manufacture_year; ?>    </option>
                                                          <?php } } ?>


                                                    </select>




                                                </div>
                                                      <div class="form-group col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                                    <label class="control-label">Valid From Date</label>
                                                    <input type="text" name="valid_from" id="valid_from" class="form-control" />

                                                </div>
    <div class="form-group col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                                    <label class="control-label">Valid To</label>
                                                    <input type="text" name="valid_to" id="valid_to" class="form-control" />
                                                    

                                                </div>
                                               

                                               
                                         
                                                 </fieldset> 
                                              
                                   
    <fieldset>
    <legend align="left">Price Details / Unit</legend>
                                                <div class="form-group">
                                                    <label class="control-label">Price <span class="required"> * </span></label>
                                                    <input type="text" name="actual_price" id="actual_price" required class="form-control" onkeypress="return isNumber(event)" />

                                                </div>
                                                <div class="form-group col-md-5 col-lg-5 col-sm-12 col-xs-12">
                                                     <label class="control-label">Discount(%)</label>
                                                     <input type="text" name="chDiscount" id="chDiscount" class="form-control" maxlength="2" placeholder="Discount in Percentage" onkeypress="return isNumber(event)" />
                                                   

                                                </div>
                                        <div class="form-group col-md-2 col-lg-2 col-sm-12 col-xs-12">
                                                     <label class="control-label">(OR)</label>
                                                    
                                                   

                                                </div>
                                                <div class="form-group col-md-5 col-lg-5 col-sm-12 col-xs-12">
                                                    <label class="control-label">Discount(Rs.)</label>
                                                    <input type="text" name="chDiscount1" id="chDiscount1" placeholder="Discount in Amount" class="form-control" onkeypress="return isNumber(event)" />

                                                </div>
                                                <div class="form-group">
                                                    <span id="disc_txt" style="color: red;"></span><br>
                                                    <label class="control-label">Selling price <span class="required"> * </span></label>
                                                    <input type="text" name="offer_price" id="offer_price" required class="form-control" readonly onkeypress="return isNumber(event)"/>

                                                </div>
    
    
      <div class="form-group col-md-5 col-lg-5 col-sm-12 col-xs-12">
                                                     <label class="control-label">Commission(%)</label>
                                                     <input type="text" name="chDiscount21" id="chDiscount21" class="form-control" maxlength="2" placeholder="Commission in Percentage" onkeypress="return isNumber(event)" />
                                                   

                                                </div>
                                        <div class="form-group col-md-2 col-lg-2 col-sm-12 col-xs-12">
                                                     <label class="control-label">(OR)</label>
                                                    
                                                   

                                                </div>
                                                <div class="form-group col-md-5 col-lg-5 col-sm-12 col-xs-12">
                                                    <label class="control-label">Commission(Rs.)</label>
                                                    <input type="text" name="chDiscount11" id="chDiscount11" placeholder="Commission in Amount" class="form-control" onkeypress="return isNumber(event)" />

                                                </div>
                                                <div class="form-group">
                                                    <span id="comm_txt" style="color: red;"></span><br>
                                                    <label class="control-label">Commission Amount </label>
                                                    <input type="text" name="commission" id="commission" class="form-control" readonly onkeypress="return isNumber(event)"/>

                                                </div>
                                       
                                                </fieldset>
    
                                                 

                                       
                                         
                                                <div class="form-group">
                                                    <label class="control-label">Special Instructions  <span class="required"> * </span></label>
                                                    <textarea name="full_description" id="full_description" required class="form-control"></textarea>

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
            alert('Product Not Deleted');
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
