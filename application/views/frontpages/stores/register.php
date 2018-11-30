<style>
    #store_bg
    {
    position: fixed;
    top: -50%;
    left: -50%;
    width: 200%;
    height: 200%;
    }
    #store_bg img{
            position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    margin: auto;
    min-width: 50%;
    min-height: 50%;
    }
    .header
    {
        display: none;
    }
    footer{
    top: -50%;
    left: -50%;
    width: 200%;
    height: 200%;
    }
    .contact-us, .register_hide{
        display: none;
    }
    #content
    {
   padding: 20px 0px !important;
    }
</style>


    <!-- Start Content -->
    <div id="content">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div id="store_bg">
        <img src="https://static.pexels.com/photos/264554/pexels-photo-264554.jpeg" alt="">
    </div>
          </div>
          <div class="col-md-6">
            <div class="login">
                
              <div class="login-form-container">
                  <?php if($this->session->flashdata('success')) { ?> <div class="alert alert-success"> <?php echo $this->session->flashdata('success'); ?></div> <?php } ?>
                <div class="login-text">
                  <h3>Become a Seller</h3>
                  <p>Please register using detail bellow.</p>
                </div>
                <!-- Account Form Start -->
                <form  action="<?php echo base_url()?>Stores/addCustomer" class="login-form" role="form" method="post" onsubmit="return myFunction()">
                  <div class="form-group">
                    <div class="controls">
                        <input type="text" class="form-control" required placeholder="Store name *" name="store_name" pattern="[a-zA-Z0-9\s]+" minlength="3" title="Only Names and Numbers allowed">
                    </div>
                  </div>
                <div class="form-group">
                    <div class="controls">
                      <input type="text" class="form-control email1" required pattern="[^@]+@[^@]+\.[a-zA-Z]{2,6}" placeholder="E-mail *" name="email" title="Email only" minlength="15" maxlength="45">
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
                      <input type="text" class="form-control" required placeholder="Phone * " name="phone" onkeypress="return isNumber(event)" minlength="8" maxlength="12">
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