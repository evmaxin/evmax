<?php //echo validation_errors(); ?>

<div class="page-content">
<div class="row">
				<div class="col-md-6">
    
	<h1>Add Attribute Type</h1>

	<form action="<?php echo base_url();?>admin/AttributeType/add" method="post">

            
                <div class="form-body">
               
                      <div class="form-group">
                        <label class="control-label">Attribute Type<span class="required">
										* </span></label>
                        <input type="text" name="attribute_type" id="attribute_type" pattern="[a-zA-Z0-9\s]+" class="form-control" required value="<?php echo set_value('attribute_type'); ?>"/> 
                       </div>
               <div class="form-actions">
                <input type="submit"  class="btn blue" name="submit" value="submit"/>
                <input type="reset"  class="btn default" name="reset" value="Reset"/>
        
                 </div>
              
                
                </div>
		</form>


</div>
</div>

</div>
