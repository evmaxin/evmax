 <?php
            $CI = & get_instance();
            $cat_list = $CI->Common_lib->Categorylist();
           //  $menu = $CI->Common_model->menuItems();
             $navbar = $CI->Common_model->getTableData("menu","menu_id,name,url,menuorder",array(),"ASC","menuorder");
            $submenu = $CI->Common_lib->menuItems();
            
              //echo $CI->db->last_query();
          //echo "<pre>";print_r($submenu); exit;
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
.displaynone{
            display: none !important;
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
        <div class="container">
          <div class="row"><span class="studiocss logncolrs">Studios </span>

            <div class="col-lg-6 col-md-6 col-sm-8 lgnreg">    

              <!-- shopping cart end -->  
              <div class="search-area">
                <form>
                  <div class="control-group">
                    
                    <input class="search-field" placeholder="Search vehicle or battery etc.">
                    <a class="search-button" href="#"><i class="icon-magnifier"></i></a> 
                  </div>
                </form>
              </div> 
              <!-- shopping cart start -->

              <div class="box-currency  hidevehicleOPtion lognsty">
                   <?php if($this->session->userdata('customer_data')== "") { ?>
                    <span class=""><a href="<?php echo base_url() ?>customers/index" class="logncolr">  Login  </a></span>
                    <?php }else{ ?>
                    <span><a  class="logncolr" href="<?php echo base_url() ?>customers/account">Account</a></span>
                    
                    <?php }?>
              </div>
              &nbsp; &nbsp; <span class="spaceabr">|</span>
              <div class="box-currency   hidevehicleOPtion regsty">
                     <?php if($this->session->userdata('customer_data')== "") { ?>
                    <span><a href="<?php echo base_url() ?>customers/index" class="logncolr reg">Register </a></span>
                     <?php }else{ ?>
                    <span class=""><a  class="logncolr" href="<?php echo base_url() ?>customers/logout">Logout</a></span>
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
                   <?php if(isset($navbar) && count($navbar)>0) { 
                          foreach ($navbar as $mainmenu) { 
                              
                            
                              
                              ?>
                  <li  class="<?php echo (strtolower("$mainmenu->name") === 'vehicles')?"":"hidevehicleOPtion"?>">
                  <a class="<?php echo (strtolower("$mainmenu->name") === 'vehicles')?"active":""?>" href="<?php echo $mainmenu->url?(base_url().$mainmenu->url):'#';?>" id="vehiclesList"><?php echo $mainmenu->name;?>
                       <?php if(strtolower("$mainmenu->name") === 'vehicles'){ echo "<span class='caret'></span>";} ?>
                      <?php 
                      // to check wheather sub menu has or not, if yes we will show carret symbal
                       if(isset($submenu) && count($submenu)>0) { 
                          $yesflag=0;
                          foreach ($submenu as $sub) { 
                    if($mainmenu->menu_id === $sub->menu_id){ 
                          $yesflag+=1;
                       }
                      }
                        if($yesflag >0){
                      echo "<span class='caret'></span>";
                         }
                      } 
                     
                      ?>
                      </a>
                  <?php if(strtolower("$mainmenu->name") === 'vehicles'){ ?> <!-- if vehicles show categories in this -->
              <ul class="dropdown vehiclesUl" >
                      <?php if(isset($cat_list['categories']) && count($cat_list['categories']>0)) { 
                          foreach ($cat_list['categories'] as $menu_items) { 
                              //echo $mainmenu->menu_id."menu items".$menu_items->menu_id;
                              if($mainmenu->menu_id===$menu_items->menu_id){
                              ?>
                    <li class="vehiclesLi navbr2 " id="Hero">
                        <a class="active navbr1" href="<?php echo base_url() ?>c/<?php  echo strtolower(cleanproduct($mainmenu->name))."&".strtolower(cleanproduct($menu_items->category_name));?>/<?php echo $menu_items->category_id;?>" id="<?php echo $menu_items->category_id;?>" onmouseover="get_submenu(this.id);"> <?php echo $menu_items->category_name;?> </a>
                      <!--<a class="active navbr1" href="<?php echo base_url() ?>Category/index/<?php echo $menu_items->category_id;?>" id="<?php echo $menu_items->category_id;?>" onmouseover="get_submenu(this.id);"> <?php echo $menu_items->category_name;?> </a>-->
                    </li> 
                    
                              <?php } } } ?>
                 
                  </ul>
                  <?php }else{ 
                       // to check wheather sub menu has or not, if yes we will show carret symbal
                       if(isset($submenu) && count($submenu)>0) { 
                          $yesflag1=0;
                          foreach ($submenu as $sub) { 
                    if($mainmenu->menu_id === $sub->menu_id){ 
                          $yesflag1+=1;
                       }
                      }
                       
                      } 
                     
                      
                      ?>
                    <ul class="<?php  if($yesflag1 >0){ echo 'dropdown ulstyle'; }else{ echo 'displaynone'; }?>">
                        
                         <?php if(isset($submenu) && count($submenu)>0) { 
                          foreach ($submenu as $sub) { 
                 if($mainmenu->menu_id === $sub->menu_id){
                    
                    ?>
                      <li>
                      
                       
                          <a <?php if($sub->open_link_in_newpage==='1'){ echo "target='_blank'"; }?> href="<?php if(!empty($sub->category_id)){ echo base_url()."c/".strtolower(cleanproduct($mainmenu->name))."&".strtolower(cleanproduct($menu_items->category_name))."/".$sub->category_id;} else {echo base_url().$sub->url;}?>">
                          <!--<a <?php //if($sub->open_link_in_newpage==='1'){ echo "target='_blank'"; }?> href="<?php //echo $sub->url?(base_url().$sub->url):'#';?>">-->
                     <?php echo $sub->name?$sub->name:'';?>
                      </a>
                      
                    </li>
                              <?php } } } ?>
                
                    
                  </ul>
                  <?php }?>
                </li>
                   <?php } } ?>
                 
              
                
              </ul>
              
          
             <!-- <div class="box-currency logn hidevehicleOPtion c7 c11015 logincls">
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
                </div>-->
              <div class="shop-cart  c5 c51">
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
        



        <div class="col-xs-12 hidden-lg visible-xs ">
          <div class="col-xs-8 ">
            
            
            <a class="navbar-brand" href="<?php echo base_url() ?>">
                <img src="<?php echo base_url() ?>assets/frontend/img/evlogo.png" alt="" style="width: 200px !important;">
            </a>  
          </div>

          <div class="col-xs-4 ">
            <ul class="mobile-menu">
                 <?php if(isset($navbar) && count($navbar)>0) { 
                          foreach ($navbar as $mainmenu) { 
                            ?>
              <li>
                  <?php if(strtolower("$mainmenu->name") === 'vehicles'){ ?>
                <a class="active" href="#">
                  <?php echo $mainmenu->name;?>
                </a>
                  <?php }else { ?>
                  <a href="<?php echo $mainmenu->url?(base_url().$mainmenu->url):'#';?>">
                  <?php echo $mainmenu->name;?>
                </a>
                  <?php } ?>
                  
                  <?php if(strtolower("$mainmenu->name") === 'vehicles'){ ?>
                <ul class="dropdown">
                       <?php if(isset($cat_list['categories']) && count($cat_list['categories']>0)) { 
                          foreach ($cat_list['categories'] as $menu_items) { 
                              if($mainmenu->menu_id===$menu_items->menu_id){
                              ?>
                    
                    <li>
                      <a href="<?php echo base_url() ?>c/<?php  echo strtolower(cleanproduct($mainmenu->name))."&".strtolower(cleanproduct($menu_items->category_name));?>/<?php echo $menu_items->category_id;?>" id="<?php echo $menu_items->category_id;?>" id="<?php echo $menu_items->category_id;?>"> <?php echo $menu_items->category_name;?> </a>
                    </li> 
                    
                              <?php } } } ?>
                  
                      
                </ul>
                   <?php }else{ ?>
                   <ul class="dropdown menulinks">
                       <?php if(isset($submenu) && count($submenu)>0) { 
                          foreach ($submenu as $sub) { 
                 if($mainmenu->menu_id === $sub->menu_id){
                    
                    ?>
                 <li class="maga-menu-title">
                          <a <?php if($sub->open_link_in_newpage==='1'){ echo "target='_blank'"; }?> href="<?php if(!empty($sub->category_id)){ echo base_url()."c/".strtolower(cleanproduct($mainmenu->name))."&".strtolower(cleanproduct($menu_items->category_name))."/".$sub->category_id;} else {echo base_url().$sub->url;}?>">
                     <?php echo $sub->name?$sub->name:'';?>
                      </a>
                    </li>
                   <?php } } } ?>
                 
         
                </ul>
                   <?php }?>
              </li>
                 <?php } } ?>
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