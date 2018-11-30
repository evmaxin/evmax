<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customers extends CI_Controller {

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
        
        if(isset($_REQUEST['country'])&&($_REQUEST['country']!=""))
        {
            searchLog();
        }
        }

	public function index()
	{
            //$this->session->set_userdata('customer_data', "");
             $this->load->library('form_validation');
            $this->load->helper('url');
            if(isset($_REQUEST['finaltotal']))
            {
                 $this->session->set_userdata('finaltotal',$_REQUEST['finaltotal']);
            }
            if($this->session->userdata('customer_data'))
            {
                
                 $contents['customer_data']= $customer_data = $this->session->userdata('customer_data');
                 $customer_id = $customer_data?$customer_data['id']:0;
               $this->load->model('frontend/customers_model','customers');
              // print_r($this->customers->isCustomerAddressAdded($customer_id)); exit;
            //  print_r($this->session->userdata('cart_session'));exit;
           if(!$this->customers->isCustomerAddressAdded($customer_id))
            {
                redirect("Customers/addAddress");
            }
            else if($this->session->userdata('cart_session')=="")
            {
                  redirect("Customers/account");
            }
            elseif($this->session->userdata('cart_session') !="")
            {
                redirect("Checkout/cart");
            }
                
            }
        //$this->load->model(array('admin/Product_model'=>'product','admin/Category_model'=>'category'));
        $contents = array('meta_keywords'=>'',
                            'meta_description'=>'',
                            'meta_title'=>'');
        $contents['cart_session'] = $this->session->userdata('cart_session');

        $template['content'] = $this->load->view('frontpages/customers/index', $contents, TRUE);
        $this->load->view('frontpages/template', $template);
		
		//$this->load->view('customers_view');
	}
        public function register()
        {
            if($this->session->userdata('customer_data'))
            {
                redirect("customers/dashboard");
            }
            $this->load->model(array('common_model'=>'common'));
            $data['firstname'] = $this->input->post('fname')?$this->input->post('fname'):'';
            $data['email'] = $this->input->post('email')?$this->input->post('email'):'';
            $data['phone'] = $this->input->post('phone')?$this->input->post('phone'):0;
            $data['password'] = $this->input->post('password')?$this->input->post('password'):'';
            $data['conf_password'] = $this->input->post('confpassword')?$this->input->post('confpassword'):'';
            if($this->input->post('register') && ($this->input->post('email') !="") && ($this->input->post('password') !="")){
           $res =  $this->common->insertdata($tablename='customers',$data);
            }
            if($res)
            {
                 $this->session->set_flashdata('success', 'Registraion success Use Email and password to login');
                      redirect("customers/index");
               // redirect("customers/registersuccess");
            }
        }
        public function login()
        {
            if($this->session->userdata('customer_data'))
            {
                redirect("customers/dashboard");
            }
            $this->load->model(array('common_model'=>'common','frontend/customers_model'=>'customers'));
            $data['email'] = $this->input->post('email')?$this->input->post('email'):'';
            $data['password'] = $this->input->post('password')?$this->input->post('password'):'';
            if(($this->input->post('email')!="") && ($this->input->post('password')!="")){
            $condition = "email =" . "'" . $data['email'] . "' AND " . "password =" . "'" . $data['password'] . "'";
            $result = $this->common->selectdata($tablename='customers',$condition);
                if($result)
                {
                $sess_array = array();
                  foreach($result as $row)
                  {
                    $sess_array = array(
                      'id' => $row->id,
                      'username' => ucfirst($row->firstname)." ".ucfirst($row->lastname),
                      'email' => $row->email,
                      'phone' => $row->phone
                    );
                $this->session->set_userdata('customer_data', $sess_array);
                $customer_data = $this->session->userdata('customer_data');
                $customer_id = $customer_data['id']?$customer_data['id']:0;
                if($this->customers->isCustomerAddressAdded($customer_id))
               {
                redirect("Checkout/cart");
               }else{
                   redirect("customers/addAddress");
               }
              
                  }
                
                }
                else
                {
                   
                  $this->session->set_flashdata('fail', 'Invalid Email or password');
                      redirect("customers/index");
                }
                  
            }
            
        }
        public function dashboard() {
             $contents = array('meta_keywords'=>'',
                            'meta_description'=>'',
                            'meta_title'=>'');
            $contents['cart_session'] = $this->session->userdata('cart_session');
            if($this->session->userdata('customer_data'))
            {
                
                $this->load->model('frontend/customers_model','customers');
                 $contents['customer_data']= $customer_data = $this->session->userdata('customer_data');
                $customer_id = $customer_data['id']?$customer_data['id']:0;
             if($this->customers->isCustomerAddressAdded($customer_id))
            {
               //echo "added";
               redirect("Checkout/cart");
            }
  
        
        $template['content'] = $this->load->view('frontpages/customers/dashboard', $contents, TRUE);
        $this->load->view('frontpages/template', $template);
            } else {
                redirect("customers/index");
            }
        }
        public function changeaddress() {
             $contents = array('meta_keywords'=>'',
                            'meta_description'=>'',
                            'meta_title'=>'');
            $contents['cart_session'] = $this->session->userdata('cart_session');
             if($this->session->userdata('customer_data'))
            {
                $contents['customer_data'] = $this->session->userdata('customer_data');
                $this->load->model('frontend/customers_model','customers');
                $customer_data = $this->session->userdata('customer_data');
                $customer_id = $customer_data['id']?$customer_data['id']:0;
                
             if(!$this->customers->isCustomerAddressAdded($customer_id))
            {
              redirect("customers/dashboard");
            }
            $contents['customer_address'] = $this->customers->isCustomerAddressAdded($customer_id);
           // $this->customers->getCustomerAddress($customer_id);
  
        
        $template['content'] = $this->load->view('frontpages/customers/changeaddress', $contents, TRUE);
        $this->load->view('frontpages/template', $template);
            }
        }
        public function changepassword() {
             $contents = array('meta_keywords'=>'',
                            'meta_description'=>'',
                            'meta_title'=>'');
            $contents['cart_session'] = $this->session->userdata('cart_session');
             if($this->session->userdata('customer_data'))
            {
                $contents['customer_data'] = $this->session->userdata('customer_data');
                $this->load->model('frontend/customers_model','customers');
                $customer_data = $this->session->userdata('customer_data');
                $customer_id = $customer_data['id']?$customer_data['id']:0;
                
             if(!$this->customers->isCustomerAddressAdded($customer_id))
            {
              redirect("customers/dashboard");
            }
            $contents['customer_address'] = $this->customers->isCustomerAddressAdded($customer_id);
           // $this->customers->getCustomerAddress($customer_id);
  
        
        $template['content'] = $this->load->view('frontpages/customers/changepassword', $contents, TRUE);
        $this->load->view('frontpages/template', $template);
            }
        }
        public function changeprofile() {
             $contents = array('meta_keywords'=>'',
                            'meta_description'=>'',
                            'meta_title'=>'');
            $contents['cart_session'] = $this->session->userdata('cart_session');
             if($this->session->userdata('customer_data'))
            {
                $contents['customer_data'] = $this->session->userdata('customer_data');
                
                $this->load->model(array('common_model'=>'common'));
                $customer_data = $this->session->userdata('customer_data');
                $customer_id = $customer_data['id']?$customer_data['id']:0;
             // $this->customers->getCustomerAddress($customer_id);
                $condition = array('id'=>$customer_id);
            $contents['customers_data'] = $this->common->selectdata($tablename='customers',$condition);  
        
        $template['content'] = $this->load->view('frontpages/customers/changeprofile', $contents, TRUE);
        $this->load->view('frontpages/template', $template);
            }
        }
        public function updatepassword() {
            
            if($this->session->userdata('customer_data') && $_POST)
            {
            $customer_data = $this->session->userdata('customer_data');
             $customer_id = $customer_data['id']?$customer_data['id']:0;
             $this->load->model(array('common_model'=>'common'));
            $data['password'] = $this->input->post('password')?$this->input->post('password'):'';
            $data['conf_password'] = $this->input->post('cpassword')?$this->input->post('cpassword'):'';
            //$data['password'] = $this->input->post('password')?$this->input->post('password'):'';
           // $data['customer_id'] = $customer_id?$customer_id:0;
            $where_cond = array('id' => $customer_id,'password' => $this->input->post('cpass'));
            $ok = $this->common->update($tablename='customers',$data,$where_cond);
            }
            if(!$ok){
                redirect("customers/notupdated");
            }
            elseif($ok){
                redirect("customers/account");
             }
        }
        public function updateprofile() {
            if($this->session->userdata('customer_data') && $_POST)
            {
            $customer_data = $this->session->userdata('customer_data');
             $customer_id = $customer_data['id']?$customer_data['id']:0;
             $this->load->model(array('common_model'=>'common'));
            $data['firstname'] = $this->input->post('firstname')?$this->input->post('firstname'):'';
            $data['lastname'] = $this->input->post('lastname')?$this->input->post('lastname'):'';
            $where_cond = array('id' => $customer_id);
            $ok = $this->common->update($tablename='customers',$data,$where_cond);
            }
            if(!$ok){
                redirect("customers/notupdated");
            }
            elseif($ok){
                redirect("customers/changeprofile");
             }
        }
        public function notupdated() {
            echo "notupdated";
        }
        
        public function updateAddress() {
            //echo "Address Added";
            if($this->session->userdata('customer_data') && $_POST)
            {
             $customer_data = $this->session->userdata('customer_data');
             $customer_id = $customer_data['id']?$customer_data['id']:0;
             $this->load->model(array('common_model'=>'common'));
            $data['address_type_id'] = $this->input->post('addresstype')?$this->input->post('addresstype'):'';
            $data['customer_id'] = $customer_id?$customer_id:0;
            $data['hno'] = $this->input->post('hno')?$this->input->post('hno'):'';
            $data['city'] = $this->input->post('city')?$this->input->post('city'):'';
            $data['state'] = $this->input->post('state')?$this->input->post('state'):'';
            $data['address1'] = $this->input->post('address1')?$this->input->post('address1'):'';
            $data['address2'] = $this->input->post('address2')?$this->input->post('address2'):'';
            $data['country'] = $this->input->post('country')?$this->input->post('country'):'';
            $data['pin'] = $this->input->post('pin')?$this->input->post('pin'):0;
            $where_cond = array('customer_address_id' => $this->input->post('addresstype'));
            $AddrssAdded1 = $this->common->update($tablename='customer_address',$data,$where_cond);
           
            $data1['address_type_id'] = $this->input->post('addresstype1')?$this->input->post('addresstype1'):2;
            $data1['customer_id'] = $customer_id?$customer_id:0;
            $data1['hno'] = $this->input->post('hno1')?$this->input->post('hno1'):$this->input->post('hno');
            $data1['city'] = $this->input->post('city1')?$this->input->post('city1'):$this->input->post('city');
            $data1['state'] = $this->input->post('state1')?$this->input->post('state1'):$this->input->post('state');
            $data1['address1'] = $this->input->post('address11')?$this->input->post('address11'):$this->input->post('address1');
            $data1['address2'] = $this->input->post('address21')?$this->input->post('address21'):$this->input->post('address2');
            $data1['country'] = $this->input->post('country1')?$this->input->post('country1'):$this->input->post('country');
            $data1['pin'] = $this->input->post('pin1')?$this->input->post('pin1'):$this->input->post('pin');
             $where_cond1 = array('customer_address_id' => $this->input->post('addresstype1'));
            $AddrssAdded = $this->common->update($tablename='customer_address',$data1,$where_cond1);
           // $AddrssAdded=1;
            
            }
        if($AddrssAdded || $AddrssAdded1){
                redirect("customers/account");
            
            }else
            {
                echo "Error";
            }
           
        }
        public function account() {
             $contents = array('meta_keywords'=>'',
                            'meta_description'=>'',
                            'meta_title'=>'');
            $contents['cart_session'] = $this->session->userdata('cart_session');
            if($this->session->userdata('customer_data'))
            {
        $contents['customer_data'] = $this->session->userdata('customer_data');
        $template['content'] = $this->load->view('frontpages/customers/account', $contents, TRUE);
        $this->load->view('frontpages/template', $template);
            }else
            {
                 redirect("customers/index");
            }
        }
          public function orders() {
            $contents['cart_session'] = $this->session->userdata('cart_session');
            if($this->session->userdata('customer_data'))
            {
            $contents['customer_data']= $customer_data = $this->session->userdata('customer_data');
             $customer_id = $customer_data['id']?$customer_data['id']:0;
        $this->load->model('frontend/customers_model','customers');
        $contents['orders'] = $this->customers->getCustomerorders($customer_id);
       // echo $this->db->last_query();
         //$contents['customer_data'] = $this->session->userdata('customer_data');
        $template['content'] = $this->load->view('frontpages/customers/orders', $contents, TRUE);
        $this->load->view('frontpages/template', $template);
            }else
            {
                 redirect("customers/index");
            }
        }
        public function addAddress() {
            //echo "Address Added";
            if($this->session->userdata('customer_data') && $_POST)
            {
             $customer_data = $this->session->userdata('customer_data');
             $customer_id = $customer_data['id']?$customer_data['id']:0;
             $this->load->model(array('common_model'=>'common'));
            $data['address_type_id'] = $this->input->post('addresstype')?$this->input->post('addresstype'):'';
            $data['customer_id'] = $customer_id?$customer_id:0;
            $data['hno'] = $this->input->post('hno')?$this->input->post('hno'):'';
            $data['city'] = $this->input->post('city')?$this->input->post('city'):'';
            $data['state'] = $this->input->post('state')?$this->input->post('state'):'';
            $data['address1'] = $this->input->post('address1')?$this->input->post('address1'):'';
            $data['address2'] = $this->input->post('address2')?$this->input->post('address2'):'';
            $data['country'] = $this->input->post('country')?$this->input->post('country'):'';
            $data['pin'] = $this->input->post('pin')?$this->input->post('pin'):0;
            $data['both_address_same'] = $this->input->post('bothsame')?$this->input->post('bothsame'):0;
            $AddrssAdded1 = $this->common->insertdata($tablename='customer_address',$data);
           
            $data['address_type_id'] = $this->input->post('addresstype1')?$this->input->post('addresstype1'):2;
            $data['customer_id'] = $customer_id?$customer_id:0;
            $data['hno'] = $this->input->post('hno1')?$this->input->post('hno1'):$this->input->post('hno');
            $data['city'] = $this->input->post('city1')?$this->input->post('city1'):$this->input->post('city');
            $data['state'] = $this->input->post('state1')?$this->input->post('state1'):$this->input->post('state');
            $data['address1'] = $this->input->post('address11')?$this->input->post('address11'):$this->input->post('address1');
            $data['address2'] = $this->input->post('address21')?$this->input->post('address21'):$this->input->post('address2');
            $data['country'] = $this->input->post('country1')?$this->input->post('country1'):$this->input->post('country');
            $data['pin'] = $this->input->post('pin1')?$this->input->post('pin1'):$this->input->post('pin');
            $data['both_address_same'] = $this->input->post('bothsame')?$this->input->post('bothsame'):0;
            $AddrssAdded = $this->common->insertdata($tablename='customer_address',$data);
           // $AddrssAdded=1;
            
            }
            if($AddrssAdded){
                redirect("checkout/cart");
            
            }else
            {
                redirect("customers/dashboard");
            }
           
        }
        
	public function ajax_list()
	{
        $this->load->model('frontend/customers_model','customers');
		$list = $this->customers->get_datatables();
		
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $customers) {
			$no++;
			$row = array();
			$row[] = $no;
			$row[] = $customers->firstname;
			$row[] = $customers->lastname;
			$row[] = $customers->phone;
			$row[] = $customers->address;
			$row[] = $customers->city;
			$row[] = "<a href='Customers/Edit/".$customers->id."'>Edit</a>";

			$data[] = $row;
		}

		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->customers->count_all(),
						"recordsFiltered" => $this->customers->count_filtered(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
		
	}
        public function logout() {
            $this->session->set_userdata('customer_data','');
           redirect("customers/index"); 
        }
        public function activate() {
          $contents = array('meta_keywords'=>'',
                            'meta_description'=>'',
                            'meta_title'=>'');
        $customer_id = $_REQUEST['customer_id'] ;
        $contents['title'] = "";
        $template['content'] = $this->load->view('frontpages/customers/account', $contents, TRUE);
        $this->load->view('frontpages/template', $template);
           
        }
        public function registersuccess() {
         
       // $customer_id = $_REQUEST['customer_id'] ;
        $contents = array('meta_keywords'=>'',
                            'meta_description'=>'',
                            'meta_title'=>'');
        $contents['title'] = "";
         $contents['customer_data'] = $this->session->userdata('customer_data');
        $template['content'] = $this->load->view('frontpages/customers/account', $contents, TRUE);
        $this->load->view('frontpages/template', $template);
           
        }
        public function vieworder($id) {
                $data = array('meta_keywords'=>'',
                            'meta_description'=>'',
                            'meta_title'=>'');   
           $this->load->model('admin/Orders_model','orders');
           $data['customer_data'] = $this->session->userdata('customer_data');
          $data['orders_data'] = $this->orders->get_ordersDetails($id);
          //echo $this->db->last_query();
          $data['attributes_data'] = $this->orders->get_orderAttributes($id);
         // echo $this->db->last_query();
           $template['content'] = $this->load->view('frontpages/customers/vieworder', $data, TRUE);
           $this->load->view('frontpages/template', $template);
        }
            
        

}
