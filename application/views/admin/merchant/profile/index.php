<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- BEGIN CONTENT BODY -->
                    <div class="page-content">
                        <!-- BEGIN PAGE HEADER-->
                    
                        <!-- BEGIN PAGE TITLE-->
						
                        <h1 class="page-title" style="margin-top:0px; ">
                            <small>
						<!--	
							<a href="<?php echo base_url()?>admin/merchant/Profile/updateProfile"
							class="btn btn-primary"> <i class="icon-user" style="margin-top:4px;font-size:18px"> </i> Update Profile</a></small>
							<small>
						-->	
							<a class="btn btn-primary" data-toggle="modal" data-target="#updateModel"> <i class="fa fa-user" style="margin-top:4px;font-size:18px"> </i>&nbsp; Update Profile</a></small>
							
							<a class="btn btn-primary" data-toggle="modal" data-target="#myModal"> <i class="fa fa-lock" style="margin-top:1px;font-size:18px"> </i> &nbsp; Change Password </a></small>
                        <a class="btn btn-primary" data-toggle="modal" data-target="#profilepic"> <i class="fa fa-lock" style="margin-top:1px;font-size:18px"> </i> &nbsp; Change Profile Pic </a></small>
							
						
					 
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
										
								//print_r($orders_data);
										
										
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
													 <?php 
																	if($updatePassword!='')
																	 { 
																	  ?> 
															   
																		 <div class="alert alert-info alert-dismissible col-sm-12" style="">
																			<a href="#" class="close" data-dismiss="alert" aria-label="close" style="color: #337ab7!important;text-indent: 0px;">x</a>
																			<?php echo$updatePassword;?>
																		  </div>
																								   
																	<?php
																	
																	}
																	 
																	 ?>
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
                                                                        <i class="fa fa-cogs"></i>Personal Information </div>
                                                                    <div class="actions">
                                                                        
                                                                    </div>
                                                                </div>
                                                                <div class="portlet-body">
                                                                    <div class="row static-info">
                                                                        <div class="col-md-5 name"> Company Name </div>
                                                                        <div class="col-md-7 value"> :&nbsp; <?php echo $orders_data[0]->company_name?$orders_data[0]->company_name:'';?>  </div>
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
                                                                        <div class="col-md-5 name"> <b>Personal Address : </b> </div>
                                                                        
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
                                                                        <div class="col-md-5 name"> Registration Status  </div>
                                                                        <div class="col-md-7 value"> 
																	
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
                                                                        <div class="col-md-5 name">Admin Approved </div>
                                                                        <div class="col-md-7 value"> :&nbsp;
																	    <?php	$admin_approved=$orders_data[0]->admin_approved;

																		if($admin_approved==0){echo "<span class='label label-success' style='background:#fff;font-weight:600;color:#36c6d3;'>Not Approve </span>";}else
																		{echo "<span class='label label-success' style='background:#fff;font-weight:600;color:green;'>Approved </span>";}
																		?>
                                                                        </div>
                                                                    </div>
																	<div class="row static-info">
																								
																							</div>
																	   <div class="row static-info">
                                                                        <div class="col-md-5 name"> Email </div>
                                                                        <div class="col-md-7 value"> :&nbsp; <?php echo $orders_data[0]->business_email?$orders_data[0]->business_email:'';?> </div>
                                                                    </div>
																
																	 <div class="row static-info">
                                                                        <div class="col-md-5 name">Account Status</div>
                                                                        <div class="col-md-7 value"> :&nbsp;
																		
																		
																		
																		
																		 <?php	$adminstatus=$orders_data[0]->status;

																		if($adminstatus==0){echo "<span class='label label-success' style='background:#fff;font-weight:600;color:#36c6d3;'>Deactivated </span>";}else
																		{echo "<span class='label label-success' style='background:#fff;font-weight:600;color:green;'>Activated </span>";}
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
					
					
			
  <div class="modal fade " id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content changePasswordBox" >
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title text-center" style="color:#337ab7;padding:10px 0px;">Change Password   <button type="button" class="btn btn-default pull-right" data-dismiss="modal">Close</button></h4>
        </div>
		<form action="<?php echo base_url()?>admin/merchant/Profile/changePassword" method="post" id="changePassword"> 
				
         <div class="modal-body">
				   
					<div class="input-group ">
					  <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
					  <input  type="password" class="form-control" id="oldPassword" name="oldPassword" placeholder="Old Password" required>
					</div>
					<br>
					
					<div class="input-group">
					  <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
					  <input  type="password" class="form-control" id="newPassword" name="newPassword" placeholder="New Password" required>
					</div>
					<br>
					
					<div class="input-group">
					  <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
					  <input type="password" class="form-control"  id="confirmPassword" name="confirmPassword" placeholder="Confirm  Password" required>
					</div>
				    <div class="input-group">
					    <label id="passwordError"></label>
						
					</div>
					<br/>
					          
				 
        </div>
        <div class="modal-footer">
               <button type="submit" class="btn btn-info" name="changePassword" value="Change Password" style="background:#337ab7;">Update</button>
        </div>
      </div>
       </form>
    </div>
  </div>
                    <div class="modal fade " id="profilepic" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content changePasswordBox" >
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title text-center" style="color:#337ab7;padding:10px 0px;">Change Profile pic   <button type="button" class="btn btn-default pull-right" data-dismiss="modal">Close</button></h4>
        </div>
		<form action="<?php echo base_url()?>admin/merchant/Profile/updateProfilePic" method="post" id="changePassword1" enctype="multipart/form-data"> 
				
         <div class="modal-body">
             <small style="color: red;">To see Profile pic change ,you need to re-login</small>
				   
					<?php //echo $this->session->userdata('admin_data')['profile_pic'];?>
					
					<div class="input-group">
					  
                                          
                                          <input type="file" name="userfile[]" id="userfile" required="" multiple="" class="form-control" accept="image/jpg, image/jpeg,image/png, image/gif">
					 
					</div>
				    <div class="input-group">
					    <label id="passwordError"></label>
						
					</div>
					<br/>
					          
				 
        </div>
        <div class="modal-footer">
               <button type="submit" class="btn btn-info" name="update" value="Change ProfilePic" style="background:#337ab7;">Change ProfilePic</button>
        </div>
                    </form>
      </div>
       
    </div>
  </div>
  

    <div class="modal fade " id="updateModel" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content changePasswordBox" >
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title text-center" style="color:#337ab7;padding:10px 0px;">Update Profile Information   <button type="button" class="btn btn-default pull-right" data-dismiss="modal">Close</button></h4>
        </div>
		<form action="<?php echo base_url()?>admin/merchant/Profile/updateProfile" method="post" id="updatePassword"> 
				
         <div class="modal-body">
				   
				    
					<div class="row settings"  id="settings1">
					 <b>   Company Information </b> <i class="glyphicon glyphicon-chevron-down pull-right"></i>
					
					</div>
					<div class="row settingsDiv settings1Div">
					<div class="input-group ">
					  <span class="input-group-addon"><i class="fa fa-building-o"></i></span>
					  <input  type="text" class="form-control" name="companyName" pattern="[a-zA-Z 0-9]{1,40}" value="<?php echo $orders_data[0]->company_name?$orders_data[0]->company_name:'';?>" 
					  placeholder="Company Name" title="Company Name" required>
					</div>
					<br>
					
					<div class="input-group">
					  <span class="input-group-addon"><i class="glyphicon glyphicon-briefcase"></i></span>
					 
					      <select id="companyType" name="companyType"  class="form-control selectField" required title="Company Type">
                               
                                <?php
								$companyType1=$orders_data[0]->m_company_type_id?$orders_data[0]->m_company_type_id:'';
                                     if (isset($com_type) && (count($com_type) > 0)) {

                                        foreach ($com_type as $value) {
                                        ?>

                                        <option value="<?php echo $value->m_company_type_id ? $value->m_company_type_id : ''; ?>"
										  <?php if($companyType1==$value->m_company_type_id){ echo "selected";}?>	>
										
										<?php echo $value->company_type ? $value->company_type : ''; ?>
										
										</option>

                                    <?php }
                                }
                                ?>
                            </select>
					  
					</div>
					<br>
					
					<div class="input-group">
					  <span class="input-group-addon"><i class="fa fa-phone"></i></span>
					  <input type="text" class="form-control"   name="phoneNumber" value="<?php echo $orders_data[0]->business_contact_no?$orders_data[0]->business_contact_no:'';?>" placeholder="Phone Number" pattern="[0-9]{10}"   maxlength="10"  title="Phone Number" required>
					</div>
					<br>
					
					<div class="input-group">
					  <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
					  <input type="email" class="form-control"   name="email" value="<?php echo $orders_data[0]->business_email?$orders_data[0]->business_email:'';?>" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"  placeholder="Email"  title="Email" required>
					</div>
					    <br>
					     
                    <div class="input-group">
					  <span class="input-group-addon"><i class="fa fa-address-card"></i></span>
					  <input type="text" class="form-control"   name="panCardNumber" value="<?php echo $orders_data[0]->business_pan?$orders_data[0]->business_pan:'';?>" placeholder="Pan Card Number" pattern="[a-zA-Z0-9]{10}"   maxlength="10"  title="Pan Card Number" required>
					</div>
					   <br>
					  
                     <div class="input-group">
					  <span class="input-group-addon"><i class="fa fa-address-card-o"></i></span>
					  <input type="text" class="form-control"   name="gstNumber"value="<?php echo $orders_data[0]->gst_number?$orders_data[0]->gst_number:'';?>" placeholder="GST Number" pattern="[a-zA-Z0-9]{1,30}"   maxlength="15" title="GST Number"required>
					</div>
					         <br>
					
                    <div class="input-group">
					  <span class="input-group-addon"><i class="fa fa-bank"></i></span>
					  <input type="text" class="form-control"   name="bankAccountNumber" value="<?php echo $orders_data[0]->bank_account?$orders_data[0]->bank_account:'';?>" placeholder="Bank Account Number"  pattern="[0-9]{8,20}" maxlength="20" title="Bank Account Number" required>
					</div>
					<br/>
						
					 <div class="input-group ">
					   Office Address 
					 <br> <br>
					</div> 	
					 <div class="input-group">
					  <span class="input-group-addon"><i class="fa fa-building-o"></i></span>
					  <input type="text" class="form-control"   value="<?php echo $orders_data[0]->address1?$orders_data[0]->address1:'';?>" name="address" placeholder="address" title="address"required>
					</div>
					<br/>
					 <div class="input-group">
					  <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
					  <input type="text" class="form-control"   name="city" pattern="[a-zA-Z]{1,40}" value="<?php echo $orders_data[0]->city?$orders_data[0]->city:'';?>"placeholder="City" title="City"required>
					</div>
					<br/>
					 <div class="input-group">
					  <span class="input-group-addon"><i class="fa fa-flag-o"></i></span>
					 
					   <select  name="state"   class="form-control selectField" required title="State">
                               
                                <?php
								   $stateType1=$orders_data[0]->state_id?$orders_data[0]->state_id:'';
                                     if (isset($states) && (count($states) > 0)) {

                                        foreach ($states as $value) {
                                        ?>

                                        <option value="<?php echo $value->state_id ? $value->state_id : ''; ?>"
										  <?php if($stateType1==$value->state_id){ echo "selected";}?>	>
										
										<?php echo $value->state_name ? $value->state_name : ''; ?>
										
										</option>

                                    <?php }
                                }
                                ?>
                            </select>
					</div>
					<br/>
					<div class="input-group">
					  <span class="input-group-addon"><i class="fa fa-location-arrow"></i></span>
					  <input type="text" class="form-control"   name="pincode" value="<?php echo $orders_data[0]->pincode?$orders_data[0]->pincode:'';?>" placeholder="Pincode"  pattern="[0-9]{1,6}"  maxlength="6" title="Pincode" required>
					</div>
					<br/>
					</div>
					<div class="row settings" id="settings2">
					 <b>   Personal Information </b> <i class="glyphicon glyphicon-chevron-down pull-right"></i>
					
					</div>
					 
                  <div class="row settingsDiv settings2Div">					
					<div class="input-group ">
					  <span class="input-group-addon"><i class=" fa fa-user"></i></span>
					  <input  type="text" class="form-control" name="firstName1" pattern="[a-zA-Z]{1,40}" value="<?php echo $orders_data[0]->surname?$orders_data[0]->surname:'';?>" placeholder="First Name" title="First Name" required>
					</div>
					<br>
					<div class="input-group ">
					  <span class="input-group-addon"><i class=" fa fa-user"></i></span>
					  <input  type="text" class="form-control" name="secondName1"pattern="[a-zA-Z]{1,40}"  value="<?php echo $orders_data[0]->name?$orders_data[0]->name:'';?>" placeholder="Second Name" title="Second Name" required>
					</div>
					<br>
				     <div class="input-group ">
					  <span class="input-group-addon"><i class=" fa fa-phone"></i></span>
					  <input  type="text" class="form-control" name="phoneNumber1" value="<?php echo $orders_data[0]->phone?$orders_data[0]->phone:'';?>" placeholder="Phone Number" title="Phone Number" pattern="[0-9]{10}"   maxlength="10"  required>
					</div>
					<br>
					
				     <div class="input-group ">
					  <span class="input-group-addon"><i class=" fa fa-phone"></i></span>
					  <input  type="text" class="form-control" name="alternativeNumber1" value="<?php echo $orders_data[0]->alternative_number?$orders_data[0]->alternative_number:'';?>" placeholder="Alternative Number" pattern="[0-9]{10}"   maxlength="10"  title="Alternative Number" required>
					</div>
					<br>
					
				     <div class="input-group ">
					  <span class="input-group-addon"><i class=" fa fa-envelope"></i></span>
					  <input  type="text" class="form-control" name="email1" value="<?php echo $orders_data[0]->person_email?$orders_data[0]->person_email:'';?>" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"  placeholder="Email Id" title="Email Id"  required>
					</div>
					<br>
					
				     <div class="input-group ">
					  <span class="input-group-addon"><i class="fa fa-address-card"></i></span>
					  <input  type="text" class="form-control" name="panCardNumber1" value="<?php echo $orders_data[0]->person_pan_num?$orders_data[0]->person_pan_num:'';?>" placeholder="Pan Card Number" pattern="[a-zA-Z0-9]{10}"   maxlength="10" title="Pan Card Number"  required>
					</div>
					<br>
					
				     <div class="input-group ">
					  <span class="input-group-addon"><i class="fa fa-address-card-o"></i></span>
					  <input  type="text" class="form-control" name="adhaarNumber1" value="<?php echo $orders_data[0]->adhaar?$orders_data[0]->adhaar:'';?>" placeholder="Adhaar Number" title="Adhaar Number" pattern="[0-9]{12}"   maxlength="12" required>
					</div>
					<br>
					
					
                      <div class="input-group ">
					   Permanent   Address :
					 <br> <br>
					</div> 	
					 <div class="input-group">
					  <span class="input-group-addon"><i class="fa fa-home"></i></span>
					  <input type="text" class="form-control"   name="address1"value="<?php echo $orders_data[0]->person_address?$orders_data[0]->person_address:'';?>" placeholder="address" title="address"  required>
					</div>
					<br/>
					 <div class="input-group">
					  <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
					  <input type="text" class="form-control"  pattern="[a-zA-Z]{1,40}"  name="city1" value="<?php echo $orders_data[0]->person_city?$orders_data[0]->person_city:'';?>" placeholder="City" title="City" required>
					</div>
					<br/>
					 <div class="input-group">
					  <span class="input-group-addon"><i class="fa fa-flag-o"></i></span>
					 
					      <select  name="state1"   class="form-control selectField" required title="State">
                               
                                <?php
								   $stateType2=$orders_data[0]->person_state_id?$orders_data[0]->person_state_id:'';
                                     if (isset($states) && (count($states) > 0)) {

                                        foreach ($states as $value) {
                                        ?>

                                        <option value="<?php echo $value->state_id ? $value->state_id : ''; ?>"
										  <?php if($stateType2==$value->state_id){ echo "selected";}?>	>
										
										<?php echo $value->state_name ? $value->state_name : ''; ?>
										
										</option>

                                    <?php }
                                }
                                ?>
                            </select>
					  
					  
					</div>
					<br/>
					<div class="input-group">
					  <span class="input-group-addon"><i class="fa fa-location-arrow"></i></span>
					  <input type="text" class="form-control"   name="pincode1"value="<?php echo $orders_data[0]->person_pincode?$orders_data[0]->person_pincode:'';?>"  placeholder="Pincode" pattern="[0-9]{1,6}"  maxlength="6"required>
					</div>
					<br/>
						</div>				
				 
        </div>
        <div class="modal-footer">
               <button type="submit" class="btn btn-info" name="changePassword" value="Change Password" style="background:#337ab7;">Update</button>
        </div>
      </div>
       </form>
    </div>
  </div>
  


<script>
$(document).ready(function(){ 


        $("#changePassword").submit(function(){
			
			
         var newPassword=$('#newPassword').val();
		 var confirmPassword=$('#confirmPassword').val();

         if(newPassword!=confirmPassword)
         { 
	 
	          $("#passwordError").html("Please check confirm  password not matched.");
            return false; 
         }
 
      });
	 
	   $("#updatePassword").submit(function(){
			
		
	        alert("update option , Not Implemented");
            return false; 
         
 
      });
	 

});
    $("#settings1").click(function()
		 {     $(".settingsDiv").slideUp("slow");
			  $(".settings1Div").slideToggle("slow");
			  
		 });
		  
		   $("#settings2").click(function()
		 { $(".settingsDiv").slideUp("slow");
			  $(".settings2Div").slideToggle("slow");
		 });
  </script>