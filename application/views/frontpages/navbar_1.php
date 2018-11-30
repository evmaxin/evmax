 <?php
            $CI = & get_instance();
            $cat_list = $CI->Common_lib->Categorylist();
            //echo "<pre>";print_r($cat_list['categories']);
//$brandlist = $CI->Common_lib->Brandlist();
?>
 <?php
           // $CI = & get_instance();
            //$brandlist = $CI->Common_lib->Brandlist();
            //echo "<pre>";print_r($cat_list['categories']);

?>
   
<div class="header">    
    <style>
    .hover-item {
	
}

.hover-item:hover {
	font-weight: bold;
}
.shop-product12{
        margin: 19px 0 !important;
}
.logincls{
         position: relative;
    /*left: 184px;*/
}
    </style>
      <!-- Start Top Bar -->
      <!--<div class="top-bar">
        <div class="container d11">
          <div class="row">
            <div class="col-lg-12 col-md-6 col-sm-12">
               <marquee id='scroll_news'>
                <div onMouseOver="document.getElementById('scroll_news').stop();" onMouseOut="document.getElementById('scroll_news').start();" style="position: relative;top: 4px;padding: 2px 0px;"><a href="<?php echo base_url() ?>BecomeASeller" style="color: #fff212;">"Become A Seller Today”</a></div></marquee>
            
            </div>
            
             
          </div>
        </div>
      </div>-->
      <!-- End Top Bar --> 

      <!-- Start  Logo & Naviagtion  -->
      <nav class="navbar navbar-default" data-spy="affix" data-offset-top="50">
        <div class="container c11014">
          <div class="row">
            <div class="navbar-header">
              <!-- Stat Toggle Nav Link For Mobiles -->
              <a class="navbar-brand hidden-xs enF008" href="<?php echo base_url() ?>">
                            <img src="<?php echo base_url() ?>assets/frontend/img/evlogo.png" alt="" class="c6 c66 enF007">
              </a> 
            </div>
            <div class="navbar-collapse collapse">
              <!-- Start Navigation List -->
              <ul class="nav navbar-nav c67">
                <li>
                  <a class="active" href="#" id="vehiclesList">Vehicles <span class="caret"></span></a>
              <ul class="dropdown vehiclesUl" >
                      <?php if(isset($cat_list['categories']) && count($cat_list['categories']>0)) { 
                          foreach ($cat_list['categories'] as $menu_items) { ?>
                    <li class="vehiclesLi navbr2 " id="Hero">
                      <a class="active navbr1" href="#" id="<?php echo $menu_items->category_id;?>" onmouseover="get_submenu(this.id);"> <?php echo $menu_items->category_name;?> </a>
                    </li> 
                    
                      <?php } } ?>
                 
                  </ul>
                </li>
                 <li class="hidevehicleOPtion">
                  <a href="#">Battery & Spare Parts<span class="caret"></span></a>
                  <ul class="dropdown ulstyle">
                    <li>
                      <a href="#">
                      Accessories
                      </a>
                    </li>
                    <li>
                      <a href="<?php echo base_url() ?>battery">
                      Battery
                      </a>
                    </li>
                    <li>
                      <a href="#">
                      Spare Parts
                      </a>
                    </li>
                    
                  </ul>
                </li>
                  <li class="hidevehicleOPtion">
                  <a href="#">Services<span class="caret"></span></a>
                  <ul class="dropdown ulstyle">
                    <li>
                      <a target="_blank" href="<?php echo base_url() ?>LocateChargingStations">
                      Charging Stations
                      </a>
                    </li>
                    <li>
                      <a target="_blank" href="<?php echo base_url() ?>BatteryBanks">
                 Battery Banks
                  </a>
                    </li>
                    <li>
                      <a href="#">
                Mechanics
                  </a>
                    </li>
                    
                  </ul>
                </li>
                
                                

                <li class="hidevehicleOPtion">
                    <a href="<?php echo base_url() ?>Erickshaws/buyers">
                   e-Rickshaw factory
                  </a>
                    
                </li>
                
                   <li class="hidevehicleOPtion">
                  <a href="#"> Buyer Zone<span class="caret"></span></a>
                  <ul class="dropdown ulstyle">
                    <li>
                      <a href="<?php echo base_url() ?>buyers-guide">
                       Buyer Guide
                      </a>
                    </li>
                    <li>
                      <a href="<?php echo base_url() ?>digitalcredit">
                 Digital Credit
                  </a>
                    </li>
                    <li>
                      <a href="<?php echo base_url() ?>membership">
                Membership
                  </a>
                    </li>
                    
                  </ul>
                </li>

              
                
              </ul>
              
          
              <div class="box-currency logn hidevehicleOPtion c7 c11015 logincls">
                   <?php if($this->session->userdata('customer_data')== "") { ?>
                    <span class="logn1"><a href="<?php echo base_url() ?>customers/index" class="logncolr">  Login | </a></span>
                    <?php }else{ ?>
                  <span class="logn1"><a  class="logncolr" href="<?php echo base_url() ?>customers/logout">Logout</a></span>
                  <?php }?>
                </div>
                <div class="box-currency logn hidevehicleOPtion c8 c11016 logincls">
                     <?php if($this->session->userdata('customer_data')== "") { ?>
                    <span><a href="<?php echo base_url() ?>customers/index" class="logncolr">Register </a></span>
                     <?php }else{ ?>
                  <span><a  class="logncolr" href="<?php echo base_url() ?>customers/account">| Account</a></span>
                  <?php }?>
                </div>
              <div class="shop-cart c5">
                <ul> 
                  <li>
                    <a href="<?php echo base_url() ?>checkout/cart" class="cart-icon cart-btn"><i class="icon-basket-loaded"></i><span class="cart-label update_cart1" id="update_cart"><?php if(isset($cart_session['product_id'])){echo array_sum($cart_session['product_id']);} else { echo '0'; } ?> </span></a>
                    
                  </li>  
                </ul> 
            </div> 
            </div>
          </div>
        </div>
        <!-- End Header Logo & Naviagtion -->

        <!-- Mobile Menu Start -->
        



        <div class="col-xs-12 hidden-lg visible-xs ">
          <div class="col-xs-8 ">
            
            
            <a class="navbar-brand" href="<?php echo base_url() ?>">
                <img src="<?php echo base_url() ?>assets/frontend/img/evlogo.png" alt="" style="width: 200px !important;">
            </a>  
          </div>

          <div class="col-xs-4 ">
            <ul class="mobile-menu">
              <li>
                <a class="active" href="#">
                  Vehicles
                </a>
                <ul class="dropdown">
                       <?php if(isset($cat_list['categories']) && count($cat_list['categories']>0)) { 
                          foreach ($cat_list['categories'] as $menu_items) { ?>
                    <li>
                      <a href="<?php echo base_url() ?>Category/index/<?php echo $menu_items->category_id;?>" id="<?php echo $menu_items->category_id;?>"> <?php echo $menu_items->category_name;?> </a>
                    </li> 
                    
                      <?php } } ?>
                  
                      
                </ul>
              </li>
            
              <li>
                <a href="#">Battery & Spare Parts</a>
                <ul class="dropdown menulinks">
                  <li class="maga-menu-title">
                    <a href="#">Accessories</a>
                  </li>
                  <li><a href="<?php echo base_url() ?>battery">Battery</a></li>
                  <li><a href="#">Spare Parts</a></li>
         
                </ul>
              </li>
              <li>
                <a href="#">Services</a>
                <ul class="menulinks">
                  <li class="maga-menu-title">
                    <a target="_blank" href="<?php echo base_url() ?>LocateChargingStations">Charging Stations</a>
                  </li>
                  <li><a target="_blank" href="<?php echo base_url() ?>BatteryBanks">Battery Banks</a></li>
                  <li><a href="#">Mechanics</a></li>
                   </ul>
              </li>
              <li>
                <a target="_blank" href="<?php echo base_url() ?>Erickshaws/buyers">e-Rickshaw factory</a>
                
              </li>
              <li>
                <a href="#">Buyer Zone</a>
                <ul class="dropdown">                    
                  <li>
                    <a href="<?php echo base_url() ?>buyers-guide">Buyer Guide</a>
                  </li>
                  <li>
                    <a href="<?php echo base_url() ?>digitalcredit">Digital Credit</a>
                  </li>
                  <li>
                    <a href="<?php echo base_url() ?>membership">Membership</a>
                  </li>
                 
                </ul>
              </li>
              <li>
                <a href="#">Account</a>
                  <ul class="dropdown">
                       <?php if($this->session->userdata('customer_data')== "") { ?>
                  <li><a href="<?php echo base_url() ?>customers/index">Log In</a></li>
                       <?php }else {?>
                   <li><a href="<?php echo base_url() ?>customers/account">My Account</a></li>
                       <?php }?>
                   <?php if($this->session->userdata('customer_data')== "") { ?>
                  <li><a href="<?php echo base_url() ?>customers/index">Register</a></li>
                  <?php }else {?>
                   <li><a href="<?php echo base_url() ?>customers/logout">Logout</a></li>
                       <?php }?>
                 
                </ul>
              </li>
           
            </ul>
          </div>
        </div>
      </nav>

    </div>