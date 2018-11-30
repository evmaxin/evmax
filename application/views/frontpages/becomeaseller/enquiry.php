       <style type="text/css">
      * {box-sizing: border-box}
body {font-family: "Lato", sans-serif;}

/* Style the tab */
.tab {
    float: left;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
    width: 30%;
    height: 300px;
}

/* Style the buttons inside the tab */
.tab button {
    display: block;
    background-color: inherit;
    color: black;
    padding: 22px 16px;
    width: 100%;
    border: none;
    outline: none;
    text-align: left;
    cursor: pointer;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
    background-color: #ddd;
}

/* Create an active/current "tab button" class */
.tab button.active {
    background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
    float: left;
    padding: 0px 12px;
    border: 1px solid #ccc;
    width: 70%;
    border-left: none;
    height: 300px;
}


    </style>

    <!-- Header Section Start -->
    <div class="header">    

      <!-- Start Top Bar -->
      <div class="top-bar" style="height: 40px;">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-sm-4">
              <div class="language-wrapper enF003">
                <a href="#" class="enF002"><i class="icon-phone"></i> Call Us: (123) 456- 789</a>
              </div>        
            </div>


            
          </div>
        </div>
      </div>
      <!-- End Top Bar -->    

      <!-- Start  Logo & Naviagtion  -->
      <nav class="navbar navbar-default enF001" data-spy="affix" data-offset-top="50">
        <div class="container">
          <div class="row">
            <div class="navbar-header enA007">
              <!-- Stat Toggle Nav Link For Mobiles -->
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <i class="fa fa-bars"></i>
              </button>
              <a class="navbar-brand enF008" href="index.html">
                <img src="<?php echo base_url() ?>assets/frontend//img/evlogo.png" alt="" class="enF007">
              </a> 
            </div>
            <div class="navbar-collapse collapse">
              <!-- Start Navigation List -->
              <ul class="nav navbar-nav">
                <li> <a class="active" href="index.html">EV ecosys</a></li>
                <li> <a  class="enF002" id="enquiryButton">Enquiry Form </a></li>
                <li> <a href="#" class="enF002">How to become Partner </a></li>
                <li> <a href="<?php echo base_url() ?>BecomeASeller/howitworks" class="enF002">How it works </a></li>
                <li> <a href="#" class="enF002">Contact </a></li>
                
              </ul>
             
            </div>
          </div>
        </div>
        <!-- End Header Logo & Naviagtion -->

        <!-- Mobile Menu Start -->
        <ul class="mobile-menu">
          <li> <a class="active" href="index.html">EV ecosys</a></li>
                <li> <a id="enquiryButton" class="enF00A1">Enquiry Form </a></li>
                <li> <a href="#" class="enF00A1">How to become Partner </a></li>
                <li> <a href="#" class="enF00A1">How it works </a></li>
                <li> <a href="#" class="enF00A1">Contact </a></li>
        </ul>
        <!-- Mobile Menu End -->
      </nav>

    </div>
          <div class="row visible-lg visible-md" style="margin: 0 auto !important;position:  relative;left: 30%;top:  11px;">
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
    <!-- Header Section End -->    

    <!-- Main Slider Section -->

  <div class="w3-content w3-display-container">
  <img class="mySlides" src="<?php echo base_url() ?>assets/frontend//img/enquiry/banner.png" style="width:100%">
  </div>
    <!-- Main Slider Section End-->

    <section id="shop-collection">
      <div class="container max11">
        <div class="col-md-12 col-sm-12 col-xs-12 padng">
          <div class="row col-md-12 max2 " >
            <div class="col-md-3 col-sm-6 col-xs-12 max1 enF007A3">
              <div class="shop-product" style="border-radius: 98%;"> 
                <div class="product-box" style="border-radius: 98%;">
                  <a href="#"><img src="<?php echo base_url() ?>assets/frontend//img/sideimg/07.png"  alt=""></a>
                </div>
              </div>   
              <p class="max13">New & Used <br>Electric Vehicles</p>          
            </div>
            
            <div class="col-md-3 col-sm-6 col-xs-12 max1 enF007A3">
              <div class="shop-product" style="border-radius: 98%;"> 
                <div class="product-box" style="border-radius: 98%;">
                  <a href="#"><img src="<?php echo base_url() ?>assets/frontend//img/sideimg/a6.png"  alt=""></a>
                </div>
              </div> 
              <p class="max13">Electric Vehicles <br> Experience Studio</p>            
            </div>

            <div class="col-md-3 col-sm-6 col-xs-12 max1 enF007A3">
              <div class="shop-product" style="border-radius: 98%;"> 
                <div class="product-box" style="border-radius: 98%;">
                  <a href="#"><img src="<?php echo base_url() ?>assets/frontend//img/sideimg/09.png"  alt=""></a>
                </div>
              </div>   
              <p class="max13">Life Time </br>Free Service</p>          
            </div>

            <div class="col-md-3 col-sm-6 col-xs-12 max1 enF007A3">
              <div class="shop-product" style="border-radius: 98%;"> 
                <div class="product-box" style="border-radius: 98%;">
                  <a href="#"><img src="<?php echo base_url() ?>assets/frontend//img/sideimg/12.png"  alt=""></a>
                </div>
              </div>
              <p class="max13">Battery Stations Charging Stations</p>             
            </div>

            <div class="col-md-3 col-sm-6 col-xs-12 max1 enF007A3">
              <div class="shop-product" style="border-radius: 98%;"> 
                <div class="product-box" style="border-radius: 98%;">
                  <a href="#"><img src="<?php echo base_url() ?>assets/frontend//img/sideimg/a2.png"  alt=""></a>
                </div>
              </div>  
              <p class="max13">Easy Monthly Installments</p>           
            </div>

            <div class="col-md-3 col-sm-6 col-xs-12 max1 enF007A3">
              <div class="shop-product" style="border-radius: 98%;"> 
                <div class="product-box" style="border-radius: 98%;">
                  <a href="#"><img src="<?php echo base_url() ?>assets/frontend//img/sideimg/14.png"  alt=""></a>
                </div>
              </div>    
              <p class="max13">Genuine EV Spare Parts</p>         
            </div>

            
          </div>
        </div>

        
      </div>
    </section>

    

    <section class="full-row">
      <div class="history-img wow fadeInLeft hidden-xs" data-wow-delay="500ms" data-wow-duration="1000ms">
        <img src="<?php echo base_url() ?>assets/frontend//img/enquiry/processs.png" alt="">
      </div>
      <div class="container max11">
        <div class="row">
          <div class="col-md-7 col-sm-12 pull-right">
            <div class="enF005 flex-box">
              <ul class="nav nav-tabs enF006 enF001 hidden-xs visible-lg visible-md" role="tablist">
                <li class="active" role="presentation"><a href="#F11" aria-controls="F11" role="tab" data-toggle="tab">Step 1</a></li>
                <li role="presentation"><a href="#F12" aria-controls="F12" role="tab" data-toggle="tab" >Step 2</a></li>
                <li role="presentation"><a href="#F13" aria-controls="F13" role="tab" data-toggle="tab">Step 3</a></li>
                <li role="presentation"><a href="#F14" aria-controls="F14" role="tab" data-toggle="tab">Step 4</a></li>
                <li role="presentation"><a href="#F15" aria-controls="F15" role="tab" data-toggle="tab">Step 5</a></li>
              </ul>
               <ul class="nav nav-tabs enF006 enF001 visible-xs hidden-lg hidden-md" role="tablist">
                <li class="active" role="presentation"><a href="#F11" aria-controls="F11" role="tab" data-toggle="tab">Step 1</a></li>
                <li role="presentation" class="enF0094S"><a href="#F12" aria-controls="F12" role="tab" data-toggle="tab" >Step 2</a></li>
                <li role="presentation" class="enF0094S"><a href="#F13" aria-controls="F13" role="tab" data-toggle="tab">Step 3</a></li>
                <li role="presentation" class="enF0094S"><a href="#F14" aria-controls="F14" role="tab" data-toggle="tab">Step 4</a></li>
                <li role="presentation" class="enF0094S"><a href="#F15" aria-controls="F15" role="tab" data-toggle="tab">Step 5</a></li>
              </ul>
              <div class="no-padding-mobile tab-content">
                <div role="tabpanel" class="tab-pane active" id="F11">
                  <h2 class="enF009">Send <span class="enF0010">Enquiry Form</span></h2>
                </div>
                <div role="tabpanel" class="tab-pane" id="F12">
                  <h2 class="enF0091">Receive </br><span class="enF0010">Registration Form</span></h2>
                </div>
                <div role="tabpanel" class="tab-pane" id="F13">
                  <h2 class="enF0092">Submit </br><span class="enF0010">Registration Form</span></h2>
                </div>
                <div role="tabpanel" class="tab-pane" id="F14">
                  <h2 class="enF0093">Receive </br><span class="enF0010 enF0095">Welcome email with login user ID and Password</span></h2>
                </div>
                <div role="tabpanel" class="tab-pane" id="F15">
                  <h2 class="enF0094 enF0095">List your product and start selling on </br><span class="enF0010 enF0094">EV ecosys Platform</span></h2>
                </div>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="our-services-wrapper enS4">
      <div class="container">
   
        <div class="row">
      <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="single-service">
          <div class="single-services enF007A2">
            <div class="services-inner">
              <div class="our-services-icon"> <span class="enS1">1</span></div>
              <div class="our-services-text">
                <h3>Customer Order</h3>
                <p class="enS2">Receive order on your Merchant Dashbord and Text message on your registered mobile phone</p></div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="single-service">
          <div class="single-services enF007A2">
            <div class="services-inner">
              <div class="our-services-icon"> <span class="enS1">2</span></div>
              <div class="our-services-text">
                <h3>Packing and Delivery </h3>
                <p>Pack the product and our notify ready for pickup on merchant dashboard</p>
                <p class="enS3">Our delivery partner will pickup and deliver to customer</p></div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="single-service">
          <div class="single-services ">
            <div class="services-inner">
              <div class="our-services-icon"> <span class="enS1">3</span></div>
              <div class="our-services-text">
                <h3>Payment</h3>
                <p>Once the product is delivered, your payment is processed to your account with in 7 Days after deducting Delivery charges, Commission, Platform Charges and Taxes</p></div>
            </div>
          </div>
        </div>
      </div>
      
        </div>
      </div>
    </section>

    
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

    <!-- All modals added here for the demo -->
    <div class="md-modal md-effect-3" id="modal-3">
      <div class="md-content">
          <!-- Product Info Start -->
          <div class="product-info row">
            <div class="col-md-4 col-sm-6 col-xs-12">
              <div class="product-details-image">
                <div class="slider-for slider">
                  <div>
                    <img src="<?php echo base_url() ?>assets/frontend//img/single-product/img1.jpg" alt="">
                  </div>
                  <div>
                    <img src="<?php echo base_url() ?>assets/frontend//img/single-product/img2.jpg" alt="">
                  </div>
                  <div>
                    <img src="<?php echo base_url() ?>assets/frontend//img/single-product/img3.jpg" alt="">
                  </div>
                  <div>
                    <img src="<?php echo base_url() ?>assets/frontend//img/single-product/img4.jpg" alt="">
                  </div>
                  <div>
                    <img src="<?php echo base_url() ?>assets/frontend//img/single-product/img5.jpg" alt="">
                  </div>
                  <div>
                    <img src="<?php echo base_url() ?>assets/frontend//img/single-product/img3.jpg" alt="">
                  </div>
                </div>
                <ul id="productthumbnail" class="slider slider-nav">
                  <li>
                    <img src="<?php echo base_url() ?>assets/frontend//img/single-product/small/img1.jpg" alt="">
                  </li>
                  <li>
                    <img src="<?php echo base_url() ?>assets/frontend//img/single-product/small/img2.jpg" alt="">
                  </li>
                  <li>
                    <img src="<?php echo base_url() ?>assets/frontend//img/single-product/small/img3.jpg" alt="">
                  </li>
                  <li>
                    <img src="<?php echo base_url() ?>assets/frontend//img/single-product/small/img4.jpg" alt="">
                  </li>
                  <li>
                    <img src="<?php echo base_url() ?>assets/frontend//img/single-product/small/img5.jpg" alt="">
                  </li>
                  <li>
                    <img src="<?php echo base_url() ?>assets/frontend//img/single-product/small/img3.jpg" alt="">
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-md-8 col-sm-6 col-xs-12">
              <div class="info-panel">
                <h1 class="product-title">Proin Lectus Ipsum</h1>
                <!-- Rattion Price -->
                <div class="price-ratting">
                  <div class="price float-left">
                    $ 120.00
                  </div>
                  <div class="ratting float-right">
                    <div class="product-star">
                      <i class="icon-star active"></i>
                      <i class="icon-star active"></i>
                      <i class="icon-star active"></i>
                      <i class="icon-star active"></i>
                      <i class="icon-star active"></i>
                      <span>(01 Customer Review)</span>
                    </div>  
                  </div>
                </div>
                <!-- Short Description -->
                <div class="short-desc">
                  <h5 class="sub-title">Quick Overview</h5>
                  <p>There are many variations of passages of Lorem Ipsum avaable, b majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                </div>  
                <!-- Product Size -->            
                <div class="product-size">
                  <h5 class="sub-title">Select Size</h5>
                  <span>S</span>
                  <span class="active">M</span>
                  <span>L</span>
                  <span>XL</span>
                </div>
                <!-- Quantity Cart -->
                <div class="quantity-cart">
                  <button class="btn btn-common"><i class="icon-basket-loaded"></i> add to cart</button>
                </div>
                <!-- Share -->
                <div class="share-icons pull-right">
                  <span>share :</span>
                  <a href="#"><i class="fa fa-facebook"></i></a>
                  <a href="#"><i class="fa fa-twitter"></i></a>
                  <a href="#"><i class="fa fa-instagram"></i></a>
                  <a href="#"><i class="fa fa-pinterest"></i></a>
                </div>
              </div>
            </div>      
          </div>
          <!-- Product Info End -->
          <button class="md-close"><i class="icon-close"></i></button>
      </div>
    </div>
    <div class="md-overlay"></div>
    <!-- the overlay element -->

    <!-- Preloader -->
    <div id="preloader">
      <div id="status">
        <div class="spinner">
          Loading...
        </div>
      </div>
    </div>
    <!-- End Preloader -->


    <div class="dailog-box" id="dailog-box">

<div class="box">
        <button id="close" class="close" > &nbsp;x &nbsp;  </button>



        <h1 id="enuiry-hedding"> evmax Enquiry Form </h1>

        <br/>
        <form class="well " action="<?php echo base_url() ?>BecomeASeller/enquiry" method="post"  id="contact_form">
            <br/>
            <h4 class="evm11">Personal Information :</h4>
            <fieldset class="personalInfo evm12">


                <!-- Text input-->

                <div class="form-group">
                    <span class="user"></span>
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
                            <input  type="text" placeholder="Contact Number" id="mobileno" name="mobileno" onkeyup="search_func(this.value,'mobile');" class="form-control"  required pattern="[0-9]{10}" title="Please enter valid phone number" maxlength="10">
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
                            <input  type="email" placeholder="Enter Email ID" id="email" name="email" onkeyup="search_func(this.value,'email');" class="form-control"  required>
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
                    <span class="user"></span>
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
    <script type="text/javascript" src="<?php echo base_url() ?>assets/frontend//js/jquery-min.js"></script>      
    <script type="text/javascript" src="<?php echo base_url() ?>assets/frontend//js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/frontend//js/bootstrap-select.min.js"></script> 
    <script type="text/javascript" src="<?php echo base_url() ?>assets/frontend//js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/frontend//js/ion.rangeSlider.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/frontend//js/modalEffects.js"></script>   
    <script type="text/javascript" src="<?php echo base_url() ?>assets/frontend//js/classie.js"></script>    
    <script type="text/javascript" src="<?php echo base_url() ?>assets/frontend//js/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/frontend//js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/frontend//js/nivo-lightbox.js"></script>       
    <script type="text/javascript" src="<?php echo base_url() ?>assets/frontend//js/slick.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/frontend//js/jquery.slicknav.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/frontend//js/form-validator.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/frontend//js/contact-form-script.js"></script> 
    <script type="text/javascript" src="<?php echo base_url() ?>assets/frontend//js/main.js"></script>  


    <script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>    

<script>

  $(document).ready(function(){
  $("#enquiryButton").click(function(){
        $("#dailog-box").css("display","block");
       $("html").css({"overflow-y": "hidden"});
    //$(".box").css({"overflow": "scroll"});
            
  });
     $(".close").click(function(){
     $("html").css({"overflow-y": "scroll"});
            
    $("#dailog-box").css("display","none");
            
  });
  
  
  $("#submit").on("click",function(e){
       
  //check for duplicate email

    if (($("input[name*='categories']:checked").length)<=0) {
        alert("You must check at least 1 category");
    return false
    }
    return true;
    
       
  
    });     
          
  
  });
  function search_func(value,type) {
      
      if (value.length >= 3 ) {
          $.ajax({
                 type: "POST",
                data: {
                    value: value,
                    type: type
                },
                url: "<?php echo base_url(); ?>index.php/Ajax/checkForDuplicate",
                success: function(data)
                {
                    if(data === 'EMAIL_EXISTS')
                    {
                     $('.user')
                            .css('color', 'red')
                            .html("This email already exists!");
                    $('#submit').prop('disabled', true);
                    return false;
                     }
                     else if(data === 'MOBILE_EXISTS')
                    {
                       // alert();
                     $('.user')
                            .css('color', 'red')
                            .html("This mobile already exists!");
                    $('#submit').prop('disabled', true);
                    return false;
                     }
                    else
                    {
                      $('#submit').prop('disabled', false);
                      $('.user').css('color', '#f5f5f5').html("");
                    }
                   // if(data === 'EMAIL_NOT_EXISTS')
                }
            }); 
            }
  }
  </script>

    
  </body>
</html>