<map name="workmap">
        <area shape="rect" coords="1100,80,1400,100" alt="logo" href="<?php echo base_url(); ?>#buyers-guide">
        
                       
        
    </map>
 <map name="workmapa">
        <area shape="rect" coords="1100,100,1400,200" alt="logo" href="#">
		<area shape="rect" coords="700,100,1000,200" alt="logo" href="#">
		<area shape="rect" coords="400,100,650,200" alt="logo" href="#">
		<area shape="rect" coords="100,100,300,200" alt="logo" href="#">
        
                       
        
    </map>
<div class=""> 
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
  <!-- Indicators -->
    <ol class="carousel-indicators">
       
                <?php 
    if(isset($sliderImages)) { 
    $i=0;
     foreach ($sliderImages as $img) {
          if($img->slider_category_id==1){
    ?>
      <li data-target="#myCarousel" data-slide-to="<?php echo $i;?>"></li>
    <?php  } } } ?>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <?php 

if(isset($sliderImages)) { 
    $i=0;
     foreach ($sliderImages as $img) {
         $i++;
         if($img->slider_category_id==1){
            // echo $i;
    ?>
      <div class="item <?php if($img->slider_id == 55){ echo 'active';} ?> ">
        <img <?php if($img->slider_id == 56){ ?> usemap="#workmap" <?php } else if($img->slider_id == 55){ ?> usemap="#workmapa" <?php } else { ?> usemap="" <?php } ?> src="<?php echo base_url() ?>public/uploads/admin/sliders/<?php echo $img->name;?>" alt="" style="width:100%;">
      </div>
<?php }  }  }?>
     
    </div>

    <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
   
      
