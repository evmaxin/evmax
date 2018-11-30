<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {

	/**
	 * @file        : Category.php
         * @type        : Controller
         * @author      : Nagender
         * @description : Adding category and sub categories in this controller with all actions like add,edit, delete etc.
         * @date        : 11/0702017
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
             $data['title']='Category';
         
				$this->load->model(array('common_model'=>'common'));
				
				//$cols="category_id,category_name";
			   //$data['attributetype'] = $this->common->getTableData("category", $cols,$where_cond='');
               $data['menu'] = $this->common->getTableData($tablename = "menu", $cols = "menu_id,name",array(),"asc","name");
	    $data['datatable_path']= "admin/Category/ajax_list";// must and should declare this value
            
            $template['content'] = $this->load->view('admin/category/index', $data, TRUE);
            $this->load->view('admin/template_DT',$template);//For data tables only template
	}
	public function index1()
	{
		//$this->load->model('admin/Category_model','category');
                $this->load->model(array('Common_model' => 'common','admin/Category_model'=>'category'));
		$data['categories'] = $this->category->get_category($id=0);
                $data['categoriestype'] = $this->category->get_category_types($id=0);
              $data['menu'] = $this->common->getTableData($tablename = "menu", $cols = "menu_id,name",array(),"asc","name");
		//$this->load->view('admin/category/addCategory',$data);
                $template['content'] = $this->load->view('admin/category/addCategory', $data, TRUE);
                 $this->load->view('admin/template',$template);
	}
	public function addCategory()
	{
            //echo $_POST['parent_id']; exit;
		$this->load->model('admin/category_model','category');
		if($this->category->insert_entry())
		{
                    $this->session->set_flashdata('success', 'Category '. $this->input->post('category_name').' Added successfully');
			redirect('/admin/Category/index/');
		}
	}
	public function showlist()
	{
		$this->load->model('admin/category_model','category');
		$data['categories'] = $this->category->get_category($id=0);
                $this->load->view('admin/category/list',$data);
	}
        public function showHierarchy()
	{
		$this->load->model('admin/category_model','category');
		$data['categories'] = $this->category->get_category($id=0);
		$template['content'] = $this->load->view('admin/category/show', $data, TRUE);
                $this->load->view('admin/template',$template);
	}
	public function edit($id)
	{
		//$this->load->model('admin/category_model','category');
                $this->load->model(array('Common_model' => 'common','admin/Category_model'=>'category'));
                $data['menu'] = $this->common->getTableData($tablename = "menu", $cols = "menu_id,name",array(),"asc","name");
                $data['submenu'] = $this->common->getTableData($tablename = "submenu", $cols = "submenu_id,name",array(),"asc","name");
                //$data['categoriestype'] = $this->category->get_category_types($cid=0);
                $data['edit_categories'] = $this->category->get_category($id);
              //  echo $this->db->last_query();
		//$data['categories'] = $this->category->get_category($id=0);
		
                //$this->load->view('admin/category/editCategory',$data);
                $template['content'] = $this->load->view('admin/category/editCategory', $data, TRUE);
                $this->load->view('admin/template',$template);
	}
        public function update($id)
	{
		$this->load->model('admin/category_model','category');
                if($this->category->update_entry($id))
		{
                    $this->session->set_flashdata('success', 'Category details updated successfully');
              	redirect('admin/Category/');
		}
	}
        public function ajax_list()
	  {
             $this->load->model('admin/CategoryDT_Model','customers');
		$list = $this->customers->get_datatables();
		// echo $this->db->last_query();
		// print_r($list);
	//	exit;
		
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $customers) {
                    $full_url = base_url()."admin/Category/edit/".$customers->category_id;
			$no++;
			$row = array();
			//$row[] = $no;
                      $row[] = $customers->category_name;
			//  $row[] = $customers->name;
                        if(isset($this->session->userdata('admin_data')['store_id']) && ($this->session->userdata('admin_data')['store_id']==1)){
			$row[] = "<a href='$full_url' class='btn green'> <i class='fa fa-edit'></i> </a> <a class='delete red btn' data-name='$customers->category_name' data-id='$customers->category_id'> <i class='fa fa-trash'></i> </a>";
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
