 <!-- Start Page Header -->
    <div class="page-header" style="margin-bottom: 23px;">
      <div class="container">
        <div class="row">
          <div class="col-md-12">            
            <div class="breadcrumb">
              <a href="#"><i class="icon-home"></i> Home</a>
              <span class="crumbs-spacer"><i class="fa fa-angle-double-right"></i></span>
              <span class="current">Change Password</span>
              <h2 class="entry-title"></h2>
            </div>
          </div>
        </div>
      </div>    
    </div>
    <!-- End Page Header -->
<div class="content-page">
			<div class="container">
				<div class="row">
					<div class="col-md-10 col-sm-12 col-xs-12 col-md-offset-1">
						<h2 class="title-shop-page"> </h2>
						<div class="row">
                                                    		<div class="description-info">
				<div class="row">
					<!-- description -->
					<?php 
                                        $this->load->view('frontpages/customers/navigation');?>

				<!-- description-short-info -->

											
				

					<div class="col-md-9">
						<div class="description">
                                                    
							<div class="col-md-6 col-sm-12 col-ms-12">
								<div class="account-register">
                                                                  
              
               <form method="post" action="<?php echo base_url()?>customers/updatepassword" class="form-my-account" onsubmit="return myFunction()">
                 <div class="col-md-12 col-sm-12 col-ms-12">
								<div class="account-register1">
                                                                    
											<h2 class="title">Change Password</h2>
                                                                                  
                                                                                        <div class="form-group"><div class="controls">
                                                                                                <input type="password" class="form-control" name="cpass" placeholder="Current Password" required /></div></div>
                                                                                        <div class="form-group"><div class="controls"><input type="password"  class="form-control" id="pass1"  placeholder="Type New Password" name="password" required/></div></div>
                                                                                <div class="form-group"><div class="controls"><input type="text" class="form-control" id="pass2" placeholder="Type Re Password" name="cpassword" required/></div></div>
                                                                                
                                                                                
										
										
										
										
                                                                                
									
								</div>
                                                            <div class="form-group"><div class="controls"><input type="submit" class="btn btn-common log-btn" name="submit" value="submit" /></div></div>
										<div class="form-group"><div class="controls">
											
										</div></div>
							</div>
                </form>
              
								</div>		
							</div>
                                                        
                                                       					</div>
					</div><!-- description -->



					

					
					


				</div><!-- row -->
			</div><!-- description-info -->	
		
							
							
						</div>
					</div>
				</div>
			</div>
		</div>

<script>
    function myFunction() {
    var pass1 = document.getElementById("pass1").value;
    var pass2 = document.getElementById("pass2").value;
    var ok = true;
    if (pass1 != pass2) {
        alert("Passwords Do not match");
        document.getElementById("pass1").style.borderColor = "#E34234";
        document.getElementById("pass2").style.borderColor = "#E34234";
        ok = false;
    }
    else {
        document.getElementById("pass1").style.borderColor = "#249011";
        document.getElementById("pass2").style.borderColor = "#249011";
    }
    return ok;
}
    </script>