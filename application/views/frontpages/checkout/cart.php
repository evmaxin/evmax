<style>
    .wishlist-entry .price{
        font-size: 14px;
        line-height: 30px;
    }
    .wishlist-entry {
    border-top: 1px solid #e3e3e3 !important;
    border-bottom: 0 !important;
    padding: 8px 0px 0px 0px !important;
}
.centercol{
    text-align: center;
    font-weight: bold;
    color: #797979;
}
.cart-content{
        font-weight: bold;
}
    </style>
    <!-- Start Page Header -->
    <div class="page-header">
      <div class="container">
        <div class="row">
          <div class="col-md-12">            
            <div class="breadcrumb">
              <a href="#"><i class="icon-home"></i> Home</a>
              <span class="crumbs-spacer"><i class="fa fa-angle-double-right"></i></span>
              <span class="current">Cart</span>
              <h2 class="entry-title">Your Cart</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Page Header -->

    <!-- Start Content -->
    <div id="content">
      <div class="container">
          <form action="<?php echo base_url();?>Checkout/selectAdresses" method="post">
        <div class="row">
          <div class="header text-center">
            <h3 class="small-title">Shopping cart</h3>
            <div id="notification_div"></div>
          </div>
          <div class="col-md-12 hidden-xs visible-lg visible-md">
            <div class="wishlist">
              <div class="col-md-4 col-sm-4 text-center">
                <p>Product</p>
                
              </div>
              <div class="col-md-2 col-sm-2">
                <p>Price</p>
              </div>
              <div class="col-md-2 col-sm-2">
                <p>Quantity</p>
              </div>
                <div class="col-md-1 col-sm-1">
                <p>GST</p>
              </div>
                <div class="col-md-1 col-sm-1">
                <p>Total</p>
              </div>
         
              <div class="col-md-2 col-sm-2">
                <p>Remove</p>
              </div>
            </div> 
          </div> 
            <?php
           // print_r($cart_session);
                                   $ci =&get_instance();
                                   $ci->load->model('frontend/Product_model','product');
                                 	if($cart_session){
					$i = 0;
					$total =0;
                                        $tax =0;
                                        $delivery_cost = 0;
                                        $handling_cost = 0;
                                        $handling_gst = 0;
                                        $handling_gst = 0;
                                       // $delLoc=0;
					 foreach ($cart_session['product_id'] as $cs => $value) {
                                            // echo $cs." ".$value;
               // $valArray = explode(',', $qtyNloc);
             //   $value = $valArray[0];
                  if(isset($valArray[1])&&(!empty($valArray[1]))){
              //  $delLoc = $valArray[1];
                }
						$row = $ci->product->get_product($cs);
                                              //echo "<pre>"; print_r($row);
                                              //  echo $this->db->last_query();	
    						$total += ($row[0]->offer_price)*$value;
                                              //echo  $row[0]->gst; 
                                             // print_r($row[0]);
                                                $tax += ($row[0]->product_gst*(($row[0]->offer_price)*$value))/100;
                                                $shipping_gst += ($row[0]->shipping_gst*(($row[0]->delivery_cost)*$value))/100;
                                                $handling_gst += ($row[0]->handling_gst*(($row[0]->handling_cost)*$value))/100;
                                                 $delivery_cost += (($row[0]->delivery_cost)*$value);
                                               // echo "<br>";
                                                 $handling_cost += (($row[0]->handling_cost)*$value);
                                               
                                                $imageArray = explode(',', $row[0]->image_path);
                                                
                                                
                                                //print_r($imageArray);
					?>
            <?php
             $gst =0;
             $delivery_cst=0;
             $delivery_tax =0;
             $handling_cst=0;
             $handling_tax= 0;
             $discount =0;
             $discount = ($row[0]->coupon_value);
                $gst = ($row[0]->product_gst*(($row[0]->offer_price)*$value))/100;
                 $delivery_cst = $row[0]->delivery_cost*$value;
                 $delivery_tax = ($row[0]->shipping_gst*(($row[0]->delivery_cost)*$value))/100;
                  $handling_cst = $row[0]->handling_cost*$value;
                  $handling_tax = ($row[0]->handling_gst*(($row[0]->handling_cost)*$value))/100;
                ?>
            <div class="wishlist-entry clearfix tr_total" id="tr<?php echo $cs;?>">
             
                <div class="col-md-4 col-sm-4">
                <div class="cart-entry">
                  <a class="image" href="#"><img src="<?php echo base_url();?>public/uploads/<?php echo $imageArray[0]?$imageArray[0]:'no_image.png'; ?>" alt="<?php echo $row[0]->name;?>"></a>
                  <div class="cart-content">
                      <h4 class="title"><?php echo $row[0]->name?$row[0]->name:'';?></h4><br>
                      <?php echo ($delivery_cst>0)?"Delivery Cost":''; ?><br>
                       <?php echo ($handling_cst>0)?"Handling Cost":''; ?><br>
                       <?php echo ($row[0]->offer_price>0)?"Item Amount":''; ?><br>
                       <?php echo ($discount>0)?"Evmax Discount":''; ?><br>
                       <?php echo ($row[0]->offer_price>0)?"Offer Price":''; ?><br>
                       <!-- <p>(Sold By: <?php echo $row[0]->store_name?$row[0]->store_name:'';?>)</p>-->
                  </div>
                </div>
              </div>
              <div class="col-md-2 col-sm-2 entry">
                <div class="price">
                  &#8377; <?php echo ($row[0]->offer_price);?> <del>&#8377; <?php echo $row[0]->actual_price;?></del>
                  <br> <?php echo ($delivery_cst>0)?"&#8377;".($delivery_cst/$value):''; ?>
                   <br><?php echo ($handling_cst>0)?"&#8377; ".($handling_cst):''; ?>
                  <br> &#8377; <?php echo $row[0]->offer_price?(($row[0]->offer_price*$value)+$gst+$delivery_cst+$delivery_tax+$handling_cst+$handling_tax):0;?>
               <?php echo (($discount)>0)?"<br>&#8377; ".($discount):'';?>
                   <?php echo "<br>"; ?>
                  <input type="hidden" class="product_id"  id="product_id[<?php echo $i;?>]" value="<?php echo $cs;?>">
                  <input type="hidden" class="product_price"  id="product_price[<?php echo $i;?>]" value="<?php echo ($row[0]->offer_price);?>">
                </div>
              </div>
                
              <div class="col-md-2 col-sm-2">
                  
                   <?php //echo $value;?>
           <ul class="quantity-selector" style="margin-top: 0px !important;">
                
                  <li class="entry number-minus less_qty"  style="float: left;" position="<?php echo $i;?>"></li>
                  <input type="text" class="qty entry" style="float: left;" readonly="readonly" value="<?php echo $value;?>" onkeypress="return numbOnly(event)" id="qty[<?php echo $i;?>]">
                  
                  <li class="entry number-plus add_qty"  style="" position="<?php echo $i;?>"></li>
                </ul>              		
              </div> 
              
                <div class="col-md-1 col-sm-1 entry">
                  <div class="price" style="line-height: 31px;">
                    <span class="gst" id="gst_total<?php echo $cs;?>">
                  <?php if($gst>0){ echo "&#8377;".$gst;}?>
                  <?php echo ($delivery_tax>0)?"<br>&#8377; ".($delivery_tax):''; ?>
                         <?php echo ($handling_tax>0)?"<br>&#8377; ".($handling_tax):''; ?>
                         <?php echo "<br>"; ?>
                           <?php echo "<br>"; ?>
                         <?php echo "<br>"; ?>
                 </span>
                </div>
              </div>
                <div class="col-md-1 col-sm-1 entry">
                  <div class="price" style="line-height: 31px;">
                    <span class="amount" id="span_total<?php echo $cs;?>">
                 &#8377; <?php echo ($row[0]->offer_price)*$value;?><br>
                  <?php echo ($delivery_cst>0)?"&#8377; ".($delivery_cst+$delivery_tax):''; ?><br>
                 <?php echo ($handling_cst>0)?"&#8377; ".($handling_cst+$handling_tax):''; ?><br>
                  &#8377; <?php echo $row[0]->offer_price?(($row[0]->offer_price*$value)+$gst+$delivery_cst+$delivery_tax+$handling_cst+$handling_tax):0;?>
              <br><?php echo (($discount*$value)>0)?"&#8377; ".($discount*$value):'';?>
                 <br> &#8377; <?php echo $row[0]->offer_price?((($row[0]->offer_price*$value)+$gst+$delivery_cst+$delivery_tax+$handling_cst+$handling_tax) - ($discount*$value)):0;?>
                 </span>
                </div>
              </div>
              <div class="col-md-2 col-sm-2 entry" style="line-height: 0px !important;">
                <a class="btn-close" href="#"><i class="icon-close delete_cart lps21" style="cursor:pointer" product_id="<?php echo $cs;?>" position="<?php echo $i;?>"></i></a> 
              </div>
            </div>
             
            
           
            
          
           
            
          

         
           <?php
					$i++;
                                        } ?>
                                                                        <input type="hidden" id="total" value="<?php echo  $total;?>">
                                                                        <input type="hidden" id="finaltotal" name="finaltotal" value="<?php echo  $total;?>">
                                                                        <input type="hidden" id="tax" name="tax" value="<?php echo  $tax;?>">
                                                                        <input type="hidden" id="shipping_gst" name="shipping_gst" value="<?php echo  $shipping_gst;?>">
                                                                        <input type="hidden" id="handling_gst" name="handling_gst" value="<?php echo  $handling_gst;?>">
                                                                        <input type="hidden" id="delivery_cost" name="delivery_cost" value="<?php echo $delivery_cost;?>">
                                                                        <input type="hidden" id="handling_cost" name="handling_cost" value="<?php echo $handling_cost;?>">
                                                                        <?php
if($cart_session){
?>
<span id="button_bottom" style="margin-top: 10px !important;float: left;">
<button class="btn btn-danger pull-right RbtnMargin empty_cart" type="button" style="margin-top: 0px !important;">Empty Cart</button>


<button style="margin: 0px 10px 0px 0px;" class="btn btn-success pull-right" type="submit" id="submit">Place Order</button>
<button style="visibility: hidden;" class="btn btn-info pull-right RbtnMargin update_cart" type="button" >Update Cart</button>
</span>
<?php
}
?>
                                                                          <?php } 
                                                                                else 
                                                                              { echo "<h2 style='padding-top: 20px !important;clear: both;text-align: center;'>Cart is empty</h2>";} 
                                                                              ?>
                                                                        
        </div>
          </form>
      </div>
    </div>
    <!-- End Content -->