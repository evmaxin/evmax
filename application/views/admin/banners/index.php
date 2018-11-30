<div class="page-content">
      <div class="row">
        <div class="col-md-12 padding-bottom-20">
          <div class="btn-group col-md-4"> <a id="" class="btn green" data-target="#addNew" data-toggle="modal" > Add New <i class="fa fa-plus"></i> </a> </div>

      

        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="portlet box blue">
            <div class="portlet-title">
              <div class="caption"> <i class="icon-user-follow"></i>Sliders</div>
              <div class="tools"> <a href="javascript:;" class="collapse"> </a> </div>
            </div>
            <div class="portlet-body">
              <div class="table-toolbar"> </div>
                 
        <table id="table" class="table table-striped table-hover table-bordered display" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>S.No</th>
                    <th>Banners Image</th>
                   <th>Display Order</th>
                    <th>Operations</th>
                    
                </tr>
            </thead>
            <tbody>
            </tbody>

           
        </table>
             
            </div>
              <form action="<?php echo base_url();?>admin/sliders/add" method="post" enctype="multipart/form-data" id="addproduct">
            <div id="addNew" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
              <div class="modal-dialog modal-dialog-confirm">
                <div class="modal-content ">
                  <div class="modal-header"> <a type="button" class="close" data-dismiss="modal" aria-hidden="true"></a>
                    <h4 class="modal-title">Add Banner</h4>
                  </div>
                  <div class="modal-body">
                  
                      <div class="form-group">
                  <label class="control-label">Display Order</label>
                  <input type="text" name="order" id="order" class="form-control" onkeypress="return isNumber(event)">
                                                

                </div>
                      <div class="form-group">
                      <label class="control-label">Slider Images <span class="required"> * </span></label>
                        <input type="file" name="userfile[]" id="userfile" required multiple class="form-control" />
                        <small>Multiple upload allowed</small>                       
                       </div>
                   <div class="form-group">
                                                  <label class="control-label">Image link to Category</label>
                                                  
                                                  
                                                  <select name="category" id="category" class="form-control">
                                                      <option value="">Select</option>
        <?php foreach($categories as $category): ?>
	<?php if($category->parent_id ==0) { ?>
                                                      <optgroup  class="cat_level1" label="<?php echo $category->category_name;?>" value="<?php  echo $category->category_id;?>">
 <?php foreach($categories as $cat): 
              if($category->category_id==$cat->parent_id) { ?>
			  <option class="cat_level2" value="<?php  echo $cat->category_id;?>">  <?php  echo "&nbsp;&nbsp;<span class=''>&#8627; </span>".$cat->category_name;?>    </option>
			   <?php foreach($categories as $subcat): 
                    if($cat->category_id==$subcat->parent_id) { ?>
                <option class="cat_level3" value="<?php  echo $subcat->category_id;?>">  <?php  echo "&nbsp;&nbsp;<span class=''>------- </span>".$subcat->category_name;?>    </option>
             <?php } endforeach;?>
			  
			  <?php }  ?> 
          
          <?php endforeach;?>
  </optgroup> 
      <?php  
	}
	endforeach;?>
                                                     
   </select>
                                       
 
                                                

                                              </div>
                  </div>
                  <div class="form-actions modal-footer"> 
                      <input type="submit"  class="btn blue" name="submit" value="submit"/>
                      <button class="btn default" data-dismiss="modal">Close</button>
                    
                </div>
              </div>
            </div>
            </div>
                  </form>
       
          </div>
        </div>
      </div>
    </div>
<script type="text/javascript">
              $('body').on('click','.delete',function(){
         var id = $(this).data('id');
         var name = $(this).data('name');
         var cname = $(this).data('cname');
         var answer = confirm('Are you sure you want to delete '+name+' in '+cname+' ?');
         
if (answer)
{
      $.ajax({
      type: "POST",
      url: "<?=base_url();?>admin/Ajax/deleteSliderImages",   
      data: {'id':id},
      success: function (response) {
         
             if(response){
                 location.reload();
             // $("#demo").load(location.href + " #demo");
           } else{
             
           }
      }
 });
}
else
{
  alert('Slider Not Deleted');
}
        }); 
    </script>