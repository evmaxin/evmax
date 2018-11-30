<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class AddSubCategory extends CI_Controller {

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
             $data['title']='Add SubCategory';
         
				$this->load->model(array('common_model'=>'common'));
				
				$cols="category_id,category_name";
			   $data['attributetype'] = $this->common->getTableData("category", $cols,$where_cond='');
              
	    $data['datatable_path']= "admin/dataMgnt/AddSubCategory/ajax_list";// must and should declare this value
            
            $template['content'] = $this->load->view('admin/DataMgnt/AddSubCategory/index', $data, TRUE);
            $this->load->view('admin/template_DT',$template);//For data tables only template
	}
	public function add()
	{ 
	
            	
				    $this->load->model(array('common_model'=>'common'));
                if($this->input->post('variant_name') !="")
				{
                 
     				 $Model_Name = $this->input->post('variant_name');
                     $model_id=$this->input->post('model_id');
               
                         $data = array(
                         'name' => $Model_Name,
                         'category_id' => $model_id
			          );
                        $insert_id = $this->common->insertdata($tablename = "sub_category", $data);
						// echo $this->db->last_query();
						//print_r($insert_id );
		         }
                
	
                redirect('admin/dataMgnt/AddSubCategory/index');
				
	}
	
        
	public function edit($id)
	{   
                
				$this->load->model(array('common_model'=>'common'));
				
				$cols="category_id,category_name";
			   $data['attributetype'] = $this->common->getTableData("category",$cols,$where_cond='');
             
			  $cols1="*";
			  $where_cond1 = array('sub_category_id' => $id);
		       $data['attributes'] = $this->common->getTableData("sub_category", $cols1,$where_cond1); //attribute name and id are seperated by tild(~)
	          
			   
			 $template['content'] = $this->load->view('admin/DataMgnt/AddSubCategory/edit', $data, TRUE);
              $this->load->view('admin/template', $template);

	}
        public function destroy($id) {
			
            $this->load->model(array('common_model'=>'common'));
            if($this->common->deleteTable("sub_category","sub_category_id", $id))
		  {
			redirect('admin/dataMgnt/AddSubCategory/index');
		   }
        }
        public function update($id) {
			
			 $this->load->model(array('common_model'=>'common'));
			 
              $where_cond = array('sub_category_id' => $id);
			  
               $data['category_id'] = $this->input->post('attribute_type')?$this->input->post('attribute_type'):'';
              $data['name'] = $this->input->post('attribute_name')?$this->input->post('attribute_name'):'';
          
            if($this->common->update($tablename='sub_category',$data,$where_cond))
		    {
			  redirect('admin/dataMgnt/AddSubCategory/index');
		    }
		    
		
		
        }
        public function ajax_list()
	  {
             $this->load->model('admin/dataMgnt/AddSubCategoryDT_Model','customers');
		$list = $this->customers->get_datatables();
		// echo $this->db->last_query();
		// print_r($list);
	//	exit;
		
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $customers) {
                    $full_url = base_url()."admin/dataMgnt/AddSubCategory/edit/".$customers->sub_category_id;
			$no++;
			$row = array();
			$row[] = $no;
                      
			$row[] = $customers->category_name;
			  $row[] = $customers->name;
                        if(isset($this->session->userdata('admin_data')['store_id']) && ($this->session->userdata('admin_data')['store_id']==1)){
			$row[] = "<a href='$full_url' class='btn green'> <i class='fa fa-edit'></i> </a> <a class='delete red btn' data-name='$customers->name' data-id='$customers->sub_category_id'> <i class='fa fa-trash'></i> </a>";
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
