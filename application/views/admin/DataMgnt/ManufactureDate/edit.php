<div class="page-content">

    <h1 class="page-title"> Manufacture Year
    </h1>
    <!-- END PAGE TITLE-->
    <!-- END PAGE HEADER-->
    <div class="row">
        <div class="col-md-12">

		
		<?php   //print_r($attributes); ?>
            <form action="<?php echo base_url(); ?>admin/dataMgnt/ManufactureDate/update/<?php echo $this->uri->segment(5)?$this->uri->segment(5):$attributes[0]->model_id ?>" method="post">
               

                <div class="form-group padding-bottom-30">
                    <label class="col-md-2 control-label">Manufacture Year:
                        <span class="required"> * </span>
                    </label>
                    <div class="col-md-10">
                       
                        <input class="form-control" type="Number" name="attribute_name" id="attribute_name" required value="<?php echo $attributes[0]->manufacture_year ? $attributes[0]->manufacture_year : 'No data'; ?>" />
                    </div>
                </div>
                
               
                <div class="form-group padding-bottom-30">

                    <div class="col-md-10">
                        <input class="btn btn-success" type="submit" name="update" value="save"/>

                    </div>
                </div>

            </form>    
        </div>
    </div>


    <!-- tabs end-->

</div>



