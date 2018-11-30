<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class ManufactureDate extends CI_Controller {

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
             $data['title']='Manufacture Date';
         
				$this->load->model(array('common_model'=>'common'));
				
			
              
	    $data['datatable_path']= "admin/dataMgnt/ManufactureDate/ajax_list";// must and should declare this value
            
            $template['content'] = $this->load->view('admin/DataMgnt/ManufactureDate/index', $data, TRUE);
            $this->load->view('admin/template_DT',$template);//For data tables only template
	}
	public function add()
	{ 
	
            	
				    $this->load->model(array('common_model'=>'common'));
                if($this->input->post('variant_name') !="")
				{
                 
     				 $manufacture_year = $this->input->post('variant_name');
                  
               
                         $data = array(
                        
                         'manufacture_year' => $manufacture_year
			           );
                        $insert_id = $this->common->insertdata($tablename = "manufacture_year", $data);
						// echo $this->db->last_query();
						//print_r($insert_id );
		         }
                
	
                redirect('admin/dataMgnt/ManufactureDate/index');
				
	}
	
        
	public function edit($id)
	{   
                 $this->load->model(array('common_model'=>'common'));
             
			  $cols1="*";
			  $where_cond1 = array('manufacture_year_id' => $id);
		       $data['attributes'] = $this->common->getTableData("manufacture_year", $cols1,$where_cond1); //attribute name and id are seperated by tild(~)
	          
			   
			 $template['content'] = $this->load->view('admin/DataMgnt/ManufactureDate/edit', $data, TRUE);
              $this->load->view('admin/template', $template);

	}
        public function destroy($id) {
			
            $this->load->model(array('common_model'=>'common'));
            if($this->common->deleteTable("manufacture_year","manufacture_year_id", $id))
		  {
			redirect('admin/dataMgnt/ManufactureDate/index');
		   }
        }
        public function update($id) {
			
			 $this->load->model(array('common_model'=>'common'));
			 
              $where_cond = array('manufacture_year_id' => $id);
			  
             
              $data['manufacture_year'] = $this->input->post('attribute_name')?$this->input->post('attribute_name'):'';
          
            if($this->common->update($tablename='manufacture_year',$data,$where_cond))
		    {
			  redirect('admin/dataMgnt/ManufactureDate/index');
		    }
		    
		
		
        }
       public function ajax_list()
	  {
             $this->load->model('admin/dataMgnt/ManufactureDateDT_Model','customers');
		$list = $this->customers->get_datatables();
		// echo $this->db->last_query();
		// print_r($list);
	//	exit;
		
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $customers) {
                    $full_url = base_url()."admin/dataMgnt/ManufactureDate/edit/".$customers->manufacture_year_id;
			$no++;
			$row = array();
			$row[] = $no;
                      
			
			  $row[] = $customers->manufacture_year;
                        if(isset($this->session->userdata('admin_data')['store_id']) && ($this->session->userdata('admin_data')['store_id']==1)){
			$row[] = "<a href='$full_url' class='btn green'> <i class='fa fa-edit'></i> </a> <a class='delete red btn' data-name='$customers->manufacture_year' data-id='$customers->manufacture_year_id'> <i class='fa fa-trash'></i> </a>";
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
