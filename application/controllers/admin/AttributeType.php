<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class AttributeType extends CI_Controller {
    public function __construct()
	{
            parent::__construct();
             if(!$this->session->userdata('admin_data'))
            {
                redirect("/admin/index/login");
            }
          
		
	}
	/**
	 * @file        : AttributeType.php
         * @type        : Controller
         * @author      : Nagender
         * @description : Adding attribute type in this controller with all actions like add,edit, delete etc.
         * @date        : 12/07/2017
	 *  
	 */
	public function index()
	{
            $this->load->model('admin/AttributeType_model','attributetype');
            $this->load->helper('url');
            $data['title']='Attribute types';
            $data['totaldata'] = $this->attributetype->get_attributetype_array();
            $data['datatable_path']= "admin/AttributeType/ajax_list";// must and should declare this value
            
            $template['content'] = $this->load->view('admin/attributetypes/index', $data, TRUE);
            $this->load->view('admin/template_DT',$template);//For data tables only template
	}
	public function add()
	{
            $this->load->model('admin/AttributeType_model','attributetype');
            if($this->input->post('attribute_type') !=''){
		if($this->attributetype->insert_entry())
		{
               $this->session->set_flashdata('message', 'Attribute type '. $this->input->post('attribute_type').' Added');
        	redirect('/admin/AttributeType/index/');
		}
            }

	
	}
        /*public function showlist()
	{
		$this->load->model('admin/AttributeType_model','attributetype');
		$data['attributetypes'] = $this->attributetype->get_attributetype();
		$this->load->view('admin/attributetypes/list',$data);
	}*/
	public function edit($id)
	{
		$this->load->model('admin/AttributeType_model','attributetype');
                $data['edit_types'] = $this->attributetype->get_attributetype($id);
		if(!isset($_POST['update']))
		{
		
                $template['content'] = $this->load->view('admin/attributetypes/edit', $data, TRUE);
		
		}else
		{
			if($this->attributetype->update_entry($id))
		{
                    $this->session->set_flashdata('message', 'Attribute type '. $data['edit_types'][0]->attribute_type." Updated as ".$this->input->post('attribute_type'));
			redirect('/admin/AttributeType/index/');
		}
		}
            $this->load->view('admin/template',$template);//For data tables only template
	}
        public function ajax_list()
	{
             $this->load->model('admin/AttributeTypeDT_model','customers');
		$list = $this->customers->get_datatables();
		
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $customers) {
                    $full_url = base_url()."admin/AttributeType/edit/".$customers->attribute_type_id;
			$no++;
			$row = array();
			$row[] = $no;
			$row[] = $customers->attribute_type;
                        if(isset($this->session->userdata('admin_data')['store_id']) && ($this->session->userdata('admin_data')['store_id']==1)){
			$row[] = "<a href='$full_url' class='btn green'> <i class='fa fa-edit'></i> </a> <a class='delete red btn' data-name='$customers->attribute_type' data-id='$customers->attribute_type_id'> <i class='fa fa-trash'></i> </a>";
                        }
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
        public function deletedata()
	{
                $id = $this->input->post('attribute_type_id')?$this->input->post('attribute_type_id'):0;
                if($id>0)
                {
		$this->load->model('admin/AttributeType_model','attributetype');
		$data['result'] = $this->attributetype->row_delete($id);
                return $data['result'];
                }
		//$this->load->view('admin/attributetypes/list',$data);
	}
}
