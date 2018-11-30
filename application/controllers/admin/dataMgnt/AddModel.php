<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class AddModel extends CI_Controller {

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
            $data['title']='Add Model';
          $this->load->model(array('admin/dataMgnt/Add_Model' => 'attributetype','admin/Category_model' => 'category'));
        //$this->load->model('admin/AttributeType_model','attributetype');
            $data['attributetype'] = $this->attributetype->get_attributetype();
            $data['categories_types'] = $this->category->get_category_types();
            $data['categories'] = $this->category->get_category();
	    $data['datatable_path']= "admin/dataMgnt/AddModel/ajax_list";// must and should declare this value
            
            $template['content'] = $this->load->view('admin/DataMgnt/addModel/index', $data, TRUE);
            $this->load->view('admin/template_DT',$template);//For data tables only template
	}
	public function add()
	{ 
	
            	$this->load->model('admin/dataMgnt/Add_Model','attribute');
                $store_id = $this->session->userdata('admin_data')['store_id']?$this->session->userdata('admin_data')['store_id']:0;
                if($this->input->post('Model_Name') !="")
				{
                 
     				 $Model_Name = $this->input->post('Model_Name');
                     $m_registration_id=$this->input->post('m_registration_id');
               
                         $data = array(
                         'model_name' => $Model_Name,
                         'make_id' => $m_registration_id,
                         'store_id' => $store_id    
			          );
                        $insert_id = $this->attribute->insertdata($tablename = "model", $data);
						// echo $this->db->last_query();
						//print_r($insert_id );
		         }
                
	
                redirect('admin/dataMgnt/AddModel/index');
				
	}
	public function showlist()
	{
		$this->load->model('admin/Attribute_model','attribute');
		$data['attributes'] = $this->attribute->get_attributes();
                //echo $this->db->last_query();
		$this->load->view('admin/attributes/list',$data);
	}
        
	public function edit($id)
	{   
                
				$this->load->model('admin/dataMgnt/Add_Model','attribute');
				 $data['attributetype'] = $this->attribute->get_attributetype();
              
		 $data['attributes'] = $this->attribute->get_attributes($id); //attribute name and id are seperated by tild(~)
	    $template['content'] = $this->load->view('admin/DataMgnt/addModel/edit', $data, TRUE);
            $this->load->view('admin/template', $template);

	}
        public function destroy($id) {
            $this->load->model('admin/dataMgnt/Add_Model','attribute');
            if($this->attribute->destroy($id))
		{
			redirect('admin/dataMgnt/AddModel/index');
		}
        }
        public function update($id) {
			
            $this->load->model('admin/dataMgnt/Add_Model','attribute');
            if($this->attribute->update_entry($id))
		{
			
		
			redirect('admin/dataMgnt/AddModel/index');
		}
		
        }
        public function ajax_list()
	  {
            $store_id = $this->session->userdata('admin_data')['store_id']?$this->session->userdata('admin_data')['store_id']:0;
             $this->load->model('admin/dataMgnt/Add_ModelDT_Model','customers');
		$list = $this->customers->get_datatables();
		// echo $this->db->last_query();
		// print_r($list);
	//	exit;
		
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $customers) {
                    $full_url = base_url()."admin/dataMgnt/AddModel/edit/".$customers->model_id;
                    if($store_id === '1'){
                    $delete ="<a class='delete red btn' data-name='$customers->model_name' data-id='$customers->model_id'> <i class='fa fa-trash'></i> </a>";
                    }else{
                        $delete="";
                    }
			$no++;
			$row = array();
			$row[] = $no;
                      
			$row[] = $customers->company_name;
			  $row[] = $customers->model_name;
                        //if(isset($this->session->userdata('admin_data')['store_id']) && ($this->session->userdata('admin_data')['store_id']==1)){
			$row[] = "<a href='$full_url' class='btn green'> <i class='fa fa-edit'></i> </a> $delete";
                        //}
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
