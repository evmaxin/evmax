 <!-- Start Page Header -->
    <div class="page-header" style="margin-bottom: 23px;">
      <div class="container">
        <div class="row">
          <div class="col-md-12">            
            <div class="breadcrumb">
              <a href="#"><i class="icon-home"></i> Home</a>
              <span class="crumbs-spacer"><i class="fa fa-angle-double-right"></i></span>
              <span class="current">Orders</span>
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
						<h2 class="title-shop-page lpsd225">Orders </h2>
						<div class="row">
                                                    		<div class="description-info">
				<div class="row">
					<!-- description -->
					<?php 
                                        $this->load->view('frontpages/customers/navigation');?>

				<!-- description-short-info -->

											
				

					<div class="col-md-9">
						<div class="description">
                                                   
							<div class="col-md-12 col-sm-12 col-ms-12">
                                                            <div class="table-responsive">
							<table cellspacing="0" class="shop_table cart table">
								<thead>
									<tr>
										<th class="product-remove">&nbsp;</th>
										
										<th class="product-name">Customer Name</th>
                                                                                <th class="product-name">Order No#</th>
                                                                            
									
										<th class="product-quantity">Quantity</th>
										
                                                                                <th class="product-subtotal">View Order</th>
									</tr>
								</thead>
								<tbody>
                                                                     <?php if(isset($orders)) { $i=1; foreach($orders as $value) {?>
									<tr class="cart_item">
										<td class="product-remove">
											<?php echo $i;?>
										</td>
									
                                                                                <td class="product-name">
											<?php echo $value->firstname;?>			
										</td>
										<td class="product-name">
											#<?php echo $value->order_number;?>			
										</td>
                                                                               
                                                                               
										
										<td class="product-quantity">
											<div class="info-qty1">
												
												<span class="qty-val"><?php echo $value->quantity;?></span>
												
											</div>			
										</td>
										
                                                                                <td class="product-subtotal">
                                                                                    <a href="<?php echo base_url()."customers/vieworder/".$value->order_id;?>">View</a>				
										</td>
									</tr>
                                                                     <?php $i++;} } ?>
									
								</tbody>
							</table>
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