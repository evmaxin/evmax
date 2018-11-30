 <!-- Start Page Header -->
    <div class="page-header" style="margin-bottom: 23px;">
      <div class="container">
        <div class="row">
          <div class="col-md-12">            
            <div class="breadcrumb">
              <a href="#"><i class="icon-home"></i> Home</a>
              <span class="crumbs-spacer"><i class="fa fa-angle-double-right"></i></span>
              <span class="current">Add Address</span>
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
						<h2 class="title-shop-page">Add Address </h2>
						<div class="row">
                                                    		<div class="description-info">
				<div class="row">
					<!-- description -->
					<?php $this->load->view('frontpages/customers/navigation');?>

				<!-- description-short-info -->

											
				

					<div class="col-md-9">
						<div class="description">
                                                    <form class="form-my-account" method="post" onsubmit="return validate(this);" action="<?php echo base_url()?>customers/addAddress">
							<div class="col-md-5 col-sm-12 col-ms-12">
								<div class="account-register">
                                                                    <div class="form-group"><div class="controls">
											<label> &nbsp;</label>
										</div></div>
                                                                    <label>Add Shipping Details</label>
                                                                   

                                                                                  
                                                                                        <div class="form-group"><div class="controls">
                                                                                            <input type="hidden" name="addresstype" value="1">
                                                                                        <div class="form-group">
                                                                                            <div class="controls">
                                                                                                <input type="text" class="form-control" name="hno" placeholder="Plot No / H.No *" required/>
                                                                                            </div>
                                                                                        </div>
                                                                                         <div class="form-group">
                                                                                            <div class="controls">
                                                                                                <input type="text" class="form-control" placeholder="Address 1 *" name="address1" required/> 
                                                                                            </div>
                                                                                        </div>
                                                                                <div class="form-group">
                                                                                            <div class="controls">
                                                                                                <input type="text" class="form-control"placeholder="Address 2" name="address2" />
                                                                                            </div>
                                                                                        </div>
                                                                                <div class="clearfix box-col2" style="width: 100%;">
											
											 <div class="form-group pull-left" style="width: 49%;">
                                                                                            <div class="controls">
                                                                                                <input type="text" class="form-control" placeholder="Town / City *"  name="city"  required/>
                                                                                                 </div>
                                                                                        </div>
                                                                                                 <div class="form-group pull-right" style="width: 49%;">
                                                                                            <div class="controls">
                                                                                        <input type="text" class="form-control" placeholder="State *" name="state" required/>
                                                                                         </div>
                                                                                        </div>
										</div>
                                                                                
										
										
										
										<div class="clearfix box-col2" style="width: 100%;">
											 <div class="form-group pull-left" style="width: 49%;">
                                                                                            <div class="controls">
										<select class="form-control" name="country" id="country">
												<option value="india">India</option>
												
											</select>
                                                                                            </div>
                                                                                        </div>
                                                                                                 <div class="form-group pull-right" style="width: 49%;">
                                                                                            <div class="controls">
                                                                                    <input type="text" class="form-control" placeholder="Postcode *" name="pin" onkeypress="return isNumber(event)" minlength="6" maxlength="6"  required/>
                                                                                      </div>
                                                                                        </div>
										</div>
                                                                                
										
									
								</div>		
							</div>
                                                                </div>
                                                        </div>
                                                        <div class="col-md-5 col-sm-12 col-ms-12">
                                                             <div class="form-group"><div class="controls">
											<input type="checkbox" name="bothsame" id="bothsame" value="1"> <label for="bothsame"> Billing address same as Shipping</label>
										</div></div>
								<div class="account-register1">
                                                                    
											<label>Add Billing Details</label>
                                                                                         <div class="form-group">
                                                                                            <div class="controls">
                                                                                            <input type="hidden" name="addresstype1" value="2">
                                                                                            <input type="text" class="form-control billing"  name="hno1" placeholder="Plot No / H.No *" />
                                                                                             </div>
                                                                                        </div>
                                                                                             <div class="form-group"><div class="controls">
                                                                                        <input type="text" class="form-control billing"  placeholder="Address 1 *" name="address11" />
                                                                                          </div></div>
                                                                                         <div class="form-group">
                                                                                            <div class="controls">
                                                                                <input type="text" class="form-control billing" placeholder="Address 2" name="address21"  />
                                                                                  </div>
                                                                                        </div>
                                                                                <div class="clearfix box-col2" style="width: 100%;"> 
											
                                                                                     <div class="form-group pull-left" style="width: 49%;">
                                                                                            <div class="controls">
											<input type="text" class="form-control billing"  placeholder="Town / City *"  name="city1"/>
                                                                                          </div>
                                                                                        </div>
                                                                                         <div class="form-group pull-right" style="width: 49%;">
                                                                                            <div class="controls">
                                                                                        <input type="text" class="form-control billing" placeholder="State *" name="state1" />
                                                                                          </div>
                                                                                        </div>
										</div>
                                                                                
										
										
										
										<div class="clearfix box-col2" style="width: 100%;">
											 <div class="form-group pull-left" style="width: 49%;">
                                                                                            <div class="controls">
										<select class="form-control" name="country1" id="country" >
												<option value="india">India</option>
												
											</select>
                                                                                                  </div>
                                                                                        </div>
                                                                                                 <div class="form-group pull-right" style="width: 49%;">
                                                                                            <div class="controls">
                                                                                    <input type="text" class="form-control billing"  onkeypress="return isNumber(event)" minlength="6" maxlength="6" placeholder="Postcode *"  name="pin1" />
                                                                                      </div>
                                                                                        </div>
										</div>
                                                                                
									
								</div>
                                                            
										
							</div>
                                                        <div class="form-group col-md-12 col-sm-12 col-ms-12"><input class="btn btn-common log-btn" type="submit" name="submit" value="submit" /></div>
                                                        </form>
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
    function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
}
</script> 
<!-- for Customers pages-->
<script>
$(".account-register1").show();
$( ".billing" ).addClass( "required" );
$("#bothsame").click(function() {
    //$("billing.input").prop('',false);
    $( ".billing" ).removeClass( "required" );
    //alert();
    if($(this).is(":checked")) {
        $(".account-register1").hide();
    } else {
        $(".account-register1").show();
    }
});

    </script>
    <script type="text/javascript">

var validate = (function() {
  var reClass = /(^|\s)required(\s|$)/;  // Field is required
  var reValue = /^\s*$/;                 // Match all whitespace

  return function (form) {
    var elements = form.elements;
    var el;

    for (var i=0, iLen=elements.length; i<iLen; i++) {
      el = elements[i];

      if (reClass.test(el.className) && reValue.test(el.value)) {
        // Required field has no value or only whitespace
        // Advise user to fix
        alert('please fix ' + el.name);
        return false;
      }
    }
  }
}());

</script>