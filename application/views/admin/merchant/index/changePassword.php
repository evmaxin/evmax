<style>
    .page-sidebar {display: none !important;}
    .page-sidebar-menu{display: none !important;}
    body {
    background-color: #fff;
}
.page-footer-inner{display: none !important;}
.page-header{display: none !important;}
#result{
    font-weight: bold;
}
</style>
<div class="page-content">

      <div class="row">
          <div class="error"> <?php echo validation_errors(); ?></div>
        <div class="col-md-12">
          
                      <div class="modal-body modal-content changePasswordBox">
                          	<form action="<?php echo base_url()?>admin/merchant/Index/changeMerchantPassword" method="post" id="changePassword"> 
                                    <small style="position: relative;top: -8px;color: red;">Minimum password length is 6 characters</small>
					<div class="input-group">
					  <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                          <input  type="password" class="form-control" id="newPassword" name="newPassword" placeholder="New Password" required pattern=".{4,20}" value="<?php echo set_value('newPassword'); ?>">
					</div>
					<br>
					
					<div class="input-group">
					  <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
					  <input type="password" class="form-control"  id="confirmPassword" name="confirmPassword" placeholder="Confirm  Password" required pattern=".{4,20}" value="<?php echo set_value('confirmPassword'); ?>">
					</div>
                                        <span id="result"></span>
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


<script>
    $(document).ready(function() {
$('#newPassword').keyup(function() {
$('#result').html(checkStrength($('#newPassword').val()));
});
function checkStrength(password) {
var strength = 0
if (password.length < 4) {
$('#result').removeClass()
$('#result').addClass('short')
return 'Too short'
}
if (password.length > 6) strength += 1
// If password contains both lower and uppercase characters, increase strength value.
if (password.match(/([a-z].*[A-Z])|([A-Z].*[a-z])/)) strength += 1
// If it has numbers and characters, increase strength value.
if (password.match(/([a-zA-Z])/) && password.match(/([0-9])/)) strength += 1
// If it has one special character, increase strength value.
if (password.match(/([!,%,&,@,#,$,^,*,?,_,~])/)) strength += 1
// If it has two special characters, increase strength value.
if (password.match(/(.*[!,%,&,@,#,$,^,*,?,_,~].*[!,%,&,@,#,$,^,*,?,_,~])/)) strength += 1
// Calculated strength value, we can return messages
// If value is less than 2
if (strength < 2) {
$('#result').removeClass()
$('#result').addClass('weak')
return 'Weak'
} else if (strength == 2) {
$('#result').removeClass()
$('#result').addClass('good')
return 'Good'
} else {
$('#result').removeClass()
$('#result').addClass('strong')
return 'Strong'
}
}
});
    </script>