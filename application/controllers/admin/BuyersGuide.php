<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class BuyersGuide extends CI_Controller {

	/**
         * @file        : BuyersGuide
         * @type        : Controller
         * @author      : Nagender
         * @description : 
         * @date        : 05/11/2018
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
      //  $this->load->model(array('Common_model' => 'common'));
        $data['datatable_path'] = "admin/BuyersGuide/ajax_list"; // must and should declare this value
       // $data['states'] = $this->common->getTableData($tablename = "state", $cols = "state_id,state_name,status",array(),"asc","state_name");
        $template['content'] = $this->load->view('admin/buyersguide/index', $data, TRUE);
        $this->load->view('admin/template_DT', $template); //For data tables only template
         }
    


      
   
	public function add() {
            $config = array(
        array(
                'field' => 'title',
                'label' => 'Title',
                'rules' => 'trim|required|min_length[10]'
        ),
         array(
                'field' => 'post',
                'label' => 'Description',
                'rules' => 'trim|required|min_length[10]'
        )
);

$this->form_validation->set_rules($config);
            if ($this->form_validation->run() == FALSE)
                {
                        $this->index();
                }
                else
                {
      $this->load->model(array('Common_model' => 'common'));
        
      $parameters = array(
                'title' => $this->input->post('title'),
                'post' => $this->input->post('post'),
                'created_date' => date('Y-m-d H:i:s')
               );
          $res = $this->common->insertdata($tablename = "buyer_guide", $parameters);
             if ($res>0) {
            $this->session->set_flashdata('success', 'Data added successfully');
             }
             redirect('/admin/BuyersGuide/');
                }
        
          
        }
    
	public function edit($id)
	{   
           
            // $this->input->post('target_tab');
                $models = array(
                            //admin/PickupLocation_model' =>'alias',
                           'Common_model' => 'common'
                                );
                $this->load->model($models);
               
		if(!isset($_POST['update']))
		{
                    $where_cond = array(
              'buyer_guide_id' => $id
               );
             $data['products'] = $this->common->getTableData("buyer_guide","buyer_guide_id,title,post",$where_cond);
	
            $template['content'] = $this->load->view('admin/buyersguide/edit', $data, TRUE);
            $this->load->view('admin/template', $template);

		}
	}
        public function update($pid) {

        $id = ($this->uri->segment('4'))?$this->uri->segment('4'):$pid;  //product id 
        
        //varibale initilization
       
        $this->load->model(array('Common_model'=>'common'));
  
        $parameters = array(
                'title' => $this->input->post('title'),
                'post' => $this->input->post('post'),
                'created_date' => date('Y-m-d H:i:s')
               );
        
             $where_cond = array(
                            "buyer_guide_id" => $id, 
                            
                        );
             $result = $this->common->update($table='buyer_guide', $parameters, $where_cond);

            //$target_tab =$this->input->post('target_tab')?$this->input->post('target_tab'):'1';
           // $this->session->set_userdata('target_tab',$target_tab);
        if($result) { redirect('/admin/BuyersGuide/index/'); }
    }
  
    public function ajax_list()
	{
             $this->load->model('admin/BuyersGuideDT_model','alias');
		$list = $this->alias->get_datatables();
		//echo $this->db->last_query(); exit;
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $value) {
                        $full_url = base_url()."admin/BuyersGuide/edit/".$value->buyer_guide_id;
                       // $view_url = base_url()."admin/PickupLocation/details/".$product->id;
			$no++;
			$row = array();
                       $row[] = $value->title;
                        $row[] = $value->post;
                      //  $row[] = $value->menuorder;
                      
                      if($value->status==1){
			$row[] = "<a href='$full_url' class='btn green'> Edit</i></a><a title='Deactivate' class='operation marginleft delete red btn p$value->buyer_guide_id' data-type='deactivate' data-pname='$value->title' data-id='$value->buyer_guide_id'> Deactivate </a>";
                      }
                      else{
                          $row[] = "<a href='$full_url' class='btn green'> Edit</i></a><a title='Activate' class='operation marginleft activate green btn p$value->buyer_guide_id' data-type='activate' data-pname='$value->title' data-id='$value->buyer_guide_id'> Activate </a>";
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
          public function eventOnContlr() {
             $this->load->model(array('Common_model' => 'common'));
             $id = 0; //to read prod id
        if ($this->input->post('id'))
        {
            $id = $this->input->post('id');
            $type = $this->input->post('typeofAction');
            $res = $this->common->modelAction($table="buyer_guide",$col="status",$id,$type,$table_id="buyer_guide_id"); // table name,update col name,$id value(ex:1 or 2),$type means act or deact,$table_id means table primary col id(ex:menu_id)
        }
        echo $res;
        }
      
}
