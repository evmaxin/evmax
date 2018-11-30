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
    .permissions,.p_element{
        display: none;
    }
    .resend_hidden{
        display: none;
    }
    .panel-default .panel-heading a{
            background-color: #3051a0;
    }
</style>   
<!-- Header Section Start -->
<div class="header">  
     <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      
     
                 
    </div>
  </div>
  <!--<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal1">Open Modal</button>-->
      <?php
      $permissions = array();
     // print_r($term_docs);
                                if (isset($term_docs) && (count($term_docs) > 0)) {

                                    foreach ($term_docs as $key => $doc) {
                                        $permissions[$key] = $doc->m_category_id;
                                        //echo $doc->m_category_id ? $doc->m_category_id : '';
                                        
                                    }
                                }
                                ?>
 <?php //$complex = array(1,2,3); ?>

    <!-- Start  Logo & Naviagtion  -->
    <nav class="navbar navbar-default enF001" data-spy="affix" data-offset-top="50">
        <div class="container">
            <div class="row">
                <div class="navbar-header enA007">
                    <!-- Stat Toggle Nav Link For Mobiles -->
                    <button type="button" class="navbar-toggle " data-toggle="collapse" data-target=".navbar-collapse">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand enF008" href="<?php echo base_url() ?>">
                        <img src="<?php echo base_url() ?>assets/frontend/img/evlogo.png" alt="" class="enF007">
                    </a> 
                </div>
                <div class="navbar-collapse collapse">
                    <!-- Start Navigation List -->
                    <ul class="nav navbar-nav">
                        <li> <a class="active" href="#faq">Frequently asked questions</a></li>
                        <li> <a href="#content1" class="enF002">Register  </a></li>
                        <li> <a href="#support" class="enF002">Support </a></li>

                    </ul>

                </div>
            </div>
        </div>
        <!-- End Header Logo & Naviagtion -->

        <!-- Mobile Menu Start -->
        <ul class="mobile-menu">
            <li> <a class="active" href="#faq">Frequently asked questions</a></li>
            <li> <a href="#content1" class="enF00A1">Register </a></li>
            <li> <a href="#support" class=" enF00A1">Support </a></li>
        </ul>
        <!-- Mobile Menu End -->
    </nav>

</div>
<!-- Header Section End -->    

<!-- Main Slider Section -->
<div id="msg1" class="row visible-lg visible-md hidden-xs hidden-sm" style="margin: 0 auto !important;position:  relative;left: 30%;top:  11px;">
           <?php if(isset($_REQUEST['q'])&&($_REQUEST['q']==="success")){ ?> 
              <div class="alert alert-success alert-dismissable col-md-4"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
              <?php  echo $_REQUEST['msg'];?>
          </div>
          <?php } ?>
      </div>
<div id="msg2" class="row visible-xs visible-sm hidden-lg hidden-md">
             <?php if(isset($_REQUEST['q'])&&($_REQUEST['q']==="success")){ ?>
              <div class="alert alert-success alert-dismissable col-md-4"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
               <?php  echo $_REQUEST['msg'];?>
          </div>
          <?php } ?>
      </div>
<div><span id="succ_msg"></span></div>
<!-- Main Slider Section End-->

<div id="content">
    <div class="container">
        <div class="head-faq text-center">`
            <h2>
                Frequently Asked Questions
            </h2>
            <p>Last Updated on October 14, 2017</p>
        </div>
        <div class="row">
            <div class="col-md-12">
                
                <div class="panel-group" id="accordion">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                    <span class="num">1</span>
                                    Registration Process
                                </a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in">
                            <div class="panel-body">
                                <p>
                                    <a target="_blank" style="color: #57b952;" href="<?php echo base_url();?>BecomeASeller/howitworks">Click here to see How it works</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                    <span class="num">2</span>
                                    Product Listing Process
                                </a>
                            </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>
                                    EVMAX merchant dashboard is enabled to add/ delete/ edit products. Our merchant support team also help you to upload your products. For more details <a target="_blank" href='<?php echo base_url();?>BecomeASeller/support' style="color: #57b952;">Click here</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                    <span class="num">3</span>
                                    Order Management and Shipping
                                </a>
                            </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>
                                    <a target="_blank" style="color: #57b952;" href="<?php echo base_url();?>BecomeASeller/shippinganddelivery">Click here to see How it works</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                                    <span class="num">4</span>
                                    Payments and Pricing Structure
                                </a>
                            </h4>
                        </div>
                        <div id="collapseFour" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>
                                    <a style="color: #57b952;" target="_blank" href="<?php echo base_url();?>BecomeASeller/pricing">Click here to see How it works</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive">
                                    <span class="num">5</span>
                                    Terms & Conditions apply for listing and selling your products and services on www.evmax.in platform
                                </a>
                            </h4>
                        </div>
                        <div id="collapseFive" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>
                                 <b>1.Declaration of your Business:</b> You represent and declare that you are a business entity duly incorporated and existing under the laws of India having no foreign direct investment. You are not subject to any restrictive conditions or compliances mandated under the foreign exchange management Laws of India or the foreign direct policy of India in relation to wholesale cash and carry trading business.
                                </p>
                                 <p>
                                    	<b>2.Invoicing Customers:</b> You shall issue a valid invoice to the Customer(s) for the Sale(s) conducted by you on evmax.in, which is compliant with the tax Laws of India and such invoice shall clearly specify the Customer's Name, Your Business entity address, ship from address with GST tax registration details, purchase order number (Order Number generated by evmax.in), billing and shipping address(es). In the event you issue an invoice to a Customer which doesn't satisfy the above requirements, the Customer may request for a compliant invoice within fifteen (15) days of delivery of Your Products to the said customer and you shall provide a corrected invoice satisfying these requirements within a period of fifteen (15) days of such request.
                                </p>
                                 <p>
                                    	<b>3.Taxes:</b> You will be responsible for tax withholding, collection of applicable taxes, PAN number and all other compliances and reporting requirements under the applicable tax Laws of India.You also acknowledge that you are entirely responsible for maintaining records of the GST and other related details of Your Transactions and evmax.in hereby expressly waives any liability or obligation in this respect.
                                </p>
                                 <p>
                                    	<b>4.Error(s) in listing Your Products:</b> In the event of an error(s) in listing Your Products, including but not limited to an error in listing of product price, quantity discount or any other such detail, you shall be liable for any losses, damages, claims and expenses arising out of such error(s) and shall hold us harmless and fully indemnified in this regard.
                                </p>
                                 <p>
                                    	<b>5.Delivery and Return Delivery Location Address:</b> evmax.in will consider your default location mentioned at the time of registration for Business Sales as the ship-from location for tax and other related purposes and the same shall be shown to the Customers as the ship-from location. You shall not ship Your Products from any other location and shall accept return of such products if so requested by the Customer. Any liabilities, costs, damages or denial of benefits in this regard including tax liabilities shall be attributable to you and evmax.in hereby expressly waives any liability or obligation in this respect.
                                </p>
                                 <p>
                                    	<b>6.Offers, Promotions and Discounts:</b> Offers, Promotions and Discounts means any discount, rebate, promotional offer, or other term of offer and/or sale that youhave attempted to make available through the evmax.in Site. Some Offers may be applicable to customers based on membership / customer loyalty or customer incentive programs. Evmax.in has sole right to take decision on application of offers.
                                </p><br>
                                
                                
                            </div>
                        </div>
                        
                    </div>


                </div>
                

            </div>      
        </div>
    </div>      
</div>



<!-- Footer Start -->
<footer class="section section01 visible-lg visible-md hidden-xs">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="contact-us">
                    <h3 class="widget-title">Coporate Address</h3>
                    <ul class="contact-list">
                        <li><span>RAM SVR, Plot No 4/2, </br> Sector 1, Madhapur, </br> HUDA Techno Enclave, </br> HITECH City, Hyderabad, </br> Telangana 500081. </span></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <h3 class="widget-title">EV MAX</h3>
                <ul>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">EV MAX Studio</a></li>
                    <li><a href="#">Brands</a></li>
                    <li><a href="#">Charging Stations</a></li>
                    <li><a href="#">Battery Banks</a></li>
                </ul>
            </div>
            <div class="col-md-3 col-sm-6">
                <h3 class="widget-title">Partners</h3>
                <ul>
                    <li><a href="#">Sell On EV MAX</a></li>
                    <li><a href="#">EV MAX Marketplace Policies</a></li>
                    <li><a href="#">Login Partner</a></li>
                    <li><a href="#">Login Studio</a></li>
                    <li><a href="#">Priority Patner Program</a></li>
                    <li><a href="#">Become Studio Patner</a></li>
                </ul>
            </div>
            <div class="col-md-3 col-sm-6">
                <h3 class="widget-title">Customer Care</h3>
                <ul>
                    <li><i class="icon-call-out"> </i> <span> +91-9205-991-992 </span></li>
                    <li><a href="#">Request Service</a></li>
                    <li><a href="#">Request Test Drive</a></li>
                    <li><a href="#">Track Your Order</a></li>
                </ul>
            </div>
        </div>
    </div>      
</footer>

<footer class="section section01 visible-xs hidden-lg">
    <div class="container">
        <div class="row col-xs-12">
            <div class="col-xs-6">
                <h3 class="widget-title">EV MAX</h3>
                <ul>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">EV MAX Studio</a></li>
                    <li><a href="#">Brands</a></li>
                    <li><a href="#">Charging Stations</a></li>
                    <li><a href="#">Battery Banks</a></li>
                </ul>
            </div>
            <div class="col-xs-6">
                <h3 class="widget-title">Partners</h3>
                <ul>
                    <li><a href="#">Sell On EV MAX</a></li>
                    <li><a href="#"> Marketplace Policies</a></li>
                    <li><a href="#">Login Partner</a></li>
                    <li><a href="#">Priority Patner Program</a></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-6 foot1">
                <div class="contact-us">
                    <h3 class="widget-title">Coporate Address</h3>
                    <ul class="contact-list">
                        <li><span>RAM SVR, Plot No 4/2, </br> Sector 1, Madhapur, </br> HUDA Techno Enclave, </br> HITECH City, Hyd, </br> Telangana 500081. </span></li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-6 foot2">
                <h3 class="widget-title">Customer Care</h3>
                <ul>
                    <li><i class="icon-call-out"> </i> <span> +91-9205-991-992 </span></li>
                    <li><a href="#">Request Service</a></li>
                    <li><a href="#">Request Test Drive</a></li>
                    <li><a href="#">Track Your Order</a></li>
                </ul>
            </div>
        </div>
    </div>      
</footer>
<!-- Footer End -->

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
            var array1 = <?php echo json_encode($permissions); ?>;
    //console.log(complex);
             $("#next2").on("click",function(){
                var array2 = [];
                $('.get_value').each(function(){  
                if($(this).is(":checked"))  
                {  
                     array2.push($(this).val());  
                }  
           });
          // var array1  = [1, 2, 3, 4, 5, 6],
    //array2 = [1, 2, 3, 4, 5, 6, 7, 8, 9];

var common = $.grep(array1, function(element) {
    return $.inArray(element, array2 ) !== -1;
});

  /*$('.permissions').each(function(){ 
      
                if ($.inArray($(this).attr('id'), common) > -1)
    {
       alert('removed class'+ $(this).attr('id'));
    }else{
        alert('else');
    }
           });*/
//console.log(common);
            });	
  
  $('.get_value').change(function(){
    if($('.get_value:checked').length==0){
        $('.p_element').hide();
    }else{
        $('.p_element').hide();
        $('.get_value:checked').each(function(){
            $('#'+$(this).attr('data-ptag')).show();
        });
    }
    
});
  $(".close_resend").on("click",function(){
      $("#resend").removeClass("resend_hidden");
       });
             $("#next3").on("click",function(){
                 var email_alert = $("#businessEmail").val();
                 //alert(email_alert);
               $('#submitfinal').prop('disabled', true);
               $('#previous3').prop('disabled', true);
               
             $(".steps").removeClass("reg0003");
	 $("#reg_step4").addClass("reg0003");
            // });
             var allcheck = [];
      //$("#sendOTP").on("click",function(){
          
           $('.get_value').each(function(){  
                if($(this).is(":checked"))  
                {  
                    //$('#'+$(this).val()).addClass('test3').removeClass('permissions');
                   // alert($(this).val());
                     allcheck.push($(this).val());  
                }  
           }); 
          $("#hidden_email").val($("#businessEmail").val());
          $("#hidden_email1").val($("#businessEmail").val());
          $("#otp_email").text($("#businessEmail").val());
          //console.log(allcheck);
          	$.ajax({
 type:'post',
 url:"<?php echo base_url(); ?>index.php/Registration/merchantData",
 data:{
  company_type: $("#company_type").val(),
  companyname: $("#companyname").val(),
  address: $("#address").val(),
  city: $("#city").val(),
  state_id: $("#state_id").val(),
  businessPhone: $("#businessPhone").val(),
  businessEmail: $("#businessEmail").val(),
  businessPanCard: $("#businessPanCard").val(),
  gst_number: $("#gst_number").val(),
  accountName: $("#accountName").val(),
  ifsc: $("#ifsc").val(),
  bankname: $("#bankname").val(),
  bankbranch: $("#bankbranch").val(),
  bankAccount: $("#bankAccount").val(),
  Surnam: $("#Surnam").val(),
  name: $("#name").val(),
  person_address: $("#person_address").val(),
  person_city: $("#person_city").val(),
  person_state_id: $("#person_state_id").val(),
  person_pincode: $("#person_pincode").val(),
  person_email: $("#person_email").val(),
  person_contact_num: $("#person_contact_num").val(),
  pincode: $("#pincode").val(),
  person_pan_num: $("#person_pan_num").val(),
  adhaar: $("#adhaar").val(),
  categories: allcheck,
 },
 success:function(response) {
//alert("OTP Sent successfully, check your "+email_alert+" email");
/*$('#myModal').modal({
    backdrop: 'static',
    keyboard: false  // to prevent closing with Esc button (if you want this too)
});*/
 }
 });
        });
            
 $('#Otp').keyup(function () { 
     //this.value = this.value.replace(/[^a-zA-Z]/g, function(str) { alert('You typed " ' + str + ' ".\n\nPlease use only letters.'); return ''; });
  if($(this).val().length >5)
  {
  //alert('Not allowed more than 40 characters');
  $('#submitfinal').prop('disabled', false);
  }else{
      $('#submitfinal').prop('disabled', true);
  }
 });

	$("#submitfinal").on("click",function(){
            	$.ajax({
 type:'post',
 url:"<?php echo base_url(); ?>index.php/Registration/verifyOTP",
 data:{
  hidden_email: $("#hidden_email").val(),
  Otp: $("#Otp").val(),
  },
 success:function(res) {
  if(res === "1"){
      alert('OTP Verified successfully ,Registration is under proccess');
      window.location.href="<?php echo base_url(); ?>Registration/index?q=success&msg=OTP Verified successfully ,Registration is under proccess";
  }
  else{ alert('OTP Not Matching.'); }
 }
 });
       }); 
        
    });	
    

</script>  
<script>  
	$(document).ready(function(){
            //alert();
            //$('#myModal1').addClass('not-animated');
            $('#next3').prop('disabled', true);//05092018 commented,remove by eod
        $("#resend").on("click",function(){
   $('#previous2').prop('disabled', true);
   $('#next3').prop('disabled', true);
            	$.ajax({
 type:'post',
 url:"<?php echo base_url(); ?>index.php/Registration/updateOTP",
 data:{
  person_email: $("#hidden_email").val(),
  },
 success:function(response) {
  alert('OTP Resent to ' + $("#hidden_email").val());
    /* $('#myModal').modal({
    backdrop: 'static',
    keyboard: false  // to prevent closing with Esc button (if you want this too)
});*/
 }
 });
        });
         $("#resend1").on("click",function(){
   $('#previous2').prop('disabled', true);
   $('#next3').prop('disabled', true);
            	$.ajax({
 type:'post',
 url:"<?php echo base_url(); ?>index.php/Registration/updateOTP",
 data:{
  person_email: $("#hidden_email1").val(),
  },
 success:function(response) {
     alert('OTP Resent to ' + $("#hidden_email1").val());
    /* $('#myModal').modal({
    backdrop: 'static',
    keyboard: false  // to prevent closing with Esc button (if you want this too)
});*/
 }
 });
        });
            


	
        
        
        
    });	
    $( ".checkbox111" ).on( "click", function() {
  if($( ".checkbox111:checked" ).length > 1)
  {
  	$('#next3').prop('disabled', false);
  }
  else
  {
  	$('#next3').prop('disabled', true);
  }  
});
 
   /* $('#checkbox111').click(function() {
        if ($(this).is(':checked')) {
     
            $('#next3').prop('disabled', false);
          
        } else {
 
            $('#next3').prop('disabled', true);
          
        }
    });*/

</script>  
