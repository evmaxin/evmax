<div class="page-content">

    <h1 class="page-title"> Image mgmt Edit
    </h1>
    <!-- END PAGE TITLE-->
    <!-- END PAGE HEADER-->
    <div class="row">
        <div class="col-md-12">

            <form action="<?php echo base_url(); ?>admin/sliders/update/<?php echo $this->uri->segment(4)?$this->uri->segment(4):$attributes[0]->attribute_id ?>" method="post" enctype="multipart/form-data" id="editproduct">
              
             
                <?php if(isset($this->session->userdata('admin_data')['store_id']) && ($this->session->userdata('admin_data')['store_id']==1)){?>
                 
                 <div class="form-group">
                  <label class="control-label">Display Order</label>
                  <input type="text" name="order" id="order" class="form-control" value="<?php echo $sliders[0]->display_order?$sliders[0]->display_order:''; ?>" onkeypress="return isNumber(event)">
                                                

                </div>
                <div class="form-group">
                  <label class="control-label">Link image to URL</label>
                  <input type="text" name="link_url" id="link_url" class="form-control" value="<?php echo $sliders[0]->link_url?$sliders[0]->link_url:''; ?>" >
                                                

                </div>
              
                

                 <?php } ?>
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



