   <div class="page-header">
      <div class="container">
        <div class="row">
          <div class="col-md-12">            
            <div class="breadcrumb">
              <a href="#"><i class="icon-home"></i> Home</a>
              <span class="crumbs-spacer"><i class="fa fa-angle-double-right"></i></span>
              <span class="current">Login / Register</span>
              <h2 class="entry-title">Account</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Page Header -->

    <!-- Start Content -->
    <div id="content">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="login">
              <div class="login-form-container">
                   <?php if($this->session->flashdata('fail')) { ?> <div class="alert alert-danger"> <?php echo $this->session->flashdata('fail'); ?></div> <?php } ?>
                <div class="login-text">
                  <h3>Login</h3>
                  <p>Please Register using account detail bellow.</p>
                </div>
                <!-- Login Form Start -->
               <form class="form-my-account" method="post" action="<?php echo base_url()?>customers/login" validate>
                  <div class="form-group">
                    <div class="controls">
                      <input type="text" class="form-control email" pattern="[^@]+@[^@]+\.[a-zA-Z]{2,6}" placeholder="Email" name="email" minlength="15" maxlength="45" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="controls">
                      <input type="password" class="form-control" placeholder="Password" name="password" minlength="4" maxlength="20" required>
                    </div>
                  </div>
                  <div class="button-box">
                    <div class="login-toggle-btn">
                        
                        <a href="#">Forgot Password?</a>
                    </div>
                    <button type="submit" class="btn btn-common log-btn">Login</button>
                  </div>
                </form>                
                <!-- Login Form End -->
              </div>              
            </div>            
          </div>
          <div class="col-md-6">
            <div class="login">
                
              <div class="login-form-container">
                  <?php if($this->session->flashdata('success')) { ?> <div class="alert alert-success"> <?php echo $this->session->flashdata('success'); ?></div> <?php } ?>
                <div class="login-text">
                  <h3>Creat a new account</h3>
                  <p>Please Register using account detail bellow.</p>
                </div>
                <!-- Account Form Start -->
                <form  action="<?php echo base_url()?>customers/register" class="login-form" role="form" method="post" onsubmit="return myFunction()">
                  <div class="form-group">
                    <div class="controls">
                      <input type="text" class="form-control" required placeholder="Name *" name="fname" minlength="3">
                    </div>
                  </div>
                <div class="form-group">
                    <div class="controls">
                      <input type="text" class="form-control email1" required pattern="[^@]+@[^@]+\.[a-zA-Z]{2,6}" placeholder="E-mail *" name="email" minlength="15" maxlength="45">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="controls">
                        <input type="password" id="pass1" class="form-control" required placeholder="Password *"  name="password" minlength="5" maxlength="20">
                    </div>
                  </div>
                     <div class="form-group">
                    <div class="controls">
                        <input type="password" id="pass2" class="form-control" required placeholder="Confirm Password *"  name="confpassword" minlength="5" maxlength="20">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="controls">
                      <input type="text" class="form-control" required placeholder="Phone * (For order status updates)" name="phone" onkeypress="return isNumber(event)" minlength="8" maxlength="12">
                    </div>
                  </div>
                    <div class="form-group">
                    <div class="controls">
                      <select class="form-control" required name="genter">
                          <option value="Female" selected>Female (Gender)</option>
                          <option value="Male">Male (Gender)</option>
                      </select>
                    </div>
                  </div>
                  <div class="button-box">
                    <button type="submit" value="Register" name="register" class="btn btn-common log-btn">Register</button>
                  </div>
                </form>
                <!-- Account Form End -->
              </div>              
            </div>            
          </div>
        </div>
      </div>
    </div>
    <!-- End Content -->
<script>
    function myFunction() {
    var pass1 = document.getElementById("pass1").value;
    var pass2 = document.getElementById("pass2").value;
    var ok = true;
    if (pass1 != pass2) {
        alert("Passwords Do not match");
        document.getElementById("pass1").style.borderColor = "#E34234";
        document.getElementById("pass2").style.borderColor = "#E34234";
        ok = false;
    }
    else {
        document.getElementById("pass1").style.borderColor = "#249011";
        document.getElementById("pass2").style.borderColor = "#249011";
    }
    return ok;
}

    
    </script>
    <script>
                  function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
}
</script>