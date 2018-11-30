<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Registration extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $libraries = array(
            // 'Log_lib' => 'logger',
            // 'user_agent' =>'agent',
            'Common_lib' => 'Common_lib'
        );
        $this->load->helper('log_helper');
        $this->load->library($libraries);

        log_data(); //helper function
    }

    public function index() {
          $this->load->helper('utilities_helper');//email setting avialble here
        if(isset($_REQUEST['email']))
        {
        $this->session->set_userdata('sess_email',$_REQUEST['email']);
        }
        $this->load->model(array('Common_model' => 'common'));
        $template['title'] = "Register";
        $contents = array('meta_keywords' => 'Register',
            'meta_description' => 'Register',
            'meta_title' => 'Register');

        $contents['com_type'] = $this->common->getTableData($tablename = "m_company_type", $cols = "m_company_type_id,company_type,status");
        $contents['term_docs'] = $this->common->getTermDocs();
        $contents['states'] = $this->common->getTableData($tablename = "state", $cols = "state_id,state_name,status",array(),"asc","state_name");
        //echo $this->db->last_query(); exit;
        $contents['category_interested'] = $this->common->getTableData($tablename = "m_category", $cols = "m_category_id,category_name,status");
        
	$template['content'] = $this->load->view('frontpages/merchant_reg/index', $contents, TRUE);
        $this->load->view('frontpages/template_merchant_reg', $template);
    }
     public function verifyOTP() {
           $this->load->helper('log_helper');//email setting avialble here
             $this->load->helper('utilities_helper');//email setting avialble here
             emailConfigHelper();
        $this->load->model(array('Common_model' => 'common'));
        $sess_email = $this->session->userdata('sess_email');
        $template['title'] = "Register";
        $contents = array('meta_keywords' => 'Register',
            'meta_description' => 'Register',
            'meta_title' => 'Register');
        
        $email = $this->input->post('hidden_email');
       // $email = "gfg@j.com";
      $otp_condition = array(
            'business_email' =>$email,
            'otp' =>$this->input->post('Otp'),
        );
        $contents['otp_details'] = $this->common->getTableData($tablename = "m_registration", $cols = "otp,business_email",$otp_condition);
        //echo $this->db->last_query(); 
        $enq_condition = array(
            'email' =>$sess_email
         );
        $enq_parameters = array(
                 'archive' =>1 
              );
        //to hide enq values
       // echo $this->db->last_query(); 
        //var_dump($contents['otp_details']);
      // echo count($contents['otp_details']); 
        if(isset($contents['otp_details']) && count($contents['otp_details'])>0)
                {
             $this->common->update($table='m_enquiry', $enq_parameters, $enq_condition);
              $parameters = array(
                 'otp_status' =>1 
              );
              $where_cond = array(
                            "business_email" => $email, 
                            
                        );
              $this->common->update($table='m_registration', $parameters, $where_cond);
                 
		
					
				
            $contents['cart_session'] = "ok";

            $this->email->from($this->config->item('config_from_email'), $this->config->item('config_from_emailname'));
            $this->email->to($email); //customer email
            $body = $this->load->view('admin/email_templates/merchant/registrationSuccess', $contents, TRUE);
			//$body = $this->load->view('admin/email_templates/sendProposal', $contents, TRUE);
            $this->email->subject('Registration is Successful '.$this->config->item('config_from_emailname'));
            $this->email->message($body);

            $this->email->send();
			
			echo 1;	 
                }else{
                    echo 0;
                }
        
        //$template['content'] = $this->load->view('frontpages/merchant_reg/otp', $contents, TRUE);
        //$this->load->view('frontpages/template_merchant_reg', $template);
    }

    //to store merchant enq details
    public function merchantData() {
        date_default_timezone_set('Asia/Kolkata');
      //  echo "ok";
          $this->load->helper('utilities_helper');//email setting avialble here
        $this->load->model(array('Common_model' => 'common'));
        $otp = rand(100000,999999);
        $this->session->set_userdata('otp',$otp);
        $data = array(
            'm_company_type_id' => $this->input->post('company_type'),
            'company_name' => $this->input->post('companyname'),
            'address1' => $this->input->post('address'),
            'city' => $this->input->post('city'),
            'state_id' => $this->input->post('state_id'),
            'pincode' => $this->input->post('pincode'),
            'business_contact_no' => $this->input->post('businessPhone'),
            'business_email' => $this->input->post('businessEmail'),
            'business_pan' => $this->input->post('businessPanCard'),
            'gst_number' => $this->input->post('gst_number'),
            'ifsc' => $this->input->post('ifsc'),
            'bankname' => $this->input->post('bankname'),
            'bankbranch' => $this->input->post('bankbranch'),
            'bank_account' => $this->input->post('bankAccount'),
            'account_name' => $this->input->post('accountName'),
            'surname' => $this->input->post('Surnam'),
            'name' => $this->input->post('name'),
            'person_address' => $this->input->post('person_address'),
            'person_city' => $this->input->post('person_city'),
            'person_state_id' => $this->input->post('person_state_id'),
            'person_pincode' => $this->input->post('person_pincode'),
            'person_email' => $this->input->post('person_email'),
            'phone' => $this->input->post('person_contact_num'),
            'alternative_number' => $this->input->post('bankAccount'),
            'person_pan_num' => $this->input->post('person_pan_num'),
            'adhaar' => $this->input->post('adhaar'),
            'otp' => $otp,
            'regDate' => date('Y-m-d H:i:s'),
        );
        $insert_id = $this->common->insertdata($tablename = "m_registration", $data);
		
		
	 $this->session->set_userdata("registration_id",$insert_id);
         $this->session->set_userdata("businessPhone",$this->input->post('businessPhone'));
        
        //echo $this->db->last_query();
        //echo  $num = $this->db->_error_number(); exit;
        if ($insert_id > 0) {
         //  print_r($this->input->post('categories'));
       //$category_batch = array();
            if ($this->input->post('categories')) {
                foreach ($this->input->post('categories') as $key => $val):
                    $category_batch = array(
                        "m_registration_id" => $insert_id,
                        "m_category_id" => $val
                    );
                 $insert_id1 = $this->common->insertdata($tablename = "m_reg_cat_interested", $category_batch);
                endforeach;
            }
        //$this->db->set($category_batch);
            //m_cat_interested , its child table to store categiries for merchant interested in enqiry form
           // $this->db_central->insert_batch('m_reg_cat_interested', $category_batch);
           // echo $this->db->last_query();
        }
        if ($insert_id > 0) {
            //$this->session->set_flashdata("msg", "Thank you! your Registration is in process, we will get back");

            $this->load->helper('log_helper');//email setting avialble here
             emailConfigHelper();
             $this->email->from($this->config->item('config_from_email'), $this->config->item('config_from_emailname'));
//            $this->email->from('info@digitalchimps.in', 'EVEcoSystem');
            $this->email->to($this->input->post('businessEmail')); //customer email
            $body = "OTP for Registration is ".$this->session->userdata('otp');;
            $this->email->subject('OTP for Registration');
            $this->email->message($body);

            $this->email->send();
            
        } else {
            //$this->session->set_flashdata("msg", "Sorry! your Registration is not submitted, please check entered details");
        }
        // if(($this->input->post('businessPhone') !="") && ($otp>0)){
   
        sms($this->input->post('businessPhone'),"OTP for Merchant Registration is $otp");
        //    }
        //redirect('/Registration');
         echo 1;
    }
    public function updateOTP() {
        $this->load->helper('log_helper');//email setting avialble here
         $this->load->helper('utilities_helper');//email setting avialble here
        emailConfigHelper();
        $this->load->model(array('Common_model' => 'common'));
        $otp = rand(100000,999999);
        $this->session->set_userdata('otp',$otp);
        //$this->input->post('person_email') means  business_email, coming from ajax
        $where_cond = array(
              'business_email' => $this->input->post('person_email')
               );
        $data = array(
             'otp' => $otp,
        );
        $insert_id = $this->common->update($tablename = "m_registration", $data,$where_cond);
        
        if ($insert_id) {
            //$this->session->set_flashdata("msg", "Thank you! your Registration is in process, we will get back");
        $this->email->from($this->config->item('config_from_email'), $this->config->item('config_from_emailname'));
            $this->email->to($this->input->post('person_email')); //customer email
            $body = "OTP for Registration is ".$this->session->userdata('otp');
            $this->email->subject('OTP for Registration');
            $this->email->message($body);

            $this->email->send();
        }
        if(($this->session->userdata('businessPhone') != "") && ($otp>0)){
         @sms($this->session->userdata('businessPhone'),"OTP for Merchant Registration is $otp");
            }
             echo 1;
    } 

}
