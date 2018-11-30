<?php // echo count($categories);echo"<pre>";print_r($categories);exit; ?>
<style>
    .marginleft{
        margin: 0px 7px;
    }
    #autoUpdate{
        display: none;
    }
    .modal-dialog-confirm{
        width: 1050px;
    }
    .show1{
        display: none;
    }
    .show2{
        display: none;
    }
</style>
<div class="page-content">
    <div class="row">
        <div class="col-md-12 padding-bottom-20">
            <?php if($this->uri->segment('3') != "requestedForDeactivation") {?>
            <div class="btn-group col-md-4"> <a id="" class="btn green" data-target="#addNew" data-toggle="modal" > Add New <i class="fa fa-plus"></i> </a> </div>

            <?php } ?>

        </div>
            <div class="text-danger">
<?php echo validation_errors(); ?>
            </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="portlet box blue">
                <div class="portlet-title">
                    <div class="caption"> <i class="fa fa-list"></i>Products</div>
                    <div class="tools"> <a href="javascript:;" class="collapse"> </a> </div>
                </div>
                <div class="portlet-body">
                    <div class="table-toolbar"> </div>

                    <table id="table" class="table table-striped table-hover table-bordered display" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Merchant name</th>
                                 <!--<th>Sub Cat. name</th>-->
                                <th>MRP</th>
                                <th>Selling Price</th>
                                <th>Quantity</th>
                                <th>Status</th>
                                <th>Make</th>
                                <th>Model</th>
                                <th>Variant</th>
                                <th>Manufacture year</th>
                                <th>Need registration</th>
                                <th>Need driving license</th>
                                <th>Valid From</th>
                                <th>Valid To</th>
                                <th>Commission(In INR)</th>
                                <th>Speed</th>
                                <th>Range</th>
                                <th>Motor output</th>
                                <th>Battery type</th>
                                 <th>Wheel diameter</th>
                                 <th>Special offer text</th>
                                  <th>Offer from date</th>
                                 <th>Offer to date</th>
                                 <th>Exchange benefit</th>
                                 <th>Exchange note</th>
                                  <th>Exchange from date</th>
                                 <th>Exchange to date</th>
                                
                                 <th>Delivery Charges</th>
                                
                                 <th>Voltage</th>
                                 <th>Warranty</th>
                                 <th>Am</th>
                                <th class="not-export-col">&nbsp;&nbsp;Action&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>

                            </tr>
                        </thead>
                        <tbody>
                        </tbody>


                    </table>

                </div>
                <form action="<?php echo base_url(); ?>admin/Product/add" method="post" enctype="multipart/form-data" id="addproduct">
                    <div id="addNew" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
                     
                        <div class="modal-dialog modal-dialog-confirm">
                            <div class="modal-content " style="height: 800px;overflow: scroll;">
                                <div class="modal-header"> <a type="button" class="close" data-dismiss="modal" aria-hidden="true"></a>
                                    <h4 class="modal-title">Add Product <button class="btn default" data-dismiss="modal" style="float: right;">Close</button></h4> 
                                </div>
                               
                                
                                <div class="modal-body">

                                    <div class="form-body">
                                           <?php echo validation_errors(); ?>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="col-md-6">
                                                <fieldset>
    <legend align="left">Basic Information</legend>
                                                <div class="form-group">
                                                    <?php //echo $sku = $this->session->userdata('admin_data')['store_id'].strtoupper(uniqid()); ?>
                                                    <label class="control-label">Product Name <span class="required"> * </span></label>
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
         <label class="control-label">Sub Category </label>
         <select id="subCategories" name="subCategories" class="form-control"></select>
        </div>
    <div class="form-group">
         <label class="control-label">Brand </label>
         <select id="brand_id" name="brand_id" class="form-control"></select>
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
         <div class="form-group">
                                                    <div id="custom_attributes">
                                                    </div>
                                                    <div class="form-group">
                                                    <label class="control-label"><b>Inventory </b><span class="required"> * </span></label>
                                                    <input type="text" name="inventory" id="inventory" required class="form-control" onkeypress="return isNumber(event)"/>

                                                </div>
                                                 
                                                    <!-- Dynamic Attributes values appended to this ID using ajax -->





                                                </div>
                                                <input type="hidden" id="category_type_id" name="category_type_id" value="1"><!-- Here 1 means fashion,  Manually entering the category type, need to enable below code if we need mulitple category types like fashion,footwear -->
                                                <!-- <div class="form-group">
                                                   <label class="control-label">Category Type <span class="required"> * </span></label>
                    <select class="form-control" name="category_type_id" id="category_type_id" required="required">
                 <option value="">Select</option>
                                                <?php //foreach($categorytypes as $type):?>
                 <option value="<?php //echo $type->category_type_id;  ?>"><?php // echo $type->category_type; ?></option>
                                                <?php //endforeach;?>
                 </select>
                                                   
                                               </div> -->

                                               
                                                
                                                
                                                            <!--                   <div class="form-group">
                                                               <label class="control-label">Promocode </label>
                                                    <input type="text" name="promocode" id="promocode" required class="form-control" />

                                                </div>
                                                
                                                   <div class="form-group col-md-5 col-lg-5 col-sm-12 col-xs-12">
                                                     <input type="button" id="add" value="Add" />
                                                   

                                                </div>
                                        <div class="form-group col-md-2 col-lg-2 col-sm-12 col-xs-12">
                                                     
                                                    
                                                   

                                                </div>
                                                <div class="form-group col-md-5 col-lg-5 col-sm-12 col-xs-12">
                                                     <input type="button" id="del" value="Del" />

                                                </div>-->
                                                 </fieldset> 
                                              
                                           
    <fieldset>
    <legend align="left">Price Details</legend>
                                                <div class="form-group">
                                                    <label class="control-label">MRP <span class="required"> * </span></label>
                                                    <input type="text" name="actual_price" placeholder="10000" id="actual_price" required class="form-control" onkeypress="return isNumber(event)" />

                                                </div>
                                                <div class="form-group col-md-5 col-lg-5 col-sm-12 col-xs-12">
                                                     <label class="control-label">Discount(%)</label>
                                                     <input type="text" name="chDiscount" placeholder="10" id="chDiscount" class="form-control" maxlength="2" placeholder="Discount in Percentage" onkeypress="return isNumber(event)" />
                                                   

                                                </div>
                                        <div class="form-group col-md-2 col-lg-2 col-sm-12 col-xs-12">
                                                     <label class="control-label">(OR)</label>
                                                    
                                                   

                                                </div>
                                                <div class="form-group col-md-5 col-lg-5 col-sm-12 col-xs-12">
                                                    <label class="control-label">Discount(Rs.)</label>
                                                    <input type="text" name="chDiscount1" placeholder="1000" id="chDiscount1" placeholder="Discount in Amount" class="form-control" onkeypress="return isNumber(event)" />

                                                </div>
                                                <div class="form-group">
                                                    <span id="disc_txt" style="color: red;"></span><br>
                                                    <label class="control-label">Selling price <span class="required"> * </span></label>
                                                    <input type="text" name="offer_price" id="offer_price" required class="form-control" readonly onkeypress="return isNumber(event)"/>

                                                </div>
    
    
      <div class="form-group col-md-5 col-lg-5 col-sm-12 col-xs-12">
                                                     <label class="control-label">Commission(%)</label>
                                                     <input type="text" name="chDiscount21" placeholder="10" id="chDiscount21" class="form-control" maxlength="2" placeholder="Commission in Percentage" onkeypress="return isNumber(event)" />
                                                   

                                                </div>
                                        <div class="form-group col-md-2 col-lg-2 col-sm-12 col-xs-12">
                                                     <label class="control-label">(OR)</label>
                                                    
                                                   

                                                </div>
                                                <div class="form-group col-md-5 col-lg-5 col-sm-12 col-xs-12">
                                                    <label class="control-label">Commission(Rs.)</label>
                                                    <input type="text" name="chDiscount11" placeholder="1000" id="chDiscount11" placeholder="Commission in Amount" class="form-control" onkeypress="return isNumber(event)" />

                                                </div>
                                                <div class="form-group">
                                                    <span id="comm_txt" style="color: red;"></span><br>
                                                    <label class="control-label">Commission Amount </label>
                                                    <input type="text" name="commission" id="commission" class="form-control" readonly onkeypress="return isNumber(event)"/>

                                                </div>
    <div class="form-group col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                                    <span id=""></span>
                                                    <label class="control-label">GST Percentage<span class="required"> * </span><a href="#" data-toggle="tooltip" title="Ex:18"><span class="glyphicon glyphicon-info-sign"></span></a></label>
                                                    <input type="text" name="product_gst" id="product_gst" required maxlength="2" class="form-control" max="28" onkeypress="return isNumber(event)"/>

                                                </div>
    <div class="form-group col-md-5 col-lg-5 col-sm-12 col-xs-12">
                                                     <label class="control-label">CGST Percentage<span class="required"> * </span><a href="#" data-toggle="tooltip" title="Ex:9"><span class="glyphicon glyphicon-info-sign"></span></a></label>
                                                     <input type="text" name="product_cgst" id="product_cgst" required class="form-control" maxlength="4" max="14"  />
                                                   

                                                </div>
                                        <div class="form-group col-md-2 col-lg-2 col-sm-12 col-xs-12">
                                                     <label class="control-label"></label>
                                                    
                                                   

                                                </div>
                                                <div class="form-group col-md-5 col-lg-5 col-sm-12 col-xs-12">
                                                    <label class="control-label">SGST Percentage<span class="required"> * </span><a href="#" data-toggle="tooltip" title="Ex:9"><span class="glyphicon glyphicon-info-sign"></span></a></label>
                                                    <input type="text" name="product_sgst" maxlength="4" id="product_sgst" required class="form-control" max="14" />

                                                </div>
    </fieldset>
   
    </div>
                                                 <div class="col-md-6">
                                                 
                                                                              <fieldset>
    <legend align="left">Delivery Charges </legend>
                                                <div class="form-group col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                                    <label class="control-label"><b>Included</b></label>
                                                   
                    <input class="control-label delivery_charges" type="radio" name="delivery_charges" id="delivery_charges" value="1" required>

                                                </div>
      <div class="form-group col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                                    <label class="control-label"><b>Excluded</b></label>
                                                   
                    <input class="control-label delivery_charges" type="radio" name="delivery_charges" id="delivery_charges" value="2">

                                                </div>
    <div class="delivery_cost">
    <div class="form-group col-md-12 col-lg-12 col-sm-12 col-xs-12">
        <label class="control-label">Delivery Charges (Rs.)</label>
    <input type="text" name="delivery_cost" id="delivery_cost" class="form-control" onkeypress="return isNumber(event)"/>
    
    </div>
    <div class="form-group col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                                    <span id=""></span>
                                                    <label class="control-label">GST Percentage<a href="#" data-toggle="tooltip" title="Ex:18"><span class="glyphicon glyphicon-info-sign"></span></a></label>
                                                    <input type="text" name="shipping_gst" id="shipping_gst" maxlength="2" class="form-control" max="28" onkeypress="return isNumber(event)"/>

                                                </div>
    <div class="form-group col-md-5 col-lg-5 col-sm-12 col-xs-12">
                                                     <label class="control-label">CGST Percentage<a href="#" data-toggle="tooltip" title="Ex:9"><span class="glyphicon glyphicon-info-sign"></span></a></label>
                                                     <input type="text" name="shipping_cgst" id="shipping_cgst" class="form-control" maxlength="4" max="14"  />
                                                   

                                                </div>
                                        <div class="form-group col-md-2 col-lg-2 col-sm-12 col-xs-12">
                                                     <label class="control-label"></label>
                                                    
                                                   

                                                </div>
                                                <div class="form-group col-md-5 col-lg-5 col-sm-12 col-xs-12">
                                                    <label class="control-label">SGST Percentage<a href="#" data-toggle="tooltip" title="Ex:9"><span class="glyphicon glyphicon-info-sign"></span></a></label>
                                                    <input type="text" name="shipping_sgst" maxlength="4" id="shipping_sgst" class="form-control" max="14"/>

                                                </div>
                                                 </div>
             
    
    </fieldset>
                                                     <fieldset>
    <legend align="left">Handling Charges </legend>
                                               
      
    
    <div class="form-group col-md-12 col-lg-12 col-sm-12 col-xs-12">
        <label class="control-label">Handling Charges (Rs.)</label>
    <input type="text" name="handling_cost" id="handling_cost" class="form-control" onkeypress="return isNumber(event)"/>
    
    </div>
    <div class="form-group col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                                    <span id=""></span>
                                                    <label class="control-label">GST Percentage<a href="#" data-toggle="tooltip" title="Ex:18"><span class="glyphicon glyphicon-info-sign"></span></a></label>
                                                    <input type="text" name="handling_gst" id="handling_gst" maxlength="2" class="form-control" max="28" onkeypress="return isNumber(event)"/>

                                                </div>
    <div class="form-group col-md-5 col-lg-5 col-sm-12 col-xs-12">
                                                     <label class="control-label">CGST Percentage<a href="#" data-toggle="tooltip" title="Ex:9"><span class="glyphicon glyphicon-info-sign"></span></a></label>
                                                     <input type="text" name="handling_cgst" id="handling_cgst" class="form-control" maxlength="4" max="14"  />
                                                   

                                                </div>
                                        <div class="form-group col-md-2 col-lg-2 col-sm-12 col-xs-12">
                                                     <label class="control-label"></label>
                                                    
                                                   

                                                </div>
                                                <div class="form-group col-md-5 col-lg-5 col-sm-12 col-xs-12">
                                                    <label class="control-label">SGST Percentage<a href="#" data-toggle="tooltip" title="Ex:9"><span class="glyphicon glyphicon-info-sign"></span></a></label>
                                                    <input type="text" name="handling_sgst" maxlength="4" id="handling_sgst" class="form-control" max="14"/>

                                                </div>
                                                
             
    
    </fieldset>
                                                      <fieldset>
    <legend align="left">Offer</legend>
                                               <div class="form-group">
                                                   <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                    <label class="control-label"><b>Special Offer</b></label>
                                                   
                    <input class="control-label" type="checkbox" name="special_offer" id="special_offer" value="1">
                                                   </div>
                     <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                                                    <label class="control-label">Offer From Date</label>
                                                    <input type="text" name="offer_from_date" id="dt3" class="form-control" />

                                                </div>
    <div class="form-group col-md-4 col-lg-4 col-sm-12 col-xs-12">
                                                    <label class="control-label">Offer Valid To</label>
                                                    <input type="text" name="offer_to_date" id="dt4" class="form-control" />
                                                    

                                                </div>
 </div>
       <div class="form-group" id="autoUpdate">
                                                    <label class="control-label">Special Offer Notes </label>
                                                    <textarea name="special_offer_text" id="special_offer_text" class="form-control"></textarea>

                                                </div>
    <div class="form-group">
        <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                                                    <label class="control-label">Exchange Benefit(Rs.) </label>
                                                    <input type="text" name="exchange_benefit" id="exchange_benefit" class="form-control" placeholder="1000" onkeypress="return isNumber(event)" />
        </div>
 <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                                                    <label class="control-label">Exchange From Date</label>
                                                    <input type="text" name="exchange_from_date" id="dt5" class="form-control" />

                                                </div>
    <div class="form-group col-md-4 col-lg-4 col-sm-12 col-xs-12">
                                                    <label class="control-label">Exchange Valid To Date</label>
                                                    <input type="text" name="exchange_to_date" id="dt6" class="form-control" />
                                                    

                                                </div>
                                                </div>
    
    <div class="form-group col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                                    <label class="control-label">Exchange Note </label>
                                                    <input type="text" name="exchange_note" id="exchange_note" class="form-control" />

                                                </div>
                                                </fieldset>
                                                     <fieldset>
    <legend align="left"></legend>
<div class="form-group">
                                                  <label class="control-label">Product Images <span class="required"> * </span></label>
                                                  <input type="file" name="userfile[]" id="userfile" required multiple class="form-control"  accept="image/jpg, image/jpeg,image/png, image/gif"/>
                                                  <small class="required">Minimum width and Height are 400x500 and 700x700 are recommended,Remove special character's in image name </small>
                                              </div>
                                       
                                                 <div class="form-group col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                                    <label class="control-label">Valid From Date</label>
                                                    <input type="text" name="valid_from" id="dt1" class="form-control" />

                                                </div>
    <div class="form-group col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                                    <label class="control-label">Valid To</label>
                                                    <input type="text" name="valid_to" id="dt2" class="form-control" />
                                                    

                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label">Special Instructions  <span class="required"> * </span></label>
                                                    <textarea name="full_description" id="full_description" required class="form-control"></textarea>

                                                </div>
    </fieldset>
                                                      <fieldset>
    <legend align="left">Technical Specifications</legend>
                                                <div class="form-group col-md-6 col-lg-6 col-sm-12 col-xs-12 show1">
                                                    <label class="control-label">Speed</label>
                                                    <input type="text" name="speed" id="speed" class="form-control" />

                                                </div>
             
    <div class="form-group col-md-6 col-lg-6 col-sm-12 col-xs-12 show1">
                                                    <label class="control-label">Range</label>
                                                    <input type="text" name="range" id="range" class="form-control" />

                                                </div>
    <div class="form-group col-md-6 col-lg-6 col-sm-12 col-xs-12 show1">
                                                    <label class="control-label">Required Registration? </label>
                                                    <select name="need_registration" id="need_registration" class="form-control" >
                                                        <option value="0">No</option>
                                                        <option value="1">Yes</option>


                                                    </select>




                                                </div>
                                                          <div class="form-group col-md-6 col-lg-6 col-sm-12 col-xs-12 show1">
                                                    <label class="control-label">Required Driving License?</label>
                                                    <select name="need_driving_license" id="need_driving_license" class="form-control" >
                                                        <option value="0">No</option>
                                                        <option value="1">Yes</option>


                                                    </select>




                                                </div>
     
    <div class="form-group col-md-6 col-lg-6 col-sm-12 col-xs-12 show1">
                                                    <label class="control-label">Motor Output</label>
                                                    <input type="text" name="motor_output" id="motor_output" class="form-control" />

                                                </div>
    
    <div class="form-group col-md-6 col-lg-6 col-sm-12 col-xs-12 show2">
                                                    <label class="control-label">Am</label>
                                                    <input type="text" name="am" id="am" class="form-control" />

                                                </div>
    <div class="form-group col-md-6 col-lg-6 col-sm-12 col-xs-12 show2">
                                                    <label class="control-label">Warranty</label>
                                                    <input type="text" name="warranty" id="warranty" class="form-control" />

                                                </div>
      <div class="form-group col-md-6 col-lg-6 col-sm-12 col-xs-12 show2">
                                                    <label class="control-label">Voltage</label>
                                                    <input type="text" name="voltage" id="voltage" class="form-control" />

                                                </div>
    <div class="form-group col-md-6 col-lg-6 col-sm-12 col-xs-12 show1 show2">
                                                    <label class="control-label">Battery Type</label>
                                                    <input type="text" name="batterytype" id="batterytype" class="form-control" />

                                                </div>
      <div class="form-group col-md-6 col-lg-6 col-sm-12 col-xs-12 show1">
                                                    <label class="control-label">Wheel Diameter</label>
                                                    <input type="text" name="wheeldiameter" id="wheeldiameter" class="form-control"/>

                                                </div>
    <div class="form-group col-md-6 col-lg-6 col-sm-12 col-xs-12 show1">
                                                    <label class="control-label">Range</label>
                                                    <input type="text" name="range" id="range" class="form-control" />

                                                </div>
     
   
    
    </fieldset> 
                                                       <div class="form-group">
                                                     <input type="submit"  class="btn blue" name="add" id="add" value="submit"/>
                                    <button class="btn default" data-dismiss="modal">Close</button>
                                                       </div>
                                            </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                               <!-- <div class="form-actions modal-footer"> 
                                    

                                </div>-->
                            </div>
                        </div>
                    </div>
                </form>
                <!--<?php
                                                        // foreach ($totaldata as $value) { 
                                                        //print_r($value);
                                                        ?>
                    <div aria-hidden="true" role="delete" tabindex="-1" id="delete<?php //echo $value['attribute_type_id']; ?>" class="modal fade" style="display: none;">
                      <div class="modal-dialog modal-dialog-confirm">
                        <div class="modal-content">
                          <div class="modal-body"> Are you sure you want to delete <b><?php //echo $value['attribute_type']; ?></b> !!</div>
                          <div class="modal-footer">
                            <input class="btn blue" type="button" value="Yes" data-id="<?php // echo $value['attribute_type_id']; ?>" id="btnYes" name="btnYes">
                            <input data-dismiss="modal" class="btn default" type="button" value="Cancel" id="cancel" name="cancel">
                          </div>
                        </div>
                      </div>
                    </div>
<?php // }  ?> -->
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
            alert('You are canceled the operation');
        }
    });
      $('body').on('change', '#category', function () {
        //var cat_id = $(this).data('id');
		
        var cat_id = $("#category option:selected").val();
       // alert(cat_id);
      
        if(cat_id === "4" )
        {
            $(".show1").hide();
            $(".show2").show();
        }
        else{
           $(".show1").show();
            $(".show2").hide();
        }
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
            $.ajax({
                type: "POST",
                url: "<?= base_url(); ?>admin/Ajax/getBrands",
                data: {'cat_id': cat_id},
                success: function (response) {
        //alert(response);
                    if (response) {
                     $('#brand_id').html(response);
                     
                    } else {
        $('#brand_id').html('<option value=""></option>');
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
                     var value1 = $("#model option:selected").val();
                        $.ajax({
                type: "POST",
                url: "<?= base_url(); ?>admin/Ajax/getVarientDependecies",
                data: {'value': value1},
                success: function (response) {
//console.log(response);
                    if (response) {
                     $('#variant').html(response); 
                    } else {
                        $('#variant').html('<option value=""></option>');
                    }
                }
            });
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
    
    $("#dt1").datepicker({
        dateFormat: "yy-mm-dd",
        minDate: 0,
        onSelect: function (date) {
            var dt2 = $('#dt2');
            var startDate = $(this).datepicker('getDate');
            var minDate = $(this).datepicker('getDate');
            dt2.datepicker('setDate', minDate);
            startDate.setDate(startDate.getDate() + 10000);
            //sets dt2 maxDate to the last day of 10000 days window
            dt2.datepicker('option', 'maxDate', startDate);
            dt2.datepicker('option', 'minDate', minDate);
            $(this).datepicker('option', 'minDate', minDate);
        }
    });
    $('#dt2').datepicker({
        dateFormat: "yy-mm-dd"
    });
    $("#dt3").datepicker({
        dateFormat: "yy-mm-dd",
        minDate: 0,
        onSelect: function (date) {
            var dt4 = $('#dt4');
            var startDate = $(this).datepicker('getDate');
            var minDate = $(this).datepicker('getDate');
            dt4.datepicker('setDate', minDate);
            startDate.setDate(startDate.getDate() + 10000);
            //sets dt2 maxDate to the last day of 10000 days window
            dt4.datepicker('option', 'maxDate', startDate);
            dt4.datepicker('option', 'minDate', minDate);
            $(this).datepicker('option', 'minDate', minDate);
        }
    });
    $('#dt4').datepicker({
        dateFormat: "yy-mm-dd"
    });
     $("#dt5").datepicker({
        dateFormat: "yy-mm-dd",
        minDate: 0,
        onSelect: function (date) {
            var dt6 = $('#dt6');
            var startDate = $(this).datepicker('getDate');
            var minDate = $(this).datepicker('getDate');
            dt6.datepicker('setDate', minDate);
            startDate.setDate(startDate.getDate() + 10000);
            //sets dt2 maxDate to the last day of 10000 days window
            dt6.datepicker('option', 'maxDate', startDate);
            dt6.datepicker('option', 'minDate', minDate);
            $(this).datepicker('option', 'minDate', minDate);
        }
    });
    $('#dt6').datepicker({
        dateFormat: "yy-mm-dd"
    });
         //$( "#valid_to,#valid_from").datepicker();
	//  $('#valid_to,#valid_from').datepicker( "option", "dateFormat","yy-mm-dd");
	  
	  
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

    /*    
     Manually given the category type is 1, need to enable below code if we need mulitple category types like fashion,footwear 
     $('#category_type_id').change(function(){
     var categorytype_id =$(this).val();
     $.ajax({
     type: "POST",
     url: "<?= base_url(); ?>admin/Ajax/getAllAttributes",   
     data: {'categorytype_id':categorytype_id},
     success: function (response) {
     //alert(response);
     if(response){
     $('#custom_attributes').html(response); 
     } else{
     $('#custom_attributes').html("<option value=''>--Select--</option>");  
     }
     }
     });
           
           
           
     });*/

    /*   $('#category').change(function(){
     var category_id =$(this).val();
     var category_type_id =$('#category_type_id').val();
     $.ajax({
     type: "POST",
     url: "<?= base_url(); ?>admin/Ajax/getAllAttributesByCategory",   
     data: {'category_id':category_id,'category_type_id':category_type_id},
     success: function (response) {
           
     if(response){
     $('#custom_attributes').html(response); 
     } else{
     $('#custom_attributes').html("<option value=''>--Select--</option>");  
     }
     }
     });
           
           
           
     }); */



</script>
<script>
    $("#hidden_catdiv").hide();
    $("#userfile").on("change", function () {
        if (this.files.length > 0) {

            $.each(this.files, function (index, value) {

                var finalsize = Math.round((value.size / 1024));
                if (finalsize > 2000)
                {
                    //alert(this.value.name);
                    alert("Image Size is more than 2 MB ,Please use below 2MB images for products");
                }
            });
        }
        if ($("#userfile")[0].files.length > 5) {

            alert("You can select only 5 images for product");
            location.reload();
        }

    });
    $("#category").on("change", function () {
        $("#hidden_catdiv").show();
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
$(document).on("change keyup blur", "#product_gst", function() {
    //$('#chDiscount1').val('');
  var product_gst = $('#product_gst').val();
  if(product_gst<29){
 // var disc = $('#chDiscount').val();
  var product_cgst = (product_gst/2);

 $('#product_cgst').val(product_cgst);
 $('#product_sgst').val(product_cgst);
  }else{
      alert("Max GST 28% Only");
      $('#product_gst').val("");
      $('#product_cgst').val("");
 $('#product_sgst').val("");
  }
 
});
$(document).on("change keyup blur", "#shipping_gst", function() {
    //$('#chDiscount1').val('');
  var shipping_gst = $('#shipping_gst').val();
  if(shipping_gst<29){
 // var disc = $('#chDiscount').val();
  var shipping_cgst = (shipping_gst/2);

 $('#shipping_cgst').val(shipping_cgst);
 $('#shipping_sgst').val(shipping_cgst);
  }else{
      alert("Max GST 28% Only");
      $('#shipping_gst').val("");
      $('#shipping_cgst').val("");
 $('#shipping_sgst').val("");
  }
 
});
$(document).on("change keyup blur", "#handling_gst", function() {
    //$('#chDiscount1').val('');
  var handling_gst = $('#handling_gst').val();
  if(handling_gst<29){
 // var disc = $('#chDiscount').val();
  var handling_cgst = (handling_gst/2);

 $('#handling_cgst').val(handling_cgst);
 $('#handling_sgst').val(handling_cgst);
  }else{
      alert("Max GST 28% Only");
      $('#handling_gst').val("");
      $('#handling_cgst').val("");
 $('#handling_sgst').val("");
  }
 
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
  var disc = $('#chDiscount1').val().toFixed();
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
 $('#special_offer').change(function () {
        if (!this.checked){ 
          $('#autoUpdate').fadeOut('fast');
       }
        else{
        $('#autoUpdate').fadeIn('fast');
             
         }
    });
      $(".delivery_cost").hide();
    $(".delivery_charges").click(function() {
        var test = $(this).val();
        //alert(test);
        if(test === '2'){
            $(".delivery_cost").show();
            
        }else{
           $(".delivery_cost").hide();
         }
        });
</script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
