<style>
    .ok{
        display: none;
    }
    </style>
     <!-- Start Page Header -->
    <div class="page-header" style="margin-bottom: 23px;">
      <div class="container">
        <div class="row">
          <div class="col-md-12">            
            <div class="breadcrumb">
              <a href="#"><i class="icon-home"></i> Home</a>
              <span class="crumbs-spacer"><i class="fa fa-angle-double-right"></i></span>
              <span class="current">Change Address</span>
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
						<h2 class="title-shop-page lpsd225">Change Address </h2>
						<div class="row">
                                                    		<div class="description-info">
				<div class="row">
					<!-- description -->
					<?php $this->load->view('frontpages/customers/navigation');?>

				<!-- description-short-info -->

											
				

					<div class="col-md-9">
						<div class="description">
                                                    <form class="form-my-account" method="post" action="<?php echo base_url()?>customers/updateAddress">
							<div class="col-md-5 col-sm-12 col-ms-12">
								<div class="account-register">
                                                                     <?php foreach($customer_address as $address1){ if($address1->address_type_id==1) {?>
                                                                    <label>Update Shipping DETAILS</label>
                                                                    <p class="">
                                                                                        <input type="checkbox" name="bothsame" id="bothsame" <?php if($customer_address[0]->both_address_same==1) {echo "checked";}?> value="1"> <label for="bothsame"> Billing address same as Shipping</label>
                                                                    </p>

                                                                                  
                                                                                        <div class="form-group"><div class="controls">
                                                                                            <input type="hidden" name="addresstype" value="1">
                                                                                            <input type="text" class="form-control" name="hno" placeholder="Plot No / H.No" value="<?php echo $address1->hno? $address1->hno:'';?>"/>
                                                                                            </div></div>
                                                                                        <div class="form-group"><div class="controls">
                                                                                                <input type="text" class="form-control" placeholder="Address 1" name="address1" value="<?php echo $address1->address1? $address1->address1:'';?>"/>
                                                                                            </div></div>
                                                                                <div class="form-group"><div class="controls"><input type="text" class="form-control" placeholder="Address 2" name="address2" value="<?php echo $address1->address2? $address1->address2:'';?>"/></div></div>
                                                                                <div class="clearfix box-col2">
											<div class="form-group"><div class="controls">
											<input type="text" class="form-control" placeholder="Town / City *"  name="city" value="<?php echo $address1->city? $address1->city:'';?>" />
                                                                                        </div></div>
                                                                                        <div class="form-group"><div class="controls"><input type="text" class="form-control" placeholder="State" name="state" value="<?php echo $address1->state? $address1->state:'';?>"/></div></div>
										</div>
                                                                                
										
										
										
										<div class="clearfix box-col2">
											<div class="form-group"><div class="controls">
										<select name="country" id="country" class="form-control">
												<option value="india">India</option>
												
											</select></div></div>
                                                                                   <div class="form-group"><div class="controls"> <input type="text" class="form-control" placeholder="Postcode" onkeypress="return isNumber(event)" minlength="6" maxlength="6" name="pin" value="<?php echo $address1->pin? $address1->pin:'';?>"/>
                                                                                       </div></div>
										</div>
                                                                                
										
									<?php } } ?>
								</div>		
							</div>
                                                        <div class="col-md-5 col-sm-12 col-ms-12" >
					<div class="account-register1 ok">
                                                                     <?php foreach($customer_address as $address){ if($address->address_type_id==2) {?>
                                            <label>Update BILLING DETAILS</label>
                                           
                                                                                  <br>
                                                                                    <br>
                                                                                    
                                                                                        <div class="form-group"><div class="controls">
                                                                                            <input type="hidden" name="addresstype1" value="2">
                                                                                            <input type="text" class="form-control" name="hno1" placeholder="Plot No / H.No" value="<?php echo $address->hno? $address->hno:'';?>" /></div></div>
                                                                                        <div class="form-group"><div class="controls"><input type="text" class="form-control" placeholder="Address 1" name="address11" value="<?php echo $address->address1? $address->address1:'';?>"/></div></div>
                                                                                <div class="form-group"><div class="controls"><input type="text" class="form-control" placeholder="Address 2" name="address21"  value="<?php echo $address1->address2? $address1->address2:'';?>"/></div></div>
                                                                                <div class="clearfix box-col2">
                                                                                <div class="form-group"><div class="controls">
                                                                                    <input type="text" class="form-control" placeholder="Town / City *"  name="city1" value="<?php echo $address->city? $address->city:'';?>"/></div></div>
                                                                                <div class="form-group"><div class="controls"> <input type="text" class="form-control" placeholder="State" name="state1" value="<?php echo $address->state? $address->state:'';?>" /></div></div>
										</div>
                                                                                
										
										
										
										<div class="clearfix box-col2">
											<div class="form-group"><div class="controls">
										<select class="form-control" name="country1" id="country">
												<option value="india">India</option>
												
											</select>
                                                                                            </div>
                                                                                        </div>
                                                                                                <div class="form-group"><div class="controls">
                                                                                            <div class="form-group"><div class="controls">
                                                                                                <input type="text" class="form-control" placeholder="Postcode" onkeypress="return isNumber(event)" minlength="6" maxlength="6" name="pin1" value="<?php echo $address->pin? $address->pin:'';?>"/></div></div>
										</div>
                                                                                
									<?php } } ?>
								</div>
                                                            
										
							</div>
                                                                                
                                                        
						</div>
					</div><!-- description -->
                                        <div class="col-md-12 col-sm-12 col-ms-12"><div class="controls"><input class="btn btn-common log-btn" type="submit" name="submit" value="submit" /></div></div>
                                        </form>



					

					
					


				</div><!-- row -->
			</div><!-- description-info -->	
		
							
							
						</div>
					</div>
				</div>
			</div>
		</div>
                        </div>
</div>
    <script>
                  function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
}
</script>
<script>
$(".account-register1").show();
$("#bothsame").click(function() {
   // $("billing.input").prop('required',false);
    //alert();
    if($(this).is(":checked")) {
        $(".account-register1").hide();
    } else {
        $(".account-register1").show();
    }
});

    </script>