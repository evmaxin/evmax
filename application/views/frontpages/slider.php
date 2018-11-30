<style>
   .glyphicon {
  position: relative;
  top: 1px;
  display: inline-block;
  font-family: 'Glyphicons Halflings';
  font-style: normal;
  font-weight: 400;
  line-height: 1;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
.glyphicon-chevron-left:before {
  content: "\e079";
}
    </style>
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
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    
    </ol>
         <?php 
/*
if(isset($sliderImages)) { 
        foreach ($sliderImages as $img1) {
         if($img1->slider_category_id == 1){
            // echo $img1->slider_id;
             //echo $img1->display_order;
             if($img1->display_order == 0){
                 $slider_value1 =$img1->slider_id;
                 break;
             }else
             {
                 $slider_value1 =$img1->slider_id;
                 break;
             }
            
             
         }
    }
    foreach ($sliderImages as $img) {
         if($img->slider_category_id == 1){
        ?>
      <li data-target="#myCarousel" data-slide-to="<?php echo $img->slider_id; ?>" class="<?php if($img->slider_id === $slider_value1){ echo 'active';} ?>"></li>
      
    <?php 

         } }   } */?>
    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <?php 
//echo "<pre>";print_r($sliderImages);
if(isset($sliderImages)) { 
    foreach ($sliderImages as $img1) {
         if($img1->slider_category_id == 1){
            // echo $img1->slider_id;
             //echo $img1->display_order;
             if($img1->display_order == 1){
                 $slider_value =$img1->slider_id;
                 break;
             }else
             {
                 $slider_value =$img1->slider_id;
                 break;
             }
             //for showing active slider
             
         }
    }
   //echo $slider_value;
     foreach ($sliderImages as $img) {
          //$i=1;
         if($img->slider_category_id==1){
             //echo $i;
           // echo "<pre>"; print_r($img);$sorted = array_orderby();
    ?>
      <div class="item <?php if($img->slider_id === $slider_value){ echo 'active';} ?>">
          <a target="<?php echo $img->link_url?'_blank':'';?>" href="<?php echo $img->link_url?$img->link_url:'#';?>"><img src="<?php echo base_url() ?>public/uploads/admin/sliders/<?php echo $img->name;?>" alt="" style="width:100%;"></a>
      </div>
<?php //$i++;

      } }   }?>
     
    </div>

    <!-- Left and right controls -->
  <!--<a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only"><<</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">>></span>
    </a>-->
  </div>
</div>
   
      
