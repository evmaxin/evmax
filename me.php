<?php
$token="43e6c623dda8f35XXXX1fa5f0ec57d58e91154a";
$wbns="974510010010";
$headers = array(
'Authorization: '.$token
);
$url="https://test.delhivery.com/api/p/packing_slip?wbns=".$wbns;
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HTTPGET, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
echo curl_error($ch);
$return = curl_exec ($ch);
curl_close ($ch);
echo $return;
?>