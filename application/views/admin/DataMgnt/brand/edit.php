<div class="page-content">

    <h1 class="page-title"> Brand Edit
    </h1>
    <!-- END PAGE TITLE-->
    <!-- END PAGE HEADER-->
    <div class="row">
        <div class="col-md-12">

		
		<?php   //print_r($attributes); ?>
            <form action="<?php echo base_url(); ?>admin/dataMgnt/Brand/update/<?php echo $this->uri->segment(5)?$this->uri->segment(5):$brand[0]->brand_id ?>" method="post">
                <div class="form-group padding-bottom-30">
                    <label class="col-md-2 control-label">Category
                        <span class="required"> * </span>
                    </label>
                    <div class="col-md-10">
                        <select name="select_id" id="select_id" class="form-control" required>
                            <option value="">Select</option>
                            <?php if(isset($category)) { foreach ($category as $type): ?>
                                <option value="<?php echo $type->category_id; ?>" <?php if ($brand[0]->category_id == $type->category_id) {
                                echo "selected";
                            } ?> ><?php echo $type->category_name; ?></option>
                            <?php endforeach; } ?>
                        </select>
                    </div>
                </div>

                <div class="form-group padding-bottom-30">
                    <label class="col-md-2 control-label">Brand Name:
                        <span class="required"> * </span>
                    </label>
                    <div class="col-md-10">
                       
                        <input class="form-control" type="text" name="name" id="name" required value="<?php echo $brand[0]->name ? $brand[0]->name : 'No data'; ?>" />
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



