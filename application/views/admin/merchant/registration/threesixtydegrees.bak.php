
<!-- BEGIN CONTENT BODY -->
                    <div class="page-content">
                        <!-- BEGIN PAGE HEADER-->
                    
                        <!-- BEGIN PAGE TITLE-->
						
                        <h1 class="page-title" style="margin-top:0px; ">
                            <small>
							<?php $adminApproved=$this->session->userdata("adminApproved"); ?>
							<a href="<?php echo base_url()?>admin/merchant/<?php if($adminApproved==0){echo'registration';}else{echo'registration/merchant';}?>"
							class="btn btn-primary"> <i class="fa fa-chevron-circle-left" style="margin-top:4px;font-size:18px"> </i>  Back To Registration </a></small>
							
                        </h1>
                        <!-- END PAGE TITLE-->
                        <!-- END PAGE HEADER-->
                        <div class="row">
                            <div class="col-md-12">
                                <!-- Begin: life time stats -->
                                <div class="portlet light portlet-fit portlet-datatable bordered">
                                    <div class="portlet-title" style="padding-top:10px; ">
                                        <div class="caption ">
										<?php 
										
										// print_r($orders_data);
										
										
										?>
										  <input type="hidden" id="name" value="<?php echo $orders_data[0]->surname?$orders_data[0]->surname." ".$orders_data[0]->name:'';?>" >
										 <input type="hidden" id="email" value="<?php echo $orders_data[0]->business_email?$orders_data[0]->business_email:'';?>" >
										
                                            <i class="fa fa-user" style="font-size:16px"></i>
											 <span class="caption-subject font-dark sbold uppercase"> 
											 <?php echo $orders_data[0]->surname?$orders_data[0]->surname." ".$orders_data[0]->name:'';?> 
                                              
                                            </span>
                                           <!-- <span class="caption-subject font-dark sbold "> Registration ID : <?php  
											  
											  echo $orders_data[0]->m_registration_id?$orders_data[0]->m_registration_id:'';?>
                                              
                                            </span>
											-->
                                        </div>
										  <div class="caption" style="float:right"><?php //print_r($orders_data);?>
                                           
											<i class="fa fa-calendar" style="font-size:16px"></i>
                                            <span class="caption-subject font-dark sbold ">Date : 
											
                                               <?php $date = new DateTime($orders_data[0]->regDate); echo $orders_data[0]->regDate?date_format($date, 'F jS,  Y g:ia '):'';?> 
                                            </span>
                                        </div>
                                        
                                    </div>
                                    <div class="portlet-body">
                                        
                                          
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="tab_1">
                                                    <div class="row">
                                                        <div class="col-md-6 col-sm-12">
                                                            <div class="portlet yellow-crusta box">
                                                                <div class="portlet-title">
                                                                    <div class="caption">
                                                                        <i class="fa fa-cogs"></i>Company Information </div>
                                                                    <div class="actions">
                                                                       
                                                                    </div>
                                                                </div>
                                                                <div class="portlet-body">
                                                                  
                                                                    <div class="row static-info">
                                                                        <div class="col-md-5 name"> Company Name  </div>
                                                                        <div class="col-md-7 value"> :&nbsp; <?php echo $orders_data[0]->company_name?$orders_data[0]->company_name:'';?> </div>
                                                                    </div>
                                                                     <div class="row static-info">
                                                                        <div class="col-md-5 name"> Company Type  </div>
                                                                        <div class="col-md-7 value">:&nbsp; <?php echo $orders_data[0]->company_type?$orders_data[0]->company_type:'';?> </div>
                                                                    </div>
																	
																	
																	
																	<div class="row static-info">
                                                                        <div class="col-md-5 name">Phone Number </div>
                                                                        <div class="col-md-7 value"> :&nbsp; <?php echo $orders_data[0]->business_contact_no?$orders_data[0]->business_contact_no:'';?> </div>
                                                                    </div>
																	
                                                                    <div class="row static-info">
                                                                        <div class="col-md-5 name">Email </div>
                                                                        <div class="col-md-7 value">:&nbsp; <?php echo $orders_data[0]->business_email?$orders_data[0]->business_email:'';?> </div>
                                                                    </div>
																	   <div class="row static-info">
                                                                        <div class="col-md-5 name">Pan Card Number  </div>
                                                                        <div class="col-md-7 value"> :&nbsp;<?php echo $orders_data[0]->business_pan?$orders_data[0]->business_pan:'';?> </div>
                                                                    </div>
																	 
																	   <div class="row static-info">
                                                                        <div class="col-md-5 name">GST Number  </div>
                                                                        <div class="col-md-7 value"> :&nbsp;<?php echo $orders_data[0]->gst_number?$orders_data[0]->gst_number:'';?> </div>
                                                                       </div>
																
																	
																	 <div class="row static-info">
                                                                        <div class="col-md-5 name">Bank Account Number  </div>
                                                                        <div class="col-md-7 value">:&nbsp; <?php echo $orders_data[0]->bank_account?$orders_data[0]->bank_account:'';?> </div>
                                                                       </div>
																	
																	
																	
																	
																	
																	
																	
																	
																	
																	
																	
																	<div class="row static-info">
                                                                        <div class="col-md-12 name"> <b> Company Address  : </b> </div>
                                                                        
                                                                    </div>
																	 <div class="row static-info">
                                                                        <div class="col-md-5 name"> Address  </div>
                                                                        <div class="col-md-7 value"> :&nbsp;<?php echo $orders_data[0]->address1?$orders_data[0]->address1:'';?> </div>
                                                                    </div>
                                                                    <div class="row static-info">
                                                                        <div class="col-md-5 name"> City </div>
                                                                        <div class="col-md-7 value">:&nbsp; <?php echo $orders_data[0]->city?$orders_data[0]->city:'';?> </div>
                                                                    </div>
																	 <div class="row static-info">
                                                                        <div class="col-md-5 name"> State  </div>
                                                                        <div class="col-md-7 value"> :&nbsp;<?php echo $orders_data[0]->state?$orders_data[0]->state:'';?> </div>
                                                                    </div>
																	 <div class="row static-info">
                                                                        <div class="col-md-5 name">Pincode  </div>
                                                                        <div class="col-md-7 value"> :&nbsp; <?php echo $orders_data[0]->pincode?$orders_data[0]->pincode:'';?> </div>
                                                                    </div>
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-sm-12">
                                                            <div class="portlet blue-hoki box">
                                                                <div class="portlet-title">
                                                                    <div class="caption">
                                                                        <i class="fa fa-cogs"></i>Persnoal Information </div>
                                                                    <div class="actions">
                                                                        
                                                                    </div>
                                                                </div>
                                                                <div class="portlet-body">
                                                                    <div class="row static-info">
                                                                        <div class="col-md-5 name"> Name </div>
                                                                        <div class="col-md-7 value"> :&nbsp; <?php echo $orders_data[0]->surname?$orders_data[0]->surname." ".$orders_data[0]->name:'';?> </div>
                                                                    </div>
																	<div class="row static-info">
                                                                        <div class="col-md-5 name">Phone Number</div>
                                                                        <div class="col-md-7 value">:&nbsp; <?php echo $orders_data[0]->phone?$orders_data[0]->phone:'';?> </div>
                                                                    </div>
																	<div class="row static-info">
                                                                        <div class="col-md-5 name">Alternative Number </div>
                                                                        <div class="col-md-7 value">:&nbsp; <?php echo $orders_data[0]->alternative_number?$orders_data[0]->alternative_number:'';?> </div>
                                                                    </div>
                                                                    <div class="row static-info">
                                                                        <div class="col-md-5 name"> Email </div>
                                                                        <div class="col-md-7 value">:&nbsp; <?php echo $orders_data[0]->person_email?$orders_data[0]->person_email:'';?> </div>
                                                                    </div>
																	   <div class="row static-info">
                                                                        <div class="col-md-5 name">Pan Card Number  </div>
                                                                        <div class="col-md-7 value"> :&nbsp; <?php echo $orders_data[0]->person_pan_num?$orders_data[0]->person_pan_num:'';?> </div>
                                                                    </div>
																	 
																	   <div class="row static-info">
                                                                        <div class="col-md-5 name">Adhaar Number  </div>
                                                                        <div class="col-md-7 value"> :&nbsp; <?php echo $orders_data[0]->adhaar?$orders_data[0]->adhaar:'';?> </div>
                                                                       </div>
																	
																	<div class="row static-info">
                                                                        <div class="col-md-5 name"> <b>Persnoal Address : </b> </div>
                                                                        
                                                                    </div>
																	 <div class="row static-info">
                                                                        <div class="col-md-5 name"> Address  </div>
                                                                        <div class="col-md-7 value">:&nbsp; <?php echo $orders_data[0]->person_address?$orders_data[0]->person_address:'';?> </div>
                                                                    </div>
                                                                    <div class="row static-info">
                                                                        <div class="col-md-5 name"> City  </div>
                                                                        <div class="col-md-7 value"> :&nbsp;<?php echo $orders_data[0]->person_city?$orders_data[0]->person_city:'';?> </div>
                                                                    </div>
																	 <div class="row static-info">
                                                                        <div class="col-md-5 name"> State  </div>
                                                                        <div class="col-md-7 value"> :&nbsp;<?php echo $orders_data[0]->persnoal_state?$orders_data[0]->persnoal_state:'';?> </div>
                                                                    </div>
																	 <div class="row static-info">
                                                                        <div class="col-md-5 name">Pincode </div>
                                                                        <div class="col-md-7 value">:&nbsp; <?php echo $orders_data[0]->person_pincode?$orders_data[0]->person_pincode:'';?> </div>
                                                                    </div>
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6 col-sm-12">
                                                            <div class="portlet  grey-cascade box">
                                                                <div class="portlet-title">
                                                                    <div class="caption">
                                                                        <i class="fa fa-cogs"></i>Registration Information </div>
                                                                    <div class="actions">
                                                                       
                                                                    </div>
                                                                </div>
                                                                <div class="portlet-body">
                                                                     <div class="row static-info">
                                                                        <div class="col-md-5 name"> Registration Id  </div>
                                                                        <div class="col-md-7 value"> :&nbsp; <?php echo $orders_data[0]->m_registration_id?$orders_data[0]->m_registration_id:'';?>
                                                                           
																		   
																		 <?php 
																		          if($orders_data[0]->otp_status==1)
																		             { ?>
                                                                            <span class="label label-info label-sm" style="background:#5fa95f"> Email verify is successful </span>
																			
																			 <?php } else{ ?>
																				   <span class="label label-info label-sm" style="background:#f57769"> Email verify is failure </span>
																			
																			<?php } ?>  
																		   
                                                                        </div>
                                                                    </div>
                                                                    <div class="row static-info">
                                                                        <div class="col-md-5 name">Registration Date & Time </div>
                                                                        <div class="col-md-7 value">  :&nbsp; <?php echo $orders_data[0]->regDate?date_format($date, 'F jS,  Y g:ia '):'';?>  </div>
                                                                    </div>
																	 <div class="row static-info">
                                                                        <div class="col-md-5 name"> Categories Selected </b> </div>
                                                                         <div class="col-md-7 value">: 
																		 <?php
                                                                                  $categoryNames=$orders_data[0]->category_name?$orders_data[0]->category_name:'';
																				  if($categoryNames!='')
																				  {
																					 // echo $categoryNames;
																					  $category=explode(",",$categoryNames);
																					  $i=1;
																					  foreach($category as $value)
																				      {
																						  if($i==1)
																						  {
																							 echo$i.". ".$value." <br/>";
																						
																						  }else{
																						  echo "&nbsp;&nbsp;".$i.". ".$value." <br/>";
																						  }
																						  
																						  $i++;
																					  }
																				  }
																				  else
																				  {
																					  echo"Not Selected";
																				  }
																				  
																		 ?>
																		 </div>
                                                                    </div>
																	
																	
                                                                   
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-sm-12">
                                                            <div class="portlet green-meadow  box">
                                                                <div class="portlet-title">
                                                                    <div class="caption">
                                                                        <i class="fa fa-cogs"></i>Dashboard Information</div>
                                                                    <div class="actions">
                                                                        
                                                                    </div>
                                                                </div>
                                                                <div class="portlet-body">
                                                                    <div class="row static-info">
                                                                        <div class="col-md-5 name">Admin Approve </div>
                                                                        <div class="col-md-7 value"> :&nbsp;
																	    <?php	$admin_approved=$orders_data[0]->admin_approved;

																		if($admin_approved==0){echo "<span class='label label-success' style='background:#fff;font-weight:600;color:#36c6d3;'>Not Approve </span>";}else
																		{echo "<span class='label label-success' style='background:#fff;font-weight:600;color:green;'>Approved  </span>";}
																		?>
                                                                        </div>
																	</div>
																		
																	
																	   <div class="row static-info">
                                                                        <div class="col-md-5 name">User Name </div>
                                                                        <div class="col-md-7 value"> :&nbsp;<?php echo $orders_data[0]->business_email?$orders_data[0]->business_email:'';?> </div>
                                                                    </div>
																	<?php  
																	          $adminApproved=$this->session->userdata("adminApproved"); 
																				   if($adminApproved==1)
																					{
																						?>
																							<div class="row static-info">
																								<div class="col-md-5 name">Admin Id </div>
																								<div class="col-md-7 value"> :&nbsp;<?php echo $orders_data[0]->admin_id?$orders_data[0]->admin_id:'';?> </div>
																							</div>
																	
																					<?php } ?>
																	
																	 <div class="row static-info">
                                                                        <div class="col-md-5 name"> </div>
                                                                        <div class="col-md-7 value"> 
																		 <?php
																		if($admin_approved==0){
																			?>
																		   <button class="dt-button buttons-html5 btn green" type="button" name="<?php echo $orders_data[0]->surname." ".$orders_data[0]->name;?>" id="approvedUser"  value="1"  data="<?php echo $orders_data[0]->m_registration_id;?>"> Approve
																		   </button>
																	  <?php	}else{
																		  
																		       
																				   if($adminApproved==1)
																					{  
																																			  
																							 $AccountStatus=$orders_data[0]->status;
																							 
																				          if($AccountStatus==1)
																				           {
																				   
																		?>
																				    <button class="dt-button buttons-html5 btn green" type="button" name="<?php echo $orders_data[0]->surname." ".$orders_data[0]->name;?>"   value="0" id="deactivate"  data="<?php echo $orders_data[0]->m_registration_id;?>">Deactivate Account
																				    </button>
																		
																				   <?php	}
																				           else{
																				   
																				   ?>
																				    <button class="dt-button buttons-html5 btn green" type="button" name="<?php echo $orders_data[0]->surname." ".$orders_data[0]->name;?>"   value="1" id="activate"  data="<?php echo $orders_data[0]->m_registration_id;?>">Activate Account
																				    </button>
																		
																				   <?php
																				   
																						    }
																						   }
																	          }
																	 	?>
																		</div>
                                                                    </div>
																	
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                 </div>
                                        
                                    </div>
                                </div>
                                <!-- End: life time stats -->
                            </div>
                        </div>
                    </div>
                    <!-- END CONTENT BODY -->
<script>
$(document).ready(function(){ 
var userName=$("#name").val()
var email=$("#email").val()

		$("body").on('click', "#approvedUser", function() {
		
   
	var approvedId=$(this).attr("data");
	var approveStatus=$(this).attr("value");
	var name=$(this).attr("name");
	var result=confirm("Do you want to approved "+name+" Merchant  ?");
	  if(result)
	  {   $.ajax({ url: '<?php echo base_url().'admin/merchant/Registration/ApprovedUser'; ?>',
			        type: 'POST',
					data: {
						name:userName,
						email:email,
					     approvedId: approvedId,
						 approveStatus:approveStatus,
					},
					dataType: 'json',
			      success: function(result){
                    alert(" You have Approved "+name+" Merchant Successful.");
					  location.reload();
                 }});
	  }
	  else
	  {
		 alert("not changed");
	  }
	
	
  });
  $("body").on('click', "#deactivate", function() {
		
   
	var approvedId1=$(this).attr("data");
	var approveStatus1=$(this).attr("value");
	var name1=$(this).attr("name");
	var result1=confirm("Do you want to Deactivate  "+name1+" Merchant  Account ?");
	  if(result1)
	  {   $.ajax({ url: '<?php echo base_url().'admin/merchant/Registration/ApprovedUser'; ?>',
			        type: 'POST',
					data: {
						name:userName,
						email:email,
					     approvedId: approvedId1,
						 approveStatus:approveStatus1,
					},
					dataType: 'json',
			      success: function(result){
                    alert(" You have Deactivate "+name1+" Merchant Account Successful.");
					  location.reload();
                 }});
	  }
	  else
	  {
		 alert("not changed");
	  }
	
	
  });
  	$("body").on('click', "#activate", function() {
		
   
	var approvedId=$(this).attr("data");
	var approveStatus=$(this).attr("value");
	var name=$(this).attr("name");
	var result=confirm("Do you want to Activate "+name+" Merchant  ?");
	  if(result)
	  {   $.ajax({ url: '<?php echo base_url().'admin/merchant/Registration/ApprovedUser'; ?>',
			        type: 'POST',
					data: {
						name:userName,
						email:email,
					     approvedId: approvedId,
						 approveStatus:approveStatus,
					},
					dataType: 'json',
			      success: function(result){
                    alert(" You have Activate "+name+" Merchant Successful.");
					  location.reload();
                 }});
	  }
	  else
	  {
		 alert("not changed");
	  }
	
	
  });
});
  </script>