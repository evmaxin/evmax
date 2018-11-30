<style type="text/css">
    .reg0003{
        background-color: #57b952 !important;
    }
    .steps{
        pointer-events: none;
        cursor: default;
        text-decoration: none;
        color: black;
    }
</style>   
<!-- Header Section Start -->
<div class="header">    


</div>
<!-- Header Section End -->    

<!-- Main Slider Section -->


<div id="content">
    <div class="container">
        <div class="head-faq text-center">`
            
            
            
            <?php  if(count($otp_details)>0){ echo "<h2>OTP Verified successfully ,Registration is under proccess</h2>";}else{?> 
            <h2>OTP NOT VALID,Please Enter correct OTP </h2>
                <form action="<?php echo base_url(); ?>Registration/verifyOTP" method="post" >
                     <button class="btn btn-success" id="resend"> Resend OTP</button><br>
                        <label class=" control-label labelEnquiry" >Enter OTP *</label>
                        <input type="hidden" name="hidden_email" id="hidden_email" value="<?php echo $this->input->post("hidden_email");?>">
                        <input  type="text" placeholder="Your OTP" id="Otp" name="Otp" class="form-control" pattern="[0-9]{6}" title="" maxlength="6" required onkeyup="this.value=this.value.replace(/[^0-9]/g,'');">
                        <button id="submitfinal" class="btn btn-success btn-rounded float-right reg402" type="submit" style="font-size: 12px;">Submit</button>
                        </form>
                <?php }  ?>
            <a style="color:green;" href="<?php echo base_url(); ?>">Go back to Home page</a>
        </div>
        
    </div>      
</div>





<!-- Copyright Start -->
<div id="copyright" class="visible-lg visible-md hidden-xs">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
                <p>All copyrights reserved &copy; 2018 - EV MAX </p>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="payment pull-right">
                    <ul>
                        <li class="max7"><a href="#" class="max8"> Conditions Of Use & Sale |</li>
                        <li class="max7"><a href="#" class="max8">Privacy Notice | </a></li>
                        <li class="max7"><a href="#" class="max8">FAQ's </a></li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</div>

<div id="copyright" class="visible-xs hidden-lg">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
                <p>All copyrights reserved &copy; 2018 - EV MAX </p>
            </div>
        </div>
    </div>
</div>
<!-- Copyright End -->

<!-- Go To Top Link -->
<a href="#" class="back-to-top">
    <i class="icon-arrow-up"></i>
</a>




<script>  
	$(document).ready(function(){
            
      $("#resend").on("click",function(){
   
            	$.ajax({
 type:'post',
 url:"<?php echo base_url(); ?>index.php/Registration/updateOTP",
 data:{
  person_email: $("#hidden_email").val(),
  },
 success:function(response) {
     alert('OTP Resent to your email');
 }
 });
        });
            


	
        
        
        
    });	
    

</script>  