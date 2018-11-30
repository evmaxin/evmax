<div class="page-content">
    <?php if(isset($this->session->userdata('admin_data')['store_id']) && ($this->session->userdata('admin_data')['store_id']==1)){?>
      <div class="row">
        <div class="col-md-12 padding-bottom-20">
          <div class="btn-group col-md-4"> <a id="" class="btn green" data-target="#addNew" data-toggle="modal" > Add New <i class="fa fa-plus"></i> </a> </div>

          <?php if($this->session->flashdata('message')){ ?> 
              <div class="alert alert-success alert-dismissable col-md-4"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
              <?php  echo $this->session->flashdata('message');?>
          </div>
          <?php } ?>

        </div>
      </div>
    <?php } ?>
      <div class="row">
        <div class="col-md-12">
          <div class="portlet box blue">
            <div class="portlet-title">
              <div class="caption"> <i class="icon-user-follow"></i>Attributes</div>
              <div class="tools"> <a href="javascript:;" class="collapse"> </a> </div>
            </div>
            <div class="portlet-body">
              <div class="table-toolbar"> </div>
                 
        <table id="table" class="table table-striped table-hover table-bordered display" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>S.No</th>
                    <th>Attribute Type</th>
                    <th>Attributes</th>
                     <?php if(isset($this->session->userdata('admin_data')['store_id']) && ($this->session->userdata('admin_data')['store_id']==1)){?>
                    <th>Operations</th>
                     <?php } ?>
                    
                </tr>
            </thead>
            <tbody>
            </tbody>

           
        </table>
             
            </div>
              <form action="<?php echo base_url(); ?>admin/Attributes/add" method="post">
                  <div id="addNew" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-confirm">
                          <div class="modal-content ">
                              <div class="modal-header"> <a type="button" class="close" data-dismiss="modal" aria-hidden="true"></a>
                                  <h4 class="modal-title">Add Attribute</h4>
                              </div>
                              <div class="modal-body">

                                  <div class="form-body">
                                      <div class="row">
                                          <div class="col-md-12">
                                              <div class="form-group">
                                                  <label class="control-label">Attribute Type <span class="required">*</span></label>
                                                  <select name="attribute_type" id="attribute_type"  class="form-control" required>
                                                      <option value="">Select</option>
                                                      <?php foreach ($attributetype as $type): ?>
                                                          <option value="<?php echo $type->attribute_type_id; ?>"><?php echo $type->attribute_type; ?></option>
                                                      <?php endforeach; ?>
                                                  </select>

                                              </div>
                                              <input type="hidden" name="categorytype_id" value="1"><!-- Here 1 means fashion,  Manually entering the category type, need to enable below code if we need mulitple category types like fashion,footwear -->
                                             <!-- <div class="form-group">
                                                  <label class="control-label">Category Type <span class="required">*</span> </label>
                                                  <select name="categorytype_id" id="categorytype_id" class="form-control" required>
                                                      <option value="">Select</option>
                                                      <?php //foreach ($categories_types as $type): ?>
                                                          <option value="<?php //echo $type->category_type_id; ?>"><?php //echo $type->category_type; ?></option>
                                                      <?php //endforeach; ?>
                                                  </select>

                                              </div>-->
                                                                              <div class="form-group">
                                                                                  <input type="hidden" name="category_id" value="0">
                                                                                  <label class="control-label">For which Categories? <span class="required">*</span></label>
                                                                                  <select name="category_ids[]" id="category_ids" class="form-control" multiple required>
                                                                      
        <?php foreach($categories as $category): ?>
	<?php if($category->parent_id ==0) { ?>
                                                       <option  class="cat_level0" style="font-size:14px;"  value="<?php  echo $category->category_id;?>"><?php echo $category->category_name;?></option>
 <!--<?php foreach($categories as $cat): 
              if($category->category_id==$cat->parent_id) { ?>
			  <option class="cat_level2" value="<?php  echo $cat->category_id;?>">  <?php  echo "&nbsp;&nbsp;<span class=''>&#8627; </span>".$cat->category_name;?>    </option>
			   <?php foreach($categories as $subcat): 
                    if($cat->category_id==$subcat->parent_id) { ?>
                <option class="cat_level3" value="<?php  echo $subcat->category_id;?>">  <?php  echo "&nbsp;&nbsp;<span class=''>------- </span>".$subcat->category_name;?>    </option>
             <?php } endforeach;?>
			  
			  <?php }  ?> 
          
          <?php endforeach;?> -->
                                                    
      <?php  
	}
	endforeach;?>
                                                      
   </select>
                                                                                  <small>Multiple selection allowed</small>
                                                 

                                              </div>
                                              <div class="form-group">
                                                  <label class="control-label">Attribute Name <span class="required">*</span></label>
                                                  <input type="text" name="attribute_name" id="attribute_name" class="form-control" required /> <br>

                                              </div>
                                          </div>
                                      </div>
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
    </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script>
<script type="text/javascript">
              $('body').on('click','.delete',function(){
         var id = $(this).data('id');
         var name = $(this).data('name');
         var answer = confirm('Are you sure you want to delete '+name+' ?');
         
if (answer)
{
      $.ajax({
      type: "POST",
      url: "<?=base_url();?>admin/Ajax/deleteAttrtibute",   
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
  alert('Attribute Not Deleted');
}
        }); 
    </script>