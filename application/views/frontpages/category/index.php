
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
    .store-logo{
        max-width: 120px;
        max-height: 100px;
    }
    .make_filter{
    width: 30%;
    float: left;
    margin-right: 1%;
    }
</style>
<!-- Start Page Header -->
<?php 
$segment = explode("&",$this->uri->segment(2)); 
//print_r($segment);//vehicles%20electric-vehicle-battery
//if($this->uri->segment(3) === "4" ){ // change this later
    ?>


     <?php 
    //echo "<pre>";print_r($sliderImages);
if(isset($sliderImages)) { 
    $k=0;
  foreach ($sliderImages as $img) {
         if(($img->product_category_id == $this->uri->segment(3)) && ($img->product_banner_type_id == 1)){ ?>
<section>
    <a target="<?php echo $img->link_url?'_blank':'';?>" href="<?php echo $img->link_url?$img->link_url:'#';?>"><img src="<?php echo base_url() ?>public/uploads/admin/sliders/<?php echo $img->name;?>" class="img-responsive"></a>
            </section>
            <?php $k++;} if($k==1){break;} } }?>
			
		
<?php //} ?>

<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">            
                <div class="breadcrumb col-md-3 col-sm-12 col-lg-3 col-xs-12">
                    <a href="#"><i class="icon-home"></i> <?php if(isset($segment) && !empty($segment)){echo  ucwords($segment[0]);}?></a>
                    
                    <span class="current"><?php if(isset($segment) && !empty($segment)){echo  '<span class="crumbs-spacer"><i class="fa fa-angle-double-right"></i></span>'.ucwords($segment[1]);}?></span>
                    
                </div>
                <div class="row col-md-6 col-sm-12 col-lg-6 col-xs-12">
                    <div class="col-md-3 col-sm-12 col-lg-3 col-xs-12">
                    <label style="position: relative;top: 8px;font-weight: 500;">FILTER BY:</label>
                    </div>
                    <div class="col-md-9 col-sm-12 col-lg-9 col-xs-12">
                     <select name="make" id="make" class="form-control make_filter">
                                                        <option value="">Make</option>
                                                          <?php if(isset($getMakes) &&(count($getMakes)>0)){
                                                              foreach ($getMakes as $make){ ?>
                                                         <option class="" value="<?php echo $make->m_registration_id; ?>" <?php if($make->m_registration_id === $this->session->userdata('make')){ echo "selected";} ?>>  <?php echo $make->company_name; ?>    </option>
                                                          <?php } } ?>
                                        


                                                    </select>
                    <select name="model" id="model" class="form-control make_filter">
                                                        <option value="">Model</option>
                                                         <?php if(isset($model) &&(count($model)>0)){
                                                              foreach ($model as $m){ ?>
                                                         <option class="" value="<?php echo $m->model_id; ?>" <?php if($m->model_id === $this->session->userdata('model')){ echo "selected";} ?>>  <?php echo $m->model_name; ?>    </option>
                                                          <?php } } ?>
                                                     </select>
            <select name="variant" id="variant" class="form-control make_filter">
                                                     <option value="">Variant</option>
                                                      <?php if(isset($variant) &&(count($variant)>0)){
                                                              foreach ($variant as $v){ ?>
                                                         <option class="" value="<?php echo $v->variant_id; ?>" <?php if($v->variant_id === $this->session->userdata('variant')){ echo "selected";} ?>>  <?php echo $v->name; ?>    </option>
                                                          <?php } } ?>
                                                    </select>
</div>
                </div>
            </div>
        </div>
    </div>
</div>
	<div class="container clearfix">
                            
				
					<div class="row clearfix box">
                                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 topmargin bottommargin-sm134"> <?php 
if(isset($sliderImages)) { 
   
      $j=0;
  foreach ($sliderImages as $img) {
         if(($img->product_category_id == $this->uri->segment(3)) && ($img->product_banner_type_id == 2)){ ?>
                                                <div class="max3"><a target="<?php echo $img->link_url?'_blank':'';?>" href="<?php echo $img->link_url?$img->link_url:'#';?>"><img src="<?php echo base_url() ?>public/uploads/admin/sliders/<?php echo $img->name;?>" class="img-responsive"></a></div>
            
            <?php $j++;} if($j==1) break; } }?></div>
                                             <!--<div class="col-lg-2 col-md-2 col-sm-12 col-xs-1 col-sm-1 col-xs-12 topmargin bottommargin-sm"></div>-->
                                              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 topmargin bottommargin-sm"> <?php 
if(isset($sliderImages)) { 
    $i=0;
  foreach ($sliderImages as $img) {
        if(($img->product_category_id == $this->uri->segment(3)) && ($img->product_banner_type_id == 3)){ ?>
                                                  <div class="max3"><a target="<?php echo $img->link_url?'_blank':'';?>" href="<?php echo $img->link_url?$img->link_url:'#';?>"><img src="<?php echo base_url() ?>public/uploads/admin/sliders/<?php echo $img->name;?>" class="img-responsive"></a></div>
            
            <?php $i++;} if($i==1) break; } }?></div>
                                            
                                           
						
						
					</div>

			</div> <!-- Features Area End -->
<!-- End Page Header -->
<?php //echo count($total_products); ?>
<?php $tmp = "assets/frontend/img/feature/img2.jpg";
if ($this->uri->segment('1') == "store") {
    //print_r($stores);
                        
  //if($store->slider_category_id == 7){ 
    ?>
    <!-- Banner Section Start -->
    <section class="">
        <div class="container">
            <div class="row" style="margin-top: 13px;">

                <div class="col-md-6 col-sm-12 col-xs-12">
                   
                    <div class="feature-item-content" id="divid" style="width:300px;height:200px;margin-left: 53px;">
                         <?php  if((isset($stores)) && (count($stores)>0)){
                             foreach($stores as $store){ 
            if($store->slider_category_id == 7) { ?>
                        <a target="<?php echo $img->link_url?'_blank':'';?>" href="<?php echo $img->link_url?$img->link_url:'#';?>"><img src="<?php echo base_url() ?><?php echo !empty($store->name) ? "public/uploads/admin/sliders/" . $store->name : $tmp; ?>" alt="<?php echo $this->uri->segment('2'); ?>"></a>

            <?php }
                             }
                         
            
                         } else { // if no data there this will displays ?>
                        
                        <a target="<?php echo $img->link_url?'_blank':'';?>" href="<?php echo $img->link_url?$img->link_url:'#';?>"><img src="<?php echo base_url(). $tmp; ?>" alt="<?php echo $this->uri->segment('2'); ?>"> </a>
            <?php } ?>
                    </div>
                    
                </div>
                
                
 
                <div class="col-md-6">
                      <?php  if((isset($stores)) && (count($stores)>0)){
                             foreach($stores as $store){ 
            if($store->slider_category_id == 8) { ?>
                    <div class="store-img">
                        <img class="store-logo" src="<?php echo base_url() ?><?php echo !empty($store->name) ? "public/uploads/admin/sliders/" . $store->name : $tmp; ?>" alt="<?php echo $this->uri->segment('2'); ?>">
                        <br>
                        <h3>Welcome to <?php echo $this->uri->segment('2') ?></h3>
                        <p>Some beautiful text goes here</p>

                    </div>
                      <?php }
                             }
                         
            
                         } else { // if no data there this will displays ?>
                    <img class="store-logo" src="<?php echo base_url(). $tmp; ?>" alt="<?php echo $this->uri->segment('2'); ?>">
                    <br>
                        <h3>Welcome to <?php echo $this->uri->segment('2') ?></h3>
                        <p>Some beautiful text goes here</p>
                      <?php } ?>
                </div>
                
            </div>
        </div>
        
    </section>
     
    <!-- Banner Us Section End -->
<?php } ?>
<!-- Product Categories Section Start -->
<div id="content" class="product-area">
    <div class="container">
        <div class="row">
          

            <div class="col-sm-12"  style="float:right;">
         
                <div class="shop-content" id="ajax_table">
              

                    <!--<div class="tab-content" id="all_products">
                       
                      </div>-->
                </div>
                <div class="pagination">
                    <div class="results-navigation pull-left">

                    </div>
                    <nav class="navigation pull-right">
<?php //echo $links; ?>

                    </nav>              
                </div>
                <div class="container1" style="text-align: center"><span style="background: #57b952;color: #fff;padding: 4px;" class="load_more" id="load_more" data-val = "0" >Load more products <img style="display: none" id="loader1" src="<?php echo base_url() ?>assets/frontend/externalimg/loader.GIF"> <span id="products_count" data-prod-count=""></span></span> <span style="background: #57b952;color: #fff;padding: 4px;" class="" id="no_data" disabled> No more products to display</span> </div>  
            </div>
           
        </div>
    </div>
    
    
</div>




<div class="cd-main-content visible-xs">




    <!--<div class="cd-filter">
        <form>


            <div class="cd-filter-block">
                    <?php if ($this->uri->segment('1') !== "store") { ?>
                    <h4 class="lpsd239">CATEGORIES</h4>

                    
                    <ul id="" class="product-cat term-list">
                        <?php
                        $segment_parent_id = $this->uri->segment('3') ? $this->uri->segment('3') : 0;
                        $category_name = explode(",", $childdata[0]['category_names']);
                        $category_ids = explode(",", $childdata[0]['child_ids']);
                    if (isset($category_name) &&(count($category_name)>0)) {
                      //  print_r($category_name);exit;
                        foreach ($category_name as $key1 => $name) {

                            if (isset($category_name)) {
                                if (count($category_name) == 1) {
                                    echo " " . $name;
                                }

                                $category_ids = array_unique($category_ids); // To eliminate dublicate  values

                                if (isset($category_ids) &&(count($category_ids>0))) {
                                    foreach ($category_ids as $key2 => $id) {
                                        if (($key1 == $key2) && ($id != $segment_parent_id)) {
                                            ?>
                                            
                                            <?php echo $name ? $name : 'No Categories'; ?> </li>
                                            <?php
                                        }
                                    }
                                }
                            }
                        }
                    }
                        ?>

                    </ul>
                    <?php } ?>
                <div class="widget-ct widget-color mb-30" >

<?php
if (isset($attributes)) {

    foreach ($attributes as $attribute) {
        ?>
                            <div class="widget-s-title">
                                <h4><?php echo $attribute->attribute_type; ?> </h4>
                            </div>
                                    <?php
                                    //$cats = explode("-", $attribute->atr_cat_ids);
                                    //print_r($cats);
                                    $onepieces = explode(",", $attribute->name);
                                    ?>
                            <div class="widget-info color-filter clearfix atr-<?php echo $attribute->attribute_type ? strtolower($attribute->attribute_type) : ''; ?>">
                                <ul class="term-list">
        <?php
                                           
        if (isset($onepieces)) {
            foreach ($onepieces as $nameNvalue) {
                $pieces = explode("~", $nameNvalue);
                ?>
                                            <?php if (strtolower($attribute->attribute_type) == "color") { ?>

                                                <li class="squaredThree term-item">
                                                    
                                                    <input type="checkbox" class="filter <?php echo strtolower($attribute->attribute_type);?>" id="a<?php echo isset($pieces[1]) ? $pieces[1] : 0; ?>" value="<?php echo isset($pieces[1]) ? $pieces[1] : 0; ?>~<?php echo strtolower($attribute->attribute_type);?>" name="attribute_names" > 
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




        </form>

        <a href="#0" class="cd-close">Close</a>
    </div> --><!-- cd-filter -->

    <a href="#0" title="filters" class="cd-filter-trigger">Filters</a>
</div>
<!-- cd-main-content -->
<!-- Product Categories Section End -->   
<?php //print_r($this->session->userdata('cat_ids'));exit;  ?>
<script>
  
    $(document).ready(function ()
    {
 //alert();
  getPagination(0);

        $("#load_more").click(function(e){
            e.preventDefault();
			//alert($(this).data('val'));
            var page = $(this).data('val');
            getPagination(page);

        });
        
        
        $("#no_data").hide();
       
        if ($(window).width() > 768) // if width>768 means only desktop
        {
           // $(".img").addClass("imageres");
        }
        /* $("#sorted" ).change(function() {
         // alert($(this).val());
         $(".filter").trigger("click");
         });*/
        $(".filter").click(function ()
        {
            $("#no_data").hide();
            $("#preloader").fadeIn();
            //  $("#preloader").fadeOut(2000, function() {
            // $("#content").fadeIn(1000);        
            // });
           // var pos = $(this).attr("id");
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
            console.log(attribute_ids);// remove this
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

                    $('#ajax_table').html(response);
                    $("#load_more").show();
                    $("#preloader").fadeOut();
                    $("#content").fadeIn(1000);
                    if ($(window).width() > 768) // if width>768 means only desktop
                    {
                     //   $(".img").addClass("imageres");// for responsive
                    }
                     var cnt = $(response).find('.product-box').length;
             //alert(cnt);
             if(cnt===0){
                 $("#load_more").hide();
                 $("#no_data").show();
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
     
      /* for page loading ends */
        /*Load filter results automtically by trigger
         * 
         */
    var getPagination = function(page){
        $("#loader1").show();
        var tot_products = "<?php echo $total_products ? count($total_products) : 0 ?>";
        //alert(tot_products);
        
        
        //var numItems = $('.product-box').length;
        //alert(numItems);
         $("#preloader").fadeIn();
 
            var favorite = []; // To get all category id's to get filter results
            var numItems;
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
 //alert(second_segment_value);
			var make = $("#make option:selected").val()
			var model = $('#model option:selected').val();
			var variant = $('#variant option:selected').val();
			//alert(model);
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
        
         $.ajax({
            url:"<?php echo base_url(); ?>Ajax/filterResults",
            type:'POST',
            data: {category_ids: favorite, attribute_ids: attribute_ids, second_segment_value: second_segment_value, first_segment_value: first_segment_value, segmen_id: segmen_id, fourth_segmen: fourth_segmen_value,page:page,make:make,model:model,variant:variant}
        }).done(function(response){
            //alert(response.length);
             var cnt = $(response).find('.product-box').length;
             //alert(cnt);
             if(cnt===0){
                 $("#load_more").hide();
                 $("#no_data").show();
             }
            $("#ajax_table").append(response);
            $("#preloader").hide();
            $("#loader1").hide();
            $('#load_more').data('val', ($('#load_more').data('val')+1));
              //numItems = $('.rowcount').html(response).find('.product-box').length;
              //alert(numItems);
             // scroll();
        });
    };
        var scroll  = function(){
        $('html, body').animate({
            scrollTop: $('#load_more').offset().top
        }, 1000);
    };
</script>

<!--<script type="text/javascript" src="https://abouolia.github.io/sticky-sidebar/js/ResizeSensor.js"></script>
        <script type="text/javascript" src="https://abouolia.github.io/sticky-sidebar/js/sticky-sidebar.js"></script>
        <script type="text/javascript">

               var a = new StickySidebar('#sticky-sidebar-demo', {
			topSpacing: 50,
			containerSelector: '.container',
			innerWrapperSelector: '.sidebar__inner'
		});
               
        </script>-->

<script>
    var x = screen.width;
    if (x < 450)
    {
        document.write('<script type="text/javascript" src="<?php echo base_url() ?>assets/frontend/js/mobilefilter.js"><\/script>');
    }
       $('body').on('change', '#make', function () {
        //var cat_id = $(this).data('id');
		
        var value = $("#make option:selected").val();
	if(value){
           $.ajax({
                type: "POST",
                url: "<?= base_url(); ?>admin/Ajax/getDependecies",
                data: {'value': value},
                success: function (response) {

                    if (response) {
					$('#model').html(response); 
					$('#ajax_table').html("");
						getPagination(0);
                     var value1 = $("#model option:selected").val();
                        $.ajax({
                type: "POST",
                url: "<?= base_url(); ?>admin/Ajax/getVarientDependecies",
                data: {'value': value1},
                success: function (response) {
//console.log(response);
                    if (response) {
                     $('#variant').html(response); 
                    } else {
                        //$('#variant').html('<option value=""></option>');
                    }
                }
            });
                    } else {
                    
$('#model').html('<option value=""></option>');
                    }
                }
            });
            }else{
            $('#ajax_table').html("");
						getPagination(0);
            $('#model').html('<option value="">Please select Make</option>');
            $('#variant').html('<option value="">Please select Variant</option>');
			//$('#ajax_table').html("");
                       // location.reload();
            }
     
    });
       $('body').on('change', '#model', function () {
        //var cat_id = $(this).data('id');
		
        var value = $("#model option:selected").val();
		//alert(value);
                if(value){
           $.ajax({
                type: "POST",
                url: "<?= base_url(); ?>admin/Ajax/getVarientDependecies",
                data: {'value': value},
                success: function (response) {
//console.log(response);
                    if (response) {
                     $('#variant').html(response); 
					 $('#ajax_table').html("");
						getPagination(0);
                    } else {
                         $('#ajax_table').html("");
						getPagination(0);
                        //$('#variant').html('<option value=""></option>');
			//			$('#ajax_table').html("");
                    }
                }
            });
            }else{
            $('#variant').html('<option value="">Please select Model</option>');
            }
     
    });
	    $('body').on('change', '#variant', function () {
        //var cat_id = $(this).data('id');
		
        var value = $("#variant option:selected").val();
		//alert(value);
                if(value){
       $('#ajax_table').html("");
						getPagination(0);
            }else{
            $('#variant').html('<option value="">Please select Model</option>');
			$('#ajax_table').html("no data found");
            }
     
    });
</script>