    <?php  
//echo "<pre>";print_r($products);
?>
<div class="page-content">
    
        <h1 class="page-title"> Battery Edit
                        </h1>
                        <!-- END PAGE TITLE-->
                        <!-- END PAGE HEADER-->
                        <div class="row">
                            <div class="col-md-12">
                                
                                    <div class="portlet">
                                        <div class="portlet-title">
                                            <div class="caption">
                                                <i class="fa fa-shopping-cart"></i><?php echo ($products[0]->name)?$products[0]->name:'';?> </div>
                                          
                                        </div>
                                        <div class="portlet-body">
                                            <div class="tabbable-bordered">
                                                <ul class="nav nav-tabs">
                                                    <li class="active">
                                                        <a href="#tab_1" data-toggle="tab"> General </a>
                                                    </li>
                                                    
                                                    <li>
                                                        <a href="#tab_2" data-toggle="tab"> Images </a>
                                                    </li>
                                                    <li>
                                                        <a href="#tab_3" data-toggle="tab"> Meta Data </a>
                                                    </li>
                                                   
                                                   
                                                </ul>
                                                <div class="tab-content" style="width: 100%;">
                                                    <div class="tab-pane active" id="tab_1" style="">
                                                        <div class="form-body">
                                                            <form action="<?php echo base_url();?>admin/Battery/update/<?php echo ($products[0]->battery_id)?$products[0]->battery_id:0;?>" method="post" enctype="multipart/form-data" id="addproduct">
		
                                                                  <div class="form-group padding-bottom-40">
                                                                <label class="col-md-2 control-label">Name:
                                                                    <span class="required"> * </span>
                                                                </label>
                                                                <div class="col-md-10">
                                                                    <input class="form-control" type="text" name="name" id="name" value="<?php echo ($products[0]->name)?$products[0]->name:'';?>" required readonly /> </div>
                                                            </div>
                                                   
                                                                 <div class="form-group padding-bottom-40">
                                                                <label class="col-md-2 control-label">Category:
                                                                    <span class="required"> * </span>
                                                                </label>
                                                                <div class="col-md-10">
                                                                    <select name="category" id="category" class="form-control">
  
                                                     
 <?php foreach($categories as $cat): 
              ?>
			
			 
                <option class="cat_level3" value="<?php  echo $cat->category_id;?>" <?php if($cat->category_id == $products[0]->category_id){ echo "selected";}?>>  <?php  echo "<span class=''>------- </span>".$cat->category_name;?>    </option>
             
			  
			 
          
          <?php endforeach;?>
 
   </select>
                                                                    
                                                                </div>
                                                            </div>
                                                              
                                                  
            
                                                                <div class="form-group mb30">
                                                                <label class="col-md-2 control-label">Actual price::
                                                                    <span class="required"> * </span>
                                                                </label>
                                                                <div class="col-md-10 mb30">
                                                                    <input type="text" class="form-control" name="actual_price" id="actual_price" value="<?php echo ($products[0]->actual_price)?$products[0]->actual_price:'';?>" required/>
                                                                    </div>
                                                            </div>
                                                                   <div class="form-group mb30">
                                                                <label class="col-md-2 control-label">Offer price
                                                                    <span class="required"> * </span>
                                                                </label>
                                                                <div class="col-md-10 mb30">
                                                                    <input type="text" class="form-control" name="offer_price" id="offer_price" value="<?php echo ($products[0]->offer_price)?$products[0]->offer_price:'';?>" required/>
                                                                    </div>
                                                            </div>
                                                              
              
                                                                <div class="form-group mb30" >
                                                                <label class="col-md-2 control-label" id="tab<?php echo $products[0]->battery_id; ?>">Inventory
                                                                    <span class="required"> * </span>
                                                                </label>
                                                                <div class="col-md-10 mb30">
                                                                  <input type="text" class="form-control" name="inventory" id="inventory" value="<?php echo ($products[0]->inventory)?$products[0]->inventory:0;?>" required/>
                                                                    </div>
                                                            </div>
               
               
               
                                                            <div class="form-group mb30">
                                                                <label class="col-md-2 control-label">Description:
                                                                    <span class="required"> * </span>
                                                                </label>
                                                                <div class="col-md-10 mb30">
                                                                    <textarea class="form-control" name="full_description" id="full_description" required><?php echo ($products[0]->full_description)?$products[0]->full_description:'';?></textarea>
                                                                    
                                                                </div>
                                                            </div>
                                                                <div class="form-group">
                                                                
                                                                <div class="col-md-10 mb30">
                                                                    <input type="hidden" name="target_tab" id="target_tab" value="1">
                                                                    <input class="btn btn-success" type="submit" name="update" value="save"/>
                                                                    
                                                                </div>
                                                            </div>
                                                                
                                      
		</form>
                                                          
                                                           
                                                            
                                                            
                                                           
                                                         
                                                                                                                      
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="tab-pane" id="tab_2">
                                                        <div class="alert alert-success margin-bottom-10">
                                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                                                            <i class="fa fa-warning fa-lg"></i> Image type and information need to be specified. </div>
																
																<h5 > <b>Upload Main Image </b> </h5>  
                                                         <form action="<?php echo base_url();?>admin/Battery/updateProductImages" method="post" enctype="multipart/form-data" id="addproduct1">
                                                        <div id="tab_images_uploader_container" class="text-align-reverse margin-bottom-10">
                                                            
                                                       
                                                    <input type="file" name="userfile[]" multiple id="userfile" class="btn btn-primary" style="float: left;margin-right:50px;"> 
                                                   <input type="hidden" name="target_tab" id="target_tab" value="2">        
                                                    <input type="hidden" name="product_id" id="product_id" value="<?php echo ($products[0]->battery_id)?$products[0]->battery_id:0;?>">
                                                        <input type="submit" name="submit" class="btn btn-primary pull-left">
                                                        </div>
                                                             </form>
															<br style="clear:both">	<br/>
                                                        <div class="row">
                                                            <div id="tab_images_uploader_filelist" class="col-md-6 col-sm-12"> </div>
                                                        </div>
                                                            <?php if($products[0]->image_path !='') {?>
                                                        <table class="table table-bordered table-hover table-responsive">
                                                            <thead>
                                                                <tr role="row" class="heading">
																  
                                                                   <!-- <th width="1%">Delete</th> -->
                                                                     <th width="8%" align="center"> Image </th>
                                                                     <?php if($this->session->userdata('admin_data')['admin_id']==1) {?>
                                                                      <th width="1%" align="center"> Upload Sub Images </th>
                                                                     
																	  <th width="1%" align="center"> Options </th>
										<?php } ?>							  
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php 
																
																
																 $adminApproved = explode(',', $products[0]->admin_uploaded);
                                                                   
																// $childImage = explode(',', $products[0]->childImage);
                                                              
																//print_r($adminApproved);
																 
                                                               //echo $products[0]->image_path."----";exit;
                                                                    $imageArray = explode(',', $products[0]->image_path);
                                                                    //if($products[0]->image_ids==''){
                                                                    $image_ids = explode(',', $products[0]->image_ids);
                                                                    //}
                                                                 $i=1;
                                                                   $img=0; 
																   $imgAP=0;
																  
																       foreach ($imageArray as $image) {
                                                                       if(isset($imageArray) && count($imageArray>0)){
                                                                        
                                                                       ?>
                                                                <tr>
																  
                                                                   <!-- 
																   <td>
                                                                         <input type="checkbox" name="image_ids[]" id="<?php echo"imag".$img;?>" id="<?php echo"image".$img;?>"  value="<?php echo $image_ids[$img]; ?>"> <label for="<?php echo"imag".$img;?>">Image  <?php echo$img+1; ?>
                                                                    </td>
																	-->
                                                                    <td>
																	<?php //print_r($imageArray);?>
																	<div class="col-sm-3">
                                                                                <a href="<?php echo base_url();?>public/uploads/admin/battery/<?php if($image != ''){  echo $image; } else { echo 'no_image.png'; } ?>" class="fancybox-button" data-rel="fancybox-button">
                                                                                <img class="img-responsive" src="<?php echo base_url();?>public/uploads/admin/battery/<?php if($image != ''){  echo $image; } ?>" alt="<?php echo ($products[0]->name)?$products[0]->name:'';?>" style="width: 100%;display:inline-block;"> </a>
																			
																	</div>	
                                                               <div class="col-sm-9">																	
																			     <h5 title='subImages' class='displayImages'  style="padding:3px;margin-top:6px;color:black;" data-id='<?php echo $image_ids[$img];?>' > Sub Images </h5>			
																        
																			<?php
																		
																			   foreach ($childImage as $subImage) {
																				  
																				 if($subImage["childImage"]==$image_ids[$img])
																				 {
																				  ?>
                                                                                    <a href="<?php echo base_url();?>public/uploads/admin/battery/<?php if($subImage["image_path"] != ''){  echo $subImage["image_path"]; } ?>" class="fancybox-button" data-rel="fancybox-button">
                                                                                       <img class="img-responsive subimageEdit" src="<?php echo base_url();?>public/uploads/admin/battery/<?php if($subImage["image_path"] != ''){  echo $subImage["image_path"]; } ?>" alt="<?php echo ($products[0]->name)?$products[0]->name:'';?>" 
																					
																					<?php if($subImage["make_primary"]==1)
																						
																					{
																						   echo "style='border:2px solid blue;width: 50px;height:50px'";
																					}
																					else{
																						 echo "style='width:50px;height:50px;'";
																					}
																					
																					?>
																					
																					   > </a>
																		         
																					</a> 
																					
																					   <input type="radio" name="image_idsSet" class="image_idsSet" id="<?php echo $subImage["image_id"];?>"  value=" <?php echo $subImage["image_id"];?>" <?php if($subImage["make_primary"]==1)
																						
																					{
																						   echo "disabled";
																					}
																					?> >   <label for="<?php echo $subImage["image_id"];?>" style="display:inline-block;">Image  <?php echo$img+$i; $i++;?></label>
                                                                         
																	  
																					
																					
																					<?php if($subImage["make_primary"]==1)
																						
																					{
																					 ?>	
																						
																					    <input type="hidden" name="oldSetPrimaryImage" class="oldSetPrimaryImage"  id="<?php echo $subImage["image_id"];?>"  value="<?php echo $subImage["image_id"];?>">  
                                                                         
																					<?php
																					}
																					
																					?>
																					
																					
																					
																					
																					
																					
																				<?php	
																				
																				
																				
																				 }
																				 else{
																					 echo"";
																				 }
																			  }
																			?>
                                                                        
																			</div>
                                                                    </td>
                                                                    <?php if($this->session->userdata('admin_data')['admin_id']==1) {?>
																    <td>
                                                                      <br/>   <br/>
													  <form action="<?php echo base_url();?>admin/Battery/updateProductImages" method="post" enctype="multipart/form-data" id="addproduct1" >
                                                        <div id="tab_images_uploader_container" class="text-align-reverse margin-bottom-10 text-center">
                                                            <input type="file" name="userfile[]" multiple id="userfile" class="btn subImageUpload" required> 
                                                           <input type="hidden" name="target_tab" id="target_tab" value="2">   
                                                         <input type="hidden" name="childImage" id="childImage" value="<?php echo $image_ids[$img]; ?>">    														   
                                                           <input type="hidden" name="product_id" id="product_id" value="<?php echo ($products[0]->battery_id)?$products[0]->battery_id:0;?>">
														   <br style="clear:both;">  <br style="clear:both;">
                                                          <input type="submit" name="submit" class="btn subImageUpload ">
                                                        </div>
                                                             </form>
															 
															 
                                                                    </td>
                                                                    
                                                                    <td align="center">
																	<br/> <br/>
                                                                        <?php //echo $this->session->userdata('admin_data')['store_id']; ?>
                                                                         <a download href="<?php echo base_url();?>public/uploads/admin/battery/<?php if($image != ''){  echo $image; } ?>" alt="<?php echo ($products[0]->name)?$products[0]->name:'';?>" class=' marginleft  green btn ' >
                                                                            Download </a>
																			
<br/> <br/>

													          <?php
															  if($adminApproved[$img]==0)
															  {
															  ?>
																    <a title='Activate' class='image_id marginleft activate green btn ' style="background:green;" data-type='activate' data-pname='<?php echo ($products[0]->battery_id)?$products[0]->battery_id:0;?>' data-id='<?php echo $image_ids[$img];?>' data-name="Image <?php echo$img+1; ?>"> Activate </a>			
																		
																		
																  
														     <?php  
															  }else{
																  ?> 
																    <a title='Deactivate' class='image_id marginleft activate  red btn ' data-type='Deactivate' data-pname='<?php echo ($products[0]->battery_id)?$products[0]->battery_id:0;?>' data-id='<?php echo $image_ids[$img];?>' data-name="Image <?php echo$img+1; ?>"> Deactivate </a>			
																	
																  
															 <?php    }	
															  ?>
																	
																      	 	
																			
                                                                    </td>
                                                                    
                                                                    <?php } ?>
                                                                    
                                                                </tr>
                                                                   <?php  $img++; 
																    $imgAP=$imgAP++;
																   } } ?>
                                                                <?php  if(isset($imageArray) && count($imageArray>0)){
                                                                       ?>
                                                                 <tr>
                                                                     <!--
                                                                     <td >
                                                                        </td>
                                                                    -->
                                                                     <!--   
                                                                     <td colspan="2">
                                                                         <input type="submit" name="all_image_ids" id="all_image_ids" value="Delete Checked" class="btn btn-primary">
                                                                    </td>
                                                                    
                                                                    -->
                                                                </tr>
                                                                <?php } ?>
																
																<?php if($this->session->userdata('admin_data')['admin_id']==1) {?>
																			
																 <tr role="row" class="heading">
																 
																   <td  colspan="2">
                                                                    <p class="pull-right" style="margin-top:10px;"> Please select any one primary image for display in  front Page.
                                                                      </p>
																	  </td>
																	<td class="text-center" colspan="1">
																	
                                                                        <input type="buttton" name="all_image_idsSet" id="all_image_idsSet" value="Set Primary Image" class="btn btn-primary pull-left">
                                                                   
                                                                  
                                                                     
                                                                       <!--  <input type="submit" name="all_image_ids" id="all_image_ids" value="Delete Checked" class="btn btn-primary"> -->
                                                                    </td>
                                                                    
                                                                </tr>
																 <?php }?>
                                                                   
                                                            </tbody>
                                                        </table>
                                                            <?php }?>
															
															
																					
																				
                                                    </div>
                                                     <div class="tab-pane metadata" id="tab_3">
                                                        <div class="form-body">
                                                            <form action="<?php echo base_url();?>admin/Product/updateMetaTags/<?php echo ($products[0]->battery_id)?$products[0]->battery_id:0;?>" method="post" enctype="multipart/form-data" id="addproduct">
		
                                                                  <div class="form-group padding-bottom-40">
                                                                <label class="col-md-2 control-label">Meta Title:
                                                                    <span class="required"> * </span>
                                                                </label>
                                                                <div class="col-md-10">
                                                                    <input class="form-control" type="text" name="title" id="title" value="<?php echo ($products[0]->meta_title)?$products[0]->meta_title:'';?>" /> </div>
                                                            </div>
                                                    <div class="form-group padding-bottom-40">
                                                                <label class="col-md-2 control-label">Meta Keywords:
                                                                    <span class="required"> * </span>
                                                                </label>
                                                                <div class="col-md-10">
                                                                   <input class="form-control" type="text" name="keywords" id="keywords" value="<?php echo ($products[0]->meta_keywords	)?$products[0]->meta_keywords:'';?>" />
                                                                </div>
                                                            </div>
                                                                 
                                                
            
                                                               
                                    
               
               
               
                                                            <div class="form-group mb30">
                                                                <label class="col-md-2 control-label">Meta Description:
                                                                    <span class="required"> * </span>
                                                                </label>
                                                                <div class="col-md-10 mb30">
                                                                    <textarea class="form-control" name="description" id="description" ><?php echo ($products[0]->meta_description)?$products[0]->meta_description:'';?></textarea>
                                                                    
                                                                </div>
                                                            </div>
                                                                <div class="form-group">
                                                                
                                                                <div class="col-md-10 mb30">
                                                                    <input type="hidden" name="target_tab" id="target_tab" value="1">
                                                                    <input class="btn btn-success" type="submit" name="update" value="save"/>
                                                                    
                                                                </div>
                                                            </div>
                                                                
                                      
		</form>
                                                          
                                                           
                                                            
                                                            
                                                           
                                                         
                                                                                                                      
                                                        </div>
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        
                        
                        <!-- tabs end-->
 
    </div>



<script type="text/javascript">
 
function checkChecked(formname) {
    var anyBoxesChecked = false;
    $('#' + formname + ' input[type="checkbox"]').each(function() {
        if ($(this).is(":checked")) {
            anyBoxesChecked = true;
        }
    });
 
    if (anyBoxesChecked == false) {
      alert('Please select at least one Attribute like Size,Color etc..');
      return false;
    } 
}


    $('body').on('click', '.image_id', function () {
        var image_id = $(this).data('id');
        var product_id = $(this).data('pname');
		var imageName=$(this).data('name');
	  //  alert(imageName);
	  
	 
        var type = $(this).data('type');
        var alertval="";
        //var flg="";
        alertval = (type==="activate")?"Activate ":"Deactivate ";
        var answer = confirm('Are you sure you want to '+ alertval  + imageName + ' ?');

        if (answer)
        {
            $.ajax({
                type: "POST",
                url: "<?= base_url(); ?>admin/Ajax/AdminApproveImage",
                data: {'image_id': image_id,'product_id': product_id,'typeofAction': type},
                success: function (response) {
               // alert(response);
                    if (response) {
                        location.reload();
                        //$('.p10').parent('tr').remove();
                        //alert('ok');
                        // $('#custom_attributes').html(response); 
                    } else {

                    }
                }
            });
			
			//alert("yes");
        } else
        {
            alert('Product Not Deleted');
        }
		
    });
	
	     var image_idsSet1=0;
		
		$(".image_idsSet").change(function(){
			
		    image_idsSet1=$(this).val();
		
		});
	
		 $('body').on('click', '#all_image_idsSet', function () {
        var oldSetPrimaryImage = $(".oldSetPrimaryImage").val();
	    var product_id = $("#product_id").val();
	   //alert(product_id);
		//alert(oldSetPrimaryImage);
       
	  if(image_idsSet1==0)
	  {
		  	 alert("Please select  primary  image ");
			 return false;
	  }
	  else{
		  //  alert(image_idsSet1);
	  }


	 
       

        if (true)
        {
            $.ajax({
                type: "POST",
                url: "<?= base_url(); ?>admin/Battery/destroyImages/"+product_id+"",
                data: {'oldSetPrimaryImage': oldSetPrimaryImage,'product_id': product_id,'all_image_idsSet': 'set primary image','image_idsSet':image_idsSet1},
                success: function (response) {
              //alert(response);
                    if (response) {
                       location.reload();
                        //$('.p10').parent('tr').remove();
                        //alert('ok');
                        // $('#custom_attributes').html(response); 
                    } else {

                    }
                }
            });
			
			//alert("yes");
        } else
        {
            alert('Product Not Deleted');
        }
		
		
    });
	

</script>