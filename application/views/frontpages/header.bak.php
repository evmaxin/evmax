<!DOCTYPE html>
<html lang="en">
  <head>
          <?php
   //print_r($category_metadata[0]->meta_title);
    if(isset($products[0]->meta_title)&&($products[0]->meta_title !="")) { $title = $products[0]->meta_title; } else if(isset($category_metadata[0]->meta_title)&&($category_metadata[0]->meta_title !="")) { $title = $category_metadata[0]->meta_title; } else { $title ="Electric Vehicle online ecosystem";}
    if(isset($products[0]->meta_keywords)&&($products[0]->meta_keywords !="")) { $keywords = $products[0]->meta_keywords; } else if(isset($category_metadata[0]->meta_keywords)&&($category_metadata[0]->meta_keywords !="")) { $keywords = $category_metadata[0]->meta_keywords; } else { $keywords ="Electric vehicles in india";}
    if(isset($products[0]->meta_description)&&($products[0]->meta_description !="")) { $description = $products[0]->meta_description; } else if(isset($category_metadata[0]->meta_description)&&($category_metadata[0]->meta_description !="")) { $description = $category_metadata[0]->meta_description; } else { $description ="Electric vehicles in india";}
    ?>
    <title><?php echo $title?$title." - ":''?><?php echo $this->config->item('admin_title');?></title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">    
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <meta name="author" content="Evmax">
    <!-- Favicon 
    <link rel="shortcut icon" href="<?php echo base_url() ?>assets/frontend/img/favicon.png">-->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/frontend/css/bootstrap.min.css" type="text/css">    
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/frontend/css/bootstrap-select.min.css" type="text/css">    
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/frontend/fonts/font-awesome.min.css" type="text/css">   
    <!-- Line Icons CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/frontend/fonts/line-icons/line-icons.css" type="text/css">      
    <!-- Main Styles -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/frontend/css/main.css" type="text/css">
    <!-- Rev Slider Css -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/frontend/extras/settings.css" type="text/css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/frontend/extras/animate.css" type="text/css">    
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/frontend/extras/owl.carousel.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/frontend/extras/owl.theme.css" type="text/css">
    <!-- Range Slider -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/frontend/extras/ion.rangeSlider.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/frontend/extras/ion.rangeSlider.skinFlat.css" type="text/css">
    <!-- Modals Effects -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/frontend/extras/component.css" type="text/css">
    <!-- Slick Slider -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/frontend/extras/slick.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/frontend/extras/slick-theme.css" type="text/css">
    <!-- Nivo Lightbox Css -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/frontend/extras/nivo-lightbox.css" type="text/css">    

    <!-- Slicknav Css -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/frontend/css/slicknav.css" type="text/css">  
    <!-- Responsive CSS Styles -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/frontend/css/responsive.css" type="text/css">
    
    
    <script src="<?php echo base_url() ?>assets/frontend/js/jquery-min.js"></script> 
    
    <script src="<?php echo base_url() ?>assets/frontend/bootstrap/js/bootstrap.min.js"></script>
<style type="text/css">
	::-webkit-scrollbar { 
   
}
	.vehicles{
	position:fixed;/*top:150px;*/
  top:120px;
	/*border:1px solid silver;*/
  display:none;
  padding: 0px;
	z-index:998;
	background:white;
  width:100%;
  height:70%;
	}

  .vehicles12{
    height: 100%;
    overflow-y: scroll;
    overflow-x: hidden;
    width:100%;
  }
	
	.vehiclesUl{width:500px;z-index:999;}
	
	.vehiclesLi{display:inline-block;z-index:999;}

  .widcol{
    width: 100% !important;
    height: 100% !important;
   
  }
  .widcol_subDiv{
      
   
  }
	 
	 
	 
	</style>
  </head>
   <style>
      .page-header{background: #57b952;}
      .entry-title,.breadcrumb,.breadcrumb a,h2.breadcrumb{color: #fff !important;}
      .wishlist{background: #57b952;}
      .shop-tab li.active a {
    color: #57b952;
    
}
.single-pro-tab-menu ul li.active a{
        background: #57b952 !important;
    }
    
/* new css */
.subBrand {
   /* border: 1px solid #ccc*/
}

.e-bicycles {
    padding-top: 25px;
    color: #334e9e;
    font-size: 30px;
    text-align: center
}

.shop-product12 {
    padding: 0 0 10px
}

.product_image_display_box {
    margin: 0;
    box-shadow: 0 1px 3px #ccc
}

.productImageDisplay {
    height: 100%;
    width: 100%;
    border-radius: 5px;
    opacity: .9
}

.productImageDisplay:hover {
    opacity: 1
}

.navbr3 {
    padding: 100px 8px 0!important
}

.product_information {
    border: 1px solid rgba(51, 51, 51, .6);
    display: none;
    position: absolute;
    top: 0;
    left: 10px;
    padding: 10px;
    height: 100%;
    width: 91%;
    background-color: rgba(51, 51, 51, .6)
}

.product_information table,
.product_information td,
.product_information th {
    border: 0 solid #333!important;
    color: #fff;
    font-size: 11px;
    padding: 0px
}

.product_information .ProductDBut {
    color: #fff!important;
    text-transform: capitalize;
    background: #3051a0;
    border: 1px solid #fff;
    font-size: 14px;
    padding: 6px 8px
}

.productPrice,
.productTitle {
    text-align: center;
    color: #000
}

.widcol:hover .product_information {
    display: block;
    overflow: hidden
}

.productTitle {
    font-size: 18px;
    margin-top: 8px
}

.productPrice {
    font-size: 16px;
    margin-top: 5px
}

.vehicleItem .owl-controls {
    display: inline-block!important;
    position: unset
}

.vehicleItem .owl-controls .owl-buttons .owl-prev {
    display: inline-block!important;
    position: absolute;
    top: 130px;
    left: 5px
}

.vehicleItem .owl-controls .owl-buttons .owl-next {
    display: inline-block!important;
    position: absolute;
    top: 130px;
    right: 5px
}

.vehicleItem.owl-buttons div i {
    color: #fff;
    font-size: 16px;
    line-height: 16px
}
      </style>
