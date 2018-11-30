<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
//log_message('debug', 'Helper loaded: utilities_helper');

if (!function_exists('sms')) {

    function sms($mobile,$msg) {
     $username="beerala"; 
$password = "ind123"; 
$type ="TEXT"; 
$sender="EVINFO"; 
//$mobile="9908088256"; 
$message = urlencode($msg); 
$baseurl ="https://app.indiasms.com/sendsms/bulksms"; 
$url =$baseurl."?username=".$username."&password=".$password."&type=".$type."&sender=".$sender."&mobile=".$mobile."&message=".$message; 
$return = file($url); 
list($send,$msgcode) = split('[|]',$return[0]);
if ($send == "SUBMIT_SUCCESS "){ 
echo 1;
}
else{ 
echo 0;
    }
   // echo "<pre>";print_r($return);
}
}
if (!function_exists('sms1')) {

    function sms1($mobile,$msg) {
     $username="beerala"; 
$password = "ind123"; 
$type ="TEXT"; 
$sender="EVINFO"; 
//$mobile="9908088256"; 
$message = urlencode($msg); 
$baseurl ="https://app.indiasms.com/sendsms/bulksms"; 
$url =$baseurl."?username=".$username."&password=".$password."&type=".$type."&sender=".$sender."&mobile=".$mobile."&message=".$message; 
$return = file($url); 
list($send,$msgcode) = split('[|]',$return[0]);
if ($send == "SUBMIT_SUCCESS "){ 
echo 1;
}
else{ 
echo 0;
    }
}
}




?>