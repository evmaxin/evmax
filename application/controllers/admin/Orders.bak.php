<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Orders extends CI_Controller {

	/**
         * @file        : Attributes.php
         * @type        : Controller
         * @author      : Nagender
         * @description : Adding Attributes in this controller with all actions like add,edit, delete etc.
         * @date        : 12/07/2017
	 *  
	 */
    public function __construct()
	{
            parent::__construct();
             if(!$this->session->userdata('admin_data'))
            {
                redirect("/admin/index/login");
                
            }
          
		
	}
	public function index()
	{
             $this->load->helper('url');
            $data['title']='Orders';
          $this->load->model(array('admin/OrdersDT_model' => 'attributetype','admin/Category_model' => 'category'));
            $data['datatable_path']= "admin/Orders/ajax_list";// must and should declare this value
            
            $template['content'] = $this->load->view('admin/orders/index', $data, TRUE);
            $this->load->view('admin/template_DT',$template);//For data tables only template
	}


        public function ajax_list()
	{
             $this->load->model('admin/OrdersDT_model','customers');
		$list = $this->customers->get_datatables();
		//echo $this->db->last_query(); exit;
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $customers) {
                    $full_url = base_url()."admin/orders/threesixtydegrees/".$customers->order_id;
			$no++;
			$row = array();
			$row[] = $no;
                        $row[] = $customers->firstname;
                        $row[] = '#'.$customers->order_number;
			$row[] = $customers->quantity;
                        $row[] = ($customers->total_price+intval($customers->tax));
                        $row[] = ($customers->order_date);
                        $row[] = ($customers->store_name);
			$row[] = "<a href='$full_url' class='btn green'> <i class='fa fa-eye'></i> </a> ";

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
        public function threesixtydegrees($id) {
            
           $this->load->model('admin/Orders_model','orders');
          $data['orders_data'] = $this->orders->get_ordersDetails($id);
          //echo $this->db->last_query();
          $data['attributes_data'] = $this->orders->get_orderAttributes($id);
         // echo $this->db->last_query();
           $template['content'] = $this->load->view('admin/orders/threesixtydegrees', $data, TRUE);
            $this->load->view('admin/template',$template);//For data tables only template
        }
        public function customer_orders($param) {
            
            echo "under process";
        }
}
