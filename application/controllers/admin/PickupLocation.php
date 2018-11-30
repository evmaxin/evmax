<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class PickupLocation extends CI_Controller {

	/**
         * @file        : PickupLocation
         * @type        : Controller
         * @author      : Nagender
         * @description : All PickupLocation related operations will be performed here
         * @date        : 10/10/2018
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
	public function index() {
              $data['title'] = "";
            //Product attributes will be appeared based on Category Type with AJAX
        $this->load->model(array('admin/PickupLocation_model' => 'category','Common_model' => 'common'));
        $data['datatable_path'] = "admin/PickupLocation/ajax_list"; // must and should declare this value
        $data['states'] = $this->common->getTableData($tablename = "state", $cols = "state_id,state_name,status",array(),"asc","state_name");
        $template['content'] = $this->load->view('admin/pickuplocation/index', $data, TRUE);
        $this->load->view('admin/template_DT', $template); //For data tables only template
         }
    


      
   
	public function add() {
            
         $this->load->model(array('Common_model' => 'common'));
            $store_id = 0;
            if($this->session->userdata('admin_data'))
            {
                $store_id = $this->session->userdata('admin_data')['store_id'];
            }
          

            $parameters = array(
                'pickup_loc_name' => $this->input->post('pickup_loc_name'),
                'person_name' => $this->input->post('person_name'),
                'cont_number' => $this->input->post('cont_number'),
                 'cont_email' => $this->input->post('cont_email'),
               'address1' => $this->input->post('address1'),
                'address2' => $this->input->post('address2'),
                'city' => $this->input->post('city'),
                'state' => $this->input->post('state'),
                'country' => $this->input->post('country'),
                'pincode' => $this->input->post('pincode'),
                'store_id' => $store_id,
               
                
            );
          $res = $this->common->insertdata($tablename = "pickup_location", $parameters);
            
          //print_r($parameters); exit;
             //image upload
    
             if ($res>0) {
            $this->session->set_flashdata('success', 'Delivery locations added successfully');
             }
           redirect('/admin/PickupLocation/');
        }
    
	public function edit($id)
	{   
           
             $this->input->post('target_tab');
                $models = array(
                            'admin/PickupLocation_model' =>'alias',
                           'Common_model' => 'common'
                                );
                $this->load->model($models);
                 $data['states'] = $this->common->getTableData($tablename = "state", $cols = "state_id,state_name,status",array(),"asc","state_name");
		if(!isset($_POST['update']))
		{
            $data['products'] = $this->alias->get_details($id);
	
            $template['content'] = $this->load->view('admin/PickupLocation/edit', $data, TRUE);
            $this->load->view('admin/template', $template);

		}
	}
        public function update($pid) {

        $id = ($this->uri->segment('4'))?$this->uri->segment('4'):$pid;  //product id 
        
        //varibale initilization
       
        $this->load->model(array('Common_model'=>'common'));
  
         $parameters = array(
                'pickup_loc_name' => $this->input->post('pickup_loc_name'),
               'person_name' => $this->input->post('person_name'),
                'cont_number' => $this->input->post('cont_number'),
                 'cont_email' => $this->input->post('cont_email'),
                'address1' => $this->input->post('address1'),
                'address2' => $this->input->post('address2'),
                'city' => $this->input->post('city'),
                'state' => $this->input->post('state'),
                'pincode' => $this->input->post('pincode'),
             'country' => $this->input->post('country'),
                //'store_id' => $store_id,
               
                
            );
        
             $where_cond = array(
                            "id" => $id, 
                            
                        );
             $result = $this->common->update($table='pickup_location', $parameters, $where_cond);

            $target_tab =$this->input->post('target_tab')?$this->input->post('target_tab'):'1';
           // $this->session->set_userdata('target_tab',$target_tab);
        if($result) { redirect('/admin/PickupLocation/index/'); }
    }
  
    public function ajax_list()
	{
             $this->load->model('admin/PickupLocationDT_model','alias');
		$list = $this->alias->get_datatables();
		//echo $this->db->last_query(); exit;
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $product) {
                        $full_url = base_url()."admin/PickupLocation/edit/".$product->id;
                       // $view_url = base_url()."admin/PickupLocation/details/".$product->id;
			$no++;
			$row = array();
                       $row[] = $product->pickup_loc_name;
                        $row[] = $product->person_name;
                        $row[] = $product->cont_number;
                        $row[] =$product->cont_email;
                      if($this->session->userdata('admin_data')['store_id'] === '1'){
                      $row[] = $product->store_name;
                      }
                        $row[] = $product->address1;
                        $row[] = $product->address2;
                        $row[] = $product->city;
                     
                        $row[] = $product->state_name;
                        $row[] = $product->country;
                    
                      $row[] = $product->pincode;
                      if($product->status==1){
			$row[] = "<a href='$full_url' class='btn green'> Edit</i></a><a title='Deactivate' class='product_id marginleft delete red btn p$product->id' data-type='deactivate' data-pname='$product->pickup_loc_name' data-id='$product->id'> Deactivate </a>";
                      }
                      else{
                          $row[] = "<a href='$full_url' class='btn green'> Edit</i></a><a title='Activate' class='product_id marginleft activate green btn p$product->id' data-type='activate' data-pname='$product->pickup_loc_name' data-id='$product->id'> Activate </a>";
                      }
                       // $row[] = "<a href='$full_url' class='btn green'> Edit</i> </a>";
                       

			$data[] = $row;
		}
                
		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->alias->count_all(),
						"recordsFiltered" => $this->alias->count_filtered(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
		
	}
      
}
