<div class="page-content">

    <h1 class="page-title"> Attribute Type Edit
    </h1>
    <!-- END PAGE TITLE-->
    <!-- END PAGE HEADER-->
    <div class="row">
        <div class="col-md-12">

            <form action="<?php echo base_url();?>admin/AttributeType/edit/<?php echo $this->uri->segment(4)?$this->uri->segment(4):0; ?>" method="post">
               

                <div class="form-group padding-bottom-30">
                    <label class="col-md-2 control-label">Attribute Name:
                        <span class="required"> * </span>
                    </label>
                    <div class="col-md-10">
                        <input class="form-control" type="text" name="attribute_type" id="attribute_type" class="form-control" required value="<?php  echo $edit_types[0]->attribute_type?$edit_types[0]->attribute_type:'No data';?>"/>
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






