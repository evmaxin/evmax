<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class SubMenu extends CI_Controller {

	/**
         * @file        : Menu
         * @type        : Controller
         * @author      : Nagender
         * @description : 
         * @date        : 24/10/2018
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
        $data['datatable_path'] = "admin/SubMenu/ajax_list"; // must and should declare this value
       $data['menu'] = $this->common->getTableData($tablename = "menu", $cols = "menu_id,name",array(),"asc","name");
        $template['content'] = $this->load->view('admin/menu/submenuindex', $data, TRUE);
        $this->load->view('admin/template_DT', $template); //For data tables only template
         }
    


      
   
	public function add() {
            $config = array(
        array(
                'field' => 'name',
                'label' => 'Name',
                'rules' => 'trim|required|min_length[2]'
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
                'menu_id' => $this->input->post('menu_id'),
                'name' => $this->input->post('name'),
                'url' => $this->input->post('url'),
            'open_link_in_newpage' => $this->input->post('open_link_in_newpage'),
          'menuorder' => $this->input->post('menuorder')
               );
          $res = $this->common->insertdata($tablename = "submenu", $parameters);
             if ($res>0) {
            $this->session->set_flashdata('success', 'SubMenu added successfully');
             }
             redirect('/admin/SubMenu/');
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
              'submenu_id' => $id
               );
              
             $data['products'] = $this->common->getTableData("submenu","submenu_id,menu_id,name,url,menuorder,open_link_in_newpage",$where_cond);
             $data['menu'] = $this->common->getTableData("menu", "menu_id,name",array(),"asc","name");
	
            $template['content'] = $this->load->view('admin/menu/submenuedit', $data, TRUE);
            $this->load->view('admin/template', $template);

		}
	}
        public function update($pid) {

        $id = ($this->uri->segment('4'))?$this->uri->segment('4'):$pid;  //product id 
        
        //varibale initilization
       
        $this->load->model(array('Common_model'=>'common'));
  
         $parameters = array(
                'menu_id' => $this->input->post('menu_id'),
             'name' => $this->input->post('name'),
               'url' => $this->input->post('url'),
             'open_link_in_newpage' => $this->input->post('open_link_in_newpage'),
             'menuorder' => $this->input->post('menuorder')
               
                
            );
        
             $where_cond = array(
                            "submenu_id" => $id, 
                            
                        );
             $result = $this->common->update($table='submenu', $parameters, $where_cond);

            //$target_tab =$this->input->post('target_tab')?$this->input->post('target_tab'):'1';
           // $this->session->set_userdata('target_tab',$target_tab);
        if($result) { redirect('/admin/SubMenu/index/'); }
    }
  
    public function ajax_list()
	{
             $this->load->model('admin/SubMenuDT_model','alias');
		$list = $this->alias->get_datatables();
		//echo $this->db->last_query(); exit;
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $value) {
                        $full_url = base_url()."admin/SubMenu/edit/".$value->submenu_id;
                       // $view_url = base_url()."admin/PickupLocation/details/".$product->id;
			$no++;
			$row = array();
                        $row[] = $value->mainmenu;
                       $row[] = $value->name;
                        $row[] = $value->url;
                       $row[] = $value->order;
                      if($value->status==1){
			$row[] = "<a href='$full_url' class='btn green'> Edit</i></a><a title='Deactivate' class='operation marginleft delete red btn p$value->submenu_id' data-type='deactivate' data-pname='$value->name' data-id='$value->submenu_id'> Deactivate </a>";
                      }
                      else{
                          $row[] = "<a href='$full_url' class='btn green'> Edit</i></a><a title='Activate' class='operation marginleft activate green btn p$value->submenu_id' data-type='activate' data-pname='$value->name' data-id='$value->submenu_id'> Activate </a>";
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
            $res = $this->common->modelAction($table="submenu",$col="status",$id,$type,$table_id="submenu_id"); // table name,update col name,$id value(ex:1 or 2),$type means act or deact,$table_id means table primary col id(ex:menu_id)
            
        }
        echo $res;
        }
      
}
