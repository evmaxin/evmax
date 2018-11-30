<div class="col-md-3 login-form-container" style="margin-bottom: 20px;">					
						<div class="short-info">
							
						<div class="user lpsd227">
							<h4><?php echo $customer_data['username']?$customer_data['username']:''; ?></h4>
						</div>
					
							<!-- social-icon -->
							<ul class="list-category-hover lpsd229">
								<li><a class="lpsd228" href="<?php echo base_url() ?>customers/account"><i class="fa fa-desktop"></i> Dashboard</a></li>
                                                                <li><a class="lpsd228" href="<?php echo base_url() ?>customers/orders"><i class="fa fa-search"></i> Orders</a></li>
								<li><a class="lpsd228" href="<?php echo base_url() ?>customers/changeprofile"><i class="fa fa-reply"></i> Update Profile</a></li>
                                                                <li><a class="lpsd228" href="<?php echo base_url() ?>customers/changeaddress"><i class="fa fa-reply"></i> Update Address</a></li>
								<li><a class="lpsd228" href="<?php echo base_url() ?>customers/changepassword"><i class="fa fa-unlock"></i> Change Password</a></li>
								<!--<li><a href="<?php echo base_url() ?>customers/wishlist"><i class="fa fa-heart-o"></i> Wishlist</a></li>-->
								<li><a class="lpsd228" href="<?php echo base_url() ?>customers/logout"><i class="fa fa-sign-out"></i>  Logout</a></li>
							</ul><!-- social-icon -->
						</div>
					</div>