<!-- BEGIN CONTENT BODY -->
<div class="page-content">
    <!-- BEGIN PAGE HEADER-->
<?php //echo "<pre>";print_r($orders_data[0]);?>
    <!-- BEGIN PAGE TITLE-->
    <h1 class="page-title"> Order View
        <small><a href="<?php echo base_url() ?>admin/orders">Back To Orders </a></small>
    </h1>
    <!-- END PAGE TITLE-->
    <!-- END PAGE HEADER-->
    <div class="row">
        <div class="col-md-12">
            <!-- Begin: life time stats -->
            <div class="portlet light portlet-fit portlet-datatable bordered">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-settings font-dark"></i>
                        <span class="caption-subject font-dark sbold uppercase"> Order #<?php echo $orders_data[0]->order_number ? $orders_data[0]->order_number : ''; ?>
                            <span class="hidden-xs">| <?php $date = new DateTime($orders_data[0]->order_date);
echo $orders_data[0]->order_date ? date_format($date, 'F jS,  Y g:ia ') : '';
?> </span>
                        </span>
                    </div>

                </div>
                <div class="portlet-body">


                    <div class="tab-content">
                        <div class="tab-pane active" id="tab_1">
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <div class="portlet yellow-crusta box">
                                        <div class="portlet-title">
                                            <div class="caption">
                                                <i class="fa fa-cogs"></i>Order Details </div>
                                            <div class="actions">

                                            </div>
                                        </div>
                                        <div class="portlet-body">
                                            <div class="row static-info">
                                                <div class="col-md-5 name"> Order #: </div>
                                                <div class="col-md-7 value"> <?php echo $orders_data[0]->order_number ? $orders_data[0]->order_number : ''; ?>
                                                    <span class="label label-info label-sm"> Email confirmation was sent </span>
                                                </div>
                                            </div>
                                            <div class="row static-info">
                                                <div class="col-md-5 name"> Order Date & Time: </div>
                                                <div class="col-md-7 value"> <?php echo $orders_data[0]->order_date ? date_format($date, 'F jS,  Y g:ia ') : ''; ?>  </div>
                                            </div>
                                            <div class="row static-info">
                                                <div class="col-md-5 name"> Tracking ID </div>
                                                <div class="col-md-7 value">
                                                    <?php echo $orders_data[0]->tracking_id ? $orders_data[0]->tracking_id : ''; ?>
                                                </div>
                                            </div>
                                            <div class="row static-info">
                                                <div class="col-md-5 name"> Grand Total: </div>
                                                <div class="col-md-7 value"> Rs. <?php echo $orders_data[0]->grant_total?(($orders_data[0]->grant_total + $orders_data[0]->gst)-$orders_data[0]->coupon_value): ''; ?> </div>
                                            </div>
                                            <!-- <div class="row static-info">
                                                 <div class="col-md-5 name"> Payment Information: </div>
                                                 <div class="col-md-7 value"> <?php //echo "COD";  ?> </div>
                                             </div>-->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="portlet blue-hoki box">
                                        <div class="portlet-title">
                                            <div class="caption">
                                                <i class="fa fa-cogs"></i>Customer Information </div>
                                            <div class="actions">

                                            </div>
                                        </div>
                                        <div class="portlet-body">
                                            <div class="row static-info">
                                                <div class="col-md-5 name"> Customer Name: </div>
                                                <div class="col-md-7 value"> <?php echo $orders_data[0]->firstname ? $orders_data[0]->firstname . " " . $orders_data[0]->lastname : ''; ?> </div>
                                            </div>
                                            <div class="row static-info">
                                                <div class="col-md-5 name"> Email: </div>
                                                <div class="col-md-7 value"> <?php echo $orders_data[0]->email ? $orders_data[0]->email : ''; ?> </div>
                                            </div>
                                            <div class="row static-info">
                                                <div class="col-md-5 name"> Phone Number: </div>
                                                <div class="col-md-7 value"> <?php echo $orders_data[0]->phone ? $orders_data[0]->phone : ''; ?> </div>
                                            </div>
                                            <div class="row static-info">
                                                <div class="col-md-5 name">Address: </div>
                                                <div class="col-md-7 value"> #<?php echo $orders_data[0]->hno ? $orders_data[0]->hno : ''; ?> <?php echo $orders_data[0]->address1 ? $orders_data[0]->address1 : ''; ?>
                                                    <?php echo $orders_data[0]->address2 ? "<br>" . $orders_data[0]->address2 : ''; ?>
                                                    <br> <?php echo $orders_data[0]->city ? $orders_data[0]->city : ''; ?>
<?php echo $orders_data[0]->state ? $orders_data[0]->state : ''; ?>, <?php echo $orders_data[0]->pin ? $orders_data[0]->pin : ''; ?>
                                                    <br> <?php echo $orders_data[0]->country ? $orders_data[0]->country : ''; ?> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <div class="portlet green-meadow box">
                                        <div class="portlet-title">
                                            <div class="caption">
                                                <i class="fa fa-cogs"></i>Customer Address </div>
                                            <div class="actions">

                                            </div>
                                        </div>
                                        <div class="portlet-body">
                                            <div class="row static-info">
                                                <div class="col-md-12 value">
                                                    <?php echo $orders_data[0]->hno ? $orders_data[0]->hno : ''; ?> <?php echo $orders_data[0]->address1 ? $orders_data[0]->address1 : ''; ?>
                                                    <?php echo $orders_data[0]->address2 ? "<br>" . $orders_data[0]->address2 : ''; ?>
                                                    <br> <?php echo $orders_data[0]->city ? $orders_data[0]->city : ''; ?>
<?php echo $orders_data[0]->state ? $orders_data[0]->state : ''; ?>, <?php echo $orders_data[0]->pin ? $orders_data[0]->pin : ''; ?>
                                                    <br> <?php echo $orders_data[0]->country ? $orders_data[0]->country : ''; ?>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="portlet red-sunglo box">
                                        <div class="portlet-title">
                                            <div class="caption">
                                                <i class="fa fa-cogs"></i>Shipment Pickup Location(For Delivery Partner).</div>
                                            <div class="actions">

                                            </div>
                                        </div>
                                        <div class="portlet-body">
                                            <div class="row static-info">
                                                <div class="col-md-12 value">
<?php if (isset($orders_data[0]->pickup_location_id) && ($orders_data[0]->pickup_location_id === '0')) { ?>
                                                        <select name="pickupaddress" id="pickupaddress" style="max-width: 203px;">
                                                            <option>Select Pickup Address</option>
                                                            <?php foreach ($pickuplocations as $value) { ?>
                                                                <option value="<?php echo $value->id ? $value->id : ''; ?>"><?php echo $value->pickup_loc_name . "," . $value->address1 . "," . $value->address2 . "," . $value->city . "," . $value->country . "," . $value->pincode ?></option>
    <?php } ?>
                                                        </select>
                                                        <div class="pickup_info">
                                                            <br>
                                                        </div>
<?php } else { ?>
                                                        <br>

                                                        <div class="pickup_info_details">
                                                            <?php echo $orders_data[0]->pickup_loc_name ? $orders_data[0]->pickup_loc_name : ''; ?>,
                                                            <?php echo $orders_data[0]->pladd1 ? $orders_data[0]->pladd1 : ''; ?>,

                                                            <?php echo $orders_data[0]->pladd2 ? "<br>" . $orders_data[0]->pladd2 : ''; ?>,
                                                            <br> <?php echo $orders_data[0]->plcity ? $orders_data[0]->plcity : ''; ?>
    <?php echo $orders_data[0]->plstate_name ? $orders_data[0]->plstate_name : ''; ?>, <?php echo $orders_data[0]->plpin ? $orders_data[0]->plpin : ''; ?>
                                                            <br> <?php echo $orders_data[0]->plcntry ? $orders_data[0]->plcntry : ''; ?>
                                                        </div>
<?php } ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <div class="portlet grey-cascade box">
                                        <div class="portlet-title">
                                            <div class="caption">
                                                <i class="fa fa-cogs"></i>Shopping Cart </div>
                                            <div class="actions">

                                            </div>
                                        </div>
                                        <div class="portlet-body">
                                            <div class="table-responsive">
                                                <table class="table table-hover table-bordered table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th> Product </th>
                                                            <th> Item Status </th>

                                                            <th> Quantity </th>
                                                            <th> Price </th>

                                                            <th> Total </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        //print_r($orders_data);
                                                        if (isset($orders_data[0]->prod_array)) {
                                                            $products_val_rows = explode(';', $orders_data[0]->prod_array);
                                                            foreach ($products_val_rows as $single_row) {
                                                                $single_row1 = explode(',', $single_row);
                                                                // echo "<pre>";print_r($single_row1);
                                                                ?>
                                                                <tr>
                                                                    <td>
                                                                        <?php echo $single_row1 ? $single_row1[0] . "" : ''; ?>
                                                                        <br>
                                                                        <?php
                                                                        foreach ($attributes_data as $atr_data) {
                                                                            //    echo $atr_data->product_id; 
                                                                            if ($single_row1[1] == $atr_data->product_id) {
                                                                                ?>
                                                                                <i style="font-size: 12px;"> 
                                                                                    <b><?php echo $atr_data->attribute_type ? $atr_data->attribute_type : ''; ?> </b>: <?php echo $atr_data->name ? $atr_data->name : '';
                                                                    echo ",";
                                                                    ?> 
                                                                                </i>
            <?php }
        }
        ?>
                                                                        <b>Sold By:</b><?php echo $single_row1 ? $single_row1[4] : ''; ?>
                                                                    </td>
                                                                    <td>
                                                                        <span class="label label-sm label-success"> Available </td>
                                                                    <td> <?php echo $single_row1 ? $single_row1[3] : ''; ?></td>

                                                                    <td>Rs.<?php echo $single_row1 ? ($single_row1[6]/$single_row1[3]): ''; ?> </td>

                                                                    <td>Rs.<?php echo $single_row1 ? ($single_row1[6]) : ''; ?></td>
                                                                </tr>
                                                                <?php
                                                            }
                                                        }
                                                        ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6"> </div>
                                <div class="col-md-6">
                                    <div class="well">
                                        <div class="row static-info align-reverse">
                                            <div class="col-md-8 name"> Sub Total: </div>
                                            <div class="col-md-3 value"> Rs.<?php echo $orders_data[0]->grant_total ? $orders_data[0]->grant_total : ''; ?> </div>
                                        </div>
                                             <div class="row static-info align-reverse">
                                            <div class="col-md-8 name"> Shipping: </div>
                                            <div class="col-md-3 value"> Rs. <?php echo $orders_data[0]->delivery_cost ? $orders_data[0]->delivery_cost : 0; ?>  </div>
                                        </div>
                                        <div class="row static-info align-reverse">
                                            <div class="col-md-8 name"> Handling: </div>
                                            <div class="col-md-3 value"> Rs. <?php echo $orders_data[0]->handling_cost ? $orders_data[0]->handling_cost : 0; ?>  </div>
                                        </div> 
                                        <div class="row static-info align-reverse">
                                            <div class="col-md-8 name"> Tax: <small>(Product GST + Shipping GST +Handling GST)</small></div>
                                            <div class="col-md-3 value"> Rs.<?php echo $orders_data[0]->gst ? $orders_data[0]->gst : 0; ?>  </div>
                                        </div>
                                         <div class="row static-info align-reverse">
                                            <div class="col-md-8 name"> Evmax Discount:</div>
                                            <div class="col-md-3 value"> Rs.<?php echo $orders_data[0]->coupon_value ?(int)$orders_data[0]->coupon_value: 0; ?>  </div>
                                        </div>
                                   
                                       <div class="row static-info align-reverse">
                                            <div class="col-md-8 name"> Grand Total: </div>
                                            <div class="col-md-3 value"> Rs.<?php echo $orders_data[0]->grant_total?(($orders_data[0]->grant_total + $orders_data[0]->gst)-$orders_data[0]->coupon_value): ''; ?>  </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
            <!-- End: life time stats -->
        </div>
    </div>
</div>
<!-- END CONTENT BODY -->
<?php //echo "<pre>";print_r($orders_data[0]);   ?>
<script>
    $(document).ready(function () {
        $(".pickup_info").hide();
        $('body').on('click', '#confirm', function () {
            var id = $('#pickupaddress option:selected').val();
            var order_id = <?php echo $orders_data[0]->order_id; ?>;
            var answer = confirm('Are you sure you want to make ' + $('#pickupaddress option:selected').text() + ' as pickup location?');

            if (answer)
            {
                $.ajax({
                    type: "POST",
                    url: "<?= base_url(); ?>admin/Ajax/updatePickupLocation",
                    data: {'id': id, 'order_id': order_id},
                    success: function (response) {
                        //alert(response);
                        if (response) {
                            location.reload();

                        } else {
                            // $('#brand_id').html('<option value=""></option>');
                        }
                    }
                });
            } else
            {
                alert('You are canceled the operation');
            }
        });
    });
    $('#pickupaddress').change(
            function () {
                $(".pickup_info").show();
                var id = $('#pickupaddress option:selected').val();
                // alert(id);
                $.ajax({
                    type: "POST",
                    url: "<?= base_url(); ?>admin/Ajax/getPickupLocations",
                    data: {'id': id},
                    success: function (response) {
                        // alert(response);
                        if (response) {
                            $('.pickup_info').html(response);

                        } else {
                            // $('#brand_id').html('<option value=""></option>');
                        }
                    }
                });

            }
    );

</script>