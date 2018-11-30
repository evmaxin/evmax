<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Payment extends CI_Controller {
public function __construct()
        {
         parent::__construct();
               $libraries = array(
           // 'Log_lib' => 'logger',
           // 'user_agent' =>'agent',
             'Common_lib'=>'Common_lib',
             'instamojo'=>'instamojo'
                       );
               $this->load->helper('log_helper');
               $this->load->library($libraries);
    
               log_data();//helper function
        
        if(isset($_REQUEST['country'])&&($_REQUEST['country']!=""))
        {
            searchLog();
        }
        }
 public function index(){
    $this->load->view('payment/payumoney/form1');
 }
 public function check(){
     
     if($this->input->post('paymode')== "")
     {
          redirect("Checkout/selectAdresses");
     }
     else if(($this->input->post('paymode') !="") && ($this->input->post('paymode')== "payumoney")){
         
     // all values are required
    $amount =  $this->input->post('payble_amount');
    $product_info = $this->input->post('product_info');
    $customer_name = $this->input->post('customer_name');
    $customer_emial = $this->input->post('customer_email');
    $customer_mobile = $this->input->post('mobile_number');
    $customer_address = $this->input->post('customer_address');
    
    //payumoney details
    
    
        $MERCHANT_KEY = "gtKFFx"; //change  merchant with yours//gtKFFx
        $SALT = "eCwWELxi";  //change salt with yours //eCwWELxi

        $txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
        //optional udf values 
        $udf1 = '';
        $udf2 = '';
        $udf3 = '';
        $udf4 = '';
        $udf5 = '';
       
         $hashstring = $MERCHANT_KEY . '|' . $txnid . '|' . $amount . '|' . $product_info . '|' . $customer_name . '|' . $customer_emial . '|' . $udf1 . '|' . $udf2 . '|' . $udf3 . '|' . $udf4 . '|' . $udf5 . '||||||' . $SALT;
         $hash = strtolower(hash('sha512', $hashstring));
         
       $success = base_url() . 'Status';  
        $fail = base_url() . 'Status';
        $cancel = base_url() . 'Status';
        
        
         $data = array(
            'mkey' => $MERCHANT_KEY,
            'tid' => $txnid,
            'hash' => $hash,
            'amount' => $amount,           
            'name' => $customer_name,
            'productinfo' => $product_info,
            'mailid' => $customer_emial,
            'phoneno' => $customer_mobile,
            'address' => $customer_address,
            'action' => "https://test.payu.in", //for live change action  https://secure.payu.in
            'sucess' => $success,
            'failure' => $fail,
            'cancel' => $cancel            
        );
         $data['cart_session'] = $this->session->userdata('cart_session');
        $template['content'] =  $this->load->view('payment/payumoney/confirmation', $data,TRUE);   
        $this->load->view('frontpages/template',$template);
 }
    else if(($this->input->post('paymode') !="") && ($this->input->post('paymode')== "instamojo")){
//     //   $this->load->library('instamojo');
//    $api = new Instamojo\Instamojo("test_e4eb5a101d3ebc93343cf2a7b87", "test_fef11678b337dbc765d41641a1a");//key,token
//try {
//    $response = $api->paymentRequestCreate(array(
//        "amount" => "1000",
//        "purpose" => "Buying iPhoneX test",
//        "send_email" => true,
//        "email" => "nagenderp27@gmail.com",
//        "redirect_url" => "http://lookpi.com/store/index.php"
//        ));
//    print_r($response);
//}
//catch (Exception $e) {
//    print('Error: ' . $e->getMessage());
//}
        $pay = $this->instamojo->pay_request( 

						$amount = $this->session->userdata('finaltotal')?($this->session->userdata('finaltotal')+$this->session->userdata('tax')+$this->session->userdata('shipping_gst')+$this->session->userdata('handling_gst')):'Error' , 
						$purpose = "Lookpi product purchase" , 
						$buyer_name = "rbbqq" , 
						$email = "nagenderp27@gmail.com" , 
						$phone = "8989122017" ,
		     			$send_email = 'TRUE' , 
		     			$send_sms = 'TRUE' , 
		     			$repeated = 'FALSE'

		     		);

		$redirect_url = "http://lookpi.com/store/index.php";
//print_r($pay); exit;

		redirect($redirect_url,'refresh') ;
 }
 else { //Default
     //if(($this->input->post('paymode') !="") && ($this->input->post('paymode')== "cod"))
     
         $data['amount'] = $this->session->userdata('finaltotal')?($this->session->userdata('finaltotal')+($this->session->userdata('delivery_cost')+$this->session->userdata('handling_cost')+$this->session->userdata('tax')+$this->session->userdata('shipping_gst')+$this->session->userdata('handling_gst'))):'COD';
         $data['status'] = "COD/Online";
         $data['txnid'] = 0;
          $this->session->set_userdata('payment_info',$data);
         redirect("Order/index");
     }
     }
   
    
   }
