<style>
    .tab-content {
    border: 2px solid #eee;
    margin-top: 0px;
    padding: 8px 15px;
    width: 100%;
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
						 <div class="col-md-12">
                                <!-- Begin: life time stats -->
                                <div class="portlet light portlet-fit portlet-datatable bordered">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="icon-settings font-dark"></i>
                                            <span class="label label-success wishlist"> Order #<?php echo $orders_data[0]->order_number?$orders_data[0]->order_number:'';?>
                                                <span class="hidden-xs">| <?php $date = new DateTime($orders_data[0]->order_date); echo $orders_data[0]->order_date?date_format($date, 'F jS,  Y g:ia '):'';?> </span>
                                            </span>
                                        </div>
                                        
                                    </div>
                                    <div class="portlet-body">
                                        
                                          
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="tab_1">
                                                    <div class="row">
                                                        <div class="col-md-6 col-sm-12">
                                                            <div class="portlet yellow-crusta box">
                                                                <div class="portlet-title">
                                                                    <div class="label label-success">
                                                                        <i class="fa fa-cogs"></i>Order Details </div>
                                                                    <div class="actions">
                                                                       
                                                                    </div>
                                                                </div>
                                                                <div class="portlet-body">
                                                                    <div class="row static-info">
                                                                        <div class="col-md-5 name"> Order #: </div>
                                                                        <div class="col-md-7 value"> <?php echo $orders_data[0]->order_number?$orders_data[0]->order_number:'';?>
                                                                            <span class="label label-info label-sm"> Email confirmation was sent </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row static-info">
                                                                        <div class="col-md-5 name"> Order Date & Time: </div>
                                                                        <div class="col-md-7 value"> <?php echo $orders_data[0]->order_date?date_format($date, 'F jS,  Y g:ia '):'';?>  </div>
                                                                    </div>
                                                                    <div class="row static-info">
                                                                        <div class="col-md-5 name"> Order Status: </div>
                                                                        <div class="col-md-7 value">
                                                                            <span class="label label-success"> <?php echo "Success";?> </span>
                                                                        </div>
                                                                    </div>
                                                                  
                                                                    <div class="row static-info">
                                                                        <div class="col-md-5 name"> Payment Information: </div>
                                                                        <div class="col-md-7 value"> <?php echo "COD";?> </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-sm-12">
                                                            <div class="portlet blue-hoki box">
                                                                <div class="portlet-title">
                                                                    <div class="caption label label-success">
                                                                        <i class="fa fa-cogs"></i>Customer Information </div>
                                                                    <div class="actions">
                                                                        
                                                                    </div>
                                                                </div>
                                                                <div class="portlet-body">
                                                                    <div class="row static-info">
                                                                        <div class="col-md-5 name"> Customer Name: </div>
                                                                        <div class="col-md-7 value"> <?php echo $orders_data[0]->firstname?$orders_data[0]->firstname." ".$orders_data[0]->lastname:'';?> </div>
                                                                    </div>
                                                                    <div class="row static-info">
                                                                        <div class="col-md-5 name"> Email: </div>
                                                                        <div class="col-md-7 value"> <?php echo $orders_data[0]->email?$orders_data[0]->email:'';?> </div>
                                                                    </div>
                                                                    <div class="row static-info">
                                                                        <div class="col-md-5 name"> State: </div>
                                                                        <div class="col-md-7 value"> <?php echo $orders_data[0]->state?$orders_data[0]->state:'';?> </div>
                                                                    </div>
                                                                    <div class="row static-info">
                                                                        <div class="col-md-5 name"> Phone Number: </div>
                                                                        <div class="col-md-7 value"> <?php echo $orders_data[0]->phone?$orders_data[0]->phone:'';?> </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6 col-sm-12">
                                                            <div class="portlet green-meadow box">
                                                                <div class="portlet-title">
                                                                    <div class="caption label label-success">
                                                                        <i class="fa fa-cogs"></i>Billing Address </div>
                                                                    <div class="actions">
                                                                       
                                                                    </div>
                                                                </div>
                                                                <div class="portlet-body">
                                                                    <div class="row static-info">
                                                                        <div class="col-md-12 value"> <?php echo $orders_data[0]->firstname?$orders_data[0]->firstname." ".$orders_data[0]->lastname:'';?>
                                                                            <br> #<?php echo $orders_data[0]->hno?$orders_data[0]->hno:'';?> <?php echo $orders_data[0]->address1?$orders_data[0]->address1:'';?>
                                                                            <?php echo $orders_data[0]->address2?"<br>".$orders_data[0]->address2:'';?>
                                                                            <br> <?php echo $orders_data[0]->city?$orders_data[0]->city:'';?>
                                                                             <?php echo $orders_data[0]->state?$orders_data[0]->state:'';?>, <?php echo $orders_data[0]->pin?$orders_data[0]->pin:'';?>
                                                                            <br> <?php echo $orders_data[0]->country?$orders_data[0]->country:'';?>
                                                                            <br> T: <?php echo $orders_data[0]->phone?$orders_data[0]->phone:'';?>
                                                                           
                                                                            <br> </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-sm-12">
                                                            <div class="portlet red-sunglo box">
                                                                <div class="portlet-title">
                                                                    <div class="caption label label-success">
                                                                        <i class="fa fa-cogs"></i>Shipping Address </div>
                                                                    <div class="actions">
                                                                        
                                                                    </div>
                                                                </div>
                                                                <div class="portlet-body">
                                                                    <div class="row static-info">
                                                                        <div class="col-md-12 value"> <?php echo $orders_data[0]->firstname?$orders_data[0]->firstname." ".$orders_data[0]->lastname:'';?>
                                                                            <br> #<?php echo $orders_data[0]->hno?$orders_data[0]->hno:'';?> <?php echo $orders_data[0]->address1?$orders_data[0]->address1:'';?>
                                                                            <?php echo $orders_data[0]->address2?"<br>".$orders_data[0]->address2:'';?>
                                                                            <br> <?php echo $orders_data[0]->city?$orders_data[0]->city:'';?>
                                                                             <?php echo $orders_data[0]->state?$orders_data[0]->state:'';?>, <?php echo $orders_data[0]->pin?$orders_data[0]->pin:'';?>
                                                                            <br> <?php echo $orders_data[0]->country?$orders_data[0]->country:'';?>
                                                                            <br> T: <?php echo $orders_data[0]->phone?$orders_data[0]->phone:'';?>
                                                                           
                                                                            <br> </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12 col-sm-12">
                                                            <div class="portlet grey-cascade box">
                                                                <div class="portlet-title">
                                                                    <div class="caption label label-success">
                                                                        <i class="fa fa-cogs"></i>Shopping Cart </div>
                                                                    <div class="actions">
                                                                       
                                                                    </div>
                                                                </div>
                                                                <div class="portlet-body">
                                                                    <div class="table-responsive">
                                                                        <table class="table table-hover table-bordered table-striped">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th> Product </th>
                                                                                    <th> Item Status </th>
                                                                                    
                                                                                    <th> Quantity </th>
                                                                                    <th> Price </th>
                                                                                  
                                                                                    <th> Total </th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <?php 
                                                                                //$discount =0;
                                                                                $coupon_value = 0;
                                                                               // echo "<pre>"; print_r($orders_data[0]);
                                                                                if(isset($orders_data[0]->prod_array)){ 
                                                                                    $products_val_rows= explode(';', $orders_data[0]->prod_array);
                                                                    foreach ($products_val_rows as $single_row) {
                                                                        $single_row1= explode(',', $single_row);
                                                                        $coupon_value += ($single_row1[5])*$single_row1[3];
                                                                        $delivery_cost += ($single_row1[7]) * $single_row1[3];
                                                $handling_cost += ($single_row1[8]) * $single_row1[3];
                                                                      //echo "<pre>";print_r($single_row1);
                                                                  
                                                                                    ?>
                                                                                <tr>
                                                                                    <td>
                                                                                         <?php echo $single_row1?$single_row1[0]."":'';?>
                                                                                        <br>
                                                                                        <?php 
                                                                                        foreach ($attributes_data as $atr_data) {
                                                                                        //    echo $atr_data->product_id; 
                                                                                            if($single_row1[1]==$atr_data->product_id) {
                                                                                           ?>
                                                                                        <i style="font-size: 12px;"> 
                                                                                            <b><?php echo $atr_data->attribute_type?$atr_data->attribute_type:''; ?> </b>: <?php echo $atr_data->name?$atr_data->name:'';echo ","; ?> 
                                                                                            </i>
                                                                                        <?php } } ?>
                                                                                        <b>Sold By:</b><?php echo $single_row1?$single_row1[4]:'';?>
                                                                                    </td>
                                                                                    <td>
                                                                                        <span class="label label-sm label-success"> Available </td>
                                                                                    <td> <?php echo $single_row1?$single_row1[3]:'';?></td>
                                                                                    
                                                                                    <td>Rs.<?php echo $single_row1?($single_row1[6]/$single_row1[3]):'';?> </td>
                                                                                   
                                                                                    <td>Rs.<?php echo $single_row1?($single_row1[6]):'';?></td>
                                                                                </tr>
                                                                                 <?php 
                                                                                             }
                                                                                        } ?>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4"> </div>
                                                        <div class="col-md-8">
                                                            <div class="well">
                                                                <div class="row static-info align-reverse">
                                                                    <div class="col-md-5 name"> Sub Total: </div>
                                                                    <div class="col-md-7 value"> Rs.<?php echo $orders_data[0]->grant_total?$orders_data[0]->grant_total:'';?> </div>
                                                                </div>
                                                              
                                                                <div class="row static-info align-reverse">
                                                                    <div class="col-md-5 name"> </div>
                                                                    <div class="col-md-7 value"> <small>( Shipping - Rs. <?php echo  $delivery_cost?$delivery_cost:0;?> </small>  </div>
                                                                </div>
                                                                 <div class="row static-info align-reverse">
                                                                    <div class="col-md-5 name"> </div>
                                                                    <div class="col-md-7 value"> <small> Handling:- Rs. <?php echo $handling_cost?$handling_cost:0;?> )</small> </div>
                                                                </div>
                                                                  <div class="row static-info align-reverse">
                                                                    <div class="col-md-5 name"> Tax: </div>
                                                                    <div class="col-md-7 value"> Rs.<?php echo $orders_data[0]->gst?$orders_data[0]->gst:0;?>  </div>
                                                                </div>
                                                                 <div class="row static-info align-reverse">
                                                                    <div class="col-md-5 name">Evmax Discount:</div>
                                                                    <div class="col-md-7 value"> Rs. <?php echo $coupon_value?$coupon_value:0;?>  </div>
                                                                </div>
                                                                <div class="row static-info align-reverse">
                                                                    <div class="col-md-5 name"> Grand Total: </div>
                                                                    <div class="col-md-7 value"> Rs.<?php echo $orders_data[0]->grant_total?(($orders_data[0]->grant_total+$orders_data[0]->gst)-$coupon_value):'';?>  </div>
                                                                </div>
                                                             
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        
                                    </div>
                                </div>
                                <!-- End: life time stats -->
                            </div>
					</div><!-- description -->



					

					
					


				</div><!-- row -->
			</div><!-- description-info -->	
		
							
							
						</div>
					</div>
				</div>
			</div>
		</div>