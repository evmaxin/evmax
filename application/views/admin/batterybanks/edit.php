    <?php  
//echo "<pre>";print_r($products);
?>
<div class="page-content">
    
        <h1 class="page-title"> Edit
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
                                                    
                                                  
                                                   
                                                   
                                                </ul>
                                                <div class="tab-content" style="width: 100%;">
                                                    <div class="tab-pane active" id="tab_1" style="">
                                                        <div class="form-body">
                                                            <form action="<?php echo base_url();?>admin/BatteryBanks/update/<?php echo ($products[0]->id)?$products[0]->id:0;?>" method="post" enctype="multipart/form-data" id="addproduct">
		
                                                                                                <div class="form-group padding-bottom-40">
                                                                <label class="col-md-2 control-label">Name:
                                                                    <span class="required"> * </span>
                                                                </label>
                                                                <div class="col-md-10">
                                                                    <input class="form-control" type="text" name="name" id="name" value="<?php echo ($products[0]->name)?$products[0]->name:'';?>" required readonly /> </div>
                                                            </div>
                                                                    <div class="form-group padding-bottom-40">
                                                                <label class="col-md-2 control-label">Latitude :
                                                                    <span class="required"> * </span>
                                                                </label>
                                                                <div class="col-md-10">
                                                                    <input class="form-control" type="text" name="lat" id="lat" value="<?php echo ($products[0]->lat)?$products[0]->lat:'';?>" required /> </div>
                                                            </div>
                                                                    <div class="form-group padding-bottom-40">
                                                                <label class="col-md-2 control-label">Longitude :
                                                                    <span class="required"> * </span>
                                                                </label>
                                                                <div class="col-md-10">
                                                                    <input class="form-control" type="text" name="lang" id="lang" value="<?php echo ($products[0]->lng)?$products[0]->lng:'';?>" required  /> </div>
                                                            </div>
                                                                  <div class="form-group mb30">
                                                                <label class="col-md-2 control-label">Address:
                                                                    <span class="required"> * </span>
                                                                </label>
                                                                <div class="col-md-10 mb30">
                                                                    <textarea name="address" id="address" required class="form-control"><?php echo ($products[0]->address)?$products[0]->address:'';?></textarea>
                                                                    
                                                                </div>
                                                            </div>
                                                   
                                                                 <div class="form-group padding-bottom-40">
                                                                <label class="col-md-2 control-label">Category:
                                                                    <span class="required"> * </span>
                                                                </label>
                                                              
                                                        <div class="col-md-10">
                                                                    <select name="category" id="category" class="form-control">
  
                                                     
 <?php foreach($categories as $cat): 
              ?>
			
			 
                <option class="cat_level3" value="<?php  echo $cat->category_id;?>" <?php if($cat->category_id == $products[0]->cat_id){ echo "selected";}?>>  <?php  echo "<span class=''>------- </span>".$cat->category_name;?>    </option>
             
			  
			 
          
          <?php endforeach;?>
 
   </select>
                                                                    
                                                                </div>
                                                            </div>
                                                              
                                                  
            
                                                                <div class="form-group mb30">
                                                                <label class="col-md-2 control-label">MRP:
                                                                    <span class="required"> * </span>
                                                                </label>
                                                                <div class="col-md-10 mb30">
                                                                    <input type="text" class="form-control" name="actual_price" id="actual_price" value="<?php echo ($products[0]->price)?$products[0]->price:'';?>" required/>
                                                                    </div>
                                                            </div>
                                                                   <div class="form-group mb30">
                                                                <label class="col-md-2 control-label">Selling Price:	
                                                                    <span class="required"> * </span>
                                                                </label>
                                                                <div class="col-md-10 mb30">
                                                                    <input type="text" class="form-control" name="offer_price" id="offer_price" value="<?php echo ($products[0]->selling_price)?$products[0]->selling_price:'';?>" required/>
                                                                    </div>
                                                            </div>
                                                              
              
                                                                 <div class="form-group mb30">
                                                                <label class="col-md-2 control-label">Valid From Date
                                                                    <span class="required"> * </span>
                                                                </label>
                                                                <div class="col-md-10 mb30">
                                                                    <input type="text" class="form-control" name="valid_from" id="valid_from" value="<?php echo ($products[0]->valid_from)?$products[0]->valid_from:'';?>" />
                                                                    </div>
                                                            </div>
                                                                    <div class="form-group mb30">
                                                                <label class="col-md-2 control-label">Valid To
                                                                    <span class="required"> * </span>
                                                                </label>
                                                                <div class="col-md-10 mb30">
                                                                    <input type="text" class="form-control" name="valid_to" id="valid_to" value="<?php echo ($products[0]->valid_to)?$products[0]->valid_to:'';?>" required/>
                                                                    </div>
                                                            </div>
               
               
               
                                                            <div class="form-group mb30">
                                                                <label class="col-md-2 control-label">Description:
                                                                    <span class="required"> * </span>
                                                                </label>
                                                                <div class="col-md-10 mb30">
                                                                    <textarea class="form-control" name="full_description" id="full_description" required><?php echo ($products[0]->notes)?$products[0]->notes:'';?></textarea>
                                                                    
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
                url: "<?= base_url(); ?>admin/Product/destroyImages/"+product_id+"",
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