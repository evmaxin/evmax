    <!-- Main Slider Section -->
   <?php  $this->load->view('frontpages/slider'); ?>
    <!-- Main Slider Section End-->
<!-- Feature ctg Section Start -->
    <section class="feature-categories section">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="feature-item-content">
              <img src="<?php echo base_url() ?>assets/frontend/img/feature/img1.jpg"  alt="">
              <div class="feature-content">
                <div class="banner-text">
                  <h4>Men Sale</h4>
                  <p>New Collection</p>
                </div>                
                <a href="<?php echo base_url() ?>category/men/1" class="btn btn-common">Shop Now</a>
              </div>
            </div>
          </div>         
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="feature-item-content">
              <img src="<?php echo base_url() ?>assets/frontend/img/feature/img3.jpg"  alt="">
              <div class="feature-content">
                <div class="banner-text">
                  <h4>Women's</h4>
                  <p>Upt <span>40%</span> OFF</p>
                </div>                 
                <a href="<?php echo base_url() ?>category/women/2" class="btn btn-common">Shop Now</a>
              </div>
            </div>
          </div>
           <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="feature-item-content mb-30">
              <img src="<?php echo base_url() ?>assets/frontend/img/feature/img2.jpg"  alt="">
              <div class="feature-content">
                <div class="banner-text accessories">
                  <h4>Kid's</h4>
                  <p>View Collection</p>
                </div>
                <a href="<?php echo base_url() ?>category/women/4" class="btn btn-common">Shop Now</a>
              </div>
            </div>
            <div class="feature-item-content">
              <img src="<?php echo base_url() ?>assets/frontend/img/feature/img4.jpg"  alt="">
              <div class="feature-content">
                <div class="banner-text accessories">
                  <h4>Electronic's</h4>
                  <p>View Collection</p>
                </div>
                <a href="<?php echo base_url() ?>category/men/13" class="btn btn-common">Shop Now</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Feature ctg Section End -->

    <!-- Shop Collection Section Start -->
    <section id="shop-collection">
      <div class="container">
        <h1 class="section-title">New Arrivals</h1>
        <hr class="lines">
        <div class="row">
            <?php
if(isset($products) && count($products)>0){
$i = 0;
foreach ($products as $row) {
    $imageArray = explode(',', $row->image_path);
    $product_name = rawurlencode(str_replace(' ', '-', strtolower($row->name)));
    ?>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="shop-product">
              <div class="product-box">
                <a href="<?php echo base_url() ?>category/detail/<?php echo $row->product_id; ?>"><img src="<?php echo base_url() ?>public/uploads/<?php echo $imageArray[0] ? $imageArray[0] : 'no_image.png'; ?>"  alt="<?php echo $row->name; ?>"></a>
                
                <span class="sticker new"><strong>NEW</strong></span>
          
              </div>
                <?php   $CI = & get_instance(); ?>
              <div class="product-info">
                <h4 class="product-title"><a href="<?php echo base_url() ?>category/detail/<?php echo $row->product_id; ?>"><?php echo $row->name?$CI->Common_lib->limit_text($row->name, 3):'No title to display'; ?></a></h4>  
                <div class="align-items">
                  <div class="pull-left">
                    <span class="price">Rs. <?php echo $row->actual_price; ?> </span>
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
    </section>
    <!-- Shop Collection Section End -->

    <!--  Discount Product Start  -->
    <section class="discount-product-area">
      <div class="container">
        <div class="row">
          <div class="discount-text">
            <p>Best Deals of The Week</p>
            <h3>Up to 60% Discount on Winter Collection!</h3>
            <a href="#" class="btn btn-common btn-large">View Deals</a>
          </div>
        </div>
      </div>
    </section>
    <!--  Discount Product End  -->

    <!-- New Products Section Start-->
    <section class="section">
      <div class="container">
        <h1 class="section-title">Featured Products</h1>
        <hr class="lines">
        <div class="row">
          <div class="col-md-12">
            <div id="new-products" class="owl-carousel">
              <div class="item">
                <div class="shop-product">
                  <div class="product-box">
                    <a href="#"><img src="<?php echo base_url() ?>assets/frontend/img/feature-products/img-01.jpg"  alt=""></a>
                    <div class="cart-overlay">
                    </div>
                     <span class="sticker new"><strong>NEW</strong></span>
                    <div class="actions">
                      <div class="add-to-links">
                        <a href="#" class="btn-cart"><i class="icon-basket-loaded"></i></a>
                        <a href="#" class="btn-wish"><i class="icon-heart"></i></a>
                        <a  class="btn-quickview md-trigger" data-modal="modal-3"><i class="icon-eye"></i></a>
                      </div>
                    </div>             
                  </div>
                  <div class="product-info">
                    <h4 class="product-title"><a href="product-details.html">Nisi Ut Aliqu</a></h4>  
                    <div class="align-items">
                      <div class="pull-left">
                        <span class="price">$49.00</span>
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
              <div class="item">
                <div class="shop-product">
                  <div class="product-box">
                    <a href="#"><img src="<?php echo base_url() ?>assets/frontend/img/feature-products/img-02.jpg"  alt=""></a>
                    <div class="cart-overlay">
                    </div>                   
                    <div class="actions">
                      <div class="add-to-links">
                        <a href="#" class="btn-cart"><i class="icon-basket-loaded"></i></a>
                        <a href="#" class="btn-wish"><i class="icon-heart"></i></a>
                        <a  class="btn-quickview md-trigger" data-modal="modal-3"><i class="icon-eye"></i></a>
                      </div>
                    </div>             
                  </div>
                  <div class="product-info">
                    <h4 class="product-title"><a href="product-details.html">Eius Modi Tempo</a></h4>  
                    <div class="align-items">
                      <div class="pull-left">
                        <span class="price">$59.00 <del>$79.00</del></span>
                      </div>
                      <div class="pull-right">
                        <div class="reviews-icon">
                          <i class="i-color fa fa-star"></i>
                          <i class="i-color fa fa-star"></i>
                          <i class="i-color fa fa-star"></i>
                          <i class="i-color fa fa-star"></i>
                          <i class="fa fa-star-o"></i>
                        </div>
                      </div>
                    </div> 
                  </div>
                </div> 
              </div>
              <div class="item">
                <div class="shop-product">
                  <div class="product-box">
                    <a href="#"><img src="<?php echo base_url() ?>assets/frontend/img/feature-products/img-03.jpg"  alt=""></a>
                    <div class="cart-overlay">
                    </div>                    
                    <span class="sticker sale"><strong>Sale</strong></span>
                    <div class="actions">
                  <div class="add-to-links">
                    <a href="#" class="btn-cart"><i class="icon-basket-loaded"></i></a>
                    <a href="#" class="btn-wish"><i class="icon-heart"></i></a>
                    <a  class="btn-quickview md-trigger" data-modal="modal-3"><i class="icon-eye"></i></a>
                  </div>
                </div>             
                  </div>
                  <div class="product-info">
                    <h4 class="product-title"><a href="product-details.html">Quia Voluptas Sit</a></h4>  
                    <div class="align-items">
                      <div class="pull-left">
                        <span class="price">$68.00</span>
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
              <div class="item">
                <div class="shop-product">
                  <div class="product-box">
                    <a href="#"><img src="<?php echo base_url() ?>assets/frontend/img/feature-products/img-04.jpg"  alt=""></a>
                    <div class="cart-overlay">
                    </div>
                    <div class="actions">
                      <div class="add-to-links">
                        <a href="#" class="btn-cart"><i class="icon-basket-loaded"></i></a>
                        <a href="#" class="btn-wish"><i class="icon-heart"></i></a>
                        <a  class="btn-quickview md-trigger" data-modal="modal-3"><i class="icon-eye"></i></a>
                      </div>
                    </div>             
                  </div>
                  <div class="product-info">
                    <h4 class="product-title"><a href="product-details.html">An Tium Lores Eos</a></h4>  
                    <div class="align-items">
                      <div class="pull-left">
                        <span class="price">$59.00 <del>$69.00</del></span>
                      </div>
                      <div class="pull-right">
                        <div class="reviews-icon">
                          <i class="i-color fa fa-star"></i>
                          <i class="i-color fa fa-star"></i>
                          <i class="fa fa-star-o"></i>
                          <i class="fa fa-star-o"></i>
                          <i class="fa fa-star-o"></i>
                        </div>
                      </div>
                    </div> 
                  </div>
                </div> 
              </div>
              <div class="item">
                <div class="shop-product">
                  <div class="product-box">
                    <a href="#"><img src="<?php echo base_url() ?>assets/frontend/img/feature-products/img-05.jpg"  alt=""></a>
                    <div class="cart-overlay">
                    </div>
                    <span class="sticker discount"><strong>-40%</strong></span>
                    <div class="actions">
                      <div class="add-to-links">
                        <a href="#" class="btn-cart"><i class="icon-basket-loaded"></i></a>
                        <a href="#" class="btn-wish"><i class="icon-heart"></i></a>
                        <a  class="btn-quickview md-trigger" data-modal="modal-3"><i class="icon-eye"></i></a>
                      </div>
                    </div>             
                  </div>
                  <div class="product-info">
                    <h4 class="product-title"><a href="product-details.html">Magni Dolores Eos</a></h4>  
                    <div class="align-items">
                      <div class="pull-left">
                        <span class="price">$79.00</span>
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
              <div class="item">
                <div class="shop-product">
                  <div class="product-box">
                    <a href="#"><img src="<?php echo base_url() ?>assets/frontend/img/feature-products/img-06.jpg"  alt=""></a>
                    <div class="cart-overlay">
                    </div>
                    <div class="actions">
                      <div class="add-to-links">
                        <a href="#" class="btn-cart"><i class="icon-basket-loaded"></i></a>
                        <a href="#" class="btn-wish"><i class="icon-heart"></i></a>
                        <a  class="btn-quickview md-trigger" data-modal="modal-3"><i class="icon-eye"></i></a>
                      </div>
                    </div>             
                  </div>
                  <div class="product-info">
                    <h4 class="product-title"><a href="product-details.html">Natur Aut Odit Aut</a></h4>  
                    <div class="align-items">
                      <div class="pull-left">
                        <span class="price">$69.00</span>
                      </div>
                      <div class="pull-right">
                        <div class="reviews-icon">
                          <i class="i-color fa fa-star"></i>
                          <i class="i-color fa fa-star"></i>
                          <i class="i-color fa fa-star"></i>
                          <i class="i-color fa fa-star"></i>
                          <i class="fa fa-star-o"></i>
                        </div>
                      </div>
                    </div> 
                  </div>
                </div>  
              </div>
              <div class="item">
                <div class="shop-product">
                  <div class="product-box">
                    <a href="#"><img src="<?php echo base_url() ?>assets/frontend/img/feature-products/img-07.jpg"  alt=""></a>
                    <div class="cart-overlay">
                    </div>
                    <span class="sticker sale"><strong>Sale</strong></span>
                    <div class="actions">
                      <div class="add-to-links">
                        <a href="#" class="btn-cart"><i class="icon-basket-loaded"></i></a>
                        <a href="#" class="btn-wish"><i class="icon-heart"></i></a>
                        <a  class="btn-quickview md-trigger" data-modal="modal-3"><i class="icon-eye"></i></a>
                      </div>
                    </div>             
                  </div>
                  <div class="product-info">
                    <h4 class="product-title"><a href="product-details.html">Qui Ratione Volup</a></h4>  
                    <div class="align-items">
                      <div class="pull-left">
                        <span class="price">$56.00</span>
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
            </div>
          </div>                              
        </div>
      </div>
    </section>
    <!-- New Products Section End -->

    <!--  Content Area  Section Start -->
    <section id="content-area">
      <div class="container">
        <div class="hero-land clearfix">
          <div class="landing caption">
            <h2>All Global Brands in Single Place</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis rem, ducimus reprehenderit sed molestiae iure sapiente accusamus incidunt minima expedita velit assumenda vitae libero. Eaque nostrum magni architecto, corporis doloremque!</p>
            <p>
              <a href="category.html" class="btn btn-common">Explore</a>
            </p>
          </div>
        </div>
      </div>
    </section>
    <!--  Content Area  Section End -->

    <!-- Services Section Starts -->
    <section id="services" class="section">
      <!-- Container Starts -->
      <div class="container">
        <div class="row">          
          <!-- Start Service-->
          <div class="col-md-4 col-sm-6">
            <div class="services-box">
              <div class="services-icon">
                <i class="icon-basket-loaded"></i>
              </div>
              <div class="services-content">
                <h4><a href="#">100+ eCommerce Elements</a></h4>
                <p>
                  Lorem ipsum dolor sit amet isse potenti. Vesquam ante aliquet lacusemper elit.
                </p>
              </div>
            </div>
          </div>
          <!-- End Service-->
          <!-- Start Service-->
          <div class="col-md-4 col-sm-6">
            <div class="services-box">
              <div class="services-icon">
                <i class="icon-support"></i>
              </div>
              <div class="services-content">
                <h4><a href="#">Quick Support</a></h4>
                <p>
                  Lorem ipsum dolor sit amet isse potenti. Vesquam ante aliquet lacusemper elit.
                </p>
              </div>
            </div>
          </div>
          <!-- End Service-->
          <!-- Start Service-->
          <div class="col-md-4 col-sm-6">
            <div class="services-box">
              <div class="services-icon">
                <i class="icon-layers"></i>
              </div>
              <div class="services-content">
                <h4><a href="#">Business Pages</a></h4>
                <p>
                  Lorem ipsum dolor sit amet isse potenti. Vesquam ante aliquet lacusemper elit.
                </p>
              </div>
            </div>
          </div>
          <!-- End Service-->
          <!-- Start Service-->
          <div class="col-md-4 col-sm-6">
            <div class="services-box">
              <div class="services-icon">
                <i class="icon-rocket"></i>
              </div>
              <div class="services-content">
                <h4><a href="#">Fast and Optimized</a></h4>
                <p>
                  Lorem ipsum dolor sit amet isse potenti. Vesquam ante aliquet lacusemper elit.
                </p>
              </div>
            </div>
          </div>
          <!-- End Service-->
          <!-- Start Service-->
          <div class="col-md-4 col-sm-6">
            <div class="services-box">
              <div class="services-icon">
                <i class="icon-screen-tablet"></i>
              </div>
              <div class="services-content">
                <h4><a href="#">Fully Responsive</a></h4>
                <p>
                  Lorem ipsum dolor sit amet isse potenti. Vesquam ante aliquet lacusemper elit.
                </p>
              </div>
            </div>
          </div>
          <!-- End Service-->
          <!-- Start Service -->
          <div class="col-md-4 col-sm-6">
            <div class="services-box">
              <div class="services-icon">
                <i class="icon-screen-desktop"></i>
              </div>
              <div class="services-content">
                <h4><a href="#">Clean Design</a></h4>
                <p>
                  Lorem ipsum dolor sit amet isse potenti. Vesquam ante aliquet lacusemper elit.
                </p>
              </div>
            </div>
          </div>
          <!-- End Service-->
          <!-- Start Service-->
          <div class="col-md-4 col-sm-6">
            <div class="services-box">
              <div class="services-icon">
                <i class="icon-settings"></i>
              </div>
              <div class="services-content">
                <h4><a href="#">Completely Customizable </a></h4>
                <p>
                  Lorem ipsum dolor sit amet isse potenti. Vesquam ante aliquet lacusemper elit.
                </p>
              </div>
            </div>
          </div>
          <!-- End Service-->
          <!-- Start Service-->
          <div class="col-md-4 col-sm-6">
            <div class="services-box">
              <div class="services-icon">
                <i class="icon-refresh"></i>
              </div>
              <div class="services-content">
                <h4><a href="#">Free Future Updates</a></h4>
                <p>
                  Lorem ipsum dolor sit amet isse potenti. Vesquam ante aliquet lacusemper elit.
                </p>
              </div>
            </div>
          </div>
          <!-- End Service-->
          <!-- Start Service -->
          <div class="col-md-4 col-sm-6">
            <div class="services-box">
              <div class="services-icon">
                <i class="icon-notebook"></i>
              </div>
              <div class="services-content">
                <h4><a href="#">Full Documented </a></h4>
                <p>
                  Lorem ipsum dolor sit amet isse potenti. Vesquam ante aliquet lacusemper elit.
                </p>
              </div>
            </div>
          </div>
          <!-- End Service-->
        </div>
      </div>
      <!-- Container Ends -->
    </section>
    <!-- Services Section Ends -->

    

    


   

    <!-- Support Section Start -->
    <div class="support section">
      <div class="container">
        <div class="row">
         <div class="support-inner">
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="row-normal clearfix">
              <div class="support-info">
                <div class="info-title">
                  <i class="icon-plane"></i>
                  Free Shipping Worldwide
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="row-normal clearfix">
              <div class="support-info">
                <div class="info-title">
                  <i class="icon-earphones-alt"></i>
                  24/7 Customer Service
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="row-normal clearfix">
              <div class="support-info">
                <div class="info-title">
                  <i class="icon-heart"></i>
                  Easy Return Policy
                </div>
              </div>
            </div>
          </div>
         </div>
        </div>
      </div>
    </div>
    <!-- Support Section End -->