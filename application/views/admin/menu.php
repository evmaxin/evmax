 <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
                            <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
                            <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                            <li class="sidebar-toggler-wrapper hide">
                                <div class="sidebar-toggler">
                                    <span></span>
                                </div>
                            </li>
                            <!-- END SIDEBAR TOGGLER BUTTON -->
                  
                         
                     
                         
                       <li class="nav-item  ">
                                <a href="<?php echo base_url();?>admin">
                                     <i class="icon-basket"></i>
                                    <span class="title">Dashboard</span>
                                   
                                </a>
                                
                            </li>
                
                            <li class="nav-item  ">
                                <a href="javascript:;" class="nav-link nav-toggle">
                                    <i class="icon-graph"></i>
                                    <span class="title">Product Management</span>
                                    <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item  ">
                                        <a href="<?php echo base_url();?>admin/product" class="nav-link ">
                                            <i class="icon-clock"></i>
                                            <span class="title">Add / View Product</span>
                                        </a>
                                  
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="<?php echo base_url();?>admin/product/requestedForDeactivation" class="nav-link ">
                                            <i class="icon-clock"></i>
                                            <span class="title">Req. For Deactivation</span>
                                        </a>
                                       
                                    </li>
                                    <?php if(isset($this->session->userdata('admin_data')['store_id']) && ($this->session->userdata('admin_data')['store_id']==1)){?>
                                    <li class="nav-item  ">
                                        <a href="<?php echo base_url();?>admin/category" class="nav-link ">
                                            <i class="icon-clock"></i>
                                            <span class="title">Add / View Category</span>
                                        </a>
                                    </li>
                                    <?php } ?>
                                  
                                      <li class="nav-item  ">
                                        <a href="<?php echo base_url();?>admin/dataMgnt/AddSubCategory" class="nav-link ">
                                            <i class="icon-clock"></i>
                                            <span class="title">Add / View Sub category </span>
                                        </a>
                                    </li>
                                      <li class="nav-item  ">
                                        <a href="<?php echo base_url();?>admin/dataMgnt/Brand/index" class="nav-link ">
                                            <i class="icon-clock"></i>
                                            <span class="title">Add / View Brand </span>
                                        </a>
                                    </li>
                                      <li class="nav-item  ">
                                        <a href="<?php echo base_url();?>admin/AttributeType" class="nav-link ">
                                            <i class="icon-clock"></i>
                                            <span class="title">Add / View AttributeTypes</span>
                                        </a>
                                    </li>
                                     <li class="nav-item  ">
                                        <a href="<?php echo base_url();?>admin/Attributes" class="nav-link ">
                                            <i class="icon-clock"></i>
                                            <span class="title">Add / View Attributes </span>
                                        </a>
                                    </li>
                                    	<li class="nav-item  ">
                                        <a href="<?php echo base_url();?>admin/dataMgnt/AddModel" class="nav-link ">
                                            <i class="icon-clock"></i>
                                            <span class="title">Add Model</span>
                                        </a>
                                    </li>
									 <li class="nav-item  ">
                                        <a href="<?php echo base_url();?>admin/dataMgnt/AddVarient" class="nav-link ">
                                            <i class="icon-clock"></i>
                                            <span class="title">Add Varient</span>
                                        </a>
                                    </li>
                                   
                                   <li class="nav-item  ">
                                        <a href="<?php echo base_url();?>admin/dataMgnt/ManufactureDate" class="nav-link ">
                                            <i class="icon-clock"></i>
                                            <span class="title">Manufacture Date</span>
                                        </a>
                                    </li>
                                    <?php if(isset($this->session->userdata('admin_data')['store_id']) && ($this->session->userdata('admin_data')['store_id']==1)){?>
                                   <!-- <li class="nav-item  ">
                                        <a target="_blank" href="<?php echo base_url();?>admin/uploadcsv" class="nav-link ">
                                            <i class="icon-clock"></i>
                                            <span class="title">Bulk Product Upload</span>
                                        </a>
                                    </li>-->
                                    <?php } ?>
                                                            
                                 
                                </ul>
                            </li>
                          
                        
                           <!-- <li class="nav-item  ">
                                <a href="javascript:;" class="nav-link nav-toggle">
                                    <i class="icon-graph"></i>
                                    <span class="title">Battery Management</span>
                                    <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item  ">
                                        <a href="<?php //echo base_url();?>admin/Battery" class="nav-link ">
                                            <i class="icon-clock"></i>
                                            <span class="title">Add / View Battery</span>
                                        </a>
                                  
                                    </li>
                                </ul>
                    </li>-->
                    <li class="nav-item  ">
                                <a href="javascript:;" class="nav-link nav-toggle">
                                    <i class="glyphicon glyphicon-map-marker"></i>
                                    <span class="title">Delivery Locations</span>
                                    <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item  ">
                                        <a href="<?php echo base_url();?>admin/DeliveryLocation" class="nav-link ">
                                            <i class="icon-clock"></i>
                                            <span class="title">Add / View Delivery Locations</span>
                                        </a>
                                  
                                    </li>
                                </ul>
                    </li>
                        <li class="nav-item  ">
                                <a href="javascript:;" class="nav-link nav-toggle">
                                    <i class="glyphicon glyphicon-map-marker"></i>
                                    <span class="title">Mechanic Locations</span>
                                    <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item  ">
                                        <a href="<?php echo base_url();?>admin/Mechanics" class="nav-link ">
                                            <i class="icon-clock"></i>
                                            <span class="title">Add / View Mechanics</span>
                                        </a>
                                  
                                    </li>
                                </ul>
                    </li>
                              <li class="nav-item  ">
                                <a href="javascript:;" class="nav-link nav-toggle">
                                    <i class="glyphicon glyphicon-map-marker"></i>
                                    <span class="title">Pickup Locations</span>
                                    <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item  ">
                                        <a href="<?php echo base_url();?>admin/PickupLocation" class="nav-link ">
                                            <i class="icon-clock"></i>
                                            <span class="title">Add / View Pickup Loc.</span>
                                        </a>
                                  
                                    </li>
                                </ul>
                    </li>
                            <li class="nav-item  ">
                                <a href="javascript:;" class="nav-link nav-toggle">
                                    <i class="icon-basket"></i>
                                    <span class="title">Orders</span>
                                    <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item ">
                                        <a href="<?php echo base_url();?>admin/orders" class="nav-link ">
                                            <i class="icon-tag"></i>
                                            <span class="title"> View Orders </span>
                                        </a>
                                    </li>
                                   
                                                            
                                 
                                </ul>
                            </li>
                            <li class="nav-item  ">
                                <a href="javascript:;" class="nav-link nav-toggle">
                                    <i class="icon-user"></i>
                                    <span class="title">Customers</span>
                                    <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item  ">
                                        <a href="<?php echo base_url();?>admin/customers" class="nav-link ">
                                            <i class="icon-user"></i>
                                            <span class="title">View Customers</span>
                                        </a>
                                    </li>
                            
                                   
                                </ul>
                            </li>
                            <li class="nav-item  ">
                                <a href="javascript:;" class="nav-link nav-toggle">
                                    <i class="icon-layers"></i>
                                    <span class="title">Merchant Mgmt</span>
                                    <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item  ">
                                        <a href="<?php echo base_url();?>merchant/" class="nav-link ">
                                            <i class="glyphicon glyphicon-th"></i>
                                            <span class="title">Enquiries</span>
                                        </a>
                                    </li>
									 <li class="nav-item  ">
                                        <a href="<?php echo base_url();?>admin/merchant/registration" class="nav-link ">
                                            <i class="glyphicon glyphicon-th"></i>
                                            <span class="title">Registrations</span>
                                        </a>
                                    </li>
                                     <li class="nav-item  ">
                                        <a href="<?php echo base_url();?>admin/merchant/registration/merchant" class="nav-link ">
                                            <i class="glyphicon glyphicon-th"></i>
                                            <span class="title">Merchants</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="<?php echo base_url();?>admin/merchant/TermsMgmt/index" class="nav-link ">
                                            <i class="glyphicon glyphicon-th"></i>
                                            <span class="title">Terms Management</span>
                                        </a>
                                    </li>
                                   
                                </ul>
                            </li>
                           <li class="nav-item  ">
                                <a href="javascript:;" class="nav-link nav-toggle">
                                    <i class="fa fa-image" style="color: #fff;"></i>
                                    <span class="title">Image Management</span>
                                    <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item  ">
                                        <a href="<?php echo base_url();?>admin/sliders" class="nav-link ">
                                            <i class="fa fa-plus"></i>
                                            <span class="title">Add /View Ad image banners</span>
                                        </a>
                                        
                                    </li>
                                 <li class="nav-item  ">
                                        <a href="<?php echo base_url();?>admin/sliders/productBanners" class="nav-link ">
                                            <i class="fa fa-plus"></i>
                                            <span class="title">Add /View product images</span>
                                        </a>
                                        
                                    </li>
                            
                                   
                                </ul>
                            </li>
                            <li class="nav-item  ">
                                <a href="javascript:;" class="nav-link nav-toggle">
                                    <i class="icon-large icon-tag"></i>
                                    <span class="title">Promotions Management</span>
                                    <span class="arrow"></span>
                                </a>
                               <!-- <ul class="sub-menu">
                                    <li class="nav-item  ">
                                        <a href="<?php echo base_url();?>admin/product" class="nav-link ">
                                            <i class="icon-clock"></i>
                                            <span class="title">Add / View Product</span>
                                        </a>
                                    </li>
                                
                                                            
                                 
                                </ul>-->
                            </li>
                             <li class="nav-item  ">
                                <a href="javascript:;" class="nav-link nav-toggle">
                                    <i class="icon-power"></i>
                                    <span class="title">Charging Stations</span>
                                    <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item ">
                                        <a href="<?php echo base_url();?>admin/ChargingStation" class="nav-link ">
                                            <i class=""></i>
                                            <span class="title"> Add /View Charging Stations</span>
                                        </a>
                                    </li>
                                   
                                                            
                                 
                                </ul>
                            </li>
                             <li class="nav-item  ">
                                <a href="javascript:;" class="nav-link nav-toggle">
                                    <i class="icon-power"></i>
                                    <span class="title">Battery Banks</span>
                                    <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item ">
                                        <a href="<?php echo base_url();?>admin/BatteryBanks" class="nav-link ">
                                            <i class=""></i>
                                            <span class="title"> Add /View Battery Banks</span>
                                        </a>
                                    </li>
                                   
                                                            
                                 
                                </ul>
                            </li>
                             <li class="nav-item  ">
                                <a href="javascript:;" class="nav-link nav-toggle">
                                    <i class="icon-large icon-tag"></i>
                                    <span class="title">e-Rickshaw Factory</span>
                                    <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item ">
                                        <a href="<?php echo base_url();?>admin/ERickshawFactory" class="nav-link ">
                                            <i class=""></i>
                                            <span class="title"> Add /View e-Rickshaw</span>
                                        </a>
                                    </li>
                                   
                                                            
                                 
                                </ul>
                            </li>
                                 <li class="nav-item  ">
                                <a href="javascript:;" class="nav-link nav-toggle">
                                    <i class="icon-large icon-tag"></i>
                                    <span class="title">Buyers Guide</span>
                                    <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item ">
                                        <a href="<?php echo base_url();?>admin/BuyersGuide" class="nav-link ">
                                            <i class=""></i>
                                            <span class="title"> Add /View Posts</span>
                                        </a>
                                    </li>
                                   
                                                            
                                 
                                </ul>
                            </li>
                            <li class="nav-item  ">
                                <a href="javascript:;" class="nav-link nav-toggle">
                                    <i class="icon-settings"></i>
                                    <span class="title">Settings</span>
                                    <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <!--<li class="nav-item  ">
                                        <a href="<?php //echo base_url();?>admin/settings/" class="nav-link ">
                                            <i class="icon-time"></i>
                                            <span class="title">GST Rules</span>
                                        </a>
                                    </li>-->
                                     <li class="nav-item  ">
                                        <a href="<?php echo base_url();?>admin/Menu/" class="nav-link ">
                                            <i class="glyphicon glyphicon-menu-hamburger"></i>
                                            <span class="title">Menu</span>
                                        </a>
                                    </li>
                                     <li class="nav-item  ">
                                        <a href="<?php echo base_url();?>admin/SubMenu/" class="nav-link ">
                                            <i class="glyphicon glyphicon-menu-hamburger"></i>
                                            <span class="title">SubMenu</span>
                                        </a>
                                    </li>
                            
                                   
                                </ul>
                            </li>
                            
                           
                            
                            
                        </ul>