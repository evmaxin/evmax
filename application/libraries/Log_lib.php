<?php
Class Log_lib{
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
// data from products controller
 public function logAction($log_array) {
	 if(!file_exists("logs.txt"))
	 {
		 $file = fopen("logs.txt","w");
		 $txt = "URL\tIP\tCATEGORY\tBROWSER\tDATE\tCUSTOMER_ID\tOS";
		 @file_put_contents('logs.txt', $txt.PHP_EOL , FILE_APPEND | LOCK_EX);
	 }
		 
		$CI = & get_instance();
                $tab = "\t";
                $txt = $log_array['full_url'].$tab.$log_array['ip'].$tab.$log_array['category'].$tab.$log_array['browser_info'].$tab.$log_array['datetime'].$tab.$log_array['customer_id'].$tab.$log_array['platform'];
		$myfile = @file_put_contents('logs.txt', $txt.PHP_EOL , FILE_APPEND | LOCK_EX);
    }
    public function notFoundURLlogs($log_array) {
	 if(!file_exists("404logs.txt"))
	 {
		 $file = fopen("404logs.txt","w");
		 $txt = "URL\tIP\tBROWSER\tDATE\tCUSTOMER_ID\tOS";
		 @file_put_contents('404logs.txt', $txt.PHP_EOL , FILE_APPEND | LOCK_EX);
	 }
		 
		$CI = & get_instance();
                $txt = $log_array['full_url']." ".$log_array['ip']."  ".$log_array['browser_info']."  ".$log_array['datetime']."  ".$log_array['customer_id'];
		$myfile = @file_put_contents('404logs.txt', $txt.PHP_EOL , FILE_APPEND | LOCK_EX);
    }
     public function searchLog($log_array) {
	 if(!file_exists("searchlogs.txt"))
	 {
		 $file = fopen("searchlogs.txt","w");
		 $txt = "URL\tIP\tProduct Name\tBROWSER\tDATE\tCUSTOMER_ID\tOS";
		 @file_put_contents('searchlogs.txt', $txt.PHP_EOL , FILE_APPEND | LOCK_EX);
	 }
		 
		$CI = & get_instance();
                 $tab = "\t";
                $txt = $log_array['full_url'].$tab.$log_array['ip'].$tab.$log_array['product_name'].$tab.$log_array['browser_info'].$tab.$log_array['datetime'].$tab.$log_array['customer_id'].$tab.$log_array['platform'];
		$myfile = @file_put_contents('searchlogs.txt', $txt.PHP_EOL , FILE_APPEND | LOCK_EX);
    }

//It's not completed yet do it when ever active

}

