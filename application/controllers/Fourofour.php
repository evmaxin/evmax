<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fourofour extends CI_Controller {
    
            public function __construct()
        {
                parent::__construct();
               $libraries = array(
            'Log_lib' => 'logger',
            'user_agent' =>'agent'       
                       );
               $this->load->library($libraries);
               
               //Write common lib for this code
                if ($this->agent->is_browser())
                 {
               $agent = $this->agent->browser().'{'.$this->agent->version().'}';
                }
                
               //$category = $this->uri->segment('2')?$this->uri->segment('2'):'No Category';
               if($this->input->ip_address()=="::1") { $ip = '183.83.85.232';} else {$ip = $this->input->ip_address(); }
               
              $log_array = array(
             'full_url' => base_url(uri_string()),
             'ip' =>   $ip,
             'browser_info' => $agent,
             'datetime' =>date('Y-m-d H:i:s'),
             'customer_id' =>$this->session->userdata('customer_data')?$this->session->userdata('customer_data')['id']:0    
                       );
        
        
        
        $this->logger->notFoundURLlogs($log_array); //LOOK FOR THIS
        }

	public function index()
	{
           	$this->load->view('fourofour');
	}
        
	
}
