<div class="page-content">
    <?php if($this->session->flashdata('message'))
    {?>
    <div class="alert alert-success">
  <?php  echo $this->session->flashdata('message');  ?>
</div>
      
   <?php }?>
       <form action="<?php echo base_url(); ?>admin/orders/shippingDetailsUpdate" method="post" enctype="multipart/form-data" id="addproduct">
                    <div id="shippingpartner" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-confirm">
                            <div class="modal-content">
                                <div class="modal-header"> <a type="button" class="close" data-dismiss="modal" aria-hidden="true"></a>
                                    <h4 class="modal-title">Shipping Details <button class="btn default" data-dismiss="modal" style="float: right;">Close</button></h4> 
                                </div>
                              
                                
                                <div class="modal-body">

                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                    <div class="form-group">
                                                    
                                                    <label class="control-label">Delivery Partner Name <span class="required"> * </span></label>
                                                   <select name="shipping_id" id="shipping_id" class="form-control" required="required">
                                                        <option value="">Select</option>
                                                                       <?php
                                if (isset($shipping) && (count($shipping) > 0)) {

                                    foreach ($shipping as $value) {
                                        ?>                                         
                                        <option value="<?php echo $value->shipping_id ? $value->shipping_id : ''; ?>"><?php echo $value->name ? $value->name : ''; ?></option>
                                         <?php }
} ?>
               </select>

                                                </div>
                                                <div class="form-group">
                                                    <?php //echo $sku = $this->session->userdata('admin_data')['store_id'].strtoupper(uniqid()); ?>
                                                    <label class="control-label">Tracking ID <span class="required"> * </span></label>
                                                    <input type="text" name="trackingid" id="trackingid" required class="form-control" value="<?php echo set_value('name'); ?>"/>
                                                    <input type="hidden" name="id1" id="id1" value="">
                                                    <input type="hidden" name="order_number1" id="order_number1" value="">
                                                    <input type="hidden" name="cust_name1" id="cust_name1" value="">
                                                    <input type="hidden" name="cust_email1" id="cust_email1" value="">
                                                    <input type="hidden" name="admin_email1" id="admin_email1" value="">
                                                </div>
                                                 
                                                 
                                                

                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="form-actions modal-footer"> 
                                    <input type="submit"  class="btn blue" name="add" id="add" value="Update"/>
                                    <button class="btn default" data-dismiss="modal">Close</button>

                                </div>
                            </div>
                        </div>
                    </div>
                </form>
      <div class="row">
        <div class="col-md-12">
          <div class="portlet box blue">
            <div class="portlet-title">
              <div class="caption"> <i class="icon-user-follow"></i>Orders</div>
              <div class="tools"> <a href="javascript:;" class="collapse"> </a> </div>
            </div>
            <div class="portlet-body">
             
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title" >Custom Filter : </h3>
            </div>
            <div class="panel-body">
                <form id="form-filter" class="form-horizontal">
                    
                    <div class="form-group">
                        <div class="col-sm-1">
                        <label for="FirstName" class="col-sm-2 control-label">Order ID</label>
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" id="order_id" value="<?php echo $this->input->get('order_number')?$this->input->get('order_number'):'';?>">
                            <small>Order ID</small>
                        </div>
                        <div class="col-sm-1">
                        <label for="startdate" class="col-sm-2 control-label">Order Start Date</label>
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" id="startdate" placeholder="<?php echo date('Y-m-d', strtotime('-10 days')); ?>">
                            <small>Date format (YYYY-mm-dd)</small>
                        </div>
                        <div class="col-sm-1">
                         <label for="enddate" class="col-sm-2 control-label">Order End Date</label>
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" id="enddate" placeholder="<?php echo date('Y-m-d');?>">
                            <small>Date format (YYYY-mm-dd)</small>
                        </div>
                    
                        <div class="col-sm-3">
                            <button type="button" id="btn-filter" class="btn btn-primary">Filter</button>
                            <button type="button" id="btn-reset" class="btn btn-default">Reset</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <table id="table" class="table table-striped table-hover table-bordered display" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>S.No</th>
                    <th>Order No</th>
                    <th>Order Date</th>
                     <!--<th>Item Description</th>-->
                    <th>Qty</th>
                    <th>Value</th>
                    
                      <th>Status</th>
                     <th>Details</th>
                      <th>Cancel Order</th>
                    
                </tr>
            </thead>
            <tbody>
            </tbody>

           
        </table>
             
            </div>
            
     
          </div>
        </div>
      </div>
    </div>
<script type="text/javascript">
  
        $(document).ready(function(){
   
	$("body").on('change', ".updateStatus", function() {
	var orderId = $(this).attr("id");
        var order_number=$(this).attr("order_number");
        var cust_name = $(this).attr("cust_name");
        var admin_email = $(this).attr("admin_email");
        var cust_email = $(this).attr("cust_email");
	var status = $(this).val();
	var updateText= $( "#"+orderId+" option:selected" ).text();
        var selected_val =  $( "#"+orderId+" option:selected" ).val();
        //alert(selected_val);
        if(selected_val === '7')
        {
            $('#shippingpartner').modal('show');
            $('#id1').val(orderId);
             $('#order_number1').val(order_number);
              $('#cust_name1').val(cust_name);
               $('#admin_email1').val(admin_email);
                $('#cust_email1').val(cust_email);
             return false;
        }
        //alert(cust_email);
        //alert(admin_email);
       /* var sts_txt="";
        if(orderId === 0){
            sts_txt="pending";
        }else if(orderId === 1)
        {
            sts_txt="approved";
        }else if(orderId === 2)
        {
            sts_txt="rejected";
        }else if(orderId === 3)
        {
            sts_txt="Processing";
        }*/
	var result = confirm("Do you want to update status to "+updateText+" ?");
	  if(result)
	  {
			  
			  $.ajax({ url: '<?php echo base_url().'admin/orders/updateStatus'; ?>',
			        type: 'POST',
					data: {
						id: orderId,
                                                order_number: order_number,
                                                cust_name: cust_name,
                                                admin_email: admin_email,
                                                cust_email: cust_email,
						status:status
						
					},
					dataType: 'json',
			      success: function(result){
              alert("Status updated Successfully.");
            //  $('#shippingpartner').modal('show');
               //location.reload();
                 }});
	  }
	  else
	  {
		   location.reload();
	  }
	
	
  });
  $("body").on('click', ".cancelOrder", function() {
		
   
	var orderId=$(this).attr("id");
        var order_number=$(this).attr("order_number");
        var cust_name = $(this).attr("cust_name");
        var admin_email = $(this).attr("admin_email");
        var cust_email = $(this).attr("cust_email");
	var status='11';
	var result=confirm("Do you want to cancel the order? ");
	  if(result)
	  {
			  
			  $.ajax({ url: '<?php echo base_url().'admin/orders/updateStatus'; ?>',
			        type: 'POST',
					data: {
						id: orderId,
                                                order_number: order_number,
                                                cust_name: cust_name,
                                                admin_email: admin_email,
                                                cust_email: cust_email,
						status:status
						
					},
					dataType: 'json',
			      success: function(result){
              alert("Order Cancelled.");
               location.reload();
                 }});
	  }
	  else
	  {
		   location.reload();
	  }
	
	
  });


});
    </script>