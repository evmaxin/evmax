<style>
    .page-sidebar {display: none !important;}
    .page-sidebar-menu{display: none !important;}
    body {
    background-color: #fff;
}
.page-footer-inner{display: none !important;}
.page-header{display: none !important;}
</style>
<div class="page-content">

      <div class="row">
          <div class="error"> <?php echo validation_errors(); ?></div>
        <div class="col-md-12">
          
                      <div class="modal-body modal-content changePasswordBox">
                          	<form action="<?php echo base_url()?>admin/merchant/Index/changeMerchantPassword" method="post" id="changePassword"> 
                                    <small style="position: relative;top: -8px;color: red;">Minimum password length is 4 characters</small>
					<div class="input-group">
					  <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                          <input  type="password" class="form-control" id="newPassword" name="newPassword" placeholder="New Password" required minlength="4" value="<?php echo set_value('newPassword'); ?>">
					</div>
					<br>
					
					<div class="input-group">
					  <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
					  <input type="password" class="form-control"  id="confirmPassword" name="confirmPassword" placeholder="Confirm  Password" required minlength="4" value="<?php echo set_value('confirmPassword'); ?>">
					</div>
				    <div class="input-group">
					    <label id="passwordError"></label>
						
					</div>
					<br/>
					     <button type="submit" class="btn btn-info" name="changePassword" value="Change Password" style="background:#337ab7;">Update</button>      
                                             <a href="<?php echo base_url()?>admin/merchant/Index/logout">Back</a>      
                                </form> 
        </div>

          </div>
        </div>
      </div>

