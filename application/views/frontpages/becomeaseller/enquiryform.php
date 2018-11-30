<form action="<?php echo base_url() ?>BecomeASeller/enquiry" method="post">
								<div class="col_one_third">
									<label for="template-medical-name">Name * :</label>
									<input  type="text" placeholder="Name" id="firstName" name="firstName" class="form-control not-dark"  required pattern="[a-zA-Z ]{1,40}" title="Please check name">
								</div>
								<div class="col_one_third">
									<label for="template-medical-name">Mobile No * :</label>
									<input  type="text" placeholder="Contact Number" id="mobileno" name="mobileno" onkeyup="search_func(this.value,'mobile');" class="form-control not-dark"  required pattern="[0-9]{10}" title="Please enter valid phone number" maxlength="10">
								</div>
								<div class="col_one_third col_last">
									<label for="template-medical-email">Email Address * :</label>
									<input  type="email" placeholder="Enter Email ID" id="email" name="email" onkeyup="search_func(this.value,'email');" class="form-control not-dark"  required>
								</div>
								<div class="clear"></div>
								<h4 class="padngL">Your Business Information [All Fields Are Mandatory] :</h4>
								<div class="col_one_third">
									<label for="template-medical-email">Company Name * :</label>
									<input  type="text" placeholder="Company Name" id="companyName" name="companyname" class="form-control not-dark"  required pattern="[a-zA-Z 0-9]{1,40}" title="Please check company name">
                            <input type="hidden" name="company_type" id="company_type" value="1">
								</div>
								<div class="col_one_third">
									<label for="template-medical-dob">Website * :</label>
									<input  type="text" title="Include http://" placeholder="Website" id="Address" name="Address1" class="form-control not-dark"  required>
								</div>
								<div class="col_one_third col_last">
									<label for="template-medical-dob">City * :</label>
									<input  type="text" placeholder="City" id="City" name="City" class="form-control not-dark"  required pattern="[a-zA-Z 0-9]{1,40}" title="Please check city name">
								</div>
								<div class="clear"></div>
								<div class="col_one_third">
									<label for="template-medical-email">State * :</label>
									<select name="state_id" id="state_id" class="form-control not-dark" required>
                                <option value="">Select State</option>
                                 <?php
                                if (isset($states) && (count($states) > 0)) {

                                    foreach ($states as $state) {
                                        ?>

                                        <option value="<?php echo $state->state_id ? $state->state_id : ''; ?>"><?php echo $state->state_name ? $state->state_name : ''; ?></option>
                                <?php } }?>

                            </select>
								</div>
								<div class="col_three_fifth enqfrm" style="float: left;">
									<label for="template-medical-dob">Categories Interested In * :</label><br>
					 
<?php
                                if (isset($category_interested) && (count($category_interested) > 0)) {
$i=1;
                                    foreach ($category_interested as $cat) {
                                        
                                       // print_r($cat);
                                        ?>
                                   <label class="rightmargin-sm">
									
                                             <input type="checkbox" class="css-checkbox" id="cat<?php echo $cat->m_category_id ? $cat->m_category_id : $i; ?>" name="categories[]" value="<?php echo $cat->m_category_id ? $cat->m_category_id : $i; ?>">
                                                <label for="cat<?php echo $cat->m_category_id ? $cat->m_category_id : $i; ?>" class="css-label"><span><?php echo $cat->category_name ? $cat->category_name : ''; ?></span></label>

                                    </label>
 <?php  $i++;}
                                } ?>
                 
								</div>
								
								
								<div class="clear"></div>
								
								<div class="col_full1 topmargin-sm1 nobottommargin1">
                                                                    <button type="submit" id="submit"class="btn btn-primary evm14" > Submit</button>
									
								</div>
								<div class="clear"></div>
							</form>




