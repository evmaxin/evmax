<style>
    .glyphicon-remove
    {
        color: red;
    }
</style>
<div class="page-content">

    <h3 class="page-title1"> Category Hierarchy
    </h3>
   
    <!-- END PAGE TITLE-->
    <!-- END PAGE HEADER-->
    <div class="row">
        <div class="col-md-12">

                      <div id="navigation">
	<?php foreach($categories as $category): ?>
	<?php  ?>
                          <ul > 
                              
                              <li><?php  echo $category->category_name; ?> <?php if(isset($this->session->userdata('admin_data')['store_id']) && ($this->session->userdata('admin_data')['store_id']==1)){?><a class="blue"  href="<?php echo base_url() ?>admin/category/edit/<?php  echo $category->category_id; ?>"><span class="glyphicon glyphicon-pencil" style="font-size: 10px;"></span></a> <a class="delete red" data-name="<?php  echo $category->category_name?$category->category_name:''; ?>" data-id="<?php  echo $category->category_id?$category->category_id:''; ?>" ><span class="glyphicon glyphicon-remove" style="font-size: 10px;"></span></a><?php }?>
                              
                        
		

		
		</li>
                </ul>
	
	<?php  
	
	endforeach;?>
                
	</div>	
           
    </div>


    <!-- tabs end-->

</div>
</div>
<script type="text/javascript">
              $('body').on('click','.delete',function(){
                  //alert();
         var id = $(this).data('id');
         var name = $(this).data('name');
         var answer = confirm('Are you sure you want to delete '+name+' ?. If you Delete '+name+' Category all products will be delete in this category');
         
if (answer)
{
      $.ajax({
      type: "POST",
      url: "<?=base_url();?>admin/Ajax/deleteCategory",   
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
  alert('Category Not Deleted');
}
        }); 
    </script>



