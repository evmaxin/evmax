<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Attributes extends CI_Controller {

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
            $data['title']='Attributes';
          $this->load->model(array('admin/AttributeType_model' => 'attributetype','admin/Category_model' => 'category'));
        //$this->load->model('admin/AttributeType_model','attributetype');
            $data['attributetype'] = $this->attributetype->get_attributetype();
            $data['categories_types'] = $this->category->get_category_types();
            $data['categories'] = $this->category->get_category();
	    $data['datatable_path']= "admin/Attributes/ajax_list";// must and should declare this value
            
            $template['content'] = $this->load->view('admin/attributes/index', $data, TRUE);
            $this->load->view('admin/template_DT',$template);//For data tables only template
	}
	public function add()
	{
           	$this->load->model('admin/Attribute_model','attribute');
                if($this->input->post('attribute_name') !=""){
                    $atrs = explode(",", $this->input->post('attribute_name'));
                    print_r($atrs); echo $this->input->post('category_id');
                if(is_array($atrs) && count($atrs)>0)
                {
                    foreach ($atrs as $val):
                     $attribute_id = $this->attribute->insert_entry($val);
                
                
		if($attribute_id>0)
		{
                    $this->attribute->insert_attribute_category($attribute_id);
			
		}
                  endforeach;
               
                }
                }
                
                redirect('/admin/attributes/index/');
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
                $models = array(
                            'admin/AttributeType_model' => 'attributetype',
                            'admin/Attribute_model' => 'attribute',
                            'admin/Category_model' => 'category'
                                );
                $this->load->model($models);
                $data['attributetype'] = $this->attributetype->get_attributetype();
                $data['categories'] = $this->category->get_category();
		$data['attributes'] = $this->attribute->get_attributes($id); //attribute name and id are seperated by tild(~)
	    $template['content'] = $this->load->view('admin/attributes/edit', $data, TRUE);
            $this->load->view('admin/template', $template);

	}
        public function destroy($id) {
            $this->load->model('admin/Attribute_model','attribute');
            if($this->attribute->destroy($id))
		{
			redirect('/admin/attributes/index/');
		}
        }
        public function update($id) {
            $this->load->model('admin/Attribute_model','attribute');
            if($this->attribute->update_entry($id))
		{
			redirect('/admin/attributes/index/');
		}
        }
        public function ajax_list()
	{
             $this->load->model('admin/AttributeDT_model','customers');
		$list = $this->customers->get_datatables();
		
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $customers) {
                    $full_url = base_url()."admin/attributes/edit/".$customers->attribute_id;
			$no++;
			$row = array();
			$row[] = $no;
                        $row[] = $customers->attribute_type;
			$row[] = $customers->name;
                        if(isset($this->session->userdata('admin_data')['store_id']) && ($this->session->userdata('admin_data')['store_id']==1)){
			$row[] = "<a href='$full_url' class='btn green'> <i class='fa fa-edit'></i> </a> <a class='delete red btn' data-name='$customers->name' data-id='$customers->attribute_id'> <i class='fa fa-trash'></i> </a>";
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
}
