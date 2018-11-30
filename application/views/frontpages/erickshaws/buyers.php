<style>
.desk {
       font-size: 16px !important;
       padding-left: 22px;
    padding-right: 13px;
    }
@media only screen and (max-width: 375px) {
    .desk {
       font-size: 13px !important;
       padding-left: 0px;
    padding-right: 0px;
    }
}
@media only screen and (max-width: 768px) {
    .desk {
       font-size: 13px !important;
       padding-left: 0px;
    padding-right: 0px;
    }
}
@media only screen and (max-width: 539px) {
  .box {
    width: 85%;
    height: auto !important;
    background: #FFF;
    margin: 40px auto;
  }
  .bottommargin-sm {
    margin-bottom: 1px !important;
  }

  .box1 {
    width: 74% !important;
    height: auto !important;
    background: #FFF;
    margin: 10px auto !important;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.12), 0 2px 4px 0 rgba(0,0,0,0.08);
  }
  .boxwidth10{
    width: 40% !important;
    border: 2px solid #3051a0;
  }
  div {
    display: block ;
}
}
.feature-box.fbox-plain .fbox-icon i {
    font-size: 27px;
      color: #57b952 !important;
}
.feature-box h5{
    font-size: 12px;
        color: #3051a0;
  }
.topmargin {
    margin-top: 2px !important;
}
.b1{
   border: 1px solid #57b952;
    margin-left: 0px;
    margin-right: 0px;
    margin-bottom: 20px;
}
.box {
    width:85%;
    height:auto;
    background:#FFF;
    margin:0px auto;
}
.box1{
  width:82%;
    height:auto;
    background:#FFF;
    margin:25px auto;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.12), 0 2px 4px 0 rgba(0,0,0,0.08);
}
.boxwidth10{
    border: 2px solid #3051a0;
  }
  .one{
        padding-bottom: 17px;
  }
  .parabotm{
    margin-bottom: 0px !important;
    padding: 1px 3px;
    font-size: 12px !important;
  }
  .two{
    border: 2px solid #3051a0;
  }
  button{
          margin: 10px 0px 0px 0px;
              padding: 0px 5px !important;
  }
  .bottommargin-sm134 {
    margin-bottom: 0px !important;
}
.firstbox{
      padding-top: 12px !important;
}
.max3 {
    padding: 13px 0px !important;
}

</style>

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		<!--<div id="top-bar">

                    <div class="container clearfix">
                        
                        <h2 class="nott t500 divcenter  center" style="color: #fff;">e-Rickshaw factory club</h2>
                    </div>
                                                </div>-->

<section >

     <?php 
if(isset($sliderImages)) { 
    $k=0;
  foreach ($sliderImages as $img) {
         if($img->slider_category_id==8){ ?>
           <img src="<?php echo base_url() ?>public/uploads/admin/sliders/<?php echo $img->name;?>" class="img-responsive">
            
             <?php $k++;} if($k==1){break;} } }?>
			<!--<img src="<?php echo base_url() ?>assets/layout2/images/erickshaw.png" class="img-responsive">-->
		</section>
                <section>
			<div class="col-lg-12 col-md-6 col-sm-12">


               <marquee id='scroll_news'>
                <div onMouseOver="document.getElementById('scroll_news').stop();" onMouseOut="document.getElementById('scroll_news').start();" style="position: relative;top: 4px;padding: 2px 0px;"><a href="<?php echo base_url() ?>erickshaw" style="color: #3051a0;font-size: 18px;font-weight: 800;">Subscribe Today. Click here to list your e-rickshaw</a></div></marquee>
                
            
            </div>
                    
		</section>

		<!-- Content
		============================================= -->
                <section id="content1" style="background-image: url('../assets/frontend/img/iconsbuyers/backauto.png');">

			<div class="container clearfix">
                            
				
					<div class="row clearfix box">
                                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 topmargin bottommargin-sm134"> <?php 
if(isset($sliderImages)) { 
      $j=0;
  foreach ($sliderImages as $img) {
         if($img->slider_category_id==9){ ?>
            <div class="max3"><img src="<?php echo base_url() ?>public/uploads/admin/sliders/<?php echo $img->name;?>" class="img-responsive max3001"></div>
            
            <?php $j++;} if($j==1) break; } }?></div>
                                             <!--<div class="col-lg-2 col-md-2 col-sm-12 col-xs-1 col-sm-1 col-xs-12 topmargin bottommargin-sm"></div>-->
                                              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 topmargin bottommargin-sm"> <?php 
if(isset($sliderImages)) { 
    $i=0;
  foreach ($sliderImages as $img) {
         if($img->slider_category_id==10){ ?>
            <div class="max3"><img src="<?php echo base_url() ?>public/uploads/admin/sliders/<?php echo $img->name;?>" class="img-responsive max3001"></div>
            
            <?php $i++;} if($i==1) break; } }?></div>
                                            
                                           
						
						
					</div>

			</div> <!-- Features Area End -->


		</section><!-- #content end -->
		<section id="content" style="background-image: url('../assets/frontend/img/iconsbuyers/backauto.png');">

			<div class="container clearfix">
                            
				<?php if(isset($erickshaws)) { 
     //print_r($erickshaws);
  foreach ($erickshaws as $ads) { ?>

					<div class="row clearfix b1 box1">

              <div class="col-lg-4 col-md-4">
                   <?php if(!empty($ads->catalog)){?>
                  <a href="<?php echo base_url() ?>public/uploads/admin/erickshawfactory/<?php echo $ads->catalog;?>" download> <button type="button" class="btn btn-primary evm14"> E Catalog</button></a><?php } ?>
              <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 topmargin bottommargin-sm134 firstbox"><div class="one">
              <div class=""><?php if(isset($ads->url) && !empty($ads->url)){ ?><a target="_blank" href="<?php echo $ads->url;?>"><?php } ?><img src="<?php echo base_url() ?>public/uploads/admin/erickshawfactory/<?php echo $ads->manufacturer_logo;?>" class="img-responsive boxwidth10 max3001"><?php if($ads->url !==""){ ?></a><?php } ?>
              </div>
            </div>
            
          </div>

            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 topmargin bottommargin-sm134 firstbox"><div class="one">
              <div class=""><?php if(isset($ads->url) && !empty($ads->url)){ ?><a target="_blank" href="<?php echo $ads->url;?>"><?php } ?><img src="<?php echo base_url() ?>public/uploads/admin/erickshawfactory/<?php echo $ads->brand_logo;?>" class="img-responsive boxwidth10 max3001"><?php if($ads->url !==""){ ?></a><?php } ?>
              </div>
            </div>
             
        
          </div>
                                  </div>
                                  <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-6 col-xs-6 topmargin bottommargin-sm">
                <div class="two">
             <p class="parabotm"><?php echo $ads->address;?>, 
                <?php echo $ads->city;?>, <?php echo $ads->state_name;?>,<?php echo $ads->country;?>.
                <br><b>Contact Number: <?php echo $ads->contact_number;?></b>
              </p>
            </div>
        
          </div>
                                  </div>
                              </div>
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 topmargin bottommargin-sm134 firstbox"><div class="" style="float: right;"><?php if(isset($ads->url) && !empty($ads->url)){ ?><a target="_blank" href="<?php echo $ads->url;?>"><?php } ?><img src="<?php echo base_url() ?>public/uploads/admin/erickshawfactory/<?php echo $ads->brand_banner;?>" class="img-responsive max3001"><?php if($ads->url !==""){ ?></a><?php } ?></div></div>
                  
					</div>
                            <?php  } }?>
                            <!--<div class="row clearfix b1">
                                           
                                            <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 topmargin bottommargin-sm"><div class="max3"><a target="_blank" href="https://senatlaevproducts.com/"><img src="http://localhost/evmaxnew/public/uploads/admin/sliders/1536736490add1.jpg" class="img-responsive"></a></div></div>
                                             <div class="col-lg-2 col-md-2 col-sm-12 col-xs-1 col-sm-1 col-xs-12 topmargin bottommargin-sm"><div class="max3"><a target="_blank" href="https://senatlaevproducts.com/"><img src="http://localhost/evmaxnew/public/uploads/admin/sliders/1536736490add1.jpg" class="img-responsive"></a></div></div>
                                              <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 topmargin bottommargin-sm"><div class="max3" style="float: right;max-height: 151px;"><a target="_blank" href="https://senatlaevproducts.com/"><img src="<?php echo base_url() ?>assets/layout2/images/a.png" class="img-responsive" style=""></a></div></div>
                                            
                                         
						
						
					</div>-->

			</div> <!-- Features Area End -->


		</section><!-- #content end -->
                

		<script>
    $('body').on('click', '.product_id', function () {
        var product_id = $(this).data('id');
        var product_name = $(this).data('pname');
        var type = $(this).data('type');alert(type);
        var alertval="";
        //var flg="";
        alertval = (type==="activate")?"Activate ":"Deactivate ";
        var answer = confirm('Are you sure you want to '+ alertval  + product_name + ' ?');

        if (answer)
        {
            $.ajax({
                type: "POST",
                url: "<?= base_url(); ?>admin/Ajax/eventOnERickshaw",
                data: {'product_id': product_id,'typeofAction': type},
                success: function (response) {

                    if (response) {
                        location.reload();
                        //$('.p10').parent('tr').remove();
                        //alert('ok');
                        // $('#custom_attributes').html(response); 
                    } else {

                    }
                }
            });
        } else
        {
            alert('You are canceled the operation');
        }
    });
    </script>