
<div class="content-page">
			<div class="container">
				<div class="row">
					<div class="col-md-10 col-sm-12 col-xs-12 col-md-offset-1">
						<h2 class="title-shop-page">My Account </h2>
						<div class="row">
							<div class="col-md-6 col-sm-6 col-ms-12">
                                                           <?php if($this->session->flashdata('fail')) { ?> <div class="alert alert-danger"> <?php echo $this->session->flashdata('fail'); ?></div> <?php } ?>
								<div class="account-login">
                                                                    
									<form class="form-my-account" method="post" action="<?php echo base_url()?>customers/login" validate>
										<h2 class="title">Login</h2>
                                                                                <p><input type="text" placeholder="Email *" name="email" required /></p>
                                                                                <p><input type="text" placeholder="Password *" name="password" required /></p>
										<p>
											<input type="checkbox"  id="remember" /> <label for="remember">Remember me</label>
											<a href="#">Lost Password?</a>
										</p>
										<p><input type="submit" value="Login" /></p>
									</form>
								</div>
							</div>
							<div class="col-md-6 col-sm-6 col-ms-12">
								<div class="account-register">
                                                                    <form class="form-my-account" method="post" action="<?php echo base_url()?>customers/register">
										<h2 class="title">Register</h2>
                                                                                <p><input type="text" required placeholder="First Name *" name="fname" /></p>
                                                                                <p><input type="text" required placeholder="E-mail *" name="email" /></p>
                                                                                <p><input type="text" required placeholder="Phone * (For order status updates)" name="phone" /></p>
                                                                                <p><input type="text" required placeholder="Password *"  name="password" /></p>
										<p><input type="text" required placeholder="Confirm Password *"  name="confpassword"/></p>
                                                                                <p><input type="submit" value="Register" name="register" /></p>
									</form>
								</div>		
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>