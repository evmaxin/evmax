<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class BuyersGuide extends CI_Controller {

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
        $this->load->model(array('admin/Product_model'=>'product','Common_model' => 'common'));
        $template['title'] = "About";
        $contents = array('meta_keywords' => '',
            'meta_description' => '',
            'meta_title' => '');
        $where_cond = array(
              'status' => 1
               );
        $contents['sliderImages'] = $this->product->get_sliderimages($id=0,0);//Header Images with category type 
       //$contents['com_type'] = $this->common->getTableData($tablename = "m_company_type", $cols = "m_company_type_id,company_type,status");
        $contents['buyerguide'] = $this->common->getTableData($tablename = "buyer_guide", $cols = "title,post,status",$where_cond,"DESC","buyer_guide_id");
       // $contents['category_interested'] = $this->common->getTableData($tablename = "m_category", $cols = "m_category_id,category_name,status");
        $template['content'] = $this->load->view('frontpages/buyers-guide/index', $contents, TRUE);
        $this->load->view('frontpages/template', $template);
    }

    public function advantages() {
        $template['title'] = "Advantages";
        $contents = array('meta_keywords' => 'Become a Seller',
            'meta_description' => 'Become a Seller',
            'meta_title' => 'Become a Seller');
        $template['content'] = $this->load->view('frontpages/becomeaseller/advantages', $contents, TRUE);
        $this->load->view('frontpages/template1', $template);
    }

    public function about() {
        $this->load->model(array('Common_model' => 'common'));
        $template['title'] = "About";
        $contents = array('meta_keywords' => 'Become a Seller',
            'meta_description' => 'Become a Seller',
            'meta_title' => 'Become a Seller');
        $contents['com_type'] = $this->common->getTableData($tablename = "m_company_type", $cols = "m_company_type_id,company_type,status");
        $contents['states'] = $this->common->getTableData($tablename = "state", $cols = "state_id,state_name,status");
        $contents['category_interested'] = $this->common->getTableData($tablename = "m_category", $cols = "m_category_id,category_name,status");
        $template['content'] = $this->load->view('frontpages/becomeaseller/about', $contents, TRUE);
        $this->load->view('frontpages/template1', $template);
    }

    public function howitworks() {
        $template['title'] = "How it works";
        $contents = array('meta_keywords' => 'Become a Seller',
            'meta_description' => 'Become a Seller',
            'meta_title' => 'Become a Seller');
        $template['content'] = $this->load->view('frontpages/becomeaseller/howitworks', $contents, TRUE);
        $this->load->view('frontpages/template1', $template);
    }

    public function pricing() {
        $template['title'] = "pricing";
        $contents = array('meta_keywords' => 'Become a Seller',
            'meta_description' => 'Become a Seller',
            'meta_title' => 'Become a Seller');
        $template['content'] = $this->load->view('frontpages/becomeaseller/pricing', $contents, TRUE);
        $this->load->view('frontpages/template1', $template);
    }

    public function advertise() {
        $template['title'] = "Advertise";
        $contents = array('meta_keywords' => 'Become a Seller',
            'meta_description' => 'Become a Seller',
            'meta_title' => 'Become a Seller');
        $template['content'] = $this->load->view('frontpages/becomeaseller/advertise', $contents, TRUE);
        $this->load->view('frontpages/template1', $template);
    }

    public function support() {
        $template['title'] = "Expert Support Partners ";
        $contents = array('meta_keywords' => 'Become a Seller',
            'meta_description' => 'Become a Seller',
            'meta_title' => 'Become a Seller');
        $template['content'] = $this->load->view('frontpages/becomeaseller/support', $contents, TRUE);
        $this->load->view('frontpages/template1', $template);
    }

    public function shippinganddelivery() {
        $template['title'] = "Shipping and delivery";
        $contents = array('meta_keywords' => 'Become a Seller',
            'meta_description' => 'Become a Seller',
            'meta_title' => 'Become a Seller');
        $template['content'] = $this->load->view('frontpages/becomeaseller/shippinganddelivery', $contents, TRUE);
        $this->load->view('frontpages/template1', $template);
    }

    //to store merchant enq details
    public function enquiry() {
        date_default_timezone_set('Asia/Kolkata');
        $this->load->model(array('Common_model' => 'common'));
        $data = array(
            //'m_company_type_id'=> $this->input->post('company_type'),
            'company_name' => $this->input->post('companyname'),
            'address1' => $this->input->post('Address1'),
            'address2' => $this->input->post('Address2'),
            'city' => $this->input->post('City'),
            'state_id' => $this->input->post('state_id'),
            'pincode' => $this->input->post('Pincode'),
            'landline' => $this->input->post('LandlineNumber'),
            'email' => $this->input->post('email'),
            'mobile' => $this->input->post('mobileno'),
            'first_name' => $this->input->post('firstName'),
            'last_name' => $this->input->post('lastname'),
            'business_email' => $this->input->post('business_email'),
            'dateOfEnq' => date('Y-m-d H:i:s'),
        );
        $insert_id = $this->common->insertdata($tablename = "m_enquiry", $data);
        //echo  $num = $this->db->_error_number(); exit;
        if ($insert_id > 0) {

            if ($this->input->post('categories')) {
                foreach ($this->input->post('categories') as $key => $val):
                    $category_batch[] = array(
                        "m_enquiry_id" => $insert_id,
                        "cat_id" => $val
                    );
                endforeach;
            }

            //m_cat_interested , its child table to store categiries for merchant interested in enqiry form
            $this->db->insert_batch('m_cat_interested', $category_batch);
        }
        $this->session->set_userdata("enquiry_id1", $insert_id);
        if ($insert_id > 0) {
            $msg = "Your enquiry has been submitted successfully. Our team will contact you shortly.";
            //$this->session->set_flashdata("msg", "Your enquiry has been submitted successfully. Our team will contact you shortly.");
            $this->load->helper('log_helper');//email setting avialble here
             emailConfigHelper();

            // $this->email->initialize($config);

            $contents['cart_session'] = "ok";


            $this->email->from($this->config->item('config_from_email'), $this->config->item('config_from_emailname'));
            $this->email->to($this->input->post("email")); //customer email
            $body = $this->load->view('admin/email_templates/merchant/thankyouEnquiry', $contents, TRUE);
            //$body = $this->load->view('admin/email_templates/sendProposal', $contents, TRUE);
            $this->email->subject('Enquiry is received - ' . $this->config->item('config_from_emailname'));
            $this->email->message($body);

            $this->email->send();
             //$this->session->set_flashdata("msg", "Thank you! your enquiry is in process, we will get back");
        } else {
            $msg ="Sorry! your enquiry is not submitted, please check entered details";
            //$this->session->set_flashdata("msg", "Sorry! your enquiry is not submitted, please check entered details");
        }
        redirect(base_url()."BecomeASeller/about?q=success&msg=$msg");
    }

    public function dblicateEnt() {
        echo "Duplicate email";
        echo '<meta http-equiv="refresh" content="5;url=http://demo.digitalchimps.in/evmaxfinal/BecomeASeller/" />';
    }

    public function testmail() {
        
        $this->load->helper('log_helper');
        emailConfigHelper();
        $from_email = "info@evmax.in";
        $to_email = "nagenderp27@gmail.com";
        //Load email library
        //$this->load->library('email');
        $this->email->from($from_email, 'Nagender');
        $this->email->to($to_email);
        $this->email->subject('Send Email Codeigniter1');
        $this->email->message('The email send using codeigniter library');
        //Send mail
        $this->email->send();
    }

}
