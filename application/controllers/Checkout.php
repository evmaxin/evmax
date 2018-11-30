<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout extends CI_Controller {
    
    
     public function __construct()
        {
         parent::__construct();
               $libraries = array(
           // 'Log_lib' => 'logger',
           // 'user_agent' =>'agent',
             'Common_lib'=>'Common_lib'      
                       );
               $this->load->helper('log_helper');
               $this->load->library($libraries);
    
               log_data();//helper function
        }

	public function index(){
	
            
		if($this->input->post()){
			
			$this->session->unset_userdata('cart_session');
			$this->session->set_flashdata('alert','<div class="alert alert-success" role="alert">Your order has been sent.</div>');
			redirect('');
		}
		 $contents = array('meta_keywords'=>'',
                            'meta_description'=>'',
                            'meta_title'=>'');
		$contents['cart_session'] = $this->session->userdata('cart_session');
                //Seperate session value for attributes of product 'cart_session_attributes'
                $contents['cart_session1'] = $this->session->userdata('cart_session_attributes');
	
		$template['content']    = $this->load->view('frontpages/checkout/cart',$contents,TRUE);
		$this->load->view('frontpages/template',$template);
	
	}
        public function cart() {
           //  $this->session->set_userdata('cart_session', "");exit;
           //print_r($this->session->userdata('cart_session')['product_id']);
                     //    $valArray1 = explode(',', $this->session->userdata('cart_session')['product_id']);
                        //  print_r($valArray1);

		if($this->input->post()){
			
			$this->session->unset_userdata('cart_session');
			$this->session->set_flashdata('alert','<div class="alert alert-success" role="alert">Your order has been sent.</div>');
			redirect('');
		}
		 $contents = array('meta_keywords'=>'',
                            'meta_description'=>'',
                            'meta_title'=>'');
		$contents['cart_session'] = $this->session->userdata('cart_session');
                //Seperate session value for attributes of product 'cart_session_attributes'
                $contents['cart_session1'] = $this->session->userdata('cart_session_attributes');
	
		$template['content']    = $this->load->view('frontpages/checkout/cart',$contents,TRUE);
		$this->load->view('frontpages/template',$template);
            
        }
        /*public function placeOrder() {
                $customer_data = $this->session->userdata('customer_data');
                $customer_id = $customer_data['id']?$customer_data['id']:0;
               $this->load->model('frontend/customers_model','customers');
            if((!empty($this->session->userdata('customer_data'))))
            {
                redirect("Checkout/selectAdresses");
            }
            else {
               redirect("customers/index");
            }
            //echo "LoggedIN";
            
        }*/
        public function selectAdresses() {
            $contents = array('meta_keywords'=>'',
                            'meta_description'=>'',
                            'meta_title'=>'');
           // print_r($this->session->userdata('cart_session'));
             if(isset($_REQUEST['finaltotal']))
            {
                 $finaltotal = $_REQUEST['finaltotal']?$_POST['finaltotal']:'';
                  $tax = $_POST['tax']?$_POST['tax']:'';
                $this->session->set_userdata('finaltotal',$_REQUEST['finaltotal']);
                $this->session->set_userdata('tax',$_REQUEST['tax']);
                $this->session->set_userdata('shipping_gst',$_REQUEST['shipping_gst']);
                $this->session->set_userdata('handling_gst',$_REQUEST['handling_gst']);
                $this->session->set_userdata('delivery_cost',$_REQUEST['delivery_cost']);
                $this->session->set_userdata('handling_cost',$_REQUEST['handling_cost']);
            }
           // print_r($this->session->userdata('customer_data')); exit;
            if(!$this->session->userdata('customer_data'))
            {
                redirect("customers/index?finaltotal=$finaltotal");
            }
              $contents['customer_data']= $customer_data = $this->session->userdata('customer_data');
                $customer_id = $customer_data['id']?$customer_data['id']:0; 
               $this->load->model('frontend/customers_model','customers');
               
           if($this->customers->isCustomerAddressAdded($customer_id))
            {
             // print_r($this->customers->isCustomerAddressAdded($customer_id)); 
           //    echo "show address";
            $contents['cart_session'] = $this->session->userdata('cart_session');
            $contents['customer_address'] = $this->customers->isCustomerAddressAdded($customer_id);
            $template['content']    = $this->load->view('frontpages/checkout/selectAddress',$contents,TRUE);
            $this->load->view('frontpages/template',$template);
            }
            else {
                 redirect("customers/dashboard"); //Add address
            }
            
        }
	
	
	
	
}
