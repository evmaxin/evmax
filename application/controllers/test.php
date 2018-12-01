<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//$this->load->model('admin/AttributeTypeDT_model','customers');
	}

	public function index()
        {
            $this->load->library('leaflet');
             $this->load->model(array('Common_model' => 'common'));
    $getMarkers = $this->common->getTableData($tablename = "markers", $cols = "lat,lng,name");
      $config = array(
 	'center'         => '20.00, 76.00', // Center of the map
 	'zoom'           => 5, // Map zoom
 	);
 $this->leaflet->initialize($config);
 $marker='';
 
 foreach ($getMarkers as $key => $value) {
  //  echo "<pre>"; print_r($value);
    // $dynmicvalue = $marker.$key;
     $key = array(
         'latlng' 		=>$value->lat.', '.$value->lng, // Marker Location
 	//'latlng' 		=>'12.972442, 77.580643', // Marker Location
 	'popupContent' 	=> $value->name."".$value->address, // Popup Content
 	);
$this->leaflet->add_marker($key);
 }
 
$marker1 = array(
 	'latlng' 		=>'10.972442, 75.580643', // Marker Location
 	'popupContent' 	=> 'Hi, iam a popup!!', // Popup Content
 	);
//$this->leaflet->add_marker($marker1);
 

 $data['map'] =  $this->leaflet->create_map();              
 $this->load->view('test/index',$data);
               
        }
       public function testdel() {
           $this->load->helper('log_helper');
            testdel();
        }
        public function email() {
            $this->load->view('welcome_message');
            //redirect("/");
        }
        public function adminemail() {
            $this->load->view('admin/email_templates/admin_order_email');
        }
            public function pdf($order_number) {
            $contents['cart_session'] = $this->session->userdata('cart_session');
            // $this->load->model('admin/Orders_model' => 'orders','Common_model' => 'common');
              $this->load->model(array('admin/Orders_model'=>'orders','Common_model' => 'common'));
              $where_cond = array(
              'order_number' => $order_number
               );
               $data = $this->common->getTableData($tablename = "orders","order_id",$where_cond);
               $id = $data[0]->order_id?$data[0]->order_id:0;
        $contents['orders_data'] = $this->orders->get_ordersDetails($id,$order_number);
     //   echo $this->db->last_query();
       //exit;
           //  $this->load->model('frontend/customers_model','customers');
             //$customer_id = $this->session->userdata('customer_data') ? $this->session->userdata('customer_data')['id'] : 0;
            //$contents['customer_delhivery_address'] = $this->customers->isCustomerAddressAdded($customer_id, $add_type = 1);
            $this->load->view('admin/email_templates/order_pdf',$contents);
        }
        public function cust_email() {
            $contents['cart_session'] = $this->session->userdata('cart_session');
            $this->load->view('admin/email_templates/orders_email',$contents);
        }
        public function status() {
            $contents['order_number'] = 123456789;
            $contents['status'] = "Your Order has been confirmed. Packing and Picking in Process";
            $contents['cust_name'] = "okk";
            $this->load->view('admin/email_templates/order_status',$contents);
        }	
        function sms_test($mobile,$msg) {
     sms($mobile,$msg);
    }
    public function info() {
        phpinfo();
        
    }

	
            

}
