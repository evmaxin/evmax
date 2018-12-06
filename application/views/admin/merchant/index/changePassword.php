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
#frmCheckPassword {border-top:#F0F0F0 2px solid;background:#FAF8F8;padding:10px;}
.demoInputBox{padding:7px; border:#F0F0F0 1px solid; border-radius:4px;}
#password-strength-status {padding: 5px 10px;color: #FFFFFF; border-radius:4px;margin-top:5px;}
.medium-password{background-color: #E4DB11;border:#BBB418 1px solid;}
.weak-password{background-color: #FF6600;border:#AA4502 1px solid;}
.strong-password{background-color: #12CC1A;border:#0FA015 1px solid;}
</style>
<div class="page-content">

      <div class="row">
          <div class="error"> <?php echo validation_errors(); ?></div>
        <div class="col-md-12">
          
                      <div class="modal-body modal-content changePasswordBox">
                          	<form action="<?php echo base_url()?>admin/merchant/Index/changeMerchantPassword" method="post" id="changePassword1"> 
                                    <small style="position: relative;top: -8px;color: red;">Minimum password length is 8 characters, should include alphabets, numbers and special characters.</small>
					<div class="input-group">
					  <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                          <input  type="password" class="form-control" id="newPassword" name="newPassword" placeholder="New Password" required pattern=".{8,20}" onKeyUp="checkPasswordStrength();" value="<?php echo set_value('newPassword'); ?>">
					</div>
					<br>
					
					<div class="input-group">
					  <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
					  <input type="password" class="form-control"  id="confirmPassword" name="confirmPassword" placeholder="Confirm  Password" required pattern=".{8,20}" value="<?php echo set_value('confirmPassword'); ?>">
					</div>
                                       <div id="password-strength-status"></div>
				    <div class="input-group">
					    <label id="passwordError"></label>
						
					</div>
					<br/>
                                        
                                        <button type="submit" class="btn btn-info" id="changePassword" class="changePassword" name="changePassword" style="display: none;" value="Change Password" style="background:#337ab7;">Update</button>      
                                        <a href="<?php echo base_url()?>admin/merchant/Index/logout" class="btn green">Back</a>      
                                             <br>
                                             <br><div id="show" style="display: none;"><input type="checkbox" onclick="myFunction()">Show Password</div>
                                </form> 
        </div>

          </div>
        </div>
      </div>


<script>
   function checkPasswordStrength() {
       $("#show").show();
       $("#changePassword").hide();
      var number = /([0-9])/;
	var alphabets = /([a-zA-Z])/;
	var special_characters = /([~,!,@,#,$,%,^,&,*,-,_,+,=,?,>,<])/;
	
	if($('#newPassword').val().length<8) {
		$('#password-strength-status').removeClass();
		$('#password-strength-status').addClass('weak-password');
		$('#password-strength-status').html("Weak (should be atleast 8 characters.)");
	} else {  	
	    if($('#newPassword').val().match(number) && $('#newPassword').val().match(alphabets) && $('#newPassword').val().match(special_characters)) {            
                //document.getElementById("changePassword").disabled = false;
               // $('#').prop('disabled', false);
              $("#changePassword").show();
			$('#password-strength-status').removeClass();
			$('#password-strength-status').addClass('strong-password');
			$('#password-strength-status').html("Strong");
        } else {
            $("#changePassword").hide();
			$('#password-strength-status').removeClass();
			$('#password-strength-status').addClass('medium-password');
			$('#password-strength-status').html("Medium (should include alphabets, numbers and special characters.)");
        } 
	}
}
function myFunction() {
    var x = document.getElementById("newPassword");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}
    </script>
  