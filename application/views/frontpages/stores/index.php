<style>
    .btn-quickview{
    height: 100% !important; 
width: 100% !important;
    }
    .sticker{
        width: 80px !important; 

    }
    .tooltip
    {
        display: none !important;
    }
    .product-info {
    padding: 10px 14px 9px !important;
}
    
</style>
<!-- Header Section End -->
    
    <!-- Start Page Header -->
    <div class="page-header">
      <div class="container">
        <div class="row">
          <div class="col-md-12">            
            <div class="breadcrumb">
              <a href="#"><i class="icon-home"></i> Home</a>
              <span class="crumbs-spacer"><i class="fa fa-angle-double-right"></i></span>
              <span class="current">All Stores</span>
              <h2 class="entry-title">All Stores</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Page Header -->

    <!-- Start Content -->
    <div id="content">
      <div class="container">
        <div class="row">         
          <div class="col-sm-12">
            <!-- Product Item Start -->
            <div class="category-product-grid  row">
                <?php 
               $tmp ="assets/frontend/img/feature/img2.jpg";
            //  echo"<pre>";print_r($stores); 
                foreach($stores as $store): ?>
                         <?php //foreach($store1 as $store): 
                             if($store->slider_category_id == 7){ 
            //store banner
                             
                             ?>
              <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="shop-product">
                  <a href="<?php echo base_url() ?>store/<?php echo $store->store_slug ?>">
                      <div class="product-box" style="width:360px;height: 230px;">
                      <img  src="<?php echo base_url() ?><?php echo !empty($store->name)?("public/uploads/admin/sliders/".$store->name):$tmp ?>" alt="<?php echo $store->store_name ?>">
                    <!--<div class="cart-overlay">
                    </div>-->
                    
                    <?php if($store->featured === 1){ ?> <span class="sticker new"><strong>Featured</strong></span> <?php } ?>
                    
                    <!--<div class="actions">
                      <div class="add-to-links">                     
                        <a  class="btn-quickview md-trigger" >Simple tag line </a>
                      </div>
                    </div>-->
                  </div>
                  </a>
                  <div class="product-info">
                    <h4 class="product-title"><a href="<?php echo base_url() ?>store/<?php echo $store->store_slug ?>"><?php echo $store->store_name ?></a></h4>  
              
                  </div>
                </div>             
              </div>
                             <?php } // if ends 
                             //endforeach;//$stores end ?>
                            <?php endforeach;//$stores end ?>
                    
            </div>
            <!-- Product Item End -->
 
          </div>
        </div>
      </div>
    </div>
    <!-- End Content -->