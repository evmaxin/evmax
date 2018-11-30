<!DOCTYPE html>
<html>
<head>
<title>Send  Registration Link</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<style type="text/css">

</style>
<body style="margin: 0 !important; padding: 0 !important; background-color: #fff;" bgcolor="#fff">

<center>

<div  style="padding:502px 0px;;height:auto;width:707px;background:url('<?php echo base_url();?>images/registrationEmail/sendRegistrationLink3.png') no-repeat;background-size: 100%;" >
  <h2 style="text-align:left;color: #343434;padding-left:80px;"></h2>
    <h2 style="    text-align: left;
    color: #343434;
    padding-left: 142px;
    margin-top: 58px;">

	</h2>
	<a href="<?php echo base_url()?>Registration/index?name=<?php echo $this->session->userdata('enquiry_name')?>&email=<?php echo $this->session->userdata('enquiry_email')?>" target="_blank" style="    display: block; padding: 30px;width: 100%;margin-top: -15px;" ></a>
</div>
    </center>
</body>
</html>
