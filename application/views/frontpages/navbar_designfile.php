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
      

      
      <!-- End Top Bar -->    

      <!-- Start  Logo & Naviagtion  -->
      <nav class="navbar navbar-default" data-spy="affix" data-offset-top="50">
        <div class="container">
          <div class="row"><span class="studiocss logncolrs">Studios </span>

            <div class="col-lg-6 col-md-6 col-sm-8 lgnreg">    

              <!-- shopping cart end -->  
              <div class="search-area">
                <form>
                  <div class="control-group">
                    
                    <input class="search-field" placeholder="Search here...">
                    <a class="search-button" href="#"><i class="icon-magnifier"></i></a> 
                  </div>
                </form>
              </div> 
              <!-- shopping cart start -->

              <div class="box-currency  hidevehicleOPtion lognsty">
                   <?php if($this->session->userdata('customer_data')== "") { ?>
                    <span class=""><a href="<?php echo base_url() ?>customers/index" class="logncolr">  Login  </a></span>
                    <?php }else{ ?>
                    <span class=""><a  class="logncolr" href="<?php echo base_url() ?>customers/logout">Logout</a></span>
                    <?php }?>
              </div>
              &nbsp; &nbsp; <span class="spaceabr">|</span>
              <div class="box-currency   hidevehicleOPtion regsty">
                     <?php if($this->session->userdata('customer_data')== "") { ?>
                    <span><a href="<?php echo base_url() ?>customers/index" class="logncolr reg">Register </a></span>
                     <?php }else{ ?>
                    <span><a  class="logncolr" href="<?php echo base_url() ?>customers/account">| Account</a></span>
                    <?php }?>
              </div>
                          
            </div>
          </div>
          <div class="row">
            <div class="navbar-header">
              <!-- Stat Toggle Nav Link For Mobiles -->
              <a class=" hidden-sm visible-lg visible-md navimg" href="<?php echo base_url() ?>">
                            <img src="<?php echo base_url() ?>assets/frontend/img/evlogo.png" alt="" class="navimg">
              </a>

              <a class="navbar-brand visible-xs visible-sm hidden-md hidden-lg navimg" href="<?php echo base_url() ?>">
                            <img src="<?php echo base_url() ?>assets/frontend/img/evlogo.png" alt="" class="navimg">
              </a> 
            </div>
            <div class="shop-cart visible-xs visible-sm hidden-lg hidden-md">
                <ul> 
                  <li>
                    <a href="<?php echo base_url() ?>checkout/cart" class="cart-icon cart-btn"><i class="icon-basket-loaded fntsize"></i><span class="cart-label update_cart1" id="update_cart"><?php if(isset($cart_session['product_id'])){echo array_sum($cart_session['product_id']);} else { echo '0'; } ?> </span></a>
                    
                  </li>  
                </ul> 
              </div>
            <div class="navbar-collapse collapse" style="    padding-top: 24px;">
              <!-- Start Navigation List -->
              <ul class="nav navbar-nav c67">
                <li>
                  <a class="active"  href="#" id="vehiclesList">Vehicles <span class="caret"></span></a>
                  <ul class="dropdown vehiclesUl" style="    margin-top: 31px;" >
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

                <li class="hidevehicleOPtion">
                    <a href="<?php echo base_url() ?>Erickshaws/buyers">
                   Sellers Zone
                  </a>
                    
                </li>

              
                
              </ul>
              
          
                
              <div class="shop-cart hidden-xs hidden-sm visible-lg visible-md">
                <ul> 
                  <li>
                    <a href="<?php echo base_url() ?>checkout/cart" class="cart-icon cart-btn"><i class="icon-basket-loaded fntsize"></i><span class="cart-label update_cart1" id="update_cart"><?php if(isset($cart_session['product_id'])){echo array_sum($cart_session['product_id']);} else { echo '0'; } ?> </span></a>
                    
                  </li>  
                </ul> 
              </div> 
            </div>
          </div>
        </div>
        <!-- End Header Logo & Naviagtion -->

        <!-- Mobile Menu Start -->
        <ul class="mobile-menu">
          <li>
            <a class="active" href="index.html">
              Home
            </a>
            <ul class="dropdown">
              <li>
                <a class="active" href="index.html">Home V1</a>
              </li>  
              <li>
                <a href="index-2.html">Home V2</a>
              </li>    
            </ul>
          </li>
          <li>
            <a href="about.html">About</a>
          </li>
          <li>
            <a href="#">Catalog</a>
            <ul class="dropdown menulinks">
              <li class="maga-menu-title">
                <a href="#">Men</a>
              </li>
              <li><a href="category.html">Clothing</a></li>
              <li><a href="category.html">Handbags</a></li>
              <li><a href="category.html">Maternity</a></li>
              <li><a href="category.html">Jewelry</a></li>
              <li><a href="category.html">Scarves</a></li>
              <li class="maga-menu-title">
                <a href="#">Women</a>
              </li>
              <li><a href="category.html">Handbags</a></li>
              <li><a href="category.html">Jewelry</a></li>
              <li><a href="category.html">Clothing</a></li>
              <li><a href="category.html">Watches</a></li>
              <li><a href="category.html">Hats</a></li>
              <li class="maga-menu-title">
                <a href="#">Accessories</a>
              </li>
              <li><a href="category.html">Belts</a></li>
              <li><a href="category.html">Scarves</a></li>
              <li><a href="category.html">Hats</a></li>
              <li><a href="category.html">Ties</a></li>
              <li><a href="category.html">Handbags</a></li>
            </ul>
          </li>
          <li>
            <a href="#">Shop</a>
            <ul class="menulinks">
              <li class="maga-menu-title">
                <a href="#">Shop Types</a>
              </li>
              <li><a href="shop.html">Shop</a></li>
              <li><a href="shop-grid.html">Shop Grid Sidebar</a></li>
              <li><a href="shop-list.html">Shop List Sidebar</a></li>
              <li><a href="shop-right-sidebar.html">Shop Right Sidebar</a></li>
              <li><a href="product-details.html">Product Details</a></li>
              <li class="maga-menu-title">
                <a href="#">Shop Pages</a>
              </li>  
              <li><a href="shopping-cart.html">Cart Page</a></li>
              <li><a href="checkout.html">Checkout Page</a></li>
              <li><a href="wishlist.html">Wishlist</a></li>  
              <li><a href="order.html">Your Order</a></li>
              <li><a href="login.html">Login</a></li>
              <li><a href="login-form.html">My Account</a></li>
            </ul>
          </li>
          <li>
            <a href="#">Pages</a>
            <ul class="dropdown">
              <li>
                <a href="about.html">About Us</a>
              </li>
              <li>
                <a href="services.html">Services</a>
              </li>
              <li>
                <a href="contact.html">Contact Us</a>
              </li>                    
              <li>
                <a href="product-details.html">Product Details</a>
              </li>
              <li>
                <a href="team.html">Team Member</a>
              </li>
              <li>
                <a href="checkout.html">Checkout</a>
              </li>
              <li>
                <a href="shopping-cart.html">Shopping cart</a>
              </li>
               <li>
                <a href="faq.html">FAQs</a>
              </li>
               <li>
                <a href="wishlist.html">Wishlist</a>
              </li>
               <li>
                <a href="404.html">404 Error</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="#">Blog</a>
            <ul class="dropdown">                    
              <li>
                <a href="blog.html">Blog Right Sidebar</a>
              </li>
              <li>
                <a href="blog-left-sidebar.html">Blog Left Sidebar</a>
              </li>
              <li>
                <a href="blog-full-width.html">Blog Full Width</a>
              </li>
              <li>
                <a href="blog-details.html">Blog Details</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="contact.html">Contact</a>
          </li>
          <li><a href="#">Account</a>
            <ul class="dropdown">
              <li><a href="login-form.html">My Account</a></li>
              <li><a href="wishlist.html">My Wishlist</a></li>
              <li><a href="compare.html">Compare</a></li>
              <li><a href="checkout.html">Checkout</a></li>
              <li><a href="login.html">Log In</a></li>
              <li><a href="register.html">Create an account</a></li>
              <li><a href="#">close</a></li>
            </ul>
          </li>
        </ul>
        <!-- Mobile Menu End -->
      </nav>
    

    </div>