 <!-- Start Page Header -->
    <div class="page-header" style="margin-bottom: 23px;">
      <div class="container">
        <div class="row">
          <div class="col-md-12">            
            <div class="breadcrumb">
              <a href="#"><i class="icon-home"></i> Home</a>
              <span class="crumbs-spacer"><i class="fa fa-angle-double-right"></i></span>
              <span class="current">Change Profile</span>
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
                                                                  
              
               <form method="post" action="<?php echo base_url()?>customers/updateprofile" class="form-my-account">
                 <div class="col-md-12 col-sm-12 col-ms-12">
								<div class="account-register1">
                                                                    
											<h2 class="title">Update Profile</h2>
                                                                                  
                                                                                        <div class="form-group"><div class="controls">
                                                                                            <input type="text" class="form-control" name="firstname" placeholder="firstname *" required value="<?php echo $customers_data[0]->firstname?$customers_data[0]->firstname:'';?>" /></div></div>
                                                                                        <div class="form-group"><div class="controls"><input type="text" class="form-control" id="lastname"  placeholder="lastname" name="lastname" value="<?php echo $customers_data[0]->lastname?$customers_data[0]->lastname:'';?>"/></div></div>
                                                                                <div class="form-group"><div class="controls"><input type="text" class="form-control" style="border: none;" id="email" placeholder="email" name="email" required readonly value="<?php echo $customers_data[0]->email?$customers_data[0]->email:'';?>"/></div></div>
                                                                                <div class="form-group"><div class="controls"><input type="text" class="form-control" style="border: none;" id="phone" placeholder="phone" name="phone" required readonly value="<?php echo $customers_data[0]->phone?$customers_data[0]->phone:'';?>"/></div></div>
                                                                                
                                                                                
										
										
										
										
                                                                                
									
								</div>
                                                            <div class="form-group"><div class="controls"><input type="submit" class="btn btn-common log-btn" name="submit" value="submit" /></div></div>
										
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

