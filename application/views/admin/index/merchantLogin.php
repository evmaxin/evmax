<!DOCTYPE html>
<!-- 
Template Name: Metronic
Version: 1.0
Author: nagender
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
       <title><?php echo $this->config->item('admin_title'); ?></title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="Preview page of Admin" name="description" />
        <meta content="Nagender" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url() ?>assets/admin/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url() ?>assets/admin/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url() ?>assets/admin/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url() ?>assets/admin/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="<?php echo base_url() ?>assets/admin/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url() ?>assets/admin/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="<?php echo base_url() ?>assets/admin/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="<?php echo base_url() ?>assets/admin/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN PAGE LEVEL STYLES -->
        <link href="<?php echo base_url() ?>assets/admin/pages/css/login-5.min.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" /> 
        <style>
    .user-login-5 .login-container>.login-content {
    margin-top: 18% !important;
}
.bg {
background: url("<?php echo base_url() ?>assets/admin/custom_images/merchanglogin.png") no-repeat center center fixed;
background-size: 100% 113%;
height: 100%;
position: absolute; 
width: 100%;
}
.user-login-5 .login-container{
    float: right;
}
.user-login-5 .login-container>.login-content>.login-form .form-control {
    width: 51%;
    padding: 10px 0;
    border: #a0a9b4;
    border-bottom: 1px solid;
    color: #868e97;
    font-size: 14px;
    margin-bottom: 30px;
    border: 1px solid;
    border-radius: 0!important;
    float: right;
}
.row{
    margin-right: 26px !important;
}
        </style>
    </head>
    <!-- END HEAD -->

    <body class=" login bg">
        <!-- BEGIN : LOGIN PAGE 5-1 -->
        <div class="user-login-5">
            <div class="row bs-reset">
           
                <div class="col-md-6 login-container bs-reset mt-login-5-bsfix">
                    <div class="login-content">
                        <form action="<?php echo base_url() ?>admin/index/authenticate" class="login-form" method="post">
                            <?php if($this->session->flashdata('fail')) { ?> <div class="alert alert-danger"> <?php echo $this->session->flashdata('fail'); ?></div> <?php } ?>
                            <div class="alert alert-danger display-hide">
                                 
                                <button class="close" data-close="alert"></button>
                                <span>Enter Correct username and password. </span>
                            </div>
                             <?php if(isset($_REQUEST['q'])&&($_REQUEST['q']==="success")){ ?> 
              <div class="alert alert-success alert-dismissable"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
              <?php  echo $_REQUEST['msg'];?>
          </div>
          <?php } ?>
                            <div class="row">
                                <div class="col-xs-12 col-md-6 col-lg-12 col-sm-12">
                                    <input class="form-control form-control-solid placeholder-no-fix form-group" type="text" autocomplete="off" placeholder="Email" name="username" pattern="[^@]+@[^@]+\.[a-zA-Z]{2,6}" minlength="10" maxlength="45" required title="Minimum 10 and max 45 characters allowed"/> </div>
                                <div class="col-xs-12 col-md-6 col-lg-12 col-sm-12">
                                    <input class="form-control form-control-solid placeholder-no-fix form-group" type="password" autocomplete="off" placeholder="Password" name="password" pattern=".{4,20}" required title="4 to 20 characters"/> </div>
                            </div>
                            <div class="row">
                             
                                <div class="col-sm-8 text-right" style="float: right;">
                                  <div class="forgot-password">
                                        <a href="javascript:;" id="forget-password" class="forget-password" data-toggle="modal" data-target="#myModal">Forgot Password?</a>
                                    </div>
                                    <button class="btn green" type="submit">Sign In</button>
                                </div>
                            </div>
                        </form>
                        <div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
        <form action="<?php echo base_url() ?>admin/Index/forgotPassword" method="post">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Input your email here, you will get password to your email</h4>
      </div>
      <div class="modal-body">
          <input type="text" name="email" id="email" class="form-control" style="width: 50%;">
          <input type="submit" name="sendPassword"  id="sendPassword" class="btn green" value="Send Password" style="margin: 10px 0px;">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
        </form>
    </div>

  </div>
</div>
                    </div>
                    <div class="login-footer">
                        <div class="row bs-reset">
                          
                            <div class="col-xs-7 bs-reset">
                                <div class="login-copyright text-right">
                                    <p> <?php echo $this->config->item('footer_title'); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END : LOGIN PAGE 5-1 -->
        <!--[if lt IE 9]>
<script src="<?php echo base_url() ?>assets/admin/global/plugins/respond.min.js"></script>
<script src="<?php echo base_url() ?>assets/admin/global/plugins/excanvas.min.js"></script> 
<script src="<?php echo base_url() ?>assets/admin/global/plugins/ie8.fix.min.js"></script> 
<![endif]-->
        <!-- BEGIN CORE PLUGINS -->
        <script src="<?php echo base_url() ?>assets/admin/global/plugins/jquery.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/admin/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/admin/global/plugins/js.cookie.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/admin/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/admin/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/admin/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="<?php echo base_url() ?>assets/admin/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/admin/global/plugins/jquery-validation/js/additional-methods.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/admin/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/admin/global/plugins/backstretch/jquery.backstretch.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <!--<script src="<?php echo base_url() ?>assets/admin/global/scripts/app.min.js" type="text/javascript"></script>-->
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <!--<script src="<?php echo base_url() ?>assets/admin/pages/scripts/login-5.min.js" type="text/javascript"></script>-->
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <!-- END THEME LAYOUT SCRIPTS -->
       
    </body>

</html>