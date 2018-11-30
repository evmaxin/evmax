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
              <div class="caption"> <i class="icon-user-follow"></i>Terms document upload</div>
              <div class="tools"> <a href="javascript:;" class="collapse"> </a> </div>
            </div>
            <div class="portlet-body">
              <div class="table-toolbar"> </div>
                 
        <table id="table" class="table table-striped table-hover table-bordered display" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>S.No</th>
                    <th>Pdf</th>
                     <th>Name</th>
                    <th>Category Name</th>
                    <th>Operations</th>
                    
                </tr>
            </thead>
            <tbody>
            </tbody>

           
        </table>
             
            </div>
              <form action="<?php echo base_url();?>admin/merchant/TermsMgmt/add" method="post" enctype="multipart/form-data" id="addproduct">
            <div id="addNew" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
              <div class="modal-dialog modal-dialog-confirm">
                <div class="modal-content ">
                  <div class="modal-header"> <a type="button" class="close" data-dismiss="modal" aria-hidden="true"></a>
                    <h4 class="modal-title">Add Document</h4>
                  </div>
                  <div class="modal-body">
                   <div class="form-group">
                  <label class="control-label">Category <span class="required"> * </span>  <a href="#" data-toggle="tooltip" title="If you are store owner,please select store banner"><i class='glyphicon glyphicon-info-sign'></i></a></label>
                 <select name="category" id="category" class="form-control">
		<?php
                            if (isset($category_interested) && (count($category_interested) > 0)) {
                                $i = 1;
                                foreach ($category_interested as $cat) {
                                    ?>
                   
		<option value="<?php echo $cat->m_category_id ? $cat->m_category_id : $i; ?>"><?php echo $cat->category_name ? $cat->category_name : ''; ?></option>
                   
		   <?php $i++;
    }
}
?>
		</select>
                                                

                </div>
                         <div class="form-group">
                      <label class="control-label">document <span class="required"> * </span> <a href="#" data-toggle="tooltip" title="Please select image for store banner or logo"><i class='glyphicon glyphicon-info-sign'></i></a></label>
                        <input type="file" name="userfile[]" id="userfile" required class="form-control" />
                        </div>
                        <div class="form-group">
                  <label class="control-label">document Name</label>
                  <input type="text" name="caption" id="caption" class="form-control">
                                                

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
      url: "<?=base_url();?>admin/Ajax/deleteTermsDocs",   
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