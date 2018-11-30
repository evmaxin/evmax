<style>
    form{
        margin-bottom: 0em;
    }
    </style>
<script src="<?php echo base_url() ?>assets/frontend/externalscript/jquery-1.11.2.min.js"></script>
<?php $this->load->view('frontpages/header'); ?>
  <body>  
    <!-- Header Section Start -->
 <?php $this->load->view('frontpages/navbar'); ?>
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/frontend/externalcss/leaflet.css" />

 <script src="<?php echo base_url() ?>assets/frontend/externalscript/leaflet.js"></script>
<link rel="stylesheet" href="<?php echo base_url() ?>assets/frontend/externalcss/font-awesome.min.css">
<link rel="stylesheet" href="<?php echo base_url() ?>assets/frontend/externalcss/leaflet-search.css">
<link rel="stylesheet" href="<?php echo base_url() ?>assets/frontend/externalcss/L.Control.Locate.min.css" />
 
<script src="<?php echo base_url() ?>assets/frontend/externalscript/L.Control.Locate.min.js" charset="utf-8"></script>
<script src="<?php echo base_url() ?>assets/frontend/externalscript/leaflet-search.js" charset="utf-8"></script>
    <!-- Header Section End -->    

    <!-- Banner Wrapper Start -->
<div class="banner-wrapper">

	<!-- Main Slider Section -->
 <section id="Vehicles_Option">
    <div class="container-fluid" >
    
        <div class="row vehicles" id="Hero_div" style="padding:0px 30px;">
      	 
      	</div>
      	 
    

        </div>
  </section>
    <!-- Main Slider Section End-->
<?php echo $map['html']; ?>
 <?php echo $map['js']; ?>

    
   
    

   
    <!-- Shop Collection Section End -->

  

 <?php $this->load->view('frontpages/footer'); ?>
    

    
        
  <!-- All js here -->
  
    <script type="text/javascript" src="<?php echo base_url() ?>assets/frontend/js/bootstrap-select.min.js"></script> 
    <script type="text/javascript" src="<?php echo base_url() ?>assets/frontend/js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/frontend/js/ion.rangeSlider.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/frontend/js/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/frontend/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/frontend/js/nivo-lightbox.js"></script> 
    <script type="text/javascript" src="<?php echo base_url() ?>assets/frontend/js/jquery.slicknav.js"></script>
    <script type="text/javascript" src="https://kenwheeler.github.io/slick/slick/slick.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/frontend/js/main.js"></script>
    

   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 

    <script src="<?php echo base_url() ?>assets/frontend/jquery/slider.js"></script> 
        <?php

        class Person {

            function do_foo() {
                echo "Doing foo.";
            }

        }

        if (isset($productattributes) && !empty($productattributes)) {
            $class = 'Person';
            $myObj = new $class;
            foreach ($productattributes as $attributes) {
                $prop = strtolower($attributes->attribute_type);
                $attrinutenames = explode(",", $attributes->name);
                $attributevalues = explode(",", $attributes->attribute_id);
                $myObj->{$prop} = (is_array($attributevalues)) ? array_values($attributevalues)[0] : $attributes->attribute_id;
            }
            $myJSON = json_encode($myObj);
        }
        if (empty($myJSON)) {
            $ar = array('size');
            $myJSON = json_encode($ar);
        }
        ?>
        <script>
            var name2 = {color: "1"};
            var name1 = <?php echo $myJSON ?>;

            // var obj = {};
            if (JSON.stringify(name1) === '{}') { //This will check if the object is empty
                var names = name2;
                //  alert();
            } else {
                var names = name1;
                //console.log(names);
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


            $(document).ready(function () {
                var myData = [];
                var select;
                var select1, select2;

                var c;
                $(".target").change(function () {
                    var cls;
                    var obj = {};
                    Object.keys(names).forEach(function (key) {

                        cls = key;
                
                        c = '#' + cls + ' option:selected';
                        select = $(c).val();
                        if (select === "")
                        {
                            //  alert("Please select "+cls); // for validation
                        }
                       
                        cls = cls.toLowerCase();

        //var myArray ={};
                        var par = cls; //attribute type id or cls{attribute type name}
                        obj[par] = select; //obj = {color: "1", size: "2",...} // actual object display format in output => user selected {attribute_type_id:attribute_id}
                        //console.log(key,names[key]);
                    });
                    names = obj;
        //console.log(names);
                });
                $(".add_qty").click(function () {
                    //alert();
                    var position = $(this).attr('position');
                    var delivery_location = $(this).attr('delivery_location_id');
                    var qty = $("#qty\\[" + position + "\\]").val();
                    //var qty = $("#delivery_location_id\\[" + position + "\\]").val();
                    qty++;
                    $("#qty\\[" + position + "\\]").val(qty);
                    //alert();
                    $(".update_cart").trigger("click");
                });

                $(".less_qty").click(function () {
                    var position = $(this).attr('position');
                    var delivery_location = $(this).attr('delivery_location_id');
                    var qty = $("#qty\\[" + position + "\\]").val();
                    qty--;
                    if (qty >= 0) {
                        $("#qty\\[" + position + "\\]").val(qty);
                        if (qty === 0) {
                            $("#qty\\[" + position + "\\]").val(1);
                        }
                        // $("#qty\\["+position+"\\]").val("1");
                    }
                    $(".update_cart").trigger("click");
                });


                $(".add_to_cart").click(function () {

                    /*For validating select boxes in detail page   */
                    var c1;
                    var cls1;
                    var warng = [];
                    Object.keys(names).forEach(function (key1) {

                        cls1 = key1;

                        c1 = '#' + cls1 + ' option:selected';
                        select1 = $(c1).val();
                       // alert(select1);
                        if (select1 === "")
                        {
                            //   alert("Please select "+cls1); // for validation
                            warng.push("Please select " + cls1);
                        }

        //return false; 

                    });
                    //console.log(warng);
                    /* End For validating select boxes in detail page */


                    var product_id = $(this).attr('product_id');
                    var qty = $('.qty' + product_id).val();
                    var delivery_location_id = $('#deliveryaddress').val();
                    //alert(delivery_location_id);
                    var total_harga = $("#total").val();
                    //  var names={color: "1", size: "2"};
                    if (warng.length > 0) { //customized code for validations in details page add to cart
                        $.each(warng, function (key, value) {
                            //alert(value);
                            $(".inner_validations").empty().append("<p class='required'>" + value + "</p>");
                        });
                        //alert('Minumum quantity 1');
                        return false;
                    } else if (qty === 0) {
                        alert('Minumum quantity 1');
                        return false;
                    } else { // actual functinality works here
                    //alert();exit();
                        $(".required").remove();
                        $("#notification_div").html('<div class="alert alert-info" role="alert">Please wait...</div>');
                        var dataString = {product_id: product_id, qty: qty, 'tNames[]': names,delivery_location_id:delivery_location_id};


                        $.ajax({

                            type: "POST",
                            url: "<?php echo base_url(); ?>cart",
                            data: dataString,
                            dataType: "json",
                            cache: false,
                            success: function (data) {
 console.log(names);


                                $("#notification_div").html('<div class="alert alert-success" role="alert">Product added to cart...</div>');

                                $('#notification_div').delay(500).fadeOut('slow'); // To hide notification_div after 5 sec
                                //alert(data.update_cart.total);
                                $(".update_cart1").html(data.update_cart.total);
                                //$(".update_cart").html(data.update_cart.total);

                                //alert(data.update_cart.total);
                                //location.reload();


                            }, error: function (xhr, status, error) {
                                //alert(status);
                            },
                        });

                    }

                });

                $(".update_cart").click(function () {


                    var total = $("#total").val();

                    if (!total) {
                        alert('Cart empty');
                        return false;
                    }

                    if (total == 0) {
                        alert('Cart empty');
                        return false;
                    }

                    var notif = false;
                    var qty = new Array();
                    var delivery_location_id = $(this).attr('delivery_location_id');
                    var product_id = new Array();
                    var product_price = new Array();
                    var i = 0;
                    var new_total = 0;

                    $(".qty").each(function () {
                        if ($(this).val() == 0) {
                            notif = true;
                        }
                        qty.push($(this).val());
                    });

                    $(".product_price").each(function () {
                        product_price.push($(this).val());
                    });

                    //console.log("qty"+qty);




                    if (notif == true) {
                        alert('Minumum quantity 1');
                        return false;
                    } else {


                        $(".product_id").each(function () {
                            product_id.push($(this).val());
                            $('#span_total' + $(this).val()).html(product_price[i] * qty[i]);
                            new_total += product_price[i] * qty[i];
                            i++;
                        });

                        $('#span_all_total').html(new_total);
                        $('#total').val(new_total);
                        $('#finaltotal').val(new_total);


                        $("#notification_div").html('<div class="alert alert-info" role="alert">Please wait...</div>');
                        $('#notification_div').delay(5000).fadeOut('slow');
                        //var names=["4","5"];
                        var dataString = {product_id: product_id, qty: qty, 'tNames[]': names,delivery_location_id:delivery_location_id};


                        $.ajax({

                            type: "POST",
                            url: "<?php echo base_url(); ?>Cart/update",
                            data: dataString,
                            dataType: "json",
                            cache: false,
                            success: function (data) {

                                //alert(data);
                                $("#notification_div").html('<div class="alert alert-success" role="alert">Success update cart...</div>');
                                $("#update_cart").html(data.update_cart.total);

                                //alert(data);


                            }, error: function (xhr, status, error) {
                                alert(status);
                            },
                        });



                    }

                });

                $("#submit").click(function () {
                    $('.modal-alert').modal('show');
                });




                $(".delete_cart").click(function () {


                    var x = confirm("Delete item ?");
                    var product_id = $(this).attr('product_id');
                    var total = $("#total").val();
                    var position = $(this).attr('position');
                    var delivery_location_id = $('#deliveryaddress').val();

                    var product_price = $("#product_price\\[" + position + "\\]").val();
                    var qty = $("#qty\\[" + position + "\\]").val();

                    var price_delete = product_price * qty;
                    var new_total = eval(total - price_delete);


                    if (x == true) {


                        $("#notification_div").html('<div class="alert alert-info" role="alert">Please wait ...</div>');




                        var dataString = {product_id: product_id};
                        //  var newArray = dataString.slice();

                        //newArray.push( test );
                        $.ajax({

                            type: "POST",
                            url: "<?php echo base_url(); ?>cart/delete",
                            data: dataString,
                            dataType: "json",
                            cache: false,
                            success: function (data) {

                                $("#tr" + product_id).remove();
                                $("#notification_div").html('<div class="alert alert-success" role="alert">Success delete item ...</div>');
                                $('#notification_div').delay(5000).fadeOut('slow');

                                $('#total').val(new_total);
                                $('#finaltotal').val(new_total);
                                $('#span_all_total').html(new_total);

                                if (new_total == 0) {
                                    $('#tr_total').remove();
                                    $('#tb_checkout').append(' <td colspan="6" align="center">Cart empty</td>');
                                    $('#button_bottom').hide();
                                }

                                $("#update_cart").html(data.update_cart);

                            }, error: function (xhr, status, error) {
                                alert(status);
                            },
                        });



                    } else {
                        return false;
                    }

                });


                $(".empty_cart").click(function () {

                    var total = $("#total").val();

                    if (!total) {
                        alert('Cart empty');
                        return false;
                    }

                    if (total == 0) {
                        alert('Cart empty');
                        return false;
                    }

                    var x = confirm("Empty cart ?");

                    if (x == true) {


                        $("#notification_div").html('<div class="alert alert-info" role="alert">Please wait ...</div>');

                        var dataString = {send: true};
                        $.ajax({

                            type: "POST",
                            url: "<?php echo base_url(); ?>cart/empty_cart",
                            data: dataString,
                            dataType: "json",
                            cache: false,
                            success: function (data) {
                                //   alert(data);

                                $("#notification_div").html('<div class="alert alert-success" role="alert">Success empty cart ...</div>');
                                $('.tr_total').remove();
                                $('#tr_total').remove();
                                $('#tb_checkout').html(' <td colspan="6" align="center">Cart empty</td>');
                                $('#button_bottom').hide();
                                $("#update_cart").html(data.update_cart);

                            }, error: function (xhr, status, error) {
                                alert(status);
                            },
                        });



                    } else {
                        return false;
                    }

                });


            });

        </script>

        <!-- for Custm scripts-->
<?php if (isset($editscript)) {
    echo $editscript;
} ?>
        <?php if (isset($ajaxcript)) {
            echo $ajaxcript;
        } ?>
        <!-- for autocomplete scripts-->
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/frontend/externalcss/jquery-ui.css" type="text/css">    
        <script type="text/javascript">
            $(document).ready(function () {
                $("#country").keyup(function () {
                    $.ajax({
                        type: "POST",
                        url: "<?= site_url('autocomplete') ?>",
                        data: {
                            term: $("#country").val()
                        },
                        dataType: "json",
                        success: function (data) {
                            if (data.length > 0) {
                                $('#DropdownCountry').empty();
                                $('#country').attr("data-toggle", "dropdown");
                                $('#DropdownCountry').dropdown('toggle');
                            } else if (data.length == 0) {
                                $('#country').attr("data-toggle", "");
                            }
                            $.each(data, function (key, value) {
                                if (data.length >= 0) {
                                    //    $('#DropdownCountry').append();
                                    //$('#DropdownCountry').append('<li role="presentation" ><a href="<?= site_url('/') ?>'+ value['url']+value['id'] +'?q=search" class="dropdownlivalue">' + value['name'] + '</b></a></li>');
                                }
                            });
                        }
                    });

                });
                $('ul.txtcountry').on('click', 'li a', function () {
                    //$('#country').val($(this).text());
                    //alert($('#country').val($(this).text()));
                    /*   var xhr = null;   
                     xhr = $.ajax({
                     type: "POST",
                     url: "<?= site_url('searchString') ?>",
                     data: {
                     search: $(this).text()
                     },
                     dataType: "json",
                     success: function (data) {
                     exit;
                     }
                     });*/

                    $("a").trigger("click");
                });
            });

        </script>

        <!--Start of Zendesk Chat Script-->
        <script type="text/javascript">
            window.$zopim || (function (d, s) {
                var z = $zopim = function (c) {
                    z._.push(c)
                }, $ = z.s =
                        d.createElement(s), e = d.getElementsByTagName(s)[0];
                z.set = function (o) {
                    z.set.
                            _.push(o)
                };
                z._ = [];
                z.set._ = [];
                $.async = !0;
                $.setAttribute("charset", "utf-8");
                $.src = "https://v2.zopim.com/?5JMtunjrzWyidOiWnuevJMDy7H5sh0aN";
                z.t = +new Date;
                $.
                        type = "text/javascript";
                e.parentNode.insertBefore($, e)
            })(document, "script");
        </script>
<script>
window.onscroll = function() {
    var doc = document.documentElement;
    var top = (window.pageYOffset || doc.scrollTop)  - (doc.clientTop || 0);
    if(top <= 99) {
       jQuery(".vehicles").css('top', '120px');
    }
    else {
       jQuery(".vehicles").css('top', '70px');
    }
} 
	$(document).ready(function(){
	


	//$("#Hero_div").show();
	  $("#vehiclesList").mouseover(function(){
             // alert();
	
		  $("#Hero_div").show();
		   
		   $("#slider").hide();
	  });
	
	  $("#vehiclesList,.vehicles,.vehiclesUl").mouseover(function(){
	//  alert("hi");
	  $(".vehiclesUl").css({"visibility": "visible", "opacity": "1","margin-top":"20px"});
      

	  });
	  
	 
	  
    $("#Hero").mouseover(function(){
	
	       $(".vehicles").hide();
		  $("#Hero_div").show();
		   
		 $("#slider").hide();
		 
	 });
     $("#Hero_div").mouseover(function(){
	 
      $("#Hero_div").show();
	   $("#slider").hide();
    });

	  
 /*
    $("#Lohia").mouseover(function(){
	
	       $(".vehicles").hide();
		  $("#Lohia_div").show();
		
		 $("#slider").hide();
		 
	 });
     $("#Lohia_div").mouseover(function(){
       $("#Lohia_div").show();
	   $("#slider").hide();
    });

	
    $("#Gogreen").mouseover(function(){
	
	       $(".vehicles").hide();
		  $("#Gogreen_div").show();
		
		 $("#slider").hide();
		 
	 });
     $("#Gogreen_div").mouseover(function(){
       $("#Gogreen_div").show();
	   $("#slider").hide();
    });

	
    $("#Eto").mouseover(function(){
	
	       $(".vehicles").hide();
		  $("#Eto_div").show();
		
		 $("#slider").hide();
		 
	 });
     $("#Eto_div").mouseover(function(){
       $("#Eto_div").show();
	   $("#slider").hide();
    });


	$("#YObykes").mouseover(function(){
	
	       $(".vehicles").hide();
		  $("#YObykes_div").show();
		
		 $("#slider").hide();
		 
	 });
     $("#YObykes_div").mouseover(function(){
       $("#YObykes_div").show();
	   $("#slider").hide();
    });
	

	
	$("#Okinawa").mouseover(function(){
	
	       $(".vehicles").hide();
		  $("#Okinawa_div").show();
		
		 $("#slider").hide();
		 
	 });
     $("#Okinawa_div").mouseover(function(){
       $("#Okinawa_div").show();
	   $("#slider").hide();
    });
	

	
		$("#Ampere").mouseover(function(){
	
	       $(".vehicles").hide();
		  $("#Ampere_div").show();
		
		 $("#slider").hide();
		 
	 });
     $("#Ampere_div").mouseover(function(){
       $("#Ampere_div").show();
	   $("#slider").hide();
    });
	*/
	   $("#Vehicles_Option").mouseover(function(){
	  
     $("html").css({"overflow": "hidden"});
  
    });

	   $("#Vehicles_Option").mouseout(function(){
	    $(".vehicles").hide();
        $("#slider").show();
	     $(".vehiclesUl").css({"visibility": "hidden", "opacity": "0","margin-top":"0px"});
     $("html").css({"overflow-y": "scroll","overflow-x": "hidden"});
  
    });
	  $(".hidevehicleOPtion").mouseover(function(){
	     //alert("hi");
	    $(".vehicles").hide();
        $("#slider").show();
	     $(".vehiclesUl").css({"visibility": "hidden", "opacity": "0","margin-top":"0px"});
      $("html").css({"overflow-y": "scroll","overflow-x": "hidden"});
  
    });

     
	
	});
	</script>
                        <script type="text/javascript">
            
function get_submenu(id)
{
    //console.log(id);
    //$(".spinner").show();
$.ajax
 ({
 type:'post',
 url:"<?php echo base_url(); ?>index.php/Ajax/getSubMenu",
 data:{
  get_submenu:"submenu",
  cat_id:id
 },
 success:function(response) {
     //console.log(response);
 if(response!="")
 {
     $(".spinner").hide();
    // $("#Scooters_div").show();
	
	
  $("#Hero_div").html(response);
  
    var owl = $(".vehicleItem");
      owl.owlCarousel({
          navigation: true,
          pagination: false,
      autoPlay: true,
          items:5,
          itemsTablet:3,
          stagePadding:90,
          smartSpeed:400,
          itemsDesktop : [1199,5],
          itemsDesktopSmall : [980,3],
          itemsTablet: [768,3],
          itemsTablet: [767,2],
          itemsTabletSmall: [480,2],
          itemsMobile : [479,1],
      });
	 var productsItem = $('.vehicleItem');
      productsItem.find('.owl-prev').html('<i class="fa fa-angle-left"></i>');
      productsItem.find('.owl-next').html('<i class="fa fa-angle-right"></i>');

 }
 }
 });
}
</script>
  </body>
</html>