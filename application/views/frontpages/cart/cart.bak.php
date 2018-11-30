<div id="content">
		<div class="content-page woocommerce">
			<div class="container">
				<div class="cart-content-page">
					<h2 class="title-shop-page">my cart</h2>
					<form action="<?php echo base_url();?>Checkout/selectAdresses" method="post">
						<div class="table-responsive">
							<table cellspacing="0" class="shop_table cart table">
								<thead>
									<tr>
										<th class="product-remove">&nbsp;</th>
										<th class="product-thumbnail">&nbsp;</th>
										<th class="product-name">Product</th>
										<th class="product-price">Price</th>
										<th class="product-quantity">Quantity</th>
										<th class="product-subtotal">Total</th>
									</tr>
								</thead>
								<tbody>
                                                                    <?php
                                   $ci =&get_instance();
                                   $ci->load->model('admin/Product_model','product');
                                   //echo "<pre/>";print_r($cart_session);
					if($cart_session){
					$i = 0;
					$total =0;
					foreach($cart_session['product_id'] as $cs=>$value){
						$row = $ci->product->get_product($cs);
    						$total += $row[0]->offer_price*$value;
                                                $imageArray = explode(',', $row[0]->image_path);
                                                //print_r($imageArray);
					?>
									<tr class="cart_item" id="tr<?php echo $cs;?>">
										<td class="product-remove">
											<a class="remove" href="#"><i class="fa fa-times delete_cart" style="cursor:pointer" product_id="<?php echo $cs;?>" position="<?php echo $i;?>"></i></a>
										</td>
										<td class="product-thumbnail">
											<img  src="<?php echo base_url();?>public/uploads/<?php echo $imageArray[0]?$imageArray[0]:'no_image.png'; ?>" alt="<?php echo $row[0]->name;?>"/>				
										</td>
										<td class="product-name">
											<a href="<?php echo base_url();?>category/detail/<?php echo $row[0]->product_id;?>"><?php echo $row[0]->name;?> </a>					
										</td>
										<td class="product-price">
											<span class="amount">$<?php echo $row[0]->offer_price;?></span>	
                                                                                        
                                                                                    <input type="hidden" class="product_id"  id="product_id[<?php echo $i;?>]" value="<?php echo $cs;?>">
                                                                                  <input type="hidden" class="product_price"  id="product_price[<?php echo $i;?>]" value="<?php echo $row[0]->offer_price;?>">
										</td>
										<td class="product-quantity">
                                                                                    
											<span class="input-group-btn">
									<button type="button" class="btn btn-danger btn-number less_qty" position="<?php echo $i;?>">
									<span class="glyphicon glyphicon-minus"></span>
									</button>
								</span>
								
									<input type="text" class="form-control qty" value="<?php echo $value;?>" style="text-align:right;width: 100px;" onkeypress="return numbOnly(event)" id="qty[<?php echo $i;?>]">
									
									
								<span class="input-group-btn">
									<button type="button" class="btn btn-success btn-number add_qty" position="<?php echo $i;?>">
									<span class="glyphicon glyphicon-plus"></span>
									</button>
								</span>		
										</td>
										<td class="product-subtotal">
											
                                                                                        <span class="amount" id="span_total<?php echo $cs;?>"><?php echo $row[0]->offer_price*$value;?></span>
										</td>
									</tr>
									<?php
					$i++;
                                        } ?>
                                                                        <input type="hidden" id="total" value="<?php echo  $total;?>">
                                                                        <input type="hidden" id="finaltotal" name="finaltotal" value="<?php echo  $total;?>">
                                                                        
                                        
								</tbody>
							</table>
						</div>
					
                               
					<div class="cart-collaterals">
						<div class="cart_totals ">
							<h2>Cart Totals</h2>
							<div class="table-responsive">
								<table cellspacing="0" class="table">
									<tbody>
																	
										<tr class="order-total">
											<th>Total</th>
											<td><strong><span id="span_all_total" class="amount"><?php echo $total;?></span></strong> </td>
										</tr>
									</tbody>
								</table>
							</div>
							<div class="wc-proceed-to-checkout">
                                                            <?php
if($cart_session){
?>
<span id="button_bottom">
<button class="btn btn-danger pull-right RbtnMargin empty_cart" type="button" >Empty Cart</button>
<button class="btn btn-info pull-right RbtnMargin update_cart" type="button" >Update Cart</button>
<button class="btn btn-success pull-right" type="submit" id="submit">Place Order</button>
</span>
<?php
}
?>
								
							</div>
                                                        
						</div>
					</div>
                                            <?php }                  else {
					
					?>
                                            
					
					  <h2>Cart is empty</h2>
					
                                           
					<?php
					}
					?>
                                        </form>
				</div>
			</div>	
		</div>
		<!-- End Content Page -->
	</div>