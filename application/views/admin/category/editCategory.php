<?php //echo $edit_categories[0]->parent_id;exit;  ?>
<div class="page-content">

    <h1 class="page-title"> Edit Category
    </h1>
    <!-- END PAGE TITLE-->
    <!-- END PAGE HEADER-->
    <div class="row">
        <div class="col-md-12">

            <form action="<?php echo base_url(); ?>admin/Category/update/<?php echo $this->uri->segment(4) ?>" method="post">




                <div class="form-group padding-bottom-30">
                    <label class="col-md-2 control-label">Category Name:
                        <span class="required"> * </span>
                    </label>
                    <div class="col-md-10">

                        <input class="form-control" type="text" name="category_name" id="category_name" value="<?php echo $edit_categories[0]->category_name ? $edit_categories[0]->category_name : 'No data'; ?>" required style="margin-bottom: 10px !important;" />

                    </div>
                </div>
                <div class="form-group padding-bottom-50">

                    <label class="col-md-2 control-label">Main Menu <span class="required"> * </span></label>
                    <div class="col-md-10">
                        <select name="menu_id" id="menu_id" class="form-control" required="required">
                            <option value="">Select</option>
                            <?php
                            if (isset($menu) && (count($menu) > 0)) {

                                foreach ($menu as $value) {
                                    ?>

                                    <option value="<?php echo $value->menu_id ? $value->menu_id : ''; ?>" <?php if ($value->menu_id == $edit_categories[0]->menu_id) {
                                echo "selected";
                            } ?>><?php echo $value->name ? $value->name : ''; ?></option>
    <?php }
}
?>


                        </select>
                    </div>
                </div>
                <div class="form-group padding-bottom-30">

                    <label class="col-md-2 control-label">Sub Menu </label>
                    <div class="col-md-10">
                        <select name="submenu_id" id="submenu_id" class="form-control">
                            <option value="">Select</option>
                            <?php
                            if (isset($submenu) && (count($submenu) > 0)) {

                                foreach ($submenu as $value) {
                                    ?>

                                    <option value="<?php echo $value->submenu_id ? $value->submenu_id : ''; ?>" <?php if ($value->submenu_id == $edit_categories[0]->submenu_id) {
                                echo "selected";
                            } ?>><?php echo $value->name ? $value->name : ''; ?></option>
    <?php }
}
?></select>
                    </div>
                </div>
                <div class="form-group padding-bottom-30">
                    <label class="col-md-2 control-label"> Meta Title:

                    </label>
                    <div class="col-md-10">
                        <input class="form-control" type="text" name="title" id="title" value="<?php echo ($edit_categories[0]->meta_title) ? $edit_categories[0]->meta_title : ''; ?>" style="margin-bottom: 10px !important;" />

                    </div>
                </div>
                <div class="form-group padding-bottom-30">
                    <label class="col-md-2 control-label">Meta Keywords:

                    </label>
                    <div class="col-md-10">
                        <input class="form-control" type="text" name="keywords" id="keywords" value="<?php echo ($edit_categories[0]->meta_title) ? $edit_categories[0]->meta_title : ''; ?>" style="margin-bottom: 10px !important;" />
                    </div>
                </div>

                <div class="form-group padding-bottom-30">
                    <label class="col-md-2 control-label"> Meta Description:

                    </label>
                    <div class="col-md-10 mb30">
                        <textarea class="form-control" name="description" id="description"><?php echo ($edit_categories[0]->meta_title) ? $edit_categories[0]->meta_title : ''; ?></textarea>

                    </div>
                </div>

                <div class="form-group padding-bottom-30">

                    <div class="col-md-10">
                        <input class="btn btn-success" type="submit" name="update" value="submit"/>

                    </div>
                </div>


        </div>
        </form>

    </div>


    <!-- tabs end-->

</div>
</div>



<script>
    $('body').on('change', '#menu_id', function () {
        //var cat_id = $(this).data('id');

        var menu_id = $("#menu_id option:selected").val();
        //alert(cat_id);
        $.ajax({
            type: "POST",
            url: "<?= base_url(); ?>admin/Ajax/getSubMenu",
            data: {'menu_id': menu_id},
            success: function (response) {

                if (response) {
                    $('#submenu_id').html(response);
                } else {
                    $('#submenu_id').html('<option value=""></option>');
                }
            }
        });


    });
</script>
