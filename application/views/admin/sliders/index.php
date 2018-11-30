
<div class="page-content">
      <div class="row">
        <div class="col-md-12 padding-bottom-20">
          <div class="btn-group col-md-4"> <a id="" class="btn green" data-target="#addNew" data-toggle="modal" > Add New <i class="fa fa-plus"></i> </a>   </div> 

      

        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="portlet box blue">
            <div class="portlet-title">
              <div class="caption"> <i class="icon-user-follow"></i>Image</div>
              <div class="tools"> <a href="javascript:;" class="collapse"> </a> </div>
            </div>
            <div class="portlet-body">
              <div class="table-toolbar"> </div>
                  <?php if($this->session->userdata("productBanners") == 1){ $cat_lable= "Product Category Name"; } else { $cat_lable= "Image Category Name";} ?>
        <table id="table" class="table table-striped table-hover table-bordered display" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>S.No</th>
                    <th>Image</th>
                   
                    <th><?php echo $cat_lable; ?></th>
                     <?php if($this->session->userdata("productBanners") == 1){?>
                    <th> Product Banner Type</th>
                     <?php } ?>
                     <th>Store Name</th>
                     <th>Display Order</th>
                      <th>Linked URL</th>
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
                    <h4 class="modal-title">Add Image</h4>
                  </div>
                  <div class="modal-body">
                       <?php if($this->uri->segment('3') !== "productBanners") {?>
                   <div class="form-group">
                  <label class="control-label">Slider Category <span class="required"> * </span>  <a href="#" data-toggle="tooltip" title="If you are store owner,please select store banner"><i class='glyphicon glyphicon-info-sign'></i></a></label>
                 <select name="slider_category" id="slider_category" class="form-control">
		<?php foreach($slidercategories as $category):?>
                   
		<option value="<?php  echo $category->slider_category_id;?>"><?php  echo $category->category_name;?></option>
                   
		<?php endforeach;?>
		</select>
                                                

                </div>
                       <?php }else{ ?>
                       <div class="form-group">
                  <label class="control-label">Product Category <span class="required"> * </span>  </label>
                  <select name="product_category" id="product_category" class="form-control" required>
		<?php foreach($productcategories as $category):?>
                   
		<option value="<?php  echo $category->category_id;?>"><?php  echo $category->category_name;?></option>
                   
		<?php endforeach;?>
		</select>
                                                
                  <input type="hidden" name="product_banner" id="product_banner" value="1">
                </div>
                            <div class="form-group">
                  <label class="control-label">Product Category <span class="required"> * </span>  </label>
                  <select name="product_banner_type_id" id="product_banner_type_id" class="form-control" required>
		<?php foreach($product_banner_type as $type):?>
                   
		<option value="<?php  echo $type->product_banner_type_id;?>"><?php  echo $type->name;?></option>
                   
		<?php endforeach;?>
		</select>
                                                
                 
                </div>
                      
                       <?php } ?>
                         <div class="form-group">
                      <label class="control-label">Images <span class="required"> * </span> <a href="#" data-toggle="tooltip" title="Please select image for store banner or logo"><i class='glyphicon glyphicon-info-sign'></i></a></label>
                        <input type="file" name="userfile[]" id="userfile" required class="form-control" />
                        </div>
                     <?php if(isset($this->session->userdata('admin_data')['store_id']) && ($this->session->userdata('admin_data')['store_id']==1)){?>
                      <div class="form-group">
                  <label class="control-label">Display Order</label>
                  <input type="text" name="order" id="order" class="form-control" onkeypress="return isNumber(event)">
                                                

                </div>
                   
                   
                  
                       <div class="form-group">
                  <label class="control-label">Link image to URL<a href="#" data-toggle="tooltip" title="Hypyer link to image"><i class='glyphicon glyphicon-info-sign'></i></a></label>
                  <input type="text" name="link_url" id="link_url" class="form-control">
                                                

                </div>
                          <div class="form-group">
                  <label class="control-label">Image Caption</label>
                  <input type="text" name="caption" id="caption" class="form-control">
                                                

                </div>
                        <?php } ?>
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