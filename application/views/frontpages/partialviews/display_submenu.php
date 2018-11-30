<?php //if(isset($navmenu) && count($navmenu)>0) { ?>
<div class=" col-md-12 col-sm-9 col-xs-12 navbr3 vehicles12">
               <div class="col-md-12 col-sm-9 col-xs-12 subBrand">
          
			   
			   <div  class="col-md-12  owl-carousel vehicleItem" style="display:block;">
                    <?php    foreach ($navmenu as $row) {  ?>
					
					
                  <div class="col-md-4 item widcol ">
                    <div class="widcol_subDiv" id="new-productss">
                      <div class="item">
                        <div class="shop-product12 product_image_display_box">
                          <div class="product-box">
                           <a href="<?php echo base_url();?><?php echo $row->name;?>/<?php echo $row->product_id;?>"><img src="<?php echo base_url();?>public/uploads/<?php echo $row->image_path;?>" class="productImageDisplay img-responsive"  alt=""></a>     
                          </div>
                               <p class="productTitle"><?php echo $row->name;?></p>
                               <p class="productPrice">Rs. <?php echo round($row->offer_price);?> &nbsp;&nbsp;<strike> Rs. <?php echo round($row->actual_price);?></strike> </p>
                        
                            <div class="col-md-12 product_information table-responsive">
									  
										<table class="table ">
										  
										  <tr>
											  <th> Model Name </th>
											  <td>: &nbsp;<?php echo $row->model;?> </td>
										  </tr>
										  <tr>
											  <th> Variant Name </th>
											  <td>: &nbsp;<?php echo $row->varient;?> </td>
										  </tr>
									 
										  <tr>
											  <th> Registration </th>
											  <td> : &nbsp; <?php echo ($row->need_registration==1)?'Yes':'No';?> </td>
										  </tr>
										 <tr>
											  <th> License </th>
											  <td> : &nbsp; <?php echo ($row->need_driving_license==1)?'Yes':'No';?></td>
										  </tr>
										  <tr>
											  <th> EMI</th>
											  <td> : &nbsp; </td>
										  </tr>
										  <tr>
											  <th> Special Offer</th>
											  <td> : &nbsp; </td>
										  </tr>
										  <tr>
											  <td colspan="2" align="center">
											   <a href="<?php echo base_url();?><?php echo cleanproduct($row->name);?>/<?php echo $row->product_id;?>" class="btn btn-default ProductDBut">
										  Product Details </a>
											  </td>
										  </tr>
										   
									  </table>
                            </div>
                    
                        </div> 
                      </div> 
                    </div>
                      
                  </div> 
                    <?php } ?> 
                              
				  </div>
                   <?php if(isset($navmenu[0]->category_id) && ($navmenu[0]->category_id>0)){?>
                   <a  style="float:right;color:#57b952;margin-bottom: 5px;" href="<?php echo base_url();?>Category/index/<?php echo $navmenu[0]->category_id;?>"> <b>See more from <?php echo $navmenu[0]->category_name;?></b></a>
                   <?php } ?>
				  <br style="clear:both">
                                 
				  
                  
   
			
				  


				 
                 
                                     
            </div>
    
      	</div>
<?php //} ?>