<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="" />

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Montserrat:400,700|Crete+Round:400i" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/layout2/css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/layout2/css/style.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/layout2/css/swiper.css" type="text/css" />

	<!-- Medical Demo Specific Stylesheet -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/layout2/demos/medical/medical.css" type="text/css" />
	<!-- / -->

	<link rel="stylesheet" href="<?php echo base_url() ?>assets/layout2/css/dark.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/layout2/css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/layout2/demos/medical/css/medical-icons.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/layout2/css/animate.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/layout2/css/magnific-popup.css" type="text/css" />

	<link rel="stylesheet" href="<?php echo base_url() ?>assets/layout2/demos/medical/fonts.css" type="text/css" />

	<link rel="stylesheet" href="<?php echo base_url() ?>assets/layout2/css/responsive.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<link rel="stylesheet" href="<?php echo base_url() ?>assets/layout2/css/colors111.php?color=DE6262" type="text/css" />

	<!-- Document Title
	============================================= -->
	<title><?php echo $title?$title." - ":''?><?php echo $this->config->item('admin_title');?> </title>

	<style>
		.form-control.error { border: 2px solid red; }
                .right-links{float: right;}
	</style>

</head>

<body class="stretched" data-loader-html="">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Top Bar
		============================================= -->
		<div id="top-bar">

			<div class="container clearfix">

				<div class="col_half d-none d-md-block nobottommargin">

					<!-- Top Links
					============================================= -->
					<div class="top-links">
						<ul>
							<li><a href="#"><i class="icon-phone3"></i> +91-9205-991-992</a></li>
							<li><a href="#" class="nott"><i class="icon-envelope2"></i> info@evmax.in</a></li>
						</ul>
					</div><!-- .top-links end -->
                                        

				</div>

				<div class="top-links" style="float: right;">
						<ul>
							
                                                            <li><a style="text-transform: capitalize;" href="<?php echo base_url() ?>BecomeASeller#enquirynow">  Enquiry</a></li>
                                                            <li><a style="text-transform: capitalize;" href="<?php echo base_url() ?>merchant/login">Login</a></li>
						</ul>
					</div><!-- .top-links end -->

			</div>

		</div><!-- #top-bar end -->

		<!-- Header
		============================================= -->
		<header id="header" class="d-block d-sm-none ">

			<div id="header-wrap">

				<div class="container clearfix">

					<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

					<!-- Logo
					============================================= -->
					<div id="logo" class="">
						<a href="<?php echo base_url() ?>" class="standard-logo myenqc111 logoimg211"><img src="<?php echo base_url() ?>assets/layout2/images/logo.png" alt="evecosys logo"></a>

						<a href="<?php echo base_url() ?>" class="retina-logo myenqc111 logoimg211"><img src="<?php echo base_url() ?>assets/layout2/images/logo.png" alt="evecosys logo"></a>
					</div><!-- #logo end -->

					<!-- Primary Navigation
					============================================= -->
					<nav id="primary-menu" class="style-3">

						<ul class="">
                            <li class="<?php if($this->uri->segment(2)=="about"){echo 'current';}?>"><a href="<?php echo base_url() ?>BecomeASeller/about"><div>About evmax </div></a></li>
							<li class="<?php if($this->uri->segment(2)=="advantages"){echo 'current';}?>"><a href="<?php echo base_url() ?>BecomeASeller/advantages"><div>Advantages </div></a></li>
							<li class="<?php if($this->uri->segment(2)=="howitworks"){echo 'current';}?>"><a href="<?php echo base_url() ?>BecomeASeller/howitworks"><div>How it works </div></a></li>
							<li class="<?php if($this->uri->segment(2)=="pricing"){echo 'current';}?>"><a href="<?php echo base_url() ?>BecomeASeller/pricing"><div>Pricing</div></a></li>
							</li>
							<li class="<?php if($this->uri->segment(2)=="shippinganddelivery"){echo 'current';}?>"><a href="<?php echo base_url() ?>BecomeASeller/shippinganddelivery"><div>Shipping and Delivery</div></a></li>
							<li class="<?php if($this->uri->segment(2)=="advertise"){echo 'current';}?>"><a href="<?php echo base_url() ?>BecomeASeller/advertise"><div>Advertise</div></a></li>
							<li class="<?php if($this->uri->segment(2)=="support"){echo 'current';}?>"><a href="<?php echo base_url() ?>BecomeASeller/support"><div>Expert Support Partners </div></a></li>
							<li class="<?php if($this->uri->segment(2)=="enquiry"){echo 'current';}?>"><a href="<?php echo base_url() ?>BecomeASeller/about#enquirynow"><div>Become Merchant </div></a></li>
						</ul>

					</nav><!-- #primary-menu end -->

				</div>

			</div>

		</header><!-- #header end -->


		<header id="header" class="d-none d-sm-block">

			<div id="header-wrap">

				<div class="container clearfix">

					<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

					<!-- Logo
					============================================= -->
					<div id="logo" class="">
						<a href="<?php echo base_url() ?>" class="standard-logo myenqc11 logoimg21122"><img src="<?php echo base_url() ?>assets/layout2/images/logo.png" alt="evecosys logo"></a>

						<a href="<?php echo base_url() ?>" class="retina-logo myenqc11 logoimg21122"><img src="<?php echo base_url() ?>assets/layout2/images/logo.png" alt="evecosys logo"></a>
					</div><!-- #logo end -->

					<!-- Primary Navigation
					============================================= -->
					<nav id="primary-menu" class="style-3">

						<ul class="myenqc14">
                                                    
							<li class="<?php if($this->uri->segment(2)=="about"){echo 'current';}?>"><a href="<?php echo base_url() ?>BecomeASeller/about"><div>About evmax </div></a></li>
							<li class="<?php if($this->uri->segment(2)=="advantages"){echo 'current';}?>"><a href="<?php echo base_url() ?>BecomeASeller/advantages"><div>Advantages </div></a></li>
							<li class="<?php if($this->uri->segment(2)=="howitworks"){echo 'current';}?>"><a href="<?php echo base_url() ?>BecomeASeller/howitworks"><div>How it works </div></a></li>
							<li class="<?php if($this->uri->segment(2)=="pricing"){echo 'current';}?>"><a href="<?php echo base_url() ?>BecomeASeller/pricing"><div>Pricing</div></a></li>
							</li>
							<li class="<?php if($this->uri->segment(2)=="shippinganddelivery"){echo 'current';}?>"><a href="<?php echo base_url() ?>BecomeASeller/shippinganddelivery"><div>Shipping and Delivery</div></a></li>
							<li class="<?php if($this->uri->segment(2)=="advertise"){echo 'current';}?>"><a href="<?php echo base_url() ?>BecomeASeller/advertise"><div>Advertise</div></a></li>
							<li class="<?php if($this->uri->segment(2)=="support"){echo 'current';}?>"><a href="<?php echo base_url() ?>BecomeASeller/support"><div>Expert Support Partners </div></a></li>
							<li class="<?php if($this->uri->segment(2)=="enquiry"){echo 'current';}?>"><a href="<?php echo base_url() ?>BecomeASeller/about#enquirynow"><div>Become Merchant </div></a></li>
						</ul>

					</nav><!-- #primary-menu end -->

				</div>

			</div>

		</header><!-- #header end -->