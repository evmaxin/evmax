<?php
//echo "<pre>";print_r($products); exit;
?>
<style>
    .show1{
        /* display: none;*/
    }
    .show2{
        /*    display: none;*/
    }
</style>  
<div class="page-content">
    <a href="<?php echo base_url(); ?>admin/Product/">Back to products</a>
    <h1 class="page-title"> Products Edit</h1>

    <!-- END PAGE TITLE-->
    <!-- END PAGE HEADER-->
    <div class="row">
        <div class="col-md-12">

            <div class="portlet">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-shopping-cart"></i><?php echo ($products[0]->name) ? $products[0]->name : ''; ?> </div>

                </div>
                <div class="portlet-body">
                    <div class="tabbable-bordered">
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a href="#tab_1" data-toggle="tab"> General </a>
                            </li>

                            <li>
                                <a href="#tab_2" data-toggle="tab"> Images </a>
                            </li>
                            <li>
                                <a href="#tab_3" data-toggle="tab"> Meta Data </a>
                            </li>


                        </ul>
                        <div class="tab-content" style="width: 100%;">
                            <div class="tab-pane active" id="tab_1" style="">
                                <div class="form-body">
                                    <form action="<?php echo base_url(); ?>admin/Product/update/<?php echo ($products[0]->product_id) ? $products[0]->product_id : 0; ?>" method="post" enctype="multipart/form-data" id="addproduct" onsubmit="return checkChecked('addproduct');">

                                        <div class="form-group padding-bottom-40">
                                            <label class="col-md-2 control-label">Name:
                                                <span class="required"> * </span>
                                            </label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" name="name" id="name" value="<?php echo ($products[0]->name) ? $products[0]->name : ''; ?>" required readonly /> </div>
                                        </div>
                                        <div class="form-group padding-bottom-40">
                                            <label class="col-md-2 control-label">Valid From Date</label>
                                            <div class="col-md-10">
                                                <input type="text" name="valid_from" id="dt1" class="form-control" value="<?php echo ($products[0]->valid_from === '1970-01-01 00:00:00') ? '' : date("Y-m-d", strtotime($products[0]->valid_from)); ?>" />
                                            </div>
                                        </div>
                                        <div class="form-group padding-bottom-40">
                                            <label class="col-md-2 control-label">Valid To</label>
                                            <div class="col-md-10">
                                                <input type="text" name="valid_to" id="dt2" class="form-control" value="<?php echo ($products[0]->valid_to === '1970-01-01 00:00:00') ? '' : date("Y-m-d", strtotime($products[0]->valid_to)); ?>" />
                                            </div>

                                        </div>
                                        <div class="form-group padding-bottom-40">
                                            <label class="col-md-2 control-label">Category:
                                                <span class="required"> * </span>
                                            </label>
                                            <div class="col-md-10">
                                                <select name="category" id="category" class="form-control">


                                                    <?php foreach ($categories as $cat):
                                                        ?>


                                                        <option class="cat_level3" value="<?php echo $cat->category_id; ?>" <?php
                                                        if ($cat->category_id == $products[0]->category_id) {
                                                            echo "selected";
                                                        }
                                                        ?>>  <?php echo "<span class=''>------- </span>" . $cat->category_name; ?>    </option>




<?php endforeach; ?>

                                                </select>

                                            </div>
                                        </div>
                                        <!--<div class="form-group padding-bottom-40">
                                            <label class="control-label col-md-2">Sub Category </label>
                                            <div class="col-md-10">
                                                <select id="subCategories" name="subCategories" class="form-control"></select>
                                            </div>
                                        </div>
                                        <div class="form-group padding-bottom-40">
                                            <label class="col-md-2 control-label">Brand </label>
                                            <div class="col-md-10">
                                                <select id="brand_id" name="brand_id" class="form-control"></select>
                                            </div>
                                        </div>
                                        <div class="form-group padding-bottom-40">
                                            <label class="col-md-2 control-label">Make</label>
                                            <div class="col-md-10">
                                                <select name="make" id="make" class="form-control">
                                                    <option value="">Select</option>
                                        <?php
                                        if (isset($getMakes) && (count($getMakes) > 0)) {
                                            foreach ($getMakes as $make) {
                                                ?>
                                                                    <option class="" value="<?php echo $make->m_registration_id; ?>">  <?php echo $make->company_name; ?>    </option>
    <?php }
}
?>



                                                </select>


                                            </div>

                                        </div>
                                        <div class="form-group padding-bottom-40">
                                            <label class="col-md-2 control-label">Model </label>
                                            <div class="col-md-10">
                                                <select name="model" id="model" class="form-control">
                                                    <option value="">Select</option>
                                                </select>


                                            </div>

                                        </div>

                                        <div class="form-group padding-bottom-40">
                                            <label class="col-md-2 control-label">Variant </label>
                                            <div class="col-md-10">
                                                <select name="variant" id="variant" class="form-control">
                                                    <option value="">Select</option>
                                                </select>

                                            </div>


                                        </div>-->
                                        <div class="form-group padding-bottom-40">
                                            <label class="col-md-2 control-label">Manufacturing Year</label>
                                            <div class="col-md-10">
                                                <select name="manufacture_year" id="manufacture_year" class="form-control">
                                                    <?php
                                                    if (isset($manufacture_years) && (count($manufacture_years) > 0)) {
                                                        foreach ($manufacture_years as $my) {
                                                            ?>
                                                            <option class="" value="<?php echo $my->manufacture_year_id; ?>" <?php if ($my->manufacture_year_id == $products[0]->manufacture_year_id) {
                                                                echo "selected";
                                                            } ?>>  <?php echo $my->manufacture_year; ?>    </option>
    <?php }
}
?>


                                                </select>

                                            </div>


                                        </div>
                                        <div class="form-group padding-bottom-40">
                                            <label class="col-md-2 control-label">  Special Offer
                                            </label>
                                            <div class="col-md-10">
                                                <div class="col-md-2 col-lg-2 col-sm-12 col-xs-12">
                                                    <input class="control-label" type="checkbox" name="special_offer" id="special_offer" <?php
if ($products[0]->special_offer === '1') {
    echo 'checked';
}
?>>
                                                </div>
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                                                    <label class="control-label">Offer From Date</label>
                                                    <input type="text" name="offer_from_date" id="dt3" class="form-control" value="<?php echo ($products[0]->offer_from_date === '1970-01-01 00:00:00.000000') ? '' : date("Y-m-d", strtotime($products[0]->offer_from_date)); ?>"/>

                                                </div>
                                                <div class="form-group col-md-4 col-lg-4 col-sm-12 col-xs-12">
                                                    <label class="control-label">Offer Valid To</label>
                                                    <input type="text" name="offer_to_date" id="dt4" class="form-control" value="<?php echo ($products[0]->offer_to_date === '1970-01-01 00:00:00.000000') ? '' : date("Y-m-d", strtotime($products[0]->offer_to_date)); ?>"/>


                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group mb30">
                                            <label class="col-md-2 control-label">Special Offer Notes:

                                            </label>
                                            <div class="col-md-10 mb30">
                                                <textarea class="form-control" name="special_offer_text" id="special_offer_text"><?php echo ($products[0]->special_offer_text) ? $products[0]->special_offer_text : ''; ?></textarea>

                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                                                <label class="control-label">Exchange Benefit(Rs.) </label>
                                                <input type="text" name="exchange_benefit" id="exchange_benefit" class="form-control" placeholder="1000" onkeypress="return isNumber(event)" value="<?php echo ($products[0]->exchange_benefit) ? $products[0]->exchange_benefit : ''; ?>"/>
                                            </div>
                                            <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                                                <label class="control-label">Exchange From Date</label>
                                                <input type="text" name="exchange_from_date" id="dt5" class="form-control" value="<?php echo ($products[0]->exchange_from_date === '1970-01-01 00:00:00.000000') ? '' : date("Y-m-d", strtotime($products[0]->exchange_from_date)); ?>"/>

                                            </div>
                                            <div class="form-group col-md-4 col-lg-4 col-sm-12 col-xs-12">
                                                <label class="control-label">Exchange Valid To Date</label>
                                                <input type="text" name="exchange_to_date" id="dt6" class="form-control" value="<?php echo ($products[0]->exchange_to_date === '1970-01-01 00:00:00.000000') ? '' : date("Y-m-d", strtotime($products[0]->exchange_to_date)); ?>"/>


                                            </div>
                                        </div>

                                        <div class="form-group col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                            <label class="col-md-2 control-label">Exchange Note </label>
                                            <div class="col-md-10">
                                                <input type="text" name="exchange_note" id="exchange_note" class="form-control" value="<?php echo ($products[0]->exchange_note) ? $products[0]->exchange_note : ''; ?>"/>
                                            </div>
                                        </div>
                                        <div class="form-group mb30">  


                                            <?php
                                            $attributes_array = explode(",", $products[0]->attribute_id); //Getting all selected attributes for this product
                                            if (isset($attributes)) {

                                                foreach ($attributes as $attribute) {
                                                    ?>
                                                    <label class="col-md-2 control-label"><?php echo $attribute->attribute_type; ?>
                                                        <span class="required"> * </span>
                                                    </label>

                                                                            <?php $onepieces = explode(",", $attribute->name); ?>
                                                    <div class="col-md-10 mb30">
                                                        <div class="form-control height-auto">
                                                            <div class="scroller" style="" data-always-visible="1">
                                                                <ul class="list-unstyled">
                                                                    <li>

                                                                        <ul class="list-unstyled">
                                                                            <?php
                                                                            if (isset($onepieces)) {
                                                                                foreach ($onepieces as $nameNvalue) {
                                                                                    $pieces = explode("~", $nameNvalue);
                                                                                    ?>
                                                                                    <li>
                                                                                        <label><input type="checkbox" class="filter" <?php
                                                                                    if (in_array($pieces[1], $attributes_array)) {
                                                                                        echo "checked";
                                                                                    }
                                                                                    ?> id="<?php echo isset($pieces[1]) ? $pieces[1] : 0; ?>" value="<?php echo isset($pieces[1]) ? $pieces[1] : 0; ?>" name="<?php echo $attribute->attribute_type ? strtolower($attribute->attribute_type) : ''; ?>[]" > <?php echo isset($pieces[0]) ? $pieces[0] : 'No data'; ?>	</label>
                                                                                    </li>

                                                        <?php
                                                        }
                                                    }
                                                    ?>
                                                                        </ul>
                                                                    </li>


                                                                </ul>
                                                            </div>
                                                        </div>

                                                    </div>

    <?php
    }
}
?>
                                        </div>
                                        <legend align="left">Pricing Details </legend>

                                        <div class="form-group mb30">
                                            <label class="col-md-2 control-label">Actual price:
                                                <span class="required"> * </span>
                                            </label>
                                            <div class="col-md-10 mb30">
                                                <input type="text" class="form-control" name="actual_price" id="actual_price" value="<?php echo ($products[0]->actual_price) ? $products[0]->actual_price : ''; ?>" required/>
                                            </div>
                                            <div class="form-group col-md-2 col-lg-2 col-sm-12 col-xs-12">
                                            </div>
                                            <div class="form-group col-md-4 col-lg-4 col-sm-12 col-xs-12">
                                                <label class="control-label">Discount(%)</label>
                                                <input type="text" name="chDiscount" placeholder="10" id="chDiscount" class="form-control" maxlength="2" placeholder="Discount in Percentage" onkeypress="return isNumber(event)" />


                                            </div>
                                            <div class="form-group col-md-2 col-lg-2 col-sm-12 col-xs-12">
                                                <label class="control-label">(OR)</label>



                                            </div>
                                            <div class="form-group col-md-4 col-lg-4 col-sm-12 col-xs-12">
                                                <label class="control-label">Discount(Rs.)</label>
                                                <input type="text" name="chDiscount1" placeholder="1000" id="chDiscount1" placeholder="Discount in Amount" class="form-control" onkeypress="return isNumber(event)" />

                                            </div>
                                        </div>
                                        <div class="form-group mb30">
                                            <label class="col-md-2 control-label">Offer price
                                                <span class="required"> * </span>
                                            </label>
                                            <div class="col-md-10 mb30">
                                                <input type="text" class="form-control" name="offer_price" id="offer_price" value="<?php echo ($products[0]->offer_price) ? $products[0]->offer_price : ''; ?>" required/>
                                            </div>
                                            <div class="form-group col-md-2 col-lg-2 col-sm-12 col-xs-12">
                                            </div>
                                            <div class="form-group col-md-4 col-lg-4 col-sm-12 col-xs-12">
                                                <label class="control-label">Commission(%)</label>
                                                <input type="text" name="chDiscount21" placeholder="10" id="chDiscount21" class="form-control" maxlength="2" placeholder="Commission in Percentage" onkeypress="return isNumber(event)" />


                                            </div>
                                            <div class="form-group col-md-2 col-lg-2 col-sm-12 col-xs-12">
                                                <label class="control-label">(OR)</label>



                                            </div>
                                            <div class="form-group col-md-4 col-lg-4 col-sm-12 col-xs-12">
                                                <label class="control-label">Commission(Rs.)</label>
                                                <input type="text" name="chDiscount11" placeholder="1000" id="chDiscount11" placeholder="Commission in Amount" class="form-control" onkeypress="return isNumber(event)" />

                                            </div>
                                        </div>
                                        <div class="form-group mb30" >
                                            <label class="col-md-2 control-label" id="tab<?php echo $products[0]->product_id; ?>">Commission Amount 
                                                <span class="required"> * </span>
                                            </label>
                                            <div class="col-md-10 mb30">
                                                <input type="text" name="commission" id="commission" class="form-control" value="<?php echo ($products[0]->commission) ? $products[0]->commission : ''; ?>" readonly onkeypress="return isNumber(event)"/>


                                            </div>
                                        </div>
                                        <div class="form-group col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                            <span id=""></span>
                                            <label class="control-label">GST Percentage<span class="required"> * </span><a href="#" data-toggle="tooltip" title="Ex:18"><span class="glyphicon glyphicon-info-sign"></span></a></label>
                                            <input type="text" name="product_gst" id="product_gst" value="<?php echo ($products[0]->product_gst) ? $products[0]->product_gst: ''; ?>" required maxlength="2" class="form-control" max="28" value="<?php echo ($products[0]->commission) ? $products[0]->commission : ''; ?>"onkeypress="return isNumber(event)"/>

                                        </div>
                                        <div class="form-group col-md-5 col-lg-5 col-sm-12 col-xs-12">
                                            <label class="control-label">CGST Percentage<span class="required"> * </span><a href="#" data-toggle="tooltip" title="Ex:9"><span class="glyphicon glyphicon-info-sign"></span></a></label>
                                            <input type="text" name="product_cgst" id="product_cgst" value="<?php echo ($products[0]->product_cgst) ? $products[0]->product_cgst : ''; ?>" required class="form-control" maxlength="4" max="14"  />


                                        </div>
                                        <div class="form-group col-md-2 col-lg-2 col-sm-12 col-xs-12">
                                            <label class="control-label"></label>



                                        </div>
                                        <div class="form-group col-md-5 col-lg-5 col-sm-12 col-xs-12">
                                            <label class="control-label">SGST Percentage<span class="required"> * </span><a href="#" data-toggle="tooltip" title="Ex:9"><span class="glyphicon glyphicon-info-sign"></span></a></label>
                                            <input type="text" name="product_sgst" maxlength="4" id="product_sgst" value="<?php echo ($products[0]->product_sgst) ? $products[0]->product_sgst: ''; ?>" required class="form-control" max="14" />

                                        </div>

                                        <legend align="left">Delivery Charges </legend>
                                        <div class="form-group col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                            <label class="control-label"><b>Included</b></label>

                                            <input class="control-label delivery_charges" type="radio" <?php if($products[0]->delivery_charges === '1'){ echo 'checked';} ?> name="delivery_charges" id="delivery_charges" value="1" required>

                                        </div>
                                        <div class="form-group col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                            <label class="control-label"><b>Excluded</b></label>

                                            <input class="control-label delivery_charges" <?php if($products[0]->delivery_charges === '2'){ echo 'checked';} ?> type="radio" name="delivery_charges" id="delivery_charges" value="2">

                                        </div>
                                        <div class="delivery_cost">
                                            <div class="form-group col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                                <label class="control-label">Delivery Charges (Rs.)</label>
                                                <input type="text" name="delivery_cost" value="<?php echo ($products[0]->delivery_cost) ? $products[0]->delivery_cost: ''; ?>" id="delivery_cost" class="form-control" onkeypress="return isNumber(event)"/>

                                            </div>
                                            <div class="form-group col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                                <span id=""></span>
                                                <label class="control-label">GST Percentage<span class="required"> * </span><a href="#" data-toggle="tooltip" title="Ex:18"><span class="glyphicon glyphicon-info-sign"></span></a></label>
                                                <input type="text" name="shipping_gst" value="<?php echo ($products[0]->shipping_gst) ? $products[0]->shipping_gst: ''; ?>" id="shipping_gst" maxlength="2" class="form-control" max="28" onkeypress="return isNumber(event)"/>

                                            </div>
                                            <div class="form-group col-md-5 col-lg-5 col-sm-12 col-xs-12">
                                                <label class="control-label">CGST Percentage<span class="required"> * </span><a href="#" data-toggle="tooltip" title="Ex:9"><span class="glyphicon glyphicon-info-sign"></span></a></label>
                                                <input type="text" name="shipping_cgst" value="<?php echo ($products[0]->shipping_cgst) ? $products[0]->shipping_cgst: ''; ?>" id="shipping_cgst" class="form-control" maxlength="4" max="14"  />


                                            </div>
                                            <div class="form-group col-md-2 col-lg-2 col-sm-12 col-xs-12">
                                                <label class="control-label"></label>



                                            </div>
                                            <div class="form-group col-md-5 col-lg-5 col-sm-12 col-xs-12">
                                                <label class="control-label">SGST Percentage<span class="required"> * </span><a href="#" data-toggle="tooltip" title="Ex:9"><span class="glyphicon glyphicon-info-sign"></span></a></label>
                                                <input type="text" name="shipping_sgst" value="<?php echo ($products[0]->shipping_sgst) ? $products[0]->shipping_sgst: ''; ?>" maxlength="4" id="shipping_sgst" class="form-control" max="14"/>

                                            </div>
                                        </div>

                                        <legend align="left">Handling Charges </legend>



                                        <div class="form-group col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                            <label class="control-label">Handling Charges (Rs.)</label>
                                            <input type="text" name="handling_cost" value="<?php echo ($products[0]->handling_cost) ? $products[0]->handling_cost: ''; ?>" id="handling_cost"  class="form-control" onkeypress="return isNumber(event)"/>

                                        </div>
                                        <div class="form-group col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                            <span id=""></span>
                                            <label class="control-label">GST Percentage<span class="required"> * </span><a href="#" data-toggle="tooltip" title="Ex:18"><span class="glyphicon glyphicon-info-sign"></span></a></label>
                                            <input type="text" name="handling_gst" value="<?php echo ($products[0]->handling_gst) ? $products[0]->handling_gst: ''; ?>" id="handling_gst"  maxlength="2" class="form-control" max="28" onkeypress="return isNumber(event)"/>

                                        </div>
                                        <div class="form-group col-md-5 col-lg-5 col-sm-12 col-xs-12">
                                            <label class="control-label">CGST Percentage<span class="required"> * </span><a href="#" data-toggle="tooltip" title="Ex:9"><span class="glyphicon glyphicon-info-sign"></span></a></label>
                                            <input type="text" name="handling_cgst" value="<?php echo ($products[0]->handling_cgst) ? $products[0]->handling_cgst: ''; ?>" id="handling_cgst" class="form-control" maxlength="4" max="14"  />


                                        </div>
                                        <div class="form-group col-md-2 col-lg-2 col-sm-12 col-xs-12">
                                            <label class="control-label"></label>



                                        </div>
                                        <div class="form-group col-md-5 col-lg-5 col-sm-12 col-xs-12">
                                            <label class="control-label">SGST Percentage<span class="required"> * </span><a href="#" data-toggle="tooltip" title="Ex:9"><span class="glyphicon glyphicon-info-sign"></span></a></label>
                                            <input type="text" name="handling_sgst" value="<?php echo ($products[0]->handling_sgst) ? $products[0]->handling_sgst: ''; ?>" maxlength="4" id="handling_sgst" class="form-control" max="14"/>

                                        </div>


                                        <legend align="left">&nbsp;</legend>

                                        <?php if (isset($this->session->userdata('admin_data')['store_id']) && ($this->session->userdata('admin_data')['store_id'] == 1)) { ?>

                                            <div class="form-group col-md-12 col-lg-12 col-sm-12 col-xs-12" >
                                                <label class="control-label" id="">Coupon Value <a href="#" data-toggle="tooltip" title="Enter Coupon Value">
                                                        <span class="glyphicon glyphicon-info-sign"></span>
                                                    </a>

                                                </label>
                                                <div class="">
                                                    <input type="text" name="coupon_value" id="coupon_value" class="form-control" value="<?php echo ($products[0]->coupon_value) ? $products[0]->coupon_value : ''; ?>" max="<?php echo ($products[0]->offer_price) ? $products[0]->offer_price : ''; ?>" onkeypress="return isNumber(event)"/>


                                                </div>
                                            </div>
<?php } ?>
                                        <div class="form-group col-md-12 col-lg-12 col-sm-12 col-xs-12" >
                                            <label class="control-label" id="tab<?php echo$products[0]->product_id; ?>">Inventory
                                                <span class="required"> * </span>
                                            </label>
                                            <div class="">
                                                <input type="text" class="form-control" name="inventory" id="inventory" value="<?php echo ($products[0]->inventory) ? $products[0]->inventory : 0; ?>" required/>
                                            </div>
                                        </div>





                                        <div class="form-group col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                            <label class="control-label">Description:
                                                <span class="required"> * </span>
                                            </label>
                                            <div class="">
                                                <textarea class="form-control" name="full_description" id="full_description" required><?php echo ($products[0]->full_description) ? $products[0]->full_description : ''; ?></textarea>

                                            </div>
                                        </div>
                                        <legend align="left">&nbsp;</legend>
                                        <div class="form-group col-md-6 col-lg-6 col-sm-12 col-xs-12 show1">
                                            <label class="control-label">Speed</label>
                                            <input type="text" name="speed" id="speed" class="form-control" value="<?php echo ($products[0]->speed) ? $products[0]->speed : ''; ?>"/>

                                        </div>

                                        <div class="form-group col-md-6 col-lg-6 col-sm-12 col-xs-12 show1">
                                            <label class="control-label">Range</label>
                                            <input type="text" name="range" id="range" class="form-control" value="<?php echo ($products[0]->rrange) ? $products[0]->rrange : ''; ?>"/>

                                        </div>
                                        <div class="form-group col-md-6 col-lg-6 col-sm-12 col-xs-12 show1">
                                            <label class="control-label">Required Registration? </label>
                                            <select name="need_registration" id="need_registration" class="form-control" >
                                                <option value="0" <?php echo ($products[0]->need_registration == 0) ? "selected" : ''; ?>>No</option>
                                                <option value="1" <?php echo ($products[0]->need_registration == 1) ? "selected" : ''; ?>>Yes</option>


                                            </select>




                                        </div>
                                        <div class="form-group col-md-6 col-lg-6 col-sm-12 col-xs-12 show1">
                                            <label class="control-label">Required Driving License?</label>
                                            <select name="need_driving_license" id="need_driving_license" class="form-control" >
                                                <option value="0" <?php echo ($products[0]->need_driving_license === '0') ? "selected" : ''; ?>>No</option>
                                                <option value="1" <?php echo ($products[0]->need_driving_license === '1') ? "selected" : ''; ?>>Yes</option>


                                            </select>




                                        </div>

                                        <div class="form-group col-md-6 col-lg-6 col-sm-12 col-xs-12 show1">
                                            <label class="control-label">Motor Output</label>
                                            <input type="text" name="motor_output" id="motor_output" class="form-control" value="<?php echo ($products[0]->motor_output) ? $products[0]->motor_output : ''; ?>"/>

                                        </div>

                                        <div class="form-group col-md-6 col-lg-6 col-sm-12 col-xs-12 show2">
                                            <label class="control-label">Am</label>
                                            <input type="text" name="am" id="am" class="form-control" value="<?php echo ($products[0]->am) ? $products[0]->am : ''; ?>"/>

                                        </div>
                                        <div class="form-group col-md-6 col-lg-6 col-sm-12 col-xs-12 show2">
                                            <label class="control-label">Warranty</label>
                                            <input type="text" name="warranty" id="warranty" class="form-control" value="<?php echo ($products[0]->warranty) ? $products[0]->warranty : ''; ?>"/>

                                        </div>
                                        <div class="form-group col-md-6 col-lg-6 col-sm-12 col-xs-12 show2">
                                            <label class="control-label">Voltage</label>
                                            <input type="text" name="voltage" id="voltage" class="form-control" value="<?php echo ($products[0]->voltage) ? $products[0]->voltage : ''; ?>"/>

                                        </div>
                                        <div class="form-group col-md-6 col-lg-6 col-sm-12 col-xs-12 show1 show2">
                                            <label class="control-label">Battery Type</label>
                                            <input type="text" name="batterytype" id="batterytype" class="form-control" value="<?php echo ($products[0]->batterytype) ? $products[0]->batterytype : ''; ?>"/>

                                        </div>
                                        <div class="form-group col-md-6 col-lg-6 col-sm-12 col-xs-12 show1">
                                            <label class="control-label">Wheel Diameter</label>
                                            <input type="text" name="wheeldiameter" id="wheeldiameter" class="form-control" value="<?php echo ($products[0]->wheel_diameter) ? $products[0]->wheel_diameter : ''; ?>"/>

                                        </div>




                                        <div class="form-group">

                                            <div class="col-md-10 mb30">
                                                <input type="hidden" name="target_tab" id="target_tab" value="1">
                                                <input class="btn btn-success" type="submit" name="update" value="save"/>

                                            </div>
                                        </div>


                                    </form>







                                </div>
                            </div>

                            <div class="tab-pane" id="tab_2">
                                <div class="alert alert-success margin-bottom-10">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                                    <i class="fa fa-warning fa-lg"></i> Image type and information need to be specified. </div>

                                <h5 > <b>Upload Main Image </b> </h5>  
                                <form action="<?php echo base_url(); ?>admin/Product/updateProductImages" method="post" enctype="multipart/form-data" id="addproduct1">
                                    <div id="tab_images_uploader_container" class="text-align-reverse margin-bottom-10">


                                        <input type="file" name="userfile[]" multiple id="userfile" class="btn btn-primary" style="float: left;margin-right:50px;"> 
                                        <input type="hidden" name="target_tab" id="target_tab" value="2">        
                                        <input type="hidden" name="product_id" id="product_id" value="<?php echo ($products[0]->product_id) ? $products[0]->product_id : 0; ?>">
                                        <input type="submit" name="submit" value="upload" class="btn btn-primary pull-left">
                                    </div>
                                </form>
                                <br style="clear:both">	<br/>
                                <div class="row">
                                    <div id="tab_images_uploader_filelist" class="col-md-6 col-sm-12"> </div>
                                </div>
                                        <?php if ($products[0]->image_path != '') { ?>
                                    <table class="table table-bordered table-hover table-responsive">
                                        <thead>
                                            <tr role="row" class="heading">

        <!-- <th width="1%">Delete</th> -->
                                                <th width="8%" align="center"> Image </th>
                                            <?php if ($this->session->userdata('admin_data')['admin_id'] == 1) { ?>
                                                    <th width="1%" align="center"> Upload Sub Images </th>

                                                    <th width="1%" align="center"> Options </th>
                                            <?php } ?>							  
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            // $image_ids = explode(',', $products[0]->childImage);
                                            //echo $products[0]->image_path."----";exit;
                                            $imageArray = explode(',', $products[0]->image_path);
                                            //if($products[0]->image_ids==''){
                                            $image_ids = explode(',', $products[0]->image_ids);
                                            //}





                                            $i = 1;
                                            $img = 0;
                                            $imgAP = 0;

                                            foreach ($imageArray as $image) {
                                                if (isset($imageArray) && count($imageArray > 0)) {
                                                    ?>
                                                    <tr>

                                                        <!-- 
                                                                                                                        <td>
                                                              <input type="checkbox" name="image_ids[]" id="<?php echo"imag" . $img; ?>" id="<?php echo"image" . $img; ?>"  value="<?php echo $image_ids[$img]; ?>"> <label for="<?php echo"imag" . $img; ?>">Image  <?php echo$img + 1; ?>
                                                         </td>
                                                        -->
                                                        <td>
                                                                <?php //print_r($imageArray); ?>
                                                            <div class="col-sm-3">
                                                                <a href="<?php echo base_url(); ?>public/uploads/<?php
                                                                if ($image != '') {
                                                                    echo $image;
                                                                } else {
                                                                    echo 'no_image.png';
                                                                }
                                                                ?>" class="fancybox-button" data-rel="fancybox-button">
                                                                    <img class="img-responsive" src="<?php echo base_url(); ?>public/uploads/<?php
                                                                    if ($image != '') {
                                                                        echo $image;
                                                                    }
                                                                    ?>" alt="<?php echo ($products[0]->name) ? $products[0]->name : ''; ?>" style="width: 100%;display:inline-block;"> </a>

                                                            </div>	
                                                            <div class="col-sm-9">																	
                                                                <h5 title='subImages' class='displayImages'  style="padding:3px;margin-top:6px;color:black;" data-id='<?php echo $image_ids[$img]; ?>' > Sub Images </h5>			

                                                                         <?php
                                                                         foreach ($childImage as $subImage) {

                                                                             if ($subImage["childImage"] == $image_ids[$img]) {
                                                                                 ?>
                                                                        <a href="<?php echo base_url(); ?>public/uploads/<?php
                                                                                 if ($subImage["image_path"] != '') {
                                                                                     echo $subImage["image_path"];
                                                                                 }
                                                                                 ?>" class="fancybox-button" data-rel="fancybox-button">
                                                                            <img class="img-responsive subimageEdit" src="<?php echo base_url(); ?>public/uploads/<?php
                                                                            if ($subImage["image_path"] != '') {
                                                                                echo $subImage["image_path"];
                                                                            }
                                                                            ?>" alt="<?php echo ($products[0]->name) ? $products[0]->name : ''; ?>" 

                                                                        <?php
                                                                        if ($subImage["make_primary"] == 1) {
                                                                            echo "style='border:2px solid blue;width: 50px;height:50px'";
                                                                        } else {
                                                                            echo "style='width:50px;height:50px;'";
                                                                        }
                                                                        ?>

                                                                                 > </a>

                                                                        </a> 

                                                                        <input type="radio" name="image_idsSet" class="image_idsSet" id="<?php echo $subImage["image_id"]; ?>"  value=" <?php echo $subImage["image_id"]; ?>" <?php
                                                    if ($subImage["make_primary"] == 1) {
                                                        echo "disabled";
                                                    }
                                                                        ?> >   <label for="<?php echo $subImage["image_id"]; ?>" style="display:inline-block;">Image  <?php echo$img + $i;
                                                    $i++;
                                                                        ?></label>




                                                                <?php
                                                                if ($subImage["make_primary"] == 1) {
                                                                    ?>	

                                                                            <input type="hidden" name="oldSetPrimaryImage" class="oldSetPrimaryImage"  id="<?php echo $subImage["image_id"]; ?>"  value="<?php echo $subImage["image_id"]; ?>">  

                        <?php
                    }
                    ?>






                    <?php
                } else {
                    echo"";
                }
            }
            ?>

                                                            </div>
                                                        </td>
            <?php if ($this->session->userdata('admin_data')['admin_id'] == 1) { ?>
                                                            <td>
                                                                <br/>   <br/>
                                                                <form action="<?php echo base_url(); ?>admin/Product/updateProductImages" method="post" enctype="multipart/form-data" id="addproduct1" >
                                                                    <div id="tab_images_uploader_container" class="text-align-reverse margin-bottom-10 text-center">
                                                                        <input type="file" name="userfile[]" multiple id="userfile" class="btn subImageUpload" required> 
                                                                        <input type="hidden" name="target_tab" id="target_tab" value="2">   
                                                                        <input type="hidden" name="childImage" id="childImage" value="<?php echo $image_ids[$img]; ?>">    														   
                                                                        <input type="hidden" name="product_id" id="product_id" value="<?php echo ($products[0]->product_id) ? $products[0]->product_id : 0; ?>">
                                                                        <br style="clear:both;">  <br style="clear:both;">
                                                                        <input type="submit" name="submit" value="Upload sub images" class="btn subImageUpload">
                                                                    </div>
                                                                </form>


                                                            </td>

                                                            <td align="center">
                                                                <br/> <br/>
                                                                <?php //echo $this->session->userdata('admin_data')['store_id']; ?>
                                                                <a download href="<?php echo base_url(); ?>public/uploads/<?php
                                                                if ($image != '') {
                                                                    echo $image;
                                                                }
                                                                ?>" alt="<?php echo ($products[0]->name) ? $products[0]->name : ''; ?>" class=' marginleft  green btn ' >
                                                                    Download </a>

                                                                <br/> <br/>

                                                                <?php
                                                                foreach ($productActive as $row) { //approve images ids 
                                                                    $approveImage = explode(',', $row->image_ids);
                                                                    $adminApproved = explode(',', $row->admin_uploaded);
                                                                }
                                                                //print_r($image_idsA);
                                                                //print_r($adminApproved);

                                                                foreach ($approveImage as $key => $value) {

                                                                    if ($image_ids[$img] == $value) {
                                                                        // echo$value;
                                                                        $isAdminOk = $adminApproved[$key];
                                                                        break;
                                                                    }
                                                                }

                                                                //if($image_ids[$img]=
                                                                // $adminApproved = explode(',', $products[0]->admin_uploaded);

                                                                if ($isAdminOk == 0) {
                                                                    ?>
                                                                    <a title='Activate' class='image_id marginleft activate green btn ' style="background:green;" data-type='activate' data-pname='<?php echo ($products[0]->product_id) ? $products[0]->product_id : 0; ?>' data-id='<?php echo $image_ids[$img]; ?>' data-name="Image <?php echo$img + 1; ?>"> Activate </a>			



                    <?php
                } else {
                    ?> 
                                                                    <a title='Deactivate' class='image_id marginleft activate  red btn ' data-type='Deactivate' data-pname='<?php echo ($products[0]->product_id) ? $products[0]->product_id : 0; ?>' data-id='<?php echo $image_ids[$img]; ?>' data-name="Image <?php echo$img + 1; ?>"> Deactivate </a>			


                <?php }
                ?>



                                                            </td>

                                                    <?php } ?>

                                                    </tr>
            <?php
            $img++;
            $imgAP = $imgAP++;
        }
    }
    ?>
    <?php if (isset($imageArray) && count($imageArray > 0)) {
        ?>
                                                <tr>
                                                    <!--
                                                    <td >
                                                       </td>
                                                    -->
                                                    <!--   
                                                    <td colspan="2">
                                                        <input type="submit" name="all_image_ids" id="all_image_ids" value="Delete Checked" class="btn btn-primary">
                                                   </td>
                                                   
                                                    -->
                                                </tr>
    <?php } ?>

    <?php if ($this->session->userdata('admin_data')['admin_id'] == 1) { ?>

                                                <tr role="row" class="heading">

                                                    <td  colspan="2">
                                                        <p class="pull-right" style="margin-top:10px;"> Please select any one primary image for display in  front Page.
                                                        </p>
                                                    </td>
                                                    <td class="text-center" colspan="1">

                                                        <input type="buttton" name="all_image_idsSet" id="all_image_idsSet" value="Set Primary Image" class="btn btn-primary pull-left">



                  <!--  <input type="submit" name="all_image_ids" id="all_image_ids" value="Delete Checked" class="btn btn-primary"> -->
                                                    </td>

                                                </tr>
    <?php } ?>

                                        </tbody>
                                    </table>
<?php } ?>




                            </div>
                            <div class="tab-pane metadata" id="tab_3">
                                <div class="form-body">
                                    <form action="<?php echo base_url(); ?>admin/Product/updateMetaTags/<?php echo ($products[0]->product_id) ? $products[0]->product_id : 0; ?>" method="post" enctype="multipart/form-data" id="addproduct" onsubmit="return checkChecked('addproduct');">

                                        <div class="form-group padding-bottom-40">
                                            <label class="col-md-2 control-label">Meta Title:
                                                <span class="required"> * </span>
                                            </label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" name="title" id="title" value="<?php echo ($products[0]->meta_title) ? $products[0]->meta_title : ''; ?>" /> </div>
                                        </div>
                                        <div class="form-group padding-bottom-40">
                                            <label class="col-md-2 control-label">Meta Keywords:
                                                <span class="required"> * </span>
                                            </label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" name="keywords" id="keywords" value="<?php echo ($products[0]->meta_keywords ) ? $products[0]->meta_keywords : ''; ?>" />
                                            </div>
                                        </div>








                                        <div class="form-group mb30">
                                            <label class="col-md-2 control-label">Meta Description:
                                                <span class="required"> * </span>
                                            </label>
                                            <div class="col-md-10 mb30">
                                                <textarea class="form-control" name="description" id="description" ><?php echo ($products[0]->meta_description) ? $products[0]->meta_description : ''; ?></textarea>

                                            </div>
                                        </div>
                                        <div class="form-group">

                                            <div class="col-md-10 mb30">
                                                <input type="hidden" name="target_tab" id="target_tab" value="1">
                                                <input class="btn btn-success" type="submit" name="update" value="save"/>

                                            </div>
                                        </div>


                                    </form>







                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>


        <!-- tabs end-->

    </div>



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


        $('body').on('click', '.image_id', function () {
            var image_id = $(this).data('id');
            var product_id = $(this).data('pname');
            var imageName = $(this).data('name');
            //   alert(image_id);


            var type = $(this).data('type');
            var alertval = "";
            //var flg="";
            alertval = (type === "activate") ? "Activate " : "Deactivate ";
            var answer = confirm('Are you sure you want to ' + alertval + imageName + ' ?');

            if (answer)
            {
                $.ajax({
                    type: "POST",
                    url: "<?= base_url(); ?>admin/Ajax/AdminApproveImage",
                    data: {'image_id': image_id, 'product_id': product_id, 'typeofAction': type},
                    success: function (response) {
                        // alert(response);
                        if (response) {
                            // alert(response);
                            location.reload();
                            //$('.p10').parent('tr').remove();
                            //alert('ok');
                            // $('#custom_attributes').html(response); 
                        } else {

                        }
                    }
                });

                //alert("yes");
            } else
            {
                alert('Product Not Deleted');
            }

        });

        var image_idsSet1 = 0;

        $(".image_idsSet").change(function () {

            image_idsSet1 = $(this).val();

        });

        $('body').on('click', '#all_image_idsSet', function () {
            var oldSetPrimaryImage = $(".oldSetPrimaryImage").val();
            var product_id = $("#product_id").val();
            //alert(product_id);
            //alert(oldSetPrimaryImage);

            if (image_idsSet1 == 0)
            {
                alert("Please select  primary  image ");
                return false;
            } else {
                //  alert(image_idsSet1);
            }





            if (true)
            {
                $.ajax({
                    type: "POST",
                    url: "<?= base_url(); ?>admin/Product/destroyImages/" + product_id + "",
                    data: {'oldSetPrimaryImage': oldSetPrimaryImage, 'product_id': product_id, 'all_image_idsSet': 'set primary image', 'image_idsSet': image_idsSet1},
                    success: function (response) {
                        //alert(response);
                        if (response) {
                            //alert("Primary Image Set");
                            location.reload();
                            //$('.p10').parent('tr').remove();
                            //alert('ok');
                            // $('#custom_attributes').html(response); 
                        } else {

                        }
                    }
                });
                alert("Primary Image Set");
                location.reload();
                //alert("yes");
            } else
            {
                alert('Product Not Deleted');
            }


        });
        $('body').on('change', '#make', function () {
            //var cat_id = $(this).data('id');

            var value = $("#make option:selected").val();
            if (value) {
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
            } else {
                $('#model').html('<option value="">Select Make first</option>');
            }

        });
        $('body').on('change', '#model', function () {
            //var cat_id = $(this).data('id');

            var value = $("#model option:selected").val();
            //alert(value);
            if (value) {
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
            } else {
                $('#variant').html('<option value="">Select Model first</option>');
            }

        });
        $('body').on('change', '#category', function () {
            //var cat_id = $(this).data('id');

            var cat_id = $("#category option:selected").val();
            // alert(cat_id);

            if (cat_id === "3")
            {
                $(".show1").hide();
                $(".show2").show();
            } else {
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
        $(document).ready(function () {

            $("#dt1").datepicker({
                dateFormat: "yy-mm-dd",
                minDate: 0,
                onSelect: function (date) {
                    var dt2 = $('#dt2');
                    var startDate = $(this).datepicker('getDate');
                    var minDate = $(this).datepicker('getDate');
                    dt2.datepicker('setDate', minDate);
                    startDate.setDate(startDate.getDate() + 30);
                    //sets dt2 maxDate to the last day of 30 days window
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
                    startDate.setDate(startDate.getDate() + 30);
                    //sets dt2 maxDate to the last day of 30 days window
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
                    startDate.setDate(startDate.getDate() + 30);
                    //sets dt2 maxDate to the last day of 30 days window
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



        });

    </script>
    <script type="text/javascript">
        $(document).on("change keyup blur", "#chDiscount", function () {
            $('#chDiscount1').val('');
            var main = $('#actual_price').val();
            var disc = $('#chDiscount').val();
            var dec = (disc / 100).toFixed(2); //its convert 10 into 0.10
            var mult = main * dec; // gives the value for subtract from main value
            var discont = main - mult;
            $('#offer_price').val(discont);


        });
        $(document).on("change keyup blur", "#chDiscount21", function () {
            $('#chDiscount11').val('');
            var main = $('#offer_price').val();
            var disc = $('#chDiscount21').val();
            var dec = (disc / 100).toFixed(2); //its convert 10 into 0.10
            var mult = main * dec; // gives the value for subtract from main value
            var discont = mult;
            $('#commission').val(discont);


        });
        $(document).on("change keyup blur", "#chDiscount1", function () {
            $('#chDiscount').val('');
            var amd = $('#actual_price').val();
            var disc = $('#chDiscount1').val();
            if (disc != '' && amd != '') {
                $('#offer_price').val((parseInt(amd)) - (parseInt(disc)));
            } else {
                $('#offer_price').val(parseInt(amd));
            }
            if (parseInt(disc) >= parseInt(amd))
            {
                $("#disc_txt").text("Discount amount should be lessthan MRP");
                //alert("Discount amount should be lessthan MRP");
                $('#chDiscount1').val("");
            } else {
                $("#disc_txt").text("");
            }

        });

        $(document).on("change keyup blur", "#chDiscount11", function () {
            $('#chDiscount21').val('');
            var amd = $('#offer_price').val();
            var disc = $('#chDiscount11').val();
            if (disc != '' && amd != '') {
                $('#commission').val(parseInt(disc));
            } else {
                $('#commission').val(parseInt(amd));
            }
            if (parseInt(disc) >= parseInt(amd))
            {
                $("#comm_txt").text("Commission amount should be lessthan Selling Price");
                //alert("commission amount should be lessthan Selling Price");
                //$('#chDiscount21').val("");
                //$("#comm_txt").text("");
            } else {
                $("#comm_txt").text("");
            }

        });
        $(document).on("change keyup blur", "#actual_price", function () {
            $('#offer_price').val('');
            $('#chDiscount').val('');
            $('#chDiscount1').val('');
            $('#chDiscount21').val('');
            $('#chDiscount11').val('');
            $('#commission').val('');
        });
    </script>
    <script>
        $(document).on("change keyup", "#coupon_value", function () {

            var fst = $("#offer_price").val();
            var sec = $("#coupon_value").val();
            if (Number(sec) > Number(fst)) {
                $('#coupon_value').val('');
                alert("Coupon Value should not be greater than offer price");
                return true;
            }
        });
        $('body').on('click', '.delivery_charges', function () {
            var test = $(this).val();
            //alert(test);
            if (test === '2') {
                $(".delivery_cost").show();

            } else {
                $(".delivery_cost").hide();
            }
        });
        $('body').on('keyup', '#product_gst', function () {
            // $(document).on("change keyup blur", "#product_gst", function() {
            //$('#chDiscount1').val('');
            var product_gst = $('#product_gst').val();
            if (product_gst < 29) {
                // var disc = $('#chDiscount').val();
                var product_cgst = (product_gst / 2);

                $('#product_cgst').val(product_cgst);
                $('#product_sgst').val(product_cgst);
            } else {
                alert("Max GST 28% Only");
                $('#product_gst').val("");
                $('#product_cgst').val("");
                $('#product_sgst').val("");
            }

        });
        $('body').on('change', '#shipping_gst', function () {
  //$(document).on("change keyup blur", "#shipping_gst", function() {
            //$('#chDiscount1').val('');
            var shipping_gst = $('#shipping_gst').val();
            if (shipping_gst < 29) {
                // var disc = $('#chDiscount').val();
                var shipping_cgst = (shipping_gst / 2);

                $('#shipping_cgst').val(shipping_cgst);
                $('#shipping_sgst').val(shipping_cgst);
            } else {
                alert("Max GST 28% Only");
                $('#shipping_gst').val("");
                $('#shipping_cgst').val("");
                $('#shipping_sgst').val("");
            }

        });
        $('body').on('change', '#handling_gst', function () {
  //$(document).on("change keyup blur", "#handling_gst", function() {
            //$('#chDiscount1').val('');
            var handling_gst = $('#handling_gst').val();
            if (handling_gst < 29) {
                // var disc = $('#chDiscount').val();
                var handling_cgst = (handling_gst / 2);

                $('#handling_cgst').val(handling_cgst);
                $('#handling_sgst').val(handling_cgst);
            } else {
                alert("Max GST 28% Only");
                $('#handling_gst').val("");
                $('#handling_cgst').val("");
                $('#handling_sgst').val("");
            }

        });
    </script>

