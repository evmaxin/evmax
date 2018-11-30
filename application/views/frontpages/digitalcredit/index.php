
<section style="margin-bottom: 20px;">

     <?php 
if(isset($sliderImages)) { 
    $k=0;
  foreach ($sliderImages as $img) {
         if($img->slider_category_id==13){ ?>
           <img src="<?php echo base_url() ?>public/uploads/admin/sliders/<?php echo $img->name;?>" class="img-responsive">
            
            <?php $k++;} if($k==1){break;} } }?>
			
		</section>

