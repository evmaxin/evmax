<?php 

	// STORE REQUIRED DATA IN ARRAY

	$arr = array();

	$arr['pickup_pincode'] 	= '400071';

	$arr['delivery_pincode'] = '400080';

	$arr['order_number'] = '111110001';

	$arr['payment_mode'] = 'Online';

	$arr['insurance'] = false;

	$arr['number_of_package'] = '1';

	$arr['package_details'] = array();

	$arr['package_details']['details'] = array();

	$arr['package_details']['details']['weight'] = '2';
	$arr['package_details']['details']['length'] = '3';
	$arr['package_details']['details']['height'] = '4';
	$arr['package_details']['details']['width']  = '2';

	$arr['package_details']['details']['invoice'] = round('123',0);

	$arr['package_details']['details']['packagedescription'] = 'Mobile Phone';

	$arr['delivery_address'] = array();

	$arr['delivery_address']['contact_name'] = 'ABC XYZ';
	$arr['delivery_address']['company_name'] = 'QWERTYU';
	$arr['delivery_address']['address'] = 'Buidling 1, Road No 1';
	$arr['delivery_address']['city'] = 'Mumbai';
	$arr['delivery_address']['state'] = 'Maharashtra';
	$arr['delivery_address']['pincode'] = '400077';
	$arr['delivery_address']['country'] = 'India';
	$arr['delivery_address']['contact_no'] = '9899989989';
	$arr['delivery_address']['email'] = 'support@gmail.in';

	$arr['success_callback_url'] = $_SERVER['SERVER_NAME'].'couriers/Callback';
	$arr['failure_callback_url'] = $_SERVER['SERVER_NAME'].'couriers/Fail';
	$arr['client_source'] = '';


	$data = json_encode($arr); // CONVER TO JSON


	$api_key	=	"ZEPO";	// ADD YOUR API KEY HERE
	$secret_key	=	"ZEPO";	// ADD YOUR SECRET KEY HERE					
	
	$post_url	=	"http://api.couriers.vello.in/initiateShipmentRequest";	// SANDBOX URL
	
	//$post_url	=	"http://api.couriers.zepo.in/initiateShipmentRequest";	// PRODUCTION URL

	$strtoSign	=	"POST\n/initiateShipmentRequest";
	
	$strtoSign	=	urlencode($strtoSign);
		
	$my_sign = hash_hmac("sha1", $strtoSign, $secret_key);
	
	$my_sign = base64_encode($my_sign);
		
	$header	=	"Authorization:SHIPIT".' '.$api_key.':'.$my_sign;
		
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL,$post_url);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data );  //Post Fields
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

	$headers = [
	    'Accept-Encoding: gzip, deflate',
	    'Accept-Language: en-US,en;q=0.5',
	    'Cache-Control: no-cache',
	    'User-Agent: Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:28.0) Gecko/20100101 Firefox/59.0',
	    'X-MicrosoftAjax: Delta=true',
	    $header,
	    'Content-Type:application/json',
	];
		
	curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
	$server_output = curl_exec ($ch);
	curl_close ($ch);

?>

<script type="text/javascript">

	var res = '<?php echo ($server_output); ?>';
	res = JSON.parse(res);
	if( res.success ) {
		window.location.href = res.redirectUrl;
	} else {
		var err = res.messages;
		console.log(res);
		alert(err.join('\n'));
		window.close();
}
</script>

	
