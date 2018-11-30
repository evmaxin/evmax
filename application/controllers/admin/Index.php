<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {

	/**
	 * @file        : Index.php
         * @type        : Controller
         * @author      : Nagender
         * @description : Index Controller
         * @date        : 18/08/2017
	 *  
	 */
    public function __construct()
	{
            parent::__construct();
             if(!$this->session->userdata('admin_data'))
            {
                //redirect("/admin/");
            }
            else if($this->session->userdata('admin_data')&&($this->session->userdata('admin_data')['first_visit']==0))
            {
                redirect("/admin/merchant/Index/changePassword");
            }
            else 
            {
             //   redirect("/admin/Index");
            }
          
	//$this->session->set_userdata('store_id',1);	
	}
	public function login()
	{
            //
           
            if($this->session->userdata('admin_data')) //not fisrt vistit
            {
                redirect("/admin/index/dashboard");
            }
		//$this->load->model('admin/Category_model','category');
		$data['categories'] = "Welcome";
                $this->session->set_userdata('login_type', "1"); // to identify admin login
                //$template['content'] = $this->load->view('admin/index/login', $data, TRUE);
		$this->load->view('admin/index/login',$data);
	}
        public function merchantLogin()
	{
            //
            if($this->session->userdata('admin_data'))
            {
                redirect("/admin/index/dashboard");
            }
		//$this->load->model('admin/Category_model','category');
		$data['categories'] = "Welcome to merchant login";
                $this->session->set_userdata('login_type', "2");// to identify merchant login
                //$template['content'] = $this->load->view('admin/index/login', $data, TRUE);
		$this->load->view('admin/index/merchantLogin',$data);
	}
        function getdata(){
            $this->load->model(array('admin/Dashboard_model'=>'dashboard'));
        $data  = $this->dashboard->getChartOrders();
        
        print_r(json_encode($data, true));
    }
	public function dashboard()
	{
            //print_r($this->session->userdata('admin_data'));
            if($this->session->userdata('admin_data'))
            {
                
            
		$this->load->model(array('admin/Dashboard_model'=>'dashboard'));
		$data['title'] = "Welcome";
                $data['neworders'] = $this->dashboard->get_ordersData($neworders=1);
                $data['orders'] = $this->dashboard->get_ordersData($neworders=0,$order_value=1,$num_of_orders=1);
                $data['orders'] = $this->dashboard->ordersData($neworders=0,$order_value=1,$num_of_orders=1);
                //echo $this->db->last_query();
                $data['outofstockproducts'] = $this->dashboard->get_outOfStockProducts(0,$cout_flag=1,$where_flag=1);
                //$data['chartorders'] = $this->dashboard->getChartOrders();
            //    print_r(json_encode($data, true));
                
		$template['content'] = $this->load->view('admin/index/index', $data, TRUE);
		$this->load->view('admin/template',$template);
            } else {
                redirect("/admin");
            }
	}
        public function authenticate() {
            $this->load->model(array('admin/Dashboard_model'=>'dashboard'));
            $data['username'] = $this->input->post('username')?$this->input->post('username'):'';
            $data['password'] = $this->input->post('password')?$this->input->post('password'):'';
            if(($this->input->post('username')!="") && ($this->input->post('password')!="")){
            //$condition = "username =" . "'" . $data['username'] . "' AND " . "password =" . "'" . $data['password'] . "' AND " . "status =" . "'" . 1 . "'";
            $result = $this->dashboard->getStoreData($data['username'],$data['password']);
		//	print_r($result);
			
        
                if($result)
                {
                $sess_array = array();
                  foreach($result as $row)
                  {
					   //$storeName=$row->surname." ".$row->name;
                       $sess_array = array(
                      'admin_id' => $row->admin_id,
                      'username' => $row->username,
                      'store_name' =>  $row->store_name,
                      'store_id' => $row->store_id,
                      'first_visit' =>  $row->first_visit,
                      'profile_pic' => $row->profile_pic,
                    );
                    $this->session->set_userdata('admin_data', $sess_array);
					
				//	print_r($sess_array);
			if($row->first_visit === "0")
                        {
                            redirect("/admin/merchant/Index/changePassword");
                        }else{
                        redirect("/admin/index/dashboard");
                        }
                        
                  }
                
                }
                else
                {
              $this->session->set_flashdata('fail', 'Invalid User or Password');
               if($this->session->userdata('login_type')=== "2"){
                    redirect("/merchant/login");
               }
               else if($this->session->userdata('login_type')=== "1"){
                    redirect("/admin/index/login");
               }
               else {
                    redirect("/");
               }
                 
                      
                }
                  
            }
            
       
            
            
        }
        public function logout() {
               $this->session->set_userdata('admin_data',"");
               if($this->session->userdata('login_type')=== "2"){
                    redirect("/merchant/login");
               }
               else if($this->session->userdata('login_type')=== "1"){
                    redirect("/admin/index/login");
               }
               else {
                    redirect("/");
               }
            }
            public function profile() {
                echo "coming soon";
            }
            public function listOutOfStockProducts() {
                $this->load->model(array('admin/Dashboard_model'=>'dashboard'));
		$data['title'] = "listOutOfStockProducts";
                //$data['neworders'] = $this->dashboard->get_ordersData($neworders=1);
              //  $data['orders'] = $this->dashboard->get_ordersData($neworders=0,$order_value=1,$num_of_orders=1);
                $data['outofstockproducts'] = $this->dashboard->get_outOfStockProducts(0,$cout_flag=0,$where_flag=1);
		$template['content'] = $this->load->view('admin/index/listOutOfStockProducts', $data, TRUE);
		$this->load->view('admin/template',$template);
            }
            public function forgotPassword(){
                      $this->load->model('Common_model', 'common');
       // $email = $this->input->post("email");
        $where_cond =array('username'=>$this->input->post("email"));
        $res = $this->common->getTableData($tablename="admin", $cols="password",$where_cond);
        
    if(isset($res['0']->password) && !empty($res['0']->password)){
        $this->load->helper('log_helper');//email setting avialble here
             emailConfigHelper();

            $this->email->from($this->config->item('config_from_email'), $this->config->item('config_from_emailname'));
            $this->email->to($this->input->post("email")); //customer email
            $this->email->subject('Your Password for '.$this->config->item('config_from_emailname'));
            $this->email->message("Your password:". $res['0']->password);

            $ok = $this->email->send();
           //$ok =TRUE;
            if($ok){
             $this->session->set_flashdata('success', 'Password sent to your email '.$this->input->post("email"));
               
            }
            
            } else{
                $this->session->set_flashdata('fail', $this->input->post("email") ." Not exists.");
            }
            $this->load->view('admin/index/success');
            }
          
      
	
}
