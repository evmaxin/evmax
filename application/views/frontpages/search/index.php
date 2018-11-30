
<style>
    

    /* .squaredThree */
    .squaredThree {
        position: relative;
        float:left;
      /*  margin: 10px*/
    }

    .squaredThree label {
        width: 20px;
        height: 20px;
        cursor: pointer;
        position: absolute;
        top: 0;
        left: 0;
        background: #D7B1D7;
        border-radius: 4px; 
    }

    .squaredThree label:after {
        content: '';
        width: 12px;
        height: 7px;
        position: absolute;
        top: 4px;
        left: 4px;
        border: 3px solid #fcfff4;
        border-top: none;
        border-right: none;
        background: transparent;
        opacity: 0;
        -webkit-transform: rotate(-45deg);
        transform: rotate(-45deg);
    }

    .squaredThree label:hover::after {
        opacity: 0.3;
    }

    .squaredThree input[type=checkbox] {
        visibility: hidden;
        margin: 0px 8px 0px 2px;
    }

    .squaredThree input[type=checkbox]:checked + label:after {
        opacity: 1;
    }
    /* end .squaredThree */

    .label-text {
        position: relative;
        left: 10px;
    }
    .imageres{
        width: 252.5px;
    height: 252.5px;
    }
/* -------------------------------- 

mobile filter  style

-------------------------------- */
.cd-filter {
  position: absolute;
  top: 142px;
  left: 0;
  width: 280px;
  /*height: 100%;*/
  background: #ffffff;
  box-shadow: 4px 4px 20px transparent;
  z-index: 99999999;
  /* Force Hardware Acceleration in WebKit */
  -webkit-transform: translateZ(0);
  -moz-transform: translateZ(0);
  -ms-transform: translateZ(0);
  -o-transform: translateZ(0);
  transform: translateZ(0);
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  -webkit-transform: translateX(-100%);
  -moz-transform: translateX(-100%);
  -ms-transform: translateX(-100%);
  -o-transform: translateX(-100%);
  transform: translateX(-100%);
  -webkit-transition: -webkit-transform 0.3s, box-shadow 0.3s;
  -moz-transition: -moz-transform 0.3s, box-shadow 0.3s;
  transition: transform 0.3s, box-shadow 0.3s;
}
.cd-filter::before {
  /* top colored bar */
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  height: 50px;
  width: 100%;
  background-color: #f50057;
  z-index: 2;
}
.cd-filter form {
  padding: 70px 20px;
}
.cd-filter .cd-close {
  position: absolute;
  top: 0;
  right: 0;
  height: 50px;
  line-height: 50px;
  width: 60px;
  color: #ffffff;
  font-size: 1.3rem;
  text-align: center;
  background: #f50057;
  opacity: 0;
  -webkit-transition: opacity 0.3s;
  -moz-transition: opacity 0.3s;
  transition: opacity 0.3s;
  z-index: 3;
}

.cd-filter.filter-is-visible {
  -webkit-transform: translateX(0);
  -moz-transform: translateX(0);
  -ms-transform: translateX(0);
  -o-transform: translateX(0);
  transform: translateX(0);
  box-shadow: 4px 4px 20px rgba(0, 0, 0, 0.2);
}
.cd-filter.filter-is-visible .cd-close {
  opacity: 1;
}


.cd-filter-trigger {
  position: absolute;
  top: 142px;
  left: 0;
  height: 50px;
  line-height: 50px;
  width: 60px;
  /* image replacement */
  overflow: hidden;
  text-indent: 100%;
  color: transparent;
  white-space: nowrap;
  background: transparent url("../../assets/frontend/img/cd-icon-filter.svg") no-repeat center center;
  z-index: 3;
}
/* show more*/
.more
{
color: #f50057 !important;
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
                    <span class="current">Shop Categories</span>
                    <h2 class="entry-title">Shop Categories</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Page Header -->

<!-- Product Categories Section Start -->
<div id="content" class="product-area">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-3 col-xs-12 hidden-xs">
              
            
              <div class="widget-ct widget-categories mb-30">
                    <div class="widget-s-title">
                        <h4>Categories</h4>
                    </div>
                    <ul id="accordion-category" class="product-cat term-list">
                        <?php
                        $catnames =array();
                        foreach ($products as $row) { 
                            $data = $row->category_id."=>".$row->category_name;
                                array_push($catnames,$data);
                        }
                       $catnames = array_unique($catnames);
                        foreach ($catnames as $row) {
                            $keyValue =explode("=>",$row);
                            ?>
                        <li class="<?php echo $keyValue[0]; ?> term-item"> <input type="checkbox" class="filter cat" id="<?php echo $keyValue[0]; ?>" value="<?php echo $keyValue[0]; ?>" name="category_names" > <?php echo $keyValue[1]; ?></li>
                        <?php                   }
         ?>
                        
                    </ul>
                </div>
              
                  <div class="widget-ct widget-categories mb-30 sidebar__inner sidebar">

                    <?php
                    if (isset($attributes)) {

                        foreach ($attributes as $attribute) {
                            //  print_r($attribute);
                            ?>
                            <div class="widget-s-title">
                                <h4><?php echo $attribute->attribute_type; ?> </h4>
                            </div>
                            <?php $onepieces = explode(",", $attribute->name); ?>
                            <div class="widget-info color-filter clearfix atr-<?php echo $attribute->attribute_type ? strtolower($attribute->attribute_type) : ''; ?>">
                                <ul class="term-list">
                                    <?php
                                    if (isset($onepieces)) {
                                        foreach ($onepieces as $nameNvalue) {
                                            $pieces = explode("~", $nameNvalue);
                                            ?>
                                            <?php if (strtolower($attribute->attribute_type) == "color") { ?>

                                                <li class="squaredThree term-item"><input type="checkbox" class="filter <?php echo strtolower($attribute->attribute_type);?>" id="a<?php echo isset($pieces[1]) ? $pieces[1] : 0; ?>" value="<?php echo isset($pieces[1]) ? $pieces[1] : 0; ?>~<?php echo strtolower($attribute->attribute_type);?>" name="attribute_names" > 
                                                    <label style="background: <?php echo isset($pieces[0]) ? strtolower($pieces[0]) : 'Color Not Avialable'; ?>" for="a<?php echo isset($pieces[1]) ? $pieces[1] : 0; ?>"></label> <?php echo isset($pieces[0]) ? $pieces[0] : 'Color Not Avialable'; ?>

                                                </li>

                                            <?php } else { ?>
                                                <li class="term-item "><input type="checkbox" class="filter <?php echo strtolower($attribute->attribute_type);?>" id="<?php echo isset($pieces[1]) ? $pieces[1] : 0; ?>" value="<?php echo isset($pieces[1]) ? $pieces[1] : 0; ?>~<?php echo strtolower($attribute->attribute_type);?>" name="attribute_names" > <?php echo isset($pieces[0]) ? $pieces[0] : 'No data'; ?></li>	
                                                <?php
                                            }//else close
                                        } //onepieces close
                                    } //isset onepieces close 
                                    ?>

                                </ul>
                            </div>
                        <?php
                        }
                    }
                    ?>

                </div>
                
            </div>

            <div class="col-md-9 col-sm-9 col-xs-12" id="productsgrid" style="float:right;">
                <div class="shop-content">
                    <div class="col-md-12">
                        <div class="product-option mb-30 clearfix">
                            <ul class="shop-tab">
                                <li class="active"><a aria-expanded="true" href="#grid-view" data-toggle="tab"><i class="icon-grid"></i></a></li>
                               <!-- <li><a aria-expanded="false" href="#list-view" data-toggle="tab"><i class="icon-list"></i></a></li>-->
                            </ul>
                            <!-- Size end -->               
                            <!--<div class="showing text-right">
                                <?php $page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0; ?>
                                <p class="hidden-xs">Showing <?php  echo $page." - ".($page+count($products)); ?> Results Of <?php  echo count($total_products); ?></p>
                            </div>-->
                        </div>            
                    </div>

                    <div class="tab-content">
                        <div id="grid-view" class="tab-pane active">
<?php
if(isset($products) && count($products)>0){
$i = 0;
foreach ($products as $row) {
    $imageArray = explode(',', $row->image_path);
    $product_name = rawurlencode(str_replace(' ', '-', strtolower($row->name)));
    ?>
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="shop-product">
                                        <div class="product-box">
                                            <a href="<?php echo base_url() ?><?php echo $product_name . "/" ?><?php echo $row->product_id; ?>"><img class="img" src="<?php echo base_url() ?>public/uploads/<?php echo $imageArray[0] ? $imageArray[0] : 'no_image.png'; ?>"  alt="<?php echo $row->name; ?>"></a>
                                            <!--<div class="cart-overlay">
                                            </div>-->
      
                                        </div>
                                        <div class="product-info">
                                         <?php   $CI = & get_instance();
                                            //$prod_title = $CI->Common_lib->limit_text($row->name, 5); ?>
                                            <h4 class="product-title"><a href="<?php echo base_url() ?><?php echo $product_name . "/" ?><?php echo $row->product_id; ?>"><?php echo $row->name?$CI->Common_lib->limit_text($row->name, 4):''; ?></a></h4>  
                                            <p class="product-title">Sold By <b><a href="<?php echo base_url() ?>store/<?php echo strtolower($row->store_slug); ?>"><?php echo $row->store_name; ?></a></b></p>  
                                            <div class="align-items">
                                                <div class="pull-left">
                                                    <span class="price">&#8377; <?php echo $row->offer_price; ?> <del>&#8377;<?php echo $row->actual_price; ?></del></span>
                                                </div>
                                                <!-- <div class="pull-right">
                                                   <div class="reviews-icon">
                                                     <i class="i-color fa fa-star"></i>
                                                     <i class="i-color fa fa-star"></i>
                                                     <i class="i-color fa fa-star"></i>
                                                     <i class="fa fa-star-o"></i>
                                                     <i class="fa fa-star-o"></i>
                                                   </div>
                                                 </div> -->
                                            </div> 
                                        </div>
                                    </div>             
                                </div>

                                    <?php $i++;
                                } 
                                }else {//isset end?>
                             <div class="col-md-12">
                                    
                                 <p style="text-align: center;"><b>No Products</b></p>
                                    
                                </div>
                        <?php }?>

                        </div>
                        <div id="list-view" class="tab-pane">
                            <div class="shop-list" id="productsgrids" style="float:right;">
<?php
if(isset($products) && count($products)>0){
foreach ($products as $row) {
    $imageArray = explode(',', $row->image_path);
    $product_name = rawurlencode(str_replace(' ', '-', strtolower($row->name)));
    ?>
                                    <div class="col-md-12">
                                        <div class="shop-product clearfix">
                                            <div class="product-box">
                                                <a href="#"><img  src="<?php echo base_url() ?>public/uploads/<?php echo $imageArray[0] ? $imageArray[0] : 'no_image.png'; ?>"  alt="<?php echo $row->name; ?>"></a>
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
                                            <input type="hidden" id="qty[<?php echo $i; ?>]" class="input-number qty<?php echo $row->product_id; ?>" style="text-align:right;width:45px" value="<?php echo (@$cart_session[$row->product_id]) ? $cart_session[$row->product_id] : '1'; ?>" onkeypress="return numberOnly(event)">
                                            <div class="product-info">
                                                <div class="fix">
                                                    <h4 class="product-title pull-left"><a href="<?php echo base_url() ?>category/detail/<?php echo $row->product_id; ?>"><?php echo $row->name; ?></a></h4>
                                                    <div class="star-rating pull-right">
                                                        <div class="reviews-icon">
                                                            <i class="i-color fa fa-star"></i>
                                                            <i class="i-color fa fa-star"></i>
                                                            <i class="i-color fa fa-star"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="fix mb-10">
                                                    <span class="price">$ 56.20</span>
                                                    <span class="old-price font-16px ml-10"><del>$ 96.20</del></span>
                                                </div>
                                                <div class="product-description mb-20">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate pariatur tenetur fugiat quasi corrupti rerum officiis doloribus, cumque, culpa optio officia voluptatum fugit quis.</p>
                                                </div>  
                                                <button class="btn btn-common"><i class="fa fa-heart-o" aria-hidden="true"></i> Add to wishlist</button>                       
                                            </div>
                                        </div>            
                                    </div>

                        <?php }  }else{ //isset end ?>
                                <div class="col-md-12">
                                    <div class="shop-product clearfix">
                                        <h1>No Products</h1>
                                    </div>
                                </div>
                        <?php }?>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="pagination">
                    <div class="results-navigation pull-left">

                    </div>
                    <nav class="navigation pull-right">
<?php echo $links; ?>

                    </nav>              
                </div>
                <!-- Start Pagination -->
                <!--<div class="pagination">
                    <p></p>
                    <div class="results-showMoreContainer">
    <div class="results-showmore">
    Show More Products (497) 
    </div>
    </div>
                              
                </div>-->
                <!-- End Pagination -->
            </div>
        </div>
    </div>
</div>

	
	

        	
<!-- Product Categories Section End -->   
<?php //print_r($this->session->userdata('cat_ids'));exit; ?>
<script>
    $(document).ready(function ()
    {

        if ($(window).width() > 768) // if width>768 means only desktop
        {
            $(".img").addClass("imageres");
        }
        /* $("#sorted" ).change(function() {
         // alert($(this).val());
         $(".filter").trigger("click");
         });*/
        $(".filter").click(function ()
        {
            $("#preloader").fadeIn();
            //  $("#preloader").fadeOut(2000, function() {
            // $("#content").fadeIn(1000);        
            // });
            var pos = $(this).attr("id");
            // alert(pos);
            var favorite = []; // To get all category id's to get filter results
            //  $.each($("input[name='category_names']:checked"), function(){            
            //favorite.push($(this).val());
            //});
            $.each($("input[name='category_names']:checked"), function () {
                favorite.push($(this).val());
            });
            var attribute_ids = []; // To get all category id's to get filter results
            $.each($("input[name='attribute_names']:checked"), function () {
                attribute_ids.push($(this).val());
            });
            //console.log(attribute_ids);
            var first_segment_value = "<?php echo $this->uri->segment('1') ? $this->uri->segment('1') : 0 ?>";

            var second_segment_value = "<?php echo $this->uri->segment('2') ? $this->uri->segment('2') : 0 ?>"; //2nd segment value
            var segmen_id = "<?php echo $this->uri->segment('3') ? $this->uri->segment('3') : 0 ?>"; //third segment value
           
            var fourth_segmen_value = "<?php echo $this->uri->segment('4') ? $this->uri->segment('4') : 0 ?>"; //4th segment value
 //alert(fourth_segmen_value);
            if (first_segment_value == null) {
                first_segment_value = 0;
            }
            if (second_segment_value == null) {
                second_segment_value = 0;
            }
            if (segmen_id == null) {
                segmen_id = 0;
            }
            if (fourth_segmen_value == null) {
                fourth_segmen_value = 0;
            }
            $.post("<?php echo base_url(); ?>Ajax/filterResults", {category_ids: favorite, attribute_ids: attribute_ids, second_segment_value: second_segment_value, first_segment_value: first_segment_value, segmen_id: segmen_id, fourth_segmen: fourth_segmen_value}, function (response) {
                if (response) {

                    $('#productsgrid').html(response);
                    $("#preloader").fadeOut();
                    $("#content").fadeIn(1000);
                    if ($(window).width() > 768) // if width>768 means only desktop
                    {
                        $(".img").addClass("imageres");// for responsive
                    }

                }
            });

        });
        /* show more and less*/
        $('ul.term-list').each(function () {

            var LiN = $(this).find('li').length;

            if (LiN > 5) {
                $('li', this).eq(4).nextAll().hide().addClass('toggleable');
                $(this).append('<li class="more">Show More...</li>');
            }

        });


        $('ul.term-list').on('click', '.more', function () {

            if ($(this).hasClass('less')) {
                $(this).text('Show More...').removeClass('less');
            } else {
                $(this).text('Show Less...').addClass('less');
            }

            $(this).siblings('li.toggleable').slideToggle();

        });
     });
</script>
<!--<script type="text/javascript" src="https://abouolia.github.io/sticky-sidebar/js/ResizeSensor.js"></script>
        <script type="text/javascript" src="https://abouolia.github.io/sticky-sidebar/js/sticky-sidebar.js"></script>
        <script type="text/javascript">

                var stickySidebar = new StickySidebar('.sidebar1', {
                        topSpacing: 80,
                        bottomSpacing: 490,
                        containerSelector: '.container1',
                        innerWrapperSelector: '.sidebar__inner1'
                });
               
        </script>-->

<script>
    var x = screen.width;
    if (x < 400)
    {
        document.write('<script type="text/javascript" src="<?php echo base_url() ?>assets/frontend/js/mobilefilter.js"><\/script>');
    }
</script>