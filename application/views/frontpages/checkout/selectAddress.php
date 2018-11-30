<style>
    label {
    display: table-cell;
    max-width: 100%;
    margin-bottom: 5px;
    font-weight: 500;
}
h3 {
    line-height: normal !important;
    font-weight: 500;
}
.sidebar-detail li{
    margin-top: 10px;
}
    </style>
<?php $ci =&get_instance();
                                   $ci->load->model('frontend/Product_model','product');?>
<div id="content">
		<div class="content-shop">
			<div class="container">
				<div class="main-content-shop">
					<div class="detail-fullwidth">
                                            <form action="<?php echo base_url()?>Payment/check" method="post">
						<div class="row">
                                                     <h4 class="lpsd222">  Select Delivery Address </h4>
							<div class="col-md-9 col-sm-9 col-xs-12">
                                                            
								<div class="main-detail lpsd223">
									<div class="row">
										<div class="col-md-6 col-sm-12 col-xs-12 login-form-container">
                                                                                   
											<div class="detail-info-fullwidth">
											
												<!-- End Attr Info -->
                                                                                                <?php $cust_addr=""; foreach($customer_address as $address1){ if($address1->address_type_id==1) {?>
                                                                                                <div class=""><p>
                                                                                                        <input id="makedefault" type="radio" name="makedefault" value="1" required> <label for="makedefault"><?php echo $this->session->userdata('customer_data')['username']?$this->session->userdata('customer_data')['username']:'Name not avialable'; ?>(Default)</label>
											    </p> <?php $cust_addr .=$address1->hno.",";print_r($address1->hno);?></div>
                                                                                                <div class=""> <?php $cust_addr .=$address1->address1.",";print_r($address1->address1);?></div>
                                                                                                <div class=""> <?php $cust_addr .=$address1->address2.",";print_r($address1->address2);?></div>
                                                                                                 <div class=""> <?php $cust_addr .=$address1->city.",";print_r($address1->city);?></div>
                                                                                                  <div class=""> <?php $cust_addr .=$address1->state.",";print_r($address1->state);?></div>
                                                                                                   <div class=""> <?php $cust_addr .=$address1->country.",";print_r($address1->country);?></div>
                                                                                                   <div class=""> <?php $cust_addr .=$address1->pin; print_r($address1->pin);?></div>
                                                                                                <?php } } ?>
											</div>
											<!-- End Gallery -->
										</div>
                                                                            <div class="col-md-5 col-sm-12 col-xs-12 login-form-container lpsd236" style="<?php if($customer_address[0]->both_address_same==1){echo 'display:none';}?>">
                                                                                      
											<div class="detail-info detail-info-fullwidth">
                                                                                          
												  <?php foreach($customer_address as $address){ if($address->address_type_id==2) {?>
                                                                                            
                                                                                                <div class="">
<p>
                                                                                          <input id="makedefault1" type="radio" name="makedefault" value="2" required>  <label for="makedefault1"><?php echo $this->session->userdata('customer_data')['username']?$this->session->userdata('customer_data')['username']:'Name not avialable'; ?></label>
											    </p> <?php print_r($address->hno);?></div>
                                                                                                <div class=""> <?php print_r($address->address1);?></div>
                                                                                                <div class=""> <?php print_r($address->address2);?></div>
                                                                                                 <div class=""> <?php print_r($address->city);?></div>
                                                                                                 <div class=""> <?php print_r($address->state);?></div>
                                                                                                   <div class=""> <?php print_r($address->country);?></div>
                                                                                                   <div class=""> <?php print_r($address->pin);?></div>
                                                                                                <?php } } ?>
											</div>
											<!-- Detail Info -->
										</div>
                                                                            <!--<div class="col-md-6 col-sm-12 col-xs-12" >
                                                                                     <div class="center"><button data-toggle="modal" data-target="#squarespaceModal" class="btn btn-primary center-block">Add New Address</button></div>
											
										</div>-->
									</div>
								</div>
							</div>
							<div class="col-md-3 col-sm-3 col-xs-12 login-form-container lpsd226">
                                                            
								<div class="sidebar-detail lpsd235">
                                                                    
										
                                                                    <ul>        <li>
											<div class="work-icon pull-left ">
                                                                                            <label>Payment Method</label>
											</div>
											<div class="work-info">
                                                                                            <select name="paymode" id="paymode" required>
                                                                                              <option value="cod">Cash On Delivery</option>
                                                                                                
                                                                                            </select>
											</div>
                                                                            <?php //print_r($customer_data);?>
                                                                            
                                                                            <input type="hidden" name="product_info" id="product_info" value="<?php
                                   
                                 	if($cart_session){
					$i = 0;
					$total =0;
                                        $delivery_cost =0;
                                        $handling_cost =0;
                                        $coupon_value = 0;
					foreach ($cart_session['product_id'] as $cs => $value) {
					//$valArray = explode(',', $qtyNloc);
					//$value = $valArray[0];
						$row = $ci->product->get_product($cs);
    						$total += ($row[0]->offer_price)*$value;
                                                $delivery_cost += ($row[0]->delivery_cost)*$value;
                                                $handling_cost += ($row[0]->handling_cost)*$value;
                                                $coupon_value += ($row[0]->coupon_value)*$value;
                                                    echo "Product Name: ".$row[0]->name.", Quatity: ".$value.", Cost: ".($row[0]->offer_price)*$value."\r\n";
                                        }
                                        echo "Total: ".$total."\r\n";
                                        echo "Tax: ".($this->session->userdata('tax')+$this->session->userdata('shipping_gst')+$this->session->userdata('handling_gst'))."\r\n";
                                        echo "Grand Total: ".($total+($delivery_cost+$handling_cost+$this->session->userdata('tax')+$this->session->userdata('shipping_gst')+$this->session->userdata('handling_gst')))."\r\n";
                                        }
                                             
					?>" class=""/>
                                                                            <input type="hidden"  name="payble_amount" id="payble_amount" value="<?php echo $total?($total+$this->session->userdata('tax')+$this->session->userdata('shipping_gst')+$this->session->userdata('handling_gst')+$delivery_cost+$handling_cost):'Error'?>" class="" />
                                                                            <input type="hidden"  name="customer_name" id="customer_name" value="<?php echo $customer_data['username']?$customer_data['username']:'';?>"/>
                                                                            <input type="hidden"  name="mobile_number" id="mobile_number" value="<?php echo $customer_data['phone']?$customer_data['phone']:'';?>"/>
                                                                            <input type="hidden"  name="customer_email" id="customer_email" value="<?php echo $customer_data['email']?$customer_data['email']:'';?>" />
                                                                            <input type="hidden" name="customer_address" id="customer_address" value="<?php echo $cust_addr?$cust_addr:'';?>"/>
										</li>
										<li>
											<div class="work-icon">
												
											</div>
											<div class="work-info lpsd234">
												<?php if(isset($cart_session['product_id'])){echo array_sum($cart_session['product_id']);} else { echo '0'; } ?> ITEM(s)
											</div>
										</li>
										<?php if($this->session->userdata('finaltotal')){ ?>
										<li>
											<div class="work-icon pull-left">
                                                                                            <label>Sub Total</label>
											</div>
											<div class="work-info">
                                                                                            <h3  class="pull-right"><?php echo $this->session->userdata('finaltotal')?"Rs. ".($this->session->userdata('finaltotal')+$delivery_cost+$handling_cost):''?></h3>
											</div>
										</li>
                                                                                <br>
                                                                                  <?php } ?>
                                                                         
                                                                         
																				<?php if($this->session->userdata('tax') >0){?>
                                                                                <li>
											<div class="work-icon pull-left lpsd231 lpdc123">
                                                                                            <label>Total GST</label>
											</div>
											<div class="work-info">
                                                                                            <h3  class="pull-right"><?php echo $this->session->userdata('tax')?"Rs. ".($this->session->userdata('tax')+$this->session->userdata('shipping_gst')+$this->session->userdata('handling_gst')):''?></h3>
											</div>
										</li>
										<br>
                                                                                    <?php } ?>
									
                                                                            
                                                                             
                                                                                 <?php if($coupon_value){?>
                                                                                 <li>
											<div class="work-icon pull-left lpsd232">
                                                                                            <label>Evmax Discount</label>
											</div>
											<div class="work-info">
                                                                                            <h3  class="pull-right lpsd233"><?php echo $coupon_value?"Rs. ".($coupon_value):''?></h3>
											</div>
										</li>
                                                                                  <?php } ?>
                                                                                <li>
											<div class="work-icon pull-left lpsd232">
                                                                                            <label>Grand Total</label>
											</div>
											<div class="work-info">
                                                                                            <h3  class="pull-right lpsd233">Rs.<?php echo $this->session->userdata('finaltotal')?(($this->session->userdata('finaltotal')+$delivery_cost+$handling_cost+$this->session->userdata('tax')+$this->session->userdata('shipping_gst')+$this->session->userdata('handling_gst'))- $coupon_value):''?></h3>
											</div>
										</li>
                                                                                
										<li>
											<div class="work-icon">
												<a href="#"><img src="" alt="" /></a>
											</div>
											<div class="work-info">
                                                                                            <input type="submit" class="btn btn-success" value="Continue">
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
                                            </form>
                                        </div>
                                </div>
                        </div>
                </div>
        </div>
                    <!-- Modal -->
<div class="modal fade" id="squarespaceModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
			<h3 class="modal-title" id="lineModalLabel">Add New Address</h3>
		</div>
		<div class="modal-body">
			
            <!-- content goes here -->
            <form action="<?php echo base_url()?>customers/addAddress" method="post">
                            <div class="form-group"><div class="controls">
                                                                                       <select class="form-control" name="country1" id="country" >
												<option value="">Select Address Type</option>
                                                                                                <option value="">Shipping</option>
                                                                                                <option value="">Billing</option>
												
											</select>
                                                                                          </div>
                            </div> 
                            <div class="form-group"><div class="controls">
                                    <input type="checkbox" value="1" name="make_default" style="width: 15px;height: 15px;"> Make Default address
                                                                                          </div>
                            </div> 
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
                                                    
                                                                                
             
              <button type="submit" class="btn btn-success">Submit</button> 
              <button type="button" class="btn btn-warning" data-dismiss="modal"  role="button">Close</button>
            </form>

		</div>
		<!--<div class="modal-footer">
			<div class="btn-group btn-group-justified" role="group" aria-label="group button">
				<div class="btn-group" role="group">
					<button type="button" class="btn btn-warning" data-dismiss="modal"  role="button">Close</button>
				</div>
				
				
			</div>
		</div>-->
	</div>
  </div>
</div>