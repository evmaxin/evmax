 <?php $this->load->view('frontpages/slider'); ?>
  <?php   $CI = & get_instance(); ?>
    <!-- Features ,Test drive n Special offers-->
     <section id="shop-collection" class="visible-lg visible-md hidden-xs">
      <div class="container max11">
        <div class="col-md-9 col-sm-9 col-xs-12 padng">
          <div class="row col-md-12 max2" >
                 <?php 
                 
if(isset($sliderImages)) { 
    
     foreach ($sliderImages as $img) {
         if($img->slider_category_id==6){
             ?>
            <div class="col-md-3 col-sm-6 col-xs-12 max1">
              <div class="shop-product" style="border-radius: 98%;"> 
                <div class="product-box" style="border-radius: 98%;">
                  <a href="#"><img src="<?php echo base_url() ?>public/uploads/admin/sliders/<?php echo $img->name;?>"  alt=""></a>
                </div>
              </div>   
              <p class="max13"><?php echo $img->slider_text?$img->slider_text:'';?></p>          
            </div>
            
          <?php } } }  ?> 

            <div class="row col-md-12  max5 client section1">
                <?php 
if(isset($sliderImages)) { 
    
     foreach ($sliderImages as $img) {
         if($img->slider_category_id==5){ ?>
              <img src="<?php echo base_url() ?>public/uploads/admin/sliders/<?php echo $img->name;?>" class="max4">
                <?php } } }?>
                <span class="maxtst maxtst11"><a href="<?php echo base_url() ?>BecomeASeller/about" class="btn btn-common btna">Register as seller today</a></span>
            </div>
          </div>
        </div>

        <div class="col-md-3 col-sm-3 col-xs-12 max21 c9">
                    <?php 
if(isset($sliderImages)) { 
      $j=0;
  foreach ($sliderImages as $img) {
         if($img->slider_category_id==2){ ?>
            <div class="max3"><img src="<?php echo base_url() ?>public/uploads/admin/sliders/<?php echo $img->name;?>"></div>
            
            <?php $j++;} if($j==1) break; } }?>
              <?php 
if(isset($sliderImages)) { 
    $i=0;
  foreach ($sliderImages as $img) {
         if($img->slider_category_id==3){ ?>
            <div class="max3"><img src="<?php echo base_url() ?>public/uploads/admin/sliders/<?php echo $img->name;?>"></div>
            
            <?php $i++;} if($i==1) break; } }?>
              <?php 
if(isset($sliderImages)) { 
    $k=0;
  foreach ($sliderImages as $img) {
         if($img->slider_category_id==4){ ?>
            <div class="max3"><img src="<?php echo base_url() ?>public/uploads/admin/sliders/<?php echo $img->name;?>"></div>
            
          <?php $k++;} if($k==1) break; } }?>
           
            

        </div>
          <div class=" col-md-12 col-sm-9 col-xs-12 specialoffr">
            <h1 class="section-title max14">EV MAX Special Offers</h1>
            <hr class="lines">
            <div class="col-md-12">
              <div id="new-products" class="owl-carousel">
                <?php
                                 //echo count($products);
                              //echo"<pre>";  print_r($products);
foreach ($products as $row) {
  if( $row->special_offer === '1'){ 
      //echo "ok";
    
    $product_name = rawurlencode(str_replace(' ', '-', strtolower($row->name)));
    ?>
                <div class="item">
                  <div class="shop-product">
                    <div class="product-box">
                     <a href="<?php echo base_url() ?><?php echo $product_name."/"?><?php echo $row->product_id; ?>"><img src="<?php echo base_url() ?>public/uploads/<?php echo $row->image_path ? $row->image_path : 'no_image.png'; ?>"  alt="<?php echo $row->name; ?>"></a>
                  
                      <span class="sticker sale"><strong>Sale</strong></span>
                                  
                    </div>
                    <div class="product-info">
                      <h4 class="product-title"><a href="<?php echo base_url() ?><?php echo $product_name."/"?><?php echo $row->product_id; ?>"><?php echo $row->name?$CI->Common_lib->limit_text($row->name, 3):'No title to display'; ?></a></h4>  
                      <div class="align-items">
                        <div class="pull-left">
                          <span class="price">&#8377; <?php echo $row->offer_price; ?></span>
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
                  <?php } }?>
              </div>
            </div>                              
          </div>

       
              <div class="row col-md-12 max41 max51">
                <div id="client-logo" class="owl-carousel ">
                        <?php 
if(isset($sliderImages)) { 
    
     foreach ($sliderImages as $img) {
         if($img->slider_category_id==7){ ?>
                  <div class="client-logo item ">
                    <a href="#">
                      <img src="<?php echo base_url() ?>public/uploads/admin/sliders/<?php echo $img->name;?>" alt="<?php echo $img->name;?>" alt="" class="logosimg" />
                    </a>
                  </div>
               <?php }}} ?>     
                </div>
              </div>


         
      </div>
    </section>


    
   
    <!-- Shop Collection Section End -->

<!-- mobile features,test drive, clients-->
    <section class="visible-xs hidden-lg">
        <div class="row col-md-12  max51 client section1">
         <?php 
if(isset($sliderImages)) { 
    
     foreach ($sliderImages as $img) {
         if($img->slider_category_id==5){ ?>
              <img src="<?php echo base_url() ?>public/uploads/admin/sliders/<?php echo $img->name;?>" class="">
                <?php } } }?>
            <span class="maxtst maxtst11"><a href="#" class="btn btn-common btna">Test Drive</a></span>
        </div>
        
        
        <div class="col-xs-12 padng">
     
              <div class="col-xs-6 ev8">
              
                           <?php 
                          
if(isset($sliderImages)) { 
    $bjp=1;
     foreach ($sliderImages as $img) {
         if($img->slider_category_id==6){
            // echo $bjp;
            if( $bjp % 2 == 0){
              ?>
              <div class="col-xs-2 ev9">
                <div class="shop-product" style="border-radius: 98%;"> 
                  <div class="product-box" style="border-radius: 98%;">
                    <a href="#"><img src="<?php echo base_url() ?>public/uploads/admin/sliders/<?php echo $img->name;?>"  alt=""></a>
                  </div>
                </div>   
                <p class="ev10 <?php echo $bjp;?>"><?php echo $img->slider_text?$img->slider_text:'';?></p>          
              </div>
         <?php }
          $bjp++;} } }?>
              

              
          </div>
   <div class="col-xs-6 ev8">
              
                           <?php 
                          
if(isset($sliderImages)) { 
    $bjp=1;
     foreach ($sliderImages as $img) {
         if($img->slider_category_id==6){
            // echo $bjp;
            if( $bjp % 2 == 1){
              ?>
              <div class="col-xs-2 ev9">
                <div class="shop-product" style="border-radius: 98%;"> 
                  <div class="product-box" style="border-radius: 98%;">
                    <a href="#"><img src="<?php echo base_url() ?>public/uploads/admin/sliders/<?php echo $img->name;?>"  alt=""></a>
                  </div>
                </div>   
                <p class="ev10 <?php echo $bjp;?>"><?php echo $img->slider_text?$img->slider_text:'';?></p>          
              </div>
         <?php }
          $bjp++;} } }?>
              

              
          </div>
          <div class="col-xs-12 ev11">
              <div class="col-xs-3 brandslogo1">
                                         <?php 
if(isset($sliderImages)) { 
    
     foreach ($sliderImages as $img) {
         if($img->slider_category_id==2){ ?>
              <img src="<?php echo base_url() ?>public/uploads/admin/sliders/<?php echo $img->name;?>">
              <?php } } }?>
              </div>
              <div class="col-xs-3 brandslogo2">
                                         <?php 
if(isset($sliderImages)) { 
    
     foreach ($sliderImages as $img) {
         if($img->slider_category_id==3){ ?>
              <img src="<?php echo base_url() ?>public/uploads/admin/sliders/<?php echo $img->name;?>">
              <?php } } }?>
              </div>
              <div class="col-xs-3 brandslogo3">
                                         <?php 
if(isset($sliderImages)) { 
    
     foreach ($sliderImages as $img) {
         if($img->slider_category_id==4){ ?>
              <img src="<?php echo base_url() ?>public/uploads/admin/sliders/<?php echo $img->name;?>">
              <?php } } }?>
              </div>
            </div>
           </div>
<?php  //"<pre>";  print_r($products); ?>
           <div class=" col-md-12 col-sm-9 col-xs-12 specialoffr">
              <h1 class="section-title max14">EV MAX Special Offers</h1>
              <hr class="lines">
              <div class="col-xs-6 ev8">
                  <?php
                                 //echo count($products);
                             
foreach ($products as $row) {
  if($row->special_offer === '1'){ 
    
    $product_name = rawurlencode(str_replace(' ', '-', strtolower($row->name)));
    ?>
                <div class="col-xs-3 ev12">
                  <div class="shop-product" > 
                    <div class="product-box">
                      <a href="<?php echo base_url() ?><?php echo $product_name."/"?><?php echo $row->product_id; ?>"><img src="<?php echo base_url() ?>public/uploads/<?php echo $row->image_path ? $row->image_path : 'no_image.png'; ?>"  alt="<?php echo $row->name; ?>"></a>
                    </div>
                    <div class="product-info">
                          <h4 class="product-title"><a href="<?php echo base_url() ?><?php echo $product_name."/"?><?php echo $row->product_id; ?>"><?php echo $row->name?$CI->Common_lib->limit_text($row->name, 3):'No title to display'; ?></a></h4>  
                          <div class="align-items">
                            <div class="pull-left">
                              <span class="price">&#8377; <?php echo $row->offer_price; ?></span>
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
                
              <?php } } ?>      
              </div>

                                     
           </div>

           <div class="col-xs-12 padng ma11">
            <div class=" "  >
                <div id="clients-logo" class="owl-carousel"  >
                      
                <?php 
if(isset($sliderImages)) { 
    
     foreach ($sliderImages as $img) {
         if($img->slider_category_id==7){ // clients ?>
                  <div class="col-xs-12 max123 clients-logo  item">
                    <div class="shop-product shop1"> 
                      <div class="product-box">
                        <a href="#"><img src="<?php echo base_url() ?>public/uploads/admin/sliders/<?php echo $img->name;?>" alt="<?php echo $img->name;?>" class="logosimg01" /></a>
                      </div>
                    </div>   
                  </div>

               
<?php }}} ?>

                  
                  
                </div>
            </div>
          </div>
        </div>

    </section>
    <section id="shop-collections" class="hidden-lg visible-xs">
       <div class="container ">

             <ul class="nav nav-tabs">
                   <?php   if(isset($categories) && count($categories)>0){ 
                       $c=0;
foreach ($categories as $cat) {
    $c++;
              ?>
              <li class="<?php if($c == 0) { echo 'active'; }?> show"><a data-target="#menu<?php echo $cat->category_id; ?>" data-toggle="tab" href="#" class="evmax01 aa1 aaa2"><?php echo $cat->category_name; ?></a></li>
                   <?php } } ?>
             
            </ul>
           
           <?php   if(isset($products) && count($products)>0){ 

              ?>
           <div class="tab-content" id="tabmainpage">
              <div id="menu1" class="tab-pane fade active in">
                <div class="row">
                    <div id="Bicycles1" class="tabs-content-right owl-carousel">
                        
                         <?php
                                 // echo count($products);
foreach ($products as $row) {
//$i = 0;
  if($row->category_id==1){ 
    
    $product_name = rawurlencode(str_replace(' ', '-', strtolower($row->name)));
    ?>
                      <div class="item">
                        <div class="shop-product prods1">
                          <div class="product-box">
                            <a href="<?php echo base_url() ?><?php echo $product_name."/"?><?php echo $row->product_id; ?>"><img src="<?php echo base_url() ?>public/uploads/<?php echo $row->image_path ? $row->image_path : 'no_image.png'; ?>"  alt="<?php echo $row->name; ?>"></a>
                            
                                        
                          </div>
                          <div class="product-info">
                            <h4 class="product-title"><a href="<?php echo base_url() ?><?php echo $product_name."/"?><?php echo $row->product_id; ?>"><?php echo $row->name?$CI->Common_lib->limit_text($row->name, 3):'No title to display'; ?></a></h4>  
                            <div class="align-items">
                              <div class="pull-left">
                                <span class="price">&#8377; <?php echo $row->offer_price; ?></span>
                              </div>
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
											   <a href="<?php echo base_url();?><?php echo $row->name;?>/<?php echo $row->product_id;?>" class="btn btn-default ProductDBut">
										  Product Details </a>
											  </td>
										  </tr>
										   
									  </table>
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
                
                
					
		<?php  } }?>			  
					  </div>
                </div>
              </div>

              <div id="menu2" class="tab-pane fade">
                <div class="row">
                    <div id="Bikes1" class="tabs-content-right owl-carousel">
                        
                         <?php
                                 // echo count($products);
foreach ($products as $row) {
//$i = 0;
  if($row->category_id==2){ 
    
    $product_name = rawurlencode(str_replace(' ', '-', strtolower($row->name)));
    ?>
                      <div class="item">
                        <div class="shop-product prods1">
                          <div class="product-box">
                            <a href="<?php echo base_url() ?><?php echo $product_name."/"?><?php echo $row->product_id; ?>"><img src="<?php echo base_url() ?>public/uploads/<?php echo $row->image_path ? $row->image_path : 'no_image.png'; ?>"  alt="<?php echo $row->name; ?>"></a>
                          
                                        
                          </div>
                          <div class="product-info">
                            <h4 class="product-title"><a href="<?php echo base_url() ?><?php echo $product_name."/"?><?php echo $row->product_id; ?>"><?php echo $row->name?$CI->Common_lib->limit_text($row->name, 3):'No title to display'; ?></a></h4>  
                            <div class="align-items">
                              <div class="pull-left">
                                <span class="price">&#8377; <?php echo $row->offer_price; ?></span>
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
                
                
					
		<?php  } }?>	
                </div>
                </div>
              </div>

              <div id="menu3" class="tab-pane fade ">
                <div class="row">
                    <div id="Autos1" class="tabs-content-right owl-carousel">
                           <?php
                                 // echo count($products);
foreach ($products as $row) {
//$i = 0;
  if($row->category_id==3){ 
    
    $product_name = rawurlencode(str_replace(' ', '-', strtolower($row->name)));
    ?>
                      <div class="item">
                        <div class="shop-product prods1">
                          <div class="product-box">
                            <a href="<?php echo base_url() ?><?php echo $product_name."/"?><?php echo $row->product_id; ?>"><img src="<?php echo base_url() ?>public/uploads/<?php echo $row->image_path ? $row->image_path : 'no_image.png'; ?>"  alt="<?php echo $row->name; ?>"></a>
                           
                                        
                          </div>
                          <div class="product-info">
                            <h4 class="product-title"><a href="<?php echo base_url() ?><?php echo $product_name."/"?><?php echo $row->product_id; ?>"><?php echo $row->name?$CI->Common_lib->limit_text($row->name, 3):'No title to display'; ?></a></h4>  
                            <div class="align-items">
                              <div class="pull-left">
                                <span class="price">&#8377; <?php echo $row->offer_price; ?></span>
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
                
                
					
		<?php  } }?>	
                
					</div>
                </div>
              </div>

              <div id="menu4" class="tab-pane fade ">
                <div class="row">
                    <div id="Cars1"  class="tabs-content-right owl-carousel">
                    <?php
                                 // echo count($products);
foreach ($products as $row) {
//$i = 0;
  if($row->category_id==4){ 
    
    $product_name = rawurlencode(str_replace(' ', '-', strtolower($row->name)));
    ?>
                      <div class="item">
                        <div class="shop-product prods1">
                          <div class="product-box">
                            <a href="<?php echo base_url() ?><?php echo $product_name."/"?><?php echo $row->product_id; ?>"><img src="<?php echo base_url() ?>public/uploads/<?php echo $row->image_path ? $row->image_path : 'no_image.png'; ?>"  alt="<?php echo $row->name; ?>"></a>
                            
                                        
                          </div>
                          <div class="product-info">
                            <h4 class="product-title"><a href="<?php echo base_url() ?><?php echo $product_name."/"?><?php echo $row->product_id; ?>"><?php echo $row->name?$CI->Common_lib->limit_text($row->name, 3):'No title to display'; ?></a></h4>  
                            <div class="align-items">
                              <div class="pull-left">
                                <span class="price">&#8377; <?php echo $row->offer_price; ?></span>
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
                
                
					
		<?php  } }?>	
					     
					  
					  </div>
                </div>
              </div>

              <div id="menu5" class="tab-pane fade">
                <div class="row">
                    <div id="accosories1" class="tabs-content-right owl-carousel">
                               <?php
                                 // echo count($products);
foreach ($products as $row) {
//$i = 0;
  if($row->category_id==5){ 
    
    $product_name = rawurlencode(str_replace(' ', '-', strtolower($row->name)));
    ?>
                      <div class="item">
                        <div class="shop-product prods1">
                          <div class="product-box">
                            <a href="<?php echo base_url() ?><?php echo $product_name."/"?><?php echo $row->product_id; ?>"><img src="<?php echo base_url() ?>public/uploads/<?php echo $row->image_path ? $row->image_path : 'no_image.png'; ?>"  alt="<?php echo $row->name; ?>"></a>
                            
                                        
                          </div>
                          <div class="product-info">
                            <h4 class="product-title"><a href="<?php echo base_url() ?><?php echo $product_name."/"?><?php echo $row->product_id; ?>"><?php echo $row->name?$CI->Common_lib->limit_text($row->name, 3):'No title to display'; ?></a></h4>  
                            <div class="align-items">
                              <div class="pull-left">
                                <span class="price">&#8377; <?php echo $row->offer_price; ?></span>
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
                
                
					
		<?php  } }?>	
                
					     </div>
                </div>
              </div>
            </div>
           <?php } ?>
       
     </div> 
    </section>

  
    <!-- Shop Collection Section End -->

    <!-- Shop Collection Section Start -->
    <section id="shop-collections" class="visible-lg visible-md hidden-xs">
      <div class="container">

             <ul class="nav nav-tabs ">
                                <?php   if(isset($categories) && count($categories)>0){ 
                       $cd=0;
foreach ($categories as $cat) {
    $cd++;
    
              ?>
              <li class="<?php if($cd === 1) { echo 'active'; }?> show"><a data-target="#menu1<?php echo $cat->category_id; ?>" data-toggle="tab" href="#" class="evmax01"><?php echo $cat->category_name; ?></a></li>
                   <?php } } ?>
              </ul>
          
          <?php   
         // if(isset($categories) && count($categories)>0){ 
                       $d=0;
//foreach ($categories as $cat) {

        if(isset($products) && count($products)>0){
                $d++;
              //foreach ($products as $row) {
              ?>
  <div class="tab-content" id="tabmainpage">
              <div id="menu11" class="tab-pane fade active in">
                <div class="row">
                    <div id="Bicycles" class="tabs-content-right owl-carousel">
                        
                        <?php
                                 // echo count($products);
foreach ($products as $row) {
//$i = 0;
  if($row->category_id==1){ 
    
    $product_name = rawurlencode(str_replace(' ', '-', strtolower($row->name)));
    ?>
                      <div class="item widcol1">
                        <div class="shop-product">
                          <div class="product-box">
                            <a href="<?php echo base_url() ?><?php echo $product_name."/"?><?php echo $row->product_id; ?>"><img src="<?php echo base_url() ?>public/uploads/<?php echo $row->image_path ? $row->image_path : 'no_image.png'; ?>"  alt="<?php echo $row->name; ?>"></a>
                            
                                      
                          </div>
                          <div class="product-info">
                            <h4 class="product-title"><a href="<?php echo base_url() ?><?php echo $product_name."/"?><?php echo $row->product_id; ?>"><?php echo $row->name?$CI->Common_lib->limit_text($row->name, 3):'No title to display'; ?></a></h4>  
                            <div class="align-items">
                              <div class="pull-left">
                                <span class="price">&#8377; <?php echo $row->offer_price; ?></span>
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
											   <a href="<?php echo base_url();?><?php echo $row->name;?>/<?php echo $row->product_id;?>" class="btn btn-default ProductDBut">
										  Product Details </a>
											  </td>
										  </tr>
										   
									  </table>
                            </div>
                        </div> 
                      </div>
                
          		 <?php  } }?>			  
                
					
					  
					  </div>
                </div>
              </div>

              <div id="menu12" class="tab-pane fade">
                <div class="row">
                    <div id="Bikes" class="tabs-content-right owl-carousel">
                     <?php
                                 // echo count($products);
foreach ($products as $row) {
//$i = 0;
  if($row->category_id==2){ 
    
    $product_name = rawurlencode(str_replace(' ', '-', strtolower($row->name)));
    ?>
                      <div class="item">
                        <div class="shop-product">
                          <div class="product-box">
                              <a href="<?php echo base_url() ?><?php echo $product_name."/"?><?php echo $row->product_id; ?>"><img class="img-responsive" src="<?php echo base_url() ?>public/uploads/<?php echo $row->image_path ? $row->image_path : 'no_image.png'; ?>"  alt="<?php echo $row->name; ?>"></a>
                            
                                      
                          </div>
                          <div class="product-info">
                            <h4 class="product-title"><a href="<?php echo base_url() ?><?php echo $product_name."/"?><?php echo $row->product_id; ?>"><?php echo $row->name?$CI->Common_lib->limit_text($row->name, 3):'No title to display'; ?></a></h4>  
                            <div class="align-items">
                              <div class="pull-left">
                                <span class="price">&#8377; <?php echo $row->offer_price; ?></span>
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
                
          		 <?php  } }?>	
                </div>
                </div>
              </div>

              <div id="menu13" class="tab-pane fade ">
                <div class="row">
                    <div id="Autos" class="tabs-content-right owl-carousel">
                   <?php
                                 // echo count($products);
foreach ($products as $row) {
//$i = 0;
  if($row->category_id==3){ 
    
    $product_name = rawurlencode(str_replace(' ', '-', strtolower($row->name)));
    ?>
                      <div class="item">
                        <div class="shop-product">
                          <div class="product-box">
                            <a href="<?php echo base_url() ?><?php echo $product_name."/"?><?php echo $row->product_id; ?>"><img src="<?php echo base_url() ?>public/uploads/<?php echo $row->image_path ? $row->image_path : 'no_image.png'; ?>"  alt="<?php echo $row->name; ?>"></a>
                            
                                      
                          </div>
                          <div class="product-info">
                            <h4 class="product-title"><a href="<?php echo base_url() ?><?php echo $product_name."/"?><?php echo $row->product_id; ?>"><?php echo $row->name?$CI->Common_lib->limit_text($row->name, 3):'No title to display'; ?></a></h4>  
                            <div class="align-items">
                              <div class="pull-left">
                                <span class="price">&#8377; <?php echo $row->offer_price; ?></span>
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
                
          		 <?php  } }?>	
                
					</div>
                </div>
              </div>

              <div id="menu14" class="tab-pane fade ">
                <div class="row">
                    <div id="Cars"  class="tabs-content-right owl-carousel">
                         <?php
                                 // echo count($products);
foreach ($products as $row) {
//$i = 0;
  if($row->category_id==4){ 
    
    $product_name = rawurlencode(str_replace(' ', '-', strtolower($row->name)));
    ?>
                      <div class="item">
                        <div class="shop-product">
                          <div class="product-box">
                            <a href="<?php echo base_url() ?><?php echo $product_name."/"?><?php echo $row->product_id; ?>"><img src="<?php echo base_url() ?>public/uploads/<?php echo $row->image_path ? $row->image_path : 'no_image.png'; ?>"  alt="<?php echo $row->name; ?>"></a>
                            
                                      
                          </div>
                          <div class="product-info">
                            <h4 class="product-title"><a href="<?php echo base_url() ?><?php echo $product_name."/"?><?php echo $row->product_id; ?>"><?php echo $row->name?$CI->Common_lib->limit_text($row->name, 3):'No title to display'; ?></a></h4>  
                            <div class="align-items">
                              <div class="pull-left">
                                <span class="price">&#8377; <?php echo $row->offer_price; ?></span>
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
                
          		 <?php  } }?>	
					     
					  
					  </div>
                </div>
              </div>

              <div id="menu15" class="tab-pane fade">
                <div class="row">
                    <div id="accosories" class="tabs-content-right owl-carousel">
                         <?php
                                 // echo count($products);
foreach ($products as $row) {
//$i = 0;
  if($row->category_id==5){ 
    
    $product_name = rawurlencode(str_replace(' ', '-', strtolower($row->name)));
    ?>
                      <div class="item">
                        <div class="shop-product">
                          <div class="product-box">
                            <a href="<?php echo base_url() ?><?php echo $product_name."/"?><?php echo $row->product_id; ?>"><img src="<?php echo base_url() ?>public/uploads/<?php echo $row->image_path ? $row->image_path : 'no_image.png'; ?>"  alt="<?php echo $row->name; ?>"></a>
                            
                                      
                          </div>
                          <div class="product-info">
                            <h4 class="product-title"><a href="<?php echo base_url() ?><?php echo $product_name."/"?><?php echo $row->product_id; ?>"><?php echo $row->name?$CI->Common_lib->limit_text($row->name, 3):'No title to display'; ?></a></h4>  
                            <div class="align-items">
                              <div class="pull-left">
                                <span class="price">&#8377; <?php echo $row->offer_price; ?></span>
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
                
          		 <?php  } }?>	
                
					     </div>
                </div>
              </div>
            </div>
          <?php } ?>
      </div>
    </section>
    			<script>
			 
			 
			 $(document).ready(function(){
  
$(".vehicles,.navbr1").mouseover(function(){
 //$(".vehicles").on( "load", function() {
     
			 var owl = $(".vehicleItem");
      owl.owlCarousel({
          navigation: true,
          pagination: false,
      autoPlay: true,
          items:5,
          itemsTablet:3,
          stagePadding:90,
          smartSpeed:400,
          itemsDesktop : [1199,5],
          itemsDesktopSmall : [980,3],
          itemsTablet: [768,3],
          itemsTablet: [767,2],
          itemsTabletSmall: [480,2],
          itemsMobile : [479,1],
      });
	 var productsItem = $('.vehicleItem');
      productsItem.find('.owl-prev').html('<i class="fa fa-angle-left"></i>');
      productsItem.find('.owl-next').html('<i class="fa fa-angle-right"></i>');
   
   });
	
});
			</script>