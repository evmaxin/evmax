<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class AddVarient extends CI_Controller {

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
             $data['title']='Add Varient';
         
				$this->load->model(array('common_model'=>'common'));
				
				$cols="model_id,model_name";
			   $data['attributetype'] = $this->common->getTableData("model", $cols,$where_cond='');
              
	    $data['datatable_path']= "admin/dataMgnt/AddVarient/ajax_list";// must and should declare this value
            
            $template['content'] = $this->load->view('admin/DataMgnt/AddVarient/index', $data, TRUE);
            $this->load->view('admin/template_DT',$template);//For data tables only template
	}
	public function add()
	{ 
	
            	
				    $this->load->model(array('common_model'=>'common'));
                                    $store_id = $this->session->userdata('admin_data')['store_id']?$this->session->userdata('admin_data')['store_id']:0;
                if($this->input->post('variant_name') !="")
				{
                 
     				 $Model_Name = $this->input->post('variant_name');
                     $model_id=$this->input->post('model_id');
               
                         $data = array(
                         'name' => $Model_Name,
                         'model_id' => $model_id,
                          'store_id' => $store_id
			          );
                        $insert_id = $this->common->insertdata($tablename = "variant", $data);
						// echo $this->db->last_query();
						//print_r($insert_id );
		         }
                
	
                redirect('admin/dataMgnt/AddVarient/index');
				
	}
	
        
	public function edit($id)
	{   
                
				$this->load->model(array('common_model'=>'common'));
				
				$cols="model_id,model_name";
			   $data['attributetype'] = $this->common->getTableData("model",$cols,$where_cond='');
             
			  $cols1="*";
			  $where_cond1 = array('variant_id' => $id);
		       $data['attributes'] = $this->common->getTableData("variant", $cols1,$where_cond1); //attribute name and id are seperated by tild(~)
	          
			   
			 $template['content'] = $this->load->view('admin/DataMgnt/AddVarient/edit', $data, TRUE);
              $this->load->view('admin/template', $template);

	}
        public function destroy($id) {
			
            $this->load->model(array('common_model'=>'common'));
            if($this->common->deleteTable("variant","variant_id", $id))
		  {
			redirect('admin/dataMgnt/AddVarient/index');
		   }
        }
        public function update($id) {
			
			 $this->load->model(array('common_model'=>'common'));
			 
              $where_cond = array('variant_id' => $id);
			  
               $data['model_id'] = $this->input->post('attribute_type')?$this->input->post('attribute_type'):'';
              $data['name'] = $this->input->post('attribute_name')?$this->input->post('attribute_name'):'';
          
            if($this->common->update($tablename='variant',$data,$where_cond))
		    {
			  redirect('admin/dataMgnt/AddVarient/index');
		    }
		    
		
		
        }
        public function ajax_list()
	  {
            $store_id = $this->session->userdata('admin_data')['store_id']?$this->session->userdata('admin_data')['store_id']:0;
             $this->load->model('admin/dataMgnt/Add_VarientDT_Model','customers');
		$list = $this->customers->get_datatables();
		// echo $this->db->last_query();
		// print_r($list);
	//	exit;
		
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $customers) {
                    $full_url = base_url()."admin/dataMgnt/AddVarient/edit/".$customers->variant_id;
                    if($store_id === '1'){
                    $delete ="<a class='delete red btn' data-name='$customers->name' data-id='$customers->variant_id'> <i class='fa fa-trash'></i> </a>";
                    }else{
                        $delete="";
                    }
			$no++;
			$row = array();
			$row[] = $no;
                      
			$row[] = $customers->model_name;
			  $row[] = $customers->name;
                       // if(isset($this->session->userdata('admin_data')['store_id']) && ($this->session->userdata('admin_data')['store_id']==1)){
			$row[] = "<a href='$full_url' class='btn green'> <i class='fa fa-edit'></i> </a>$delete";
                       // }
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
