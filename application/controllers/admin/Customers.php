<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Customers extends CI_Controller {
    
	/**
	* @file        : Customers.php
         * @type        : Controller
         * @author      : Nagender
         * @description : Customers Display section.
         * @date        : 20/10/2017
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
           $this->load->model('admin/CustomersDT_model','customers');
            $this->load->helper('url');
            $data['title']='Customers';
           // $data['totaldata'] = $this->customers->get_attributetype_array();
            $data['datatable_path']= "admin/Customers/ajax_list";// must and should declare this value
            
            $template['content'] = $this->load->view('admin/customers/index', $data, TRUE);
            $this->load->view('admin/template_DT',$template);//For data tables only template
	}

      public function ajax_list()
	{
        $this->load->model('admin/CustomersDT_model','customers');
		$list = $this->customers->get_datatables();
		 //echo $this->db->last_query(); exit;
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $customers) {
                    $full_url = base_url()."admin/orders/customer_orders/".$customers->id;
			$no++;
			$row = array();
			$row[] = $no;
			$row[] = $customers->firstname;
			$row[] = $customers->lastname;
			$row[] = $customers->phone;
			//$row[] = $customers->address;
			//$row[] = $customers->city;
			$row[] = "<a href=".$full_url.">View</a>";

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
    
}
