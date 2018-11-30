
<?php $this->load->view('frontpages/header'); ?>
 <link rel="stylesheet" href="<?php echo base_url() ?>assets/frontend/css/enquiryForm.css" type="text/css">
<script type="text/javascript" src="<?php echo base_url() ?>assets/frontend/js1/script.js"></script>
   
    <script type="text/javascript" src="<?php echo base_url() ?>assets/frontend/js1/modules/forms-free.js"></script>

    <link rel="stylesheet" href="<?php echo base_url() ?>assets/frontend/css1/style22.css" type="text/css">

    <link rel="stylesheet" href="<?php echo base_url() ?>assets/frontend/css1/css/mdb.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/frontend/css1/css/mdb.min.css" type="text/css">
<link rel="stylesheet" href="<?php echo base_url() ?>assets/layout2/css/dark.css" type="text/css" />

     <link rel="stylesheet" href="<?php echo base_url() ?>assets/layout2/css/magnific-popup.css" type="text/css" />

      <link rel="stylesheet" href="<?php echo base_url() ?>assets/layout2/css/font-icons.css" type="text/css" />

       <link rel="stylesheet" href="<?php echo base_url() ?>assets/layout2/css/animate.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/frontend/css1/addons/datatables.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/frontend/css1/addons/datatables.min.css" type="text/css">
  <body>  
    <!-- Header Section Start -->
 <?php //$this->load->view('frontpages/navbar'); ?>
    <!-- Header Section End -->    

    <!-- Banner Wrapper Start -->
<div class="banner-wrapper">

	<!-- Main Slider Section -->
 <section id="Vehicles_Option">
    <div class="container-fluid" >
    
        <div class="row vehicles" id="Hero_div" style="padding:0px 30px;">
      	 
      	</div>
      	 
    

        </div>
  </section>
    <!-- Main Slider Section End-->
<?php if (isset($content)) {
            echo $content;
        } ?>

    
   
    

   
    <!-- Shop Collection Section End -->

  

 <?php //$this->load->view('frontpages/footer'); ?>
    

    
        
  <!-- All js here -->
  
    <script type="text/javascript" src="<?php echo base_url() ?>assets/frontend/js/bootstrap-select.min.js"></script> 
    <script type="text/javascript" src="<?php echo base_url() ?>assets/frontend/js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/frontend/js/ion.rangeSlider.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/frontend/js/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/frontend/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/frontend/js/nivo-lightbox.js"></script> 
    <script type="text/javascript" src="<?php echo base_url() ?>assets/frontend/js/jquery.slicknav.js"></script>
    <script type="text/javascript" src="https://kenwheeler.github.io/slick/slick/slick.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/frontend/js/main.js"></script>
   <!-- <script type="text/javascript" src="<?php echo base_url() ?>assets/frontend/js/jquery.mask.js"></script>-->
    
    <!-- frontend registraion otp process-->
  <!--   <script type="text/javascript" src="<?php echo base_url() ?> assets/layout2/js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/layout2/js/plugins.js"></script>

<script type="text/javascript" src="<?php echo base_url() ?>assets/layout2/js/functions.js"></script>-->






      <script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}



	$(document).ready(function(){
	
	//alert("hi");
	//$('#city').mask('00/00/0000');
	$("#next1,#previous2").on("click",function(){

	 $(".steps").removeClass("reg0003");
	
	 $("#reg_step2").addClass("reg0003");
	//alert("hi");
	
    if (($("input[name*='categories']:checked").length)<=0) {
        alert("You must check at least 1 category");
		return false
    }
    return true;
	
    });	
    $("#previous1").on("click",function(){

	 $(".steps").removeClass("reg0003");
	
	 $("#reg_step1").addClass("reg0003");
	 });			
	
	$("#next2,#previous3").on("click",function(){

	 $(".steps").removeClass("reg0003");
	
	 $("#reg_step3").addClass("reg0003");
	 });
	 
	/*$("#next3").on("click",function(){

	 $(".steps").removeClass("reg0003");
	
	  $("#reg_step4").addClass("reg0003");
	 
	 });*/
    
					
	
	});
</script>   
  </body>
</html>