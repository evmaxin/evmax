	<style>
	
		/* these styles are for the demo, but are not required for the plugin */
		.zoom {
			display:inline-block;
			position: relative;
		}
		
		/* magnifying glass icon */
		.zoom:after {
			content:'';
			display:block; 
			width:33px; 
			height:33px; 
			position:absolute; 
			top:0;
			right:0;
			/*background:url(icon.png);*/
		}

		.zoom img {
			display: block;
		}

		.zoom img::selection { background-color: transparent; }
	</style>
<!-- Start Page Header -->
    <div class="page-header">
      <div class="container">
        <div class="row">
          <div class="col-md-12">            
            <div class="breadcrumb">
              <a href="#"><i class="icon-home"></i> Home</a>
              <span class="crumbs-spacer"><i class="fa fa-angle-double-right"></i></span>
              <span class="current">Product detail</span>
              <h2 class="entry-title">Single Product</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
   
    <!-- End Page Header -->
    
    <!-- Single-prouduct Section Start -->
        <?php

$i = 0;
$cart_session = @$this->session->userdata('cart_session');
//print_r($products);
foreach($products as $row){
	$imageArray = explode(',', $row->image_path); 
        
?>
    <section id="product-collection" class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="product-details-image">
              <div class="slider-for slider">
                  <?php  if(!empty($imageArray)) { $j=1; foreach ($imageArray as $images) { ?>
                <div class='zoom ex1'>
                 <!-- <a href="<?php echo base_url();?>public/uploads/<?php if($images != ''){  echo $images; } else { echo 'no_image.png'; } ?>"> -->
                  <img src="<?php echo base_url();?>public/uploads/<?php if($images != ''){  echo $images; } else { echo 'no_image.png'; } ?>"  alt="<?php if(!empty($row->name)) { echo $row->name;} ?>">
                  
                <!--  </a> -->
                </div>
             <?php $j++;} } ?>
              </div>
              <ul id="productthumbnail" class="slider slider-nav">
                   <?php  if(!empty($imageArray)) { $k=1; foreach ($imageArray as $images) { ?>
                <span>
                  <li class='zoom ex1'>
                  <img src="<?php echo base_url();?>public/uploads/<?php if($images != ''){  echo $images; } else { echo 'no_image.png'; } ?>"  alt="<?php if(!empty($row->name)) { echo $row->name;} ?>">
                </li>
                </span>
                
                 <?php $k++;} } ?>
              </ul>
            </div>
          </div>
            
          <div class="col-md-8 col-sm-6 col-xs-12">
               <div id="notification_div"></div>
            <div class="info-panel">
              <h1 class="product-title"><?php  echo $row->name?$row->name:'';  ?></h1>
               <label><a href="<?php echo base_url() ?>store/<?php echo $row->store_slug; ?>"><?php echo $row->store_name; ?></a></label>  
              <!-- Rattion Price -->
              <div class="price-ratting">
                <div class="price float-left">
                  &#8377;  <?php echo $row->offer_price?$row->offer_price:'';?>
                </div>
                <div class="ratting float-right">
                  <div class="product-star">
                    <i class="icon-star active"></i>
                    <i class="icon-star active"></i>
                    <i class="icon-star active"></i>
                    <i class="icon-star active"></i>
                    <i class="icon-star active"></i>
                    <span>(01 Customer Review)</span>
                  </div>  
                </div>
              </div>
          
              <div class="product-stock">
               <label>Product code:</label> <?php  echo $row->sku?$row->sku:''; ?>  &nbsp;&nbsp;
              <label>Availability: </label> <span <?php  if(isset($row->inventory)&&($row->inventory<1)) { echo "style='color: red'";}else{ echo "style='color: green'";} ?>> <?php  if(isset($row->inventory)&&($row->inventory>0)) {echo "In Stock";} else{ echo "Out of stock";} ?></span>
											</div>
              <!-- Short Description -->
              <div class="short-desc">
                <h5 class="sub-title">Quick Overview</h5>
                <p><?php  echo strlen($row->full_description)>150?substr($row->full_description,0,strpos($row->full_description, ' ', 150)):$row->full_description."<br>";  ?> ...</p>
              </div>  
              
              <div class="attributes">
                  <div class="inner_validations"></div>
              <?php  foreach ($productattributes as $attributes) { 
                            if($attributes->visible_on_detail_page==1) {                                         
               echo "<div class='single_atr'> <lable>". $attributes->attribute_type ."</lable>";
              $attrinutenames = explode(",",$attributes->name);
              $attributevalues = explode(",",$attributes->attribute_id);
                            }
              ?>
              
   
              
                  <select style="<?php if($attributes->visible_on_detail_page==0) { echo 'visibility: hidden;float: right;';}?>" name="<?php echo $attributes->attribute_type; ?>" id="<?php echo strtolower($attributes->attribute_type); ?>" class="target <?php echo $attributes->attribute_type;?>" atr="<?php echo $attributes->attribute_type."~".$attributes->attribute_type_id;?>">
                      <?php if($attributes->visible_on_detail_page==1) {  
                          if(isset($attributevalues) && count($attributevalues)>1) {?>
                      <option value="">Select <?php echo ucfirst($attributes->attribute_type); ?></option> 
                          <?php }
                          }?>
                 <?php foreach ($attrinutenames as $k1 => $name) { ?>
                   <?php foreach ($attributevalues as $k2 => $attribute_id) {  if($k1==$k2) {?>
                                
                                  <option value="<?php echo $attribute_id; ?>"><?php echo ucfirst($name); ?></option>  
                   <?php } 
                             }
                                 } ?>
                 
             </select>
                                                                            
              </div><!-- single_atr ends-->
                                             <?php  }?>
               <!--custom code for Qty -->
             <div class="attr-product" style="padding-bottom: 10px;">
<label style="float: left;width: 10%;">Qty</label>
													<div class="info-qty-custom">
                                                                                                            
                                                                        <button type="button" class="less_qty" position="<?php echo $i;?>">
									<i class="fa fa-minus"></i>
									</button>
													
                                                                                                            <input type="text" readonly="readonly" id="qty[<?php echo $i;?>]" class="input-number qty<?php echo $row->product_id;?>" style="text-align:right;width:45px" value="<?php echo (@$cart_session[$row->product_id])?$cart_session[$row->product_id]:'1';?>" max="5" onkeypress="return numberOnly(event)">
                                                                         
                                                                       <button type="button" class="add_qty" position="<?php echo $i;?>">
									<i class="fa fa-plus"></i>
									</button>
                                                                                                                
														
													
                                                                                                         
												</div>
                                                                                            </div>
              <!--custom code for Qty ends-->
            </div><!-- attributes ends // single att in php code some intelisence not works-->
            
             
             
              <!-- Product Size -->            
              <!--<div class="product-size">
                <h5 class="sub-title">Select Size</h5>
                <span>S</span>
                <span class="active">M</span>
                <span>L</span>
                <span>XL</span>
              </div> -->
              
              <!-- Quantity Cart -->
              <?php  if(isset($row->inventory)&&($row->inventory>0)) { ?>
              <div class="quantity-cart">
                <button type="button" class="btn btn-common add_to_cart" product_id="<?php echo $row->product_id;?>"><i class="icon-basket-loaded-loaded"></i> add to cart</button>
              </div>
              <?php } ?>
              <!-- Usefull Link -->
              <ul class="usefull-link">
        
                <!--<li><a href="#"><i class="icon-heart"></i> Wishlist</a></li> -->
         
              </ul>
              <!-- Share -->
              <div class="share-icons pull-right">
                <span>share :</span>
                <!--<a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
                <a href="#"><i class="fa fa-pinterest"></i></a>-->
                
                <a target="_blank" href="http://www.twitter.com/share?url=<?php echo base_url() ?>category/detail/<?php echo $row->product_id; ?>&hashtags=<?php echo $row->name?$row->name:''; ?>"><i class="fa fa-twitter"></i></a>

              <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo base_url() ?>category/detail/<?php echo $row->product_id; ?>" target="_blank">
  <i class="fa fa-facebook"></i>
</a>
                <a href="whatsapp://send?text=<?php echo base_url() ?>category/detail/<?php echo $row->product_id; ?>" data-action="share/whatsapp/share"><i class="fa fa-whatsapp"></i></a>
              </div>
              
            </div>
          </div>      
        </div>
      </div>
    </section>
<?php } ?>
    <!-- Single-prouduct Section End -->

    <!-- Single-prouduct-tab Start -->
    <div class="single-pro-tab section">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-xs-12">
            <div class="single-pro-tab-menu">
              <!-- Nav tabs -->
              <ul class="">
                <li class="active"><a href="#description" data-toggle="tab">Description</a></li>
               <!-- <li><a href="#reviews" data-toggle="tab">Reviews</a></li>
                <li><a href="#information" data-toggle="tab">Information</a></li>
                <li><a href="#tags" data-toggle="tab">Tags</a></li> -->
              </ul>
            </div>
            <!-- Tab panes -->
            <div class="tab-content">
              <div class="tab-pane active" id="description">
                <div class="pro-tab-info pro-description">
                  <h3 class="small-title"><?php  echo $row->name?$row->name:'';  ?></h3>
                  <p><?php  echo $row->full_description?$row->full_description:''; ?></p>
                  

                  
                </div>
              </div>
              
              
              
            </div>                  
          </div>
        </div>
      </div>
    </div>
    
    <!-- Single-prouduct-tab End -->    
     <!-- New Products Section Start-->
    <section class="section">
      <div class="container">
        <h1 class="section-title">Similar Products</h1>
        <hr class="lines">
        <div class="row">
          <div class="col-md-12">
            <div id="new-products" class="owl-carousel">
                <?php
if(isset($similar_products) && count($similar_products)>0){
$i = 0;

foreach ($similar_products as $row) {
   
    
    $product_name = rawurlencode(str_replace(' ', '-', strtolower($row->name)));
    ?>
              <div class="item">
                <div class="shop-product">
                  <div class="product-box">
                    <a href="<?php echo base_url() ?>category/detail/<?php echo $row->product_id; ?>"><img src="<?php echo base_url() ?>public/uploads/<?php echo $row->image_path ? $row->image_path : 'no_image.png'; ?>"  alt="<?php echo $row->name; ?>"></a>
                    <!--<div class="cart-overlay">
                    </div>
                    
                    <div class="actions">
                      <div class="add-to-links">
                        <a href="#" class="btn-cart"><i class="icon-basket-loaded"></i></a>
                        <a href="#" class="btn-wish"><i class="icon-heart"></i></a>
                        <a  class="btn-quickview md-trigger" data-modal="modal-3"><i class="icon-eye"></i></a>
                      </div>
                    </div>-->             
                  </div>
                  <div class="product-info">
                    <h4 class="product-title"><a href="<?php echo base_url() ?>category/detail/<?php echo $row->product_id; ?>"><?php echo $row->name?$row->name:''; ?></a></h4>  
                    <div class="align-items">
                      <div class="pull-left">
                        <span class="price">Rs. <?php echo $row->offer_price; ?></span>
                      </div>
                      <div class="pull-right">
                        <div class="reviews-icon">
                          <i class="i-color fa fa-star"></i>
                          <i class="i-color fa fa-star"></i>
                          <i class="i-color fa fa-star"></i>
                          <i class="fa fa-star-o"></i>
                          <i class="fa fa-star-o"></i>
                        </div>
                      </div>
                    </div> 
                  </div>
                </div> 
              </div>
              <?php $i++;
   
    

} 
                                }?>   
            </div>
          </div>                              
        </div>
      </div>
    </section>
    <!-- New Products Section End -->
<script src="<?php echo base_url() ?>assets/frontend/jquery.zoom.js"></script> <!-- Resource jQuery -->   
    <script type="text/javascript">
  
    $('.colorbtn').click(function(){
    $('#colorid_value').val($(this).data('colorid'));
});
$(window).load(function() {
 // $('.sp-wrap').smoothproducts();
});
</script>
<script>
		$(document).ready(function(){
			$('.ex1').zoom();
			
		});
	</script>
