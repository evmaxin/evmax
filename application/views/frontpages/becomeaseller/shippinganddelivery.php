<style type="text/css">
  .rect {
  width: 30px;
  height: 190px;
  top:15px;
  position: relative;
  z-index: 9;
      left: 13px;
}

p{
	    font-size: 17px;
}

.rect:after {
  content: "";
  position: absolute;
  left: 22px;
  width: 25px;
  height: 25px;
  transform: rotate(145deg) skew(22.5deg);
}

.rect:before {
  content: "01";
  text-align: center;
  padding: 2px;
  font-size:18px;
  font-weight: bold;
  color:black;
  width: 42px;
  height: 42px;
  position: absolute;
    top: 30px;
  left:-6px;
  border-radius: 50%;
    z-index: 2;
    background-color: white;
}

.rect:after {
  top: 175px;
  left:2px;
}

.rect span {
  position: absolute;
  top: 0;
  left: 0;
  width: 30px;
  height: 170px;
  z-index: 5;

}
.rect1:before{
	content: "1";
  color:orange;
  border:5px solid orange;
}
.rect2:before{
	content: "1";
  color: green;
  border:5px solid green;
}
.rect3:before{
	content: "1";
  color: red;
  border:5px solid red;
}
.rect4:before{
	content: "2";
  color: blue;
  border:5px solid blue;
}
.rect5:before{
	content: "2";
  color:violet;
  border:5px solid violet;
}
.rect6:before{
	content: "2";
  color: #42ff00;
  border:5px solid #42ff00;
}
.rect7:before{
	content: "3";
  color: #de1236;
  border:5px solid #de1236;
}
.rect8:before{
	content: "3";
  color:#16bbaa;
  border:5px solid #16bbaa;
}
.rect9:before{
	content: "3";
  color:violet;
  border:5px solid violet;
}
.rect10:before{
	content: "4";
  color:green;
  border:5px solid green;
}
.rect11:before{
	content: "5";
  color:#16bbaa;
  border:5px solid #16bbaa;
}
.rect12:before{
	content: "6";
  color:#42ff00;
  border:5px solid #42ff00;
}

.rect1:after{
background-color: orange;
}
.rect2:after{
background-color: green;
}
.rect3:after{
background-color: red;
}
.rect4:after{
background-color: blue;
}
.rect5:after{
background-color: violet;
}
.rect6:after{
background-color: #42ff00;
}
.rect7:after{
background-color: #de1236;
}
.rect8:after{
background-color: #16bbaa;
}
.rect9:after{
background-color: violet;
}
.rect10:after{
background-color: green;
}
.rect11:after{
background-color: #16bbaa;
}
.rect12:after{
background-color: #42ff00;
}
.extra{
  width: 25px;
  height: 25px;
  position: absolute;
  z-index:4;
  top:-12px;
  left:2px;
  background-color: white;
  transform:rotate(145deg) skew(22.5deg);
}


.block{
  background-color: #fff;
  box-shadow: 1px 1px 3px 3px #e6e4e4;
  border:1px solid #e6e4e4;
      height: 200px !important;
    margin: 24px 13px !important;
    width: 380px !important;

}
.block img{
  position: relative;
  width:100% !important;
  top:50px !important;

}
h3{
  font-weight: bold;
}
.head1{
  color:orange;
}
.rect1{
  background-color: orange;
}
.rect2{
  background-color:green;
}
.head2{
  color:green;
}
.rect3{
  background-color:red;
}
.head3{
  color:red;
}
.rect4{
  background-color:blue;
}
.head4{
  color:blue;
}
.rect5{
  background-color:violet;
}
.head5{
  color:violet;
}
.rect6{
  background-color:#42ff00;
}
.head6{
  color:#42ff00;
}
.rect7{
  background-color:#de1236;
}
.head7{
  color:#de1236;
}
.rect8{
  background-color:#16bbaa;
}
.head8{
  color:#16bbaa;
}
.rect9{
  background-color:violet;
}
.head9{
  color:violet;
}
.rect10{
  background-color:green;
}
.head10{
  color:green;
}
.rect11{
  background-color:#16bbaa;
}
.head11{
  color:#16bbaa;
}
.rect12{
  background-color:#42ff00;
}
.head12{
  color:#42ff00
}
@media(max-width: 425px){
  body{ margin-right:0;padding: 0; }
  .block{
    width:100%;
  }
  h3{
    position: relative;
    top:2px;
    left:20px;
    font-size:20px;
  }
  p{
    position: relative;
    font-size: 13px;
  }
  img{
    display: none;
  }
}
@media(max-width: 768px){
  .block img{
    display: none;
  }
}
@media(max-width: 1024px){
.block {
    background-color: #fff;
    box-shadow: 1px 1px 3px 3px #e6e4e4;
    border: 1px solid #e6e4e4;
    height: 200px !important;
    margin: 16px 7px !important;
    width: auto !important;
}
p{
    font-size: 13px;
  }
}

.Ashipg1{
	width: 16.66666667% !important;
	float: left!important;
	    margin-right: 4%;
}
.Ashipg2{
	
	    width: 100% !important;
    padding: 14px 0px;
}
.Ashipg21{
	border: 2px solid #57b952 !important;
	margin-right: 0px !important; 
     margin-left: 0px !important;
         box-shadow: 0px 1px 3px 1px #57b952;
}
.Ashipg22{
	border: 2px solid #3051a0 !important;
	margin-right: 0px !important; 
     margin-left: 0px !important;
         box-shadow: 0px 1px 3px 1px #3051a0;
}
.Ashipg23{
	border: 2px solid #57b952 !important;
	margin-right: 0px !important; 
     margin-left: 0px !important;
         box-shadow: 0px 1px 3px 1px #57b952;
}
.AshipgA11{
	padding-right: 0px !important;
    padding-left: 0px !important; 
}

</style>

<div class="w3-content w3-display-container">
			<a href="<?php echo base_url() ?>BecomeASeller/about#enquirynow"><img src="<?php echo base_url() ?>assets/frontend/img/search.png" class="bannersearchicn d-none d-xl-block"></a> 
  			<img class="mySlides" src="<?php echo base_url() ?>assets/layout2/images/enquiry/shippingndelivary.png" usemap="#workmap" style="width:100%">
                        
  		</div>

  		<map name="workmap">
  			<area shape="rect" coords="20,200,170,0" alt="logo" href="<?php echo base_url() ?>">
  			
		</map>

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="col_full content-wrap">

				<div class="col_two_fifth shipngwidth">

					<div class="heading-block center ">
						<h3 class="shpgheadg headshippgn3 center bluecolor">Evmax Logistics Model 1</h3>
						<h3 class="shpgheadg headshippgn3 center greencolor">evmax Direct Delivery</h3>
							<span class="headshippgnspan">(Merchant >> evmaxStudio >> Support Partner >> Customer)</span>
					</div>

					
					</br>

					<div class="heading-block center">
						
							<span class="processflow">Process Flow</span>
					</div>

					<div class="container">
		    			<div class="row Ashipg21 " style="margin-bottom: 15px;">
					        <div class="col-md-12 AshipgA11">
					           <div class="block ">
					              	<div class="col-xs-2 Ashipg1">
					              		<div class="rect rect1">
					              			<div class="extra"></div>
					              			<span></span>
					              		</div>
					              	</div>
					              	<div class="col-xs-10 Ashipg2">
					              		<h3 class="head1">Step 1</h3>
					              		<p>
					              			Customer places order on evmax.in 
											Customer account is updated with order details and estimated delivery date.
					              		</p>
					              	</div>
		              	
		              			</div>

				              	<div class="block ">
					              	<div class="col-xs-2 Ashipg1">
					              		<div class="rect rect4"><div class="extra"></div><span></span></div>
					              	</div>
					              	<div class="col-sm-10 Ashipg2">
					              		<h3 class="head4">Step 2</h3>
					              		<p>
					              			Merchant Receives order details on evmax merchant websys (Merchant Dashboard)  
											Packs up ordered vehicle and intimates evmax logistics partner.
					              		</p>
					              	</div>
					              	
					            </div>

		              			<div class="block ">
					              	<div class="col-xs-2 Ashipg1">
					              		<div class="rect rect7"><div class="extra"></div><span></span></div>
					              	</div>
					              	<div class="col-sm-10 Ashipg2">
					              		<h3 class="head7">Step 3</h3>
					              		<p>
					              			evmax logistics partner receives pickup details. 
											evmax logistics partner picksup material and updates delivery date.
					              		</p>
					              	</div>
		              	
		              			</div>

		              			<div class="block ">
					              	<div class="col-xs-2 Ashipg1">
					              		<div class="rect rect10"><div class="extra"></div><span></span></div>
					              	</div>
					              	<div class="col-sm-10 Ashipg2">
					              		<h3 class="head10">Step 4</h3>
					              		<p>
					              			evmax logistics partner delivers vehicle to evmax studio / evmax support partner location. 
											evmax studio / evmax support partner receives vehicle.
					              		</p>
					              	</div>
		              	
		              			</div>
		              			<div class="block ">
					              	<div class="col-xs-2 Ashipg1">
					              		<div class="rect rect11"><div class="extra"></div><span></span></div>
					              	</div>
					              	<div class="col-sm-10 Ashipg2">
					              		<h3 class="head11">Step 5</h3>
					              		<p>
					              			evmax studio / evmax partner updates customer on arrival of product.  
											Also updates customer on battery delivery schedule.
					              		</p>
					              	</div>
		              	
		              			</div>

		              			<div class="block ">
					              	<div class="col-xs-2 Ashipg1">
					              		<div class="rect rect12"><div class="extra"></div><span></span></div>
					              	</div>
					              	<div class="col-sm-10 Ashipg2">
					              		<h3 class="head12">Step 6</h3>
					              		<p>
					              			Customer visits evmax studio / evmax support partner location. 
					              			evmax studio / evmax support partner does fittings (Battery fitting and other fittings), provides tips and instructions to customer and delivers.
					              		</p>
					              	</div>
		              	
		              			</div>

					        </div>
					        <div class="shipngwidth1A">
					<div class="heading-block center">
						
							<span class="processflow">Costing</span>
					</div>

					<div class="container clearfix">

						<div class="col_one_third nobottommargin mywidth">

							<div class="feature-box fbox-plain shippgdelivry11">
								
								<p class="costing">1. Technology Platform Charges 2%</p>
								
							</div>
							<div class="feature-box fbox-plain shippgdelivry11">
								
								<p class="costing">2. Sales Charges (Varies based on category)  </p>
								
							</div>
							<div class="feature-box fbox-plain shippgdelivry11">
							<p class="costing">3. Delivery Charges</p>
							</div>
						</div>

					</div>
				</div>
		    			</div>
					</div>


					
				</div>

				<div class="col_two_fifth shipngwidth">

					<div class="heading-block center">
						<h3 class="shpgheadg headshippgn3 center bluecolor">Evmax Logistics Model 2 </h3>
						<h3 class="shpgheadg headshippgn3 center greencolor">Merchant Direct Delivery</h3>
							<span class="headshippgnspan">(Merchant >> Dealer >> Customer)</span>
					</div>
					</br>
					<div class="heading-block center">
						
							<span class="processflow">Process Flow</span>
					</div>

					<div class="container">
		    			<div class="row Ashipg22">
					        <div class="col-md-12 AshipgA11">
					           <div class="block ">
			              	<div class="col-xs-2 Ashipg1">
			              		<div class="rect rect2"><div class="extra"></div><span></span></div>
			              	</div>
			              	<div class="col-sm-10 Ashipg2">
			              		<h3 class="head2">Step 1</h3>
			              		<p>
			              			Customer places order on evmax.in  
									Customer account is updated with order details and estimated delivery date.
			              		</p>
			              	</div>
		              	
		              	</div>
		              	<div class="block ">
		              	<div class="col-xs-2 Ashipg1">
		              		<div class="rect rect5"><div class="extra"></div><span></span></div>
		              	</div>
		              	<div class="col-sm-10 Ashipg2">
		              		<h3 class="head5">Step 2</h3>
		              		<p>
		              			Merchant Receives order details on evmax merchant websys (Merchant Dashboard)  
								Routes order to delaer or delivery is handled by his own.
		              		</p>
		              	</div>
		              	
		              </div>
		              <div class="block ">
		              	<div class="col-xs-2 Ashipg1">
		              		<div class="rect rect8"><div class="extra"></div><span></span></div>
		              	</div>
		              	<div class="col-sm-10 Ashipg2">
		              		<h3 class="head8">Step 3</h3>
		              		<p>Customer visits pickup location.  
							   Dealer does fittings (Battery fitting and other fittings), provides tips and instructions to customer and delivers.
		              		</p>
		              	</div>
		              	
		              </div>
					        </div>
					        <div class="shipngwidth1A">
					<div class="heading-block center">
						
							<span class="processflow">Costing</span>
					</div>

					<div class="container clearfix">

						<div class="col_one_third nobottommargin mywidth">

							<div class="feature-box fbox-plain shippgdelivry11">
								
								<p class="costing">1. Technology Platform Charges 2%</p>
								
							</div>
							<div class="feature-box fbox-plain shippgdelivry11">
								
								<p class="costing">2. Sales Charges (Varies based on category)   </p>
								
							</div>
							<div class="feature-box fbox-plain shippgdelivry11">
							<p >*Logistics is not handled by evmax.</p>
							</div>
						</div>

					</div>
				</div>

		    			</div>
					</div>
					
				</div>

				<div class="col_two_fifth shipngwidth">

					<div class="heading-block center">
						<h3 class="shpgheadg headshippgn3 center bluecolor">Evmax Logistics Model 3 </h3>
						<h3 class="shpgheadg headshippgn3 center greencolor">evmax Fulfilment Delivery</h3>
							<span class="headshippgnspan">(Merchant >> evmax FulfilmentHub >> evmax Studio >> Support Partner Location >> Customer)</span>
					</div>

					

					<div class="heading-block center">
						
							<span class="processflow">Process Flow</span>
					</div>

					<div class="container">
		    			<div class="row Ashipg23">
					        <div class="col-md-12 AshipgA11">
					           <div class="block ">
			              	<div class="col-xs-2 Ashipg1">
			              		<div class="rect rect3"><div class="extra"></div><span></span></div>
			              	</div>
			              	<div class="col-sm-10 Ashipg2">
			              		<h3 class="head3">Step 1</h3>
			              		<p>
			              			Customer places order on evmax.in  
									Customer account is updated with order details and estimated delivery date.
			              		</p>
			              	</div>
		              	
		              	</div>
		              	<div class="block ">
		              	<div class="col-xs-2 Ashipg1">
		              		<div class="rect rect6"><div class="extra"></div><span></span></div>
		              	</div>
		              	<div class="col-sm-10 Ashipg2">
		              		<h3 class="head6">Step 2</h3>
		              		<p>
		              			Merchant Receives order details on evmax merchant websys (Merchant Dashboard) 
								Routes order details to evmax fulfilment center.
		              		</p>
		              	</div>
		              	
		              </div>
		              <div class="block ">
		              	<div class="col-xs-2 Ashipg1">
		              		<div class="rect rect9"><div class="extra"></div><span></span></div>
		              	</div>
		              	<div class="col-sm-10 Ashipg2">
		              		<h3 class="head9">Step 3</h3>
		              		<p>
		              			evmax fulfilment Hub delivers vehicle to evmax studios / evmax support partner hub.  
								evmax studios handles fittings and delivers to customer.
		              		</p>
		              	</div>
		              	
		              </div>
					        </div>

					        <div class="shipngwidth1A">
					<div class="heading-block center">
						
							<span class="processflow">Costing</span>
					</div>

					<div class="container clearfix" style="    margin-bottom: 15px;">

						<div class="col_one_third nobottommargin mywidth">

							<div class="feature-box fbox-plain shippgdelivry11">
								
								<p class="costing">1. Technology Platform Charges 2%</p>
								
							</div>
							<div class="feature-box fbox-plain shippgdelivry11">
								
								<p class="costing">2. Fulfilment Hub handling charges (Varies based on category)  </p>
								
							</div>
							<div class="feature-box fbox-plain shippgdelivry11">
							<p class="costing">3. Sales Charges (Varies based on category) </p>
							</div>
							<div class="feature-box fbox-plain shippgdelivry11">
							<p>Other electric vehicle products logistics are handled by our logistics partners. Our logistics partner picks up order product directly from merchant location and delivers directly to customer or support partner location. </p>
							</div>
						</div>

					</div>
				</div>
		    			</div>


					</div>
					
				</div>

				
			</div>


			
		</section><!-- #content end -->