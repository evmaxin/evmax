
<div class="page-content">
                        <!-- BEGIN PAGE HEADER-->
                        <!-- BEGIN THEME PANEL -->
                        
                        <!-- END THEME PANEL -->
                        <!-- BEGIN PAGE BAR -->
                        <div class="page-bar">
                            <ul class="page-breadcrumb">
                                <li>
                                    <a>Out Of Stock Products</a>
                                    <i class="fa fa-circle"></i>
                                </li>
                               <!-- <li>
                                    <span>lookpi</span>
                                </li>-->
                            </ul>
                           
                        </div>
                        <!-- END PAGE BAR -->
                        <!-- BEGIN PAGE TITLE-->
                      
                        <!-- END PAGE TITLE-->
                        <!-- END PAGE HEADER-->
                          <div class="row">
                               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                              <?php foreach ($outofstockproducts as $value) {
                                                                ?>
                              <p><?php echo $value?$value->name:'';?> <a href="<?php  echo base_url() ?>admin/product/edit/<?php echo $value->product_id;?>#tab<?php echo $value->product_id;?>">Update inventory</a></p>
                              <?php }?>
                        </div>
                          </div>
                        <div class="clearfix"></div>
                        
                    </div>