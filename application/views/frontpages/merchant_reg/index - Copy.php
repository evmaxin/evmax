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
    .mfp-fade.mfp-bg.mfp-ready{
     display: none;
    }
    .animated{
      /*  display: none;*/
    }
</style>   
<!-- Header Section Start -->
<div class="header">  
     <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="row nomargin clearfix">
                                <div class="col-md-6" data-height-xl="456" data-height-lg="456" data-height-md="456" data-height-sm="0" data-height-xs="0" style="background-image: url(assets/frontend/img/4.jpg); background-size: cover;"></div>
                                <div class="col-md-6 col-padding12" data-height-xl="456" data-height-lg="456" data-height-md="456" data-height-sm="456" data-height-xs="456">
                                    <div>
                                    <h4 class="uppercase ls1 "><i class="icon-ok-sign reg4step iconcolr"></i></h4>
                                    <form action="#" class="clearfix" style="max-width: 500px;">
                                        <div class="col_full">
                                            <p class="parabottm">1. Verify mail sent to: ada@gmail.com</p>
                                             <span class="parabottm1">OR</span>
                                            <p class="parabottm">2. Verify OTP sent to : 9875462103</p>

                                        </div>
                                        <div class="col_full">
                                            <label class="bottm">Enter OTP: </label>
                                             <span style="padding-left: 18px;"><input type="password" id="template-op-form-password" name="template-op-form-password" value="" class="sm-form-control11" /></span>
                                        </div>

                                        <div class="col_full nobottommargin">
                                            <button type="submit" class="button button-rounded button-small button-dark nomargin" value="submit">Submit</button>
                                            <span><a href="#" class="textunderline">Resend Otp</a></span>
                                        </div>
                                        
                                    </form>
                                    
                                    </div>
                                </div>
                            </div>
      </div>
      
    </div>
  </div>
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>
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
                        <li> <a class="active" href="<?php echo base_url() ?>">Register as Business Partner </a></li>
                        <li> <a href="#" class="enF002 ">Login as Business Partner  </a></li>
                        <li> <a href="#" class="enF002">Support </a></li>

                    </ul>

                </div>
            </div>
        </div>
        <!-- End Header Logo & Naviagtion -->

        <!-- Mobile Menu Start -->
        <ul class="mobile-menu">
            <li> <a class="active" href="<?php echo base_url() ?>">Register as Business Partner </a></li>
            <li> <a href="#" class=" enF00A1">Login as Business Partner  </a></li>
            <li> <a href="#" class=" enF00A1">Support </a></li>
        </ul>
        <!-- Mobile Menu End -->
    </nav>

</div>
<!-- Header Section End -->    

<!-- Main Slider Section -->

<div class="w3-content w3-display-container">
    <img class="mySlides" src="<?php echo base_url() ?>assets/frontend/img/enquiry/banner.png" style="width:100%">
</div>
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
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute. non cupidatat skateboard dolor brunch. Foosd truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt alqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim ke ffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lome. Leggings occaecat. craft beer farmto-tab le, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. Nihil anim keffiyeh helvetica, craft beer labore wes ande rso cred nesciunt sapiente ea proident Ad vegan excepteur butcher vice lomo. Leggings occaecat caaft beer farmto-tab le,
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
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.  
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
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute. non cupidatat skateboard dolor brunch. Foosd truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt alqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim ke ffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lome. Leggings occaecat. craft beer farmto-tab le, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. Nihil anim keffiyeh helvetica, craft beer labore wes ande rso cred nesciunt sapiente ea proident Ad vegan excepteur butcher vice lomo. Leggings occaecat caaft beer farmto-tab le,
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
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute. non cupidatat skateboard dolor brunch. Foosd truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt alqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim ke ffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lome. Leggings occaecat. craft beer farmto-tab le, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. Nihil anim keffiyeh helvetica, craft beer labore wes ande rso cred nesciunt sapiente ea proident Ad vegan excepteur butcher vice lomo. Leggings occaecat caaft beer farmto-tab le,
                                </p>
                            </div>
                        </div>
                    </div>


                </div>
                

            </div>      
        </div>
    </div>      
</div>

<div id="content1">
    <div class="container">
        <div class="row">
            <h2 class="text-center font-bold pt-4 pb-5 mb-5"><strong class="reg1 reg400">Registration form</strong></h2>
            <!-- Stepper -->
            <div class="steps-form-2">
                <div class="steps-row-2 setup-panel-2 d-flex justify-content-between">
                    <div class="steps-step-2">
                        <a href="#step-1" type="button" class="btn btn-amber btn-circle-2 waves-effect ml-0 reg0003 steps" id="reg_step1" data-toggle="tooltip" data-placement="top" title="Basic Information"><i class="fa fa-address-book reg4" aria-hidden="true"></i></a>
                    </div>
                    <div class="steps-step-2">
                        <a href="#step-2" type="button" class="btn btn-blue-grey btn-circle-2 waves-effect steps" id="reg_step2" data-toggle="tooltip" data-placement="top" title="Personal Data"><i class="fa fa-pencil reg4" aria-hidden="true"></i></a>
                    </div>
                    <div class="steps-step-2">
                        <a href="#step-3" type="button" class="btn btn-blue-grey btn-circle-2 waves-effect steps" id="reg_step3" data-toggle="tooltip" data-placement="top" title="Terms and Conditions"><i class="fa fa-photo reg4" aria-hidden="true"></i></a>
                    </div>
                    <div class="steps-step-2">
                        <a href="#step-4" type="button" class="btn btn-blue-grey btn-circle-2 waves-effect mr-0 steps" id="reg_step4" data-toggle="tooltip" data-placement="top" title="Finish"><i class="fa fa-check reg4" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>

            <!-- First Step -->
            <form role="form" action="#" method="post" class="reg401" novalidate>
                <div class="row setup-content-2" id="step-1">
                    <div class="col-md-12 reg2 reg22" style="float: none;">
                        <h3 class="font-weight-bold pl-0 my-4 reg3">Business Registration</h3>

                        <div class="form-group md-form">
                            <label class=" control-label labelEnquiry" >Company Type *</label>

                            <select name="company_type" id="company_type" class="form-control" required>
                                <option value="">Select Company Type</option>
                                <?php
                                if (isset($com_type) && (count($com_type) > 0)) {

                                    foreach ($com_type as $value) {
                                        ?>

                                        <option value="<?php echo $value->m_company_type_id ? $value->m_company_type_id : ''; ?>"><?php echo $value->company_type ? $value->company_type : ''; ?></option>

                                    <?php }
                                }
                                ?>
                            </select>

                        </div>
                        <div class="form-group md-form">
                            <label class=" control-label labelEnquiry" >Company  Name *</label>
                            <input  type="text" placeholder="Company Name" id="companyname" name="companyname" class="form-control"  required pattern="[a-zA-Z 0-9]{1,100}" title="Please check company name">
                        </div>
                        <div class="form-group md-form mt-3">
                            <label class=" control-label labelEnquiry" >Address * </label>
                            <input  type="text" placeholder="Address line " id="address" name="address" class="form-control"  required>
                        </div>
                        <div class="form-group md-form mt-3">
                            <label class=" control-label labelEnquiry" >City *</label>
                            <input  type="text" placeholder="City" id="city" name="city" class="form-control"  required pattern="[a-zA-Z 0-9]{1,60}" title="Please check city name" onkeyup="this.value=this.value.replace(/[^a-zA-Z]/g,'');">
                        </div>
                        <div class="form-group md-form mt-3">
                            <label class=" control-label labelEnquiry" >State *</label>
                            <select name="state_id" id="state_id" class="form-control" required>
                                <option value="">Select State</option>
                                <?php
                                if (isset($states) && (count($states) > 0)) {

                                    foreach ($states as $state) {
                                        ?>

                                        <option value="<?php echo $state->state_id ? $state->state_id : ''; ?>"><?php echo $state->state_name ? $state->state_name : ''; ?></option>
    <?php }
} ?>

                            </select>

                        </div>
                        <div class="form-group md-form mt-3">
                            <label class=" control-label labelEnquiry" >Pincode *</label>
                            <input  type="text" placeholder="Pincode" id="pincode" name="pincode" class="form-control" pattern="[0-9]{1,6}" title="Please check pincode " maxlength="6" required onkeyup="this.value=this.value.replace(/[^0-9]/g,'');">


                        </div>

                        <div class="form-group md-form mt-3">
                            <label class="control-label labelEnquiry">Business Email ID *</label>

                            <input  type="text" placeholder="Business Email ID" id="businessEmail" name="businessEmail" class="form-control" title="Please check Email Id" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required>

                            <small style="color: green;font-weight: bold;">OTP will sent to this Email only, Please make sure this email is working (OR) use personal email here</small>
                        </div>
                        <div class="form-group md-form mt-3">
                            <label class=" control-label labelEnquiry" >Business Contact Number *</label>
                            <input  type="text" placeholder="Business Contact Number" id="businessPhone" name="businessPhone" class="form-control" title="Please check  contact number " pattern="[0-9]{10}"   maxlength="10" required onkeyup="this.value=this.value.replace(/[^0-9]/g,'');">


                        </div>
                        <div class="form-group md-form mt-3">
                            <label class=" control-label labelEnquiry" >Business Pan Card *</label>
                            <input  type="text" placeholder="Business Pan card" id="businessPanCard" name="businessPanCard" class="form-control" title="Please check  pan card Number" pattern="[a-zA-Z0-9]{10}"   maxlength="10" required>


                        </div>
                        <div class="form-group md-form mt-3">
                            <label class=" control-label labelEnquiry" >Categories Interested In *</label>


                            <?php
                            if (isset($category_interested) && (count($category_interested) > 0)) {
                                $i = 1;
                                foreach ($category_interested as $cat) {
                                    ?>
                                    <div>
                                        <input data-ptag="sb<?php echo $cat->m_category_id ? $cat->m_category_id : $i; ?>" type="checkbox" class="get_value css-checkbox" pid="<?php echo $cat->m_category_id ? $cat->m_category_id : $i; ?>" id="cat<?php echo $cat->m_category_id ? $cat->m_category_id : $i; ?>" name="categories[]" value="<?php echo $cat->m_category_id ? $cat->m_category_id : $i; ?>">
                                        <label for="cat<?php echo $cat->m_category_id ? $cat->m_category_id : $i; ?>" class="css-label"><span><?php echo $cat->category_name ? $cat->category_name : ''; ?></span></label>
                                    </div>


        <?php $i++;
    }
}
?>



                             <!--<p id="sb1"  class="p_element">Checkbox content one</p>
    <p id="sb2"  class="p_element">Checkbox content two</p>

    <input name="chk1" class="check_box" type="checkbox" data-ptag="sb1" id="chk1" value="">chekme1
    <input name="chk2"  class="check_box" type="checkbox" data-ptag="sb2" id="chk2" value="">checkme2-->
                        </div>
                        <div class="form-group md-form mt-3">
                            <label class=" control-label labelEnquiry" > GST * </label>
                            <input  type="text" pattern="[a-zA-Z0-9]{1,30}" placeholder="GST" id="gst_number" name="gst_number" class="form-control" title="Please check  GST" required maxlength="15">


                        </div>


                        <div class="form-group md-form mt-3">
                            <label class=" control-label labelEnquiry" >Bank Account *</label>
                            <input  type="text" placeholder="Bank Account" id="bankAccount" name="bankAccount" class="form-control" title="Please check  Bank Account"  pattern="[0-9]{8,20}" onkeyup="this.value=this.value.replace(/[^0-9]/g,'');" maxlength="20" required>


                        </div>

                        <button class="btn btn-mdb-color btn-rounded nextBtn-2 float-right reg402" type="button" id="next1" style="font-size: 12px;">Next</button>
                    </div>
                </div>

                <!-- Second Step -->
                <div class="row setup-content-2" id="step-2">
                    <div class="col-md-12 reg2 reg22" style="float: none;">
                        <h3 class="font-weight-bold pl-0 my-4 reg3">Personal Registration</h3>
                        <div class="form-group md-form">
                            <label for="Surnam" data-error="wrong" data-success="right">Surname</label>
                            <input id="Surnam" name="Surnam" type="text" required="required" class="form-control validate">
                        </div>
                        <div class="form-group md-form mt-3">
                            <label for="name" data-error="wrong" data-success="right">Name</label>
                            <input id="name" type="text"  name="name" required="required" class="form-control validate">
                        </div>

                        <div class="form-group md-form mt-3">
                            <label for="person_address" data-error="wrong" data-success="right">Address</label>
                            <textarea id="person_address" name="person_address" type="text" required="required" rows="2" class="md-textarea validate form-control"></textarea>
                        </div>
                        <div class="form-group md-form mt-3">
                            <label class=" control-label labelEnquiry" >City *</label>
                            <input  type="text" placeholder="City" id="person_city" name="person_city" class="form-control"  required pattern="[a-zA-Z 0-9]{1,40}" title="Please check city name" onkeyup="this.value=this.value.replace(/[^a-zA-Z]/g,'');">
                        </div>
                        <div class="form-group md-form mt-3">
                            <label class=" control-label labelEnquiry" >State *</label>
                            <select name="person_state_id" id="person_state_id" class="form-control" required>
                                <option value="">Select State</option>
                                <?php
                                if (isset($states) && (count($states) > 0)) {

                                    foreach ($states as $state) {
                                        ?>

                                        <option value="<?php echo $state->state_id ? $state->state_id : ''; ?>"><?php echo $state->state_name ? $state->state_name : ''; ?></option>
    <?php }
} ?>

                            </select>
                        </div>
                        <div class="form-group md-form mt-3">
                            <label class=" control-label labelEnquiry" >Pincode *</label>
                            <input  type="text" placeholder="Pincode" id="person_pincode" name="person_pincode" class="form-control" pattern="[0-9]{1,6}" title="Please check pincode " maxlength="6" required onkeyup="this.value=this.value.replace(/[^0-9]/g,'');">


                        </div>
                        <div class="form-group md-form mt-3">
                            <label class=" control-label labelEnquiry" > Email ID *</label>
                            <input  type="text" placeholder="Email ID" id="person_email" name="person_email" class="form-control" title="Please check Email Id " required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" >




                        </div>
                        <div class="form-group md-form mt-3">
                            <label class=" control-label labelEnquiry" >Contact Number *</label>
                            <input  type="text" placeholder="Contact Number" id="person_contact_num" name="person_contact_num" class="form-control" title="Please check  contact number " pattern="[0-9]{10}" maxlength="10" onkeyup="this.value=this.value.replace(/[^0-9]/g,'');" required>


                        </div>
                        <div class="form-group md-form mt-3">
                            <label class=" control-label labelEnquiry" > Alternative  Number *</label>
                            <input  type="text" placeholder=" Alternative  Number" id="alternative_number" name="alternative_number" class="form-control" title="Please check  Alternative Number "  maxlength="10" pattern="[0-9]{10}" onkeyup="this.value=this.value.replace(/[^0-9]/g,'');">


                        </div>
                        <div class="form-group md-form mt-3">
                            <label class=" control-label labelEnquiry" >Pan Card *</label>
                            <input  type="text" placeholder="Pan card" id="person_pan_num" name="person_pan_num" class="form-control" pattern="[0-9A-Za-z]{10}"title="Please check  pan card Number" maxlength="10" required>


                        </div>
                        <div class="form-group md-form mt-3">
                            <label class=" control-label labelEnquiry" >Aadhaar </label>
                            <input  type="text" placeholder="Aadhaar" id="adhaar" name="adhaar" class="form-control" pattern="[0-9]{16}" title="Please check  Aadhaar Number" required maxlength="16" onkeyup="this.value=this.value.replace(/[^0-9]/g,'');">


                        </div>

                        <button class="btn btn-mdb-color btn-rounded prevBtn-2 float-left reg402" type="button" style="font-size: 12px;" id="previous1">Previous</button>
                        <button class="btn btn-mdb-color btn-rounded nextBtn-2 float-right reg402" type="button" style="font-size: 12px;" id="next2">Next</button>
                    </div>
                </div>

                <!-- Third Step -->
                <div class="row setup-content-2" id="step-3">
                    <div class="col-md-12 reg211 reg22" style="float: none;">
                        <h3 class="font-weight-bold pl-0 my-4 reg3">Agreement</h3>
                          <div style="height: 300px; overflow: auto;border: 1px solid #ddd;">
                          <p>
                            This document is an electronic record in terms of Information Technology Act, 2000 including all its
                            amendments and rules made thereunder as applicable and the amended provisions pertaining to
                            electronic records in various statutes as amended by the Information Technology Act, 2000. This
                            electronic record is generated by a computer system and does not require any physical or digital
                            signatures. A print version of the Agreement is located here and we strongly recommend you keep a 
                            printout of this version for your records.

                          </p><br><br>

                          <h5>E-COMMERCE SERVICES Agreement</h5><br>
                          <p>
                            This E-Commerce Services Agreement (hereinafter referred to as “Agreement”) is made on the day of
                            your acceptance of this Agreement from your designated electronic mail address or in any other form of
                            electronic record including, if applicable or provided, clicking on the check box or “I Agree” / “Accept”
                            button or by any other means which construe your acceptance of this Agreement(“Execution Date”) by
                            and betweenYou, the details of which are given by you on the website on which this Agreement appears,a natural orjuristic person competent to enter into valid and legally binding contract under applicable Indian laws interalia, a person of legally sound mind, not adjudicated bankrupt and equal to or more than 18 years of ageon the Execution Date. If You are a juristic person then the person accepting this Agreement representsthat such person is duly authorized by You to bind You to this Agreement and the designated electronicmail address is valid and subsisting and allotted by You to such person (hereinafter referred to as“Merchant” which expression shall unless repugnant to the context and meaning thereof, include itsheirs, legal representatives, successors, liquidators, receivers, administrators and permitted assigns), ofOne Part;

                          </p>
                          <span>
                            And
                          </span>
                          <p>
                            Beerala Information Technologies Private Limited, a Company incorporated under the provisions of the
                            Indian Companies Act, 1956 and having its registered office at Sai Teja Towers, 501,Ajaynagar Colony, Bandlaguda, Nagole, Hyderabad, Telangana 500068 (hereinafter referred to as“Service Provider” which expression shall unless repugnant to the context and meaning thereof, includeits successors, liquidators and assigns), of Other Part.
                            Merchantand Service Providershall hereinafter be individually referred to as “Party” and collectively as
                            “Parties”.
                            Whereas,

                          </p>
                          <p>
                            1. Merchant is inter alia engaged in the business of developing and/or manufacturing and/or selling various goods and related servicesin the Territory (“Business”);

                          </p>
                          <p>
                            2. Service Provider is inter alia in the business of developing and operating e-commerce businesses for independent third party retailers and manufacturers and providing for those entities / persons Service Provider‟s proprietary technology, website design and development capabilities, order processing capabilities, customer service capabilities, fulfillment capabilities and centralized inventory, invoicing and payment management to enable those entities / persons to offer e-commerce to their customers and such services include Platform Services (as defined hereunder) and Transaction Support Services (as defined hereunder) (“Service Provider Business”);
                          </p>
                          <p>
                            3. Merchant has approached Service Provider to avail Service Provider Business for the purpose of Merchant‟s Business and Service Provider has agreed to make available Service Provider Business to Merchant;

                          </p>
                          <p>4. Service Provider has made and is in the process of making substantial investment both monetary, knowhow and otherwise to establish its trade name among consumers and distributors so as to create a retail image connoting a specific manner in which goods and services can be presented on and sold through the Platform;</p>
                          <p>5. Both Service Provider and Merchant recognize that overall success of the Platform and trade names of the Service Provider and its Affiliates depends on the users of the Platform and public in general perceives Platform as a trusted online and electronic marketplace to buy and sell goods and services;</p>
                          <p>6. The Parties wish to enter into this Agreement to document and record their mutual Understandingsand agreements in relation to the terms and conditions on which Service Provider shall make available Service Provider Business to Merchant and Merchant shall avail Service Provider Business;</p>
                          <p>7. These recitals shall form part of the Agreement</p>
                          <p>Now therefore, in consideration of the mutual promises and other consideration, the sufficiency of whichis acknowledged, the Parties, intending to be legally bound, agree as follows:</p>
                          <h6>1. DEFINITIONS </h6><br>
                          <p>“Affiliate” shall mean, with respect to each Party, any person or entity directly or indirectly
                          through one or more intermediary Controlling, Controlled by, or under direct or indirect common
                          Control with a Party. “Control”, “Controlled” or “Controlling” shall mean, with respect to any
                          person or entity, any circumstance in which such person or entity is controlled by another person
                          or entity by virtue of the latter person or entity controlling the composition of the board of
                          directors or managers or owning the largest or controlling percentage of the voting securities of
                          such person/entity or otherwise controlling the other.
                        </p>
                        <p>
                          “Brand” or “Brand Name” shall mean “Beerala Information Technologies”or “EVMAX” or such other successoror replacement brand name / trade mark / service mark as may be decided by the ServiceProvider upon a prior intimation to the Merchant.
                        </p>
                        <p>
                          “Confidential Information” means and includes any and all information which is confidential to
                          a Party including any (i) business information and business processes,(ii) any samples,
                          formulations, specifications, data relating to manufacturing and quality control processes and
                          procedures, (iii) advertising and marketing plans, (iv) any past, current or proposed development
                          projects or plans for future development work, (v) technical, marketing, financial and commercial
                          information whether relating to past or current or future, (vi) the commercial and business affairs
                          of a Party, (vi) all customer related information including any rates and discounts and (vii) and
                          with respect to the Service Provider shall include the End Customer Database.

                        </p>
                        <p>
                          “Deliverable(s)” shall mean the specific materials, devices, products, services or other
                          deliverables that are provided by Merchant to Service Providerduring the course of performing
                          Service Provider Businessas per this Agreement and any related document thereto.
                          “End Customer” shall mean the retail customers to whom Merchantoffers to sell or sells or from
                          whom Merchant receives offers to purchase the Products through the Platform.

                        </p>
                        <p>
                          “End Customer Database” shall mean all data / information (as may be updated from time to
                          time) about the persons/ entitiesincluding their names, addresses, contact details, queries,
                          orders and other requests made available by such persons / entities on the Platform or otherwise
                          captured by the Platform that shall further include the usage, behavior, trends and other
                          statistical information / data relating to such persons / entities, who (i) access the Platform or
                          otherwise get invitation to the Platform or correspond with the Platform, (ii) place any order for
                          Products on the Platform, or (iii) send any enquiry/ request with respect to the Platform, and shall
                          include all analysis and records based on such aforementioned information, including the
                          spending and other patterns of such persons/entitles and Products. For the avoidance of doubt,
                          any list, description or other grouping of consumers or customers or any derivative work from
                          End Customer Database shall be deemed to be End Customer Database.

                        </p>
                        <p>
                          “Intellectual Property” includes ideas, concepts, creations, discoveries,inventions,
                          improvements, know how, trade or business secrets; trademarks, service marks,domain names,
                          designs, utility models, tools, devices, models, methods, patents, copyright (including all
                          copyright in any designs and any moral rights), masks rights, design right, procedures,processes, 
                          systems, principles, algorithms, works of authorship, flowcharts, drawings, books,
                          papers, models, sketches, formulas, teaching techniques, electronic codes, proprietary
                          techniques, research projects, and other confidential and proprietary information, computer
                          programming code, databases, software programs, data, documents, instruction manuals,
                          records, memoranda, notes, user guides; in either printed or machine-readable form, whether or
                          not copyrightable or patentable, or any written or verbal instructions or comments. The End
                          Customer Database shall be considered to be the Intellectual Property of the Service Provider.

                        </p>
                        <p>
                          “Intellectual Property Rights” means and includes (i) all rights, title orinterest under any statute
                          or under common law or under customary usage including in any Intellectual Property or any
                          similar right, anywhere in the world, whether negotiable or not and whether registerable or not,
                          (ii) any licenses, permissions and grants in Intellectual Property (iii) applications for any of the
                          foregoing and the right to apply for them in any part of the world and (iv) all extensions and
                          renewals thereto.

                        </p>
                        <p>“Payment Facilitation Services” shall mean facilitating the receipt of Sale Price on the Platform
                          either along with Platform Services or otherwise (for example cash on delivery services).
                        </p>
                        <p>
                          “Platform” shall mean the websitewith a second level domain name / uniform resource locator
                          (URL) bearing the Brand Name with any top level domain name whether presently available for
                          registration or made available for registration at any future date.

                        </p>
                        <p>
                          “Platform Services” internet based electronic platform in the form of an intermediary to facilitate
                          sale and purchase of goods and services through Platform.
                        </p>
                        <p>
                          “Product(s)” shallmeanany and all goods and related servicesof the Merchantfor which Service
                          Provider makes available Service Provider Business to the Merchant.

                        </p>
                        <p>
                          “Sale Price” shall be the price at which the Product is offered for sale by the Merchant on the
                          Platform by using Platform Services to the End Customer. Parties agree that Sale Price is
                          dynamic and volatile and may vary at different times and points of sale and therefore can be
                          periodically and from time to time changed or revised by the Merchant in accordance with the
                          terms of this Agreement.

                        </p>
                        <p>
                          “Service Fees” shall mean the fees for availing either whole or part of the Service Provider
                          Business in accordance with the terms of this Agreement and/or Commercial Terms(the term as
                          defined in the Agreement).

                        </p>
                        <p>
                          “Service Provider Business” shall have the meaning as set out Recital 2 hereinabove and
                          shall include Platform, Platform Services, Payment Facilitation Services and Transaction Support
                          Services.

                        </p>
                        <p>
                          “Service Provider Content” shall mean the Platform, all the pages of the Platform, all the
                          content contained in the Platform (excluding any third party content and advertisements), look
                          and feel of the Platform, any and all information or content owned or controlled (e.g. by license or
                          otherwise) by Service Provider or its Affiliates, including text, images, graphics, photographs,
                          video and audio, and furnished by Service Provider or its Affiliates in connection with Platform
                          Services, Transaction Support Services, Payment Facilitation Services and for the purpose of
                          offering for sale of Products by the Merchant.

                        </p>
                        <p>
                          “Term” shall have the meaning as set out in Section 13.1 hereto.
                        </p>
                        <p>
                          “Territory” shallmean the entire world.
                        </p>
                        <p>
                          “Transaction Support Services” shall include services in relation to support the sale of the
                          goods and services by the Merchant to End Customer which shall include product listings,
                          warehousing services, logistics management services, Payment Facilitation Services, customer
                          support servicesand any other additional services that may beagreed between the parties.

                        </p><br>
                        <h6>2. INTERPRETATION</h6>
                        <p>In this Agreement, unless the context otherwise requires:</p>
                        <p>
                            (i) Words importing persons or parties shall include natural person, entity, partnership firm,
                            organization, operation, Company, HUF, voluntary association, LLP, joint venture, trust,
                            limited organization, unlimited organization or any other organization having legal
                            capacity;
                        </p>
                        <p>
                          (ii) Words importing the singular shall include the plural and vice versa, where the context
                          so requires;</p>
                        <p>
                          (iii) References to any law shall include such law as from time to time enacted, amended,
                          supplemented or re-enacted;

                        </p>
                        <p>
                          (iv) Reference to one gender shall include a reference to the other genders;
                        </p>
                        <p>
                          (v) References to the words “include” or “including” shall be construed without limitation;
                        </p>
                        <p>
                          (vi) References to this Agreement or any other agreement, deed, instrument or document
                          shall be construed as a reference to this Agreement , such other agreement, deed,
                          instrument or document as the same may from time to time be amended, varied,
                          supplemented or novated in accordance with the terms of this Agreement;

                        </p>
                        <p>
                          (vii) The headings and titles in this Agreement are indicative and shall not be deemed part
                          thereof or be taken into consideration in the interpretation or construction of this
                          Agreement;

                        </p>
                        <p>
                          (viii) The word “written” shall include writing in electronic form and “signed” shall include
                          electronic signature or any other electronic communication which signifies the sender’s
                          or originator’s intention to be bound by such electronic communication.

                        </p><br>
                        <h6>3. SERVICES</h6>
                        <p>
                          3.1 The Merchant appoints the Service Provider and Service Provider accepts such appointment to
                          make available the Service Provider Business to the Merchantfor the Products and in
                          accordance with the terms of this Agreement and as further agreed in commercial understanding
                          electronic document [hyperlinked here]or any other similar or analogous electronic or other
                          document(“Commercial Terms”)and in accordance with various Platform rules and policies
                          including privacy policy (“Platform Policies” – [hyperlinked here]). The Commercial Terms
                          and Platform Policies are deemed to have been incorporated in this Agreement by way of
                          reference.

                        </p>
                        <p>
                          3.2 Merchant agrees and acknowledges that Service Provider is free to provide Service Provider
                          Business and in the Territory in any manner and for any consideration as may be decided by
                          Service Provider in its sole and absolute discretion.

                        </p>
                        <p>
                          3.3 Service Provider in its sole and absolute discretion may refuse to provide any one or more of the
                          Service Provider Business including Platform, Platform Services, Payment Facilitation Services
                          and/or Transaction Support Services for any reason whatsoever and especially if providing such
                          Service Provider Business to the Merchant can be detrimental to the reputation, goodwill and
                          competitiveness of Service Provider or could cause any breach of any contractual commitments
                          of the Service Provider and cause Service Provider to breach any applicable laws.

                        </p>
                        <p>
                          3.3 Service Provider in its sole and absolute discretion may refuse to provide any one or more of the
                          Service Provider Business including Platform, Platform Services, Payment Facilitation Services
                          and/or Transaction Support Services for any reason whatsoever and especially if providing such
                          Service Provider Business to the Merchant can be detrimental to the reputation, goodwill and
                          competitiveness of Service Provider or could cause any breach of any contractual commitments
                          of the Service Provider and cause Service Provider to breach any applicable laws.

                        </p><br>
                        <h6>4. ADVERTISING,MARKETING AND SALES PROMOTION</h6>
                        <p>
                          4.1 Service Provider as the proprietor and owner of the Platform and Platform Services and rights
                          holder of the Brand Name may at its sole discretion carry out advertising and marketing activities
                          in relation to promotion of the Platform, Platform Services and Brand Name in any manner and to
                          any extent as may bedeemed fit by the Service Provider and for such purposes may engage in
                          certain sales promotion activities to increase the sales of Products on the Platform. Service
                          Provider and Merchant may agree on certain terms on which Merchant shall support such sales
                          and marketing activities of Service Provider including providing discounts on the Products or
                          other free of cost goods and services to the End Customers.

                        </p>
                        <p>
                          4.2 Service Provider may at its sole and absolute discretion on reasonable commercial efforts basis
                          market, promote or advertise the Products made available for sale by Merchant on the Platform
                          in compliance with this Agreement.

                        </p>
                        <p>
                          4.3 Where Merchant believes or is notified by other entity including any third party manufacturers of
                          the Products that any promotion plan/ activity undertaken by Service Provider is against any
                          applicable law or in breach of any contractual obligation of Merchant or such third party
                          manufacturer (in both cases supported by a written legal opinion from a reputed advocate),
                          Merchant shall intimate the same to Service Provider and upon such intimation, Service Provider
                          shall within reasonable time cease such plan/ activities.

                        </p>
                        <p>
                          4.4 Merchant agrees and acknowledges that Service Provider shall have the sole right (as to
                          between Service Provider and Merchant) for the design, look and feel, architecture, layout,
                          positioning and all aspects of the Platform including listing, positioning, indexing, placement and
                          tiering the Products offered for sale on the Platform by the Merchant and the Merchant shall not
                          question or dispute such exercise of right or discharge of responsibility by the Service Provider.

                        </p>
                        <p>
                          4.5 Service Provider shall be solely responsible at Service Provider‟s sole discretion to sell or license
                          any and all advertising and promotional time and space with respect to Platform including webpages
                          or such portions of the Platform that contains the details of the Products. The
                          advertisement and promotions on any part of the Platform may include video advertising,
                          display/banner/text advertisements, including but not limited to medium rectangle, leader-board,
                          roadblock, hyperlink, page branding, framing, widgets, pop-ups, pop-under, network
                          advertisements (for the sake of example, Google AdSense) available on the Platform. Service
                          Provider shall have the sole right and discretion to decide the style, placement and format of the
                          advertisement and promotion and the price and/or any other consideration, if any, for the sale
                          and license of such advertisement and promotion. Except for the facilitation of payment of sale
                          consideration of the Product through Payment Facilitation Services, Service Provider and/or its
                          Affiliates shall be entitled to retain any and all revenues generated from any sales or licenses of
                          all such advertisements and promotions.

                        </p>
                        <p>
                          4.6 Service Provider shall reasonably ensure that all advertisement/ promotion activities undertaken by the Service Provider:

                        </p>
                        <p>
                          (i) do not contain any material that, in its knowledge, would infringe or violate any intellectual property rights or any other personal or proprietary right of any person; and</p>
                        <p>
                          (ii) are not obscene or libelous; and</p>
                        <p>  (iii) comply with all applicable laws including standards and rules set forth by the Advertising
                          Standards Council of India or any other relevant government authority.

                        </p>
                        <h6>5. END CUSTOMER DATABASE</h6>
                        <p>
                          5.1 The End Customer Database shall be proprietary to the Service Provider. Service Provider shall alone retain all rights including all Intellectual Property Rights in the End Customer Database and
                          unless specifically agreed to in writing by the Service Provider, no rights in or to the End
                          Customer Database are deemed to have been granted to the Merchant. To the extent Merchant
                          derives any rights in the End Customer Database by virtue of it undertaking the Merchant
                          Business the Merchant shall hold such rights in trust for Service Provider and the Merchant shall
                          do and undertake all such acts to exclusively assign such rights in the End Customer Database
                          to the Service Provider. The Merchant further agrees that (a) all the End Customer Database
                          shall be treated as Confidential Information of the Service Provider for the purposes of this
                          Agreement; (b) Service Provider being the owner and proprietor of the End Customer Database
                          shall be entitled to use, store and exploit the same in any manner as may be deem fit by the
                          Service Provider and in accordance with Service Provider’s privacy policy as provided on the
                          Platform from time to time; and (c) Merchant shall not use the End Customer Database other
                          than selling the Products by availing Service Provider Business or required for law enforcement 
                          purposes and shall in no way sell, transfer or otherwise exploit the End Customer Database
                          without the express written consent of the Service Provider.

                        </p><br>
                        <h6>6. CONSIDERATION AND PAYMENT TERMS</h6>
                        <p>
                          <ul>
                            <li>6.1 Payments to be made by Merchant</li>
                            <li>6.1.1 In consideration of the provision of Service Provider Business by the Service Provider,
                            the Merchant shall pay to the Service Provider Service Fees which shall be calculated in
                            the manner as specified in the Commercial Terms.
                            </li>
                            <li>
                              6.1.2 Service Feesfor any additional services shall be as set out in the Commercial Terms.
                            </li>
                            <li>
                              6.1.3 Parties agree that the details of terms memorialized by the Commercial Terms are
                              dynamic in nature and will evolve or vary as the operating, promotional, marketing and
                              business environment of the Service Provider or user behavior on the Platform changes
                              and evolves and therefore the Commercial Terms will be adjusted or revised from time to
                              time or sometime occasionally or frequently by the Parties as necessary or appropriate
                              during the Term of the Agreement to accurately reflect the evolution of the aforesaid
                              environment and conditions. Such revisions would be with the mutual consent of the
                              Parties which consent can be oral, written or implied.For any oral consent, Service
                              Provider may on reasonable basis confirm such oral consent within reasonable time from
                              such consent and through written records including through electronic communications.

                            </li>

                          </ul>

                        </p>
                        <p>
                          6.2 Payment Terms:
                        </p>
                        <p>
                          6.2.1 Service Provider shall have the right to receive the Services Fees from the amounts due
                          to the Merchant under Payments Facilitation Services. To the extent the Service Provider
                          is unable to receive the Service Fees from the Payment Facilitation Services as
                          aforesaid; the Merchantshall make all payments within ten (10)business days of receipt
                          of the relevant invoicefrom the Service Provider.

                        </p>
                        <p>
                          6.2.2 Merchantshall be entitled to make any deduction or withholding in accordance with
                          applicable law and shall provide the necessary tax deduction certificates to the Service
                          Provider.

                        </p>
                        <p>6.3 Taxes:</p>
                        <p>
                          Each Party shall be responsible for any and all taxes on its business, and taxes based on its net
                          income or gross receipts.However, Service Provider shall be entitled to additionally charge
                          service tax or any other indirect or transaction taxes as applicable on one or more of the Service
                          Provider Business and Service Fees.

                        </p><br>
                        <h6>7. ADDITIONAL OBLIGATIONS OF SERVICE PROVIDER</h6>
                        <p>
                          7.1 Service Providershall reasonably maintain the Platform and Platform Services and shall on
reasonable efforts basis provide Transaction Support Services and other services comprising
Service Provider Business.

                        </p>
                        <p>
                          7.2 Service Provider shall reasonably maintain the registration of domain name in relation to the
Platform during the Term at its own costsfree fromany and all encumbrances, including
encumbrances which may lead to any adverse effect on Service Provider’s registration of the
domain name or its use of the Platform.

                        </p>
                        <p>
                            7.3 In order to process payments made by End Customers and to generally provide Payment
Facilitation Services, Service Provider shall reasonably maintain appropriate contracts with
payment gateways and shall comply with the applicable laws.

                        </p>
                        <p>
                          7.4 Service Provider shall ensure that it has or procures adequate technology as necessary to
                        </p>
                        <p>
                          7.5 Service Provider, as a part of Transaction Support Services, shall list the Products on the
Platform for the Merchant at the Sale Price provided or informed by the Merchant. Service
Provider acknowledges that the Sale Price is dynamic and volatile and may vary at different
times and points of sale and that the Merchant reserves the right to change or modify the Sale
Price of the Product at any time before the same is bought by the End Customer on the Platform.
The intimation of such revisions of the Sale Price could be oral or in writing. For any oral
intimation, Service Provider may on reasonable basis confirm such oral intimation within
reasonable time from such intimation and through written records including through electronic
communications.

                        </p><br>
                        <h6>8. OBLIGATIONS,COVENANTS AND WARRANTIES OF MERCHANT</h6>
                        <p>
                          8.1 Merchant shall not use the Service Provider Business for any purpose other than Merchant’s
Business and in relation to the Products.

                        </p>
                        <p>
                          8.2 Merchant shall manage and maintain sufficient inventory of the Products which the Merchant
offers to sell to End Customer on the Platform through Platform Services and shall mandatorily
deliver the Products as purchased by the End Customer to the Service Provider within such time
as may be prescribed in the Commercial Terms.

                        </p>
                        <p>
                          8.3 Merchant shall deliver exactly the same Product to the Service Provider for availing Transaction
Support Services from Service Provider in relation to the sale of Products to End Customer.</p>
                        <p>
                          8.4 Merchant shall offer the Products for sale on the Platform on the Sale Price which shall be
                          inclusive of all taxes, duties, levies, warehousing, packaging, shipping and logistics charges and
                          all other charges other than any entry taxes / octroi as applicable in the city or municipal limits of
                          the End Customer. The Sale Price shall be in compliance with all applicable laws and shall not
                          be more than the maximum retail price printed on the Products.

                        </p>
                        <p>
                          <b>8.5 Merchant shall undertake all the necessary after sales services to the End Customer including
providing warranty / guarantee / replacement services to the Products.
</b>
                        </p>
                        <p>
                          8.6 Merchant shall provide necessary access to the Service Provider to inspect the warehouse,
manufacturing facilities or other facilities and offices of the Merchant in order to ensure Merchant
is able to comply with its sales obligations to the End Customer. Merchant acknowledges and
agrees that this ingress, regress and inspection rights of the Service Provider is to ensure the
goodwill of the Platform, Platform Services and Brand Name and to provide good user
experience to the End Customer.

                        </p>
                        <p>
                          8.7 Merchant shall ensure that Merchant employs sufficient staff to meet and fulfill the requirements
of this Agreement and to sell, deliver and service the Products sold to the End Customers
through Platform Services. Merchant shall further ensure that the Merchant’s staff shall
participate in the relevant training programs as organized or approved by the Service Provider
from time to time.

                        </p>
                        <p>
                          8.8 Merchant shall not print, emboss or otherwise display any brand name, trade name, and
trademark, service mark on the Product, on the packing material and on the invoice other than
those displayed while making the sale offer on the Platform while packing the products for
delivery to Service Provider to avail Transactional Support Services.

                        </p>
                        <p>
                          8.9 Merchant shall provide series of invoice numbers in relation to the Products sold to the End
Customer(s) through Platform Services and such invoice number shall correspond to the books
of accounts of the Merchant as maintained by the Merchant under applicable law. As a part of
availing Transaction Support Services, the Merchant hereby authorizes Service Provider and
Service Provider Affiliates to issue the invoices containing invoice number from the aforesaid
series to the End Customer on behalf of the Merchant for the sale of Products. The Merchant
further authorizes Service Provider and Service Provider Affiliates to include the Brand Name on
the invoice and for the avoidance of doubt, the inclusion of the Brand Name shall not create any
relationship of agency, representative, partnership, joint-venture or otherwise between the
Merchant and Service Provider and the relationship shall always remain as that of an independent
contractor. Merchant acknowledges and agrees that Service Provider shall provide
in the invoice all the necessary details of the taxes, duties and other statutory levies applicable
on the sale and delivery of the Product(s) to the End Customer and it shall be the duty and
obligation of the Merchant to correctly and timely pay or deposit such taxes etc. to the
appropriate government and shall indemnify, defend and hold harmless Service Provider,
Service Provider Affiliates and their respective shareholders, directors, officers, employees,
contractors and agents in the event Merchant defaults in making the payment of such taxes etc.

                        </p>
                        <p>
                          8.10 The Products offered to be sold by the Merchant on the Platform and subsequent delivery of the
same to the Service Provider and Deliverables shall (a) exactly conform to the specifications and
representations made by the Merchant on the Platform; (b) shall comply with all the applicable
laws including that of the territory of the Merchant, the place from where Merchant dispatches the
Products to the Service Provider and the place of final delivery to the End Customer; (c) not
infringe any third party’s Intellectual Property Rightswhether in India or anywhere in the world;
and (d) not violate any international trade, import and export related laws including parallel
imports.

                        </p>
                        <p>
                          8.11 Merchant agrees and acknowledges that the title in the Products shall only be transferred from
Merchant to the End Customer upon delivery of the Products to the End Customer. For the
avoidance of doubt, the title and risk on the Products for any delivery of Products to Service
Provider for providing any Transaction Support Services before the purchase of Products by the
End Customer on the Platform shall always remain with the Merchant. The Merchant may in its
sole discretion take appropriate insurances to safeguard itself from any loss, breakage, theft or
damage of the Products till such time the Products are actually delivered to the Service Provide
involving or confusingly similar to, the Brand Name or, that constitutes any translation thereof into
any language.

                        </p>
                        <p>
                          8.18 Merchantunderstands and acknowledges that the Brand Name and reputation of Service
Provider is of utmost importance for its business and that the conduct of Merchantin the
performance of this Agreement and otherwise would have material impact and bearing on such
Brand Name and reputation of Service Provider. Further Merchantunderstands and
acknowledges that the obligations and covenants placed on Merchantin this Section or
elsewhere in the Agreement are essential for the maintenance of quality control and protection of
Brand Name, and to ensure timely payments to Merchant. Accordingly Merchantacknowledges
that no hardship or onerous obligation is being placed on Merchantunder this Agreement.

                        </p><br>
                        <h6>9. INTELLECTUAL PROPERTY</h6>
                        <p>
                          9.1 Intellectual Property Rights In Relation To Brand Name
                        </p>
                        <p>
                          9.1.1 Merchant acknowledges Service Provider’s absolute ownership of, interest in and rights to the
Brand Name and the Platform.

                        </p>
                        <p>
                          9.1.2 Without limitation to the foregoing, Merchantacknowledges and agrees that all goodwill in or
associated with the Brand Name, including any goodwill generated or arising by or through
Service Provider’s or Merchant’sactivities pursuant to this Agreement shall accrue for the benefit
of and shall belong exclusively to the Service Provider.

                        </p>
                        <p>
                          9.1.3 No right or interest in the Brand Name are granted or deemed to be granted by the Service
Provider to the Merchant.

                        </p>
                        <<p>
                          9.2 Intellectual Property Rights In Relation To Service Provider Content and Service Provider
Business
Service Provider shall retain sole ownership of all the intellectual properties, know how or other
proprietary rights in the Service Provider Content and Service Provider Business and no right or
interest is granted or shall be deemed to be granted by Service Provider to the Merchant.To the
extent Service Provider Content contains any proprietary content or information of the Merchant,
the Merchant hereby grants a royalty-free and world-wide license to such content or information
including a right to creative derivative product of such content or information.

                        </p><br>
                        <h6>10. CONFIDENTIALITY</h6>
                        <p>10.1 Each Party may disclose to the other such Confidential Information as may be necessary to
                            further the performance of this Agreement.
                        </p>
                        <p>10.2 The receiving Party undertakes to the disclosing Party:</p>
                        <p>(i) to keep confidential the disclosing Party’s Confidential Information;</p>
                        <p>
                          (ii) not to disclose the Confidential Information in whole or in part to any other person
without the disclosing Party’s prior written consent, except to the receiving Party’s
employees, agents and sub-contractors involved in the performance of this Agreement
on a confidential and need to know basis and provided that employees, agents and subcontractors
are bound by written agreements of confidentiality which are at least as
stringent as the provisions of this Agreement; and

                        </p>
                        <p>
                          (iii) touse the Confidential Information solely in connection with the performance of this
Agreement.

                        </p>
                        <p>
                          10.3 The aforementioned confidentiality obligations shall not extend to Confidential Information which:
                        </p>
                        <p>
                          (i) has ceased to be confidential without default on the part of the receiving Party;
                        </p>
                        <p>(ii) has been received from a third party who did not receive it in confidence;</p>
                        <p>(iii) the receiving Party is required by any court, government or other regulatory body to
disclose, but only to the extent required by law, provided that the receiving Party gives 
the disclosing Party written notice as soon as practicable of such requirement and
consult in good faith the disclosing party on the content and manner of any disclosure.
                        </p>
                        <p>
                          10.4 Upon request by the disclosing Party, the receiving Party must deliver to the disclosing Party all
documents and other materials in any medium in its possession or control which contain or refer
to the disclosing Party’s Confidential Information. If the documents or other materials are not
capable of being returned, the receiving Party must destroy and certify the destruction of such
documents and materials to the reasonable satisfaction of the Disclosing Party.

                        </p>
                        <p>
                          10.5 Your and Merchant personal / sensitive personal data / information shall be governed by the
Privacy Policy of the Platform, which terms (including all amendments, modifications,
reinstatements and substitutions) shall be deemed to be incorporated herein by way of reference.

                        </p><br>
                        <h6>11. INDEMNIFICATION AND LIMITATION OF LIABILITY</h6>
                        <p>
                          11.1 Merchantshall promptly on demand indemnify, defend and hold harmless the Service Provider,its
Affiliates and End Customer and their respective officers, directors, proprietors, partners,
managers, members, trustees, shareholders, employees and agents (“Indemnified Parties”) for
and against all claims, liabilities, costs and expenses (including reasonable attorney’s fees)
incurred or to be incurred by the Indemnified Parties that arise out of, in any way relate to, or
result from any breach by the Merchantof any of the provisions of this Agreement, or breach of
any laws by the Merchant, or negligence, fraud or willful misconduct of the Merchant or its
Affiliates and their respective officers, directors, shareholders, employees, contractors, subcontractors,
agents and personnel.For the avoidance of doubt, it is further clarified that the right
to indemnification in connection with any of the aforesaid claims of cause of action is
independent and in addition to other rights and remedies of the Indemnified Person that may be
available at law or in equity. Service Provider shall have a lien on the Products and on the
consideration received from the EndCustomer for the sale of Products on the Platform until
Merchant has fully discharged its obligations and liabilities toIndemnified Parties in accordance
with this Agreement. In the event Merchant is unable to indemnify the Indemnified Parties within
a reasonable period of time, Service Provider shall be entitled to sell or otherwise dispose of the
Products and set off the proceeds out of such sale and disposing off against Indemnified Parties‟
indemnification claims and/or if permitted under law or by virtue of any order of any court of law
Service Provider shall be entitled to receive the sale consideration from the payment gateway
which otherwise would have remitted by such payment gateway to the Merchant and/or set off
the amounts received by Service Provider from the End Customer who has availed cash on
delivery services.

                        </p>
                        <p>11.2 Service Provider’s Limitation of Liability:</p>
                        <p>
                          NOTWITHSTANDING ANYTHING CONTRARY CONTAINIED IN THIS AGREEMENT, IN
ANY EVENT SERVICE POVIDER AND ITS AFFILIATES SHALL NOT BE LIABLE
(WHETHER IN CONTRACT, WARRANTY, TORT (INCLUDING, BUT NOT LIMITED TO,
NEGLIGENCE), PRODUCT LIABILITY OR OTHER THEORY), TO THE MERCHANTOR
ANY OTHER PERSON OR ENTITY FOR COST OF COVER OR FOR ANY INDIRECT,
INCIDENTAL, SPECIAL, CONSEQUENTIAL, PUNITIVE OR EXEMPLARY DAMAGES
(INCLUDING DAMAGES FOR LOSS OF REVENUES, LOSS PROFIT OR ANTICIPATED
PROFITS, LOSS OF GOODWILL, LOSS OF BUSINESS OR DATA) ARISING OUT OF OR
IN RELATION THIS AGREEMENT.Service Provider’s entire liability to Merchantunder this
Agreement or under any applicable law or equity shall be limited solely to actual and proven
direct damages sustained by the Merchantas a result of the gross negligence or willful misconduct of 
the Service Provider and its Affiliate and their respective directors, officers,employees and agents in the 
performance of their respective services and other obligationsunder this Agreement. 

                        </p>
                        <p>
                          In no event shall the Service Provider be liable, vicariously or otherwise,
to the Merchantand its Affiliates or any third party for any losses, damages, liabilities, costs
(including reasonable legal costs) and expenses (including taxation)which are in the aggregate in
excess of the (i) amounts paid by the Merchantto the Service Provider in the immediately
preceding twelve month period under this Agreement – if such losses et al are due to Platform
Services, or (ii) the cost of the Products (excluding Services Fees) sold by the Merchant to End
Customer – if such losses et al are due to Transaction Support Services.

                        </p>
                        <h6>12. FURTHER REPRESENTATIONS AND WARRANTIES</h6>
                        <p>
                          12.1 In addition to other representations and warranties in this Agreement, each Party represents and
warrants as follows:

                        </p>
                        <p>
                          (i) it is a corporation duly organized, validly existing, and in good standing under the laws
of its incorporation;

                        </p>
                        <p>
                          (ii) execution and performance of this Agreement by such Party and the consummation of
the transactions contemplated hereby do not and will not contravene the certificate of
incorporation or by-laws of such Party and do not and will not conflict with or result in (a)
a breach of or default under any indenture, agreement, judgment, decree, order or ruling
to which such Party is a party that would materially adversely affect such Party’s ability to
perform its obligations under this Agreement; or (b) a breach of any applicable law; and

                        </p>
                        <p>
                          (iii) itshall comply with all applicable laws in the performance of its obligations and the
exercise of its rights under this Agreement.

                        </p>
                        <p>
                          12.2 EXCEPT AS SPECIFIED IN THIS AGREEMENT, NEITHER PARTY MAKES ANY WARRANTY
IN CONNECTION WITH THE SUBJECT MATTER OF THIS AGREEMENT. EACH PARTY
HEREBY DISCLAIMS ANY AND ALL IMPLIED WARRANTIES, INCLUDING WITHOUT
LIMITATION ALL IMPLIED WARRANTIES OF MERCHANTABILITY, FITNESS FOR A
PARTICULAR PURPOSE.

                        </p>
                        <p>
                          12.3 Service Provider specifically disclaims any and all express or implied warranties with
respect to the Platform, Platform Servicesand Payment Facilitation Services and these are
provided on “as is” basis.

                        </p><br>
                        <h6>13. TERM OF AGREEMENT</h6>
                        <p>
                          13.1 This Agreement shall commence on the Effective Date and shall be valid until termination.
(“Term”).

                        </p>
                        <p>
                          13.1 This Agreement shall commence on the Effective Date and shall be valid until termination.
(“Term”).

                        </p>
                        <p>
                          13.2 Either party shall have the right to terminate this Agreement and all then existing Commercial
Terms byissuing a 30-dayprior notice of termination in writing without any additional obligations
or liabilities to each other.

                        </p>
                        <p>
                          13.3 Either party shall have a right to terminate this Agreement or any Commercial Termstheretoupon
any material breach of this Agreement by the other Party provided that where in the reasonable
opinion of the non-breaching Party, such breach is capable of cure, the non-breaching Party shall
not terminate this Agreement / any Commercial Terms theretowithout providing the breaching
Party a cure period of [thirty (30) days] to cure such breach and provide the non-breaching Party
with necessary documents satisfactorily evidencing cure of such breach.

                        </p>
                        <p>
                          13.4 Service Provider shall have the right to terminate this Agreement upon occurrence of any
insolvency event in relation to Merchant. It is clarified that an insolvency event in relation to
Merchantshall be deemed to have occurred upon occurrence of any of the following:

                        </p>
                        <p>(i) Merchanthas ceased to carry on or threatens to cease the Business; or</p>
                        <p>
                          (ii) Merchanthas passed an effective resolution or a binding order has been made for its
winding up except under a scheme of amalgamation; or

                        </p>
                        <p>
                          (iii) Merchanthas become insolvent or has entered into liquidation (unless such liquidation is
for the purposes of a fully solvent reorganization); or

                        </p>
                        <p>
                          (iv) Merchanthas entered into, or taken steps to enter into, administration, administrative
receivership, receivership, a voluntary arrangement, a scheme of arrangement with 
creditors, any analogous or similar procedure in any jurisdiction or any other form of
procedure relating to insolvency, reorganization or dissolution in any jurisdiction, or a
petition is presented or other step is taken by any person with a view to any of those
things.

                        </p><br>
                        <h6>14. CONSEQUENCES OF TERMINATION</h6>
                        <p>
                          14.1 Upon expiry or termination of this Agreementall Confidential Information and any other materials
which may have been provided by one Party to the other shall be forthwith returned and the
returning Party shall certify such return and all copies thereof or any other material or information
which cannot be returned, shall be destroyed completely;

                        </p>
                        <p>
                          14.2 Termination of this Agreement shall not relieve any Party of any of its obligations or liabilities and
affect the rights and remedies of a Party, which have accrued prior to the date of termination.

                        </p>
                        <p>
                          14.3 The provisions of this Agreement contained in Sections9 (Intellectual Property),
10(Confidentiality), 11(Indemnification), 12(Representations and Warranties), 14(Consequences
of Termination), 15(Governing Law) and 16(Dispute Resolution), 17.2(Notices) shall survive the
expiry or early termination of this Agreement.

                        </p>
                        <p>
                          14.4 Termination of this Agreement shall not affect any obligations or duties of the Merchant and
Service Provider towards the End Customer which obligations or duties accrued before the
termination of this Agreement.

                        </p><br>
                        <h6>15. GOVERNING LAW</h6>
                        <p>
                          15.1 This Agreement shall be governed by the laws of India without giving effect to its principles of
conflict of laws. Subject to the provisions of Section 16 (Dispute Resolution); the courts at
Hyderabad shall have the exclusive jurisdiction in respect of any matter or dispute under or
connected with this Agreement, each of the parties hereby irrevocably consents to the jurisdiction
of such courts (and of the appropriate appellate courts therefrom) in any such suit, action or
proceeding and irrevocably waives, to the fullest extent permitted by law, any objection that it
may now or hereafter have to the laying of the venue of any such suit, action or proceeding in
any such court or that any such suit, action or proceeding brought in any such court has been
brought in an inconvenient forum. Process in any such suit, action or proceeding may be served
on the Merchantanywhere in the world, whether within or without the jurisdiction of any such
court including on the designated electronic mail address.

                        </p>
                        <p>
                          15.2 You and Companyshall not accept this Agreement and use the Platform if You and
Companydoes not wish to submit to the aforesaid applicable laws and jurisdiction.

                        </p><br>
                        <h6>16. DISPUTE RESOLUTION</h6>
                        <p>16.1 Any dispute which arises between the Parties shall be attempted to be resolved by good faith
discussions between the Parties.
                        </p>
                        <p>
                          16.2 Where the Parties are unable to resolve such disputes by good faith discussions within a period
of thirty (30) business days from the date of a written notice by either Party notifying existence of
such dispute, either Party shall be free to refer the dispute to arbitration in accordance with this
Section. This Agreement and the rights and obligations of the Parties shall remain in full force
and effect pending the award in such arbitration proceeding.

                        </p>
                        <p>
                          16.3 The arbitration shall be governed by the Arbitration and Conciliation Act, 1996 (as applicable in
India) for the time being in force, and/or any statutory modification or re-enactment thereof.

                        </p>
                        <p>
                          16.4 The place and seat of arbitration shall be Mumbaiand the language of the arbitration shall be
English.

                        </p>
                        <p>
                          16.5 The arbitration shall be conducted by three(3) arbitrators. Each Party shall appoint one arbitrator
each and the two appointed arbitrators shall appoint a presiding arbitrator. In case the Parties fail
to appoint their respective arbitrators within thirty (30) days from the submission of dispute for
settlement through arbitration in accordance with Section 16.2above, or the two appointed
arbitrators fail to appoint the presiding arbitrator with thirty (30) days from the date of
appointment of the later of the first two arbitrators, a solearbitrator shall be appointed in
accordance with the Indian Arbitration and Conciliation Act, 1996 by the appropriate court of law.

                        </p>
                        <p>
                          16.6 The award rendered shall be in writing and shall set out the facts of the dispute and the reasons
for the arbitrator’s decision. The award shall apportion the costs of the arbitration as the arbitrator
deems fair.

                        </p>
                        <p>
                          16.7 Notwithstanding anything contained in this Agreement, both Parties agree and acknowledges
that the covenants and obligations with respect to the matters covered by this Agreement and set
forth herein relate to special, unique and extraordinary matters, and that a violation of any of the
terms of such covenants and obligations will cause irreparable loss and injury to the aggrieved
Party. Therefore notwithstanding the provisions of this Agreement, either Party shall be entitled
to approach any appropriate forums for obtaining an injunction, restraining order or such other
equitable relief as a court of competent jurisdiction may deem necessary or appropriate.

                        </p><br>
                        <h6>17. GENERAL CLAUSES</h6>
                        <p>
                          17.1 Independent contractors
The relationship between Parties is on principal to principal basis. Nothing in this Agreement
shall be deemed to constitute either Party a partner, joint venture agent or legal representative of
the other Party, or to create any fiduciary, employer-employee relationship between the Parties.

                        </p>
                        <p>
                          17.2 Notices and Correspondences
Notices:Any notice, consent or waiver (including notice for Arbitration) required or permitted
hereunder shall be effective only if it is in writing and shall be deemed received by the Party to
which it is sent (i) upon delivery when delivered by hand, (ii) three (3)days after being sent, if sent
with all sending expenses prepaid, by an express courier with a reliable system for tracking
delivery, (iii) when transmitted, if sent by confirmed facsimile, or (iv) five (5) days (if Merchant is
in India) or fourteen (14) days (if Merchant is outside of India) after the date sent, if sent by
certified or registered mail, postage prepaid, return receipt requested, addressed as follows:

                        </p>
                        <p>If to the Merchant: If to the Service Provider:</p>
                        <p>
                          [At the address provided by You] Address: 
Sai Teja Towers,
503, Ajaynagar Colony, Bandlaguda,
Nagole, Hyderabad, Telangana - 500068
Tel: +91 90105 00076
Attention:Mr. Vasu Deva Reddy

                        </p>
                        <p>[Service Provider may change the aforesaid
address by posting the same on the
Platform]
                        </p>
                        <p>General communications through electronic mode:</p>
                        <p>
                          When the Merchantuses the Platform or send emails or other data, information or communication
to Service Provider, Merchantagrees and understands that Merchant is communicating with
Service Provider through electronic records and Merchantconsents to receive communications
via electronic records from Service Provider periodically and as and when required. Service 
Provider will communicate with Merchantby email at the designated electronic mail address
provided by the Merchant at the time of registration.

                        </p>
                        <p>
                          17.3 Assignment and Sub-Contracting
                        </p>
                        <p>
                          Merchantshall not assign any of its rights, obligations or responsibilities under this Agreement
without the prior written consent of Service Provider and in absence of such consent any such
assignment shall be null and void. All terms and conditions of this Agreement shall be binding
upon and shall inure to the benefit of the parties hereto and their successors and authorized
assignees.Merchant understands, acknowledges and agrees that Service Provider may subcontract
one or more of the Service Provider Business to any third party including Affiliates.

                        </p>
                        <p>17.4 Press Releases / Public Statement:</p>
                        <p>
                          Unless required by law, the Merchant will not make any public announcement or issue any press
release concerning the transactions contemplated by this Agreement without the prior consent of
the Service Provider.

                        </p>
                        <p>
                          17.5 Amendment and evolution of Commercial Terms on periodic basis</p>
                        <p>  
                          Service Provider may amend this Agreement, Commercial Terms and Platform Policies at any
                          time by posting a revised version on the Platform. All updates and amendments may be notified
                          to Merchanton designated electronic mail address. Merchantis advised to regularly check for any
                          amendments or updates to the terms and conditions contained in this Agreement, Commercial
                          Terms and Platform Policies. It is strongly advised that Commercial Terms be checked on daily
                          basis as these evolve on regular basis based on certain criteria.Merchant’s using Platform,
                          Platform Services or Service Provider Business after Service Provider’s amendment to this
                          Agreement, Commercial Terms and Platform Policies shall be deemed to be Merchant’s
                          unconditional and absolute acceptance of such amendments (effective from the date such
                          amendments were made by the Service Provider).If Merchant does not agree to the change or
                          amendments, Merchant can cease using the Service Provider Business (except for those
                          Products which have been bought by the End Customers) and may terminate this Agreement as
                          provided in Section 13.2.

                        </p>
                        <p>
                          17.6 Severability</p>
                        <p>
                          It is the intent of the Parties that in case any one or more of the provisions contained in this
                          Agreement shall be held to be invalid or unenforceable in any respect, such provision shall be
                          modified to the extent necessary to render it, as modified, valid and enforceable under applicable
                          laws and such invalidity or unenforceability shall not affect the other provisions of this
                          Agreement.

                        </p>
                        <p>17.7 Waiver</p>
                        <p>
                          Except as expressly provided in this Agreement, no waiver of any provision of this Agreement
shall be effective unless set forth in a written instrument signed by the Party waiving such
provision. No failure or delay by a Party in exercising any right, power or remedy under this
Agreement shall operate as a waiver thereof, nor shall any single or partial exercise of the same
preclude any further exercise thereof or the exercise of any other right, power or remedy. Without
limiting the foregoing, no waiver by a Party of any breach by any other Party of any provision
hereof shall be deemed to be a waiver of any preceding or subsequent breach of that or any
other provision hereof.

                        </p>
                        <p>17.8 Further Assurance</p>
                        <p>
                          Each Party shall co-operate with the other Party and execute and deliver to the other Party such
instruments and documents and take such other actions as may be reasonably requested from
time to time in order to carry out, evidence and confirm their rights hereunder and the intended
purpose of this Agreement and to ensure the complete and prompt fulfillment, observance and 
performance of the provisions of this Agreement and generally that full effect is given to the
provisions of this Agreement.

                        </p>
                        <p>
                          17.9 Covenants Reasonable</p>
                        <p>  The Parties agree that, having regard to all the circumstances, the covenants contained herein
                          are reasonable and necessary for the protection of the Parties. If any such covenant is held to be
                          void as going beyond what is reasonable in all the circumstances, but would be valid if amended
                          as to scope or duration or both, the covenant will apply with such minimum modifications
                          regarding its scope and duration as may be necessary to make it valid and effective.

                        </p>
                        <p>
                          17.10 Independent Rights</p>
                        <p>  Each of the rights of the Parties hereto under this Agreement are independent, cumulative and
                          without prejudice to all other rights available to them, and the exercise or non-exercise of any
                          such right shall not prejudice or constitute a waiver of any other right of the Party, whether under
                          this Agreement or otherwise.

                        </p>
                        <p>
                          17.11 Counsel and management participation</p>
                        <p>  You and Merchantacknowledge and confirm that you attorneys and management representatives
                          have read, reviewed and approved this Agreement and that You and Merchanthave had the
                          benefit of its independent legal counsel’s advice with respect to the terms and provisions hereof
                          and its rights and obligations hereunder.

                        </p>
                        <p>18. GRIEVANCE OFFICER</p>
                        <p>    In accordance with Information Technology Act, 2000 and the rules made thereunder, the name
                            and contact details of the Grievance Officer currently is Mr. Rahul Reddy with address at
                            Sai Teja Towers, 503, Ajaynagar Colony, Bandlaguda, Nagole, Hyderabad, Telangana – 500068. With
                            email ID:mrahulreddy29@gmail.com. Any change shall be communicated on the Platform. Service of 
                            notice forDispute Resolution and for purposes other than those which are required under Information
                            Technology Act, 2000 to be given only to the Grievance Officer shall not be valid.
                          </p>
                          <p></p>
                        </div><br><br><br>
                        <div style="height: 300px; overflow: auto;border: 1px solid #ddd;"><br>
                          <h4><b>MarketPlace Policy </b></h4><br>
                          <p>
                            For the purpose of this Marketplace Policy (hereinafter referred to as this <b>"Policy"</b>), wherever the context so requires, <b>"you"</b> and <b>"your"</b> shall relate to any natural or legal person who has agreed to become a merchant / seller on the evmax.in (the <b>"Website"</b>). The word <b>"Customer"</b> shall mean a buyer who places an order on the Website, and the terms <b>"evmax" "we", "us"</b> and <b>"our"</b> shall mean Beerala Information Technologies Private Limited, a company incorporated under Companies Act, 1956 with registered office at Sai Teja Towers, 503, Ajaynagar Colony, Bandlaguda, Nagole, Hyderabad, Telangana – 500068.
                          </p>
                          <p>
                            We at evmax.in give customer satisfaction the highest priority, and expect our merchants to support us in delighting our users and Customers. As a merchant, whilst selling on the Website, you are expected to deliver prompt and efficient service to ensure that the Customer's experience of shopping on the Website is a delightful one. In addition to the terms and conditions detailed in our <b>E-Commerce Services Agreement</b>, we have the following expectations from you:
                          </p>
                          <br>
                          <h6><b>1.  Order Fulfilment and Timely Shipments</b></h6><br>
                          <div>
                            <p>
                              1.  You are expected to process orders received from the Customers through the Website in a timely manner and provide the same to the Customers within the stipulated timelines (as agreed at the time of your registration as a merchant on the Website, and as displayed on your login page (<b>"Merchant Dashboard"</b>) failing which the order shall be cancelled for non-fulfillment.
                            </p>
                            <p>
                              2. Providing a hassle-free shopping experience to the Customer is of utmost priority, and we would like to reiterate that adherence to pre-agreed timelines for shipping of products is of essence to our relationship with you. If the products are not delivered to the Customer within the stipulated timelines, the order may be cancelled and we may be required to process a refund of the amount paid by the Customer for the same
                            </p>
                            <p>
                              3.  In spite of cancellation of an order due to non-fulfillment of the same, or delay in shipment of the product on your part, we shall be entitled to charge our fee to you in respect of such cancelled order, in consideration for the services provided by us to facilitate such order, and such fee may, at our sole discretion, be adjusted against subsequent remittances, or independently claimed from you
                            </p>
                            <p>
                              4.  Any failure to adhere to the timelines for fulfillment of an order or timely shipment of the product ordered by the Customer will be considered to be non-performance of your obligations, and repeated non-performance may lead to temporary or permanent suspension of your selling privileges on the Website.
                            </p>
                            <p>
                              5.  In addition to the above, you shall be liable to indemnify us and the other Indemnified Parties (as defined in the<b> E-Commerce Services Agreement</b>) in accordance with the E-Commerce Services Agreement, for any cancellation due to non-fulfillment, or non-fulfillment of an order.
                            </p>
                          </div><br>
                          <h5><b>2.  Merchant Remittances</b></h5><br>
                          <div>
                            <p>
                              1.  Payments for orders that have been fulfilled shall be remitted to your account, post receipt of funds through the payment gateways, as per applicable laws and within the T+3 timeline prescribed by the Reserve Bank of India (wherein “T” shall mean the date on which the product is successfully delivered to the Customer).
                            </p>
                            <p>
                              2.  Remittances are usually processed twice a week, i.e., on Monday and Thursday of every week. In the event a Monday or Thursday is a bank holiday or any public holiday, the remittances shall be processed on the next working day.
                            </p>
                            <p>
                              3.  All remittances shall be processed after applying / off setting all adjustments due from your account. If you have any queries with respect to the amounts being remitted to your account, please contact our Payments Team.
                            </p>
                          </div><br>
                          <h5>3.  Know Your Customer ("KYC") mandate</h5>
                          <div>
                            <p>
                              1.  You will be required to complete the KYC procedure for verification of your identity and of the bank account you provided to us for receiving remittances as outlined above, as required by the bank and as per our internal requirements. Failure to comply with this requirement will result in remittances being frozen, until the required documents are submitted and validated by us.
                            </p>
                            <p>
                              2.  You may provide any of the following documents for the KYC procedure:
                            </p>
                            <ul>
                              <li>o GSTIN;</li>
                              <li>o PAN Card;</li>
                              <li>o Cancelled cheque with the name of the Company printed on it;</li>
                              <li>o Declaration (in case of sole proprietorship).</li>
                            </ul>
                            <p>
                              3.  The documents submitted by you should correspond to, and should validate the details provided by you on the Merchant Dashboard.
                            </p>
                          </div><br>
                          <h5>4.  Item Quality, Customer Complaints, and Refunds</h5>
                          <div>
                            <p>
                              1.  In addition to the covenants and warranties provided by you under the E-Commerce Services Agreement, you should ensure that the items being sold to Customers are of high quality and in good working condition, and are not Unsuitable Products. For the purpose of this policy, the term “Unsuitable Product” means a product (a) that is defective, damaged, or lacking required label(s) as required under the Legal Metrology Act, 2009 and the rules and regulations thereunder, (b) that does not conform to the standards and the quality control checklist shared by us, or (d) that we determine to be unsuitable and unfit to be sold on the Website.
                            </p>
                            <p>
                              2.  As per applicable laws, post sales, delivery of goods to the Customer and Customer satisfaction will be your (seller) responsibility. In the event a Customer reaches out to our Customer Support Team and informs us that an item has not been received, then our Customer Support Team may require you to furnish the proof of delivery <b>("PoD")</b> within 5 (five) days of such intimation. As agreed at the time of your registration on the Website, and as per applicable laws, our Customer Support Team may assist you with ensuring customer satisfaction and resolving complaints received from Customers, with respect to products sold by you on the Website.
                            </p>
                            <p>
                              3.  On failing to receive the PoD from you within a reasonable time, we will be compelled to record the order as not having been fulfilled, and you will receive a notification on the Merchant Dashboard intimating you of such record. In such event, the Customer will be entitled to a refund of the amount paid by him/her for the relevant product. You hereby agree to cooperate with us in order to resolve, to the Customer’s satisfaction, all cases of items that may have been shipped but not received.
                            </p>
                            <p>
                              4.  You agree to accept all products that are sold by you on the Website and shipped, that may not have been delivered successfully to the Customer, and are returned to you by your delivery partners. In such event also, the Customer will be entitled to a refund of the amount paid by him/her for the relevant product.
                            </p>
                            <p>
                              5.  Repeated complaints from Customers with regard to the same product or type of product may result in discontinuation of the listing of that particular product or type of product on the Website, and disciplinary action against you including temporary or permanent suspension of your selling privileges on the Website.
                            </p>
                            <p>
                              6.  If the amount that is required to be refunded to the Customer is less than INR 1,000 (Rupees One thousand only) and less than INR 5,000 (Rupees Five thousand only) (for products under the Vehicle Category), we may not insist on the Customer returning the relevant product to you (in consultation with your team). However, if the amount required to be refunded to the Customer is higher than as mentioned herein, you will be expected to arrange to have the relevant product picked up from the Customer’s premises. We do not guarantee the return of such products, and further disclaim all responsibilities and liabilities for any product that has not been returned by the Customer. However, this shall not prevent you from independently pursuing a return claim against the Customer.
                            </p>
                            <p>
                              7.  In the event the Customers are provided with refunds for products purchased from you, we shall, at our sole discretion, be entitled to set off the amounts payable to us (including our commission/remittance charge) against subsequent remittances to you, or independently claim the same from you.
                            </p>
                            <p><b>8.  As per applicable laws, you will be solely responsible for any warranties or guarantees for the products being sold by you on the Website.</b></p>
                          </div>
                          <div>
                            <h5>5.  Merchant Returns and Debit</h5>
                            <p>
                              <p>
                                1.  In the event of cancellations by the Customer prior to the product being delivered to Customer:
                                <br>
                                <table class="table table-bordered" align="center">
                                  <thead>
                                    <tr>
                                      <th></th>
                                      
                                      <th colspan="2" style="text-align: center;">Recovery for the Product Cancelled</th>
                                    </tr>

                                  </thead>
                                  <tbody>
                                    <tr>
                                      <th>Reasons for Refund</th>
                                      <th>evmax fees</th>
                                      <th>Remittence Fee</th>
                                    </tr>
                                    <tr>
                                      <td>Out of Stock</td>
                                      <td>Yes</td>
                                      <td>No</td>
                                    </tr>
                                    <tr>
                                      <td>Missed Timeline</td>
                                      <td>Yes</td>
                                      <td>No</td>
                                    </tr>
                                  </tbody>
                                </table>
                              </p>
                              <p>
                                <br>
                                2.  In the event of cancellations by the Customer post the product having been delivered:<br>
                                <table class="table table-bordered" align="center">
                                  <thead>
                                    <tr>
                                      <th rowspan="2" class="text-center">Reasons For Refund</th>
                                      
                                      <th colspan="2" style="text-align: center;">Recovery for the Product Cancelled</th>

                                    </tr>
                                       <tr>
                                      
                                      <th>evmax fees</th>
                                      <th>Remittence Fee</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    
                                    <tr>
                                      <td >Defective Product</td>
                                      <td >Yes</td>
                                      <td>Yes</td>
                                    </tr>
                                     <tr>
                                      <td >Incorrect  Product</td>
                                      <td >Yes</td>
                                      <td>Yes</td>
                                    </tr>
                                     <tr>
                                      <td >Incomplete  Product</td>
                                      <td >Yes</td>
                                      <td>Yes</td>
                                    </tr>
                                     <tr>
                                      <td >Damaged  Product</td>
                                      <td >Yes</td>
                                      <td>Yes</td>
                                    </tr>
                                  </tbody>
                                </table><br>
                              </p>
                              <p>
                                3.  All cancelled products will be required to be picked up from the Customer’s premises within 7 (seven) days of notification of the cancellation on the Merchant Dashboard.
                                
                            </p>
                          </p>
                          </div>
                          <h5>6.  Terms of Packaging</h5>
                          <p>
                            <p>
                              1.  The order items can be packaged and shipped to the Customer in a consistent manner. Expected proper packing care is taken to avoid any damage for the products.
                            </p>
                            <p>
                              2.  Nothing contained in this policy or in any other agreement entered by you with us shall deem to grant any rights to you, in any intellectual property owned by us. You hereby agree to use the packaging material in order to pack and ship the items safely ordered by a Customer through our Website. 
                            </p>
                            <p>
                              3.  All terms relating to intellectual property, as detailed in our E-Commerce Services Agreement, shall apply to you as if reproduced herein.
                            </p>
                          </p>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" id="checkbox111" class="form-check-input" required>
                            <label for="checkbox111" class="form-check-label">I agree to the terms and conditions</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" id="checkbox112" class="form-check-input">
                            <label for="checkbox112" class="form-check-label">I want to receive newsletter</label>
                        </div>
                                                     <?php
                                if (isset($term_docs) && (count($term_docs) > 0)) {

                                    foreach ($term_docs as $doc) {
                                        ?>
                        <div id="sb<?php echo $doc->m_category_id ? $doc->m_category_id : ''; ?>" class="p_element">
                            <p> &#10003; <b style="color: #57b952;"><?php echo $doc->name ? $doc->name : ''; ?></b></p>
                            <embed src="<?php echo base_url(); ?>public/uploads/admin/termsncond/<?php echo $doc->doc_path ? $doc->doc_path : ''; ?>" width="100%" height="300" type='application/pdf'>

                        </div>

                                      
    <?php }
} ?>
                        
                     
                        
                        <button class="btn btn-mdb-color btn-rounded prevBtn-2 float-left reg402" type="button" style="font-size: 12px;" id="previous2">Previous</button>
                        <button class="btn btn-mdb-color btn-rounded nextBtn-2 float-right reg402 submitfinal" type="button" style="font-size: 12px;" id="next3">Next</button>
                    </div>
                </div>
</form>
                <!-- Fourth Step -->
                
         <div class="row setup-content-2" id="step-4">
                   

                    <!-- Modal -->
                    <!--<div class="modal1 mfp-hide" id="myModal1">
                        <div class="block divcenter" style="background-color: #FFF; max-width: 700px;">
                            <button title="Close (Esc)" type="button" class="mfp-close">×</button>
                            <div class="row nomargin clearfix">
                                <div class="col-md-6" data-height-xl="456" data-height-lg="456" data-height-md="456" data-height-sm="0" data-height-xs="0" style="background-image: url(assets/frontend/img/4.jpg); background-size: cover;"></div>
                                <div class="col-md-6 col-padding12" data-height-xl="456" data-height-lg="456" data-height-md="456" data-height-sm="456" data-height-xs="456">
                                    <div>
                                    <h4 class="uppercase ls1 "><i class="icon-ok-sign reg4step iconcolr"></i></h4>
                                    <form action="#" class="clearfix" style="max-width: 500px;">
                                        <div class="col_full">
                                            <p class="parabottm">1. Verify mail sent to: ada@gmail.com</p>
                                             <span class="parabottm1">OR</span>
                                            <p class="parabottm">2. Verify OTP sent to : 9875462103</p>

                                        </div>
                                        <div class="col_full">
                                            <label class="bottm">Enter OTP: </label>
                                             <span style="padding-left: 18px;"><input type="password" id="template-op-form-password" name="template-op-form-password" value="" class="sm-form-control11" /></span>
                                        </div>

                                        <div class="col_full nobottommargin">
                                            <button type="submit" class="button button-rounded button-small button-dark nomargin" value="submit">Submit</button>
                                            <span><a href="#" class="textunderline">Resend Otp</a></span>
                                        </div>
                                        
                                    </form>
                                    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>-->
                </div>
           
        </div>

        <div class="questions-box text-center">
            <h1>Still Have Questions? Contact Us</h1>
            <a href="#" class="btn btn-common">Contact</a>
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
                    <li><i class="icon-call-out"> </i> <span> 9010500076 </span></li>
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
                    <li><i class="icon-call-out"> </i> <span> 9010500076 </span></li>
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
  
             $("#next3").on("click",function(){
                 var email_alert = $("#businessEmail").val();
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
          $("#otp_email").val($("#businessEmail").val());
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
alert("OTP Sent successfully, check your "+email_alert+" email");
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

	
        
        
        
    });	
    

</script>  
<script>  
	$(document).ready(function(){
            //alert();
            //$('#myModal1').addClass('not-animated');
            $('#next3').prop('disabled', true);
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
    $('#checkbox111').click(function() {
        if ($(this).is(':checked')) {
            //alert();
            $('#next3').prop('disabled', false);
           // $('#next3').attr('disabled', 'disabled');
        } else {
            //alert();
            $('#next3').prop('disabled', true);
           // $('#next3').removeAttr('disabled');
        }
    });

</script>  
<script type="text/javascript">
// Get the modal
var modal = document.getElementById('myModal1');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

</script>