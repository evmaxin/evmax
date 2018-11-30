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
                                    <span class="arrow"></span>
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
                                    <i class="icon-social-dribbble"></i>
                                    <span class="title">Category</span>
                                    <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <?php if(isset($this->session->userdata('admin_data')['store_id']) && ($this->session->userdata('admin_data')['store_id']==1)){?>
                                    <li class="nav-item  ">
                                        <a href="<?php echo base_url();?>admin/category" class="nav-link ">
                                            <i class="icon-clock"></i>
                                            <span class="title">Add Category</span>
                                        </a>
                                    </li>
                                    <?php } ?>
                                    <li class="nav-item  ">
                                        <a href="<?php echo base_url();?>admin/category/showHierarchy" class="nav-link ">
                                            <i class="icon-clock"></i>
                                            <span class="title">Show Category List</span>
                                        </a>
                                    </li>
                                   
                                                            
                                 
                                </ul>
                            </li>
                             <li class="nav-item  ">
                                <a href="javascript:;" class="nav-link nav-toggle">
                                    <i class="icon-puzzle"></i>
                                    <span class="title">Attribute Types</span>
                                    <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item  ">
                                        <a href="<?php echo base_url();?>admin/AttributeType" class="nav-link ">
                                            <i class="icon-clock"></i>
                                            <span class="title">Add / View AttributeTypes</span>
                                        </a>
                                    </li>
                                   
                                                            
                                 
                                </ul>
                            </li>
                             <li class="nav-item  ">
                                <a href="javascript:;" class="nav-link nav-toggle">
                                    <i class="icon-layers"></i>
                                    <span class="title">Attributes</span>
                                    <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item  ">
                                        <a href="<?php echo base_url();?>admin/Attributes" class="nav-link ">
                                            <i class="icon-clock"></i>
                                            <span class="title">Add / View Attributes </span>
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
                                    <i class="fa fa-image"></i>
                                    <span class="title">Image Management</span>
                                    <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item  ">
                                        <a href="<?php echo base_url();?>admin/sliders" class="nav-link ">
                                            <i class="fa fa-plus"></i>
                                            <span class="title">Add /View Image</span>
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
                                        <a href="<?php echo base_url();?>admin/settings/" class="nav-link ">
                                            <i class="icon-time"></i>
                                            <span class="title">GST Rules</span>
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
                          
                            
                            
                        </ul>