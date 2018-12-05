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
                                        <a href="<?php echo base_url();?>admin/dataMgnt/Brand/index" class="nav-link ">
                                            <i class="icon-clock"></i>
                                            <span class="title">Add Brand </span>
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
                                        <a href="<?php echo base_url();?>admin/product" class="nav-link ">
                                            <i class="icon-clock"></i>
                                            <span class="title">Add / View Product</span>
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
                                    <i class="icon-large icon-tag"></i>
                                    <span class="title">Promotions Management</span>
                                   
                                </a>
                            
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
                                    <i class="icon-settings"></i>
                                    <span class="title">Settings</span>
                                    <span class="arrow"></span>
                                </a>
                                 <ul class="sub-menu">
                                    <li class="nav-item  ">
                                        <a href="<?php echo base_url();?>admin/merchant/Profile" class="nav-link ">
                                         <i class="icon-user"></i>
                                            <span class="title">Profile</span>
                                        </a>
                                    </li>
                                
                            
                                   
                                </ul>
                            </li>
                           
                          
                            
                            
                        </ul>