<style type="text/css">
	.center {
    text-align: center !important;
}
.topmargin {
    margin-top: 26px !important;
}
.divcenter {
    position: relative !important;
    float: none !important;
    margin-left: auto !important;
    margin-right: auto !important;
}
.nott {
    text-transform: none !important;
}
.t500 {
    font-weight: 500 !important;
}
.BuyEV16 {
    padding-top: 50px !important;
}
@media only screen and (min-width: 1200px){
.bottommargin {
    margin-bottom: 27px !important;
}
}
.topmargin {
    margin-top: 26px !important;
}
.desk {
    font-size: 16px !important;
    padding-left: 22px;
    padding-right: 13px;
}
#content p {
    line-height: 1.8;
}
.para11 {
    margin-bottom: 30px;
}

.bottommargin-sm {
    margin-bottom: 20px !important;
}
.feature-box {
    position: relative;
    margin-top: 20px;
    padding: 0 0 0 80px;
}
.feature-box.fbox-plain .fbox-icon {
    border: none !important;
    height: auto !important;
}
.feature-box .fbox-icon {
    display: block;
    position: absolute;
    width: 64px;
    height: 64px;
    top: 0;
    left: 0;
}
.feature-box .fbox-icon a, .feature-box .fbox-icon i, .feature-box .fbox-icon img {
    display: block;
    position: relative;
    width: 100%;
    height: 100%;
    color: #FFF;
}
.feature-box.fbox-plain .fbox-icon i {
    font-size: 48px;
    line-height: 1 !important;
}
@media only screen and (min-width: 1200px){
.feature-box h3 {
    font-size: 19px;
    font-weight: 700;
    text-transform: capitalize;
    letter-spacing: 1px;
    margin-bottom: 0;
    color: #57b952 !important;
}
.feature-box p {
    margin: 8px 0 0 0;
    margin-top: 8px;
    color: #777;
}
p {
    
    font-size: 13px !important;
}
.bottommargin {
    margin-bottom: 27px !important;
}
}
.BuyEV13 {
    font-weight: 700;
    text-transform: capitalize !important;
    letter-spacing: 0px;
    color: #3051a0 !important;
}
.clear-bottommargin {
    margin-bottom: -19px !important;
}
.feature-box.fbox-center {
    padding: 0;
    text-align: center;
}
.feature-box:first-child {
    margin-top: 0;
}
.BuyEV15 {
    font-size: 16px !important;
}
.ls1 {
    letter-spacing: 1px !important;
}
.t400 {
    font-weight: 400 !important;
}
.imagescale, .imagescalein {
    display: block;
    overflow: hidden;
}
body:not(.device-touch) .button {
    -webkit-transition: all .2s ease-in-out;
    -o-transition: all .2s ease-in-out;
    transition: all .2s ease-in-out;
}
.button.button-3d {
    border-radius: 3px;
    border-bottom: 3px solid rgba(0,0,0,0.15);
}
.button.button-desc {
    padding: 24px 34px;
    font-size: 22px;
    height: auto;
    line-height: 1;
    font-family: 'Raleway', sans-serif;
}
.button-green {
    background-color: #59BA41 !important;
}
.button {
    display: inline-block;
    position: relative;
    cursor: pointer;
    outline: none;
    white-space: nowrap;
    margin: 5px;
    padding: 0 22px;
    font-size: 14px;
    height: 40px;
    line-height: 40px;
    background-color: #1ABC9C;
    color: #FFF;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 1px;
    border: none;
    text-shadow: 1px 1px 1px rgba(0,0,0,0.2);
}
.button-3d.button-green:hover, .button-reveal.button-green:hover, .button-border.button-green:hover, .button-border.button-green.button-fill:before {
    background-color: #59BA41 !important;
    color: #fff !important;
}
.center {
    text-align: center !important;
}

.icn2A{
	width: 46px !important;
    height: 46px !important;
}
.icn2A1{
	width: 80px !important;
    height: 80px !important;
        margin-bottom: 15px;
}

</style>

<section>
			<?php 
if(isset($sliderImages)) { 
    $k=0;
  foreach ($sliderImages as $img) {
         if($img->slider_category_id==19){ 
             ?>
    <a target="<?php echo $img->link_url?'_blank':'';?>" href="<?php echo $img->link_url?$img->link_url:'#';?>"><img src="<?php echo base_url() ?>public/uploads/admin/sliders/<?php echo $img->name;?>" class="img-responsive"></a>
            
            <?php $k++;} if($k==1){break;} } }?>
		</section>

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="container clearfix">
				<h2 class="nott t500 divcenter  center BuyEV16">About Electric Vehicles</h2>
					<div class="row clearfix topmargin bottommargin">
                                            <p class="desk para11">An electric vehicle, also called an EV, uses one or more electric motors or traction motors for propulsion. An electric vehicle may be powered through a collector system by electricity from off-vehicle sources, or may be self-contained with a battery, solar panels or an electric generator to convert fuel to electricity. EVs include, but are not limited to, road and rail vehicles, surface and underwater vessels, electric aircraft and electric spacecraft.</p>
                                            
                                           
						<div class="col-lg-4 col-md-6 topmargin bottommargin-sm">
							<div class="feature-box fbox-plain topmargin">
								<div class="fbox-icon">
									<a href="#"><img src="<?php echo base_url() ?>assets/frontend/img/iconsbuyers/setting-gears.png" class="icn2A"></a>
								</div>
								<h3>Engine Hub Motor</h3>
								<p>The wheel hub motor (also called wheel motor, wheel hub drive, hub motor or in-wheel motor) is an electric motor that is incorporated into the hub of a wheel and drives it directly.</p>
							</div>

							<div class="feature-box fbox-plain topmargin">
								<div class="fbox-icon">
									<a href="#"><img src="<?php echo base_url() ?>assets/frontend/img/iconsbuyers/battery.png" class="icn2A"></a>
								</div>
								<h3>Battery Power</h3>
								<p>An electric battery is a device consisting of one or more electrochemical cells with external connections provided to power electrical devices such as flashlights, smartphones, and electric cars. When a battery is supplying electric power, its positive terminal is the cathode and its negative terminal is the anode.</p>
							</div>

							<div class="feature-box fbox-plain topmargin">
								<div class="fbox-icon">
									<a href="#"><img src="<?php echo base_url() ?>assets/frontend/img/iconsbuyers/car.png" class="icn2A"></a>
								</div>
								<h3>Range Speed</h3>
								<p>The maximal total range is the maximum distance an aircraft can fly between takeoff and landing, as limited by fuel capacity in powered aircraft, or cross-country speed and environmental conditions in unpowered aircraft. The range can be seen as the cross-country ground speed multiplied by the maximum time in the air. The fuel time limit for powered aircraft is fixed by the fuel load and rate of consumption. When all fuel is consumed, the engines stop and the aircraft will lose its propulsion.</p>
							</div>
						</div>

						<div class="col-lg-4 d-md-none d-lg-block center" style="margin-top: 2%;">
                                                                  <?php 
if(isset($sliderImages)) { 
      $j=0;
  foreach ($sliderImages as $img) {
         if($img->slider_category_id==20){
             ?>
            <div class="max3"><a target="<?php echo $img->link_url?'_blank':'';?>" href="<?php echo $img->link_url?$img->link_url:'#';?>"><img src="<?php echo base_url() ?>public/uploads/admin/sliders/<?php echo $img->name;?>"></a></div>
            
            <?php $j++;}  } }?>
             								
						</div>

						<div class="col-lg-4 col-md-6 topmargin bottommargin-sm">
							<div class="feature-box fbox-plain topmargin">
								<div class="fbox-icon">
									<a href="#"><img src="<?php echo base_url() ?>assets/frontend/img/iconsbuyers/driving-license.png" class="icn2A"></a>
								</div>
								<h3>Driving Licence</h3>
								<p>A driver's license is an official document permitting a specific individual to operate one or more types of motorized vehicles, such as a motorcycle, car, truck, or bus on a public road.</p>
							</div>

							<div class="feature-box fbox-plain topmargin">
								<div class="fbox-icon">
									<a href="#"><img src="<?php echo base_url() ?>assets/frontend/img/iconsbuyers/registration.png" class="icn2A"></a>
								</div>
								<h3>Vehicle Registration</h3>
								<p>Motor vehicle registration is the registration of a motor vehicle with a government authority, either compulsory or otherwise. The purpose of motor vehicle registration is to establish a link between a vehicle and an owner or user of the vehicle. This link might be used for taxation or crime detection purposes. While almost all motor vehicles are uniquely identified by a vehicle identification number, only registered vehicles display a vehicle registration plate and carry a vehicle registration certificate. Motor vehicle registration is different from motor vehicle licensing and roadworthiness certification.</p>
							</div>

							
						</div>
					</div>

			</div> <!-- Features Area End -->


		</section><!-- #content end -->

		<section id="content" class="BuyEV14">

			<div class="container topmargin clearfix">
					<div class="heading-block nobottomborder bottommargin center">
						<h3 class="BuyEV13" style="font-size: 20px;">evmax helps you to buy perfect electric vehicle </h3>
					</div>

					<div class="row clearfix clear-bottommargin">
						<div class="col-lg-2 col-md-4 col-6 offset-lg-1">
							<div class="feature-box fbox-center nobottomborder bottommargin">
								<div class="before-heading ls2">
									<img src="<?php echo base_url() ?>assets/frontend/img/iconsbuyers/percentage.png" class="icn2A1">
								</div>
								<h3 class="t400 ls1 BuyEV15">sales advice</h3>
								<div class="fbox-image imagescalein">
									<a href="#"><img src="<?php echo base_url() ?>assets/layout2/demos/ecommerce/images/icons/2.png" alt=""></a>
								</div>
							</div>
						</div>
						<div class="col-lg-2 col-md-4 col-6">
							<div class="feature-box fbox-center nobottomborder bottommargin">
								<div class="before-heading ls2"><img src="<?php echo base_url() ?>assets/frontend/img/iconsbuyers/online-booking.png" class="icn2A1"></div>
								<h3 class="t400 ls1 BuyEV15">online booking</h3>
								<div class="fbox-image imagescalein">
									<a href="#"><img src="<?php echo base_url() ?>assets/layout2/demos/ecommerce/images/icons/3.png" alt=""></a>
								</div>
							</div>
						</div>
						<div class="col-lg-2 col-md-4 col-6">
							<div class="feature-box fbox-center nobottomborder bottommargin">
								<div class="before-heading ls2"><img src="<?php echo base_url() ?>assets/frontend/img/iconsbuyers/delivery.png" class="icn2A1"></div>
								<h3 class="t400 ls1 BuyEV15">delivery</h3>
								<div class="fbox-image imagescalein">
									<a href="#"><img src="<?php echo base_url() ?>assets/layout2/demos/ecommerce/images/icons/4.png" alt=""></a>
								</div>
							</div>
						</div>
						<div class="col-lg-2 col-md-4 col-6">
							<div class="feature-box fbox-center nobottomborder bottommargin">
								<div class="before-heading ls2"><img src="<?php echo base_url() ?>assets/frontend/img/iconsbuyers/gear.png" class="icn2A1"></div>
								<h3 class="t400 ls1 BuyEV15">expert set-up</h3>
								<div class="fbox-image imagescalein">
									<a href="#"><img src="<?php echo base_url() ?>assets/layout2/demos/ecommerce/images/icons/5.png" alt=""></a>
								</div>
							</div>
						</div>
						<div class="col-lg-2 col-md-4 col-6">
							<div class="feature-box fbox-center nobottomborder bottommargin">
								<div class="before-heading ls2"><img src="<?php echo base_url() ?>assets/frontend/img/iconsbuyers/mail.png" class="icn2A1"></div>
								<h3 class="t400 ls1 BuyEV15">after sale support</h3>
								<div class="fbox-image imagescalein">
									<a href="#"><img src="demos/ecommerce/images/icons/6.png" alt=""></a>
								</div>
							</div>
						</div>
						<div class="col-lg-2 col-md-4 col-6">
							<div class="feature-box fbox-center nobottomborder bottommargin">
								<div class="before-heading ls2"><img src="<?php echo base_url() ?>assets/frontend/img/iconsbuyers/phone-call.png" class="icn2A1"></div>
								<h3 class="t400 ls1 BuyEV15">24/7 customer care</h3>
								<div class="fbox-image imagescalein">
									<a href="#"><img src="demos/ecommerce/images/icons/6.png" alt=""></a>
								</div>
							</div>
						</div>
					</div>

					<div class="center"><a href="<?php echo base_url();?>" class="button button-desc button-3d button-rounded button-green center">Choose Your </br>electric vehicle now</a></div>
			</div>

			
		</section>