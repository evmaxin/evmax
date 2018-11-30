<!DOCTYPE html>
<html>
<head>
<title>Customer Order</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
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




<table border="0" cellpadding="0" cellspacing="0" width="100%">
    
    <tr>
        <td align="center" style="background-color: #eeeeee;" bgcolor="#eeeeee">
        <!--[if (gte mso 9)|(IE)]>
        <table align="center" border="0" cellspacing="0" cellpadding="0" width="600">
        <tr>
        <td align="center" valign="top" width="600">
        <![endif]-->
        <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:600px;margin: 5px 7px;">
            <tr>
                <td align="center" valign="top" style="font-size:0; padding: 14px;" bgcolor="#3051a0">
                <!--[if (gte mso 9)|(IE)]>
                <table align="center" border="0" cellspacing="0" cellpadding="0" width="600">
                <tr>
                <td align="left" valign="top" width="300">
                <![endif]-->

                <div style="display:inline-block; max-width:100%; min-width:100px; vertical-align:top; width:100%; ">
                    <table align="left" border="0" cellpadding="0" cellspacing="0" width="100%" style="">
                        <tr>
                            <td align="left" valign="top" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 30px; font-weight: 800; line-height: 48px;" class="mobile-center">
                                <h1 style="font-size: 36px; font-weight: 800; margin: 0; color: #ffffff; text-align: center;"><?php echo $this->config->item('admin_title');?></h1>
                            </td>
                        </tr>
                    </table>
                </div>
                
                </td>
            </tr>
        </table>
        <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:600px;">
            <tr>
                <td align="center" style="padding: 7px 26px 0px 35px; background-color: #57b952;" bgcolor="#ffffff">
                <!--[if (gte mso 9)|(IE)]>
                <table align="center" border="0" cellspacing="0" cellpadding="0" width="600">
                <tr>
                <td align="center" valign="top" width="600">
                <![endif]-->
                <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:600px;">
                     
                    <tr>
                        <td align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px;">
                            <p style="font-size: 16px; font-weight: 400; line-height: 24px; color: #fff;">
                                Dear Merchant,

                            </p>
                            <p style="font-size: 16px; font-weight: 400; line-height: 24px; color: #fff;">
                                You have received an order.
                                
                            </p>
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
        <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:600px;">
            <tr>
                <td align="center" height="100%" valign="top" width="100%" style="padding: 0 35px 20px 35px; background-color: #57b952;" bgcolor="#ffffff">
                <!--[if (gte mso 9)|(IE)]>
                <table align="center" border="0" cellspacing="0" cellpadding="0" width="600">
                <tr>
                <td align="center" valign="top" width="600">
                <![endif]-->
                <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:660px;">
                    <tr>
                        <td align="center" valign="top" style="font-size:0;">
                            <!--[if (gte mso 9)|(IE)]>
                            <table align="center" border="0" cellspacing="0" cellpadding="0" width="600">
                            <tr>
                            <td align="left" valign="top" width="300">
                            <![endif]-->
                            <div style="display:inline-block; max-width:50%; min-width:240px; vertical-align:top; width:100%;">

                                <table align="left" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:300px;">
                                    <tr>
                                        <td align="left" valign="top" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px;padding: 0px 10px;">
                                            <p style="font-weight: 400;background-color: #eee;padding: 8px 21px;">Order # <?php echo $this->session->userdata('order_number')?$this->session->userdata('order_number'):''; ?></p>
                                            <p></p>

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
                                            <p style="font-weight: 400;background-color: #fff;padding: 8px 9px;">Customer Name: <?php echo $this->session->userdata('customer_data')?$this->session->userdata('customer_data')['username']:''; ?></p>
                                            
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div style="display:inline-block; max-width:50%; min-width:240px; vertical-align:top; width:100%;">

                                <table align="left" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:300px;">
                                    <tr>
                                        <td align="left" valign="top" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px;padding: 0px 10px;">
                                            <p style="font-weight: 800;background-color: #3051a0; color: #fff;padding: 8px 57px;"><a target="_blank" style="color:#fff;text-decoration: none;" href="<?php echo base_url() ?>admin/orders?q=confirm_orders&order_number=<?php echo $this->session->userdata('order_number')?$this->session->userdata('order_number'):''; ?>">Confirm Order</a></p>
                                            <p></p>

                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div style="display:inline-block; max-width:50%; min-width:240px; vertical-align:top; width:100%;">
                                <table align="left" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:300px;">
                                    <tr>
                                        <td align="left" valign="top" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px;">
                                            <p style="font-weight: 800;background-color: orange;padding: 8px 17px;"><a target="_blank" style="color:#000;text-decoration: none;" href="<?php echo base_url() ?>test/pdf/<?php echo $this->session->userdata('order_number')?$this->session->userdata('order_number'):'0'; ?>">Download Order Summary</a></p>
                                            
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
                <!--[if (gte mso 9)|(IE)]>
                </td>
                </tr>
                </table>
                <![endif]-->
                </td>
            </tr>
            
            
        </table>
        <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:600px;">
            <tr>
                <td align="center" height="100%" valign="top" width="100%" style="padding: 0 0px 0px 48px; background-color: yellow;" bgcolor="#ffffff">
                <!--[if (gte mso 9)|(IE)]>
                <table align="center" border="0" cellspacing="0" cellpadding="0" width="600">
                <tr>
                <td align="center" valign="top" width="600">
                <![endif]-->
                <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:660px;">
                    <tr>
                        <td align="center" valign="top" style="font-size:0;">
                            <!--[if (gte mso 9)|(IE)]>
                            <table align="center" border="0" cellspacing="0" cellpadding="0" width="600">
                            <tr>
                            <td align="left" valign="top" width="300">
                            <![endif]-->
                           <div style="display:inline-block; max-width:50%; min-width:240px; vertical-align:top; width:100%;">

                                <table align="left" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:300px;">
                                    <tr>
                                        <td align="left" valign="top" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px;">
                                            <p style="font-weight: 800;">Get Merchant App: </p>
                                                <p><img src="<?php echo base_url() ?>assets/frontend/img/android.png"></p>
                                            

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
                                            <p style="font-weight: 800;">Follow us: </p>
                                            <p><img src="<?php echo base_url() ?>assets/frontend/img/facebook.png">
                                            <img src="<?php echo base_url() ?>assets/frontend/img/twitter.png">
                                            <img src="<?php echo base_url() ?>assets/frontend/img/pinterest.png">
                                            <img src="<?php echo base_url() ?>assets/frontend/img/instagram.png">
                                            </p>
                                            
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
                <!--[if (gte mso 9)|(IE)]>
                </td>
                </tr>
                </table>
                <![endif]-->
                </td>
            </tr>
        </table>
        
        <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:600px;">
            <tr>
                <td align="center" height="100%" valign="top" width="100%" style="padding: 0 0px 0px 8px; background-color: #fff;" bgcolor="#ffffff">
                <!--[if (gte mso 9)|(IE)]>
                <table align="center" border="0" cellspacing="0" cellpadding="0" width="600">
                <tr>
                <td align="center" valign="top" width="600">
                <![endif]-->
                <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:660px;">
                    <tr>
                        <td align="center" valign="top" style="font-size:0;">
                            <!--[if (gte mso 9)|(IE)]>
                            <table align="center" border="0" cellspacing="0" cellpadding="0" width="600">
                            <tr>
                            <td align="left" valign="top" width="300">
                            <![endif]-->
                            <div style="display:inline-block; max-width:100%; min-width:240px; vertical-align:top; width:100%;">

                                <table align="left" border="0" cellpadding="0" cellspacing="0" width="100%" style="">
                                    <tr>
                                        <td align="left" valign="top" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px;">
                                            <p style="font-weight: 800;    text-align: center;">
                                            © - evmax. All rights reserved </p>
                                            <p style="    text-align: center;">Sai Teja Towers, Flat No: 503, 5th Floor, Ajay Nagar Colony, Bandlaguda, Hyderabad 500068</p>
                                                
                                            

                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <!--[if (gte mso 9)|(IE)]>
                            </td>
                            <td align="left" valign="top" width="300">
                            <![endif]-->
                            
                            
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
    <div style="font-size: 18px; font-weight: 400; line-height: 27px; color: #777777;margin: 0 auto;max-width: 44%; "></div>
    <tr>
        <td align="center" style="background-color: #eeeeee;" bgcolor="#eeeeee">
        <!--[if (gte mso 9)|(IE)]>
        <table align="center" border="0" cellspacing="0" cellpadding="0" width="600">
        <tr>
        <td align="center" valign="top" width="600">
        <![endif]-->
        <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:600px;">
            
            <tr>
                <td align="center" style="padding: 7px 26px 0px 35px; background-color: #fff;" bgcolor="#ffffff">
                <!--[if (gte mso 9)|(IE)]>
                <table align="center" border="0" cellspacing="0" cellpadding="0" width="600">
                <tr>
                <td align="center" valign="top" width="600">
                <![endif]-->
                
                <!--[if (gte mso 9)|(IE)]>
                </td>
                </tr>
                </table>
                <![endif]-->
                </td>
            </tr>
            
            <tr>
                <td align="center" height="100%" valign="top" width="100%" style="padding: 0 0px 0px 0px; background-color: #fff;" bgcolor="#ffffff">
                <!--[if (gte mso 9)|(IE)]>
                <table align="center" border="0" cellspacing="0" cellpadding="0" width="600">
                <tr>
                <td align="center" valign="top" width="600">
                <![endif]-->
                <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:660px;">
                    <tr>
                        <td align="center" valign="top" style="font-size:0;">
                            <!--[if (gte mso 9)|(IE)]>
                            <table align="center" border="0" cellspacing="0" cellpadding="0" width="600">
                            <tr>
                            <td align="left" valign="top" width="300">
                            <![endif]-->
                            <div style="display:inline-block; max-width:100%; min-width:240px; vertical-align:top; width:100%;">

                                <table align="left" border="0" cellpadding="0" cellspacing="0" width="100%" style="">
                                    <tr>
                                        <td align="left" valign="top" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px;">
                                            <p style="font-weight: 800;    text-align: center; background-color: orange;    padding: 10px 10px;"><a target="_blank" style="color:#000;text-decoration: none;" href="<?php echo base_url() ?>test/pdf/<?php echo $this->session->userdata('order_number')?$this->session->userdata('order_number'):'0'; ?>">
                                                    Download Order Summary – Refer Merchant Order Summary PDF Document</a> </p>
                                                    <p style="text-align: center; background-color: #3051a0;    padding: 10px 10px; color: #fff;"> <a target="_blank" style="color:#fff;text-decoration: none;" href="<?php echo base_url() ?>admin/orders?q=confirm_orders&order_number=<?php echo $this->session->userdata('order_number')?$this->session->userdata('order_number'):''; ?>">Confirm Order – Refer Merchant Order Confirmation</a></p>
                                                
                                            

                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <!--[if (gte mso 9)|(IE)]>
                            </td>
                            <td align="left" valign="top" width="300">
                            <![endif]-->
                            
                            
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
            
            
        </table>


        <!--[if (gte mso 9)|(IE)]>
        </td>
        </tr>
        </table>
        <![endif]-->
        </td>
    </tr>
</table>
    
</body>
</html>
