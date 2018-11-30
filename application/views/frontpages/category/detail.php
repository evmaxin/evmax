<style type="text/css">
    table {
        background-color: #fff;
    }
    .info-panel .product-title {
        display: block;
        font-size: 28px;
        margin-bottom: 9px;
        text-transform: capitalize;
        line-height: 1;
        padding-top: 24px;
    }
    .featurs{
        padding-bottom: 12px;
    }
    .info-panel .sub-title {
        margin-bottom: 7px;
    }
    .selectsty{
        padding: 2px 4px;
        margin: 3px 9px;
        background-color: #3051a0;
    }
    .lbl{
        padding: 0px;
        font-weight: bold;
    }
    .product_information {
        border: 1px solid rgba(51, 51, 51, .6);
        display: none;
        position: absolute;
        top: 0;
        left: 10px;
        padding: 10px;
        height: 100%;
        width: 91%;
        background-color: rgba(51, 51, 51, .6) !important;
    }
    .product_information table,
    .product_information td,
    .product_information th {
        border: 0 solid #333!important;
        color: #fff;
        font-size: 11px;
        padding: 0px;
        background: none;
    }
    .det112{
        background-color: #57b952;
        color: #fff;
    }
    @media (max-width: 480px){
        .info-panel {
            padding-left: 17px !important;
            margin-top: 30px;
        }
        .nxtdiv{
            display: -webkit-inline-box !important;
        }
    }
    .det112 {
        background-color: #e1ff827a;
        color: #040404;
        height: 844px;
    }
    .detlarge
    {

    }
    .Prodev00212 {
        color: #00000e !important;
    }
    .Prodev002122A{
        width: 80%;
        padding: 1px 0px;
        margin: 5px 9px;
        background-color: #4caf5042;
        border: 2px solid #3051a0;
    }
    .selectsty {
        padding: 2px 4px;
        margin: 3px 9px;
        background-color: #4caf5042;
        padding: 1px 20px;
        margin: 5px 9px;
        background-color: #4caf5042;
        border: 2px solid #3051a0;
    }
    .Prodev002112 {
        color: #000 !important;
    }
    .delivery_location{
        display: none;
    }
    #deliveryaddresslbl{
        display: none;
        font-weight: bold;
        float: left;
        position: relative;
        top: 11px;
    }
</style>

<!-- Start Page Header -->
<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">            
                <div class="breadcrumb">
                    <a href="#"><i class="icon-home"></i> Home</a>
                    <span class="crumbs-spacer"><i class="fa fa-angle-double-right"></i></span>
                    <span class="current">Product Profile</span>
                    <h2 class="entry-title">Single Product</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Page Header -->
<?php
//echo IND_money_format(floatval("10000000.00"));
$i = 0;
$cart_session = @$this->session->userdata('cart_session');
//echo "<pre>";

foreach ($productActive as $row) {

    $imageArray = explode(',', $row->image_path);
    $make_primary = explode(',', $row->make_primary);
    $admin_uploaded = explode(',', $row->admin_uploaded);
    $childImages = explode(',', $row->childImages);
    //print_r($productActive); 
}
//echo "<pre>";print_r($products);
foreach ($products as $row) {
    if ($row->delivery_charges === "1") {
        $delivery_charges = "Included";
    } else if ($row->delivery_charges === "2") {
        $delivery_charges = "Excluded";
    } else {
        $delivery_charges = "Not Mentioned";
    }

    //$imageArray = explode(',', $row->image_path); 
    //$make_primary=explode(',', $row->make_primary); 
    //$admin_uploaded=explode(',', $row->admin_uploaded); 
    //$childImages=explode(',', $row->childImages); 
    //print_r($childImages); 
    ?>
    <!-- Single-prouduct Section Start -->
    <section id="product-collection" class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-sm-6 col-xs-12" style="margin-right: 6%;">
                    <div class="product-details-image">
                        <div class="slider-for slider">

    <?php
    if (!empty($imageArray)) {
        $mp = 0;
        $j = 1;
        foreach ($imageArray as $images) {
            ?>
                                    <?php if ($make_primary[$mp] == 1 && $admin_uploaded[$mp] == 1 && $childImages[$mp] != 0) { ?>
                                        <div class='zoom ex1'>

                                            <img src="<?php echo base_url(); ?>public/uploads/<?php if ($images != '') {
                            echo $images;
                        } else {
                            echo 'no_image.png';
                        }
                                        ?>"  alt="<?php if (!empty($row->name)) {
                            echo $row->name;
                        }
                                        ?>">
                                        </div>
                                        <?php
                                    }
                                    ?>  
                                    <?php
                                    $j++;
                                    $mp++;
                                }
                            }
                            ?>

                            <?php if (!empty($imageArray)) {
                                $mp = 0;
                                $j = 1;
                                foreach ($imageArray as $images) { ?>

            <?php if ($make_primary[$mp] == 0 && $admin_uploaded[$mp] == 1 && $childImages[$mp] != 0) {
                ?>
                                        <div class='zoom ex1'>
                                            <img src="<?php echo base_url(); ?>public/uploads/<?php if ($images != '') {
                    echo $images;
                } else {
                    echo 'no_image.png';
                } ?>"  alt="<?php if (!empty($row->name)) {
                    echo $row->name;
                } ?>">
                                        </div>
                                        <?php
                                    }
                                    ?>  

                                    <!--  </a> -->

                                    <?php $j++;
                                    $mp++;
                                }
                            } ?>



                        </div>


                        <ul id="productthumbnail" class="slider slider-nav">
                            <?php
                            if (!empty($imageArray)) {
                                $mp = 0;
                                $k = 1;
                                foreach ($imageArray as $images) {

                                    if ($make_primary[$mp] == 1 && $admin_uploaded[$mp] == 1 && $childImages[$mp] != 0) {
                                        ?>
                                        <li>
                                            <img src="<?php echo base_url(); ?>public/uploads/<?php if ($images != '') {
                                            echo $images;
                                        } else {
                                            echo 'no_image.png';
                                        } ?>"  alt="<?php if (!empty($row->name)) {
                                            echo $row->name;
                                        } ?>">
                                        </li>
            <?php }
            $k++;
            $mp++;
        }
    }
    ?>

    <?php
    if (!empty($imageArray)) {
        $mp = 0;
        $k = 1;
        foreach ($imageArray as $images) {

            if ($make_primary[$mp] == 0 && $admin_uploaded[$mp] == 1 && $childImages[$mp] != 0) {
                ?>
                                        <li>
                                            <img src="<?php echo base_url(); ?>public/uploads/<?php if ($images != '') {
                    echo $images;
                } else {
                    echo 'no_image.png';
                } ?>"  alt="<?php if (!empty($row->name)) {
                    echo $row->name;
                } ?>">
                                        </li>
            <?php }
            $k++;
            $mp++;
        }
    }
    ?>  


                        </ul>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12" style="box-shadow: 0px 0px 0px 0px #ccc;padding-top: 0px;padding-right: 0px;">

                    <table class="table table-striped" width="100%">
                        <thead>
                            <tr>
                                <th colspan="2" style="background-color: #57b952;color: White;text-align: center"><?php echo $row->name ?ucfirst($row->name): ''; ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Model & Variant :</td>
                                <td><?php echo $row->model ? $row->model : ''; ?> & <?php echo $row->varient ? $row->varient : '';
    $off = $row->offer_price ? $row->offer_price : 0;
    ?></td>      
                            </tr>
                            <tr>
                                <td>MRP:</td>
                                <td>&#8377; <?php $mrp = $row->actual_price ? $row->actual_price : 0;
                echo IND_money_format(floatval($mrp)); ?></td>
                            </tr>
                            <tr>
                                <td>Discount:</td>
                                <td>&#8377; <?php $disc = $mrp - $off;
                echo IND_money_format(floatval($disc)); ?></td>
                            </tr>
                            <tr>
                                <td>Selling Price:</td>
                                 <td>&#8377 <?php echo IND_money_format(floatval($off)); ?></td>
                            </tr>
                            <?php if(isset($row->coupon_value)&&($row->coupon_value>0)) {?>
                              <tr>
                                <td>Coupon Discount: <a href="#" data-toggle="tooltip" title="Coupon value dicounted in final price.">*</a></td>
                                
                                 <td>&#8377; <?php echo IND_money_format(floatval($row->coupon_value)); ?></td>
                            </tr>
                           
                              <tr>
                                <td>Offer Price:</td>
                                 <td>&#8377; <?php echo IND_money_format(floatval(($off - $row->coupon_value))); ?></td>
                            </tr>
                             <?php } ?>
                             <?php if($row->category_id ==='4'){ ?>
                            
                             <tr>
                                 <td colspan="2"><a href="<?php echo base_url(); ?>Battery-Extended-Warranty/6"><img src="<?php echo base_url(); ?>assets/frontend/img/BatteryCombo.png" class="img-responsive"/></a></td>
                            </tr>
                              <?php }?>
                              <tr>
                                <td>Registration :</td>
                                 <td><?php echo ($row->need_registration === '1') ? "Yes" : 'No'; ?></td>
                            </tr>
                              <tr>
                                <td>Licence :</td>
                                 <td><?php echo ($row->need_driving_license === '1') ? "Yes" : 'No'; ?></td>
                            </tr>
                            <tr>
                                <td>EMI :</td>
                                 <td></td>
                            </tr>
                            <tr>
                                <td>Special Offer :</td>
                                 <td><?php echo ($row->special_offer === '1') ? "Yes" : 'No'; ?></td>
                            </tr>
                            <tr>
                                <td>Promo Code :</td>
                                 <td></td>
                            </tr>
                             <tr>
                                <td>State </td>
                                 <td></td>
                            </tr>
                             <tr>
                                <td>Insurance</td>
                                 <td></td>
                            </tr>
                             <tr>
                                <td>Add Ons </td>
                                 <td></td>
                            </tr>
                    </table>
                    <table width="100%">
                              <tr>
                                <td>                     <div class="inner_validations" style="color: red;"></div>
    <?php
    foreach ($productattributes as $attributes) {
        if ($attributes->visible_on_detail_page == 1) {
            echo "<div class='single_atr'>" . $attributes->attribute_type . ":" . "";
            $attrinutenames = explode(",", $attributes->name);
            $attributevalues = explode(",", $attributes->attribute_id);
        }
        ?>
                            <select style="<?php if ($attributes->visible_on_detail_page == 0) {
            echo 'visibility: hidden;float: right;';
        } ?>" name="<?php echo $attributes->attribute_type; ?>" id="<?php echo strtolower($attributes->attribute_type); ?>" class="target selectsty <?php echo $attributes->attribute_type; ?>" atr="<?php echo $attributes->attribute_type . "~" . $attributes->attribute_type_id; ?>">
        <?php if ($attributes->visible_on_detail_page == 1) {
            if (isset($attributevalues) && count($attributevalues) > 1) {
                ?>
                                        <option value="">Select <?php echo ucfirst($attributes->attribute_type); ?></option> 
            <?php }
        }
        ?>
        <?php foreach ($attrinutenames as $k1 => $name) { ?>
                        <?php foreach ($attributevalues as $k2 => $attribute_id) {
                            if ($k1 == $k2) { ?>

                                            <option value="<?php echo $attribute_id; ?>"><?php echo ucfirst($name); ?></option>  
                <?php
                }
            }
        }
        ?>

                            </select>
                        </span>
                    </div><!-- single_atr ends-->

    <?php } ?></td>  
                                 <td></td>
                            </tr>
                            </tbody>
                    </table>
                   
                <!-- Product Color -->
                <div class="color-list1 ">


                <div class="attr-product" style="padding-bottom: 10px;">
                    <!--<div class="delivery_location1">
                                      
                        <span class="col-md-6 col-lg-6 col-xs-12 col-sm-12 lbl Prodev00212">Pincode: </span> <span class="col-md-6 col-lg-6 col-xs-12 col-sm-12"  style="padding: 0px 8px;"><input type="text" name="pincode" id="pincode" pattern="[0-9]+" class="Prodev00212 Prodev002122A" maxlength="6" minlength="6" onkeypress="return isNumber(event)" style="padding: 0px;font-size: 11px;" placeholder="Enter Delivery Pincode" ></span>
                                  </div>-->
                    <div id="deliveryaddresslbl"><br></div>
                    <div class="delivery_location" id="deliverylbl">

                        <span class="col-md-6 col-lg-6 col-xs-12 col-sm-12 lbl Prodev00212">Delivery Location: </span>
                        <span class="col-md-6 col-lg-6 col-xs-12 col-sm-12"  style="padding: 0px 8px;">

                            <select name="deliveryaddress" id="deliveryaddress" style="max-width: 160px;" onchange="SelectFirst(this.value)">
                                <option>Select Pickup Address</option>

                            </select>
                        </span>
                    </div>

                    <div class="info-qty-custom">

                        <button type="button" class="less_qty " position="<?php echo $i; ?>">

                        </button>

                        <input type="hidden" readonly="readonly" id="qty[<?php echo $i; ?>]" class="input-number qty<?php echo $row->product_id; ?>" style="text-align:right;width:45px" value="<?php echo (@$cart_session[$row->product_id]) ? $cart_session[$row->product_id] : '1'; ?>" max="5" onkeypress="return numberOnly(event)">

                        <button type="button" class="add_qty" position="<?php echo $i; ?>">

                        </button>




                    </div>
                </div>
                    <tr>
                        <td colspan="2">
    <?php if (isset($row->inventory) && ($row->inventory > 0)) { ?>
                    <div class="quantity-cart">
                        <button style="border: none; width: 100%;" type="button" class="btn btn-danger add_to_cart Prodev004 Prodev002031" product_id="<?php echo $row->product_id; ?>"><i class="icon-basket-loaded-loaded"></i> add to cart</button>
                        <div id="notification_div" style="margin-top: 10px;"></div>
                    </td>  
                    </tr>
                    </div>

    <?php } ?>
            </div>

        </div>

    </div>      
    </div>
    </div>
    </section>

<?php } ?>
<!-- Single-prouduct Section End -->

<!-- Single-prouduct-tab Start -->
<div class="single-pro-tab visible-lg visible-md hidden-xs">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-xs-12 col-lg-12">

                <table class="table table-hover tcont table-striped">
                    <thead>
                        <tr class="Prodev001">
                            <th class="col-lg-4 col-md-6 col-sm-12" style="text-align: center; background-color: #808fbb;color: #000;">Overview</th>
                            <th class="col-lg-4 col-md-6 col-sm-12" style="text-align: center;background-color: #ffff00a1 ;color: #000;">Features</th>
                            <th class="col-lg-4 col-md-6 col-sm-12" style="text-align: center;background-color: #e1ff827a ;color: #000;">Tech specs</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="background-color: #808fbb;"><span class="col-md-6 col-lg-6 lbl Prodev002112">Category :</span> <span class="col-md-6 col-lg-6 Prodev002112"><?php echo $row->category_name ? $row->category_name : ''; ?></span></td>
                            <td style="background-color: #ffff00a1;color: #000;" rowspan="9"><?php echo $row->full_description; ?><?php echo $row->special_offer_text ? "<br><b>Special Offer</b><br>" . $row->special_offer_text : ''; ?></td>
                            <td style="background-color: #e1ff827a;"><span class="col-md-6 col-lg-6 lbl Prodev002112">Speed :</span> <span class="col-md-6 col-lg-6 Prodev002112"><?php echo $row->speed ? $row->speed : ''; ?></span></td>

                        </tr>
                        <tr>
                            <td style="background-color: #808fbb;"><span class="col-md-6 col-lg-6 lbl Prodev002112">Sub Category :</span> <span class="col-md-6 col-lg-6 Prodev002112"><?php echo $row->scatname ? $row->scatname : ''; ?></span></td>
                            <td style="background-color: #e1ff827a;"><span class="col-md-6 col-lg-6 lbl Prodev002112">Range :</span> <span class="col-md-6 col-lg-6 Prodev002112"><?php echo $row->rrange ? $row->rrange : ''; ?></span></td>

                        </tr>
                        <tr>
                            <td style="background-color: #808fbb;"><span class="col-md-6 col-lg-6 lbl Prodev002112">Registration :</span> <span class="col-md-6 col-lg-6 Prodev002112"><?php echo ($row->need_registration === '1') ? "Yes" : 'No'; ?></span></td>
                            <td style="background-color: #e1ff827a;"><span class="col-md-6 col-lg-6 lbl Prodev002112">Battery :</span> <span class="col-md-6 col-lg-6 Prodev002112"><?php echo $row->batterytype ? $row->batterytype : ''; ?></span></td>

                        </tr>
                        <tr>
                            <td style="background-color: #808fbb;"><span class="col-md-6 col-lg-6 lbl Prodev002112">License:</span> <span class="col-md-6 col-lg-6 Prodev002112"><?php echo ($row->need_driving_license === '1') ? "Yes" : 'No'; ?></span></td>
                            <td style="background-color: #e1ff827a;"><span class="col-md-6 col-lg-6 lbl Prodev002112">Wheels :</span> <span class="col-md-6 col-lg-6 Prodev002112"></span></td>

                        </tr>
                        <tr>
                            <td style="background-color: #808fbb;"><span class="col-md-6 col-lg-6 lbl Prodev002112">Speed :</span> <span class="col-md-6 col-lg-6 Prodev002112"><?php echo $row->speed ? $row->speed : ''; ?></span></td>
                            <td style="background-color: #e1ff827a;"><span class="col-md-6 col-lg-6 lbl Prodev002112">Motor Specs :</span> <span class="col-md-6 col-lg-6 Prodev002112"></td>

                        </tr>
                        <tr>
                            <td style="background-color: #808fbb;"><span class="col-md-6 col-lg-6 lbl Prodev002112">Range :</span> <span class="col-md-6 col-lg-6 Prodev002112"><?php echo $row->rrange ? $row->rrange : ''; ?></span></td>
                            <td style="background-color: #e1ff827a;"><span class="col-md-6 col-lg-6 lbl Prodev002112">Colors:</span> <span class="col-md-6 col-lg-6 Prodev002112 "></td>


                        </tr>
                        <tr>
                            <td style="background-color: #808fbb;"><span class="col-md-6 col-lg-6 lbl Prodev002112">Battery:</span> <span class="col-md-6 col-lg-6 Prodev002112"><?php echo $row->batterytype ? $row->batterytype : ''; ?></span></td>
                            <td style="background-color: #e1ff827a;"><span class="col-md-6 col-lg-6 lbl Prodev002112">Exchange benefit:</span> <span class="col-md-6 col-lg-6 Prodev002112"><?php echo $row->exchange_benefit ? "Rs." . $row->exchange_benefit : ''; ?></span></td>


                        </tr>
                        <tr>
                            <td style="background-color: #808fbb;"><span class="col-md-6 col-lg-6 lbl Prodev002112">Exchange note:</span> <span class="col-md-6 col-lg-6 Prodev002112"><?php echo $row->exchange_note ? $row->exchange_note : ''; ?></span></td>
                            <td style="background-color: #e1ff827a;"><span class="col-md-6 col-lg-6 lbl Prodev002112">Delivery charges:</span> <span class="col-md-6 col-lg-6 Prodev002112"><?php echo $delivery_charges; ?></span></td>


                        </tr>


                    </tbody>
                </table>                 
            </div>
        </div>
    </div>
</div>

<div class="single-pro-tab section visible-xs  hidden-md hidden-lg">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-xs-12">
                <h2 class="deta112">Overview</h2>
                <div class="row" style="background-color: #808fbb; color: #000;line-height: 27px; margin-right: 0px;margin-left: 0px;">
                    <div>
                        <div class="col-xs-6">
                            <div class="nxtdiv">Category :</div>
                        </div>
                        <div class="col-xs-6">
                            <div class="nxtdiv"><?php echo $row->category_name ? $row->category_name : '&nbsp;&nbsp;'; ?></div>
                        </div>
                    </div>
                    <div>
                        <div class="col-xs-6">
                            <div class="nxtdiv">Sub Category :</div>
                        </div>
                        <div class="col-xs-6">
                            <div class="nxtdiv"><?php echo $row->scatname ? $row->scatname : '&nbsp;&nbsp;'; ?></div>
                        </div>
                    </div>
                    <div>
                        <div class="col-xs-6">
                            <div class="nxtdiv">Registration :</div>
                        </div>
                        <div class="col-xs-6">
                            <div class="nxtdiv"><?php echo ($row->need_registration === '1') ? "Yes" : 'No'; ?></div>
                        </div>
                    </div>
                    <div>
                        <div class="col-xs-6">
                            <div class="nxtdiv">License:</div>
                        </div>
                        <div class="col-xs-6">
                            <div class="nxtdiv"><?php echo ($row->need_driving_license === '1') ? "Yes" : 'No'; ?></div>
                        </div>
                    </div>
                    <div>
                        <div class="col-xs-6">
                            <div class="nxtdiv">Speed :</div>
                        </div>
                        <div class="col-xs-6">
                            <div class="nxtdiv"><?php echo $row->speed ? $row->speed : '&nbsp;&nbsp;'; ?></div>
                        </div>
                    </div>
                    <div>
                        <div class="col-xs-6">
                            <div class="nxtdiv">Range :</div>
                        </div>
                        <div class="col-xs-6">
                            <div class="nxtdiv"><?php echo $row->rrange ? $row->rrange : '&nbsp;&nbsp;'; ?></div>
                        </div>
                    </div>
                    <div>
                        <div class="col-xs-6">
                            <div class="nxtdiv">Battery:</div>
                        </div>
                        <div class="col-xs-6">
                            <div class="nxtdiv"><?php echo $row->batterytype ? $row->batterytype : '&nbsp;&nbsp;'; ?></div>
                        </div>
                    </div>
                </div>               
            </div>
        </div>
        </br>
        <div class="row">
            <div class="col-md-12 col-xs-12">
                <h2 class="deta112">Features</h2>
                <div class="row" style="background-color: #808fbb; color: #000;line-height: 27px; margin-right: 0px;margin-left: 0px;">
<?php echo $row->full_description; ?>
<?php echo $row->special_offer_text ? "<br><b>Special Offer</b><br>" . $row->special_offer_text : ''; ?>
                </div>               
            </div>
        </div>
        </br>
        <div class="row">
            <div class="col-md-12 col-xs-12">
                <h2 class="deta112">Tech specs</h2>
                <div class="row" style="background-color: #808fbb; color: #000;line-height: 27px; margin-right: 0px;margin-left: 0px;">
                    <div>
                        <div class="col-xs-6">
                            <div class="nxtdiv">Speed :</div>
                        </div>
                        <div class="col-xs-6">
                            <div class="nxtdiv"><?php echo $row->speed ? $row->speed : '&nbsp;&nbsp;'; ?></div>
                        </div>
                    </div>
                    <div>
                        <div class="col-xs-6">
                            <div class="nxtdiv">Range :</div>
                        </div>
                        <div class="col-xs-6">
                            <div class="nxtdiv"><?php echo $row->rrange ? $row->rrange : '&nbsp;&nbsp;'; ?></div>
                        </div>
                    </div>
                    <div>
                        <div class="col-xs-6">
                            <div class="nxtdiv">Battery :</div>
                        </div>
                        <div class="col-xs-6">
                            <div class="nxtdiv"><?php echo $row->batterytype ? $row->batterytype : '&nbsp;&nbsp;'; ?></div>
                        </div>
                    </div>
                    <div>
                        <div class="col-xs-6">
                            <div class="nxtdiv">Wheels :</div>
                        </div>
                        <div class="col-xs-6">
                            <div class="nxtdiv">&nbsp;&nbsp;</div>
                        </div>
                    </div>
                    <div>
                        <div class="col-xs-6">
                            <div class="nxtdiv">Motor Specs :</div>
                        </div>
                        <div class="col-xs-6">
                            <div class="nxtdiv">&nbsp;&nbsp;</div>
                        </div>
                    </div>
                    <div>
                        <div class="col-xs-6">
                            <div class="nxtdiv">Colors:</div>
                        </div>
                        <div class="col-xs-6">
                            <div class="nxtdiv">&nbsp;&nbsp;</div>
                        </div>
                    </div>
                    <div>
                        <div class="col-xs-6">
                            <div class="nxtdiv">Exchange benefit:</div>
                        </div>
                        <div class="col-xs-6">
                            <div class="nxtdiv">Rs.<?php echo $row->exchange_benefit ? "Rs." . $row->exchange_benefit : ''; ?></div>
                        </div>
                    </div>
                    <div>
                        <div class="col-xs-6">
                            <div class="nxtdiv">Exchange note</div>
                        </div>
                        <div class="col-xs-6">
                            <div class="nxtdiv"><?php echo $row->exchange_note ? $row->exchange_note : ''; ?></div>
                        </div>
                    </div>
                    <div>
                        <div class="col-xs-6">
                            <div class="nxtdiv">Delivery charges:</div>
                        </div>
                        <div class="col-xs-6">
                            <div class="nxtdiv"><?php echo $delivery_charges; ?></div>
                        </div>
                    </div>

                </div>               
            </div>
        </div>
    </div>
</div>


<!-- Single-prouduct-tab End -->        <script src="<?php echo base_url() ?>assets/frontend/jquery.zoom.js"></script> <!-- Resource jQuery -->   
<script type="text/javascript">
                        $('.colorbtn').click(function () {
                            $('#colorid_value').val($(this).data('colorid'));
                        });
                        $(window).load(function () {
// $('.sp-wrap').smoothproducts();
                        });
</script>
<script>
    $(document).ready(function () {
        $('.ex1').zoom();
        // $("#deliveryaddresslbl").hide();
        /*  $("#pincode").keyup(function(){
         var pincode =   $('#pincode').val();
         if (pincode.length === 6) {
         // alert(pincode);
         $.ajax({
         type: "POST",
         url: "<?= base_url(); ?>admin/Ajax/getDeliveryLocations",
         data: {pincode: pincode},
         success: function (response) {
         //alert(response);
         if (response) {
         $("#deliveryaddresslbl").hide();
         $(".delivery_location").show();
         $('#deliveryaddress').html(response);
         $(".add_to_cart").show();
         } else {
         //  $('#deliveryaddress').html("");
         $("#deliverylbl").hide();
         $(".add_to_cart").hide();
         $("#deliveryaddresslbl").show();
         $('#deliveryaddresslbl').text("Delivery location not found with pincode: "+pincode);
         }
         }
         });
         }else{
         
         }
         });*/



    });
</script>
<script>
    function isNumber(evt) {
        evt = (evt) ? evt : window.event;
        var charCode = (evt.which) ? evt.which : evt.keyCode;
        if (charCode > 31 && (charCode < 48 || charCode > 57)) {
            return false;
        }
        return true;
    }
    function SelectFirst(SelVal) {
        var arrSelVal = SelVal.split(",")
        if (arrSelVal.length > 1) {
            Valuetoselect = arrSelVal[0];
            document.getElementById("select1").value = Valuetoselect;
        }
    }
</script>