<!DOCTYPE html>
<html>
    <head>
        <title>Order Confirmation</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="refresh" content="0;url=<?php echo base_url() ?>" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <script src="<?php echo base_url() ?>assets/frontend/js/jquery-min.js"></script> 
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.debug.js"></script> 
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.js"></script> 
        <style type="text/css">
            /* CLIENT-SPECIFIC STYLES */
            body, table, td, a { -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; }
            table, td { mso-table-lspace: 0pt; mso-table-rspace: 0pt; }
            img { -ms-interpolation-mode: bicubic; }

            /* RESET STYLES */
            img { border: 0; height: auto; line-height: 100%; outline: none; text-decoration: none; }
            table { border-collapse: collapse !important; }
            body { height: 100% !important; margin: 0 !important; padding: 0 !important; width: 100% !important; }

            /* iOS BLUE LINKS */
            a[x-apple-data-detectors] {
                color: inherit !important;
                text-decoration: none !important;
                font-size: inherit !important;
                font-family: inherit !important;
                font-weight: inherit !important;
                line-height: inherit !important;
            }
            p{
                font-size: 14px;
                font-weight: 400;
                line-height: 11px;
            }

            /* MEDIA QUERIES */
            @media screen and (max-width: 480px) {
                .mobile-hide {
                    display: none !important;
                }
                .mobile-center {
                    text-align: center !important;
                }
            }

            /* ANDROID CENTER FIX */
            div[style*="margin: 16px 0;"] { margin: 0 !important; }
        </style>
    <body style="margin: 0 !important; padding: 0 !important; background-color: #eeeeee;" bgcolor="#eeeeee">
        <div id="content">
            <!-- HIDDEN PREHEADER TEXT -->


            <table border="0" cellpadding="0" cellspacing="0" width="100%">

                <tr>
                    <td align="center" style="background-color: #eeeeee;" bgcolor="#eeeeee">
                        <!--[if (gte mso 9)|(IE)]>
                        <table align="center" border="0" cellspacing="0" cellpadding="0" width="600">
                        <tr>
                        <td align="center" valign="top" width="600">
                        <![endif]-->
                        <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:1300px;">
                            <tr>
                                <td align="center" valign="top" style="font-size:0;     padding: 0px 15px;" bgcolor="#f8a50c">
                                    <!--[if (gte mso 9)|(IE)]>
                                    <table align="center" border="0" cellspacing="0" cellpadding="0" width="600">
                                    <tr>
                                    <td align="left" valign="top" width="300">
                                    <![endif]-->

                                    <div style="display:inline-block; max-width:100%; vertical-align:top; width:100%; ">
                                        <table align="left" border="0" cellpadding="0" cellspacing="0" width="100%" style="">
                                            <tr>
                                                <td align="left" valign="top" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 30px; font-weight: 800; line-height: 48px;" class="mobile-center">
                                                    <h1 style="font-size: 14px; font-weight: 600; margin: 0; color: #ffffff;">Order Summary# <?php echo $orders_data[0]->order_number ? $orders_data[0]->order_number : ''; ?> &nbsp;&nbsp;&nbsp;&nbsp; Status: Waiting for your confirmation</h1>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>

                                </td>
                            </tr>
                        </table>



                        <!--[if (gte mso 9)|(IE)]>
                        </td>
                        </tr>
                        </table>
                        <![endif]-->
                    </td>
                </tr>

            </table>

            <table border="0" cellpadding="0" cellspacing="0" width="100%">

                <tr>
                    <td align="center" style="background-color: #eeeeee;" bgcolor="#eeeeee">
                        <!--[if (gte mso 9)|(IE)]>
                        <table align="center" border="0" cellspacing="0" cellpadding="0" width="600">
                        <tr>
                        <td align="center" valign="top" width="600">
                        <![endif]-->
                        <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:1300px;margin: 5px 7px;">
                            <tr>
                                <td align="center" valign="top" style="font-size:0;     padding: 0px 15px;" bgcolor="#fff">
                                    <!--[if (gte mso 9)|(IE)]>
                                    <table align="center" border="0" cellspacing="0" cellpadding="0" width="600">
                                    <tr>
                                    <td align="left" valign="top" width="300">
                                    <![endif]-->

                                    <div style="display:inline-block; max-width:100%; min-width:100px; vertical-align:top; width:100%; ">
                                        <table align="left" border="0" cellpadding="0" cellspacing="0" width="100%" style="">
                                            <tr >
                                                <td align="left" valign="top" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 30px; font-weight: 800; line-height: 48px;" class="mobile-center">
                                                    <h1 style="font-size: 14px; font-weight: 600; margin: 0; color: #ffffff;">
                                                        <img src="http://www.evmax.in/assets/frontend/img/evlogo.png" style="    width: 165px;">
                                                    </h1>
                                                    <div style="font-size: 18px; font-weight: 400; line-height: 27px; color: #777777;max-width: 100%; text-align: center; ">Dear Merchant! Here are order details:</div>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>

                                </td>
                            </tr>

                            <tr>
                                <td align="center" height="100%" valign="top" width="100%" style="padding: 0 35px 20px 35px; background-color: #fff;" bgcolor="#ffffff">
                                    <!--[if (gte mso 9)|(IE)]>
                                    <table align="center" border="0" cellspacing="0" cellpadding="0" width="600">
                                    <tr>
                                    <td align="center" valign="top" width="600">
                                    <![endif]-->
                                    <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:1160px;">
                                        <tr >
                                            <td align="center" valign="top" style="font-size:0;">
                                                <!--[if (gte mso 9)|(IE)]>
                                                <table align="center" border="0" cellspacing="0" cellpadding="0" width="600">
                                                <tr>
                                                <td align="left" valign="top" width="300">
                                                <![endif]-->
                                                <div style="display:inline-block; max-width:50%; min-width:240px; vertical-align:top; width:100%;">

                                                    <table align="left" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:300px;">

                                                        <tr>
                                                            <td align="left" valign="top" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px;padding: 15px 0px">

                                                                <div style="font-weight: 600;background-color: #fff;    padding: 0px 10px;    border: 2px solid #ebebeb;">
                                                                    <p >Order Details :</p>
                                                                    <p>Order # <?php echo $orders_data[0]->order_number ? $orders_data[0]->order_number : ''; ?></p>
                                                                    <p>Order Placed on: <?php echo $orders_data[0]->order_date ? $orders_data[0]->order_date : ''; ?></p>
                                                                </div>

                                                            </td>
                                                        </tr>
                                                    </table>
                                                </div>
                                                <!--[if (gte mso 9)|(IE)]>
                                                </td>
                                                <td align="left" valign="top" width="300">
                                                <![endif]-->
                                                <div style="display:inline-block; max-width:50%; min-width:240px; vertical-align:top; width:100%;">
                                                    <table align="left" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:300px;">
                                                        <tr>
                                                            <td align="left" valign="top" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px;">
                                                                <div style="font-weight: 600;background-color: #fff;        padding: 0px 16px;border: 2px solid #ebebeb;    margin-left: 7px;margin-top: 16px;">
                                                                    <p >Delivery To:</p>
                                                                    <p><?php echo $orders_data[0]->firstname ? $orders_data[0]->firstname . " " . $orders_data[0]->lastname : ''; ?>
                                                                        <br><br> #<?php echo $orders_data[0]->hno ? $orders_data[0]->hno : ''; ?> <?php echo $orders_data[0]->address1 ? $orders_data[0]->address1 : ''; ?>
                                                                        <br><?php echo $orders_data[0]->address2 ? "<br>" . $orders_data[0]->address2 : ''; ?>
                                                                        <br><br> <?php echo $orders_data[0]->city ? $orders_data[0]->city : ''; ?>
                                                                        <?php echo $orders_data[0]->state ? $orders_data[0]->state : ''; ?>, <?php echo $orders_data[0]->pin ? $orders_data[0]->pin : ''; ?>
                                                                        <br> <br><?php echo $orders_data[0]->country ? $orders_data[0]->country : ''; ?>
                                                                        <br> <br>T: <?php echo $orders_data[0]->phone ? $orders_data[0]->phone : ''; ?></p>
                                                                </div>


                                                            </td>
                                                        </tr>
                                                    </table>
                                                </div>

                                                <!--[if (gte mso 9)|(IE)]>
                                                </td>
                                                </tr>
                                                </table>
                                                <![endif]-->
                                            </td>
                                        </tr>
                                    </table>
                                    <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:1160px;">
                                        <tr >
                                            <td align="center" valign="top" style="font-size:0;">
                                                <!--[if (gte mso 9)|(IE)]>
                                                <table align="center" border="0" cellspacing="0" cellpadding="0" width="600">
                                                <tr>
                                                <td align="left" valign="top" width="300">
                                                <![endif]-->
                                                <div style="display:inline-block; max-width:50%; min-width:240px; vertical-align:top; width:100%;">

                                                    <table align="left" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:300px;">

                                                        <tr>
                                                            <td width="15%" align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;    border: 1px solid #ebebeb;">
                                                                <p>Customer Details:</p>
                                                                <p><?php echo $orders_data[0]->firstname ? $orders_data[0]->firstname . " " . $orders_data[0]->lastname : ''; ?>
                                                                    <br><br> #<?php echo $orders_data[0]->hno ? $orders_data[0]->hno : ''; ?> <?php echo $orders_data[0]->address1 ? $orders_data[0]->address1 : ''; ?>
                                                                    <br><?php echo $orders_data[0]->address2 ? "<br>" . $orders_data[0]->address2 : ''; ?>
                                                                    <br><br> <?php echo $orders_data[0]->city ? $orders_data[0]->city : ''; ?>
                                                                    <?php echo $orders_data[0]->state ? $orders_data[0]->state : ''; ?>, <?php echo $orders_data[0]->pin ? $orders_data[0]->pin : ''; ?>
                                                                    <br> <br><?php echo $orders_data[0]->country ? $orders_data[0]->country : ''; ?>
                                                                    <br> <br>T: <?php echo $orders_data[0]->phone ? $orders_data[0]->phone : ''; ?></p>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </div>
                                                <!--[if (gte mso 9)|(IE)]>
                                                </td>
                                                <td align="left" valign="top" width="300">
                                                <![endif]-->
                                                <div style="display:inline-block; max-width:50%; min-width:240px; vertical-align:top; width:100%;">

                                                </div>

                                                <!--[if (gte mso 9)|(IE)]>
                                                </td>
                                                </tr>
                                                </table>
                                                <![endif]-->
                                            </td>
                                        </tr>
                                    </table>
                                    <!--[if (gte mso 9)|(IE)]>
                                    </td>
                                    </tr>
                                    </table>
                                    <![endif]-->
                                </td>
                            </tr>

                            <tr style="background-color: #fff;">
                                <td align="left" style="padding: 0px 32px;">
                                    <table cellspacing="0" cellpadding="0" border="0" width="100%" style="    border: 1px solid #000;" >
                                        <tr style="">
                                            <td width="15%" align="left" bgcolor="#3051a0" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 800; line-height: 40px; color: #fff;padding: 1px 10px; ">
                                                Item Name
                                            </td>
                                            <td width="15%" align="left" bgcolor="#3051a0" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 800; line-height: 24px; color: #fff;">
                                                Quantity
                                            </td>
                                            <td width="15%" align="left" bgcolor="#3051a0" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 800; line-height: 24px; color: #fff;">
                                                Price
                                            </td>
                                            <td width="15%" align="left" bgcolor="#3051a0" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 800; line-height: 24px; color: #fff;">
                                                GST/IGST
                                            </td>
                                            
                                            <td width="20%" align="left" bgcolor="#3051a0" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 800; line-height: 24px; color: #fff;">
                                                Total
                                            </td>
                                        </tr>


                                        <tr>
                                            <td width="25%" align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 15px 10px 5px 10px;">


                                            </td>
                                            <td width="15%" align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 15px 10px 5px 10px;">

                                            </td>
                                        </tr>

                                        <!-- products end -->
                                        <?php
                                        $total = 0;
                                        $coupon_value = 0;
                                        $delivery_cost = 0;
                                        $delivery_gst = 0;
                                        $handling_cost = 0;
                                        $handling_gst = 0;
                                        if(isset($orders_data[0]->prod_array)) {
                                            $products_val_rows = explode(';', $orders_data[0]->prod_array);
                                            foreach ($products_val_rows as $single_row) {
                                                $single_row1 = explode(',', $single_row);
                                                $coupon_value += ($single_row1[5]) * $single_row1[3];
                                                $delivery_cost += $single_row1[7];
                                                $handling_cost += $single_row1[8];
                                                $delivery_gst += $single_row1[10];
                                                $handling_gst += $single_row1[9];
                                                ?>
                                                <tr style="    border-bottom: 1px solid #000;">
                                                    <td width="15%" align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;">
                                                <?php echo $single_row1 ? $single_row1[0] . "" : ''; ?>
                                                    </td>
                                                    <td width="15%" align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;">
                                                        <?php echo $single_row1 ? $single_row1[3] : ''; ?>
                                                    </td>
                                                    <td width="15%" align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;">
                                                        &#8377; <?php
                                                echo $single_row1 ? (int)($single_row1[6]) : '';
                                                $total += ($single_row1[6]);
                                                ?>
                                                    </td>
                                                    <td width="15%" align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;">
                                                        <?php echo ($single_row1[11]>0)?"&#8377;".($single_row1[11]* $single_row1[3]):''; ?>
                                                    </td>
                                                    
                                                    <td width="30%" align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;">
                                                       <?php echo "&#8377;".(int)($single_row1[6]+$single_row1[11]); ?>
                                                    </td>
                                                </tr> 
    <?php
    } // $cart_session['product_id']
}//if($cart_session)
?>
                                        

                                        <tr >
                                            <td width="15%" align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;">
                                                   
                                            </td>
                                            <td width="20%" align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 12px; font-weight: 400; line-height: 24px; padding: 0px 0px;">

                                            </td>
                                            <td width="15%" align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;">
                                                <?php echo ($delivery_cost>0)?"&#8377;".$delivery_cost: ''; ?>
                                            </td>
                                                  <td width="15%" align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 12px; font-weight: 400; line-height: 24px; padding: 0px 0px;">
 <?php echo ($delivery_gst>0)?"&#8377;".($delivery_gst): ''; ?>
                                            </td>
                                                           
                                                           <td width="15" align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 12px; font-weight: 400; line-height: 24px; padding: 0px 0px;">
  <?php echo ($delivery_cost>0)? "&#8377;".($delivery_cost+$delivery_gst): ''; ?>
                                            </td>
                                        </tr> 
                                        <tr >
                                            <td width="15%" align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;">
                                               
                                            </td>
                                            <td width="20%" align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 12px; font-weight: 400; line-height: 24px; padding: 0px 0px;">

                                            </td>
                                            <td width="15%" align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;">
                                                <?php echo ($handling_cost>0)?"&#8377;".$handling_cost: ''; ?>
                                            </td>
                                                  <td width="15%" align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 12px; font-weight: 400; line-height: 24px; padding: 0px 0px;">
  <?php echo $handling_gst?"&#8377;".($handling_gst): ''; ?>
                                            </td>
                                                         
                                                           <td width="15" align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 12px; font-weight: 400; line-height: 24px; padding: 0px 0px;">
  <?php echo ($handling_gst>0)?"&#8377;".($handling_cost+$handling_gst): ''; ?>
                                            </td>
                                        </tr> 
                                       
                                        <tr style="border-bottom: 1px solid #000;">
                                            <td width="15%" align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;">
                                                
                                                 <?php echo ($coupon_value>0)?"Evmax Discount": ''; ?>
                                            </td>
                                            <td width="20%" align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 12px; font-weight: 400; line-height: 24px; padding: 0px 0px;">
                                                <!-- Promo Code # A001 (10% Discount) -->
                                            </td>
                                            <td width="15%" align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;">
                                              <?php echo ($coupon_value>0)?"(-&#8377;".$coupon_value.")":''; ?>
                                            </td>
                                                  <td width="15%" align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 12px; font-weight: 400; line-height: 24px; padding: 0px 0px;">

                                            </td>
                                                           <td width="20%" align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 12px; font-weight: 400; line-height: 24px; padding: 0px 0px;">

                                            </td>
                                                           <td width="15" align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 12px; font-weight: 400; line-height: 24px; padding: 0px 0px;">

                                            </td>
                                        </tr> 
                                    </table>
                                </td>
                            </tr>
                            <tr style="background-color:#fff;">
                                <td align="left" style="padding: 0px 32px;">
                                    <table cellspacing="0" cellpadding="0" border="0" width="100%">
                                        <tr>
                                             <td width="15%" align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;">
                                           Grand Total 

                                            </td>
                                            <td width="20%" align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 12px; font-weight: 400; line-height: 24px; padding: 0px 0px;">
                                                <!-- Promo Code # A001 (10% Discount) -->
                                            </td>
                                            <td width="15%" align="right" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;">
                                                &#8377; <?php echo $orders_data[0]->grant_total?(($orders_data[0]->grant_total) - $coupon_value):''; ?>
                                            </td>
                                                  <td width="15%" align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 12px; font-weight: 400; line-height: 24px; padding: 0px 0px;">

                                            </td>
                                                           <td width="20%" align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 12px; font-weight: 400; line-height: 24px; padding: 0px 0px;">

                                            </td>
                                                   
                                          
                                            <td width="15%" align="right" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 800; line-height: 24px; padding: 13px 0px; border-top: 3px solid #eeeeee; border-bottom: 3px solid #eeeeee;">
                                                &#8377; <?php echo $orders_data[0]->grant_total?(($orders_data[0]->grant_total+$orders_data[0]->gst) - $coupon_value):''; ?>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>

                            <table cellspacing="0" cellpadding="0" border="0" width="1160px" style="    border: 0px solid #000;" >


                            </table>

                            <div style="max-width: 1260px; line-height: 23px; padding: 18px 16px;    background-color: #fff; margin-bottom: 16px;">
                                <h3 style="float: left; margin: 0px !important; padding: 7px 0px;" >Special Instructions:</h3>
                                </br></br>
                                <span style=" max-width: 1160px;    padding: 7px 11px;    ">
                                    <div style="float: left;margin: 0px !important;">1. Please confirm and update Delivery Date</div></br>
                                    <div style="float: left;margin: 0px !important;">2. Pack product and update “ Ready For Pickup” on Delivery and Shipment</div></br>
                                    <div style="float: left;margin: 0px !important;">3. Other Terms and conditions applied.</div></br>
                                    <!--<div style="float: left;margin: 0px !important;">4. This order is qualified for promotion code : A001</div></br>-->
                                </span>
                            </div>


                        </table>





                        <!--[if (gte mso 9)|(IE)]>
                        </td>
                        </tr>
                        </table>
                        <![endif]-->
                    </td>
                </tr>
            </table>


        </div>

    </body>
</html>
<script type="text/javascript">
    // A $( document ).ready() block.
    $(document).ready(function () {
        // $("#content").show();
        var options = {
        };
        var pdf = new jsPDF('p', 'pt', '');
        pdf.addHTML($("#content"), 0, 0, options, function () {
           pdf.save('order_summary.pdf');
        });
        //$("#content").hide();
    });
</script>