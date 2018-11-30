<!DOCTYPE html>
<html>
<head>
<title>Send Approve Mail</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<style type="text/css">

</style>
<body style="margin: 0 !important; padding: 0 !important; background-color: #ccc;" bgcolor="#ccc">

<center>

<div  style="margin-top:50px;padding:512px 0px;;height:auto;width:707px;background:url('<?php echo base_url();?>images/registrationEmail/5.png') no-repeat;background-size: 100%;" >
  <h2 style="text-align:left;color: #343434;padding-left:80px;"><?php echo$this->session->userdata("register_email");?></h2>
    <h2 style="    text-align: left;
    color: #343434;
    padding-left: 142px;
    margin-top: 58px;">
	<?php echo$this->session->userdata("userPassword");?>
	</h2>
	<a href="<?php echo base_url();?>merchant/login" style="display: inline-block; padding: 30px; width: 250px; float: left;margin-left: 65px;margin-top: -15px;" ></a>
</div>
    </center>
</body>
</html>
