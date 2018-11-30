<div class="page-content">
      <div class="row">
        <div class="col-md-12 padding-bottom-20">
         

          <?php if($this->session->flashdata('message')){ ?> 
              <div class="alert alert-success alert-dismissable col-md-4"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
              <?php  echo $this->session->flashdata('message');?>
          </div>
          <?php } ?>

        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="portlet box blue">
            <div class="portlet-title">
              <div class="caption"> <i class="icon-user-follow"></i>Attribute Types</div>
              <div class="tools"> <a href="javascript:;" class="collapse"> </a> </div>
            </div>
            <div class="portlet-body">
              <div class="table-toolbar"> </div>
    
             
            </div>
            
     
          </div>
        </div>
      </div>
    </div>
<!-- New one end -->
<div class="row">

<?php
$i = 0;
$cart_session = @$this->session->userdata('cart_session');
foreach($products as $row){
	
?>
   <div class="col-sm-6 col-md-3">
      <!--<div class="thumbnail">
		
			<img src="<?php echo base_url();?>assets/images/product/<?php if($row->product_photo != ''){  echo $row->product_photo; } else { echo 'no_image.png'; } ?>" alt="<?php echo $row->product_name;?>" class="img-responsive" style="height:200px">

         
      </div>-->
     
        <?php $product_name = rawurlencode(str_replace(' ', '-', strtolower($row->name))); ?>
      <a href="<?php echo base_url().$product_name."/".$row->product_id; ?>"><?php echo $row->name."<br>"; ?></a>
		  <p>&#8377;<?php echo $row->offer_price;?> </p>
         <p>
          
		  
		  	<div class="input-group" style="width:120px">
								<span class="input-group-btn">
									<button type="button" class="btn btn-danger btn-number less_qty" position="<?php echo $i;?>">
									<span class="glyphicon glyphicon-minus"></span>
									</button>
								</span>
								
									<input type="text" id="qty[<?php echo $i;?>]" class="form-control input-number qty<?php echo $row->product_id;?>" style="text-align:right;width:45px" value="<?php echo @$cart_session[$row->product_id];?>" onkeypress="return numberOnly(event)">
								
								<span class="input-group-btn">
									<button type="button" class="btn btn-success btn-number add_qty" position="<?php echo $i;?>">
									<span class="glyphicon glyphicon-plus"></span>
									</button>
								</span>
								
								<div class="col-md-1" style="float:right;margin-left:-5px">
										<button class="btn btn-primary add_to_cart" type="button" product_id="<?php echo $row->product_id;?>">Buy</button>
									</div>
									
							</div>
							
         </p>
      
   </div>
 <?php
 $i++;
}
?>
</div>