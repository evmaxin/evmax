<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Mechanics extends CI_Controller {

	/**
         * @file        : DeliveryLocation
         * @type        : Controller
         * @author      : Nagender
         * @description : All DeliveryLocation related operations will be performed here
         * @date        : 07/09/2018
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
        $this->load->model(array('Common_model' => 'common'));
        $data['datatable_path'] = "admin/Mechanics/ajax_list"; // must and should declare this value
        $data['states'] = $this->common->getTableData($tablename = "state", $cols = "state_id,state_name,status",array(),"asc","state_name");
        $template['content'] = $this->load->view('admin/mechanics/index', $data, TRUE);
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
                'company_name' => $this->input->post('company_name'),
                 'lat' => $this->input->post('lat'),
                'lang' => $this->input->post('lang'),
                 'person_name' => $this->input->post('person_name'),
                'cont_number' => $this->input->post('cont_number'),
                 'cont_email' => $this->input->post('cont_email'),
                'plot_flat' => $this->input->post('plot_flat'),
                'address1' => $this->input->post('address1'),
                'address2' => $this->input->post('address2'),
                'city' => $this->input->post('city'),
                'state' => $this->input->post('state'),
                'pincode' => $this->input->post('pincode'),
                'store_id' => $store_id,
               
                
            );
          $res = $this->common->insertdata($tablename = "mechanics", $parameters);
            
          //print_r($parameters); exit;
             //image upload
    
             if ($res>0) {
            $this->session->set_flashdata('success', 'Mechanic locations added successfully');
             }
           redirect('/admin/Mechanics/');
        }
    
	public function edit($id)
	{   
           
             $this->input->post('target_tab');
                $models = array(
                            'admin/Mechanics_model' =>'alias',
                           'Common_model' => 'common'
                                );
                $this->load->model($models);
                 $data['states'] = $this->common->getTableData($tablename = "state", $cols = "state_id,state_name,status",array(),"asc","state_name");
		if(!isset($_POST['update']))
		{
            $data['products'] = $this->alias->get_details($id);
	
            $template['content'] = $this->load->view('admin/mechanics/edit', $data, TRUE);
            $this->load->view('admin/template', $template);

		}
	}
        public function update($pid) {

        $id = ($this->uri->segment('4'))?$this->uri->segment('4'):$pid;  //product id 
        
        //varibale initilization
       
        $this->load->model(array('admin/Attribute_model'=>'attribute','admin/Category_model'=>'category','admin/AttributeType_model'=>'attributetype','admin/Product_model'=>'product','Common_model'=>'common'));
         //   $data['attributetype'] = $this->attributetype->get_attributetype();
	//$data['attributes'] = $this->attribute->get_attributes();
         //   $data['categories'] = $this->category->get_category();
      
      

         $parameters = array(
                'company_name' => $this->input->post('company_name'),
                 'lat' => $this->input->post('lat'),
                'lang' => $this->input->post('lang'),
                 'person_name' => $this->input->post('person_name'),
                'cont_number' => $this->input->post('cont_number'),
                 'cont_email' => $this->input->post('cont_email'),
                'plot_flat' => $this->input->post('plot_flat'),
                'address1' => $this->input->post('address1'),
                'address2' => $this->input->post('address2'),
                'city' => $this->input->post('city'),
                'state' => $this->input->post('state'),
                'pincode' => $this->input->post('pincode'),
                //'store_id' => $store_id,
               
                
            );
        
             $where_cond = array(
                            "id" => $id, 
                            
                        );
             $result = $this->common->update($table='mechanics', $parameters, $where_cond);

            $target_tab =$this->input->post('target_tab')?$this->input->post('target_tab'):'1';
           // $this->session->set_userdata('target_tab',$target_tab);
        if($result) { redirect('/admin/mechanics/index/'); }
    }
  
    public function ajax_list()
	{
             $this->load->model('admin/MechanicsDT_model','alias');
		$list = $this->alias->get_datatables();
		//echo $this->db->last_query(); exit;
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $product) {
                        $full_url = base_url()."admin/Mechanics/edit/".$product->id;
                        $view_url = base_url()."admin/Mechanics/details/".$product->id;
			$no++;
			$row = array();
                       $row[] = $product->company_name;
                       $row[] = $product->lat;
                       $row[] = $product->lang;
                        $row[] = $product->person_name;
                        $row[] = $product->cont_number;
                        $row[] =$product->cont_email;
                      
                       $row[] = $product->plot_flat;
                        $row[] = $product->address1;
                        $row[] = $product->address2;
                        $row[] = $product->city;
                     
                        $row[] = $product->state_name;
                    
                      $row[] = $product->pincode;
                      
			$row[] = "<a href='$full_url' class='btn green'> Edit</i> </a>";
                       

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
