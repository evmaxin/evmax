      <div class="row visible-lg visible-md" style="margin: 0 auto !important;position:  relative;left: 30%;top:  37px;">
           <?php if($this->session->flashdata('msg')){ ?> 
              <div class="alert alert-success alert-dismissable col-md-4"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
              <?php  echo $this->session->flashdata('msg');?>
          </div>
          <?php } ?>
      </div>
<div class="row visible-xs visible-sm">
           <?php if($this->session->flashdata('msg')){ ?> 
              <div class="alert alert-success alert-dismissable col-md-4"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
              <?php  echo $this->session->flashdata('msg');?>
          </div>
          <?php } ?>
      </div>
<div class="container pull-right">

    <button id="enquiryButton" >Enquiry Form</button>

</div>
<br style=" clear: both">
<section id="slider">

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->


        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="<?= base_url(); ?>assets/frontend/img/mercent-banner.png" class="img-responsive" alt="evmax " style="width:100%; height: 100%;">
            </div>




        </div>
    </div>
</section>


<div class="dailog-box" id="dailog-box">

    <div class="box">
        <button id="close" class="close" > &nbsp;x &nbsp;  </button>



        <h1 id="enuiry-hedding"> Evmax Enquiry Form </h1>

        <br/>
        <form class="well " action="<?php echo base_url() ?>BecomeASeller/enquiry" method="post"  id="contact_form">
            <br/>
            <h4 class="evm11">Personal Information :</h4>
            <fieldset class="personalInfo evm12">


                <!-- Text input-->

                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-4 evm15">

                            <label class=" control-label labelEnquiry" >Name * </label>
                        </div>									  
                        <div class="col-sm-8 evm16">
                            <input  type="text" placeholder="Name" id="firstName" name="firstName" class="form-control"  required pattern="[a-zA-Z ]{1,40}" title="Please check name">
                        </div>
                    </div>
                </div>


                <!-- Text input-->

               <!-- <div class="form-group">
                    <div class="row">
                        <div class="col-sm-4 evm15">

                            <label class=" control-label labelEnquiry" >Last Name </label>
                        </div>									  
                        <div class="col-sm-8 evm16">
                            <input  type="text" placeholder="Last Name" id="lastName" name="lastname" class="form-control"  pattern="[a-zA-Z ]{1,40}" title="Please check last name">
                        </div>
                    </div>
                </div>-->

                <!-- Text input-->

                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-4 evm15">

                            <label class=" control-label labelEnquiry" >Mobile No *</label>
                        </div>									  
                        <div class="col-sm-8 evm16">
                            <input  type="text" placeholder="Contact Number" id="mobileno" name="mobileno" class="form-control"  required pattern="[0-9]{10}" title="Please enter valid phone number" maxlength="10">
                        </div>
                    </div>
                </div>

                <!-- Text input-->

                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-4 evm15">

                            <label class=" control-label labelEnquiry" >Email Id *</label>
                        </div>									  
                        <div class="col-sm-8 evm16">
                            <input  type="email" placeholder="Enter Email ID" id="email" name="email" class="form-control"  required>
                        </div>
                    </div>
                </div>







            </fieldset>
            <br/>


            <h4 class="evm13">Your Business  Information [All Fields Are Mandatory] :</h4>
            <fieldset class="personalInfo">


                <!-- Text input-->

               <!-- <div class="form-group">
                    <div class="row">
                        <div class="col-sm-4 evm15">

                            <label class=" control-label labelEnquiry" >Company Type *</label>
                        </div>									  
                        <div class="col-sm-8 evm16">

                            <select name="company_type" id="company_type" class="form-control" required>
                                <option value="">Select Company Type</option>
                                <?php
                               // if (isset($com_type) && (count($com_type) > 0)) {

                                //    foreach ($com_type as $value) {
                                        ?>

                                        <option value="<?php //echo $value->m_company_type_id ? $value->m_company_type_id : ''; ?>"><?php //echo $value->company_type ? $value->company_type : ''; ?></option>

                                    <?php //}
                                //} ?>
                            </select>

                        </div>
                    </div>
                </div>-->


                <!-- Text input-->

                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-4 evm15">

                            <label class=" control-label labelEnquiry" >Company  Name *</label>
                        </div>									  
                        <div class="col-sm-8 evm16">
                            <input  type="text" placeholder="Company Name" id="companyName" name="companyname" class="form-control"  required pattern="[a-zA-Z 0-9]{1,40}" title="Please check company name">
                            <input type="hidden" name="company_type" id="company_type" value="1">
                        </div>
                    </div>
                </div>

                <!-- Text input-->

                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-4 evm15">

                            <label class=" control-label labelEnquiry" >Website * </label>
                        </div>									  
                        <div class="col-sm-8 evm16">
                            <input  type="text" title="Include http://" placeholder="Website" id="Address" name="Address1" class="form-control"  required>
                        </div>
                    </div>
                </div>
                <!-- Text input-->

                <!--<div class="form-group">
                    <div class="row">
                        <div class="col-sm-4 evm15">

                            <label class=" control-label labelEnquiry" ></label>
                        </div>									  
                        <div class="col-sm-8 evm16">
                            <input  type="text" placeholder="Address line 2" id="Address" name="Address2" class="form-control"  >
                        </div>
                    </div>
                </div>-->
                <!-- Text input-->

                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-4 evm15">

                            <label class=" control-label labelEnquiry" >City *</label>
                        </div>									  
                        <div class="col-sm-8 evm16">
                            <input  type="text" placeholder="City" id="City" name="City" class="form-control"  required pattern="[a-zA-Z 0-9]{1,40}" title="Please check city name">
                        </div>
                    </div>
                </div>


                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-4 evm15">

                            <label class=" control-label labelEnquiry" >State *</label>
                        </div>									  
                        <div class="col-sm-8 evm16">

                            <select name="state_id" id="state_id" class="form-control" required>
                                <option value="">Select State</option>
                                 <?php
                                if (isset($states) && (count($states) > 0)) {

                                    foreach ($states as $state) {
                                        ?>

                                        <option value="<?php echo $state->state_id ? $state->state_id : ''; ?>"><?php echo $state->state_name ? $state->state_name : ''; ?></option>
                                <?php } }?>

                            </select>

                        </div>
                    </div>
                </div>

                <!-- Text input-->

                <!--<div class="form-group">
                    <div class="row">
                        <div class="col-sm-4 evm15">

                            <label class=" control-label labelEnquiry" >Pincode *</label>
                        </div>									  
                        <div class="col-sm-8 evm16">
                            <input  type="text" placeholder="Pincode" id="Pincode" name="Pincode" class="form-control" pattern="[0-9]{1,6}" title="Please check pincode " maxlength="6" required>
                        </div>
                    </div>
                </div>-->

                <!-- Text input-->


                <!-- Text input-->

               <!-- <div class="form-group">
                    <div class="row">
                        <div class="col-sm-4 evm15">

                            <label class=" control-label labelEnquiry" >Landline Number *</label>
                        </div>									  
                        <div class="col-sm-8 evm16">
                            <input  type="text" placeholder="Landline Number" id="LandlineNumber" name="LandlineNumber" class="form-control"  required pattern="[0-9]{10,12}" title="Please check landline number" maxlength="12" >
                        </div>
                    </div>
                </div>

                

                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-4 evm15">

                            <label class=" control-label labelEnquiry" >Your Business Email Id * </label>
                        </div>									  
                        <div class="col-sm-8 evm16">
                            <input  type="email" placeholder="Enter Email ID" id="email" name="business_email" class="form-control"  >
                        </div>
                    </div>
                </div>-->




                <!-- Text input-->

                <div class="form-group hidden-lg visible-xs ">
                    <div class="row">
                        <div class="col-sm-4 ev15">

                            <label class=" control-label labelEnquiry" >Categories Interested In *</label>
                        </div>									  
                        <div class="col-sm-8 ev16">
                               <?php
                                if (isset($category_interested) && (count($category_interested) > 0)) {
$i=1;
                                    foreach ($category_interested as $cat) {
                                        ?>
<div>
                                <input type="checkbox" class="css-checkbox" id="cat<?php echo $cat->m_category_id ? $cat->m_category_id : $i; ?>" name="categories[]" value="<?php echo $cat->m_category_id ? $cat->m_category_id : $i; ?>">
                                <label for="cat<?php echo $cat->m_category_id ? $cat->m_category_id : $i; ?>" class="css-label"><span><?php echo $cat->category_name ? $cat->category_name : ''; ?></span></label>
                            </div>
                                      

                                    <?php  $i++;}
                                } ?>
                            

                            




                        </div>
                    </div>
                </div>


                <div class="form-group hidden-xs visible-lg visible-md">
                    <div class="row">
                        <div class="col-sm-4 col-md-8 evm15">

                            <label class=" control-label labelEnquiry" >Categories Interested In *</label>
                        </div>									  
                        <div class="col-sm-8 col-md-8 evm16">
               
                            
                            
                                <?php
                                if (isset($category_interested) && (count($category_interested) > 0)) {
$i=1;
                                    foreach ($category_interested as $cat) {
                                         //if($i % 2 ==1){
                                        ?>
                            <div class="row col-lg-6 col-md-6">
                                <span class="evm17">
                                    <input type="checkbox" class="css-checkbox" id="cat<?php echo $cat->m_category_id ? $cat->m_category_id : $i; ?>" name="categories[]" value="<?php echo $cat->m_category_id ? $cat->m_category_id : $i; ?>">
                                    <label for="cat<?php echo $cat->m_category_id ? $cat->m_category_id : $i; ?>" class="css-label"><span class="evm19"><?php echo $cat->category_name ? $cat->category_name : ''; ?></span></label>
                                </span>
                            </div>
                            
                                    <?php   $i++;}
                                } ?>
                            
                            

                           <!-- <div class="row">
                                <span class="evm17">   
                                    <input type="checkbox" class="css-checkbox" id="cat3" name="categories[]" value="Batteries">
                                    <label for="cat3" class="css-label"><span class="evm19">Batteries</span></label>
                                </span>

                                <span class="evm18">           
                                    <input type="checkbox" class="css-checkbox" id="cat4" name="categories[]" value="Battery Banks">
                                    <label for="cat4" class="css-label"><span class="evm19">Battery Banks</span></label>
                                </span>
                            </div>-->

                            


                        </div>
                    </div>
                </div>





                <!-- Button -->
                <div class="form-group">
                    <label class=" control-label"></label>
                    <div class="">
                        <button type="submit" id="submit"class="btn btn-primary evm14" > Submit</button>
                    </div>
                </div>

            </fieldset>



        </form>

    </div>

</div>
</div>


<!-- All js here -->
<script type="text/javascript" src="assets/js/jquery-min.js"></script>      
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap-select.min.js"></script> 
<script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="assets/js/ion.rangeSlider.js"></script>
<script type="text/javascript" src="assets/js/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="assets/js/nivo-lightbox.js"></script> 
<script type="text/javascript" src="assets/js/jquery.slicknav.js"></script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="assets/jquery/jquery-3.1.1.min.js"></script> 
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/jquery/slider.js"></script> 

<script>

    $(document).ready(function () {
        $("#enquiryButton").click(function () {
            $("#dailog-box").css("display", "block");
            $("html").css({"overflow-y": "hidden"});
            //$(".box").css({"overflow": "scroll"});

        });
        $(".close").click(function () {
            $("html").css({"overflow-y": "scroll"});

            $("#dailog-box").css("display", "none");
            

        });


        $("#submit").on("click", function () {


            if (($("input[name*='categories']:checked").length) <= 0) {
                alert("You must check at least 1 category");
                return false
            }

            return true;

        });


    });
</script>
 
