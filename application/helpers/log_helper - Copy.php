<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
//log_message('debug', 'Helper loaded: log_helper');

if (!function_exists('log_data')) {

    function log_data() {
     
           $ci = & get_instance();
              $libraries = array(
            'Log_lib' => 'logger',
            'user_agent' =>'agent',
            // 'Common_lib'=>'Common_lib'      
                       );
               $ci->load->library($libraries);
                if ($ci->agent->is_browser())
                 {
               $agent = $ci->agent->browser().'{'.$ci->agent->version().'}';
                }
                
               $category = $ci->uri->segment('2')?$ci->uri->segment('2'):'';
               if($ci->input->ip_address()=="::1") { $ip = '10.10.10.10';} else {$ip = $ci->input->ip_address(); }
              $log_array = array(
             'full_url' => base_url(uri_string()),
             'ip' =>   $ip,
             'category'=>$category,
             'browser_info' => $agent,
             'datetime' =>date('Y-m-d H:i:s'),
             'customer_id' =>$ci->session->userdata('customer_data')?$ci->session->userdata('customer_data')['id']:0,
             'platform'=>$ci->agent->platform()    //OS
                  
                       );
        
        
        
        $ci->logger->logAction($log_array); //LOOK FOR THIS
 

    }

}

if (!function_exists('searchLog')) {

    function searchLog() {
     
           $ci = & get_instance();
              $libraries = array(
            'Log_lib' => 'logger',
            'user_agent' =>'agent',
            // 'Common_lib'=>'Common_lib'      
                       );
               $ci->load->library($libraries);
                if ($ci->agent->is_browser())
                 {
               $agent = $ci->agent->browser().'{'.$ci->agent->version().'}';
                }
                
               $category = $ci->uri->segment('2')?$ci->uri->segment('2'):'';
               if($ci->input->ip_address()=="::1") { $ip = '10.10.10.10';} else {$ip = $ci->input->ip_address(); }
              $log_array = array(
             'full_url' => base_url(uri_string()),
             'ip' =>   $ip,
             'product_name'=>$_REQUEST['country'],
             'browser_info' => $agent,
             'datetime' =>date('Y-m-d H:i:s'),
             'customer_id' =>$ci->session->userdata('customer_data')?$ci->session->userdata('customer_data')['id']:0,
             'platform'=>$ci->agent->platform()    //OS
                  
                       );
        
        
        
        $ci->logger->searchLog($log_array); //LOOK FOR THIS
 

    }

}
if (!function_exists('emailHelperConfig')) {

    function emailConfigHelper() {
     
           $ci = & get_instance();
        $ci->load->library('email');
        $config = array();
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'ssl://smtp.googlemail.com';
        $config['smtp_user'] = 'info@evmax.in';
        $config['smtp_pass'] = 'Vasudeva#123';
        $config['smtp_port'] = 465;
        $ci->email->initialize($config);

        $ci->email->set_newline("\r\n");
        $ci->email->set_mailtype("html");

    }

}
if (!function_exists('cleanProduct')) {

    function cleanproduct($string) {
     
           $ci = & get_instance();
         $string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.
   $string = preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.

   return preg_replace('/-+/', '-', $string);

    }

}
/*if (!function_exists('string_to_log')) {

    function string_to_log($string) {
        if (empty($string))
            return FALSE;

        $padding = "\t\t\t\t\t";

        $result = NULL;

        foreach (explode("\n", trim($string)) as $line)
            $result .= "{$padding}{$line}\n";

        return trim($result);
    }

}

*/
/*if (!function_exists('log_query')) {

    function log_query($level = 'debug', $uri = FALSE) {
        $message = 'Query';
        if ($uri) {
            $uri = get_instance()->uri->uri_string();
            $message .= ' em "';
            $message .= empty($uri) ? 'DEFAULT_CONTROLLER/index' : $uri;
            $message .= '"';
        }
        $message .= ': ' . string_to_log(get_instance()->db->last_query());

        return log_message($level, $message);
    }

}

*/
/*if (!function_exists('log_uri')) {

    function log_uri($level = 'debug') {
       
        $CI = & get_instance();
        return log_message($level, 'URI STRING: "' . $CI->uri->uri_string() .
                        '" (' . $CI->router->fetch_class() . '->' .
                        $CI->router->fetch_method() . ')');
    }

}

*/
/*if (!function_exists('log_var')) {

    function log_var($expression, $level = 'debug') {
        return log_message($level, string_to_log(var_export($expression, TRUE)));
    }

}

*/


?>