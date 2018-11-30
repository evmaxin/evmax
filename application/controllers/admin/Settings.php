<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Settings extends CI_Controller {

	/**
         * @file        : Settings.php
         * @type        : Controller
         * @author      : Nagender
         * @description : All Setting config will be performed here
         * @date        : 30/12/2017
	 *  
	 */
       
        public function __construct()
	{
            parent::__construct();
             if(!$this->session->userdata('admin_data'))
            {
                redirect("/admin/index/login");
            }
          
	//$this->session->set_userdata('store_id',1);	
	}
	public function index() {
         $data['title'] = "GST Rules";
         $this->load->model(array('admin/Category_model' => 'category'));
        $data['datatable_path'] = "admin/Settings/gstAjaxList"; // must and should declare this value
        $data['categorytypes'] = $this->category->get_category_types();
        $template['content'] = $this->load->view('admin/settings/gst/index', $data, TRUE);
         $this->load->view('admin/template_DT', $template); //For data tables only template
         }

         public function add()
	{   
           
        
                $models = array(
                            'Common_model' => 'common',
                                );
                $this->load->model($models);
		if(isset($_POST['add']))
		{
            $parameters = array(
            'gst_percentage' => $this->input->post('gst')?$this->input->post('gst'):0,
            'category_type_id' => $this->input->post('category_type_id')?$this->input->post('category_type_id'):0,
            'gst_condition' => 0,
           );
            if($this->common->insertdata($tablename="gst",$parameters))
            {
                redirect("admin/Settings");
            }
		}
	}
    
	
	
       
    
     public function gstAjaxList()
	{
             $this->load->model('admin/SettingsDT_model','settings');
		$list = $this->settings->get_datatables();
		
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $gst) {
                        $full_url = base_url()."admin/settings/edit/".$gst->gst_id;
                        $view_url = base_url()."admin/settings/details/".$gst->gst_id;
                      
			$no++;
			$row = array();
			$row[] = $no;
                        $row[] = $gst->gst_percentage." %";
                        $row[] = $gst->category_type;
		
             
			//$row[] = "<a href='$full_url' class='btn green'> <i class='fa fa-edit'></i> </a><a class='product_id delete red btn p$gst->gst_id' data-pname='$gst->gst_percentage' data-id='$gst->gst_id'> <i class='fa fa-trash'></i> </a>";

			$data[] = $row;
		}
                
		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->settings->count_all(),
						"recordsFiltered" => $this->settings->count_filtered(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
		
	}
    
}
