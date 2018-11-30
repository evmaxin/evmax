<!DOCTYPE html>
<html lang="en">
 <?php  $this->load->view('frontpages/header'); ?>
  <body>  
    <!-- Header Section Start -->
    <div class="header">    

      <!-- Start Top Bar -->
    <?php // $this->load->view('frontpages/topbar'); ?>
      <!-- End Top Bar -->    

      <!-- Start  Logo & Naviagtion  -->
       <?php  //$this->load->view('frontpages/navbar'); ?>
      

    </div>
    <!-- Header Section End -->    


<!-- home page content from below slider to footer -->
 <?php  if(isset($content)) { echo $content;} ?>
<!-- home page content ends -->
  <!-- footer -->
         <?php  //$this->load->view('frontpages/footer'); ?>

    <!-- Go To Top Link -->
    <a href="#" class="back-to-top">
      <i class="icon-arrow-up"></i>
    </a>

    <!-- All modals added here for the demo -->
    
    <div class="md-overlay"></div>
    <!-- the overlay element -->

    <!-- Preloader -->
    <div id="preloader">
      <div id="status">
        <div class="spinner">
          Loading...
        </div>
      </div>
    </div>
    <!-- End Preloader -->
        
    <!-- All js here -->
    
    <script type="text/javascript" src="<?php echo base_url() ?>assets/frontend/js/bootstrap-select.min.js"></script> 
    <script type="text/javascript" src="<?php echo base_url() ?>assets/frontend/js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/frontend/js/ion.rangeSlider.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/frontend/js/modalEffects.js"></script>   
    <script type="text/javascript" src="<?php echo base_url() ?>assets/frontend/js/classie.js"></script>    
    <script type="text/javascript" src="<?php echo base_url() ?>assets/frontend/js/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/frontend/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/frontend/js/nivo-lightbox.js"></script>       
    <script type="text/javascript" src="<?php echo base_url() ?>assets/frontend/js/slick.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/frontend/js/jquery.slicknav.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/frontend/js/form-validator.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/frontend/js/contact-form-script.js"></script> 
    <script type="text/javascript" src="<?php echo base_url() ?>assets/frontend/js/main.js"></script>       
    <?php 

class Person
{
    function do_foo()
    {
        echo "Doing foo."; 
    }
}

//$bar = new Person;
//$bar->do_foo();
//print_r($productattributes);
if(isset($productattributes) && !empty($productattributes)){
$class = 'Person';
$myObj = new $class;
foreach ($productattributes as $attributes) {
   $prop = strtolower($attributes->attribute_type);
   //$prop = ($attributes->attribute_type."~".$attributes->attribute_type_id);
   //var_dump($prop);
   $attrinutenames = explode(",",$attributes->name);
    $attributevalues = explode(",",$attributes->attribute_id);
    $myObj->{$prop} =  (is_array($attributevalues))?array_values($attributevalues)[0]:$attributes->attribute_id;
 
  
}
$myJSON = json_encode($myObj);  
//print_r($myJSON);
//$myJSON1 = json_encode($myObj);  
}
if(empty($myJSON))
{
    $ar = array('size');
    $myJSON = json_encode($ar);
    
}
?>
<script>
    var name2 ={color: "1"};
    var name1 = <?php echo $myJSON ?>; 
   
   // var obj = {};
if(JSON.stringify(name1) === '{}') { //This will check if the object is empty
   var names = name2;
 //  alert();
}else{
     var names = name1;
     console.log(names);
}
     //Set two variables first with default values,second with on change value and empty first array
   
</script>
<script>
	function numberOnly(numb) {
	
        var numbInput = (numb.which) ? numb.which : event.keyCode
            
			if (numbInput > 31 && (numbInput < 48 || numbInput > 57))
                  return false;
 
            return true;
    }
	
			
	$(document).ready(function() {
var myData = [];
var select;
var select1,select2;

var c;
      $( ".target" ).change(function() {
          var cls;
          var obj = {};
    Object.keys(names).forEach(function(key) {
     
     cls=key;
     //var string1= key; 
       //cls = key.substring(0, key.indexOf('~')); // string value of attribute type
 // alert(cls);
    //  var result = string1.substring(string1.indexOf('~') + 1);  // integer value of attribute type
   //  alert(result);
    c = '#'+cls+' option:selected';
           select =  $(c).val();
           if(select==="")
           {
            //  alert("Please select "+cls); // for validation
           }
         //  select1 =  $('.Color option:selected').val();
        //   select2 =  $(c).val();
  cls = cls.toLowerCase();

//var myArray ={};
var par = cls; //attribute type id or cls{attribute type name}
obj[par] =select; //obj = {color: "1", size: "2",...} // actual object display format in output => user selected {attribute_type_id:attribute_id}
     //console.log(key,names[key]);
});
names = obj;
console.log(names);
});
		$(".add_qty").click(function(){
                   var position = $(this).attr('position');
			var qty = $("#qty\\["+position+"\\]").val();
			qty++;
			$("#qty\\["+position+"\\]").val(qty);
			//alert();
                        $(".update_cart").trigger("click");
		});
		
		$(".less_qty").click(function(){
			var position = $(this).attr('position');
			var qty = $("#qty\\["+position+"\\]").val();
			qty--;
			if(qty >= 0){
				$("#qty\\["+position+"\\]").val(qty);
                                if(qty === 0){
                                 $("#qty\\["+position+"\\]").val(1);   
                                }
                               // $("#qty\\["+position+"\\]").val("1");
			}
			$(".update_cart").trigger("click");
		});
		
		
		$(".add_to_cart").click(function(){
			
                   /*For validating select boxes in detail page   */
                    var c1;
          var cls1;
       var warng =[];
    Object.keys(names).forEach(function(key1) {
     
     cls1=key1;

    c1 = '#'+cls1+' option:selected';
           select1 =  $(c1).val();
           if(select1==="")
           {
           //   alert("Please select "+cls1); // for validation
              warng.push("Please select "+cls1);
           }

//return false; 

        });
        console.log(warng);
/* End For validating select boxes in detail page */
                   
			
			var product_id = $(this).attr('product_id');
			var qty = $('.qty'+product_id).val();
			var total_harga = $("#total").val();
                    //  var names={color: "1", size: "2"};
                     if(warng.length > 0){ //customized code for validations in details page add to cart
                         $.each( warng, function( key, value ) {
                        //alert(value);
                        $( ".inner_validations" ).empty().append( "<p class='required'>"+value+"</p>" );
                          });
				//alert('Minumum quantity 1');
                        return false;
			}
                     else if(qty === 0){
				alert('Minumum quantity 1');
				return false;
			} else { // actual functinality works here
				$(".required").remove();
				$("#notification_div").html('<div class="alert alert-info" role="alert">Please wait...</div>');
				var dataString  =  { product_id  : product_id , qty : qty,'tNames[]' : names };

                                   
					$.ajax({
		
						type: "POST",
						url: "<?php echo base_url();?>cart",
						data: dataString,
						dataType: "json",
						cache		: false,
						success: function(data){
	
					
						
							$("#notification_div").html('<div class="alert alert-success" role="alert">Success add to cart...</div>');
                                                        
                                                           $('#notification_div').delay(5000).fadeOut('slow'); // To hide notification_div after 5 sec
                                                         
							$("#update_cart").html(data.update_cart.total);
							
				//alert(data.update_cart.total);
                                //location.reload();
				
				  
						} ,error: function(xhr, status, error) {
							//alert(status);
						},
					});
					
			}
			
		});
		
		$(".update_cart").click(function(){
			
			
			var total = $("#total").val();
			
			if(!total){
				alert('Cart empty');
				return false;
			} 
			
			if(total == 0){
				alert('Cart empty');
				return false;
			} 
			
			var notif = false;
			var qty = new Array();
			var product_id = new Array();
			var product_price = new Array();
			var i = 0;
			var new_total = 0;
			
			$(".qty").each(function(){
				if($(this).val() == 0){
					notif = true;
				}
				qty.push($(this).val());
			});
			
			$(".product_price").each(function(){
				product_price.push($(this).val());
			});
			
			//console.log("qty"+qty);
			
							
			
			
			if(notif == true){
				alert('Minumum quantity 1');
				return false;
			} else {
				
				
				$(".product_id").each(function(){
								product_id.push($(this).val());
								$('#span_total'+$(this).val()).html(product_price[i]*qty[i]);
								new_total += product_price[i]*qty[i];
								i++;
							});
							
							$('#span_all_total').html(new_total);
							$('#total').val(new_total);
                                                        $('#finaltotal').val(new_total);
			

				$("#notification_div").html('<div class="alert alert-info" role="alert">Please wait...</div>');
                                $('#notification_div').delay(5000).fadeOut('slow');
				//var names=["4","5"];
				var dataString  = { product_id  : product_id , qty : qty,'tNames[]' : names };
					
	
					$.ajax({
		
						type: "POST",
						url: "<?php echo base_url();?>Cart/update",
						data: dataString,
						dataType: "json",
						cache: false,
						success: function(data){
	
                                                //alert(data);
							$("#notification_div").html('<div class="alert alert-success" role="alert">Success update cart...</div>');
							$("#update_cart").html(data.update_cart.total);
							
							//alert(data);
	
				  
						} ,error: function(xhr, status, error) {
							alert(status);
						},
					});
					
					
					
			}
			
		});
		
		$("#submit").click(function(){
			$('.modal-alert').modal('show');
		});
		
		
		
			
		$(".delete_cart").click(function(){
			
	
			var x = confirm("Delete item ?");
			var product_id = $(this).attr('product_id');
			var total = $("#total").val();
			var position = $(this).attr('position');
			
			var product_price = $("#product_price\\["+position+"\\]").val();
			var qty = $("#qty\\["+position+"\\]").val();
			
			var price_delete = product_price*qty;
			var new_total = eval(total - price_delete);
			
			
			if(x == true){
			
			
				$("#notification_div").html('<div class="alert alert-info" role="alert">Please wait ...</div>');
				
                               

                                
				var dataString  = { product_id  : product_id };
                              //  var newArray = dataString.slice();

                                //newArray.push( test );
				$.ajax({
		
						type: "POST",
						url: "<?php echo base_url();?>cart/delete",
						data: dataString,
						dataType: "json",
						cache		: false,
						success: function(data){
	
							$("#tr"+product_id).remove();
							$("#notification_div").html('<div class="alert alert-success" role="alert">Success delete item ...</div>');
							$('#notification_div').delay(5000).fadeOut('slow');
							
							$('#total').val(new_total);
                                                        $('#finaltotal').val(new_total);
                                                       $('#span_all_total').html(new_total);
					
							if(new_total == 0){
								$('#tr_total').remove();
								$('#tb_checkout').append(' <td colspan="6" align="center">Cart empty</td>');
								$('#button_bottom').hide();
							}
							
							$("#update_cart").html(data.update_cart);
				  
						} ,error: function(xhr, status, error) {
							alert(status);
						},
					});
					
					
				
			} else {
				return false;
			}
			
		});
		
		
		$(".empty_cart").click(function(){
			
			var total = $("#total").val();
			
			if(!total){
				alert('Cart empty');
				return false;
			} 
			
			if(total == 0){
				alert('Cart empty');
				return false;
			} 
	
			var x = confirm("Empty cart ?");

			if(x == true){
			
			
				$("#notification_div").html('<div class="alert alert-info" role="alert">Please wait ...</div>');
				
				var dataString  = { send  : true };
				$.ajax({
		
						type: "POST",
						url: "<?php echo base_url();?>cart/empty_cart",
						data: dataString,
						dataType: "json",
						cache		: false,
						success: function(data){
                                                 //   alert(data);
						
							$("#notification_div").html('<div class="alert alert-success" role="alert">Success empty cart ...</div>');
							$('.tr_total').remove();
                                                        $('#tr_total').remove();
							$('#tb_checkout').html(' <td colspan="6" align="center">Cart empty</td>');
							$('#button_bottom').hide();
							$("#update_cart").html(data.update_cart);
				  
						} ,error: function(xhr, status, error) {
							alert(status);
						},
					});
					
					
				
			} else {
				return false;
			}
			
		});
		

	});

</script>


  </body>
</html>