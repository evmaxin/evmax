<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Footerlinks extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $libraries = array(
            // 'Log_lib' => 'logger',
            // 'user_agent' =>'agent',
            'Common_lib' => 'Common_lib'
        );

        $this->load->library($libraries);
        $this->load->helper('log_helper');

        log_data(); //helper function
    }

    /**
     * @file        : BecomeASeller.php
     * @type        : Controller
     * @author      : Nagender(Initiated)
     * @description : Home controller for Evmax 
     * @date        : 07/08/2018
     *  
     */
    /* Function index for display home page in lookpi
     */
    public function index() {
       
        $template['content'] = $this->load->view('frontpages/footerlinks/terms', $contents, TRUE);
        $this->load->view('frontpages/template', $template);
    }
    public function privacy() {
       
        $template['content'] = $this->load->view('frontpages/footerlinks/privacy', $contents, TRUE);
        $this->load->view('frontpages/template', $template);
    }
    public function registration_process() {
       
        $template['content'] = $this->load->view('frontpages/footerlinks/registration_process', $contents, TRUE);
        $this->load->view('frontpages/template', $template);
    }
     public function refundandcancellation() {
       
        $template['content'] = $this->load->view('frontpages/footerlinks/refundandcancellation', $contents, TRUE);
        $this->load->view('frontpages/template', $template);
    }
    public function contact() {
       
        $template['content'] = $this->load->view('frontpages/footerlinks/contact', $contents, TRUE);
        $this->load->view('frontpages/template', $template);
    }

   
}
