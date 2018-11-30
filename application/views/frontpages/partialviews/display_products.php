<?php
    $resultString ='';
    $resultString.='
           
            <div class="shop-content rowcount">'; //col-md-12 ends
    
    $i = 0;
      if (isset($products) && count($products)>0) {
          foreach ($products as $row) {
              $imageArray = explode(',', $row->image_path);
              $product_name = cleanproduct($row->name);
              
              
              
              
              
              $resultString.='<div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
                           <div class="shop-product">
							<div class="product-box">';
              $resultString.='<a href="'.base_url().$product_name."/".$row->product_id.'">';
               $resultString.='<img class="img" alt="'.$product_name.'" src='.base_url().'public/uploads/'.$imageArray[0].'></a>';
               $resultString.='<!--<div class="cart-overlay">
								</div>--> 
								
								<!--<div class="actions">
							<div class="add-to-links">
                            <a href="#" class="btn-cart"><i class="icon-basket-loaded"></i></a>
                            <a href="#" class="btn-wish"><i class="icon-heart"></i></a>
                            <a  class="btn-quickview md-trigger" data-modal="modal-3"><i class="icon-eye"></i></a>
							</div>
							</div> -->


                                <input type="hidden" id="qty['.$i.']" class="input-number qty'.$row->product_id.'" style="text-align:right;width:45px" value="'.(@$cart_session[$row->product_id]).'" onkeypress="return numberOnly(event)">
                                
                            </div>';//product-box ends

               $resultString.='<div class="product-info">
                <h4 class="product-title"><a href="'.base_url().$product_name."/".$row->product_id.'">'.$row->name.'</a></h4>
                    
                         <p class="product-title">Sold By <b>'.$row->store_name.'</b></p>
                  
				<div class="align-items">
						
							<div class="pull-left">
                            <span class="price">&#8377; '.$row->offer_price.'<del>&#8377; '.$row->actual_price.'</del></span>
							</div>
						  
							<div class="pull-right">
                           <!-- <div class="reviews-icon">
                              <i class="i-color fa fa-star"></i>
                              <i class="i-color fa fa-star"></i>
                              <i class="i-color fa fa-star"></i>
                              <i class="fa fa-star-o"></i>
                              <i class="fa fa-star-o"></i>
                            </div> -->
                          </div>
				
                </div>';

              $resultString.=' </div>   
					</div>            
                  </div>';      //product-info ends & shop-product & col-md-4
         $i++; }
      }
      $resultString.='</div>'; //shop-content ends
      
      $resultString.='<!--<div class="pagination">
          <ul class="pagination" id="ajax_pagingsearc">
             </ul>
                <div class="results-showMoreContainer">
<div class="results-showmore" id="ajax" limit_value="'.$i.'">
Show More Products (497) 
</div>
</div>
                          
            </div>-->'; //End Pagination
    //  $resultString.=''; //col-md-9 col-sm-9 col-xs-12
      echo $resultString;
      ?>
      