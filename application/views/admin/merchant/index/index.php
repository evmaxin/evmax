<style>
    div.dtr-modal-content td{
       background: #fff;
    padding: 4px;
    }
    #send_proposal{
            background: #57b952;
    color: #fff;
    }
    .proccessing{
        color: darkgreen;
    }
    .pending{
        color: orange;
    }
    </style>
<div class="page-content">
     <?php if(isset($this->session->userdata('admin_data')['store_id']) && ($this->session->userdata('admin_data')['store_id']==1)){?>
      
     <?php } ?>
      <div class="row">
        <div class="col-md-12">
          <div class="portlet box blue">
            <div class="portlet-title">
              <div class="caption"> <i class="icon-user-follow"></i>Enquiries</div>
              <div class="tools"> <a href="javascript:;" class="collapse"> </a> </div>
            </div>
              <div class="portlet-body" id="demo">
              <div class="table-toolbar"> </div>
              <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title" >Custom Filter : </h3>
            </div>
            <div class="panel-body">
                <form id="form-filter" class="form-horizontal">
                    
                    <div class="form-group">
                       
                     
                        <div class="col-sm-1">
                         <label for="enddate" class="col-sm-2 control-label">Enquiry Status</label>
                        </div>
                         <div class="col-sm-2">
                            
                            <!-- <label  class="control-label">Payment Mode :</label> -->
                             <select id="orderStatus" name="orderStatus" class="form-control">
							  <option value="">Select</option>
							   <option value="0">Pending</option>
                                                           <option value="3">Processing</option>
							</select>
							<small>Enquiry Status</small>
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
                    <th>Company Name</th>
                   <th>Name</th>
                    <th>Mobile</th>
                    <th>Email</th>
                    <th>Enquiry Status</th>
                    <th>Categories interested in</th>
     
                    <th>City</th>
                     <th>State</th>

                      <th>Website Name</th>
                      <th>Enquiry Date</th>
                      
                     <th>Action</th>
                     
                    
             
            </tbody>

           
        </table>
             
            </div>
             
          </div>
        </div>
      </div>
    </div>
<script type="text/javascript">
              $('body').on('click','.delete',function(){
         var id = $(this).data('id');
         var name = $(this).data('name');
         var answer = confirm('Are you sure you want to delete '+name+' ?');
         
if (answer)
{
      $.ajax({
      type: "POST",
      url: "<?=base_url();?>admin/Ajax/deleteAttrType",   
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
  alert('Attribute Type Not Deleted');
}
        }); 
        $(document).ready(function(){
   
	$("body").on('change', ".updateStatus", function() {
		
   
	var orderId=$(this).attr("id");
	var status=$(this).val();
	var updateText=$( "#"+orderId+" option:selected" ).text();
	//alert(updateText);
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
	var result=confirm("Do you want to update Enquiry status  from  "+updateText+" to "+orderId+"  ?");
	  if(result)
	  {
			  
			  $.ajax({ url: '<?php echo base_url().'admin/merchant/Index/updateStatus'; ?>',
			        type: 'POST',
					data: {
						enquiry_id: orderId,
						status:status
						
					},
					dataType: 'json',
			      success: function(result){
              alert("Enquiry status updated Successful.");
                 }});
	  }
	  else
	  {
		 // alert("not changed");
	  }
	
	
  });
    $('body').on('click', '#send_proposal', function() {
  var email = $(this).attr("email");
  var name = $(this).attr("username");
  var enqiry_id = $(this).attr("enqiry_id");
  $.ajax({ url: '<?php echo base_url().'admin/merchant/Index/sendProposal'; ?>',
			        type: 'POST',
					data: {
						email: email,
						name:name,
                                                enqiry_id:enqiry_id
						
					},
					dataType: 'json',
			      success: function(result){
                                  
                                 // $('#table').DataTable().ajax.reload();
              alert("Proposal Sent Successfully.");
              $('.dtr-modal').hide();
              location.reload();
                 }});
            // location.reload();
            // location.reload();
            // $('.dtr-modal').modal('hide');
});

});
    </script>