    <!-- Start Page Header -->
    <div class="page-header">
      <div class="container">
        <div class="row">
          <div class="col-md-12">            
            <div class="breadcrumb">
              <a href="#"><i class="icon-home"></i> Home</a>
              <span class="crumbs-spacer"><i class="fa fa-angle-double-right"></i></span>
              <span class="current">Order</span>
              <h2 class="entry-title">Success</h2>
            </div>
          </div>
        </div>
      </div>    
    </div>
    <!-- End Page Header -->
<div class="content-page">
			<div class="container">
				<div class="row">
	<div class="col-md-10 col-sm-12 col-xs-12 col-md-offset-1 login-form-container" style="margin-bottom: 130px;    margin-top: 20px;">
						<h2 class="title-shop-page">Order success </h2>
						<div class="row">
							<div class="col-md-6 col-sm-6 col-ms-12">
                                                           
								<div class="account-login">
                                                                    
									<p>Order #<?php echo $this->session->userdata('order_number')?$this->session->userdata('order_number'):'error occured'; ?></p>
                                                                        <p>Please check Your email <b><?php echo $this->session->userdata('customer_data')?$this->session->userdata('customer_data')['email']:'';?></b> for order details</p>
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>